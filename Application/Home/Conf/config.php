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

return array(
	//'配置项'=>'配置值'
	'RBAC_SUPERADMIN'=>'admin', //超级管理员名称
	'ADMIN_AUTH_KEY'=>'superadmin', //超级管理员识别
	'USER_AUTH_ON'=>TRUE, //是否开启验证
	'USER_AUTH_TYPE'=>1, //验证类型（1：登录验证 2：时时验证）
	'USER_AUTH_KEY'=>'uid', //用户认证识别号
	'NOT_AUTH_MODULE'=>'Index,Chengjiao', //无需验证的控制器
	'NOT_AUTH_ACTION'=>'', //无需验证的方法
	'RBAC_ROLE_TABLE'=>'jjrxt_role',
	'RBAC_USER_TABLE'=>'jjrxt_role_user',
	'RBAC_ACCESS_TABLE'=>'jjrxt_access',
	'RBAC_NODE_TABLE'=>'jjrxt_node',

	//图片上传配置
	'UPLOAD_CONFIG' => array(
        'mimes'         =>  array(), //允许上传的文件MiMe类型
        'maxSize'       =>  2048000, //上传的文件大小限制 (0-不做限制)
        'exts'          =>  array('jpg','png','gif'), //允许上传的文件后缀
        'autoSub'       =>  false, //自动子目录保存文件
        'subName'       =>  array('date', 'Y-m-d'), //子目录创建方式，[0]-函数名，[1]-参数，多个参数使用数组
        'rootPath'      =>  './Upload/Avatar/', //保存根路径
        'savePath'      =>  '', //保存路径
        'saveName'      =>  'temp', //上传文件命名规则，[0]-函数名，[1]-参数，多个参数使用数组
        'saveExt'       =>  'jpg', //文件保存后缀，空则使用原后缀
        'replace'       =>  true, //存在同名是否覆盖
        'hash'          =>  true, //是否生成hash编码
        'callback'      =>  false, //检测文件是否存在回调，如果存在返回文件信息数组
        'driver'        =>  'Local', // 文件上传驱动
        'driverConfig'  =>  array(), // 上传驱动配置
    ),
);