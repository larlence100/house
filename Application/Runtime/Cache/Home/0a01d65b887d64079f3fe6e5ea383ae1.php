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

	<style>
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
		a:hover{
			color:blue;
			text-decoration:none;
		}
		a:active{
			color:orange;
			text-decoration:none;
		}
	</style>

</head>
<body >


	<div style="overflow: auto;">
		<table class="table table-border table-bordered table-hover table-bg" id="table" style="margin-bottom:35px;">
			<thead>
				<tr class="text-c">
					<th width="100">编号</th>
					<th width="100">需求用途</th>
					<th width="100">客户姓名</th>
					<th width="100">客户来源</th>
					<th width="100">需求区域</th>
					<th width="100">需求小区</th>
					<th width="120">需求面积</th>
					<th width="100">需求价格</th>
					<th width="100">户型</th>
					<th width="100">沟通阶段</th>
					<th width="100">维护人</th>
					<th width="100">录入时间</th>
					<th width="70">操作</th>
				</tr>
			</thead>
			<tbody id="table1">
				<?php if(is_array($keyuan)): $i = 0; $__LIST__ = $keyuan;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$es): $mod = ($i % 2 );++$i;?><tr class="text-c" data-href="<?php echo U('Keyuan1/neirong1',array('id'=>$es['id']));?>" data-title="<?php if($es.xqbianhao): echo ($es["xqbianhao"]); endif; ?>" <?php if(($es["weihurenid"] == session("uid")) or ($es["zhuangtai"] == 0) or (session("uid") == 2)): ?>ondblclick="Hui_admin_tabb(this)<?php endif; ?>">
						<td id="td">
							<?php if(($es["weihurenid"] == session("uid")) or ($es["zhuangtai"] == 0) or (session("uid") == 2)): ?><a data-href="<?php echo U('Keyuan1/neirong1',array('id'=>$es['id']));?>" data-title="<?php if($es.bianhao): echo ($es["xqbianhao"]); endif; ?>" href="javascript:;" style="text-decoration:none">
									<?php echo ($es["xqbianhao"]); ?>
								</a>
								<?php else: echo ($es["xqbianhao"]); endif; ?>
						</td>
						<td>
							<?php if(is_array($yongtu)): foreach($yongtu as $key=>$v): if($es["xqyongtu"] == $v["lxid"]): echo ($v["lxming"]); endif; endforeach; endif; ?>
						</td>
						<td>
							<?php echo ($es["khxingming"]); ?>
							<?php if($es["kehulx"] == 2): if(is_array($kehulx)): foreach($kehulx as $key=>$vv): if($es["kehulx"] == $vv["lxid"]): echo ($vv["lxming"]); endif; endforeach; endif; endif; ?>
						</td>
						<td>
							<?php if(is_array($laiyuan)): foreach($laiyuan as $key=>$vv): if($es["khlaiyuan"] == $vv["lxid"]): echo ($vv["lxming"]); endif; endforeach; endif; ?>
						</td>
						<td>
							<div style="width: 80px;">
								<div style="white-space:nowrap;text-overflow:ellipsis;-o-text-overflow:ellipsis;overflow: hidden;">
									<?php echo ($es["xqquyu"]); ?>
								</div>
							</div>
						</td>
						<td>
							<div style="width: 80px;">
								<div style="white-space:nowrap;text-overflow:ellipsis;-o-text-overflow:ellipsis;overflow: hidden;">
									<?php echo ($es["xqxiaoqu"]); ?>
								</div>
							</div>
						</td>
						<td>
							<?php if($es["xqmianji1"] and $es["xqmianji2"]): echo ($es["xqmianji1"]); ?>平米
								~
								<?php echo ($es["xqmianji2"]); ?>平米
								<?php elseif($es["xqmianji1"]): ?>
								<?php echo ($es["xqmianji1"]); ?>平米以上
								<?php elseif($es["xqmianji2"]): ?>
								<?php echo ($es["xqmianji2"]); ?>平米以下<?php endif; ?>
						</td>
						<td>
							<?php if($es["xqjiage1"] and $es["xqjiage2"]): echo ($es["xqjiage1"]); ?>万
								~
								<?php echo ($es["xqjiage2"]); ?>万
								<?php elseif($es["xqjiage1"]): ?>
								<?php echo ($es["xqjiage1"]); ?>万以上
								<?php elseif($es["xqjiage2"]): ?>
								<?php echo ($es["xqjiage2"]); ?>万以下<?php endif; ?>
						</td>
						<td>
							<?php if($es["xqhuxing1"] and $es["xqhuxing2"]): echo ($es["xqhuxing1"]); ?>室
								~
								<?php echo ($es["xqhuxing2"]); ?>室
								<?php elseif($es["xqhuxing1"]): ?>
								<?php echo ($es["xqhuxing1"]); ?>室以上
								<?php elseif($es["xqhuxing2"]): ?>
								<?php echo ($es["xqhuxing2"]); ?>室以下<?php endif; ?>
						</td>
						<td>
							<?php if(is_array($gtjieduan)): foreach($gtjieduan as $key=>$vv): if($es["gtjieduan"] == $vv["lxid"]): echo ($vv["lxming"]); endif; endforeach; endif; ?>
						</td>
						<td>
							<?php echo ($es["weihuren"]); ?>
						</td>
						<td>
							<?php $lurusj=time()-$es["lurusj"];if($lurusj>259200){echo (date('y-m-d',$es["lurusj"]));}else{ echo format_date($es["lurusj"]);} ?>
						</td>
						<td class="f-14" id="td">
							<?php if(($es["weihurenid"] == session("uid")) or ($es["zhuangtai"] == 0) or (session("uid") == 2)): ?><a data-href="<?php echo U('Keyuan1/neirong1',array('id'=>$es['id']));?>" data-title="<?php if($es.bianhao): echo ($es["xqbianhao"]); endif; ?>" href="javascript:;" style="text-decoration:none">
									查看
								</a><?php endif; ?>
						</td>
					</tr><?php endforeach; endif; else: echo "" ;endif; ?>
			</tbody>
		</table>
	<div>
	<div class="pagination" style="width:100%;height:30px;margin:0 auto;background:#fff;position:fixed;bottom:0;text-align:center;">
		<?php echo ($page); ?>
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
	<script type="text/javascript">
		/*管理员-角色-添加*/
		function admin_esfy_add(title,url,w,h){
			layer_show(title,url,w,h);
		}
		/*管理员-角色-编辑*/
		function admin_esfy_edit(title,url,id,w,h){
			layer_show(title,url,w,h);
		}
		/*管理员-角色-删除*/
		function admin_esfy_del(obj,id){
			layer.confirm('房源删除须谨慎，确认要删除吗？',function(index){
				$.ajax({
					type: 'POST',
					url: '<?php echo U('Fangyuan/delEsfy');?>',
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
	</script>

</body>
</html>