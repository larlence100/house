<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE HTML>
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
<meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no" />
<meta http-equiv="Cache-Control" content="no-siteapp" />
<link rel="Bookmark" href="/Public/favicon.ico" >
<link rel="Shortcut Icon" href="/Public/favicon.ico" />
<!--[if lt IE 9]>
<script type="text/javascript" src="/Public/lib/html5shiv.js"></script>
<script type="text/javascript" src="lib/respond.min.js"></script>
<![endif]-->
<link rel="stylesheet" type="text/css" href="/Public/static/h-ui/css/H-ui.min.css" />
<link rel="stylesheet" type="text/css" href="/Public/static/h-ui.admin/css/H-ui.admin.css" />
<link rel="stylesheet" type="text/css" href="/Public/lib/Hui-iconfont/1.0.8/iconfont.css" />
<link rel="stylesheet" type="text/css" href="/Public/static/h-ui.admin/skin/default/skin.css" id="skin" />
<link rel="stylesheet" type="text/css" href="/Public/static/h-ui.admin/css/style.css" />
<!--[if IE 6]>
<script type="text/javascript" src="/Public/lib/DD_belatedPNG_0.0.8a-min.js" ></script>
<script>DD_belatedPNG.fix('*');</script>
<![endif]-->

</head>
<body >


	<link rel="stylesheet" href="/Public/lib/layui/css/layui.css"  media="all">
	<div style="position:fixed;top:0;width: 100%; border-top-style: solid;border-top-width: 2px;border-top-color: #009688;"></div> 
	<article class="page-container">
		<form action="/index.php/home/rbac/addBumenHandle" method="get" class="form form-horizontal" id="form-admin-bumen-add">
			<br/>
			<div class="col-xs-12 col-sm-12">
				<div class="row cl">
					<label class="form-label col-xs-3 col-sm-offset-1">
						<span class="c-red">*</span>部门名称：
					</label>
					<div class="formControls col-xs-5">
						<input type="text" class="input-text" name="bmming">
					</div>
				</div>
				<br/>
				
				<br/>
				<div class="row cl">
					<label class="form-label col-xs-3 col-sm-offset-1">
						<span class="c-red">*</span>部门电话：
					</label>
					<div class="formControls col-xs-5">
						<input type="text" class="input-text" value="" placeholder="" id="" name="bmdianhua">
					</div>
				</div>
				<br/>
				<div class="row cl">
					<label class="form-label col-xs-3 col-sm-offset-1">
						<span class="c-red">*</span>部门地址：
					</label>
					<div class="formControls col-xs-5">
						<input type="text" class="input-text" value="" placeholder="" id="" name="bmdizhi">
					</div>
				</div>
			</div>
  <div style="height: 50px;"></div>
  <div class="layui-form-item" style="width:100%;
    height:45px;
    margin:0 auto;
    background:#fff;
    position:fixed;
    bottom:0;
    text-align:center;
    border-top-style: solid;border-top-width: 1px;border-top-color: #009688;
    padding-top: 5px;
	margin-left: -20px;
    "
     id="submit">
    <div class="layui-input-block" style="margin-left: -15px;">
      <button type="button" class="layui-btn layui-btn-radius" lay-submit="" lay-filter="demo1">立即提交</button>
      <button type="reset" class="layui-btn layui-btn-radius layui-btn-primary">重置</button>
    </div>
  </div>
		</form>
	</article>


<script type="text/javascript" src="/Public/lib/jquery/1.9.1/jquery.min.js"></script> 
<script type="text/javascript" src="/Public/lib/layer/2.4/layer.js"></script>
<script type="text/javascript" src="/Public/static/h-ui/js/H-ui.min.js"></script>
<script type="text/javascript" src="/Public/static/h-ui.admin/js/H-ui.admin.js"></script>

<script>
	$(document).ready(function(){
	    $(document).bind("contextmenu",function(e){
	          return false;
	    });
	});
</script>

	<script type="text/javascript" src="/Public/lib/jquery.validation/1.14.0/jquery.validate.js"></script>
	<script type="text/javascript" src="/Public/lib/jquery.validation/1.14.0/validate-methods.js"></script>
	<script type="text/javascript" src="/Public/lib/jquery.validation/1.14.0/messages_zh.js"></script>
	<script type="text/javascript">
		$(function(){
			$(".permission-list dt input:checkbox").click(function(){
				$(this).closest("dl").find("dd input:checkbox").prop("checked",$(this).prop("checked"));
			});
			$(".permission-list2 dd input:checkbox").click(function(){
				var l =$(this).parent().parent().find("input:checked").length;
				var l2=$(this).parents(".permission-list").find(".permission-list2 dd").find("input:checked").length;
				if($(this).prop("checked")){
					$(this).closest("dl").find("dt input:checkbox").prop("checked",true);
					$(this).parents(".permission-list").find("dt").first().find("input:checkbox").prop("checked",true);
				}
				else{
					if(l==0){
						$(this).closest("dl").find("dt input:checkbox").prop("checked",false);
					}
					if(l2==0){
						$(this).parents(".permission-list").find("dt").first().find("input:checkbox").prop("checked",false);
					}
				}
			});
			$("#form-admin-bumen-add").validate({
				
			});
		});
	</script>
	<!--/请在上方写此页面业务相关的脚本-->

</body>
</html>