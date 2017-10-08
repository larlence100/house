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
html,body{
  margin: 0px 0px;
  width: 100%;
  height: 100%;
  
  }

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

  
	</style>

</head>
<body >


<div style="overflow: auto;">
<table class="table table-border table-bordered table-hover table-bg table-sort" id="table"  style="margin-bottom:20px;">
		<thead>
            
            <tr class="text-c">
                
					<th>标签</th>
					<th>编号</th>
					<th>地址</th>
					<th>面积</th>
					<th>价格</th>
					<th>单价</th>
					<th>户型</th>
					<th>楼层</th>
					<th>朝向</th>
					<th>房龄</th>
					<th>物业类型</th>
					<th>装修</th>
<th>录入时间</th>
					<th>操作</th>
            </tr>
        </thead>
			
			<tbody id="table1" style="">
				<?php if(is_array($fangyuan)): $i = 0; $__LIST__ = $fangyuan;if( count($__LIST__)==0 ) : echo "没有数据" ;else: foreach($__LIST__ as $key=>$es): $mod = ($i % 2 );++$i;?><tr class="text-c" data-href="<?php echo U('Fangyuan/neirong',array('id'=>$es['id']));?>" data-title="<?php if($es.bianhao): echo ($es["bianhao"]); endif; ?>"  ondblclick="Hui_admin_tabb(this)">
						
						<td>
							<?php if($es["tupian"]): ?><span class="label label-primary radius">图</span><?php endif; ?>
                        </td>
						<td id="td">
						<a data-href="<?php echo U('Fangyuan/neirong',array('id'=>$es['id']));?>" data-title="<?php if($es.bianhao): echo ($es["bianhao"]); endif; ?>" href="javascript:void;" style="color:red;">
								<?php echo ($es["bianhao"]); ?>
							</a> 
						</td>
						<td><?php echo ($es["xiaoqum"]); ?></td>
						<td><?php echo ($es["mianji"]); ?></td>

						<td><?php if($es['shoujia'] > 0): echo ($es["shoujia"]); ?>万元<?php endif; ?>
							<?php if($es['zujia']): echo ($es["zujia"]); ?>
								<?php if(is_array($zujialx)): foreach($zujialx as $key=>$v): if($es["zujialx"] == $v["lxid"]): echo ($v["lxming"]); endif; endforeach; endif; endif; ?>
						</td>
						<td><?php echo ($es["danjia"]); ?></td>
						<td>
							<?php if($es["shi"]): echo ($es["shi"]); ?>室<?php endif; ?>
							<?php if($es["ting"]): echo ($es["ting"]); ?>厅<?php endif; ?>
							<?php if($es["wei"]): echo ($es["wei"]); ?>卫<?php endif; ?>
							<?php if($es["chu"]): echo ($es["chu"]); ?>厨<?php endif; ?>
							<?php if($es["yangtai"]): echo ($es["yangtai"]); ?>阳台<?php endif; ?>
						</td>
						<td><?php echo ($es["louceng"]); ?>/<?php echo ($es["zlouceng"]); ?></td>
						<td>
							<?php if($es["chaoxiang"]): if(is_array($chaoxiang)): foreach($chaoxiang as $key=>$v): if($es["chaoxiang"] == $v["lxid"]): echo ($v["lxming"]); endif; endforeach; endif; ?>
							<?php else: ?>不详<?php endif; ?>
						</td>
						<td>
							<?php if($es["niandai"]): echo ($es["niandai"]); else: ?>不详<?php endif; ?>
						</td>
						<td>
							<?php if(is_array($yongtu)): foreach($yongtu as $key=>$v): if($es["yongtu"] == $v["lxid"]): echo ($v["lxming"]); endif; endforeach; endif; ?>
						</td>
						<td>
							<?php if(is_array($zhuangxiu)): foreach($zhuangxiu as $key=>$v): if($es["zhuangxiu"] == $v["lxid"]): echo ($v["lxming"]); endif; endforeach; endif; ?>
						</td>
						<td><?php $shij=time()-$es["lurusj"];if($shij>259200){echo (date('y-m-d',$es["lurusj"]));}else{ echo format_date($es["lurusj"]);} ?></td>
						<td class="f-14" id="td">
							<a data-href="<?php echo U('Fangyuan/neirong',array('id'=>$es['id']));?>" data-title="<?php if($es.bianhao): echo ($es["bianhao"]); endif; ?>" href="javascript:void;" style="color:red;">
								详情
							</a> 
						</td>
					</tr><?php endforeach; endif; else: echo "没有数据" ;endif; ?>
				<tr><td></td></tr>
			</tbody>
		</table>
</div>
<div class="pagination" style="width:100%;
    height: 31px;
    margin: 0 auto;
    background:#fff;
    position:fixed;
    bottom: -1px;
    text-align:center;"><?php echo ($page); ?></div>
	

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
	
</body>
</html>