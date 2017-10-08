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

</head>
<body >


<div style="position:fixed;top:0;width: 100%; border-top-style: solid;border-top-width: 2px;border-top-color: #009688;"></div>
	<article class="page-container"  style="margin-top: 10px;">
		<link rel="stylesheet" type="text/css" href="/kaidandashi/Public/lib/layui/css/layui.css">
		<form action="/kaidandashi/index.php/home/ziyuan/addXiaoquHandle" method="post" class="form form-horizontal" id="form-admin-xiaoqu-add">
			<br/>
			<div class="row cl">
				<label class="form-label col-xs-4 col-sm-2">
					<span class="c-red">*</span>小区名称：
				</label>
				<div class="formControls col-xs-8 col-sm-4">
					<input type="text" class="input-text" value="" placeholder="" id="xiaoqum" name="xiaoqum" required="required">
				</div>
				<label class="form-label col-xs-4 col-sm-2">
					<span class="c-red">*</span>拼音检索：
				</label>
				<div class="formControls col-xs-8 col-sm-4">
					<input type="text" class="input-text" value="" placeholder="" id="pinyinjs" name="pinyinjs" required="required">
				</div>
			</div>
			<br/>
			<div class="row cl">
				<label class="form-label col-xs-4 col-sm-2">
					<span class="c-red">*</span>所属片区：
				</label>
				<div class="formControls col-xs-8 col-sm-4">
					<select nullmsg="请选择行政区" datatype="" value="" id="province_id" name="ssxzq" size="1" class="input-text radius" required>
						<?php if(is_array($ssxzq)): foreach($ssxzq as $key=>$pq): ?><option style="display:none"></option>
                			<option value="<?php echo ($pq["id"]); ?>"><?php echo ($pq["xzqming"]); ?></option><?php endforeach; endif; ?>
              		</select>
				</div>
				<div class="formControls col-xs-8 col-sm-4">
					<select nullmsg="请选择片区" datatype="" value="" id="city_id" name="sspianqu" size="1" class="input-text radius" required>
              		</select>
				</div>
			</div>
			<br/>
			<!--<div class="row cl">
				<label class="form-label col-xs-2 col-sm-2">
					周边学区：
				</label>
				<div class="layui-input-inline">
					<textarea type="text" name="ssxuexiao" autocomplete="off" placeholder="点击搜索" class="layui-input" id="sousuo1" style="width: 333px;"></textarea>
                    <input type="hidden" name="xiaoqu" id="xiaoqu">
                    <div id="greetings">
                        <input type="text" name="" autocomplete="off" placeholder="请搜索小区并选择" class="layui-input" id="sousuo">
                        <ul id="tcontent"></ul>
                    </div>
                </div>
                <a class="layui-btn layui-btn-primary" id="cz1">重置</a>
			</div>-->
			<br/>
			<div class="row cl">
				<label class="form-label col-xs-4 col-sm-2">
					出售均价：
				</label>
				<div class="formControls col-xs-8 col-sm-4">
					<input type="text" class="input-text" value="" placeholder="" id="csjunjia" name="csjunjia">
				</div>
			</div>
			<br/>
			<div class="row cl">
				<label class="form-label col-xs-4 col-sm-2">
					地图坐标：
				</label>
				<div class="formControls col-xs-8 col-sm-4">
					<input type="text" class="input-text" value="" placeholder="" id="dituzb" name="dituzb" readonly="readonly">
				</div>
				<label class="form-label col-xs-4 col-sm-2">
					小区地址：
				</label>
				<div class="formControls col-xs-8 col-sm-4">
					<input type="text" class="input-text" value="" placeholder="" id="xiaoqudz" name="xiaoqudz">
				</div>
			</div>
			<div class="layui-form-item" style="width:100%;height:50px;margin:0 auto;background:#fff;position:fixed;bottom:0;text-align:center;border-top-style: solid;border-top-width: 1px;border-top-color: #009688;padding-top: 5px;margin-left: -20px;">
                <div class="layui-form-item" style="margin-left: -15px;">
                    <button class="layui-btn layui-btn-radius" lay-submit="" lay-filter="demo1">立即提交</button>
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
			$("#form-admin-xiaoqu-add").validate({
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
					parent.layer.msg('添加成功',{time:2100});
					parent.xsjxiaoq();
					parent.layer.close(index);
				}
			});
		});
	</script>
	<script>
		$("#province_id").change(function(){
			var province_id=$(this).val();
			$.ajax({
				url:'<?php echo U('Ziyuan/get_citys');?>',
				Type:"POST",
				data:"province_id="+province_id,
				dataType:"json",
				success:function(data){
					var city = data.city;
					var option=$("<option></option>");
					$(option).val("0");
					$(option).html("请选择");
					var option1=$("<option></option>");
					$(option1).val("0");
					$(option1).html("请选择");
					$("#city_id").html(option);
					$("#district_id").html(option1);
					for(var i in city){
						var option=$("<option></option>");
						$(option).val(city[i]['id']);
						$(option).html(city[i]['pianqum']);
						$("#city_id").append(option);
					}
				}
			});
		});
	</script>
	<script>
		$("#city_id").change(function(){
			var city_id=$(this).val();
			$.ajax({
				url:'<?php echo U('Ziyuan/get_district');?>',
				Type:"POST",
				data:"city_id="+city_id,
				dataType:"json",
				success:function(data){
					var district = data.district;
					var option=$("<option></option>");
					$(option).val("0");
					$(option).html("请选择");
					$("#district_id").html(option);
					for(var i in district){
						var option=$("<option></option>");
						$(option).val(district[i]['id']);
						$(option).html(district[i]['xiaoqum']);
						$("#district_id").append(option);
					}
				}
			});
		});
	</script>
	<script>
		$("#sousuo1").click(function(){
            var display =$('#greetings').css('display');
            if(display == 'none'){
                $("#greetings").show();
            }else{
                $("#greetings").hide(); 
            }
        })
        $("#sousuo").keyup(function(){
            $("#greetings").show();
            var txt=$("#sousuo").val();
            if (txt!="") {
                $.ajax({
                    url:'<?php echo U('Ziyuan/get_xuequ');?>',
                    Type:"POST",
                    data:"txt="+txt,
                    dataType:"json",
                    success:function(data){
                        var district = data.district;
                        $("#tcontent li").remove();
                        for(var i in district){
                            var li=$("<li></li>");
                            $(li).attr('dataid',district[i]['id']);
                            $(li).html(district[i]['xuexiaom']);
                            $("#tcontent").append(li);
                        }
                    }
                });
            }
        });
        $("#tcontent").on("click","li", function() {  
            $("#greetings").show();
            var Uarry=$("#tcontent li");
            var count=$(this).index();
            var Tresult=Uarry.eq(count).text();
            var xuequid=Uarry.eq(count).attr('dataid');
            var bb=$("#sousuo1").val();
            bb+=Tresult+'；';
            $("#xuequ").val(xuequid);
            $("#sousuo1").val(bb);
            $("#sousuo").val("");
            $("#greetings").hide();
        })
        $("#cz1").click(function(){
            $("#sousuo1").val("");
        })
        $("#dituzb").click(function(){
            layer.open({
		      type: 2,
		      title: '',
		      shadeClose: true,
		      shade: false,
		      maxmin: true, //开启最大化最小化按钮
		      area: ['800px', '400px'],
		      content: '<?php echo U('Ziyuan/addzb');?>'
		    });
        })
	</script>
	<!--/请在上方写此页面业务相关的脚本-->

</body>
</html>