<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
	<!-- +~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
	| 开单大师（专业的房产ERP管理系统）
	+~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
	| Copyright (c) 2008-2017 http://www.kaidandashi.com All rights reserved.
	+~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
	| 本系统由淮南市银泰科技软件有限公司提供技术支持
	+~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
	| QQ号：984784483
	+~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<meta name="viewport" content="initial-scale=1.0, user-scalable=no" />
		<style type="text/css">
			body, html,#allmap {width: 98%;height: 100%;margin:1%;font-family:"微软雅黑";}
		</style>
		<script type="text/javascript" src="http://api.map.baidu.com/api?v=2.0&ak=bMcGRysohMkELc3LhlrUnDKlWGbv7Xno"></script>
		<title>单击获取点击的经纬度</title>
	</head>
	<body>
		<link rel="stylesheet" type="text/css" href="/kaidandashi/Public/lib/layui/css/layui.css">
		<div style="line-height:5PX;">&nbsp;</div>
		<div>
			&nbsp;&nbsp;&nbsp;
			<input type="text" class="input-text" id="jingdu" readonly="readonly">
			<input type="text" class="input-text" id="weidu" readonly="readonly">
			<input type="button" class="layui-btn layui-btn-radius" value="确定" id="queding">
		</div>
		<div style="line-height:5PX;">&nbsp;</div>
		<div id="allmap"></div>
		<div style="line-height:5PX;">&nbsp;</div>
	</body>
</html>
<script type="text/javascript" src="/kaidandashi/Public/lib/jquery/1.9.1/jquery.min.js"></script>
<script type="text/javascript">
	// 百度地图API功能
	var map = new BMap.Map("allmap");
	map.centerAndZoom("淮南",12);
	//单击获取点击的经纬度
	map.addEventListener("click",function(e){
		$('#jingdu').val("");
		$('#weidu').val("");
		$('#jingdu').val(e.point.lng);
		$('#weidu').val(e.point.lat);
	});
	$('#queding').on('click', function(){
		var index = parent.layer.getFrameIndex(window.name);
		var jingdu=$('#jingdu').val();
		var weidu=$('#weidu').val();
		parent.$('#jingdu').val(jingdu);
		parent.$('#weidu').val(weidu);
		parent.layer.close(index);
	});
	map.addControl(new BMap.MapTypeControl());//添加地图类型控件
	map.enableScrollWheelZoom(true);//开启鼠标滚轮缩放
	map.enableInertialDragging();
	map.enableContinuousZoom();
	// 添加带有定位的导航控件
	var navigationControl = new BMap.NavigationControl({
		// 靠左上角位置
		anchor: BMAP_ANCHOR_TOP_LEFT,
		// LARGE类型
		type: BMAP_NAVIGATION_CONTROL_LARGE,
		// 启用显示定位
		enableGeolocation: true
	});
	map.addControl(navigationControl);
	// 添加定位控件
	var geolocationControl = new BMap.GeolocationControl();
	geolocationControl.addEventListener("locationSuccess", function(e){
		// 定位成功事件
		var address = '';
		address += e.addressComponent.province;
		address += e.addressComponent.city;
		address += e.addressComponent.district;
		address += e.addressComponent.street;
		address += e.addressComponent.streetNumber;
		alert("当前定位地址为：" + address);
	});
	geolocationControl.addEventListener("locationError",function(e){
		// 定位失败事件
		alert(e.message);
	});
	map.addControl(geolocationControl);
	var size = new BMap.Size(75, 20);
	map.addControl(new BMap.CityListControl({
		anchor: BMAP_ANCHOR_TOP_LEFT,
		offset: size,
		// 切换城市之间事件
		// onChangeBefore: function(){
		//    alert('before');
		// },
		// 切换城市之后事件
		// onChangeAfter:function(){
		//   alert('after');
		// }
	}));
</script>