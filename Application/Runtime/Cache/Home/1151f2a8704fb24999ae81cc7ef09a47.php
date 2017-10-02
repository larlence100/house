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
		<meta charset="utf-8">
		<title>layui</title>
		<meta name="renderer" content="webkit">
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
		<link rel="stylesheet" href="/kaidandashi/Public/lib/layui/css/layui.css"  media="all">
		<!-- 注意：如果你直接复制所有代码到本地，上述css路径需要改成你本地的 -->
		<style type="text/css">
			html,body{
				margin: 0px 0px;
				width: 100%;
				height: 100%;
			}
			iframe{
				margin: 0px 0px;
				width: 100%;
				height: 80%;
			}
			#form{
				height: 20%;
			}
			.layui-form-item{
				margin-bottom: 0;
			}
			#greetings{
				position: absolute;
				height: auto;
				border-left: 1px solid rgba(0, 0, 0, 0.11);
				border-right: 1px solid rgba(0, 0, 0, 0.11);
				left: 0px;
				z-index:5555; 
			}
			#greetings ul{
				list-style: none;
				box-shadow: 1px 1px 5px rgba(0, 0, 0, 0.44);
				-webkit-margin-before: 0em;
				-webkit-margin-after: 0em;
				-webkit-margin-start: 0px;
				-webkit-margin-end: 0px;
				-webkit-padding-start: 0px;
			}
			#greetings li{
				text-align: left;
				padding: 5px;
				font-family: inherit;
				border-bottom: 1px solid rgba(0, 0, 0, 0.16);
				height: 25px;
				width: 180px;
				line-height: 25px;
				background-color: rgba(255, 255, 255, 0.8);
				cursor: pointer;
			}
			#greetings li:hover{
				background-color: rgba(175, 42, 0, 0.52);
				color: white;
			}
		</style>
	</head>
	<body>
		<form class="layui-form" action="<?php echo U('Keyuan1/Keyuan1list');?>" method="get" target="iframe" id="form">
			<div>&nbsp;</div>
			<div class="layui-form-item">
				<div class="layui-inline">
					<label class="layui-form-label"></label>
					<div class="layui-input-inline" style="width:300px;">
						<input type="text" name="sousuo" list="greetings" autocomplete="off" placeholder="请输入客源编号、小区、业主姓名、电话..." class="layui-input" id="sousuo">
						<div id="greetings" >
							<ul id="tcontent"></ul>
						</div>
					</div>
				</div>
				<div class="layui-inline">
					<button class="layui-btn layui-btn-radius" lay-submit="" lay-filter="demo1">立即查找</button>
					<button type="reset" class="layui-btn layui-btn-radius layui-btn-primary">重置</button>
				</div>
				<div class="layui-inline" style="float:right;">
					<a class="layui-btn  layui-btn-danger" href="javascript:;" id="addKeyuan" onclick="admin_esfy_add('添加客源','<?php echo U('Keyuan1/addKeyuan');?>','950')">
						添加客源
					</a>
					<a class="layui-btn layui-btn-radius layui-btn-primary" href="javascript:location.replace(location.href);" title="刷新">刷新</a>
				</div>
			</div>
			<div class="layui-form-item">
				<div class="layui-inline">
					<label class="layui-form-label">价格</label>
					<div class="layui-input-inline" style="width: 100px;">
						<input type="text" name="jiage" placeholder="￥" autocomplete="off" class="layui-input">
					</div>
					<label class="layui-form-label">面积</label>
					<div class="layui-input-inline" style="width: 100px;">
						<input type="text" name="mianji" placeholder="" autocomplete="off" class="layui-input">
					</div>
				</div>
				<input type="checkbox" lay-filter="checkbox" lay-skin="primary" title="今日浏览" name="jrll" value="1"/>
				<input type="checkbox" lay-filter="checkbox" lay-skin="primary" title="急切" name="jiqie" value="1"/>
				<input type="checkbox" lay-filter="checkbox" lay-skin="primary" title="有带看" name="daikan" value="1"/>
				<input type="checkbox" lay-filter="checkbox" lay-skin="primary" title="我的客源" name="mykeyuan" value="1"/>
				<input type="checkbox" lay-filter="checkbox" lay-skin="primary" title="我的私客" name="mysike" value="1"/>
				<input type="checkbox" lay-filter="checkbox" lay-skin="primary" title="公客" name="gongke" value="1"/>
				<input type="checkbox" lay-filter="checkbox" lay-skin="primary" title="封盘" name="fengpan" value="1">
			</div>
		</form>
		<iframe frameborder=0 width=100% height=90% marginheight=0 marginwidth=0  src="<?php echo U('Keyuan1/Keyuan1list');?>" id="iframe" name='iframe'></iframe>
		<script type="text/javascript" src="/kaidandashi/Public/lib/jquery/1.9.1/jquery.min.js"></script> 
		<script type="text/javascript" src="/kaidandashi/Public/lib/layer/2.4/layer.js"></script>
		<script src="/kaidandashi/Public/lib/layui/layui.js" charset="utf-8"></script>
		<!-- 注意：如果你直接复制所有代码到本地，上述js路径需要改成你本地的 -->
		<script>
			function admin_esfy_add(title,url,w,h){
				layer_show(title,url,w,h);
			}
			function motai(title,url,w,h){
		    	layer_show(title,url,w,h);
			}
			function layer_show(title,url,w,h){
				if (title == null || title == '') {
					title=false;
				};
				if (url == null || url == '') {
					url="404.html";
				};
				if (w == null || w == '') {
					w=800;
				};
				if (h == null || h == '') {
					h=($(window).height() - 50);
				};
				layer.open({
					type: 2,
					area: [w+'px', h +'px'],
					fix: false, //不固定
					maxmin: false,
    				skin: 'layui-layer-rim',
					shade:0.4,
					title: title,
					content: url
				});
			}
			layui.use(['form', 'layedit', 'laydate'], function(){
				var form = layui.form()
				,layer = layui.layer
				,layedit = layui.layedit
				,laydate = layui.laydate;
				form.on('checkbox(checkbox)', function(data){
					$('form').submit();
				});
				form.on('select(province_id)', function(data){
					var province_id=data.value;
					$.ajax({
						url:'<?php echo U('fangyuan/get_citys');?>',
						Type:"POST",
						data:"province_id="+province_id,
						dataType:"json",
						success:function(data){
							var city = data.city;
							$("#city_id option").remove();
							$("#district_id option").remove();
							var option=$("<option></option>");
							$(option).val("");
							$(option).html("请选择");
							var option1=$("<option></option>");
							$(option1).val("");
							$(option1).html("请选择");
							$("#city_id").html(option);
							$("#district_id").html(option1);
							for(var i in city){
								var option=$("<option></option>");
								$(option).val(city[i]['id']);
								$(option).html(city[i]['pianqum']);
								$("#city_id").append(option);
							}
							form.render('select');
						}
	    
					});
				}); 
				form.on('select(city_id)', function(data){
					var city_id=data.value;
					$.ajax({
						url:'<?php echo U('fangyuan/get_district');?>',
						Type:"POST",
						data:"city_id="+city_id,
						dataType:"json",
						success:function(data){
							var district = data.district;
							$("#district_id option").remove();
							var option=$("<option></option>");
							$(option).val("");
							$(option).html("请选择");
							$("#district_id").html(option);
							for(var i in district){
								var option=$("<option></option>");
								$(option).val(district[i]['id']);
								$(option).html(district[i]['xiaoqum']);
								$("#district_id").append(option);
							}
							form.render('select');
						}
					});
				});
				$("#sousuo").keyup(function(){
					$("#greetings").show();
					var txt=$("#sousuo").val();
					if (txt!="") {
						$.ajax({
							url:'<?php echo U('Fysousuo/get_xiaoqu');?>',
							Type:"POST",
							data:"txt="+txt,
							dataType:"json",
							success:function(data){
								var district = data.district;
								$("#tcontent li").remove();
								for(var i in district){
									var li=$("<li></li>");
									$(li).html(district[i]['xiaoqum']);
									$("#tcontent").append(li);
								}
							}
						});
					}
				});
				$("#tcontent").on("click","li", function() {  
					$("#greetings").show(); 
					//var v=$(this).text(); alert(v);        
					var Uarry=$("#tcontent li");  
					var count=$(this).index();//获取li的下标  
					var Tresult=Uarry.eq(count).text();  
					$("#sousuo").val(Tresult); 
					$("#greetings").hide(); 
				})
				$("body").click(function(){
					$("#greetings").hide();
				});
			});
		</script>
	</body>
</html>