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

</head>
<body >


		<link rel="stylesheet" type="text/css" href="/kaidandashi/Public/lib/layui/css/layui.css">
		<div style="position:fixed;top:0;width: 100%; border-top-style: solid;border-top-width: 2px;border-top-color: #009688;"></div> 
	<article class="page-container">
		

		<form action="/kaidandashi/index.php/home/ziyuan/editPianquHandle" method="post" class="form form-horizontal" id="form-admin-pianqu-edit">
			<input type="hidden" name="id" value="<?php echo ($pianqu["id"]); ?>"/>
			<br/>
			<div class="col-xs-12 col-sm-12">
				<div class="row cl">
					<label class="form-label col-xs-3 col-sm-offset-1">
						<span class="c-red">*</span>片区名称：
					</label>
					<div class="formControls col-xs-5">
						<input type="text" class="input-text" value="<?php echo ($pianqu["pianqum"]); ?>" placeholder="" id="pianqum" name="pianqum" required="required">
					</div>
				</div>
                <br/>
                <div class="row cl">
                    <label class="form-label col-xs-3 col-sm-offset-1">
                        <span class="c-red">*</span>拼音检索：
                    </label>
                    <div class="formControls col-xs-5">
                        <input type="text" class="input-text" value="<?php echo ($pianqu["pinyinjs"]); ?>" placeholder="" id="pinyinjs" name="pinyinjs" required="required">
                    </div>
                </div>
				<br/>
				<div class="row cl">
					<label class="form-label col-xs-3 col-sm-offset-1">
						<span class="c-red">*</span>所属行政区：
					</label>
					<div class="formControls col-xs-5">
						<select nullmsg="请选择行政区" datatype="" value="<?php echo ($pianqu["ssxzq"]); ?>" id="ssxzq" name="ssxzq" size="1" class="input-text radius" required>
							<?php if(is_array($ssxzq)): foreach($ssxzq as $key=>$pq): ?><option style="display:none"></option>
	                			<option value="<?php echo ($pq["id"]); ?>" <?php if($pianqu["ssxzq"] == $pq["id"]): ?>selected=""<?php endif; ?>><?php echo ($pq["xzqming"]); ?></option><?php endforeach; endif; ?>
	              		</select>
					</div>
				</div>
				<br/>
				<div class="row cl">
					<label class="form-label col-xs-3 col-sm-offset-1">
						经度：
					</label>
					<div class="formControls col-xs-5">
						<input type="text" class="input-text" value="<?php echo ($pianqu["jingdu"]); ?>" placeholder="点击选择经纬度" id="jingdu" name="jingdu" readonly="readonly">
					</div>
				</div>
				<br/>
				<div class="row cl">
					<label class="form-label col-xs-3 col-sm-offset-1">
						维度：
					</label>
					<div class="formControls col-xs-5">
						<input type="text" class="input-text" value="<?php echo ($pianqu["weidu"]); ?>" placeholder="点击选择经纬度" id="weidu" name="weidu" readonly="readonly">
					</div>
				</div>
			</div>
			<div class="layui-form-item" style="width:100%;height:50px;margin:0 auto;background:#fff;position:fixed;bottom:0;text-align:center;border-top-style: solid;border-top-width: 1px;border-top-color: #009688;padding-top: 5px; margin-left: -15px">
                <div class="layui-form-item"  style="margin-left: -15px;">
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
			$("#form-admin-pianqu-edit").validate({
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
					parent.layer.msg('更新成功');
					parent.layer.close(index);
				}
			});
		});
	</script>
	<script>
        $("#jingdu").click(function(){
            layer.open({
		      type: 2,
		      title: '',
		      shadeClose: true,
		      shade: false,
		      maxmin: true, //开启最大化最小化按钮
		      area: ['800px', '400px'],
		      content: '<?php echo U('Ziyuan/editjw',array('id'=>$pianqu['id']));?>'
			});
		})
        $("#weidu").click(function(){
            layer.open({
		      type: 2,
		      title: '',
		      shadeClose: true,
		      shade: false,
		      maxmin: true, //开启最大化最小化按钮
		      area: ['800px', '400px'],
		      content: '<?php echo U('Ziyuan/editjw',array('id'=>$pianqu['id']));?>'
			});
		})
	</script>
	<!--/请在上方写此页面业务相关的脚本-->

</body>
</html>