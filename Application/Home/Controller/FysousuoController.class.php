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
    class FysousuoController extends CommonController {

        public function index(){

            if (!$_GET['isget']) {
                $condition="gongsiid=".session('gongsiid');
                $condition.=" and leixing=1";
                //$condition.=" and zhuangtai=1";
                $count=M('fangyuan')->query("select count(*) from __FANGYUAN__ where {$condition}");
                /*p($count);
                die;*/
                $Page  = new \Think\Page($count['0']['count(*)'],20);// 实例化分页类 传入总记录数和每页显示的记录数(25)
                $show  = $Page->show();// 分页显示输出

                $list="select * from jjrxt_fangyuan a left outer join 
(select fyid,count(*) dqshu from jjrxt_xianzhi group by fyid) b on a.id=b.fyid where {$condition} order by bianhao DESC limit ".$Page->firstRow.','.$Page->listRows;
                $Model = new \Think\Model;
                $fangyuan=$Model->query($list);


                $this->assign('fangyuan',$fangyuan);// 赋值数据集
                $this->assign('count',$count);// 赋值分页输出
                $this->assign('page',$show);

                $this->zujialx=M('Peizhi')->where(array('pzming'=>'zujialx'))->select();
                $this->leixing=M('Peizhi')->where(array('pzming'=>'leixing'))->select();
                $this->yongtu=M('Peizhi')->where(array('pzming'=>'yongtu'))->select();
                $this->zhuangtai=M('Peizhi')->where(array('pzming'=>'zhuangtai'))->select();
$this->chaoxiang=M('Peizhi')->where(array('pzming'=>'chaoxiang'))->select();
                $this->zhuangxiu=M('Peizhi')->where(array('pzming'=>'zhuangxiu'))->select();

                $today=date("m-d");
                $this->user_chankan=M('yonghu')->where(array('id'=>session('uid')))->getField('xzchakan');
                $this->xzchakan=M('xianzhi')->where(array('uid'=>session('uid'),'time'=>$today))->count();

                $this->display();// 输出模板
            }else{
                $leixing=$_GET['leixing'];
                $xiaoqu=$_GET['xiaoqu'];
                $zuodong=$_GET['zuodong'];
                $danyuan=$_GET['danyuan'];
                $fanghao=$_GET['fanghao'];
                $sousuo=$_GET['sousuo'];
                $mysipan=$_GET['mysipan'];
                $myfy=$_GET['myfy'];
                $mysc=$_GET['mysc'];
                $jrll=$_GET['jrll'];
                $zrp=$_GET['zrp'];
                $daiqueding=$_GET['daiqueding'];
                $taobaochi=$_GET['taobaochi'];
                $gongpan=$_GET['gongpan'];
                $tupian=$_GET['tupian'];
                $shipin=$_GET['shipin'];
                $dujia=$_GET['dujia'];
                $fplujing=$_GET['fplujing'];
                $fpdianhua=$_GET['fpdianhua'];
                $tzchedan=$_GET['tzchedan'];
                $xinshang=$_GET['xinshang'];
                $jishou=$_GET['jishou'];
                $wumenpai=$_GET['wumenpai'];

                $xuequ=$_GET['xuequ'];
                $xinzheng=$_GET['xinzheng'];
                $youdaikuan=$_GET['youdaikuan'];
                $noxiaoqu=$_GET['noxiaoqu'];

                //$zhuangtai=$_GET['zhuangtai'];
                $zhuangxiu=$_GET['zhuangxiu'];
                $chaoxiang=$_GET['chaoxiang'];
                $yongtu=$_GET['yongtu'];

                //$waiwangtb=$_GET['waiwangtb'];
                $yaoshi=$_GET['yaoshi'];

                $jiage1=$_GET['jiage1'];
                $jiage2=$_GET['jiage2'];
                $mianji1=$_GET['mianji1'];
                $mianji2=$_GET['mianji2'];
                
                $lurusj1=strtotime($_GET['shijian1']);
                $lurusj2=strtotime($_GET['shijian2']);

                $huxing1=$_GET['huxing1'];
                $huxing2=$_GET['huxing2'];

                $louceng1=$_GET['louceng1'];
                $louceng2=$_GET['louceng2'];

                $condition="gongsiid=".session('gongsiid');
                
                if($leixing){//片区
                    $condition.=" and leixing=$leixing";
                }
                if ($xiaoqu) {//小区
                    $condition.=" and xiaoqu=$xiaoqu";
                }
                if ($xuequ) {//学区
                    $condition.=" and xuequ=$xuequ";
                }
                if ($xinzheng) {//新证
                    $condition.=" and xinzheng=$xinzheng";
                }
                if ($youdaikuan) {//有贷款
                    $condition.=" and youdaikuan=$youdaikuan";
                }

                if ($zuodong) {//座栋
                    $condition.=" and zuodong=$zuodong";
                }
                if ($danyuan) {//单元
                    $condition.=" and danyuan=$danyuan";
                }
                if ($fanghao) {//房号
                    $condition.=" and fanghao=$fanghao";
                }
                if ($sousuo) {//搜索
                    $condition.=" and (fybiaoti like '%$sousuo%' or yezhu like '%$sousuo%' or weihuren like '%$sousuo%' or yezhudianhua like '$sousuo' or bianhao like '%$sousuo%' or xiaoqum like '%$sousuo%')";
                }
                if ($mysipan) {//我的私盘
                    $user_id=session('uid');
                    $condition.=" and zhuangtai=2 and weihurenid=$user_id";
                }
                if ($myfy) {//我的房源
                    $user_id=session('uid');
                    $condition.=" and weihurenid=$user_id";
                }
                if ($mysc) {//我的收藏
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
                if ($jrll) {//今日浏览
                    $today="sj".date("m-d");
                    if (!cookie($today)) {
                        $history=0;
                    }else{
                        $history = cookie($today);
                    }
                    $condition.=" and id in ($history)";
                }
                if ($taobaochi) {//淘宝池
                    $condition.=" and zhuangtai=3";
                }
                /*if ($zhuangtai) {//状态
                    $condition.=" and zhuangtai=$zhuangtai";
                }*/
                if ($zhuangxiu) {//装修
                    $condition.=" and zhuangxiu=$zhuangxiu";
                }
                if ($chaoxiang) {//朝向
                    $condition.=" and chaoxiang=$chaoxiang";
                }
                if ($yongtu) {//用途
                    $condition.=" and yongtu=$yongtu";
                }
                if ($tupian) {//图片
                    $condition.=" and tupian=$tupian";
                }
                if ($xinshang) {
                    $xshang=time()-(86400*3);
                    $condition.=" and lurusj>$xshang";
                }
                if ($shipin) {//视频
                    $condition.=" and tupian=$tupian";//没做
                }
                if ($jishou) {//急售
                    $condition.=" and jishou=$jishou";
                }
                /*if ($waiwangtb) {//外网同步
                    $condition.=" and waiwangtb=$waiwangtb";
                }*/
                if ($yaoshi) {//是否有钥匙
                    $condition.=" and shouyaobm<>''";
                }
                if ($noxiaoqu) {//小区id为空
                    $condition.=" and xiaoqu is null";
                }
                if ($jiage1!="" and $jiage2!="") {//售价区间
                    $condition.=" and shoujia>$jiage1 and shoujia<=$jiage2";
                }else if ($jiage1) {
                    $condition.=" and shoujia>$jiage1";
                }else if ($jiage2) {
                    $condition.=" and shoujia<=$jiage2";
                }
                if ($mianji1!="" and $mianji2!="") {//建筑面积区间
                    $condition.=" and mianji>$mianji1 and mianji<=$mianji2";
                }else if ($mianji1) {
                    $condition.=" and mianji>$mianji1";
                }else if ($mianji2) {
                    $condition.=" and mianji<=$mianji2";
                }
                if ($lurusj1!="" and $lurusj2!="") {//录入时间区间
                          $lurusj3=$lurusj2+86399;
                    $condition.=" and lurusj>$lurusj1 and lurusj<=$lurusj3";
                }else if ($lurusj1) {
                    $condition.=" and lurusj>$lurusj1";
                }else if ($lurusj2) {
                    $lurusj3=$lurusj2+86399;
                    $condition.=" and lurusj<=$lurusj3";
                }
                if ($huxing1!="" and $huxing2!="") {//户型区间
                    $condition.=" and shi>=$huxing1 and shi<=$huxing2";
                }else if ($huxing1) {
                    $condition.=" and shi>=$huxing1";
                }else if ($huxing2) {
                    $condition.=" and shi<=$huxing2";
                }

                if ($louceng1!="" and $louceng2!="") {//楼层区间
                    $condition.=" and louceng>=$louceng1 and louceng<=$louceng2";
                }else if ($louceng1) {
                    $condition.=" and louceng>=$louceng1";
                }else if ($louceng2) {
                    $condition.=" and louceng<=$louceng";
                }
                $count=M('fangyuan')->query("select count(*) from __FANGYUAN__ where {$condition}");
                /*p($count);
                die;*/
                $Page  = new \Think\Page($count['0']['count(*)'],20);// 实例化分页类 传入总记录数和每页显示的记录数(25)
                $show  = $Page->show();// 分页显示输出
                
                //$list="select * from __FANGYUAN__ where {$condition} order by bianhao DESC limit ".$Page->firstRow.','.$Page->listRows;
                //$fangyuan=M('fangyuan')->query($list);
                if (I('paixu')==1) {
                    $paixu="bianhao DESC";
                }elseif (I('paixu')==2) {
                    $paixu="shoujia DESC";
                }elseif (I('paixu')==3) {
                    $paixu="shoujia ASC";
                }elseif (I('paixu')==4) {
                    $paixu="mianji DESC";
                }elseif (I('paixu')==5) {
                    $paixu="mianji ASC";
                }elseif (I('paixu')==6) {
                    $paixu="danjia DESC";
                }elseif (I('paixu')==7) {
                    $paixu="danjia ASC";
                }
                $list="select * from jjrxt_fangyuan a left outer join 
(select fyid,count(*) dqshu from jjrxt_xianzhi group by fyid) b on a.id=b.fyid where {$condition} order by ".$paixu." limit ".$Page->firstRow.','.$Page->listRows;
                $Model = new \Think\Model;
                $fangyuan=$Model->query($list);

                $this->assign('fangyuan',$fangyuan);// 赋值数据集
                $this->assign('count',$count);// 赋值分页输出
                $this->assign('page',$show);


                $this->xiaoqum=M('xiaoqu')->where(array('gongsiid'=>session('gongsiid')))->select();

                $this->zujialx=M('Peizhi')->where(array('pzming'=>'zujialx'))->select();
                $this->leixing=M('Peizhi')->where(array('pzming'=>'leixing'))->select();
                $this->yongtu=M('Peizhi')->where(array('pzming'=>'yongtu'))->select();
                $this->zhuangtai=M('Peizhi')->where(array('pzming'=>'zhuangtai'))->select();
                $this->chaoxiang=M('Peizhi')->where(array('pzming'=>'chaoxiang'))->select();
                $this->zhuangxiu=M('Peizhi')->where(array('pzming'=>'zhuangxiu'))->select();

                $today=date("m-d");
                $this->user_chankan=M('yonghu')->where(array('id'=>session('uid')))->getField('xzchakan');
                $this->xzchakan=M('xianzhi')->where(array('uid'=>session('uid'),'time'=>$today))->count();
                    $this->display();
            }
        }
        //搜索框异步小区
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

}
?>
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        