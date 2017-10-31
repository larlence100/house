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



    public function order_pay()
    {
        try{
            $id  = I('fangyuan_id');

            $result = getHouseInfoById($id);

            $order_no = buildOrderNo($result['id'],$this->user->id);

            $this->returnApiSuccessWithData(['phone'=>$result['yezhudianhua']]);

        }catch (Exception $e){
            $this->returnApiErrorWithMsg($e->getMessage());
        }

    }

    public function pay_callback()
    {
        try{
            $order_no       = I('order_no');

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