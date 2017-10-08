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
    class FyneirongController extends CommonController {

        public function xiugai(){
            $this->bumen=M('bumen')->where(array('gongsiid'=>session('gongsiid')))->select();

            $this->xiaoqum=M('xiaoqu')->where(array('gongsiid'=>session('gongsiid')))->select();
            $this->yongtu=M('Peizhi')->where(array('pzming'=>'yongtu'))->select();
            $this->leixing=M('Peizhi')->where(array('pzming'=>'leixing'))->select();
            $this->zhuangtai=M('Peizhi')->where(array('pzming'=>'zhuangtai'))->select();
            $this->zujialx=M('Peizhi')->where(array('pzming'=>'zujialx'))->select();
            $this->chaoxiang=M('Peizhi')->where(array('pzming'=>'chaoxiang'))->select();
            $this->xianzhuang=M('Peizhi')->where(array('pzming'=>'xianzhuang'))->select();
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

            $id=I('fyid');
            $peitao1=M('fangyuan')->where(array('id'=>$id,'gongsiid'=>session('gongsiid')))->getField('peitao');
            $this->peitao2= explode(",",$peitao1);
            /*p($peitao2);
            die;*/
            $this->fangyuan=M('fangyuan')->where(array('id'=>$id,'gongsiid'=>session('gongsiid')))->find();
            $this->display();
        }

        public function xiugaiHandle(){
            /*p($_POST);
            die;*/

            $fy1=M('fangyuan')->where(array('id'=>I('id')))->find();

            $data['leixing']=I('leixing');//类型
            $data['yongtu']=I('yongtu');//用途
            //$data['zhuangtai']=I('zhuangtai');//状态

            $data['xiaoqu']=I('xiaoqu');
            $data['xiaoqum']=I('xiaoqum');

           /* if (I('shouyaobm')) {
                if ($fy1['shouyaoren']){
                    $data['shouyaobm']=I('shouyaobm');
                }else{
                    $data['shouyaobm']=I('shouyaobm');
                    $data['shouyaoren']=session('uid');
                }
            }elseif (I('shouyaobm')=="0") {
                $data['shouyaobm']=I('shouyaobm');
            }*/
           
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
            if (I('yezhulx')) {
                $data['yezhulx']=I('yezhulx');
            }
            
            
            if (I('zujialx')) {
                $data['zujialx']=I('zujialx');
            }
            

            if (I('chaoxiang')) {
                $data['chaoxiang']=I('chaoxiang');
            }
            
            $data['zhuangxiu']=I('zhuangxiu');

            $pt1=array_keys(I('peitao')); 
            $pt2=implode(',',$pt1);
            $data['peitao']=$pt2;
            
            if (I('xianzhuang')) {
                $data['xianzhuang']=I('xianzhuang');
            }
            if (I('fwleixing')) {
                $data['fwleixing']=I('fwleixing');
            }
            /*if (I('jiegou')) {
                $data['jiegou']=I('jiegou');
            }*/
            
            $data['cqxingzhi']=I('cqxingzhi');
            $data['cqnianxian']=I('cqnianxian');
            
           /* if (I('kanfangfs')) {
                $data['kanfangfs']=I('kanfangfs');
            }*/
            
            if (I('laiyuan')) {
                $data['laiyuan']=I('laiyuan');
            }
            
            $data['fukuan']=I('fukuan');
            $data['yaoshidian']=I('yaoshidian');
            
            
            $data['yezhu']=I('yezhu');
            
            
            $data['fybiaoti']=I('fybiaoti');
            
            $data['shi']=I('shi');
            $data['ting']=I('ting');
            $data['wei']=I('wei');
            $data['chu']=I('chu');
            $data['yangtai']=I('yangtai');
            $data['symianji']=I('symianji');
            $data['louceng']=I('louceng');
            $data['zlouceng']=I('zlouceng');
            $data['ti']=I('ti');
            $data['hu']=I('hu');
            $data['niandai']=I('niandai');
            
            
            $data['chushoudj']=I('chushoudj');
            $data['chuzudj']=I('chuzudj');
            $data['menweizhi']=I('menweizhi');
            $data['cheku']=I('cheku');
            
            $data['hezuotandan']=I('hezuotandan');
            $data['beizhu']=I('beizhu');
            
            $data['czriqi']=strtotime(I('czriqi'));
            if (I('fukuanfs')) {
                $data['fukuanfs']=I('fukuanfs');
            }
            
/*
            if(I('waiwangtb')){
                $waiwangtb=1;
            }else{
                $waiwangtb=0;
            }
            if(I('man2')){
                $man2=1;
            }else{
                $man2=0;
            }
            if(I('weiyi')){
                $weiyi=1;
            }else{
                $weiyi=0;
            }
            if(I('jishou')){
                $jishou=1;
            }else{
                $jishou=0;
            }
            if(I('quankuan')){
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

            $data['waiwangtb']=$waiwangtb;
            $data['jishou']=$jishou;
            $data['quankuan']=$quankuan;
            $data['weiyi']=$weiyi;
            $data['man2']=$man2;
            $data['xuequ']=$xuequ;
            $data['youdaikuan']=$youdaikuan;
            $data['xinzheng']=$xinzheng;

            foreach($data as $key=>$value){
                if($data[$key]!=$fy1[$key]){
                    
                    $xgjilu['uid']=session('uid');
                    $xgjilu['fyid']=I('id');
                    $xgjilu['fybianhao']=$fy1['bianhao'];
                    $xgjilu['ziduan']=$key;
                    $xgjilu['yuanzhi']=$fy1[$key];
                    $xgjilu['xiugaiwei']=$data[$key];
                    $xgjilu['shijian']=time();
                    M('fyxgjilu')->add($xgjilu);
                }
            }
            
            if(M('fangyuan')->where(array('id'=>I('id')))->save($data)){
                $this->success('修改成功');
            }else{
                $this->error('修改失败');
            }

        }
        //调取
    	public function diaoqu() {
        	$id=I('id');
            $data['fyid']=$id;
            $data['uid']=session('uid');
            $data['time']=date("m-d");
$data['shijian']=time();
            M('xianzhi')->add($data);
            $diaoqu['yezhu']=M('fangyuan')->where(array('id'=>$id))->getField('yezhu');
            $diaoqu['yezhudianhua']=M('fangyuan')->where(array('id'=>$id))->getField('yezhudianhua');
            $diaoqu['zuodong']=M('fangyuan')->where(array('id'=>$id))->getField('zuodong');
            $diaoqu['danyuan']=M('fangyuan')->where(array('id'=>$id))->getField('danyuan');
            $diaoqu['fanghao']=M('fangyuan')->where(array('id'=>$id))->getField('fanghao');
            $diaoqu['chushoudj']=M('fangyuan')->where(array('id'=>$id))->getField('chushoudj');
            $diaoqu['chuzudj']=M('fangyuan')->where(array('id'=>$id))->getField('chuzudj');
            
            $data1=array('status'=>0,'diaoqu1'=>$diaoqu);
            header("Content-type: application/json");
            exit(json_encode($data1));
	    }
        //写跟进
        public function genjin(){
            $this->genjinfs=M('Peizhi')->where(array('pzming'=>'genjinfs'))->select();
            $this->display();
        }
        //写跟进表单处理
        public function genjinHandle(){

            $data['gongsiid']=I('gongsiid');
            $data['fybh']=I('fybh');
            $data['fyid']=I('fyid');
            $data['uid']=I('uid');
            $data['genjinfs']=I('genjinfs');
            $data['neirong']=I('neirong');
            $data['shijian']=time();

            if (M('fygenjin')->add($data)) {
                $this->success('添加成功');
            }else{
                $this->error('添加失败');
            }
        }
        //变更维护人
        public function bgwhr(){
            $this->display();
        }
        //变更维护人表单处理
        public function bgwhrHandle(){
            if (M('')->add($_POST)) {
                $this->success('添加成功');
            }else{
                $this->error('添加失败');
            }
        }
        //设置全景地址处理
        public function quanjingHandle(){
        	$id=I('id');
        	$fy=M('fangyuan');
        	$data['vr_url']=I('text');
        	$save=$fy->where(array('id'=>$id))->save($data);
            if ($save) {
                $this->success('添加成功');
            }else{
                $this->error('添加失败');
            }
        }
        //修改门牌号
        public function xgzuodong(){
            $id=I('id');
            $this->fangyuan=M('fangyuan')->where(array('id'=>$id))->find();
            $this->display();
        }
        //设置门牌号
        public function xgzuodongHandle(){
            $id=I('id');
            $fangyuan=M('fangyuan')->where(array('id'=>$id))->find();
            $xiugaiqian='业主：'.$fangyuan['yezhu'].'。电话：'.$fangyuan['yezhudianhua'].';'.$fangyuan['yezhudianhua2'].';'.$fangyuan['yezhudianhua3'].'。座栋：'.$fangyuan['zuodong'].'。单元：'.$fangyuan['danyuan'].'。房号：'.$fangyuan['fanghao'];
            $xiugaihou='业主：'.I('yezhu').'。电话：'.I('dianhua1').';'.I('dianhua2').';'.I('dianhua3').'。座栋：'.I('zuodong').'。单元：'.I('danyuan').'。房号：'.I('fanghao');
            $map['xiugaiqian']=$xiugaiqian;
            $map['xiugaihou']=$xiugaihou;
            $map['time']=time();
            $map['fybianhao']=$fangyuan['bianhao'];
            $map['uid']=session('uid');
            M('fyxiugai')->add($map);
            $data['yezhu']=I('yezhu');
            $data['yezhudianhua']=I('dianhua1');
            $data['yezhudianhua2']=I('dianhua2');
            $data['yezhudianhua3']=I('dianhua3');
            $data['fanghao']=I('fanghao');
            $data['danyuan']=I('danyuan');
            $data['zuodong']=I('zuodong');
            if (M('fangyuan')->where(array('id'=>$id))->save($data)) {
                $this->success('修改成功');
            }else{
                $this->error('修改失败');
            }
        }
        public function delEsfy(){
            $id=I('id');
            if (M('fangyuan')->where('id='.$id)->delete()) {
                $this->success('删除成功');
            }else{
                $this->error('删除失败');
            }
        }
	}
?>
        
        
        
        
        
        
        
        
        
        
        