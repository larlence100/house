<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 2017/10/19
 * Time: 15:56
 */
namespace Api\Controller;

use Think\Exception;

class OrderController extends ApiController {

    // 微信登录
    public function get_price()
    {
        try{
            $id = I('fangyuan_id','');
            $fangyuan = M('fangyuan');
            $result = getHouseInfoById($id);

            $this->returnApiSuccessWithData(['price'=>100]);
        }catch (Exception $e){
            $this->returnApiErrorWithMsg($e->getMessage());
        }

    }

    public function create_order()
    {
        try{
            $id             = I('fangyuan_id','');
            $order_no       = I('order_no','');
            $order_money    = I('order_money',0);
            $order_time     = I('order_time',time());

            $fangyuan   = M('fangyuan');
            $order      = M('order');
            $result = getHouseInfoById($id);

            $addData = [
                'fangyuan_id'=>$id,
                'order_no'=>$order_no,
                'order_money'=>$order_money,
                'order_time'=>$order_time
            ];
            if (!$order->add($addData)){
                throw new Exception('记录失败!');
            };

            $this->returnApiSuccessWithData(['phone'=>$result['yezhudianhua']]);

        }catch (Exception $e){
            $this->returnApiErrorWithMsg($e->getMessage());
        }

    }


}