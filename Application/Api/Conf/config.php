<?php

return array(

    // 显示页面Trace信息
    'SHOW_PAGE_TRACE' =>true,
    'URL_ROUTER_ON'   => true,

    'URL_ROUTE_RULES'=>array(
        'api/common' => 'Api/Common/getHouseParameList'
    ),

	'TWO_DIR' => '/house',
    'PAY_NOTIFY_URL' => 'http://tangfang.com/api/order/notify',
    'PAY_MONEY' => 0.01
);