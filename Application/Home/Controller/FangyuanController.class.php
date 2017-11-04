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
    class FangyuanController extends CommonController {
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

        //二手房源列表
        public function Esfy(){

            $map=array('gongsiid'=>session('gongsiid'));
            $Data = M('fangyuan'); // 实例化Data数据对象  date 是你的表名
            $count = $Data->where($map)->count();// 查询满足要求的总记录数 $map表示查询条件
            $Page  = new \Think\Page($count,25);// 实例化分页类 传入总记录数和每页显示的记录数(25)
            $show  = $Page->show();// 分页显示输出
            // 进行分页数据查询
            $fangyuan = $Data->where($map)->order('lurusj desc')->limit($Page->firstRow.','.$Page->listRows)->select(); // $Page->firstRow 起始条数 $Page->listRows 获取多少条
            $this->assign('fangyuan',$fangyuan);// 赋值数据集
            $this->assign('count',$count);// 赋值分页输出
            $this->assign('page',$show);
            
            $this->xingzhengqu=M('xingzhengqu')->where(array('gongsiid'=>session('gongsiid')))->select();

            
            $map=array('gongsiid'=>session('gongsiid'));
            $Data = M('fangyuan'); // 实例化Data数据对象  date 是你的表名

            $count = $Data->where($map)->count();// 查询满足要求的总记录数 $map表示查询条件
            $Page  = new \Think\Page($count,5);// 实例化分页类 传入总记录数和每页显示的记录数(25)
            $show  = $Page->show();// 分页显示输出
            // 进行分页数据查询
            $fangyuan = $Data->where($map)->order('id')->limit($Page->firstRow.','.$Page->listRows)->select(); // $Page->firstRow 起始条数 $Page->listRows 获取多少条
            $this->assign('fangyuan',$fangyuan);// 赋值数据集
            $this->assign('count',$count);// 赋值分页输出
            $this->assign('page',$show);
            
            $this->xingzhengqu=M('xingzhengqu')->where(array('gongsiid'=>session('gongsiid')))->select();

            $this->xiaoqum=M('xiaoqu')->where(array('gongsiid'=>session('gongsiid')))->select();
            $this->zhuangtai=M('Peizhi')->where(array('pzming'=>'zhuangtai'))->select();
            $this->chaoxiang=M('Peizhi')->where(array('pzming'=>'chaoxiang'))->select();
            $this->zhuangxiu=M('Peizhi')->where(array('pzming'=>'zhuangxiu'))->select();
            $this->yongtu=M('Peizhi')->where(array('pzming'=>'yongtu'))->select();
            $this->display();// 输出模板
        }
        //添加二手房源
        public function addEsfy(){
            

           $this->bumen=M('bumen')->where(array('gongsiid'=>session('gongsiid')))->select();
            //获取行政区
            $this->xingzhengqu=M('xingzhengqu')->where(array('gongsiid'=>session('gongsiid')))->order('id desc')->select();
            //配置值输出
            $this->yongtu=M('Peizhi')->where(array('pzming'=>'yongtu'))->select();
            $this->leixing=M('Peizhi')->where(array('pzming'=>'leixing'))->select();
            $this->zhuangtai=M('Peizhi')->where(array('pzming'=>'zhuangtai'))->select();
            $this->zujialx=M('Peizhi')->where(array('pzming'=>'zujialx'))->select();
            $this->chaoxiang=M('Peizhi')->where(array('pzming'=>'chaoxiang'))->select();
            //$this->xianzhuang=M('Peizhi')->where(array('pzming'=>'xianzhuang'))->select();
            $this->fwleixing=M('Peizhi')->where(array('pzming'=>'fwleixing'))->select();
            $this->jiegou=M('Peizhi')->where(array('pzming'=>'jiegou'))->select();
            $this->chanquan=M('Peizhi')->where(array('pzming'=>'chanquan'))->select();
            $this->kanfangfs=M('Peizhi')->where(array('pzming'=>'kanfangfs'))->select();
            $this->laiyuan=M('Peizhi')->where(array('pzming'=>'laiyuan'))->select();
            $this->fukuan=M('Peizhi')->where(array('pzming'=>'fukuan'))->select();
            $this->yezhulx=M('Peizhi')->where(array('pzming'=>'yezhulx'))->select();
            $this->yezhugx=M('Peizhi')->where(array('pzming'=>'yezhugx'))->select();
            $this->zhuangxiu=M('Peizhi')->where(array('pzming'=>'zhuangxiu'))->select();
            $this->peitao=M('Peizhi')->where(array('pzming'=>'peitao'))->select();

            
            $this->display();
        }
        //添加二手房源表单处理
        public function addEsfyHandle(){
            /*p($_POST);
            die;*/

            $map=array(
                    'gongsiid'=>session('gongsiid'),
                    'leixing'=>I('leixing'),
                    'zuodong'=>I('zuodong'),
                    'danyuan'=>I('danyuan'),
                    'fanghao'=>I('fanghao'),
                    'xiaoqu'=>I('xiaoqu'),
                    'zhuangtai'=>I('zhuangtai')
                );
            if (M('Fangyuan')->where($map)->find()) {
                $this->error('房源已存在');
            }

            $data['bianhao']=rand(10000,99999);

            $data['leixing']=I('leixing');//类型
            $data['yongtu']=I('yongtu');//用途
            //$data['zhuangtai']=I('zhuangtai');//状态

            $data['xiaoqu']=I('xiaoqu');
            $data['ssarea']=I('ssarea');
            $data['xiaoqum']=I('xiaoqum');
            
            $data['mianji']=I('mianji');
            $data['shoujia']=I('shoujia');

            if(I('mianji')!="" and I('shoujia')!=""){
                $num1=I('shoujia')*10000;
                $num2=I('mianji');
                $num=$num1/$num2;
                $danjia=number_format($num,2,".", "");
                $data['danjia']=$danjia;
            }
            
            $data['zujia']=I('zujia');
            $data['yezhulx']=I('yezhulx');
            $data['yezhugx']=I('yezhugx');
            $data['zujialx']=I('zujialx');
            $data['chaoxiang']=I('chaoxiang');
            $data['zhuangxiu']=I('zhuangxiu');

            $pt1=array_keys(I('peitao')); 
            $pt2=implode(',',$pt1);
            $data['peitao']=$pt2;
            
            //$data['xianzhuang']=I('xianzhuang');
            $data['fwleixing']=I('fwleixing');
            //$data['jiegou']=I('jiegou');
            $data['cqxingzhi']=I('cqxingzhi');
            $data['cqnianxian']=I('cqnianxian');
            $data['fyshuifei']=I('fyshuifei');
            $data['kanfangfs']=I('kanfangfs');
            $data['laiyuan']=I('laiyuan');
            $data['fukuan']=I('fukuan');
            $data['yaoshidian']=I('yaoshidian');
            
            $data['zuodong']=I('zuodong');
            $data['danyuan']=I('danyuan');
            $data['fanghao']=I('fanghao');
            $data['yezhu']=I('yezhu');
            $data['yezhudianhua']=I('yezhudianhua');
            $data['weihuren']=session('ygmingcheng');
            $data['weihurenid']=session('uid');
            $data['fybiaoti']=I('fybiaoti');
            
            $data['shi']=I('shi');
            $data['ting']=I('ting');
            $data['wei']=I('wei');
            $data['chu']=I('chu');
            $data['yangtai']=I('yangtai');
            //$data['symianji']=I('symianji');
            $data['louceng']=I('louceng');
            $data['zlouceng']=I('zlouceng');
            $data['ti']=I('ti');
            $data['hu']=I('hu');
            $data['niandai']=I('niandai');
            
            
            $data['chushoudj']=I('chushoudj');
            $data['chuzudj']=I('chuzudj');
            $data['menweizhi']=I('menweizhi');
            $data['cheku']=I('cheku');
            $data['fwleixing']=I('fwleixing');
            $data['hezuotandan']=I('hezuotandan');
            $data['beizhu']=I('beizhu');

            /*if (I('shouyaobm')) {
                $data['shouyaobm']=I('shouyaobm');
                $data['shouyaoren']=session('uid');
            }*/
            
            $data['czriqi']=strtotime(I('czriqi'));
            $data['fukuanfs']=I('fukuanfs');
            /*if(I('waiwangtb')){
                $waiwangtb=1;
            }else{
                $waiwangtb=0;
            }*/
            /*if(I('man2')){
                $man2=1;
            }else{
                $man2=0;
            }*/
            /*if(I('weiyi')){
                $weiyi=1;
            }else{
                $weiyi=0;
            }
            if(I('jishou')){
                $jishou=1;
            }else{
                $jishou=0;
            }*/
            /*if(I('quankuan')){
                $quankuan=1;
            }else{
                $quankuan=0;
            }
            if(I('xuequ')){
                $xuequ=1;
            }else{
                $xuequ=0;
            }
            if(I('youdaikuan')){
                $youdaikuan=1;
            }else{
                $youdaikuan=0;
            }
            if(I('xinzheng')){
                $xinzheng=1;
            }else{
                $xinzheng=0;
            }*/

            //$data['waiwangtb']=$waiwangtb;
            $data['jishou']=$jishou;
            $data['quankuan']=$quankuan;
            $data['weiyi']=$weiyi;
            $data['man2']=$man2;
            $data['xuequ']=$xuequ;
            $data['youdaikuan']=$youdaikuan;
            $data['xinzheng']=$xinzheng;

            $data['lurusj']=time();

            if (M('Fangyuan')->add($data)) {
                $this->success('添加成功');
            }else{
                $this->error('添加失败');
            }
        }
                
        
        


        //内容页
       public function neirong(){
            $this->leixing=M('Peizhi')->where(array('pzming'=>'leixing'))->select();
            $this->yongtu=M('Peizhi')->where(array('pzming'=>'yongtu'))->select();
            $this->zhuangtai=M('Peizhi')->where(array('pzming'=>'zhuangtai'))->select();
            $this->zujialx=M('Peizhi')->where(array('pzming'=>'zujialx'))->select();
            $this->chaoxiang=M('Peizhi')->where(array('pzming'=>'chaoxiang'))->select();
            $this->zhuangxiu=M('Peizhi')->where(array('pzming'=>'zhuangxiu'))->select();
            //$this->xianzhuang=M('Peizhi')->where(array('pzming'=>'xianzhuang'))->select();
            $this->fwleixing=M('Peizhi')->where(array('pzming'=>'fwleixing'))->select();
            $this->jiegou=M('Peizhi')->where(array('pzming'=>'jiegou'))->select();
            $this->cqxingzhi=M('Peizhi')->where(array('pzming'=>'chanquan'))->select();
            $this->laiyuan=M('Peizhi')->where(array('pzming'=>'laiyuan'))->select();
            $this->kanfangfs=M('Peizhi')->where(array('pzming'=>'kanfangfs'))->select();
            $this->genjinfs=M('Peizhi')->where(array('pzming'=>'genjinfs'))->select();
           $this->yongtu=M('Peizhi')->where(array('pzming'=>'yongtu'))->select();
            $id=I('id');

            $peitao1=M('fangyuan')->where(array('id'=>$id))->getField('peitao');
            if ($peitao1) {
                $condition="pzming = 'peitao'";
                $condition.=" and lxid in ($peitao1)";
                $this->peitao=M('peizhi')->query("select * from __PEIZHI__ where {$condition}");
            }

            //房源上图人
            $bianhao=M('fangyuan')->where(array('id'=>$id))->getField('bianhao');
            //$uid=M('photo')->where(array('gongsiid'=>session('gongsiid'),'fybh'=>$bianhao))->group('fybh')->getField('uid');
            $shangturen=M('yonghu')->where(array('id'=>$uid))->find();
            $this->assign('shangturen',$shangturen);

            //存钥部门
            /*$shouyaobmid=M('fangyuan')->where(array('id'=>$id))->getField('shouyaobm');
            $this->shouyaobm=M('bumen')->where(array('id'=>$shouyaobmid))->find();*/

            //收钥人
           /* $shouyaorenid=M('fangyuan')->where(array('id'=>$id))->getField('shouyaoren');
            $this->shouyaoren=M('yonghu')->where(array('id'=>$shouyaorenid))->find();*/

            //录入人
            $weihurenid=M('fangyuan')->where(array('id'=>$id))->getField('weihurenid');
            $this->weihuren=M('yonghu')->where(array('id'=>$weihurenid))->find();
            //$this->fygenjin=M('fygenjin')->where(array('gongsiid'=>session('gongsiid'),'fyid'=>$id))->select();

            $Model = new \Think\Model;
             $this->fygenjin = $Model->table(array('jjrxt_fygenjin'=>'a','jjrxt_yonghu'=>'b','jjrxt_bumen'=>'c'))->field('a.neirong,a.shijian,c.bmming,b.ygmingcheng,a.genjinfs')->where('a.uid=b.id and b.bumen=c.id and fyid='.$id)->limit(10)->order('a.shijian desc')->select();

             $Model = new \Think\Model;
             $this->diaoqujl = $Model->table(array('jjrxt_xianzhi'=>'a','jjrxt_yonghu'=>'b','jjrxt_bumen'=>'c'))->field('a.shijian,c.bmming,b.ygmingcheng')->where('a.uid=b.id and b.bumen=c.id and fyid='.$id)->limit(10)->order('a.shijian desc')->select();

            $fangyuan=M('fangyuan')->where(array('id'=>$id))->find();
            $this->assign('fangyuan',$fangyuan);
            
            $this->xiaoqu=M('xiaoqu')->where(array('id'=>$fangyuan['xiaoqu']))->find();

            $qitiannei = time()-604800;
            $this->daikanshu=M('kydaikan')->where('gongsiid ='.session('gongsiid').' and (dkfangyuan like '.$fangyuan['bianhao'].') and dkshijian >'.$qitiannei)->count();
            
            //上图判断
            $lrsj=time()-$fangyuan['lurusj'];
            
            if(!$shangturen){
                if($lrsj<172800){
                    if($fangyuan['weihurenid']==session('uid')){
                        $yesshangtu=1;
                    }else{
                        $yesshangtu=2;
                    }
                }else{
                    $yesshangtu=1;
                }
            }else{
                if($shangturen['id']==session('uid')){
                        $yesshangtu=1;
                }else{
                        $yesshangtu=2;
                }
            }

            $this->assign('yesshangtu',$yesshangtu);
             $dianhua=M('yonghu')->where(array('id'=>$fangyuan['weihurenid']))->getField('dianhua');
            

             $today="sj".date("m-d");
               if (!cookie($today)) {
                cookie($today,$id,3600*24);
             }else{
                $value = cookie($today);
                 $val=$value.','.$id;
                 cookie($today,$val,3600*24);
               }
                    
                
            $user_chankan=M('yonghu')->where(array('id'=>session('uid')))->getField('xzchakan');

            if ($user_chankan) {
                $today=date("m-d");
                $fy=M('xianzhi')->where(array('uid'=>session('uid'),'time'=>$today))->count();
                $fy1=M('xianzhi')->where(array('fyid'=>$id,'uid'=>session('uid'),'time'=>$today))->find();
                $diaoqucs= $user_chankan-$fy ;
                $this->assign('diaoqucs',$diaoqucs);
                
                    if ($fy1) {
                        $this->isxianzhi=0;
                    }else{
                        if ($diaoqucs<=0) {
                            $this->isxianzhi=0;
                        }else{
                            $this->isxianzhi=1;
                        }
                        
                    }
                
                
            }else{
                $this->isxianzhi=0;
            }
            
            $Model = new \Think\Model;
            $volist = $Model->table(array('jjrxt_fyxgjilu'=>'a','jjrxt_fyziduan'=>'b','jjrxt_yonghu'=>'c'))->field('b.beizhu,a.yuanzhi,a.xiugaiwei,a.shijian,a.id,c.ygmingcheng')->where('a.ziduan=b.ziduanm and a.uid=c.id and not(a.yuanzhi="0" and a.xiugaiwei="") and fyid='.$id)->limit(10)->order('a.shijian desc')->select();
            

            $this->assign('volist',$volist);
            $this->display();
            
            
        }
        /**
         * [get_fy_img 异步返回图片列表]
         * @return [json] [图片相关的数组]
         */
        public function get_fy_img(){
            $listObj = M('Photo');
            $where['fybh'] = I('fy_bh');
            $list = $listObj->where($where)->order('id desc')->select();
            //$list = $listObj->alias('p')->join(' jjrxt_yonghu as y')->field('p.id,p.image,FROM_UNIXTIME(p.create_time,"%Y-%m-%d") AS create_time,p.fybh,y.ygmingcheng')->where($where)->order('p.id desc')->select();
            //返回查询结果到异步json
            $data=array('pics'=>$list);
            header("Content-type: application/json");
            exit(json_encode($data));
        }

        public function get_fy_cq_img(){
            $listObj = M('CqPhoto');
            $where['fybh'] = I('fy_bh');
            $list = $listObj->where($where)->order('id desc')->select();
            //$list = $listObj->alias('p')->join(' jjrxt_yonghu as y')->field('p.id,p.image,FROM_UNIXTIME(p.create_time,"%Y-%m-%d") AS create_time,p.fybh,y.ygmingcheng')->where($where)->order('p.id desc')->select();
            //返回查询结果到异步json
            $data=array('pics'=>$list);
            header("Content-type: application/json");
            exit(json_encode($data));
        }

         /**
         * [fy_pic_del 异步删除图片]
         * @return [json] [description]
         */
        public function fy_pic_del(){
            
            $id=I('fy_pic_id');

            //根据图片id查看当前是否还有当前房源的图片
            $fybh = M('Photo')->where(array('id'=>$id))->getField('fybh');
            $piccount = M('Photo')->where(array('fybh'=>$fybh))->count();

            $dp=M('Photo');
            if($id){    //删除当前图片
                $plist = $dp->where(array('id'=>$id))->find();
                if ($plist){
                    unlink('./Upload/'.$plist['gongsiid'].'/'.$plist['fybh'].'/'.$plist['image']);

                    unlink('./Upload/'.$plist['gongsiid'].'/'.$plist['fybh'].'/t_'.$plist['image']);
                    $dp->where(array('id'=>$id))->delete();
                    $data=array('pics'=>$plist);
                    //删除最后一个房源图片后给fangyun表的tupian字段置 0
                    if ($piccount==1) {
                         M('Fangyuan')->where(array('bianhao'=>$fybh))->setField('tupian',0);
                    }
                }else{
                    $data=array('pics'=>$plist);
                }
            }
            //返回值
            header("Content-type: application/json");
            exit(json_encode($data));
        }

        public function fy_cq_pic_del(){

            $id=I('fy_pic_id');

            //根据图片id查看当前是否还有当前房源的图片
            $fybh = M('CqPhoto')->where(array('id'=>$id))->getField('fybh');
            $piccount = M('Photo')->where(array('fybh'=>$fybh))->count();

            $dp=M('Photo');
            if($id){    //删除当前图片
                $plist = $dp->where(array('id'=>$id))->find();
                if ($plist){
                    unlink('./Upload/'.$plist['gongsiid'].'/'.$plist['fybh'].'/'.$plist['image']);

                    unlink('./Upload/'.$plist['gongsiid'].'/'.$plist['fybh'].'/t_'.$plist['image']);
                    $dp->where(array('id'=>$id))->delete();
                    $data=array('pics'=>$plist);
                    //删除最后一个房源图片后给fangyun表的tupian字段置 0
                    if ($piccount==1) {
                        M('Fangyuan')->where(array('bianhao'=>$fybh))->setField('tupian',0);
                    }
                }else{
                    $data=array('pics'=>$plist);
                }
            }
            //返回值
            header("Content-type: application/json");
            exit(json_encode($data));
        }


        public function cfyanzheng(){
            
            $map=array(
                'leixing'=>I('leixing'),
                'fanghao'=>I('fanghao'),
                'danyuan'=>I('danyuan'),
                'zuodong'=>I('zuodong'),
                'xiaoqu'=>I('xiaoqu'),
                'zhuangtai'=>1,
                );

            $sx=M('fangyuan')->where($map)->find();
            if ($sx) {
                $yanz=1;
            }else{
                $yanz=2;
            }
            $data=array('status'=>0,'city'=>$yanz);
            header("Content-type: application/json");
            exit(json_encode($data));
           
        }
        //钥匙列表
        public function yaoshi(){
            $map=array('gongsiid'=>session('gongsiid'));
            $Data = M('fangyuan'); // 实例化Data数据对象  date 是你的表名
            $count = $Data->where($map)->count();// 查询满足要求的总记录数 $map表示查询条件
            $Page  = new \Think\Page($count,30);// 实例化分页类 传入总记录数和每页显示的记录数(25)
            $show  = $Page->show();// 分页显示输出
            $list="select * from __FANGYUAN__ where shouyaobm order by lurusj DESC limit ".$Page->firstRow.','.$Page->listRows;
            $fangyuan=M('fangyuan')->query($list);
            $this->assign('firstRow',$Page->firstRow);
            $this->assign('fangyuan',$fangyuan);// 赋值数据集
            $this->assign('count',$count);// 赋值分页输出
            $this->assign('page',$show);
            $this->xingzhengqu=M('xingzhengqu')->select();
            $this->pianqu=M('pianqu')->select();
            $this->yonghu=M('yonghu')->select();
            $this->bumen=M('bumen')->select();
            $this->display();// 输出模板
        }
    }