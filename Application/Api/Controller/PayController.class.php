<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 2017/10/19
 * Time: 15:56
 */

namespace Api\Controller;

use Think\Controller;

require_once LIB_PATH . "WxPay/WxPay.Api.php";
require_once LIB_PATH . 'WxPay/WxPay.Notify.php';

class PayController extends Controller
{
    /**
     * 订单状态回执
     */
    public function notify()
    {

        $notify = new PayNotifyCallBack();
        try{
            $notify->Handle(false);
        }catch(\Exception $e){
            \Think\Log::write('notify---'.$e->getMessage());
        }

    }


}

class PayNotifyCallBack extends \WxPayNotify
{

    protected $logFile = '';

    public function __construct()
    {
        $this->logFile = './log/notify/' . date('Y-m-d', time()) . '.txt';
    }

    /**
     * 记录日志
     * @param string $cont
     */
    public function log($cont = '')
    {
        if (!empty($cont)) {
            file_put_contents($this->logFile, $cont, FILE_APPEND);
            //\Think\Log::write($cont);
        }

    }

    /**
     * 订单消息状态处理流程
     * @param array $data
     * @param string $msg
     * @return bool
     */
    public function NotifyProcess($data, &$msg)
    {

        $this->log("call back:" . json_encode($data));

        $notfiyOutput = [];

        if (!array_key_exists("transaction_id", $data)) {
            $msg = "输入参数不正确";
            return false;
        }
        //查询订单，判断订单真实性
        if (!$this->checkOrder($data["transaction_id"])) {
            $msg = "订单查询失败";
            return false;
        }
        return true;
    }

    /**
     * 订单状态检查
     * @param $transaction_id
     * @return bool
     * @throws \Exception
     */
    public function checkOrder($transaction_id)
    {
        $input = new \WxPayOrderQuery();
        $input->SetTransaction_id($transaction_id);
        $result = \WxPayApi::orderQuery($input);
        $this->log("call back:" . json_encode($result));
        //订单查询成功
        if (array_key_exists("return_code", $result)
            && array_key_exists("result_code", $result)
            && $result["return_code"] == "SUCCESS"
            && $result["result_code"] == "SUCCESS") {

            $updateData = [
                'order_status' => OrderController::IS_PAY_STATUS,
                'pay_time' => time()
            ];

            $order = M('order');
            if (!$order->where(['order_no' => $result['out_trade_no']])->save($updateData)) {
                throw new \Exception('记录失败!');
            };

        }
        return false;
    }


}