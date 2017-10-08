<?php if (!defined('THINK_PATH')) exit();?>﻿<!DOCTYPE HTML>
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
		<meta name="renderer" content="webkit|ie-comp|ie-stand">
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no"/>
		<meta http-equiv="Cache-Control" content="no-siteapp"/>
		<link rel="stylesheet" type="text/css" href="/Public/static/h-ui/css/H-ui.min.css"/>
		<link rel="stylesheet" type="text/css" href="/Public/static/h-ui.admin/css/H-ui.admin.css"/>
		<link rel="stylesheet" type="text/css" href="/Public/lib/Hui-iconfont/1.0.8/iconfont.css"/>
		<link rel="stylesheet" type="text/css" href="/Public/static/h-ui.admin/skin/default/skin.css" id="skin"/>
		<link rel="stylesheet" type="text/css" href="/Public/static/h-ui.admin/css/style.css"/>
		<style type="text/css">
			#greetings{
				position: absolute;
				height: auto;
				border-left: 1px solid rgba(0, 0, 0, 0.11);
				border-right: 1px solid rgba(0, 0, 0, 0.11);
				left: 186px;
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
			a:link{
				text-decoration:none;
			}
			a:visited{
				color:blue;
				text-decoration:none;
			}
			a:hover{
				color:red;
				text-decoration:none;
			}
			a:active{
				color:orange;
				text-decoration:none;
			}
		</style>
		<title>我的桌面</title>
	</head>
	<body>
		<div class="container mt-20"  style="height: 500px;">
			<div class="row">
				<div class="col-md-8">

					<div class="panel panel-default mt-20 ">
						<div class="pl-10 pt-10 pr-10">
							<blockquote>常用入口</blockquote>
						</div>
						<div class="pb-10 text-c  class="inline"">
							<ul class="inline">
								<li>
									<a class="btn radius btn-danger size-L" href="javascript:;" onclick="admin_esfy_add('新增(出售)房源','<?php echo U('Fangyuan/addEsfy',array('jylx'=>'1'));?>','950')">+新增(出售)房源</a>
								</li>
								<li>
									<a class="btn radius btn-danger size-L" href="javascript:;" onclick="admin_esfy_add('新增(出租)房源','<?php echo U('Fangyuan/addEsfy',array('jylx'=>'2'));?>','950')">+新增(出租)房源</a>
								</li>
							</ul>
						</div>
					</div>
				</div>
				<div class="col-md-4" style="padding-left: 0px;">
					<div class="panel panel-default pd-15" style="height: 170px;" >

						<div class="col-md-7 col-sm-7 col-xs-7">
							<div>
								<span>账号</span>
								<span class="pd-15"><?php echo ($useri['ygmingcheng']); ?></span>
							</div>
							<div>
								<span>角色</span>
								<span class="pd-15"><?php echo ($remark); ?></span>
							</div>
							<div>
								<span>电话</span>
								<span class="pd-15"><?php echo ($useri['dianhua']); ?></span>
							</div>
						</div>
					</div>
					<div style="line-height:20PX;">&nbsp;</div>

				</div>
			</div>
		</div>
		<footer class="footer mt-20" style="border: 1px solid #000">
			<div class="container">
				<p>
					Copyright &copy;2017-2020房屋管理系统All Rights Reserved.<br>
				</p>
			</div>
		</footer>
		<script type="text/javascript" src="/Public/lib/jquery/1.9.1/jquery.min.js"></script>
		<script type="text/javascript" src="/Public/static/h-ui/js/H-ui.min.js"></script>
		<script type="text/javascript" src="/Public/lib/layer/2.4/layer.js"></script>
		<script type="text/javascript" src="/Public/static/h-ui.admin/js/H-ui.admin.js"></script>
		<script type="text/javascript" src="/Public/lib/datatables/1.10.0/jquery.dataTables.min.js"></script>
		<script>
			$(document).ready(function(){
				$(document).bind("contextmenu",function(e){
					return false;
				});
			});
			/*搜索输入时显示下拉提示*/
			$("#search_input").keyup(function(){
				$("#greetings").show();
				var txt=$("#search_input").val();
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
							var tt1 = $("#tcontent").height();
							if(tt1>250){
								$("#greetings").css();
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
				$("#search_input").val(Tresult);
				$("#greetings").hide();
			});
			/*关闭搜索输入时显示下拉提示*/
			$("body").click(function(){
				$("#greetings").hide();
			});
			/*搜索提交，打开一个TAB，显示房源列表页面*/
			$("#search_welcome").on("click","#search_button",function(){
				Hui_admin_tabb1(this);
			});
			function Hui_admin_tabb1(obj){
				var txt = $('#search_input').val();
				var bStop = false,
				bStopIndex = 0,
				href = '<?php echo U('Fangyuan/esfy');?>?txt='+txt,
				title = '二手房源',
				topWindow = $(window.top.document),
				show_navLi = topWindow.find("#min_title_list li"),
				iframe_box = topWindow.find("#iframe_box");
				//console.log(topWindow);
				if(!href||href==""){
					alert("data-href不存在，v2.5版本之前用_href属性，升级后请改为data-href属性");
					return false;
				}
				if(!title){
					alert("v2.5版本之后使用data-title属性");
					return false;
				}
				if(title==""){
					alert("data-title属性不能为空");
					return false;
				}
				show_navLi.each(function(){
					if($(this).find('span').html()==title){
						bStop=true;
						bStopIndex=show_navLi.index($(this));
						return false;
					}
				});
				if(!bStop){
					creatIframe(href,title);
					min_titleList();
				}
				else{
					show_navLi.removeClass("active").eq(bStopIndex).addClass("active");
					iframe_box.find(".show_iframe").hide().eq(bStopIndex).show().find("iframe").attr("src",href);
				}	
			}
			
			
			/*公告打开新的tab*/
			$("#gonggao").on("click","a",function(){
				Hui_admin_tabb(this);
			});
			/*添加房源*/
			function admin_esfy_add(title,url,w,h){
				layer_show(title,url,w,h);
			}
		</script>
		<script>
		    // #tab_demo 父级id
		    // #tab_demo .tabBar span 控制条
		    // #tab_demo .tabCon 内容区
		    // click 事件 点击切换，可以换成mousemove 移动鼠标切换
		    // 1默认第2个tab为当前状态（从0开始）
			$(function(){
				$.Huitab("#tab_ticheng .tabBar span","#tab_ticheng .tabCon","current","mousemove","0")
			});
		</script>
	</body>
</html>