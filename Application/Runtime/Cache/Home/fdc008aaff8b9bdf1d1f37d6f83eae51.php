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
<link rel="Bookmark" href="/kaidandashi/Public/favicon.ico" >
<link rel="Shortcut Icon" href="/kaidandashi/Public/favicon.ico" />
<!--[if lt IE 9]>
<script type="text/javascript" src="/kaidandashi/Public/lib/html5shiv.js"></script>
<script type="text/javascript" src="lib/respond.min.js"></script>
<![endif]-->
<link rel="stylesheet" type="text/css" href="/kaidandashi/Public/static/h-ui/css/H-ui.min.css" />
<link rel="stylesheet" type="text/css" href="/kaidandashi/Public/static/h-ui.admin/css/H-ui.admin.css" />
<link rel="stylesheet" type="text/css" href="/kaidandashi/Public/lib/Hui-iconfont/1.0.8/iconfont.css" />
<link rel="stylesheet" type="text/css" href="/kaidandashi/Public/static/h-ui.admin/skin/default/skin.css" id="skin" />
<link rel="stylesheet" type="text/css" href="/kaidandashi/Public/static/h-ui.admin/css/style.css" />
<!--[if IE 6]>
<script type="text/javascript" src="/kaidandashi/Public/lib/DD_belatedPNG_0.0.8a-min.js" ></script>
<script>DD_belatedPNG.fix('*');</script>
<![endif]-->

	<style type="text/css">
        #greetings{
            position: absolute;
            height: auto;
            border-left: 1px solid rgba(0, 0, 0, 0.11);
            border-right: 1px solid rgba(0, 0, 0, 0.11);
            left: 0px;
            z-index:5555; 
            display: none;
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
    <link rel="stylesheet" type="text/css" href="/kaidandashi/Public/lib/layui/css/layui.css">

</head>
<body >


	<div style="position:fixed;top:0;width: 100%; border-top-style: solid;border-top-width: 2px;border-top-color: #009688;"></div>
	<article class="page-container"  style="margin-top: 10px;">
		
		<form action="/kaidandashi/index.php/home/ziyuan/editxzqHandle" method="post" class="form form-horizontal" id="form-admin-xzq-edit">
			<input type="hidden" name="id" value="<?php echo ($xingzhengqu["id"]); ?>"/>
			<br/>
			<div class="layui-form-item">
				<div class="layui-inline">
					<label class="layui-form-label" style="color:#f00;">
						行政区名：
					</label>
					<div class="layui-input-inline">
						<input type="text" class="input-text" value="<?php echo ($xingzhengqu["xzqming"]); ?>" placeholder="" id="xzqming" name="xzqming" required="required">
					</div>
				</div>
			</div>
			<div class="layui-form-item" style="width:100%;height:50px;margin:0 auto;background:#fff;position:fixed;bottom:0;text-align:center;border-top-style: solid;border-top-width: 1px;border-top-color: #009688;padding-top: 5px;margin-left: -15px;">
                <div class="layui-form-item" style="margin-left: -20px;">
                    <button class="layui-btn layui-btn-radius" lay-submit="" lay-filter="demo1">立即更新</button>
                    <button type="reset" class="layui-btn layui-btn-radius layui-btn-primary">重置</button>
                </div>
            </div>
		</form>
	</article>


<script type="text/javascript" src="/kaidandashi/Public/lib/jquery/1.9.1/jquery.min.js"></script> 
<script type="text/javascript" src="/kaidandashi/Public/lib/layer/2.4/layer.js"></script>
<script type="text/javascript" src="/kaidandashi/Public/static/h-ui/js/H-ui.min.js"></script>
<script type="text/javascript" src="/kaidandashi/Public/static/h-ui.admin/js/H-ui.admin.js"></script>

<script>
	$(document).ready(function(){
	    $(document).bind("contextmenu",function(e){
	          return false;
	    });
	});
</script>

	<script type="text/javascript" src="/kaidandashi/Public/lib/jquery.validation/1.14.0/jquery.validate.js"></script>
	<script type="text/javascript" src="/kaidandashi/Public/lib/jquery.validation/1.14.0/validate-methods.js"></script>
	<script type="text/javascript" src="/kaidandashi/Public/lib/jquery.validation/1.14.0/messages_zh.js"></script>
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
			$("#form-admin-xzq-edit").validate({
				rules:{
					roleName:{
						required:true,
					},
				},
				onkeyup:false,
				focusCleanup:true,
				success:"valid",
				submitHandler:function(form){
					$(form).ajaxSubmit();
					var index = parent.layer.getFrameIndex(window.name);
					parent.location.reload();
					parent.layer.msg('更新成功',{time:3600});
					setTimeout("parent.location.reload();",{time:3600});
				}
			});
		});
	</script>

</body>
</html>