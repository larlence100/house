<?php

return array(

    // 显示页面Trace信息
    'SHOW_PAGE_TRACE' =>true,
    'URL_ROUTER_ON'   => true,

    'URL_ROUTE_RULES'=>array(
        'api/common' => 'Api/Common/getHouseParameList'
    ),

	'TWO_DIR' => '',
    'PAY_NOTIFY_URL' => 'http://118.31.33.47/api/pay/notify',
    'PAY_MONEY' => 0.01,
    'APPID'=>'wxd60a9da2a894158b',
    'SECRET'=>'f63615e5126f553e1f35e80e48fb2411'
);