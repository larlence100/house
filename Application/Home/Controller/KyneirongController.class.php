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
    class KyneirongController extends CommonController {
    	function index() {
        	$this->display();
	    }
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
        public function editKeyuan(){
            $this->keyuan=M('Keyuan')->where(array('id'=>I('id'),'gongsiid'=>session('gongsiid')))->find();
            $this->yongtu=M('Peizhi')->where(array('pzming'=>'yongtu'))->select();
            $this->fukuan=M('Peizhi')->where(array('pzming'=>'fukuan'))->select();
            $this->chaoxiang=M('Peizhi')->where(array('pzming'=>'chaoxiang'))->select();
            $this->kehulx=M('Peizhi')->where(array('pzming'=>'yezhulx'))->select();
            $this->zhuangxiu=M('Peizhi')->where(array('pzming'=>'zhuangxiu'))->select();
            $this->peitao=M('Peizhi')->where(array('pzming'=>'peitao'))->select();
            $this->laiyuan=M('Peizhi')->where(array('pzming'=>'laiyuan'))->select();
            $this->xflinian=M('Peizhi')->where(array('pzming'=>'xflinian'))->select();
            $this->guoji=M('Peizhi')->where(array('pzming'=>'guoji'))->select();
            $this->minzu=M('Peizhi')->where(array('pzming'=>'minzu'))->select();
            $this->kydengji=M('Peizhi')->where(array('pzming'=>'kydengji'))->select();
            $this->khzhuangtai=M('Peizhi')->where(array('pzming'=>'khzhuangtai'))->select();
            $this->zhuangtai=M('Peizhi')->where(array('pzming'=>'zhuangtai'))->select();
            $this->jtgongju=M('Peizhi')->where(array('pzming'=>'jtgongju'))->select();
            $this->gtjieduan=M('Peizhi')->where(array('pzming'=>'gtjieduan'))->select();
            $this->mmzl=M('Peizhi')->where(array('pzming'=>'mmzl'))->select();
            $this->keyuanshu=M('keyuan')->where(array('weihurenid'=>session('uid'),'zhuangtai'=>'1'))->count();
            $id=I('id');
            $chaoxiang1=M('keyuan')->where(array('id'=>$id,'gongsiid'=>session('gongsiid')))->getField('chaoxiang');
            $this->chaoxiang2=explode(",", $chaoxiang1);
            $zhuangxiu1=M('keyuan')->where(array('id'=>$id,'gongsiid'=>session('gongsiid')))->getField('zhuangxiu');
            $this->zhuangxiu2=explode(",", $zhuangxiu1);
            $peitao1=M('keyuan')->where(array('id'=>$id,'gongsiid'=>session('gongsiid')))->getField('peitao');
            $this->peitao2=explode(",", $peitao1);
            $this->display();
        }
        public function editKeyuanHandle(){
            /*p($_GET);
            die;*/
            $yonghu=M('yonghu');
            if (!$yonghu->autoCheckToken($_GET)) {
                $this->error('请不要重复添加');
            }
            if (session('gongsiid')=="") {
                $this->error('请重新登录');
            }
            $keyuan=M("keyuan");
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
            $cx1=array_keys(I('chaoxiang')); 
            $cx2=implode(',',$cx1);
            $data['chaoxiang']=$cx2;
            $zx1=array_keys(I('zhuangxiu')); 
            $zx2=implode(',',$zx1);
            $data['zhuangxiu']=$zx2;
            $pt1=array_keys(I('peitao')); 
            $pt2=implode(',',$pt1);
            $data['peitao']=$pt2;
            $data['leixing']=I('leixing');
            $data['zhuangtai']=I('zhuangtai');
            $data['gongsiid']=session('gongsiid');
            $data['khxingming']=I('khxingming');
            $data['kehulx']=I('kehulx');
            $data['dianhua']=I('dianhua');
            $data['xqyongtu']=I('xqyongtu');
            $data['xqquyu']=I('xqquyu');
            $data['xqxiaoqu']=I('xqxiaoqu');
            $data['xqhuxing1']=I('xqhuxing1');
            $data['xqhuxing2']=I('xqhuxing2');
            $data['xqjiage1']=I('xqjiage1');
            $data['xqjiage2']=I('xqjiage2');
            $data['xqmianji1']=I('xqmianji1');
            $data['xqmianji2']=I('xqmianji2');
            $data['jiqie']=I('jiqie');
            $data['fukuan']=I('fukuan');
            $data['louceng1']=I('louceng1');
            $data['louceng2']=I('louceng2');
            $data['xqyongtu']=I('xqyongtu');
            $data['fangling1']=I('fangling1');
            $data['fangling2']=I('fangling2');
            $data['xqyuanyin']=I('xqyuanyin');
            $data['khlaiyuan']=I('khlaiyuan');
            $data['sfzheng']=I('sfzheng');
            $data['qqhao']=I('qqhao');
            $data['guoji']=I('guoji');
            $data['minzu']=I('minzu');
            $data['youxiang']=I('youxiang');
            $data['weixin']=I('weixin');
            $data['jtgongju']=I('jtgongju');
            $data['chexing']=I('chexing');
            $data['beizhu']=I('beizhu');
            $data['gtjieduan']=I('gtjieduan');
            $data['xflinian']=I('xflinian');
            $data['kydengji']=I('kydengji');
            $data['mmzl']=I('mmzl');
            $keyuan->where(array('id'=>I('id')))->save($data);
            if ($keyuan){
                $this->success('更新成功');
            }else{
                $this->error('更新失败');
            }
        }
        public function editKeyuan2(){
            $this->keyuan=M('Keyuan')->where(array('id'=>I('id'),'gongsiid'=>session('gongsiid')))->find();
            $this->yongtu=M('Peizhi')->where(array('pzming'=>'yongtu'))->select();
            $this->fukuan=M('Peizhi')->where(array('pzming'=>'fukuan'))->select();
            $this->chaoxiang=M('Peizhi')->where(array('pzming'=>'chaoxiang'))->select();
            $this->kehulx=M('Peizhi')->where(array('pzming'=>'yezhulx'))->select();
            $this->zhuangxiu=M('Peizhi')->where(array('pzming'=>'zhuangxiu'))->select();
            $this->peitao=M('Peizhi')->where(array('pzming'=>'peitao'))->select();
            $this->laiyuan=M('Peizhi')->where(array('pzming'=>'laiyuan'))->select();
            $this->xflinian=M('Peizhi')->where(array('pzming'=>'xflinian'))->select();
            $this->guoji=M('Peizhi')->where(array('pzming'=>'guoji'))->select();
            $this->minzu=M('Peizhi')->where(array('pzming'=>'minzu'))->select();
            $this->kydengji=M('Peizhi')->where(array('pzming'=>'kydengji'))->select();
            $this->khzhuangtai=M('Peizhi')->where(array('pzming'=>'khzhuangtai'))->select();
            $this->zhuangtai=M('Peizhi')->where(array('pzming'=>'zhuangtai'))->select();
            $this->jtgongju=M('Peizhi')->where(array('pzming'=>'jtgongju'))->select();
            $this->gtjieduan=M('Peizhi')->where(array('pzming'=>'gtjieduan'))->select();
            $this->mmzl=M('Peizhi')->where(array('pzming'=>'mmzl'))->select();
            $this->keyuanshu=M('keyuan')->where(array('weihurenid'=>session('uid'),'zhuangtai'=>'1'))->count();
            $id=I('id');
            $chaoxiang1=M('keyuan')->where(array('id'=>$id,'gongsiid'=>session('gongsiid')))->getField('chaoxiang');
            $this->chaoxiang2=explode(",", $chaoxiang1);
            $zhuangxiu1=M('keyuan')->where(array('id'=>$id,'gongsiid'=>session('gongsiid')))->getField('zhuangxiu');
            $this->zhuangxiu2=explode(",", $zhuangxiu1);
            $peitao1=M('keyuan')->where(array('id'=>$id,'gongsiid'=>session('gongsiid')))->getField('peitao');
            $this->peitao2=explode(",", $peitao1);
            $this->display();
        }
        public function editKeyuan2Handle(){
            /*p($_GET);
            die;*/
            $yonghu=M('yonghu');
            if (!$yonghu->autoCheckToken($_GET)) {
                $this->error('请不要重复添加');
            }
            if (session('gongsiid')=="") {
                $this->error('请重新登录');
            }
            $keyuan=M("keyuan");
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
            $cx1=array_keys(I('chaoxiang'));
            $cx2=implode(',',$cx1);
            $data['chaoxiang']=$cx2;
            $zx1=array_keys(I('zhuangxiu'));
            $zx2=implode(',',$zx1);
            $data['zhuangxiu']=$zx2;
            $pt1=array_keys(I('peitao'));
            $pt2=implode(',',$pt1);
            $data['peitao']=$pt2;
            $data['leixing']=I('leixing');
            $data['zhuangtai']=I('zhuangtai');
            $data['gongsiid']=session('gongsiid');
            $data['khxingming']=I('khxingming');
            $data['kehulx']=I('kehulx');
            $data['dianhua']=I('dianhua');
            $data['xqyongtu']=I('xqyongtu');
            $data['xqquyu']=I('xqquyu');
            $data['xqxiaoqu']=I('xqxiaoqu');
            $data['xqhuxing1']=I('xqhuxing1');
            $data['xqhuxing2']=I('xqhuxing2');
            $data['xqjiage1']=I('xqjiage1');
            $data['xqjiage2']=I('xqjiage2');
            $data['xqmianji1']=I('xqmianji1');
            $data['xqmianji2']=I('xqmianji2');
            $data['jiqie']=I('jiqie');
            $data['fukuan']=I('fukuan');
            $data['louceng1']=I('louceng1');
            $data['louceng2']=I('louceng2');
            $data['xqyongtu']=I('xqyongtu');
            $data['fangling1']=I('fangling1');
            $data['fangling2']=I('fangling2');
            $data['xqyuanyin']=I('xqyuanyin');
            $data['khlaiyuan']=I('khlaiyuan');
            $data['sfzheng']=I('sfzheng');
            $data['qqhao']=I('qqhao');
            $data['guoji']=I('guoji');
            $data['minzu']=I('minzu');
            $data['youxiang']=I('youxiang');
            $data['weixin']=I('weixin');
            $data['jtgongju']=I('jtgongju');
            $data['chexing']=I('chexing');
            $data['beizhu']=I('beizhu');
            $data['gtjieduan']=I('gtjieduan');
            $data['xflinian']=I('xflinian');
            $data['kydengji']=I('kydengji');
            $data['mmzl']=I('mmzl');
            $keyuan->where(array('id'=>I('id')))->save($data);
            if ($keyuan){
                $this->success('更新成功');
            }else{
                $this->error('更新失败');
            }
        }
        public function sikeHandle(){
            $data['zhuangtai']=1;
            if (M('keyuan')->where(array('id'=>I('id')))->save($data)) {
                $this->success('修改成功');
            }else{
                $this->error('修改失败');
            }
        }
        public function gongkeHandle(){   
            $data['zhuangtai']=0;
            if (M('keyuan')->where(array('id'=>I('id')))->save($data)) {
                $this->success('修改成功');
            }else{
                $this->error('修改失败');
            }
        }
        //封盘
        public function fengpan(){
            $this->khzhuangtai=M('Peizhi')->where(array('pzming'=>'khzhuangtai'))->select();
            $this->ygmingcheng=M('Yonghu')->where(array('gongsiid'=>session('gongsiid')))->select();
            $this->display();
        }
        //封盘表单处理
        public function fengpanHandle(){
            $data['fengpanrenid']=I('fengpanrenid');
            $data['fengpanren']=I('fengpanren');
            $data['zhuangtai']=I('zhuangtai');
            $keyuan=M("keyuan")->where(array('id'=>I('id')))->save($data);
            if ($keyuan){
                $this->success('添加成功');
            }else{
                $this->error('添加失败');
            }
        }
        //开盘
        public function kaipan(){
            $this->khzhuangtai=M('Peizhi')->where(array('pzming'=>'khzhuangtai'))->select();
            $this->ygmingcheng=M('Yonghu')->where(array('gongsiid'=>session('gongsiid')))->select();
            $this->display();
        }
        //开盘表单处理
        public function kaipanHandle(){
            $data['fengpanrenid']=I('fengpanrenid');
            $data['weihurenid']=I('weihurenid');
            $data['zhuangtai']=I('zhuangtai');
            $keyuan=M("keyuan")->where(array('id'=>I('id')))->save($data);
            if ($keyuan){
                $this->success('添加成功');
            }else{
                $this->error('添加失败');
            }
        }
        //写跟进
        public function genjin(){
            $this->genjinfs=M('Peizhi')->where(array('pzming'=>'genjinfs'))->select();
            $this->ygmingcheng=M('Yonghu')->where(array('gongsiid'=>session('gongsiid')))->select();
            $this->display();
        }
        //写跟进表单处理
        public function genjinHandle(){
            $data['gongsiid']=I('gongsiid');
            $data['kybh']=I('kybh');
            $data['kyid']=I('kyid');
            $data['gjuid']=session('uid');
            $data['genjinfs']=I('gjgenjinfs');
            $data['gjneirong']=I('gjneirong');
            $data['gjshijian']=time();
            if (M('kygenjin')->add($data)) {
                $this->success('添加成功');
            }else{
                $this->error('添加失败');
            }
            $data['gongsiid']=I('gongsiid');
            $data['kybh']=I('kybh');
            $data['kyid']=I('kyid');
            $data['txuid']=session('uid');
            $data['txshijian']=time();
            $data['txneirong']=I('txneirong');
            M('kytixing')->add($data);
        }
        //写提醒
        public function tixing(){
            $this->ygmingcheng=M('Yonghu')->where(array('gongsiid'=>session('gongsiid')))->select();
            $this->display();
        }
        //写提醒表单处理
        public function tixingHandle(){
            $data['gongsiid']=I('gongsiid');
            $data['kybh']=I('kybh');
            $data['kyid']=I('kyid');
            $data['txuid']=session('uid');
            $data['txshijian']=time();
            $data['txneirong']=I('txneirong');
            if (M('kytixing')->add($data)) {
                $this->success('添加成功');
            }else{
                $this->error('添加失败');
            }
        }
        //写带看
        public function daikan(){
            $this->bianhao=M('Fangyuan')->where(array('gongsiid'=>session('gongsiid')))->select();
            $this->display();
        }
        //写带看表单处理
        public function daikanHandle(){
            $newstr = substr(I('dkfangyuan'),0,strlen($str)-1);
            $aaa=explode(';',$newstr);
            $s=count($aaa);
            for ($i=0; $i < $s; $i++) { 
                $data['gongsiid']=I('gongsiid');
                $data['kybh']=I('kybh');
                $data['kyid']=I('kyid');
                $data['dkuid']=session('uid');
                $data['dkshijian']=time();
                $data['dkfangyuan']=$aaa[$i];
                $data['kehupj']=I('kehupj');
                M('kydaikan')->add($data);
            }
            $map['daikan']=1;
            M('Keyuan')->where(array('gongsiid'=>session('gongsiid'),'id'=>$data['kyid']))->save($map);
            $this->success('添加成功');
        }
        public function get_bianhao(){
            $txt=I('txt');
            $listObj = M('Fangyuan');
            $where['_string']='(bianhao like "%'.$txt.'%")';
            $where['gongsiid'] = session('gongsiid');
            $list = $listObj->where($where)->limit(10)->select();
            $data=array('status'=>0,'district'=>$list);
            header("Content-type: application/json");
            exit(json_encode($data));
        }
        //上一条
        public function shangyitiao(){
            $this->display();
        }
        //上一条表单处理
        public function shangyitiaoHandle(){
            if (M('')->add($_POST)) {
                $this->success('添加成功');
            }else{
                $this->error('添加失败');
            }
        }
        //下一条
        public function xiayitiao(){
            $this->display();
        }
        //下一条表单处理
        public function xiayitiaoHandle(){
            if (M('')->add($_POST)) {
                $this->success('添加成功');
            }else{
                $this->error('添加失败');
            }
        }
        //变更维护人
        public function bgwhr(){
            $keyuan=M('Keyuan')->where(array('id'=>I('id'),'gongsiid'=>session('gongsiid')))->find();
            $this->assign('keyuan',$keyuan);
            $this->ygmingcheng=M('Yonghu')->where(array('gongsiid'=>session('gongsiid')))->select();
            $this->weihu=M('Yonghu')->where(array('id'=>$keyuan['weihurenid']))->getField('ygmingcheng');
            $this->display();
        }
        //变更维护人表单处理
        public function bgwhrHandle(){
            $data['weihurenid']=I('weihurenid');
            $keyuan=M("keyuan")->where(array('id'=>I('id')))->save($data);
            if ($keyuan){
                $this->success('修改成功');
            }else{
                $this->error('修改失败');
            }
        }
        //新增电话
        public function xzdianhua(){
            $this->display();
        }
        //设置新增电话处理
        public function xzdianhuaHandle(){
            if (M('')->add($_POST)) {
                $this->success('添加成功');
            }else{
                $this->error('添加失败');
            }
        }
        //通话
        public function tonghua(){
            $this->display();
        }
        //设置通话处理
        public function tonghuaHandle(){
            if (M('')->add($_POST)) {
                $this->success('添加成功');
            }else{
                $this->error('添加失败');
            }
        }
        //修改号码
        public function xiugaihm(){
            $this->display();
        }
        //设置修改号码处理
        public function xiugaihmHandle(){
            if (M('')->add($_POST)) {
                $this->success('添加成功');
            }else{
                $this->error('添加失败');
            }
        }
        //验证号码
        public function yanzhenghm(){
            $this->display();
        }
        //设置验证号码处理
        public function yanzhenghmHandle(){
            if (M('')->add($_POST)) {
                $this->success('添加成功');
            }else{
                $this->error('添加失败');
            }
        }
	}
?>