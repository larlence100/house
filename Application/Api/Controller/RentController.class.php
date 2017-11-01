<?php
namespace Api\Controller;
use Think\Exception;

/**
 * User: liujianjiang
 */
class RentController extends ApiController
{
    const PAGESIZE = 20;

    public function rent_list(){
                $pageSize = I('pagesize')? I('pagesize'): static::PAGESIZE;
                //根据城市获取片区
                /*$pianqu = M('pianqu');
                $pianquRow = $pianqu->where(['pinyinjs'=>$city])->limit(1)->find();*/

                //根据片区获取小区
                /*$xiaoqu = M('xiaoqu');
                $xiaoquResult = $xiaoqu->where(['sspianqu'=>$pianquRow['id']])->select();
                $xiaoquIds = array();
                foreach($xiaoquResult as $item)
                {
                    $xiaoquIds[] = $item['id'];
                }
                var_dump($xiaoquIds);exit;*/

                $pianqu = I('city');
                $leixing=I('leixing');
                $yongtu=I('yongtu');

                $condition = ' status=1';
                if($leixing){
                    $condition.=" and leixing=$leixing";
                }
                if($pianqu){//片区
                    $condition.=" and pianqu=".$pianqu;
                }

                $xiaoqu = I('xiaoqu');
                if ($xiaoqu) {//小区
                    $condition.=" and xiaoqu=".$xiaoqu;
                }

                $xiaoqum = I('xiaoqum');
                if ($xiaoqum) {//小区
                    $condition.=" and xiaoqum like '%".$xiaoqum."%'";
                }

                $area = I('area');
                if($area){
                    $condition.=" and ssarea=".$area;
                }

                if ($yongtu) {//用途
                    $condition.=" and yongtu=$yongtu";
                }

                if ($jiage1!="" and $jiage2!="") {//售价区间
                    $condition.=" and shoujia>$jiage1 and shoujia<=$jiage2";
                }else if ($jiage1) {
                    $condition.=" and shoujia>$jiage1";
                }else if ($jiage2) {
                    $condition.=" and shoujia<=$jiage2";
                }


                $min_mianji = I('min_mianji',0);
                $max_mianji = I('max_mianji',0);
                if ($min_mianji && $max_mianji) {//建筑面积区间
                    $condition.=" and mianji>=$min_mianji and mianji<=$max_mianji";
                }else if ($min_mianji) {
                    $condition.=" and mianji>=$min_mianji";
                }else if ($max_mianji) {
                    $condition.=" and mianji<=$max_mianji";
                }

                $shi = I('shi',0);
                if ($shi) {//户型区间
                    $condition.=" and shi>=$shi";
                }

                $zhuangxiu = I('zhuangxiu',0);
                if ($zhuangxiu) {//户型区间
                    $condition.=" and zhuangxiu>=$zhuangxiu";
                }

                //出租类型 租租价区间
                if($leixing == 1){
                    $min_price = I('min_price',0);
                    $max_price = I('max_price',0);
                    if ($min_price && $max_price) {//建筑面积区间
                        $condition.=" and zujia>=$min_price and zujia<=$max_price";
                    }else if ($min_price) {
                        $condition.=" and zujia>=$min_price";
                    }else if ($max_price) {
                        $condition.=" and zujia<=$max_price";
                    }
                }

                //出租类型 租租价区间
                if($leixing == 2){
                    $min_price = I('min_price',0);
                    $max_price = I('max_price',0);
                    if ($min_price && $max_price) {//建筑面积区间
                        $condition.=" and shoujia>=$min_price and shoujia<=$max_price";
                    }else if ($min_price) {
                        $condition.=" and shoujia>=$min_price";
                    }else if ($max_price) {
                        $condition.=" and shoujia<=$max_price";
                    }
                }
                //var_dump($condition);exit;

                $count=M('fangyuan')->query("select count(*) as total from __FANGYUAN__ where {$condition}");
                $Page  = new \Think\Page($count['0']['count(*)'],$pageSize);
                $show  = $Page->show();// 分页显示输出

               /* if (I('paixu')==1) {
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
                }*/
                $paixu = "lurusj DESC";

                $list="select * from jjrxt_fangyuan where {$condition} order by ".$paixu." limit ".$Page->firstRow.','.$Page->listRows;
                $Model = new \Think\Model;
                $fangyuan=$Model->query($list);
                foreach($fangyuan as $k=>$v){
                    $fangyuan[$k]['photo'] = getHousePhoto($v['bianhao']);
                }
                return $this->returnApiSuccessWithData(['count'=>$count[0]['total'],'pagesize'=>$pageSize,'list'=>$fangyuan]);

    }

    /**
     * 房屋详情
     */
    public function detail()
    {
        try{
            $id = I('id');
            $result = getHouseInfoById($id);

            //经纬度
            $xiaoquInfo = getXiaoQuInfo($result['xiaoqu']);
            $logAndDim = explode(',',$xiaoquInfo['dituzb']);
            $result['longitude'] = $logAndDim[0];
            $result['dimensions'] = $logAndDim[1];

            //图片
            $result['photo'] = getHousePhoto($result['bianhao']);

            //用户是否收藏该房源
            $result['is_collect'] = 0;
            $check = checkUserFangyuanCollect($id,$this->user->id);
            if($check){
                $result['is_collect'] = 1;
            }
            return $this->returnApiSuccessWithData($result);
        }catch (Exception $e){
            return $this->returnApiErrorWithMsg($e->getMessage());
        }
    }

    public function rent_list_new(){
        $pianqu = I('cityid');
        $model = M('fangyuan');
        $result = $model->where(['pianqu'=>$pianqu,'leixing'=>2])->order('lurusj desc')->limit(3)->select();
        foreach($result as $k=>$v){
            $result[$k]['photo'] = getHousePhoto($v['bianhao']);
        }
        return $this->returnApiSuccessWithData($result);

    }

}