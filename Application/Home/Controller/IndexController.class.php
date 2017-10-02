<?php

/*************************************************************************\
|                                                                         |
| 开单大师（专业的房产ERP管理系统）                                       |
|                                                                         |
| Copyright (c) 2008-2017 http://www.kaidandashi.com All rights reserved. |
|                                                                         |
| 本系统由淮南市银泰科技软件有限公司提供技术支持                          |
|                                                                         |
| QQ号：984784483                                                         |
|                                                                         |
\*************************************************************************/

namespace Home\Controller;
use Think\Controller;
use Think\Upload;
use Vendor\ThinkImage\ThinkImage;
class IndexController extends CommonController {
    public function index(){
        $this->user=M('yonghu')->where('id='.session('uid'))->find();
        //手机端页面的首页
        $this->display();
    }
    public function validatepass(){
        if (trim(I('passwd'))=='') {
            $this->error('密码不能为空');
        }
        $passwd = md5(trim(I('passwd')));
        $uid = session('uid');
        $r = M('Yonghu')->where(array('id'=>$uid,'mima'=>$passwd))->getField('id');
        //返回查询结果到异步json
        $data=array('r'=>$r);
        header("Content-type: application/json");
        exit(json_encode($data)); 
    }
    public function updatepass(){
        if (trim(I('passwd'))=='') {
            $this->error('密码不能为空');
        }
        $passwd = md5(trim(I('passwd')));
        $uid = session('uid');
        $r = M('Yonghu')->where(array('id'=>$uid))->setField(array('mima'=>$passwd));
        //返回查询结果到异步json
        $data=array('r'=>$r);
        header("Content-type: application/json");
        exit(json_encode($data));
    }
    public function welcome(){
//输出调取记录
        $Model = new \Think\Model;
        $this->diaoqujl = $Model->table(array('jjrxt_xianzhi'=>'a','jjrxt_yonghu'=>'b','jjrxt_bumen'=>'c','jjrxt_fangyuan'=>'d'))->field('a.shijian,c.bmming,b.ygmingcheng,d.bianhao,d.id')->where('a.uid=b.id and b.bumen=c.id and a.fyid=d.id')->limit(10)->order('a.shijian desc')->select();

        //输出个人信息
        $this->useri=$Model->table(array('jjrxt_yonghu'=>'a','jjrxt_bumen'=>'b'))->field('a.ygmingcheng,a.dianhua,a.touxiang,a.ygbianhao,b.bmming')->where('a.bumen=b.id and a.id='.session('uid'))->find();
        //输出我的收藏
        $condition="gongsiid=".session('gongsiid');
        $shoucang=M('shoucang')->where(array('user_id'=>session('uid')))->select();
        if ($shoucang) {
            foreach ($shoucang as $key => $value) {
                $array[] = $value['fyid'];
            }
            $arr = array_values($array);
            $char = implode(",", $arr);
            $condition.=" and id in ($char)";
        }else{
            $condition.=" and id=0";
        }
        //echo $condition;
        $count=M('fangyuan')->query("select count(*) from __FANGYUAN__ where {$condition}");
        /*p($count);
        die;*/
        $Page  = new \Think\Page($count['0']['count(*)'],10);// 实例化分页类 传入总记录数和每页显示的记录数(25)
        $show  = $Page->show();// 分页显示输出
        // 进行分页数据查询                
        $list="select * from __FANGYUAN__ where {$condition} limit ".$Page->firstRow.','.$Page->listRows;
        $fangyuan=M('fangyuan')->query($list);
        $this->assign('fangyuan',$fangyuan);// 赋值数据集
        $this->assign('count',$count);// 赋值分页输出
        $this->assign('page',$show);
        $this->xingzhengqu=M('xingzhengqu')->where(array('gongsiid'=>session('gongsiid')))->select();
        $this->xiaoqum=M('xiaoqu')->where(array('gongsiid'=>session('gongsiid')))->select();
        $this->zhuangtai=M('Peizhi')->where(array('pzming'=>'zhuangtai'))->select();
        $this->ggleibie=M('Peizhi')->where(array('pzming'=>'ggleibie'))->select();
        $this->zujialx=M('Peizhi')->where(array('pzming'=>'zujialx'))->select();
        $this->leixing=M('Peizhi')->where(array('pzming'=>'leixing'))->select();
        $this->yongtu=M('Peizhi')->where(array('pzming'=>'yongtu'))->select();
        $today=date("m-d");
        $this->user_chankan=M('yonghu')->where(array('id'=>session('uid')))->getField('xzchakan');
        $this->xzchakan=M('xianzhi')->where(array('uid'=>session('uid'),'time'=>$today))->count();
        $this->gonggao=M('Gsgonggao')->group('ggshijian desc')->limit(7)->select();
        $roleuser=M('role_user')->where(array('user_id'=>session('uid')))->getField('role_id');
        $this->remark=M('role')->where(array('id'=>$roleuser))->getField('remark');
        $this->display();// 输出模板
    }
    //显示头像页面
    public function avatar(){
    	$this->display();
    }

	//上传头像
	public function uploadImg(){
		$upload = new Upload(C('UPLOAD_CONFIG'));	// 实例化上传类
		//头像目录地址
		$path = session("gongsiid").'/';
		$upload->savePath = $path;
		if(!$upload->upload()) {						// 上传错误提示错误信息
			$this->ajaxReturn(array('status'=>0,'info'=>$upload->getErrorMsg()));
		}else{											// 上传成功 获取上传文件信息
			$temp_size = getimagesize('./Upload/Avatar/'.$path.'/temp.jpg');
			
			if($temp_size[0] < 200 || $temp_size[1] < 200){//判断宽和高是否符合头像要求
				$this->ajaxReturn(array('status'=>0,'info'=>'图片宽或高不得小于100px！'));
			}
			$this->ajaxReturn(array('status'=>1,'path'=>__ROOT__.'/Upload/Avatar/'.session("gongsiid").'/temp.jpg'));
		}
	}

	//裁剪并保存用户头像
	public function cropImg(){
		//图片裁剪数据
		$params = I('post.');	//裁剪参数
		if(!isset($params) && empty($params)){
			$this->error('参数错误！');
		}

		//头像目录地址
		$path = './Upload/Avatar/'.session("gongsiid").'/';
		//要保存的图片
		$real_path = $path.session('username').'.jpg';
		//临时图片地址
		$pic_path = $path.'temp.jpg';
		
		//实例化裁剪类
		$Think_img = new ThinkImage(THINKIMAGE_GD);
		//裁剪原图得到选中区域
		$Think_img->open($pic_path)->crop($params['w'],$params['h'],$params['x'],$params['y'])->save($real_path);
		
		//生成缩略图
		$Think_img->open($real_path)->thumb(200,200, 1)->save($path.session('username').'_200.jpg');
		$Think_img->open($real_path)->thumb(100,100, 1)->save($path.session('username').'_100.jpg');
		$Think_img->open($real_path)->thumb(60,60, 1)->save($path.session('username').'_60.jpg');
		$Think_img->open($real_path)->thumb(30,30, 1)->save($path.session('username').'_30.jpg');
		@unlink($real_path);
		//更新用户表头像touxiang
		$settouxiang = M('Yonghu')->where(array('id'=>session('uid')))->setField(array('touxiang'=>1));

		$this->success('上传头像成功'.$settouxiang);
	}
}
        
        
        
        
        
        
        
        
        
        
        
        