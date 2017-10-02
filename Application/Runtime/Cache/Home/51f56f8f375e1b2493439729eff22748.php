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
		<meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no"/><script src="/kaidandashi/Public/echarts/build/dist/echarts-all.js"></script> 
		<meta http-equiv="Cache-Control" content="no-siteapp"/>
		<link rel="stylesheet" type="text/css" href="/kaidandashi/Public/static/h-ui/css/H-ui.min.css"/>
		<link rel="stylesheet" type="text/css" href="/kaidandashi/Public/static/h-ui.admin/css/H-ui.admin.css"/>
		<link rel="stylesheet" type="text/css" href="/kaidandashi/Public/lib/Hui-iconfont/1.0.8/iconfont.css"/>
		<link rel="stylesheet" type="text/css" href="/kaidandashi/Public/static/h-ui.admin/skin/default/skin.css" id="skin"/>
		<link rel="stylesheet" type="text/css" href="/kaidandashi/Public/static/h-ui.admin/css/style.css"/>
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
					<div class="panel panel-default pd-15">
						<div class="mt-20 text-c" id="search_welcome">
							<span class="select-box size-XL" style="width:90px">
								<select name="" id=""  class="select">
									<option value="1">房源</option>
								</select>
							</span>
							<input type="text" placeholder="请输入房源编号、小区、业主姓名、电话、门牌号..." class="input-text ac_input size-XL" name="sousou"  autocomplete="off" style="width:500px" id="search_input">
							<div id="greetings" >
								<ul id="tcontent"></ul>
							</div>
							<a class="btn btn-primary size-XL" id="search_button">查询</a>
						</div>
					</div>
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
								<li>
									<a class="btn radius btn-success size-L" href="javascript:;" onclick="admin_esfy_add('新增(买卖)客源','<?php echo U('Keyuan1/addKeyuan');?>','1100')">+新增(买卖)客源</a>
								</li>
								<li>
									<a class="btn radius btn-success size-L" href="javascript:;" onclick="admin_esfy_add('新增(租赁)客源','<?php echo U('Keyuan1/addKeyuan2');?>','1100')">+新增(租赁)客源</a>
								</li>
							</ul>
						</div>
					</div>
				</div>
				<div class="col-md-4" style="padding-left: 0px;">
					<div class="panel panel-default pd-15" style="height: 170px;" >
						<div class="col-md-5 col-sm-5 col-xs-5">
							<?php if($useri["touxiang"] == 1): ?><a href="javascript:;" onClick="layer_show('添加头像','<?php echo U('Index/avatar');?>',500,400);">
								<img src="/kaidandashi/Upload/Avatar/<?php echo session('gongsiid');?>/<?php echo session('username');?>_100.jpg?+Math.random()" class="img-responsive radius" alt="用户头像" style="width:120px;height: 130px;">
							</a>
							<span>点击上图上传头像<span>
							<?php else: ?>
							<a href="javascript:;" onClick="layer_show('添加头像','<?php echo U('Index/avatar');?>',500,400);">
								<img src="/kaidandashi/Public/static/h-ui/images/ucnter/avatar-default.jpg" class="img-responsive radius" alt="用户头像" style="width:120px;height: 155px;">
								<span>点击上图上传头像<span>
							</a><?php endif; ?>
						</div>
						<div class="col-md-7 col-sm-7 col-xs-7">
							<div>
								<span>姓名</span>
								<span class="pd-15"><?php echo ($useri['ygmingcheng']); ?></span>
							</div>
							<div>
								<span>工号</span>
								<span class="pd-15"><?php echo ($useri['ygbianhao']); ?></span>
							</div>
							<div>
								<span>部门</span>
								<span class="pd-15"><?php echo ($useri['bmming']); ?></span>
							</div>
							<div>
								<span>职务</span>
								<span class="pd-15"><?php echo ($remark); ?></span>
							</div>
							<div>
								<span>电话</span>
								<span class="pd-15"><?php echo ($useri['dianhua']); ?></span>
							</div>
						</div>
					</div>
					<div style="line-height:20PX;">&nbsp;</div>
					<div class="panel panel-default  pd-10" style="">	
						<blockquote>房源收集与发布</blockquote>
						<div class="text-c">
							<table class="table table-border table-bordered">
							  <tr><td colspan="4">收集房源</td></tr>
							  <tr>
							    <td class="va-m" height="30"><a href="http://hn.58.com/ershoufang/" target="_blank" class="pd-10">58同城</a></td>
							    <td class="va-m"><a href="http://huainan.ganji.com/fang5/" target="_blank" class="pd-10">赶集</a></td>
							    <td class="va-m"><a href="http://huainan.baixing.com/ershoufang/" target="_blank" class="pd-10">百姓</a></td>
							    <td class="va-m"><a href="https://huainan.anjuke.com/sale/" target="_blank" class="pd-10">安居客</a></td>
							  </tr>
							</table>
							<div style="line-height:20PX;">&nbsp;</div>
							<table class="table table-border table-bordered">
							  <tr><td colspan="4">发布房源</td></tr>
							  <tr>
							    <td class="va-m" height="30"><a href="http://post.58.com/fang/1/12/s5" target="_blank" class="pd-10">58同城</a></td>
							    <td class="va-m"><a href="http://huainan.ganji.com/pub/pub.php?act=pub&method=load&cid=7&mcid=21&domain=huainan" target="_blank" class="pd-10">赶集</a></td>
							    <td class="va-m"><a href="http://huainan.baixing.com/fabu/ershoufang" target="_blank" class="pd-10">百姓</a></td>
							    <td class="va-m"><a href="https://huainan.anjuke.com/propsale/?from=sy_tab" target="_blank" class="pd-10">安居客</a></td>
							  </tr>
							</table>							
						</div>
					</div>
				</div>
			</div>
		</div>
		<footer class="footer mt-20" style="border: 1px solid #000">
			<div class="container">
				<p>
					Copyright &copy;2008-2017 
					<a href="http://www.kaidandashi.com" target="_blank" title="" style="text-decoration: none;">开单大师</a>
					 All Rights Reserved.<br>
					本系统由
					<a href="http://www.kaidandashi.com" target="_blank" title="" style="text-decoration: none;">淮南市银泰科技软件有限公司</a>
					提供技术支持
				</p>
			</div>
		</footer>
		<script type="text/javascript" src="/kaidandashi/Public/lib/jquery/1.9.1/jquery.min.js"></script>
		<script type="text/javascript" src="/kaidandashi/Public/static/h-ui/js/H-ui.min.js"></script>
		<script type="text/javascript" src="/kaidandashi/Public/lib/layer/2.4/layer.js"></script>
		<script type="text/javascript" src="/kaidandashi/Public/static/h-ui.admin/js/H-ui.admin.js"></script>
		<script type="text/javascript" src="/kaidandashi/Public/lib/datatables/1.10.0/jquery.dataTables.min.js"></script>
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
			$(function());
		</script>
	</body>
</html>