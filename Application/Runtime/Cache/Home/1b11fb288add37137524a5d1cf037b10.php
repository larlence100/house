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
	<link rel="stylesheet" href="/Public/lib/layui/css/layui.css" media="all">

</head>
<body >


	<nav class="breadcrumb hidden">
		<i class="Hui-iconfont">&#xe67f;</i>
		<a href="<?php echo U('Index/welcome');?>">首页</a>
		<span class="c-gray en">&gt;</span> 管理后台
		<span class="c-gray en">&gt;</span> 账户
		<span class="c-gray en">&gt;</span> 用户管理
		<a class="btn btn-success radius r" style="line-height:1.6em;margin-top:3px" href="javascript:location.replace(location.href);" title="刷新" >
			<i class="Hui-iconfont">&#xe68f;</i>
		</a>
	</nav>
	<div class="page-container">
		<div class="cl pd-5 bg-1 bk-gray ">
			<span class="l">
				<a href="javascript:;" onclick="admin_add('添加用户','<?php echo U('Rbac/addUser');?>','800','450')" class="btn btn-primary radius">
					<i class="Hui-iconfont">&#xe600;</i> 添加用户
				</a>
			</span>
			<span class="r">
				<a class="btn btn-success radius r" style="line-height:1.6em;margin-top:3px" href="javascript:location.replace(location.href);" title="刷新" >
					<i class="Hui-iconfont">&#xe68f;</i>
				</a>
			</span>
		</div>
			<table class="table table-border table-bordered table-bg">
				<thead>
					<tr class="text-c">
						<th width="40">序号</th>
						<th width="150">员工姓名</th>
						<th width="150">手机号码</th>
						<th width="90">最后登录时间</th>
						<th width="150">最后登录IP</th>
						<th width="100">是否已启用</th>
						<th>用户所属角色</th>
						<th width="100">操作</th>
					</tr>
				</thead>
			<tbody id="xsjyh">
				<?php if(is_array($user)): $i = 0; $__LIST__ = $user;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i;?><tr class="text-c">
						<td><?php echo ($i+$firstRow); ?></td>
						<td><?php echo ($v["ygmingcheng"]); ?></td>
						<td><?php echo ($v["dianhua"]); ?></td>
						<td><?php echo (date('y-m-d H:i',$v["logintime"])); ?></td>
						<td><?php echo ($v["loginip"]); ?></td>
						<td class="td-status">
						<?php if($v["lock"]): ?><span class="label radius">已停用</span><?php else: ?><span class="label label-success radius">已启用</span><?php endif; ?>
						</td>
						</td>
						<td>
							<?php if($v["zhanghao"] == C("RBAC_SUPERADMIN")): ?>超级管理员
							<?php else: ?>
								<ul>
									<?php if(is_array($v["role"])): foreach($v["role"] as $key=>$value): ?><li><?php echo ($value["name"]); ?>(<?php echo ($value["remark"]); ?>)</li><?php endforeach; endif; ?>
								</ul><?php endif; ?>
						</td>
						<td class="td-manage">
							<?php if($v["id"] != 2): if($v["lock"]): ?><a onClick="admin_start(this,<?php echo ($v["id"]); ?>)" href="javascript:;" title="启用" style="text-decoration:none"><i class="Hui-iconfont" style="font-size: 20px;">&#xe615;</i></a>
								<?php else: ?>
									<a style="text-decoration:none" onClick="admin_stop(this,'<?php echo ($v["id"]); ?>')" href="javascript:;" title="停用">
										<i class="Hui-iconfont" style="font-size: 20px;">&#xe631;</i>
									</a><?php endif; endif; ?>
							<!--<a title="编辑用户" href="javascript:;" onclick="admin_add('编辑用户','<?php echo U('Rbac/editUser',array('id'=>$v['id']));?>','800','450')" class="ml-5" style="text-decoration:none">-->
								<!--<i class="Hui-iconfont" style="font-size: 18px;">&#xe6df;</i>-->
							</a>
						</td>
					</tr><?php endforeach; endif; else: echo "" ;endif; ?>
			</tbody>
		</table>
		 <div style="height: 50px;"></div>
		<div class="pagination" style="width:100%;height:30px;margin:0 auto;background:#fff;position:fixed;bottom:0;text-align:center;">
			<?php echo ($page); ?>
		</div>
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

	<script type="text/javascript" src="lib/My97DatePicker/4.8/WdatePicker.js"></script> 
	<script type="text/javascript" src="lib/datatables/1.10.0/jquery.dataTables.min.js"></script> 
	<script type="text/javascript" src="lib/laypage/1.2/laypage.js"></script>
	<script type="text/javascript">
		/*
			参数解释：
			title	标题
			url		请求的url
			id		需要操作的数据id
			w		弹出层宽度（缺省调默认值）
			h		弹出层高度（缺省调默认值）
		*/
		/*管理员-增加*/
		function admin_add(title,url,w,h){
			layer_show(title,url,w,h);
		}
		/*管理员-删除*/
		function admin_del(obj,id){
			layer.confirm('管理员删除须谨慎，确认要删除吗？',function(index){
				$.ajax({
					type: 'POST',
					url: '<?php echo U('Rbac/delUser');?>',
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
		/*管理员-编辑*/
		function admin_edit(title,url,id,w,h){
			layer_show(title,url,w,h);
		}
		/*管理员-停用*/
		function admin_stop(obj,id){
			layer.confirm('确认要停用吗？',function(index){
				//此处请求后台程序，下方是成功后的前台处理……
				$(obj).parents("tr").find(".td-manage").prepend('<a onClick="admin_start(this,id)" href="javascript:;" title="启用" style="text-decoration:none"><i class="Hui-iconfont">&#xe615;</i></a>');
				$(obj).parents("tr").find(".td-status").html('<span class="label label-default radius">已禁用</span>');
				$(obj).remove();
				layer.msg('已停用!',{icon: 5,time:1000});
			});
		}
		/*管理员-停用*/
		function admin_stop(obj,id){
			layer.confirm('确认要停用吗？',function(index){
				$.ajax({
					type: 'POST',
					url: '<?php echo U('Rbac/stopUser');?>',
					data: {'id':id},
					dataType: 'json',
					success: function(data){
						
						$(obj).parents("tr").find(".td-manage").prepend('<a onClick="admin_start(this,<?php echo ($v["id"]); ?>)" href="javascript:;" title="启用" style="text-decoration:none"><i class="Hui-iconfont">&#xe615;</i></a>');
						$(obj).parents("tr").find(".td-status").html('<span class="label label-default radius">已禁用</span>');
						$(obj).remove();
						layer.msg('已停用!',{icon: 5,time:1000});
					},
					error:function(data) {
						console.log(data.msg);
					},
					
				});
				
			});
		}
		/*管理员-启用*/
		function admin_start(obj,id){
			layer.confirm('确认要启用吗？',function(index){
				$.ajax({
					type: 'POST',
					url: '<?php echo U('Rbac/startUser');?>',
					data: {'id':id},
					dataType: 'json',
					success: function(data){
						
						$(obj).parents("tr").find(".td-manage").prepend('<a onClick="admin_stop(this,<?php echo ($v["id"]); ?>)" href="javascript:;" title="停用" style="text-decoration:none"><i class="Hui-iconfont">&#xe631;</i></a>');
				$(obj).parents("tr").find(".td-status").html('<span class="label label-success radius">已启用</span>');
				$(obj).remove();
				layer.msg('已启用!', {icon: 6,time:1000});
					},
					error:function(data) {
						console.log(data.msg);
					},
					
				});
				
			});
		}
	</script>

</body>
</html>