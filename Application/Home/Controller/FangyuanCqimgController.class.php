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
    class FangyuanCqimgController extends CommonController {
    	function index() {
 
        	$this->display();
	    }
    /**
     * webuploader 显示图片上传框
     */
    	function add() {
        	$this->display();
	    }
	   
    /**
     * webuploader 上传文件
     */
    public function ajax_upload(){
        // 根据自己的业务调整上传路径、允许的格式、文件大小
        //$path = "/Upload/".$_POST['fybh'];
        ajax_upload_cqimg();
    }

}
?>
        