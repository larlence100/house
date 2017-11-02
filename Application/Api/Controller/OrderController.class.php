<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 2017/10/19
 * Time: 15:56
 */

namespace Api\Controller;

use Think\Exception;

require_once LIB_PATH . "WxPay/WxPay.Api.php";
require_once LIB_PATH . "WxPay/WxPay.JsApiPay.php";

class OrderController extends ApiController
{

    const IS_NO_PAY_STATUS = 0;
    const IS_PAY_STATUS = 1;
    const ERROR_PAY_STATUS = 2;

    public function get_user_list()
    {
        try{
            $pageSize = I('pagesize')? I('pagesize'): 20;
            $where['user_id'] = array('eq',$this->user->id);
            $count = M('order')->where($where)->order('order_time')->count();
            $Page  = new \Think\Page($count['0']['count(*)'],$pageSize);
            $list = M('order')->where($where)->order('order_time')->limit($Page->firstRow.','.$Page->listRows)->select();
            return $this->returnApiSuccessWithData(['count'=>$count[0]['total'],'pagesize'=>$pageSize,'list'=>$list]);
        }catch (Exception $e){
            return $this->returnApiErrorWithMsg($e->getMessage());
        }
    }

    /**
     * 微信小程序统一下单
     */
    public function unifiedorder()
    {
        $id = I('fangyuan_id');
        $result = getHouseInfoById($id);
        $order = buildOrderNo($result['id'], $this->user->id);
        $input = new \WxPayUnifiedOrder();
        $input->SetBody("支付订单" . $order['order_no']);
        $input->SetOut_trade_no($order['order_no']);
        $input->SetTotal_fee($order['order_money'] * 100);
        $input->SetNotify_url(C('PAY_NOTIFY_URL'));
        $input->SetTrade_type("JSAPI");
        $input->SetOpenid($this->user->appid);
        $input->SetAttach($order['order_no']);
        $input->SetTime_start(date("YmdHis"));
        $input->SetTime_expire(date("YmdHis", time() + 600));
        $input->SetTimeStamp(time());
        $input->SetGoods_tag('天天淘房');
        try {
            $result = \WxPayApi::unifiedOrder($input);
            if (strtolower($result['return_code']) == 'success' && strtolower($result['result_code']) == 'fail') {

                $errorCode = $result['err_code'];
                $errorMsg = '';

                switch ($errorCode) {
                    case 'NOAUTH':
                        $errorMsg = '商户未开通此接口权限';
                        break;
                    case 'NOTENOUGH':
                        $errorMsg = '用户帐号余额不足';
                        break;
                    case 'ORDERPAID':
                        $errorMsg = '商户订单已支付，无需重复操作';
                        break;
                    case 'ORDERCLOSED':
                        $errorMsg = '当前订单已关闭，无法支付';
                        break;
                    case 'SYSTEMERROR':
                        $errorMsg = '系统超时 ';
                        break;
                    case 'APPID_NOT_EXIST':
                        $errorMsg = '参数中缺少APPID ';
                        break;
                    case 'MCHID_NOT_EXIST':
                        $errorMsg = '参数中缺少MCHID';
                        break;
                    case 'APPID_MCHID_NOT_MATCH':
                        $errorMsg = 'appid和mch_id不匹配';
                        break;
                    case 'LACK_PARAMS':
                        $errorMsg = '缺少必要的请求参数';
                        break;
                    case 'OUT_TRADE_NO_USED':
                    case 'INVALID_REQUEST':
                        $errorMsg = '商户订单号重复';
                        break;
                    case 'SIGNERROR':
                        $errorMsg = '参数签名结果不正确';
                        break;
                    case 'XML_FORMAT_ERROR':
                        $errorMsg = 'XML格式错误';
                        break;
                    case 'REQUIRE_POST_METHOD':
                        $errorMsg = '未使用post传递参数';
                        break;
                    case 'NOT_UTF8':
                        $errorMsg = '未使用指定编码格式';
                        break;
                }

                if (!empty($errorMsg)) $this->returnApiErrorWithMsg($errorMsg);
                if (strpos($result['return_msg'], 'time_expire') !== false) {
                    $this->returnApiErrorWithMsg('微信订单支付过期失效,请重新下单');
                } else {
                    $params = json_encode($input, true);
                    $this->returnApiErrorWithMsg($params);
                }

            } else if (strtolower($result['return_code']) == 'success' && strtolower($result['result_code']) == 'success') {
                //成功
                $tools = new \JsApiPay();
                $jsApiParameters = $tools->GetJsApiParameters($result);
                $this->returnApiSuccessWithData(json_decode($jsApiParameters, true));
            } else {
                $this->returnApiErrorWithMsg($result);
            }
        } catch (Exception $e) {
            $msg = $e->getMessage();
            $this->returnApiErrorWithMsg($msg);
        }

    }


}