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
    'APPID'=>'wxb016a561c08a5946',
    'SECRET'=>'0ee063eb452cbe753c99876833b07dc6'
);