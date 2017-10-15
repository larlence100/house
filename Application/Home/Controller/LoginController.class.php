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

class LoginController extends Controller {
    public function index(){
        
        $this->display(); 
    }
    public function model(){
        $this->display();
    }
    public function VerifyImg(){

        $verify = new \Think\Verify();
        //$verify->useZh = true;  //使用中文验证码
    $verify->fontSize = 35; //验证码字体大小
    $verify->useNoise = false;  //关闭验证码干扰项
        $verify->length = 4;
        $verify->imageW = 220;
        $verify->imageH= 70;
        ob_end_clean();
        
        $verify->entry();
    }

    public function Login(){

        if (!IS_POST)halt('页面不存在');
        
        $verify = new \Think\Verify();
        $code= I('yzm');                
        if($verify->check($code) === false){       
        $this->error('验证码错误','index');
        }

        $db=M('yonghu');

        if(I('username') != C('RBAC_SUPERADMIN')){
            $gongsi=$db->where(array('gongsiid' =>I('gongsiid')))->find();
            if (!$gongsi) {
                $this->error('公司账号错误','index');
            }
        }

        $user=$db->where(array('dianhua' =>I('username'),'gongsiid'=>I('gongsiid')))->find();
        if (!$user || $user['mima'] != I('password','','md5')) {
            $this->error('账号或密码错误','index');
        }
        if ($user['lock1']==1) {
            $this->error('账号已被停用','index');
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

        if($user['dianhua'] == C('RBAC_SUPERADMIN')){
            session(C('ADMIN_AUTH_KEY'),true);
        }
        
        \Org\Util\Rbac::saveAccessList();
        
        

        $this->redirect('Index/index');
    }

    public function Logout(){
        session_unset();
        session_destroy();
        $this->redirect('Login/index');
    }
}