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


	<link rel="stylesheet" href="/Public/lib/layui/css/layui.css" media="all">
	<div class="page-container">
		<table id="table" class="table table-border table-bordered table-hover table-bg">
			<thead>
				<tr>
					<th scope="col" colspan="12">
						<a class="btn btn-primary radius" href="javascript:;" onclick="layer_show('添加行政区','<?php echo U('Ziyuan/addxzq');?>','420','210')">
							<i class="Hui-iconfont">&#xe600;</i> 添加行政区
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
					<th width="80">行政区名</th>
					<th width="80">操作</th>
				</tr>
			</thead>
			<tbody id="xsjxzq">
				<?php if(is_array($xingzhengqu)): $i = 0; $__LIST__ = $xingzhengqu;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$xzq): $mod = ($i % 2 );++$i;?><tr class="text-c">
						<td><?php echo ($i); ?></td>
						<td>
							<?php echo ($xzq["xzqming"]); ?>
						</td>
						<td class="f-14" id="td">
							<a title="编辑" href="javascript:;" onclick="layer_show('编辑行政区','<?php echo U('Ziyuan/editxzq',array('id'=>$xzq['id']));?>','420','210')" style="text-decoration:none" class="ml-5">
								<i class="Hui-iconfont" style="font-size: 18px;">&#xe6df;</i>
							</a>
							<a title="删除" href="javascript:;" onclick="admin_xzq_del(this,'<?php echo ($xzq["id"]); ?>')" class="ml-5" style="text-decoration:none">
								<i class="Hui-iconfont" style="font-size: 22px;">&#xe6e2;</i>
							</a>
						</td>
					</tr><?php endforeach; endif; else: echo "" ;endif; ?>
			</tbody>
		</table>
		<div style="height: 50px;"></div>
	</div>


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

	<script type="text/javascript" src="/Public/lib/datatables/1.10.0/jquery.dataTables.min.js"></script>
	<script type="text/javascript" src="/Public/lib/jquery/1.9.1/jquery.min.js"></script> 
	<script type="text/javascript" src="/Public/lib/layer/2.4/layer.js"></script>
	<script src="/Public/lib/layui/layui.js" charset="utf-8"></script>
	<script type="text/javascript">
		$("#table").on("click","#td a",function(){
			Hui_admin_tab(this);
		});
		function admin_xzq_del(obj,id){
			layer.confirm('小区删除须谨慎，确认要删除吗？',function(index){
				$.ajax({
					type: 'POST',
					url: '<?php echo U('Ziyuan/delxzq');?>',
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
		function xsjxzq(){
			$.ajax({
				url:'<?php echo U('Ziyuan/get_xzqxsj');?>',
				Type:"POST",
				dataType:"json",
				success:function(data){
					var pics = data.pics;
					var sj='<tr class="text-c"><td style="color:red">new</td><td>'+pics["xzqming"]+'</td><td></td></tr>';
					$("#xsjxzq").prepend(sj);
				}
			});
		};
	</script>

</body>
</html>