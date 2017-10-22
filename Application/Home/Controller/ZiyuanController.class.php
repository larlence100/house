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
    class ZiyuanController extends CommonController {
        public function get_citys(){
            $listObj = M('cities');
            $where['provinceid'] = I('province_id');
            $list = $listObj->where($where)->select();
            $data=array('status'=>0,'city'=>$list);
            header("Content-type: application/json");
            exit(json_encode($data));
        }
        public function get_areas(){
            $listObj = M('areas');
            $where['cityid'] = I('area_id');
            $list = $listObj->where($where)->select();
            $data=array('status'=>0,'city'=>$list);
            header("Content-type: application/json");
            exit(json_encode($data));
        }
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
        public function get_xuequ(){
            $txt=I('txt');
            $listObj = M('xuequ');
            $where['_string']='(xuexiaom like "%'.$txt.'%")  OR (pinyinjs like "%'.$txt.'%")';
            $where['gongsiid'] = session('gongsiid');
            $list = $listObj->where($where)->limit(10)->select();
            $data=array('status'=>0,'district'=>$list);
            header("Content-type: application/json");
            exit(json_encode($data));
        }
        public function get_pianqu(){
            $txt=I('txt');
            $listObj = M('pianqu');
            $where['_string']='(pianqum like "%'.$txt.'%")  OR (pinyinjs like "%'.$txt.'%")';
            $where['gongsiid'] = session('gongsiid');
            $list = $listObj->where($where)->limit(10)->select();
            $data=array('status'=>0,'district'=>$list);
            header("Content-type: application/json");
            exit(json_encode($data));
        }
        //行政区列表
        public function xingzhengqu(){
            $this->xingzhengqu=M('xingzhengqu')->order('id desc')->select();
            $this->display();
        }
        //添加行政区
        public function addxzq(){
            $this->display();
        }
        //添加行政区表单处理
        public function addxzqHandle(){
            if (M('xingzhengqu')->add($_POST)) {
                $this->success('添加成功');
            }else{
                $this->error('添加失败');
            }
        }
        //更新行政区
        public function editxzq(){
            $this->xingzhengqu=M('xingzhengqu')->where(array('id'=>I('id')))->find();
            $this->display();
        }
        //更新行政区表单处理
        public function editxzqHandle(){
            $xingzhengqu=M("xingzhengqu");
            $data['xzqming']=I('xzqming');
            $xingzhengqu->where(array('id'=>I('id')))->save($data);
            if ($xingzhengqu){
                $this->success('更新成功');
            }else{
                $this->error('更新失败');
            }
        }
        //删除行政区
        public function delxzq(){
            $id=I('id');
            $dp=M('xingzhengqu');
            $dp->where(array('id'=>$id))->delete();
            if ($dp){
                $this->success('删除成功');
            }else{
                $this->error('删除失败');
            }
        }
        //片区列表
        public function Pianqu(){
            $map=array('gongsiid'=>session('gongsiid'));
            $Data=M('pianqu');
            $count=$Data->where($map)->count();
            $Page=new \Think\Page($count,30);
            $show=$Page->show();
            $list="select * from __PIANQU__ {$condition} order by id DESC limit ".$Page->firstRow.','.$Page->listRows;
            $Pianqu=M('pianqu')->query($list);
            $this->assign('firstRow',$Page->firstRow);
            $this->assign('pianqu',$Pianqu);
            $this->assign('count',$count);
            $this->assign('page',$show);
            $this->ssxzq=M('xingzhengqu')->where(array('id'))->select();
            $this->display();
        }

        //片区列表
        public function region(){
            $Data=M('pianqu');
            $count=$Data->where($map)->count();
            $Page=new \Think\Page($count,30);
            $show=$Page->show();
            $list="select * from __PIANQU__ {$condition} order by id DESC limit ".$Page->firstRow.','.$Page->listRows;
            $Pianqu=M('pianqu')->query($list);
            $this->assign('firstRow',$Page->firstRow);
            $this->assign('pianqu',$Pianqu);
            $this->assign('count',$count);
            $this->assign('page',$show);
            $this->ssxzq=M('xingzhengqu')->where(array('id'))->select();
            $this->display();
        }
        //添加片区
        public function addPianqu(){
            $this->ssxzq=M('xingzhengqu')->select();
            $this->display();
        }
        //添加片区表单处理
        public function addPianquHandle(){
            $_POST['shijian']=time();
            if (M('pianqu')->add($_POST)) {
                $this->success('添加成功');
            }else{
                $this->error('添加失败');
            }
        }
        //更新片区
        public function editPianqu(){
            $this->ssxzq=M('xingzhengqu')->select();
            $this->pianqu=M('pianqu')->where(array('id'=>I('id')))->find();
            $this->display();
        }
        //更新片区表单处理
        public function editPianquHandle(){
            $Pianqu=M("pianqu");
            $data['pianqum']=I('pianqum');
            $data['pinyinjs']=I('pinyinjs');
            $data['ssxzq']=I('ssxzq');
            $data['jingdu']=I('jingdu');
            $data['weidu']=I('weidu');
            $Pianqu->where(array('id'=>I('id')))->save($data);
            if ($Pianqu){
                $this->success('更新成功');
            }else{
                $this->error('更新失败');
            }
        }
        //删除片区
        public function delPianqu(){
            $id=I('id');
            $dp=M('pianqu');
            $dp->where(array('id'=>$id))->delete();
            if ($dp){
                $this->success('删除成功');
            }else{
                $this->error('删除失败');
            }
        }
        //小区列表
        public function Xiaoqu(){
            $sousuo=$_GET['sousuo'];
            if ($sousuo) {//搜索
                $condition.=" where (xiaoqum like '%$sousuo%')";
            }
            $count=M('Xiaoqu')->query("select count(*) from __XIAOQU__ {$condition}");
            $Page=new \Think\Page($count['0']['count(*)'],30);
            $show=$Page->show();
            $list="select * from __XIAOQU__ {$condition} order by id DESC limit ".$Page->firstRow.','.$Page->listRows;
            $Xiaoqu=M('Xiaoqu')->query($list);
            $this->assign('firstRow',$Page->firstRow);
            $this->assign('xiaoqu',$Xiaoqu);
            $this->assign('count',$count);
            $this->assign('page',$show);
            $this->sspianqu=M('Pianqu')->where(array('id'))->select();
            $this->ssxzq=M('Xingzhengqu')->where(array('id'))->select();
            $this->display();
        }
        //添加小区
        public function addXiaoqu(){
            $this->ssxzq=M('provinces')->select();
            $this->sspianqu=M('Pianqu')->select();
            $this->display();
        }
        //添加小区表单处理
        public function addXiaoquHandle(){
            $_POST['shijian']=time();
            if (M('Xiaoqu')->add($_POST)) {
                $this->success('添加成功');
            }else{
                $this->error('添加失败');
            }
        }
        //更新小区
        public function editXiaoqu(){
            $this->ssxzq=M('provinces')->select();
            $this->sspianqu=M('cities')->select();
            $this->ssarea=M('areas')->select();
            $this->xiaoqu=M('Xiaoqu')->where(array('id'=>I('id')))->find();
            $this->display();
        }
        //更新小区表单处理
        public function editXiaoquHandle(){
            $Xiaoqu=M("Xiaoqu");
            $data['xiaoqum']=I('xiaoqum');
            $data['pinyinjs']=I('pinyinjs');
            $data['sspianqu']=I('sspianqu');
            $data['ssarea']=I('ssarea');
            $data['ssxzq']=I('ssxzq');
            $data['csjunjia']=I('csjunjia');
            $data['zdguize']=I('zdguize');
            $data['dituzb']=I('dituzb');
            $data['ssxuexiao']=I('ssxuexiao');
            $data['xiaoqudz']=I('xiaoqudz');
            $Xiaoqu->where(array('id'=>I('id')))->save($data);
            if ($Xiaoqu){
                $this->success('更新成功');
            }else{
                $this->error('更新失败');
            }
        }
        //删除小区
        public function delXiaoqu(){
            $id=I('id');
            $dp=M('Xiaoqu');
            $dp->where(array('id'=>$id))->delete();
            if ($dp){
                $this->success('删除成功');
            }else{
                $this->error('删除失败');
            }
        }
        //学区列表
        public function Xuequ(){
            $sousuo=$_GET['sousuo'];
            if ($sousuo) {//搜索
                $condition.=" where (xuexiaom like '%$sousuo%')";
            }
            $count=M('Xuequ')->query("select count(*) from __XUEQU__ {$condition}");
            $Page=new \Think\Page($count['0']['count(*)'],30);
            $show=$Page->show();
            $list="select * from __XUEQU__ {$condition} order by id DESC limit ".$Page->firstRow.','.$Page->listRows;
            $Xuequ=M('Xuequ')->query($list);
            $this->assign('firstRow',$Page->firstRow);
            $this->assign('xuequ',$Xuequ);
            $this->assign('count',$count);
            $this->assign('page',$show);
            $this->display();
        }
        //添加学区
        public function addXuequ(){
            $this->ssxzq=M('Xingzhengqu')->select();
            $this->sspianqu=M('Pianqu')->select();
            $this->zbxiaoqu=M('Xiaoqu')->select();
            $this->display();
        }
        //添加学区表单处理
        public function addXuequHandle(){
            $_GET['shijian']=time();
            if (M('Xuequ')->add($_GET)) {
                $this->success('添加成功');
            }else{
                $this->error('添加失败');
            }
        }
        //更新学区
        public function editXuequ(){
            $this->ssxzq=M('Xingzhengqu')->select();
            $this->sspianqu=M('Pianqu')->select();
            $this->xuequ=M('Xuequ')->where(array('id'=>I('id')))->find();
            $this->display();
        }
        //更新学区表单处理
        public function editXuequHandle(){
            $Xuequ=M("Xuequ");
            $data['xuexiaom']=I('xuexiaom');
            $data['pinyinjs']=I('pinyinjs');
            $data['xuexiaodz']=I('xuexiaodz');
            $data['duikou']=I('duikou');
            $Xuequ->where(array('id'=>I('id')))->save($data);
            if ($Xuequ){
                $this->success('更新成功');
            }else{
                $this->error('更新失败');
            }
        }
        //删除学区
        public function delXuequ(){
            $id=I('id');
            $dp=M('Xuequ');
            $dp->where(array('id'=>$id))->delete();
            if ($dp){
                $this->success('删除成功');
            }else{
                $this->error('删除失败');
            }
        }
        public function xiaoqurr(){
            $this->count=M('xiaoqu')->count();
            $this->peizhi=M('xiaoqu')->select();
            $id=I('id');
            $this->sspianqu=M('Pianqu')->where(array('id'))->select();
            $this->ssxzq=M('Xingzhengqu')->where(array('id'))->select();
            $zhuzhailx1=M('xiaoqu')->where(array('id'=>$id))->getField('zhuzhailx');
            if ($zhuzhailx1) {
                $condition="pzming = 'fwleixing'";
                $condition.=" and lxid in ($zhuzhailx1)";
                $this->zhuzhailx=M('peizhi')->query("select * from __PEIZHI__ where {$condition}");
            }
            $wuyelx1=M('xiaoqu')->where(array('id'=>$id))->getField('wuyelx');
            if ($wuyelx1) {
                $condition="pzming = 'wuyelx'";
                $condition.=" and lxid in ($wuyelx1)";
                $this->wuyelx=M('peizhi')->query("select * from __PEIZHI__ where {$condition}");
            }
            $this->xiaoqu=M('xiaoqu')->where(array('id'=>$id))->find();
            $this->display();
        }
        public function xiugaixiaoqu(){
            $this->count=M('xiaoqu')->count();
            $this->peizhi=M('xiaoqu')->select();
            $this->sspianqu=M('Pianqu')->where(array('id'))->select();
            $this->ssxzq=M('Xingzhengqu')->where(array('id'))->select();
            $this->xiaoqu=M('xiaoqu')->where(array('id'=>I('id')))->find();
            $this->wuyelx=M('peizhi')->where(array('pzming'=>'wuyelx'))->select();
            $this->zhuzhailx=M('peizhi')->where(array('pzming'=>'fwleixing'))->select();
            $id=I('id');
            $zhuzhailx1=M('xiaoqu')->where(array('id'=>$id))->getField('zhuzhailx');
            $this->zhuzhailx2=explode(",", $zhuzhailx1);
            $wuyelx1=M('xiaoqu')->where(array('id'=>$id))->getField('wuyelx');
            $this->wuyelx2=explode(",", $wuyelx1);
            $this->display();
        }
        public function xiugaixiaoquHandle(){
            $Xiaoqu=M("xiaoqu");
            $zz1=array_keys(I('fwleixing'));
            $zz2=implode(',',$zz1);
            $data['zhuzhailx']=$zz2;
            $wy1=array_keys(I('wuyelx'));
            $wy2=implode(',',$wy1);
            $data['wuyelx']=$wy2;
            $data['fangwuzts']=I('fangwuzts');
            $data['loudongzs']=I('loudongzs');
            $data['jianzaond']=I('jianzaond');
            $data['chanquan']=I('chanquan');
            $data['rongjilv']=I('rongjilv');
            $data['lvhualv']=I('lvhualv');
            $data['zhandimj']=I('zhandimj');
            $data['jianzhumj']=I('jianzhumj');
            $data['ranqi']=I('ranqi');
            $data['diantifuwu']=I('diantifuwu');
            $data['csjunjia']=I('csjunjia');
            $data['gongshui']=I('gongshui');
            $data['gongnuan']=I('gongnuan');
            $data['gongdian']=I('gongdian');
            $data['dshangtcwsl']=I('dshangtcwsl');
            $data['dshangtcwzl']=I('dshangtcwzl');
            $data['dshangtcwsj']=I('dshangtcwsj');
            $data['dxiatcwsl']=I('dxiatcwsl');
            $data['dxiatcwzl']=I('dxiatcwzl');
            $data['dxiatcwsj']=I('dxiatcwsj');
            $data['jiedao']=I('jiedao');
            $data['wuyefei']=I('wuyefei');
            $data['wuyedh']=I('wuyedh');
            $data['wuyemc']=I('wuyemc');
            $data['wuyedz']=I('wuyedz');
            $data['jianjie']=I('jianjie');
            $Xiaoqu->where(array('id'=>I('id')))->save($data);
            if ($Xiaoqu){
                $this->success('更新成功');
            }else{
                $this->error('更新失败');
            }
        }
        //编辑坐标
        public function editzb(){
            $this->xiaoqu=M('Xiaoqu')->where(array('id'=>I('id')))->find();
            $this->display();
        }
        public function editjw(){
            $this->pianqu=M('Pianqu')->where(array('id'=>I('id')))->find();
            $this->display();
        }
        //调整坐标
        public function tzdtzb(){
            $this->xiaoqu=M('Xiaoqu')->where(array('id'=>I('id')))->find();
            $this->display();
        }
        //调整坐标表单处理
        public function tzdtzbHandle(){
            $Xiaoqu=M("Xiaoqu");
            $data['dituzb']=I('dituzb');
            $Xiaoqu->where(array('id'=>I('id')))->save($data);
            if ($Xiaoqu){
                $this->success('更新成功');
            }else{
                $this->error('更新失败');
            }
        }
        public function get_xzqxsj(){
            $listObj = M('xingzhengqu');
            $list = $listObj->order('id desc')->find();
            $data=array('pics'=>$list);
            header("Content-type: application/json");
            exit(json_encode($data));
        }
        public function get_pianqxsj(){
            $listObj = M('pianqu');
            $list = $listObj->order('id desc')->find();
            $data=array('pics'=>$list);
            header("Content-type: application/json");
            exit(json_encode($data));
        }
        public function get_xiaoqxsj(){
            $listObj = M('xiaoqu');
            $list = $listObj->order('id desc')->find();
            $data=array('pics'=>$list);
            header("Content-type: application/json");
            exit(json_encode($data));
        }
        public function get_xueqxsj(){
            $listObj = M('xuequ');
            $list = $listObj->order('id desc')->find();
            $data=array('pics'=>$list);
            header("Content-type: application/json");
            exit(json_encode($data));
        }
        /**
        * webuploader 显示图片上传框
        */
        function scxqtp() {
            $this->display();
        }
        /**
        * webuploader 上传文件
        */
        public function ajax_upload(){
            // 根据自己的业务调整上传路径、允许的格式、文件大小
            $path = "/Upload/".session('gongsiid')."/xiaoqu/".$_POST['xqid'];
            ajax_upload_xq($path);
        }
        /**
         * [get_fy_img 异步返回图片列表]
         * @return [json] [图片相关的数组]
         */
        public function get_xq_img(){
            $listObj = M('xqphoto');
            $where['p.xqid'] = I('xq_id');
            $list = $listObj->alias('p')->join(' jjrxt_yonghu as y on p.uid=y.id ')->field('p.id,p.gongsiid,p.image,FROM_UNIXTIME(p.create_time,"%Y-%m-%d") AS create_time,p.xqid,y.ygmingcheng')->where($where)->order('p.id desc')->select();
            //返回查询结果到异步json
            $data=array('pics'=>$list);
            header("Content-type: application/json");
            exit(json_encode($data));
        }
        /**
        * [fy_pic_del 异步删除图片]
        * @return [json] [description]
        */
        public function xq_pic_del(){
            $id=I('xq_pic_id');
            //根据图片id查看当前是否还有当前房源的图片
            $xqid = M('xqphoto')->where(array('id'=>$id))->getField('xqid');
            $piccount = M('xqphoto')->where(array('xqid'=>$xqid))->count();
            $dp=M('xqphoto');
            if($id){    //删除当前图片
                $plist = $dp->where(array('id'=>$id))->find();
                if ($plist){
                    unlink('./Upload/'.$plist['gongsiid'].'/xiaoqu/'.$plist['xqid'].'/'.$plist['image']);
                    unlink('./Upload/'.$plist['gongsiid'].'/xiaoqu/'.$plist['xqid'].'/t_'.$plist['image']);
                    $dp->where(array('id'=>$id))->delete();
                    $data=array('pics'=>$plist);
                    //删除最后一个房源图片后给fangyun表的tupian字段置 0
                    if ($piccount==1) {
                        M('xiaoqu')->where(array('id'=>$xqid))->setField('tupian',0);
                    }
                }else{
                    $data=array('pics'=>$plist);
                }
            }
            //返回值
            header("Content-type: application/json");
            exit(json_encode($data));
        }
    }
        
        