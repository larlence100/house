<?php
namespace Api\Controller;
/**
 * User: liujianjiang
 */
class RentController extends ApiController
{
    const PAGESIZE = 20;

    public function rent_list(){
                $city = I('city');

                //根据城市获取片区
                $pianqu = M('pianqu');
                $pianquRow = $pianqu->where(['pinyinjs'=>$city])->limit(1)->find();

                //根据片区获取小区
                /*$xiaoqu = M('xiaoqu');
                $xiaoquResult = $xiaoqu->where(['sspianqu'=>$pianquRow['id']])->select();
                $xiaoquIds = array();
                foreach($xiaoquResult as $item)
                {
                    $xiaoquIds[] = $item['id'];
                }
                var_dump($xiaoquIds);exit;*/

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

                if($leixing){
                    $condition.="leixing=$leixing";
                }
                if($pianquRow['id']){//片区
                    $condition.=" and pianqu=".$pianquRow['id'];
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
                $count=M('fangyuan')->query("select count(*) as total from __FANGYUAN__ where {$condition}");
                $Page  = new \Think\Page($count['0']['count(*)'],20);
                $show  = $Page->show();// 分页显示输出
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
                }else{
                    $paixu="bianhao DESC";
                }
                $list="select * from jjrxt_fangyuan where {$condition} order by ".$paixu." limit ".$Page->firstRow.','.$Page->listRows;
                $Model = new \Think\Model;
                $fangyuan=$Model->query($list);
                foreach($fangyuan as $k=>$v){
                    $fangyuan[$k]['photo'] = getHousePhoto($v['bianhao']);
                }
                return $this->returnApiSuccessWithData(['count'=>$count[0]['total'],'pagesize'=>static::PAGESIZE,'list'=>$fangyuan]);

             /*   $this->xiaoqum=M('xiaoqu')->where(array('gongsiid'=>session('gongsiid')))->select();

                $this->zujialx=M('Peizhi')->where(array('pzming'=>'zujialx'))->select();
                $this->leixing=M('Peizhi')->where(array('pzming'=>'leixing'))->select();
                $this->yongtu=M('Peizhi')->where(array('pzming'=>'yongtu'))->select();
                $this->zhuangtai=M('Peizhi')->where(array('pzming'=>'zhuangtai'))->select();
                $this->chaoxiang=M('Peizhi')->where(array('pzming'=>'chaoxiang'))->select();
                $this->zhuangxiu=M('Peizhi')->where(array('pzming'=>'zhuangxiu'))->select();

                $today=date("m-d");
                $this->user_chankan=M('yonghu')->where(array('id'=>session('uid')))->getField('xzchakan');
                $this->xzchakan=M('xianzhi')->where(array('uid'=>session('uid'),'time'=>$today))->count();*/
    }

    /**
     * 房屋详情
     */
    public function detail()
    {
        $id = I('id');
        $result = getHouseInfoById($id);

        //经纬度
        $xiaoquInfo = getXiaoQuInfo($result['xiaoqu']);
        $logAndDim = explode(',',$xiaoquInfo[dituzb]);
        $result['longitude'] = $logAndDim[0];
        $result['dimensions'] = $logAndDim[1];

        //图片
        $result['photo'] = getHousePhoto($result['bianhao']);

        if(empty($result)){
            return $this->returnApiSuccessWithMsg('非法ID');
        }
        return $this->returnApiSuccessWithData($result);
    }

}