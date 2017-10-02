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
class CommonController extends Controller {
    Public function _initialize(){
    	if (ismobile()) {
            $this->redirect('login/model');
        }else{
	        $access = \Org\Util\Rbac::AccessDecision();
	        if(!$access){
	            $this->error('你没有权限1',1,'Mwlogin/index');
	        }
	        if (!isset($_SESSION[C('USER_AUTH_KEY')])) {
	            $this->redirect('Login/index');
	        }
	    }
    }
}?>