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

    const PAY_MONEY         = 100;
    const IS_NO_PAY_STATUS  = 0;
    const IS_PAY_STATUS        = 1;
    const ERROR_PAY_STATUS  = 2;

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

    public function order_pay()
    {
        try{
            $id             = I('fangyuan_id','');
            $session_id     = I('session_id','');

            $fangyuan   = M('fangyuan');
            $order      = M('order');
            $result = getHouseInfoById($id);

            $userSession = getUserBySessionId($session_id);
            $order_no = buildOrderNo();
            $addData = [
                'fangyuan_id'=>$id,
                'user_id'   =>$userSession['user_id'],
                'order_no'  =>  $order_no,
                'order_money'=>static::PAY_MONEY,
                'order_status'=>static::IS_NO_PAY_STATUS,
                'order_time'=>time()
            ];
            if (!$order->add($addData)){
                throw new Exception('订单生成失败!');
            };

            $this->returnApiSuccessWithData(['phone'=>$result['yezhudianhua']]);

        }catch (Exception $e){
            $this->returnApiErrorWithMsg($e->getMessage());
        }

    }

    public function pay_callback()
    {
        try{
            $session_id     = I('session_id','');
            $order_no       = I('order_no','');
            $order_money    = I('order_money',0);

            $userSession = getUserBySessionId($session_id);
            $userOrder =    getOrderByOrderNo($order_no);

            $updateData = [
                'order_status'=>static::IS_PAY_STATUS
            ];
            $order = M('order');
            if (!$order->where(['order_no'=>$order_no])->save($updateData)){
                throw new Exception('记录失败!');
            };

            $fangyuan = getHouseInfoById($userOrder['fangyuan_id']);
            $this->returnApiSuccessWithData(['phone'=>$fangyuan['yezhudianhua']]);

        }catch (Exception $e){
            $this->returnApiErrorWithMsg($e->getMessage());
        }

    }


}