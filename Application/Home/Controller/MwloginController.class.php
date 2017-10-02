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
define("TOKEN", "");//你微信定义的token
define("APPID", "ww7b8b2da64568acd1");//你微信定义的appid,企业微信的cropID
define("APPSECRET","Tzig9GKyCyJcARyJ2AVblkKoTX63fSnGEsG38QXTd1E");//你微信公众号的appsecret
define("AGENTID","1000002");//授权方的网页应用ID，在具体的网页应用中查看
session_start;//打开session
class MwloginController extends Controller {
    public function index(){
        //用户正在登录状态，直接跳转
        if (session('?uid')) {
            $this->redirect('Fangyuan/esfy');
        }
        //根据用户cookie进行登录
        if ($dianhua=cookie('dianhua')) {
            //根据微信取得的用户账号(手机号)进行登录 UserId
            $userphone = $dianhua;
            
            $db=M('Yonghu');
    
            $user=$db->where(array('dianhua' =>$userphone,'lock'=>0))->find();
    
            if (!$user) {
                $this->redirect('Mwlogin/404'); 
            }
    
            $data = array(
                'id'=>$user['id'],
                'logintime'=>time(),
                'loginip'=>get_client_ip()
                );
            $db->save($data);
    
            session('uid',$user['id']);
            session('ygmingcheng',$user['ygmingcheng']);
            session('gongsiid',$user['gongsiid']);
            session('username',$user['dianhua']);
            session('logintime',date('Y-m-d H:i:s',$user['logintime']));
            session('loginip',$user['loginip']);
    
            $timeout = 3600*24*7;
            //存入cookie
            cookie('dianhua',$user['dianhua'],$timeout);
    
            if($user['dianhua'] == C('RBAC_SUPERADMIN')){
                session(C('ADMIN_AUTH_KEY'),true);
            }
            
            \Org\Util\Rbac::saveAccessList();
            
            if (ismobile()) {
                $this->redirect('Fangyuan/esfy');
            }else{
                $this->redirect('Index/index');
            }
        }


        //这个链接是获取code的链接 链接会带上code参数
        $REDIRECT_URI = "http://".$_SERVER['HTTP_HOST']."/index.php/Home/Mwlogin/login";
        $redirect_url = urlencode($REDIRECT_URI);
        $state = md5(mktime());

        //$url = "https://open.work.weixin.qq.com/wwopen/sso/qrConnect?appid=".APPID."&agentid=".AGENTID."&redirect_uri=".$redirect_url."&state=".$state;
        $url = "https://open.weixin.qq.com/connect/oauth2/authorize?appid=".APPID."&redirect_uri=".$redirect_url."&response_type=code&scope=snsapi_userinfo&agentid=".AGENTID."&state=".$state."#wechat_redirect";
        header("location:$url");

    }

    public function login(){
 
        $code = $_GET['code'];
        //用code获取access_token
        $url = "https://qyapi.weixin.qq.com/cgi-bin/gettoken?corpid=".APPID."&corpsecret=".APPSECRET;

        $res = $this->https_request($url);
        $res = json_decode($res,true);

        $access_token = $res['access_token'];

        //获取微信用户信息
        $url = "https://qyapi.weixin.qq.com/cgi-bin/user/getuserinfo?access_token=".$access_token."&code=".$code;

        $res = $this->https_request($url);
        $res = json_decode($res,true);

        //echo ($res);

        //根据微信取得的用户账号(手机号)进行登录 UserId
        $userphone = $res['UserId'];
        
        $db=M('Yonghu');

        $user=$db->where(array('dianhua' =>$userphone,'lock'=>0))->find();

        if (!$user) {

            $this->redirect('Mwlogin/404'); 
        }

        $data = array(
            'id'=>$user['id'],
            'logintime'=>time(),
            'loginip'=>get_client_ip()
            );
        $db->save($data);

        session('uid',$user['id']);
        session('ygmingcheng',$user['ygmingcheng']);
        session('gongsiid',$user['gongsiid']);
        session('username',$user['dianhua']);
        session('logintime',date('Y-m-d H:i:s',$user['logintime']));
        session('loginip',$user['loginip']);

        $timeout = 3600*24*7;
        //存入cookie
        cookie('dianhua',$user['dianhua'],$timeout);

        if($user['dianhua'] == C('RBAC_SUPERADMIN')){
            session(C('ADMIN_AUTH_KEY'),true);
        }
        
        \Org\Util\Rbac::saveAccessList();
        
        if (ismobile()) {
            $this->redirect('Fangyuan/esfy');
        }else{
            $this->redirect('Index/index');
        }

        
    }

    function https_request($url, $data = null)
    {
        $curl = curl_init();
        curl_setopt($curl, CURLOPT_URL, $url);
        curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, FALSE);
        curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, FALSE);
        if (!empty($data)){
            curl_setopt($curl, CURLOPT_POST, 1);
            curl_setopt($curl, CURLOPT_POSTFIELDS, $data);
        }
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
        $output = curl_exec($curl);
        curl_close($curl);
        return $output;
    }

    public function Logout(){
        session(null);
        $this->redirect('Mwlogin/405');
    }

/**
 * 获取当前页面完整URL地址
 */
public function get_url() {
    $sys_protocal = isset($_SERVER['SERVER_PORT']) && $_SERVER['SERVER_PORT'] == '443' ? 'https://' : 'http://';
    $php_self = $_SERVER['PHP_SELF'] ? $_SERVER['PHP_SELF'] : $_SERVER['SCRIPT_NAME'];
    $path_info = isset($_SERVER['PATH_INFO']) ? $_SERVER['PATH_INFO'] : '';
    $relate_url = isset($_SERVER['REQUEST_URI']) ? $_SERVER['REQUEST_URI'] : $php_self.(isset($_SERVER['QUERY_STRING']) ? '?'.$_SERVER['QUERY_STRING'] : $path_info);
    return $sys_protocal.(isset($_SERVER['HTTP_HOST']) ? $_SERVER['HTTP_HOST'] : '').$relate_url;
}
}
        
