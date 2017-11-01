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
		//'配置项' => '配置值'
		'DB_TYPE' => 'mysql', // 数据库类型
		'DB_HOST' => '127.0.0.1', // 服务器地址
		'DB_NAME' => 'kaidandashi', // 数据库名
		'DB_USER' => 'root', // 用户名
		'DB_PWD' => 'root', // 密码
		'DB_PORT' => '3306', // 端口
		'DB_PREFIX' => 'jjrxt_', // 数据库表前缀
		'DB_CHARSET' => 'utf8', // 数据库编码
		//'DB_DEBUG' => TRUE, // 数据库调试模式 开启后可以记录SQL日志
		'TOKEN_ON' => true, // 是否开启令牌验证 默认关闭
		'TOKEN_NAME' => '__hash__', // 令牌验证的表单隐藏字段名称，默认为__hash__
		'TOKEN_TYPE' => 'md5', //令牌哈希验证规则 默认为MD5
		'TOKEN_RESET' => true, //令牌验证出错后是否重置令牌 默认为true
		'URL_MODEL'   =>  2,

	);