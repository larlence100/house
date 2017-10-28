<?php
/**
 * User: liujianjiang
 */

namespace Api\Controller;


class SmsController extends BaseController
{
    public function send()
    {
        return 1;
      /*  $mobile = I('mobile');
        $cacheMobile= S($mobile);

        //限制发送频率
        if($cacheMobile){
            $this->returnApiErrorWithMsg('发送频率过于频繁');
        }

        $code = rand(1000,9999);
        import('Org.Alidayu.top.TopClient');
        import('Org.Alidayu.top.ResultSet');
        import('Org.Alidayu.top.RequestCheckUtil');
        import('Org.Alidayu.top.TopLogger');
        import('Org.Alidayu.top.request.AlibabaAliqinFcSmsNumSendRequest');
        $c = new \TopClient;
        $c->appkey = '24658029';
        $c->secretKey = '3be0c812b179557aff9c449eba055094';
        $req = new \AlibabaAliqinFcSmsNumSendRequest;
        $req ->setExtend( "123456" );
        $req ->setSmsType( "normal" );
        $req ->setSmsFreeSignName( "天天淘房" );//来源于配置短信签名 下面列表中有签名名称
        $product = '';
        $req ->setSmsParam( "{code:'{$code}',product:'{$product}'}" ); //变量来源于 配置短信模板 点击列表中的详情 模板内容的变量
        $req ->setRecNum( $mobile ); //手机号
        $req ->setSmsTemplateCode("SMS_68645010"); //配置短信模板 列表中有模板id
        $resp = $c ->execute( $req );
        if($resp->result->err_code == 0){
            //限制频率
            S($mobile,$mobile,60);
            //存表
            smsLog($mobile,$code);
            $this->returnApiSuccessWithMsg('发送成功');
        }else{
            $this->returnApiErrorWithMsg('发送失败');
        }*/
    }
}