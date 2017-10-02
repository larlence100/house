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
    class Keyuan1Controller extends CommonController {
        //获取片区
        public function get_citys(){
            $listObj = M('pianqu');
            $where['ssxzq'] = I('province_id');
            $where['gongsiid'] = session('gongsiid');
            $list = $listObj->where($where)->select();
            $data=array('status'=>0,'city'=>$list);
            header("Content-type: application/json");
            exit(json_encode($data));
        }
        //获取小区
        public function get_district(){
            $listObj = M('xiaoqu');
            $where['sspianqu'] = I('city_id');
            $where['gongsiid'] = session('gongsiid');
            $list = $listObj->where($where)->select();
            $data=array('status'=>0,'district'=>$list);
            header("Content-type: application/json");
            exit(json_encode($data));
        }
        public function get_xiaoqu(){
            $txt=I('txt');
            $listObj = M('xiaoqu');
            $where['_string']='(xiaoqum like "%'.$txt.'%")  OR (pinyinjs like "%'.$txt.'%")';
            $where['gongsiid'] = session('gongsiid');
            $list = $listObj->where($where)->limit(10)->select();
            $data=array('status'=>0,'district'=>$list);
            header("Content-type: application/json");
            exit(json_encode($data));
        }
    	public function index(){
            $this->xingzhengqu=M('xingzhengqu')->where(array('gongsiid'=>session('gongsiid')))->select();
            $this->xiaoqum=M('xiaoqu')->where(array('gongsiid'=>session('gongsiid')))->select();
    		$this->display();
    	}
        public function index2(){
            $this->xingzhengqu=M('xingzhengqu')->where(array('gongsiid'=>session('gongsiid')))->select();
            $this->xiaoqum=M('xiaoqu')->where(array('gongsiid'=>session('gongsiid')))->select();
            $this->display();
        }
    	public function addKeyuan(){
    		$this->yongtu=M('Peizhi')->where(array('pzming'=>'yongtu'))->select();
            $this->fukuan=M('Peizhi')->where(array('pzming'=>'fukuan'))->select();
    		$this->chaoxiang=M('Peizhi')->where(array('pzming'=>'chaoxiang'))->select();
			$this->kehulx=M('Peizhi')->where(array('pzming'=>'yezhulx'))->select();
			$this->peitao=M('Peizhi')->where(array('pzming'=>'peitao'))->select();
			$this->laiyuan=M('Peizhi')->where(array('pzming'=>'laiyuan'))->select();
            $this->zhuangxiu=M('Peizhi')->where(array('pzming'=>'zhuangxiu'))->select();
            $this->xflinian=M('Peizhi')->where(array('pzming'=>'xflinian'))->select();
            $this->guoji=M('Peizhi')->where(array('pzming'=>'guoji'))->select();
            $this->minzu=M('Peizhi')->where(array('pzming'=>'minzu'))->select();
            $this->kydengji=M('Peizhi')->where(array('pzming'=>'kydengji'))->select();
            $this->khzhuangtai=M('Peizhi')->where(array('pzming'=>'khzhuangtai'))->select();
            $this->jtgongju=M('Peizhi')->where(array('pzming'=>'jtgongju'))->select();
            $this->gtjieduan=M('Peizhi')->where(array('pzming'=>'gtjieduan'))->select();
            $this->mmzl=M('Peizhi')->where(array('pzming'=>'mmzl'))->select();
            $this->keyuanshu=M('keyuan')->where(array('weihurenid'=>session('uid'),'zhuangtai'=>'1'))->count();
    		$this->display();
    	}
    	public function addKeyuanHandle(){
    		/*p($_GET);
    		die;*/
    		$yonghu=M('yonghu');
            if (!$yonghu->autoCheckToken($_GET)) {
                $this->error('请不要重复添加');
            }
            if (session('gongsiid')=="") {
                $this->error('请重新登录');
            }
            $bh=M('kybianhao')->where(array('gongsiid'=>session('gongsiid')))->setInc('bianhao');

            $bh1=M('kybianhao')->where(array('gongsiid'=>session('gongsiid')))->getField('bianhao');
            if (I('mmzl')=='1') {
            	$bhao='MK';
            }
            if(I('zhuangtai')){
                $zhuangtai=1;
            }else{
                $zhuangtai=0;
            }
            if(I('jiqie')){
                $jiqie=1;
            }else{
                $jiqie=0;
            }
			$data['leixing']=I('leixing');
            $data['zhuangtai']=I('zhuangtai');
            $data['gongsiid']=session('gongsiid');
            $data['xqbianhao']=$bhao.$bh1;
            $data['khxingming']=I('khxingming');
            $data['kehulx']=I('kehulx');
            $data['dianhua']=I('dianhua');
            $data['xqhuxing1']=I('xqhuxing1');
            $data['xqhuxing2']=I('xqhuxing2');
            $data['xqjiage1']=I('xqjiage1');
            $data['xqjiage2']=I('xqjiage2');
            $data['xqmianji1']=I('xqmianji1');
            $data['xqmianji2']=I('xqmianji2');
            $data['xflinian']=I('xflinian');
            $data['jiqie']=I('jiqie');
            $data['fukuan']=I('fukuan');
            $data['louceng1']=I('louceng1');
            $data['louceng2']=I('louceng2');
            $data['xqyongtu']=I('xqyongtu');
            $data['fangling1']=I('fangling1');
            $data['fangling2']=I('fangling2');
            $data['xqquyu']=I('xqquyu');
            $data['xqxiaoqu']=I('xqxiaoqu');
            $cx1=array_keys(I('chaoxiang')); 
    		$cx2=implode(',',$cx1);
            $data['chaoxiang']=$cx2;
            $zx1=array_keys(I('zhuangxiu')); 
    		$zx2=implode(',',$zx1);
            $data['zhuangxiu']=$zx2;
            $pt1=array_keys(I('peitao')); 
    		$pt2=implode(',',$pt1);
            $data['peitao']=$pt2;
            $data['xqyuanyin']=I('xqyuanyin');
            $data['khlaiyuan']=I('khlaiyuan');
            $data['kydengji']=I('kydengji');
            $data['gtjieduan']=I('gtjieduan');
            $data['guoji']=I('guoji');
            $data['minzu']=I('minzu');
            $data['sfzheng']=I('sfzheng');
            $data['qqhao']=I('qqhao');
            $data['youxiang']=I('youxiang');
            $data['weixin']=I('weixin');
            $data['jtgongju']=I('jtgongju');
            $data['chexing']=I('chexing');
            $data['beizhu']=I('beizhu');
            $data['lururenid']=session('uid');
            $data['weihurenid']=session('uid');
            $data['weihuren']=session('ygmingcheng');
            $data['mmzl']=I('mmzl');
			$data['lurusj']=time();
            if (M('Keyuan')->add($data)) {
                $this->success('添加成功');
            }else{
                $this->error('添加失败');
            }
    	}
        public function addKeyuan2(){
            $this->yongtu=M('Peizhi')->where(array('pzming'=>'yongtu'))->select();
            $this->fukuan=M('Peizhi')->where(array('pzming'=>'fukuan'))->select();
            $this->chaoxiang=M('Peizhi')->where(array('pzming'=>'chaoxiang'))->select();
            $this->kehulx=M('Peizhi')->where(array('pzming'=>'yezhulx'))->select();
            $this->peitao=M('Peizhi')->where(array('pzming'=>'peitao'))->select();
            $this->laiyuan=M('Peizhi')->where(array('pzming'=>'laiyuan'))->select();
            $this->zhuangxiu=M('Peizhi')->where(array('pzming'=>'zhuangxiu'))->select();
            $this->xflinian=M('Peizhi')->where(array('pzming'=>'xflinian'))->select();
            $this->guoji=M('Peizhi')->where(array('pzming'=>'guoji'))->select();
            $this->minzu=M('Peizhi')->where(array('pzming'=>'minzu'))->select();
            $this->kydengji=M('Peizhi')->where(array('pzming'=>'kydengji'))->select();
            $this->khzhuangtai=M('Peizhi')->where(array('pzming'=>'khzhuangtai'))->select();
            $this->jtgongju=M('Peizhi')->where(array('pzming'=>'jtgongju'))->select();
            $this->gtjieduan=M('Peizhi')->where(array('pzming'=>'gtjieduan'))->select();
            $this->mmzl=M('Peizhi')->where(array('pzming'=>'mmzl'))->select();
            $this->keyuanshu=M('keyuan')->where(array('weihurenid'=>session('uid'),'zhuangtai'=>'1'))->count();
            $this->display();
        }
        public function addKeyuan2Handle(){
            /*p($_GET);
            die;*/
            $yonghu=M('yonghu');
            if (!$yonghu->autoCheckToken($_GET)) {
                $this->error('请不要重复添加');
            }
            if (session('gongsiid')=="") {
                $this->error('请重新登录');
            }
            $bh=M('kybianhao')->where(array('gongsiid'=>session('gongsiid')))->setInc('bianhao');

            $bh1=M('kybianhao')->where(array('gongsiid'=>session('gongsiid')))->getField('bianhao');
            if (I('mmzl')=='2') {
                $bhao='ZK';
            }
            if(I('zhuangtai')){
                $zhuangtai=1;
            }else{
                $zhuangtai=0;
            }
            if(I('jiqie')){
                $jiqie=1;
            }else{
                $jiqie=0;
            }
            $data['leixing']=I('leixing');
            $data['zhuangtai']=I('zhuangtai');
            $data['gongsiid']=session('gongsiid');
            $data['xqbianhao']=$bhao.$bh1;
            $data['khxingming']=I('khxingming');
            $data['kehulx']=I('kehulx');
            $data['dianhua']=I('dianhua');
            $data['xqhuxing1']=I('xqhuxing1');
            $data['xqhuxing2']=I('xqhuxing2');
            $data['xqjiage1']=I('xqjiage1');
            $data['xqjiage2']=I('xqjiage2');
            $data['xqmianji1']=I('xqmianji1');
            $data['xqmianji2']=I('xqmianji2');
            $data['xflinian']=I('xflinian');
            $data['jiqie']=I('jiqie');
            $data['fukuan']=I('fukuan');
            $data['louceng1']=I('louceng1');
            $data['louceng2']=I('louceng2');
            $data['xqyongtu']=I('xqyongtu');
            $data['fangling1']=I('fangling1');
            $data['fangling2']=I('fangling2');
            $data['xqquyu']=I('xqquyu');
            $data['xqxiaoqu']=I('xqxiaoqu');
            $cx1=array_keys(I('chaoxiang'));
            $cx2=implode(',',$cx1);
            $data['chaoxiang']=$cx2;
            $zx1=array_keys(I('zhuangxiu'));
            $zx2=implode(',',$zx1);
            $data['zhuangxiu']=$zx2;
            $pt1=array_keys(I('peitao'));
            $pt2=implode(',',$pt1);
            $data['peitao']=$pt2;
            $data['xqyuanyin']=I('xqyuanyin');
            $data['khlaiyuan']=I('khlaiyuan');
            $data['kydengji']=I('kydengji');
            $data['gtjieduan']=I('gtjieduan');
            $data['guoji']=I('guoji');
            $data['minzu']=I('minzu');
            $data['sfzheng']=I('sfzheng');
            $data['qqhao']=I('qqhao');
            $data['youxiang']=I('youxiang');
            $data['weixin']=I('weixin');
            $data['jtgongju']=I('jtgongju');
            $data['chexing']=I('chexing');
            $data['beizhu']=I('beizhu');
            $data['lururenid']=session('uid');
            $data['weihurenid']=session('uid');
            $data['weihuren']=session('ygmingcheng');
            $data['mmzl']=I('mmzl');
            $data['lurusj']=time();
            if (M('Keyuan')->add($data)) {
                $this->success('添加成功');
            }else{
                $this->error('添加失败');
            }
        }
    	public function Keyuan1list(){
            if (!IS_GET) {
                $map=array('gongsiid'=>session('gongsiid'),'mmzl'=>1);
                $Data = M('keyuan'); // 实例化Data数据对象  date 是你的表名                
                $count = $Data->where($map)->count();// 查询满足要求的总记录数 $map表示查询条件
                $Page  = new \Think\Page($count,30);// 实例化分页类 传入总记录数和每页显示的记录数(20)
                $show  = $Page->show();// 分页显示输出
                // 进行分页数据查询
                $keyuan = $Data->where($map)->order('id DESC')->limit($Page->firstRow.','.$Page->listRows)->select(); // $Page->firstRow 起始条数 $Page->listRows 获取多少条
                $this->assign('keyuan',$keyuan);// 赋值数据集
                $this->assign('count',$count);// 赋值分页输出
                $this->assign('page',$show);
                $this->xingzhengqu=M('xingzhengqu')->where(array('gongsiid'=>session('gongsiid')))->select();
                $this->xiaoqum=M('xiaoqu')->where(array('gongsiid'=>session('gongsiid')))->select();
                $this->weihu=M('Yonghu')->where(array('gongsiid'=>session('gongsiid')))->select();
                $this->khzhuangtai=M('Peizhi')->where(array('pzming'=>'khzhuangtai'))->select();
                $this->gtjieduan=M('Peizhi')->where(array('pzming'=>'gtjieduan'))->select();
                $this->laiyuan=M('Peizhi')->where(array('pzming'=>'laiyuan'))->select();
                $this->leixing=M('Peizhi')->where(array('pzming'=>'leixing'))->select();
                $this->zujialx=M('Peizhi')->where(array('pzming'=>'zujialx'))->select();
                $this->yongtu=M('Peizhi')->where(array('pzming'=>'yongtu'))->select();
                $this->fukuan=M('Peizhi')->where(array('pzming'=>'fukuan'))->select();
                $this->kehulx=M('Peizhi')->where(array('pzming'=>'yezhulx'))->select();
                $this->display();// 输出模板
            }else{
                $xingzhengqu=$_GET['xingzhengqu'];
                $pianqu=$_GET['pianqu'];
                $xiaoqu=$_GET['xiaoqu'];
                $mysike=$_GET['mysike'];
                $sousuo=$_GET['sousuo'];
                $fengpan=$_GET['fengpan'];
                $jiqie=$_GET['jiqie'];
                $fukuan=$_GET['fukuan'];
                $kehulx=$_GET['yezhulx'];
                $daikan=$_GET['daikan'];
                $qtwhf=$_GET['qtwhf'];
                $stwhf=$_GET['stwhf'];
                $jrll=$_GET['jrll'];
                $xqquyu=$_GET['xqquyu'];
                $xqxiaoqu=$_GET['xqxiaoqu'];
                $kydengji=$_GET['kydengji'];
                $gtjieduan=$_GET['gtjieduan'];
                $guoji=$_GET['guoji'];
                $minzu=$_GET['minzu'];
                $daiqueding=$_GET['daiqueding'];
                $taobaochi=$_GET['taobaochi'];
                $gongke=$_GET['gongke'];
                $youdaikan=$_GET['youdaikan'];
                $xiading=$_GET['xiading'];
                $mykeyuan=$_GET['mykeyuan'];
                $fplujing=$_GET['fplujing'];
                $fpdianhua=$_GET['fpdianhua'];
                $myshoucang=$_GET['myshoucang'];
                $taobaochi=$_GET['taobaochi'];
                $wumenpai=$_GET['wumenpai'];
                $xuequ=$_GET['xuequ'];
                $xflinian=$_GET['xflinian'];
                $jiage=$_GET['jiage'];
                $mianji=$_GET['mianji'];
                $condition="gongsiid=".session('gongsiid');
                $condition.=" and mmzl=1 and (zhuangtai=0 or zhuangtai=1 or zhuangtai=4)";
                if($xingzhengqu){//行政区
                    $condition.=" and xingzhengqu=$xingzhengqu";
                }
                if($pianqu){//片区
                    $condition.=" and pianqu=$pianqu";
                }
                if ($xiaoqu) {//小区
                    $condition.=" and xiaoqu=$xiaoqu";
                }
                if ($xqquyu) {//需求区域
                    $condition.=" and xqquyu=$xqquyu";
                }
                if ($xqxiaoqu) {//需求小区
                    $condition.=" and xqxiaoqu=$xqxiaoqu";
                }
                if ($mysike) {//我的私客
                    $user_id=session('uid');
                    $condition.=" and zhuangtai=1 and weihurenid=$user_id";
                }
                if ($mykeyuan) {//我的客源
                    $user_id=session('uid');
                    $condition.=" and weihurenid=$user_id";
                }
                if ($myshoucang) {//我的收藏
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
                }
                if ($sousuo) {//搜索
                    $condition.=" and (xqbianhao like '%$sousuo%' or khxingming like '%$sousuo%' or xqquyu like '%$sousuo%' or xqxiaoqu like '%$sousuo%' or dianhua like '%$sousuo%' or weihuren like '%$sousuo%')";
                }
                if ($jrll) {//今日浏览
                    $today="ksj".date("m-d");
                    if (!cookie($today)) {
                        $history=0;
                    }else{
                        $history = cookie($today);
                    }
                    $condition.=" and id in ($history)";
                }
                if ($gongke) {//公客
                    $condition.=" and zhuangtai=0";
                }
                if ($fengpan) {//封盘
                    $condition.=" and (zhuangtai=2 or zhuangtai=3 or zhuangtai=4)";
                }
                if ($jiqie) {//急切
                    $condition.=" and jiqie=1";
                }
                if ($daikan) {//带看
                    $condition.=" and daikan=1";
                }
                if ($jiage) {//价格
                    $condition.=" and $jiage>=xqjiage1 and $jiage<=xqjiage2";
                }
                if ($mianji) {//面积
                    $condition.=" and $mianji>=xqmianji1 and $mianji<=xqmianji2";
                }
                $count=M('keyuan')->query("select count(*) from __KEYUAN__ where {$condition}");
                $Page=new \Think\Page($count['0']['count(*)'],30);
                $show=$Page->show();
                $list="select * from __KEYUAN__ where {$condition} order by id DESC limit ".$Page->firstRow.','.$Page->listRows;
                $keyuan=M('keyuan')->query($list);
                $this->assign('keyuan',$keyuan);// 赋值数据集
                $this->assign('count',$count);// 赋值分页输出
                $this->assign('page',$show);
                $this->xingzhengqu=M('xingzhengqu')->where(array('gongsiid'=>session('gongsiid')))->select();
                $this->xiaoqum=M('xiaoqu')->where(array('gongsiid'=>session('gongsiid')))->select();
                $this->weihu=M('Yonghu')->where(array('gongsiid'=>session('gongsiid')))->select();
                $this->khzhuangtai=M('Peizhi')->where(array('pzming'=>'khzhuangtai'))->select();
                $this->gtjieduan=M('Peizhi')->where(array('pzming'=>'gtjieduan'))->select();
                $this->laiyuan=M('Peizhi')->where(array('pzming'=>'laiyuan'))->select();
                $this->leixing=M('Peizhi')->where(array('pzming'=>'leixing'))->select();
                $this->zujialx=M('Peizhi')->where(array('pzming'=>'zujialx'))->select();
                $this->yongtu=M('Peizhi')->where(array('pzming'=>'yongtu'))->select();
                $this->fukuan=M('Peizhi')->where(array('pzming'=>'fukuan'))->select();
                $this->kehulx=M('Peizhi')->where(array('pzming'=>'yezhulx'))->select();
                $today=date("m-d");
                $this->user_chankan=M('yonghu')->where(array('id'=>session('uid')))->getField('xzchakan');
                $this->xzchakan=M('xianzhi')->where(array('uid'=>session('uid'),'time'=>$today))->count();
                $this->display();
            }
        }
        public function Keyuan2list(){
            if (!IS_GET) {
                $map=array('gongsiid'=>session('gongsiid'),'mmzl'=>2);
                $Data = M('keyuan'); // 实例化Data数据对象  date 是你的表名                
                $count = $Data->where($map)->count();// 查询满足要求的总记录数 $map表示查询条件
                $Page  = new \Think\Page($count,30);// 实例化分页类 传入总记录数和每页显示的记录数(20)
                $show  = $Page->show();// 分页显示输出
                // 进行分页数据查询
                $keyuan = $Data->where($map)->order('id DESC')->limit($Page->firstRow.','.$Page->listRows)->select(); // $Page->firstRow 起始条数 $Page->listRows 获取多少条
                $this->assign('keyuan',$keyuan);// 赋值数据集
                $this->assign('count',$count);// 赋值分页输出
                $this->assign('page',$show);
                $this->xingzhengqu=M('xingzhengqu')->where(array('gongsiid'=>session('gongsiid')))->select();
                $this->xiaoqum=M('xiaoqu')->where(array('gongsiid'=>session('gongsiid')))->select();
                $this->weihu=M('Yonghu')->where(array('gongsiid'=>session('gongsiid')))->select();
                $this->khzhuangtai=M('Peizhi')->where(array('pzming'=>'khzhuangtai'))->select();
                $this->gtjieduan=M('Peizhi')->where(array('pzming'=>'gtjieduan'))->select();
                $this->laiyuan=M('Peizhi')->where(array('pzming'=>'laiyuan'))->select();
                $this->leixing=M('Peizhi')->where(array('pzming'=>'leixing'))->select();
                $this->zujialx=M('Peizhi')->where(array('pzming'=>'zujialx'))->select();
                $this->yongtu=M('Peizhi')->where(array('pzming'=>'yongtu'))->select();
                $this->fukuan=M('Peizhi')->where(array('pzming'=>'fukuan'))->select();
                $this->kehulx=M('Peizhi')->where(array('pzming'=>'yezhulx'))->select();
                $this->display();// 输出模板
            }else{
                $xingzhengqu=$_GET['xingzhengqu'];
                $pianqu=$_GET['pianqu'];
                $xiaoqu=$_GET['xiaoqu'];
                $sousuo=$_GET['sousuo'];
                $mysike=$_GET['mysike'];
                $fengpan=$_GET['fengpan'];
                $jiqie=$_GET['jiqie'];
                $fukuan=$_GET['fukuan'];
                $kehulx=$_GET['yezhulx'];
                $daikan=$_GET['daikan'];
                $qtwhf=$_GET['qtwhf'];
                $stwhf=$_GET['stwhf'];
                $jrll=$_GET['jrll'];
                $xqquyu=$_GET['xqquyu'];
                $xqxiaoqu=$_GET['xqxiaoqu'];
                $kydengji=$_GET['kydengji'];
                $gtjieduan=$_GET['gtjieduan'];
                $guoji=$_GET['guoji'];
                $minzu=$_GET['minzu'];
                $daiqueding=$_GET['daiqueding'];
                $taobaochi=$_GET['taobaochi'];
                $gongke=$_GET['gongke'];
                $youdaikan=$_GET['youdaikan'];
                $xiading=$_GET['xiading'];
                $mykeyuan=$_GET['mykeyuan'];
                $fplujing=$_GET['fplujing'];
                $fpdianhua=$_GET['fpdianhua'];
                $myshoucang=$_GET['myshoucang'];
                $taobaochi=$_GET['taobaochi'];
                $wumenpai=$_GET['wumenpai'];
                $xuequ=$_GET['xuequ'];
                $xflinian=$_GET['xflinian'];
                $jiage=$_GET['jiage'];
                $mianji=$_GET['mianji'];
                $condition="gongsiid=".session('gongsiid');
                $condition.=" and mmzl=2 and (zhuangtai=0 or zhuangtai=1 or zhuangtai=4)";
                if($xingzhengqu){//行政区
                    $condition.=" and xingzhengqu=$xingzhengqu";
                }
                if($pianqu){//片区
                    $condition.=" and pianqu=$pianqu";
                }
                if ($xiaoqu) {//小区
                    $condition.=" and xiaoqu=$xiaoqu";
                }
                if ($xqquyu) {//需求区域
                    $condition.=" and xqquyu=$xqquyu";
                }
                if ($xqxiaoqu) {//需求小区
                    $condition.=" and xqxiaoqu=$xqxiaoqu";
                }
                if ($mysike) {//我的私客
                    $user_id=session('uid');
                    $condition.=" and zhuangtai=1 and weihurenid=$user_id";
                }
                if ($mykeyuan) {//我的客源
                    $user_id=session('uid');
                    $condition.=" and weihurenid=$user_id";
                }
                if ($myshoucang) {//我的收藏
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
                }
                if ($sousuo) {//搜索
                    $condition.=" and (xqbianhao like '%$sousuo%' or khxingming like '%$sousuo%' or xqquyu like '%$sousuo%' or xqxiaoqu like '%$sousuo%' or dianhua like '%$sousuo%' or weihuren like '%$sousuo%')";
                }
                if ($jrll) {//今日浏览
                    $today="ksj".date("m-d");
                    if (!cookie($today)) {
                        $history=0;
                    }else{
                        $history = cookie($today);
                    }
                    $condition.=" and id in ($history)";
                }
                if ($gongke) {//公客
                    $condition.=" and zhuangtai=0";
                }
                if ($fengpan) {//封盘
                    $condition.=" and (zhuangtai=2 or zhuangtai=3 or zhuangtai=4)";
                }
                if ($jiqie) {//急切
                    $condition.=" and jiqie=1";
                }
                if ($daikan) {//带看
                    $condition.=" and daikan=1";
                }
                if ($jiage) {//价格
                    $condition.=" and $jiage>=xqjiage1 and $jiage<=xqjiage2";
                }
                if ($mianji) {//面积
                    $condition.=" and $mianji>=xqmianji1 and $mianji<=xqmianji2";
                }
                $count=M('keyuan')->query("select count(*) from __KEYUAN__ where {$condition}");
                $Page=new \Think\Page($count['0']['count(*)'],30);
                $show=$Page->show();
                $list="select * from __KEYUAN__ where {$condition} order by id DESC limit ".$Page->firstRow.','.$Page->listRows;
                $keyuan=M('keyuan')->query($list);
                $this->assign('keyuan',$keyuan);// 赋值数据集
                $this->assign('count',$count);// 赋值分页输出
                $this->assign('page',$show);
                $this->xingzhengqu=M('xingzhengqu')->where(array('gongsiid'=>session('gongsiid')))->select();
                $this->xiaoqum=M('xiaoqu')->where(array('gongsiid'=>session('gongsiid')))->select();
                $this->weihu=M('Yonghu')->where(array('gongsiid'=>session('gongsiid')))->select();
                $this->khzhuangtai=M('Peizhi')->where(array('pzming'=>'khzhuangtai'))->select();
                $this->gtjieduan=M('Peizhi')->where(array('pzming'=>'gtjieduan'))->select();
                $this->laiyuan=M('Peizhi')->where(array('pzming'=>'laiyuan'))->select();
                $this->leixing=M('Peizhi')->where(array('pzming'=>'leixing'))->select();
                $this->zujialx=M('Peizhi')->where(array('pzming'=>'zujialx'))->select();
                $this->yongtu=M('Peizhi')->where(array('pzming'=>'yongtu'))->select();
                $this->fukuan=M('Peizhi')->where(array('pzming'=>'fukuan'))->select();
                $this->kehulx=M('Peizhi')->where(array('pzming'=>'yezhulx'))->select();
                $today=date("m-d");
                $this->user_chankan=M('yonghu')->where(array('id'=>session('uid')))->getField('xzchakan');
                $this->xzchakan=M('xianzhi')->where(array('uid'=>session('uid'),'time'=>$today))->count();
                $this->display();
            }
        }
        public function neirong1(){
            $keyuan=M('Keyuan')->where(array('id'=>I('id'),'gongsiid'=>session('gongsiid')))->find();
            $this->assign('keyuan',$keyuan);
            $this->dianhua=M('Yonghu')->where(array('gongsiid'=>session('gongsiid')))->select();
            $this->lrdh=M('Yonghu')->where(array('id'=>$keyuan['lururenid']))->getField('dianhua');
            $this->whdh=M('Yonghu')->where(array('id'=>$keyuan['weihurenid']))->getField('dianhua');
            $this->fpdh=M('Yonghu')->where(array('id'=>$keyuan['fengpanrenid']))->getField('dianhua');
        	$id=I('id');
            $this->keyuanshu=M('keyuan')->where(array('weihurenid'=>session('uid'),'zhuangtai'=>'1'))->count();
            $this->kygenjin=M('kygenjin')->where(array('gongsiid'=>session('gongsiid'),'kyid'=>$id))->select();
            $this->gjren=M('Yonghu')->where(array('gongsiid'=>session('gongsiid')))->select();
            $this->kydaikan=M('kydaikan')->where(array('gongsiid'=>session('gongsiid'),'kyid'=>$id))->select();
            $qitiannei = time()-604800;
            $this->daikanshu=M('kydaikan')->where('gongsiid ='.session('gongsiid').' and kyid ='.$id.' and dkshijian >'.$qitiannei)->count();
            $this->dkren=M('Yonghu')->where(array('gongsiid'=>session('gongsiid')))->select();
            $this->kytixing=M('kytixing')->where(array('gongsiid'=>session('gongsiid'),'kyid'=>$id))->select();
            $this->txren=M('Yonghu')->where(array('gongsiid'=>session('gongsiid')))->select();
            $this->genjinfs=M('Peizhi')->where(array('pzming'=>'genjinfs'))->select();
            $this->laiyuan=M('Peizhi')->where(array('pzming'=>'laiyuan'))->select();
            $this->kehulx=M('Peizhi')->where(array('pzming'=>'yezhulx'))->select();
            $this->fukuan=M('Peizhi')->where(array('pzming'=>'fukuan'))->select();
            $this->gtjieduan=M('Peizhi')->where(array('pzming'=>'gtjieduan'))->select();
            $this->kydengji=M('Peizhi')->where(array('pzming'=>'kydengji'))->select();
            $this->xflinian=M('Peizhi')->where(array('pzming'=>'xflinian'))->select();
            $this->guoji=M('Peizhi')->where(array('pzming'=>'guoji'))->select();
            $this->minzu=M('Peizhi')->where(array('pzming'=>'minzu'))->select();
            $this->jtgongju=M('Peizhi')->where(array('pzming'=>'jtgongju'))->select();
            $Model = new \Think\Model;
            $this->luru=$Model->table(array('jjrxt_keyuan'=>'a','jjrxt_yonghu'=>'b','jjrxt_bumen'=>'c'))->field('c.bmming,b.ygmingcheng')->where('a.lururenid=b.id and b.bumen=c.id and a.id='.$id)->find();
            $this->weihu=$Model->table(array('jjrxt_keyuan'=>'a','jjrxt_yonghu'=>'b','jjrxt_bumen'=>'c'))->field('c.bmming,b.ygmingcheng')->where('a.weihurenid=b.id and b.bumen=c.id and a.id='.$id)->find();
            $this->fengpan=$Model->table(array('jjrxt_keyuan'=>'a','jjrxt_yonghu'=>'b','jjrxt_bumen'=>'c'))->field('c.bmming,b.ygmingcheng')->where('a.fengpanrenid=b.id and b.bumen=c.id and a.id='.$id)->find();
            $this->kygenjin=$Model->table(array('jjrxt_kygenjin'=>'a','jjrxt_yonghu'=>'b','jjrxt_bumen'=>'c'))->field('a.gjneirong,a.gjshijian,c.bmming,b.ygmingcheng,a.genjinfs')->where('a.gjuid=b.id and b.bumen=c.id and kyid='.$id)->limit(10)->order('a.gjshijian desc')->select();
            $Model = new \Think\Model;
            $this->kydaikan=$Model->table(array('jjrxt_kydaikan'=>'a','jjrxt_yonghu'=>'b','jjrxt_bumen'=>'c'))->field('a.kehupj,a.dkshijian,c.bmming,b.ygmingcheng,a.dkfangyuan')->where('a.dkuid=b.id and b.bumen=c.id and kyid='.$id)->limit(10)->order('a.dkshijian desc')->select();
            $Model = new \Think\Model;
            $this->kytixing=$Model->table(array('jjrxt_kytixing'=>'a','jjrxt_yonghu'=>'b','jjrxt_bumen'=>'c'))->field('a.txneirong,a.txshijian,c.bmming,b.ygmingcheng')->where('a.txuid=b.id and b.bumen=c.id and kyid='.$id)->limit(10)->order('a.txshijian desc')->select();
            $peitao1=M('keyuan')->where(array('id'=>$id))->getField('peitao');
            $today="ksj".date("m-d");
               if (!cookie($today)) {
                cookie($today,$id,3600*24);
             }else{
                $value = cookie($today);
                 $val=$value.','.$id;
                 cookie($today,$val,3600*24);
               }
            if ($peitao1) {
            	$condition="pzming = 'peitao'";
            	$condition.=" and lxid in ($peitao1)";
			 	$this->peitao=M('peizhi')->query("select * from __PEIZHI__ where {$condition}");
            }
            $chaoxiang1=M('keyuan')->where(array('id'=>$id))->getField('chaoxiang');
            if ($chaoxiang1) {
            	$condition="pzming = 'chaoxiang'";
            	$condition.=" and lxid in ($chaoxiang1)";
			 	$this->chaoxiang=M('peizhi')->query("select * from __PEIZHI__ where {$condition}");
            }
            $zhuangxiu1=M('keyuan')->where(array('id'=>$id))->getField('zhuangxiu');
            if ($zhuangxiu1) {
            	$condition="pzming = 'zhuangxiu'";
            	$condition.=" and lxid in ($zhuangxiu1)";
			 	$this->zhuangxiu=M('peizhi')->query("select * from __PEIZHI__ where {$condition}");
            }
            $this->keyuan=M('keyuan')->where(array('id'=>$id))->find();
           	$this->display();
        }
        public function neirong2(){
            $keyuan=M('Keyuan')->where(array('id'=>I('id'),'gongsiid'=>session('gongsiid')))->find();
            $this->assign('keyuan',$keyuan);
            $this->dianhua=M('Yonghu')->where(array('gongsiid'=>session('gongsiid')))->select();
            $this->lrdh=M('Yonghu')->where(array('id'=>$keyuan['lururenid']))->getField('dianhua');
            $this->whdh=M('Yonghu')->where(array('id'=>$keyuan['weihurenid']))->getField('dianhua');
            $this->fpdh=M('Yonghu')->where(array('id'=>$keyuan['fengpanrenid']))->getField('dianhua');
            $id=I('id');
            $this->keyuanshu=M('keyuan')->where(array('weihurenid'=>session('uid'),'zhuangtai'=>'1'))->count();
            $this->kygenjin=M('kygenjin')->where(array('gongsiid'=>session('gongsiid'),'kyid'=>$id))->select();
            $this->gjren=M('Yonghu')->where(array('gongsiid'=>session('gongsiid')))->select();
            $this->kydaikan=M('kydaikan')->where(array('gongsiid'=>session('gongsiid'),'kyid'=>$id))->select();
            $qitiannei = time()-604800;
            $this->daikanshu=M('kydaikan')->where('gongsiid ='.session('gongsiid').' and kyid ='.$id.' and dkshijian >'.$qitiannei)->count();
            $this->dkren=M('Yonghu')->where(array('gongsiid'=>session('gongsiid')))->select();
            $this->kytixing=M('kytixing')->where(array('gongsiid'=>session('gongsiid'),'kyid'=>$id))->select();
            $this->txren=M('Yonghu')->where(array('gongsiid'=>session('gongsiid')))->select();
            $this->genjinfs=M('Peizhi')->where(array('pzming'=>'genjinfs'))->select();
            $this->laiyuan=M('Peizhi')->where(array('pzming'=>'laiyuan'))->select();
            $this->kehulx=M('Peizhi')->where(array('pzming'=>'yezhulx'))->select();
            $this->fukuan=M('Peizhi')->where(array('pzming'=>'fukuan'))->select();
            $this->gtjieduan=M('Peizhi')->where(array('pzming'=>'gtjieduan'))->select();
            $this->kydengji=M('Peizhi')->where(array('pzming'=>'kydengji'))->select();
            $this->xflinian=M('Peizhi')->where(array('pzming'=>'xflinian'))->select();
            $this->guoji=M('Peizhi')->where(array('pzming'=>'guoji'))->select();
            $this->minzu=M('Peizhi')->where(array('pzming'=>'minzu'))->select();
            $this->jtgongju=M('Peizhi')->where(array('pzming'=>'jtgongju'))->select();
            $Model = new \Think\Model;
            $this->luru=$Model->table(array('jjrxt_keyuan'=>'a','jjrxt_yonghu'=>'b','jjrxt_bumen'=>'c'))->field('c.bmming,b.ygmingcheng')->where('a.lururenid=b.id and b.bumen=c.id and a.id='.$id)->find();
            $this->weihu=$Model->table(array('jjrxt_keyuan'=>'a','jjrxt_yonghu'=>'b','jjrxt_bumen'=>'c'))->field('c.bmming,b.ygmingcheng')->where('a.weihurenid=b.id and b.bumen=c.id and a.id='.$id)->find();
            $this->fengpan=$Model->table(array('jjrxt_keyuan'=>'a','jjrxt_yonghu'=>'b','jjrxt_bumen'=>'c'))->field('c.bmming,b.ygmingcheng')->where('a.fengpanrenid=b.id and b.bumen=c.id and a.id='.$id)->find();
            $this->kygenjin=$Model->table(array('jjrxt_kygenjin'=>'a','jjrxt_yonghu'=>'b','jjrxt_bumen'=>'c'))->field('a.gjneirong,a.gjshijian,c.bmming,b.ygmingcheng,a.genjinfs')->where('a.gjuid=b.id and b.bumen=c.id and kyid='.$id)->limit(10)->order('a.gjshijian desc')->select();
            $Model = new \Think\Model;
            $this->kydaikan=$Model->table(array('jjrxt_kydaikan'=>'a','jjrxt_yonghu'=>'b','jjrxt_bumen'=>'c'))->field('a.kehupj,a.dkshijian,c.bmming,b.ygmingcheng,a.dkfangyuan')->where('a.dkuid=b.id and b.bumen=c.id and kyid='.$id)->limit(10)->order('a.dkshijian desc')->select();
            $Model = new \Think\Model;
            $this->kytixing=$Model->table(array('jjrxt_kytixing'=>'a','jjrxt_yonghu'=>'b','jjrxt_bumen'=>'c'))->field('a.txneirong,a.txshijian,c.bmming,b.ygmingcheng')->where('a.txuid=b.id and b.bumen=c.id and kyid='.$id)->limit(10)->order('a.txshijian desc')->select();
            $peitao1=M('keyuan')->where(array('id'=>$id))->getField('peitao');
            $today="ksj".date("m-d");
               if (!cookie($today)) {
                cookie($today,$id,3600*24);
             }else{
                $value = cookie($today);
                 $val=$value.','.$id;
                 cookie($today,$val,3600*24);
               }
            if ($peitao1) {
                $condition="pzming = 'peitao'";
                $condition.=" and lxid in ($peitao1)";
                $this->peitao=M('peizhi')->query("select * from __PEIZHI__ where {$condition}");
            }
            $chaoxiang1=M('keyuan')->where(array('id'=>$id))->getField('chaoxiang');
            if ($chaoxiang1) {
                $condition="pzming = 'chaoxiang'";
                $condition.=" and lxid in ($chaoxiang1)";
                $this->chaoxiang=M('peizhi')->query("select * from __PEIZHI__ where {$condition}");
            }
            $zhuangxiu1=M('keyuan')->where(array('id'=>$id))->getField('zhuangxiu');
            if ($zhuangxiu1) {
                $condition="pzming = 'zhuangxiu'";
                $condition.=" and lxid in ($zhuangxiu1)";
                $this->zhuangxiu=M('peizhi')->query("select * from __PEIZHI__ where {$condition}");
            }
            $this->keyuan=M('keyuan')->where(array('id'=>$id))->find();
            $this->display();
        }
        //客源跟进列表
        public function kygenjin(){
            $map=array('gongsiid'=>session('gongsiid'));
            $Data = M('kygenjin'); // 实例化Data数据对象  date 是你的表名
            $count = $Data->where($map)->count();// 查询满足要求的总记录数 $map表示查询条件
            $Page  = new \Think\Page($count,30);// 实例化分页类 传入总记录数和每页显示的记录数(25)
            $show  = $Page->show();// 分页显示输出
            $list="select * from __KYGENJIN__ order by gjshijian DESC limit ".$Page->firstRow.','.$Page->listRows;
            $genjin=M('kygenjin')->query($list);
            $this->assign('firstRow',$Page->firstRow);
            $this->assign('genjin',$genjin);// 赋值数据集
            $this->assign('count',$count);// 赋值分页输出
            $this->assign('page',$show);
            $this->bumen=M('bumen')->select();
            $this->yonghu=M('yonghu')->select();
            $this->keyuan=M('keyuan')->select();
            $this->genjinfs=M('Peizhi')->where(array('pzming'=>'genjinfs'))->select();
            $this->display();// 输出模板
        }
        //客源带看列表
        public function kydaikan(){
            $map=array('gongsiid'=>session('gongsiid'));
            $Data = M('kydaikan'); // 实例化Data数据对象  date 是你的表名
            $count = $Data->where($map)->count();// 查询满足要求的总记录数 $map表示查询条件
            $Page  = new \Think\Page($count,30);// 实例化分页类 传入总记录数和每页显示的记录数(25)
            $show  = $Page->show();// 分页显示输出
            $list="select * from __KYDAIKAN__ order by dkshijian DESC limit ".$Page->firstRow.','.$Page->listRows;
            $daikan=M('kydaikan')->query($list);
            $this->assign('firstRow',$Page->firstRow);
            $this->assign('daikan',$daikan);// 赋值数据集
            $this->assign('count',$count);// 赋值分页输出
            $this->assign('page',$show);
            $this->bumen=M('bumen')->select();
            $this->yonghu=M('yonghu')->select();
            $this->keyuan=M('keyuan')->select();
            $this->fangyuan=M('fangyuan')->select();
            $this->genjinfs=M('Peizhi')->where(array('pzming'=>'genjinfs'))->select();
            $this->display();// 输出模板
        }
    }
?>