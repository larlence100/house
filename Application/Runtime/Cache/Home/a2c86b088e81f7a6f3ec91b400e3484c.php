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

</head>
<body >


	<nav class="breadcrumb hidden">
		<i class="Hui-iconfont">&#xe67f;</i>
		<a href="<?php echo U('Index/elcome');?>">首页</a>
		<span class="c-gray en">&gt;</span> 业务平台
		<span class="c-gray en">&gt;</span> 客源
		<span class="c-gray en">&gt;</span> 客源带看
		<a class="btn btn-success radius r" style="line-height:1.6em;margin-top:3px" href="javascript:location.replace(location.href);" title="刷新" >
			<i class="Hui-iconfont">&#xe68f;</i>
		</a>
	</nav>
	<link rel="stylesheet" href="/kaidandashi/Public/lib/layui/css/layui.css" media="all">
	<div class="page-container">
		<table id="table" class="table table-border table-bordered table-hover table-bg">
			<thead>
				<tr>
					<th scope="col" colspan="12">
						<span style="float: right;">
							<a class="btn btn-success radius r" style="line-height:1.6em;margin-top:3px" href="javascript:location.replace(location.href);" title="刷新" >
								<i class="Hui-iconfont">&#xe68f;</i>
							</a>
						</span>
					</th>
				</tr>
				<tr class="text-c">
					<th width="40">序号</th>
					<th width="80">客源编号</th>
					<th width="80">客户姓名</th>
					<th width="80">类型</th>
					<th width="80">带看人</th>
					<th width="80">部门</th>
					<th width="80">带看房源</th>
					<th width="80">客户评价</th>
					<th width="80">带看时间</th>
				</tr>
			</thead>
			<tbody id="tbody">
				<?php if(is_array($daikan)): $i = 0; $__LIST__ = $daikan;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$dk): $mod = ($i % 2 );++$i;?><tr class="text-c" data-href="">
						<td><?php echo ($i+$firstRow); ?></td>
						<td id="td">
							<?php if(is_array($keyuan)): foreach($keyuan as $key=>$ky): if($dk["kyid"] == $ky["id"]): ?><span style="display: none;"><?php echo ($ky["mmzl"]); ?></span>
									<?php if($ky["mmzl"] == 1): ?><a data-href="<?php echo U('Keyuan1/neirong1',array('id'=>$dk['kyid']));?>" data-title="<?php echo ($dk["kybh"]); ?>" href="javascript:;" style="text-decoration:none;color: blue">
											<?php echo ($dk["kybh"]); ?>
										</a><?php endif; ?>
									<?php if($ky["mmzl"] == 2): ?><a data-href="<?php echo U('Keyuan1/neirong2',array('id'=>$dk['kyid']));?>" data-title="<?php echo ($dk["kybh"]); ?>" href="javascript:;" style="text-decoration:none;color: blue">
											<?php echo ($dk["kybh"]); ?>
										</a><?php endif; endif; endforeach; endif; ?>
						</td>
						<td>
							<?php if(is_array($keyuan)): foreach($keyuan as $key=>$ky): if($dk["kyid"] == $ky["id"]): echo ($ky["khxingming"]); endif; endforeach; endif; ?>
						</td>
						<td>
							<?php if(is_array($keyuan)): foreach($keyuan as $key=>$ky): if($dk["kyid"] == $ky["id"]): ?><span style="display: none;"><?php echo ($ky["mmzl"]); ?></span>
									<?php if($ky["mmzl"] == 1): ?>求购<?php endif; ?>
									<?php if($ky["mmzl"] == 2): ?>求租<?php endif; endif; endforeach; endif; ?>
						</td>
						<td>
							<?php if(is_array($yonghu)): foreach($yonghu as $key=>$yh): if($dk["dkuid"] == $yh["id"]): echo ($yh["ygmingcheng"]); endif; endforeach; endif; ?>
						</td>
						<td>
							<?php if(is_array($yonghu)): foreach($yonghu as $key=>$yh): if($dk["dkuid"] == $yh["id"]): ?><span style="display: none;"><?php echo ($yh["bumen"]); ?></span>
									<?php if(is_array($bumen)): foreach($bumen as $key=>$bm): if($yh["bumen"] == $bm["id"]): echo ($bm["bmming"]); endif; endforeach; endif; endif; endforeach; endif; ?>
						</td>
						<td id="td">
							<?php if(is_array($fangyuan)): foreach($fangyuan as $key=>$fy): if($dk["dkfangyuan"] == $fy["bianhao"]): ?><span style="display: none;"><?php echo ($fy["id"]); ?></span>
									<a data-href="<?php echo U('Fangyuan/neirong',array('id'=>$fy['id']));?>" data-title="<?php if($fy.bianhao): echo ($fy["bianhao"]); endif; ?>" href="javascript:;" style="text-decoration:none;color: blue">
										<?php echo ($dk["dkfangyuan"]); ?>
									</a><?php endif; endforeach; endif; ?>
						</td>
						<td><?php echo ($dk["kehupj"]); ?></td>
						<td>
							<?php $dkshijian=time()-$dk["dkshijian"];if($dkshijian>259200){echo (date('y-m-d',$dk["dkshijian"]));}else{ echo format_date($dk["dkshijian"]);} ?>
						</td>
					</tr><?php endforeach; endif; else: echo "" ;endif; ?>
			</tbody>
		</table>
		<div style="height: 50px;"></div>
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
		$("#table").on("click","#td a",function(){
			Hui_admin_tab(this);
		});
	</script>

</body>
</html>