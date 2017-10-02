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
		.pagination {
			margin: 20px 0;
		}
		.pagination ul {
			display: inline-block;
			list-style:none;
			*display: inline;
			/* IE7 inline-block hack */
			*zoom: 1;
			margin-left: 0;
			margin-bottom: 0;
			-webkit-border-radius: 4px;
			-moz-border-radius: 4px;
			border-radius: 4px;
			-webkit-box-shadow: 0 1px 2px rgba(0, 0, 0, 0.05);
			-moz-box-shadow: 0 1px 2px rgba(0, 0, 0, 0.05);
			box-shadow: 0 1px 2px rgba(0, 0, 0, 0.05);
		}
		.pagination ul > li {
			display: inline;
		}
		.pagination ul > li > a,
		.pagination ul > li > span,
		.pagination #lastspan {
			float: left;
			padding: 4px 12px;
			line-height: 20px;
			text-decoration: none;
			background-color: #ffffff;
			border: 1px solid #dddddd;
			border-left-width: 0;
		}
		.pagination ul > li > a:hover,
		.pagination ul > li > a:focus,
		.pagination ul > .active > a,
		.pagination ul > .active > span {
			background-color: #f5f5f5;
		}
		.pagination ul > .active > a,
		.pagination ul > .active > span {
				color: #999999;
				cursor: default;
		}
		.pagination ul > .disabled > span,
		.pagination ul > .disabled > a,
		.pagination ul > .disabled > a:hover,
		.pagination ul > .disabled > a:focus {
			color: #999999;
			background-color: transparent;
			cursor: default;
		}
		.pagination ul > li:first-child > a,
		.pagination ul > li:first-child > span {
			border-left-width: 1px;
			-webkit-border-top-left-radius: 4px;
			-moz-border-radius-topleft: 4px;
			border-top-left-radius: 4px;
			-webkit-border-bottom-left-radius: 4px;
			-moz-border-radius-bottomleft: 4px;
			border-bottom-left-radius: 4px;
		}
		.pagination ul > li:last-child > a,
		.pagination ul > li:last-child > span,
		.pagination #lastspan {
			-webkit-border-top-right-radius: 4px;
			-moz-border-radius-topright: 4px;
			border-top-right-radius: 4px;
			-webkit-border-bottom-right-radius: 4px;
			-moz-border-radius-bottomright: 4px;
			border-bottom-right-radius: 4px;
		}
		.pagination-centered {
			text-align: center;
		}
		.pagination-right {
			text-align: right;
		}
		.pagination-large ul > li > a,
		.pagination-large ul > li > span,
		.pagination-large #lastspan{
			padding: 11px 19px;
			font-size: 17.5px;
		}
		.pagination-large ul > li:first-child > a,
		.pagination-large ul > li:first-child > span {
			-webkit-border-top-left-radius: 6px;
			-moz-border-radius-topleft: 6px;
			border-top-left-radius: 6px;
			-webkit-border-bottom-left-radius: 6px;
			-moz-border-radius-bottomleft: 6px;
			border-bottom-left-radius: 6px;
		}
		.pagination-large ul > li:last-child > a,
		.pagination-large ul > li:last-child > span,
		.pagination-large #lastspan {
			-webkit-border-top-right-radius: 6px;
			-moz-border-radius-topright: 6px;
			border-top-right-radius: 6px;
			-webkit-border-bottom-right-radius: 6px;
			-moz-border-radius-bottomright: 6px;
			border-bottom-right-radius: 6px;
		}
		.pagination-mini ul > li:first-child > a,
		.pagination-small ul > li:first-child > a,
		.pagination-mini ul > li:first-child > span,
		.pagination-small ul > li:first-child > span {
			-webkit-border-top-left-radius: 3px;
			-moz-border-radius-topleft: 3px;
			border-top-left-radius: 3px;
			-webkit-border-bottom-left-radius: 3px;
			-moz-border-radius-bottomleft: 3px;
			border-bottom-left-radius: 3px;
		}
		.pagination-mini ul > li:last-child > a,
		.pagination-small ul > li:last-child > a,
		.pagination-mini ul > li:last-child > span,
		.pagination-small ul > li:last-child > span {
			-webkit-border-top-right-radius: 3px;
			-moz-border-radius-topright: 3px;
			border-top-right-radius: 3px;
			-webkit-border-bottom-right-radius: 3px;
			-moz-border-radius-bottomright: 3px;
			border-bottom-right-radius: 3px;
		}
		.pagination-small ul > li > a,
		.pagination-small ul > li > span {
			padding: 2px 10px;
			font-size: 11.9px;
		}
		.pagination-mini ul > li > a,
		.pagination-mini ul > li > span {
			padding: 0 6px;
			font-size: 10.5px;
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
	<link rel="stylesheet" href="/kaidandashi/Public/lib/layui/css/layui.css" media="all">

</head>
<body >


	<nav class="breadcrumb" style="display: none;">
		<i class="Hui-iconfont">&#xe67f;</i>
		<a href="<?php echo U('Index/Welcome');?>">首页</a>
		<span class="c-gray en">&gt;</span> 管理后台
		<span class="c-gray en">&gt;</span> 资源
		<span class="c-gray en">&gt;</span> 片区管理
		<a class="btn btn-success radius r" style="line-height:1.6em;margin-top:3px" href="javascript:location.replace(location.href);" title="刷新" >
			<i class="Hui-iconfont">&#xe68f;</i>
		</a>
	</nav>

	<div class="page-container">
		<table class="table table-border table-bordered table-hover table-bg mb-20">
			<thead>
				<tr>
					<th scope="col" colspan="8">
							<a class="btn btn-primary radius" href="javascript:;" onclick="admin_pianqu_add('添加片区','<?php echo U('Ziyuan/addPianqu');?>','960','500')">
								<i class="Hui-iconfont">&#xe600;</i> 添加片区
							</a>
						<span style="float: right;">
							<a class="btn btn-success radius r" style="line-height:1.6em;margin-top:3px" href="javascript:location.replace(location.href);" title="刷新" >
								<i class="Hui-iconfont">&#xe68f;</i>
							</a>							
						</span>
					</th>
				</tr>
				<tr class="text-c">
					<th width="40">序号</th>
					<th width="80">片区名称</th>
					<th width="80">拼音检索</th>
					<th width="80">所属行政区</th>
					<th width="80">经度</th>
					<th width="80">维度</th>
					<th width="80">操作</th>
				</tr>
			</thead>
			<tbody id="xsjpianq">
				<?php if(is_array($pianqu)): $i = 0; $__LIST__ = $pianqu;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$pq): $mod = ($i % 2 );++$i;?><tr class="text-c">
						<td><?php echo ($i+$firstRow); ?></td>
						<td><?php echo ($pq["pianqum"]); ?></td>
						<td><?php echo ($pq["pinyinjs"]); ?></td>
						<td>
							<?php if(is_array($ssxzq)): foreach($ssxzq as $key=>$xzq): if($pq["ssxzq"] == $xzq["id"]): echo ($xzq["xzqming"]); endif; endforeach; endif; ?>
						</td>
						<td><?php echo ($pq["jingdu"]); ?></td>
						<td><?php echo ($pq["weidu"]); ?></td>
						<td class="f-14">
							<a title="编辑" href="javascript:;" onclick="admin_pianqu_edit('编辑片区','<?php echo U('Ziyuan/editPianqu',array('id'=>$pq['id']));?>','960','500')" style="text-decoration:none">
								<i class="Hui-iconfont" style="font-size: 18px;">&#xe6df;</i>
							</a>
							<a title="删除" href="javascript:;" onclick="admin_pianqu_del(this,'<?php echo ($pq["id"]); ?>')" class="ml-5" style="text-decoration:none">
								<i class="Hui-iconfont" style="font-size: 22px;">&#xe6e2;</i>
							</a>
						</td>
					</tr><?php endforeach; endif; else: echo "" ;endif; ?>
			</tbody>
		</table>
		<div class="pagination" style="width:100%;height:30px;margin:0 auto;background:#fff;position:fixed;bottom:0;text-align:center;">
			<?php echo ($page); ?>
		</div>
	</div>


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

	<script type="text/javascript" src="/kaidandashi/Public/lib/datatables/1.10.0/jquery.dataTables.min.js"></script>
	<script type="text/javascript" src="/kaidandashi/Public/lib/jquery/1.9.1/jquery.min.js"></script>
	<script type="text/javascript" src="/kaidandashi/Public/lib/layer/2.4/layer.js"></script>
	<script src="/kaidandashi/Public/lib/layui/layui.js" charset="utf-8"></script>
	<script type="text/javascript">
		/*管理员-片区-添加*/
		function admin_pianqu_add(title,url,w,h){
			layer_show(title,url,w,h);
		}
		/*管理员-片区-编辑*/
		function admin_pianqu_edit(title,url,w,h){
			layer_show(title,url,w,h);
		}
		/*管理员-片区-删除*/
		function admin_pianqu_del(obj,id){
			layer.confirm('片区删除须谨慎，确认要删除吗？',function(index){
				$.ajax({
					type: 'POST',
					url: '<?php echo U('Ziyuan/delPianqu');?>',
					data: {'id':id},
					dataType: 'json',
					success: function(data){
						$(obj).parents("tr").remove();
						layer.msg('已删除!',{icon:1,time:1000});
					},
					error:function(data) {
						console.log(data.msg);
					},
				});
			});
		}
		function xsjpianq(){
			$.ajax({
				url:'<?php echo U('Ziyuan/get_pianqxsj');?>',
				Type:"POST",
				dataType:"json",
				success:function(data){
					var pics = data.pics;
					var sj='<tr class="text-c"><td style="color:red">new</td><td>'+pics["pianqum"]+'</td><td>'+pics["pinyinjs"]+'</td><td></td><td></td><td></td><td></td></tr>';
					$("#xsjpianq").prepend(sj);
				}
			});
		};
		layui.use(['form', 'layedit', 'laydate'], function(){
			var form = layui.form()
			,layer = layui.layer
			,layedit = layui.layedit
			,laydate = layui.laydate;
			form.on('checkbox(checkbox)', function(data){
				$('form').submit();
			});
			$("#sousuo").keyup(function(){
				$("#greetings").show();
				var txt=$("#sousuo").val();
				if (txt!="") {
					$.ajax({
						url:'<?php echo U('Ziyuan/get_pianqu');?>',
						Type:"POST",
						data:"txt="+txt,
						dataType:"json",
						success:function(data){
							var district = data.district;
							$("#tcontent li").remove();
							for(var i in district){
								var li=$("<li></li>");
								$(li).html(district[i]['pianqum']);
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