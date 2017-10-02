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


<div class="container">
	<link href="/kaidandashi/Public/lib/lightbox2/2.8.1/css/lightbox.css" rel="stylesheet" type="text/css">
	<div class="col-xs-12 col-sm-12">
		<div class="row cl">
			<div>&nbsp;</div>
			<div class="formControls col-xs-1 col-sm-1 col-md-1"></div>
			<div class="formControls col-xs-10 col-sm-10 col-md-10">
				<?php if(($fangyuan['zhuangtai'] != 3) and ($fangyuan['zhuangtai'] != 4)): ?><div style="width: 72px;float: left;">
					<a  href="javascript:;" onclick="motai('修改资料','<?php echo U('Fyneirong/xiugai',array('fyid'=>$fangyuan['id'],'fybh'=>$fangyuan['bianhao'],'uid'=>session('uid')));?>','950')" style="text-decoration:none">
						<i class="Hui-iconfont" style="font-size:50px; line-height:10px;">
							&#xe6df;
						</i>
						<strong><p style="color:black;">修改信息</p></strong>
					</a>
				</div>
				<!--<div style="width: 72px;float: left;">
					<a  href="javascript:;" onclick="motai('写跟进','<?php echo U('Fyneirong/genjin',array('fyid'=>$fangyuan['id'],'fybh'=>$fangyuan['bianhao'],'uid'=>session('uid')));?>','600','400')" style="text-decoration:none">
						<i class="Hui-iconfont" style="font-size:50px;line-height:10px;">
							&#xe70c;
						</i>
						<strong><p style="color:black;">&nbsp;写跟进</p></strong>
					</a>
				</div>--><?php endif; ?>
				<div style="width: 72px;float: left;">
					<a href="javascript:location.replace(location.href);" style="text-decoration:none">
						<i class="Hui-iconfont" style="font-size:50px;line-height:10px;">
							&#xe68f;
						</i>
						<strong><p style="color:black;">&nbsp;&nbsp;刷新</p></strong>
					</a>
				</div>
				<?php if($_SESSION['superadmin'] == 1 or session('uid') == 2): ?><div style="width: 72px;float: left;">
						<a href="javascript:;" onclick="delEsfy(this,'<?php echo ($fangyuan['id']); ?>')" style="text-decoration:none">
							<i class="Hui-iconfont" style="font-size:50px;line-height:10px;">
								&#xe6a6;
							</i>
							<strong><p style="color:black;">&nbsp;&nbsp;删除</p></strong>
						</a>
					</div><?php endif; ?>

			</div>
		</div>
		<div id="tab_demo" class="HuiTab">
			<div class="row cl">
				<div class="formControls col-xs-1 col-sm-1 col-md-1"></div>
				<div id="tab_demo" class="formControls col-xs-10 col-sm-10 col-md-10">
					<div class="tabBar clearfix">
						<span style="font-size:15px">基本信息</span>
						<span id="fy_img" style="font-size:15px;">房源照片</span>
						<!--<span class="hidden" style="font-size:15px">相关照片</span>
						<span class="hidden" style="font-size:15px">房屋视频</span>
						<span class="hidden" style="font-size:15px">匹配客户</span>
						<span style="font-size:15px;">房源跟进</span>
						<span class="hidden" style="font-size:15px">带看记录</span>
						<span style="font-size:15px">日志</span>
						<span class="hidden" style="font-size:15px">房源描述</span>
						<span class="hidden" style="font-size:15px">改价历史</span>
						<span style="font-size:15px">调取记录</span>-->
						<span style="font-size:15px">地图位置</span>
					</div>
				</div>
			</div>
			<div class="tabCon">
				<div>&nbsp;</div>
				<div class="row cl">
					<div class="formControls col-xs-1 col-sm-1 col-md-1"></div>
					<div id="tab_demo" class="formControls col-xs-10 col-sm-10 col-md-10">
						<div style="float: left;width:69.5%;">
							<table border="1">
								<tr">
									<th style="color: black">
										<div style="line-height:10PX;">&nbsp;</div>
										<div class="formControls col-xs-12 col-sm-12 col-md-12">
											<div style="font-size:36px;" align="center" class="formControls col-xs-12 col-sm-12 col-md-12">
												<strong>
													[<?php echo ($fangyuan['bianhao']); ?>]<?php echo ($fangyuan['xiaoqum']); ?>
												</strong>
											</div>
											<div align="center" class="formControls col-xs-12 col-sm-12 col-md-12">
												<?php if(is_array($leixing)): foreach($leixing as $key=>$v): if($fangyuan["leixing"] == $v["lxid"]): ?><span class="label label-danger">
															<?php echo ($v["lxming"]); ?>
														</span><?php endif; endforeach; endif; ?>
												<?php if(is_array($yongtu)): foreach($yongtu as $key=>$v): if($fangyuan["yongtu"] == $v["lxid"]): ?><span class="label label-primary">
															<?php echo ($v["lxming"]); ?>
														</span><?php endif; endforeach; endif; ?>
												<?php if(is_array($zhuangtai)): foreach($zhuangtai as $key=>$v): if($fangyuan["zhuangtai"] == $v["lxid"]): ?><span class="label label-danger">
															<?php echo ($v["lxming"]); ?>
														</span><?php endif; endforeach; endif; ?>
											</div>
											<div class="formControls col-xs-12 col-sm-12 col-md-12">
												<div style="margin:0;padding:0;" class="formControls col-xs-11 col-sm-11 col-md-11">
													<?php if($fangyuan["shoujia"] > 0): ?><strong style="font-size:36px;color: red;">
															<?php echo ($fangyuan["shoujia"]); ?>
														</strong>
														<sub style="font-size: 18px;color: red;">
															万&nbsp;&nbsp;
														</sub><?php endif; ?>
													<?php if($fangyuan['danjia']): ?><sub style="font-size: 18px;color: #424242">
															<?php echo ($fangyuan['danjia']); ?>元/平米
														</sub><?php endif; ?>
													<?php if(is_array($zujialx)): foreach($zujialx as $key=>$v): if($fangyuan["zujia"] and $fangyuan["zujialx"] == $v["lxid"]): ?><sub style="font-size: 18px;color: #424242">
																<?php echo ($fangyuan["zujia"]); echo ($v["lxming"]); ?>
															</sub><?php endif; endforeach; endif; ?>
												</div>
											</div>
											<div class="formControls col-xs-12 col-sm-12 col-md-12">
												<div style="margin:0;padding:0;font-size:21px;font-weight:bold" class="formControls col-xs-12 col-sm-12 col-md-12">
													<?php if($fangyuan["shi"]): echo ($fangyuan["shi"]); ?>室<?php endif; ?>
													<?php if($fangyuan["ting"]): echo ($fangyuan["ting"]); ?>厅<?php endif; ?>
													<?php if($fangyuan["wei"]): echo ($fangyuan["wei"]); ?>卫<?php endif; ?>
													<?php if($fangyuan["chu"]): echo ($fangyuan["chu"]); ?>厨<?php endif; ?>
													<?php if($fangyuan["yangtai"]): echo ($fangyuan["yangtai"]); ?>阳台<?php endif; ?>
													<?php if($fangyuan["mianji"]): ?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
														&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
														<?php echo ($fangyuan["mianji"]); ?>平米<?php endif; ?>
												</div>
											</div>
											<div class="formControls col-xs-12 col-sm-12 col-md-12">
												<div style="margin:0;padding:0;font-size:21px;" class="formControls col-xs-12 col-sm-12 col-md-12">
													<?php if($fangyuan['chushoudj'] > 0): ?><span style="color: #757575">出售底价：</span>
														<span style="color: red;font-weight:bold">
															<?php echo ($fangyuan['chushoudj']); ?>
														</span>
														<sub style="color: red;">
															万&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
														</sub><?php endif; ?>
													<?php if($fangyuan['chuzudj']): ?><span style="color: #757575">出租底价：</span>
														<span style="color: red;font-weight:bold">
															<?php echo ($fangyuan['chuzudj']); ?>
														</span>
														<sub style="color: red;">
															元
														</sub><?php endif; ?>
												</div>
											</div>
											<div class="formControls col-xs-12 col-sm-12 col-md-12">
												<div style="margin:0;padding:0;font-size:18px;;color: #424242" class="formControls col-xs-12 col-sm-12 col-md-12">
													录入时间：<?php echo (date('Y-m-d H:i',$fangyuan["lurusj"])); ?>
												</div>
											</div>
										</div>
										<div style="line-height:10PX;">&nbsp;</div>
									</th>
								</tr>
								<tr>
									<th style="color:black;font-size:15px">
										<div style="line-height:10PX;">&nbsp;</div>
										<div class="formControls col-xs-12 col-sm-12 col-md-12">
											<div style="margin:0;padding:0;" class="formControls col-xs-2 col-sm-2 col-md-2">
												<span style="float: right;color: #757575">
													楼层：
												</span>
											</div>
											<div style="margin:0;padding:0;" class="formControls col-xs-4 col-sm-4 col-md-4">
												<?php echo ($fangyuan["louceng"]); ?>/<?php echo ($fangyuan["zlouceng"]); ?>
											</div>
											<div style="margin:0;padding:0;" class="formControls col-xs-2 col-sm-2 col-md-2">
												<span style="float: right;color: #757575">
													朝向：
												</span>
											</div>
											<div style="margin:0;padding:0;" class="formControls col-xs-4 col-sm-4 col-md-4">
												<?php if($fangyuan["chaoxiang"]): if(is_array($chaoxiang)): foreach($chaoxiang as $key=>$v): if($fangyuan["chaoxiang"] == $v["lxid"]): echo ($v["lxming"]); endif; endforeach; endif; ?>
												<?php else: ?>不详<?php endif; ?>
											</div>
										</div>
										<div style="line-height:10PX;">&nbsp;</div>
										<div class="formControls col-xs-12 col-sm-12 col-md-12">
											<div style="margin:0;padding:0;" class="formControls col-xs-2 col-sm-2 col-md-2">
												<span style="float: right;color: #757575">
													梯户：
												</span>
											</div>
											<div style="margin:0;padding:0;" class="formControls col-xs-4 col-sm-4 col-md-4">
											<?php if($fangyuan["ti"]): echo ($fangyuan["ti"]); ?>梯<?php echo ($fangyuan["hu"]); ?>户
												<?php else: ?>不详<?php endif; ?>
											</div>
											<div style="margin:0;padding:0;" class="formControls col-xs-2 col-sm-2 col-md-2">
												<span style="float: right;color: #757575">
													装修：
												</span>
											</div>
											<div style="margin:0;padding:0;" class="formControls col-xs-4 col-sm-4 col-md-4">
											<?php if($fangyuan["zhuangxiu"]): if(is_array($zhuangxiu)): foreach($zhuangxiu as $key=>$v): if($fangyuan["zhuangxiu"] == $v["lxid"]): echo ($v["lxming"]); endif; endforeach; endif; ?>
												<?php else: ?>不详<?php endif; ?>
											</div>
										</div>
										<div style="line-height:10PX;">&nbsp;</div>
										<div class="formControls col-xs-12 col-sm-12 col-md-12">
											<div style="margin:0;padding:0;" class="formControls col-xs-2 col-sm-2 col-md-2">
												<span style="float: right;color: #757575">
													配套：
												</span>
											</div>
											<div style="margin:0;padding:0;" class="formControls col-xs-4 col-sm-4 col-md-4">
											<?php if($peitao): if(is_array($peitao)): foreach($peitao as $key=>$v): echo ($v["lxming"]); ?>;<?php endforeach; endif; ?>
											<?php else: ?>不详<?php endif; ?>
											</div>
											<div style="margin:0;padding:0;" class="formControls col-xs-2 col-sm-2 col-md-2">
												<span style="float: right;color: #757575">
													房屋类型：
												</span>
											</div>
											<div style="margin:0;padding:0;" class="formControls col-xs-4 col-sm-4 col-md-4">
											<?php if($fangyuan["fwleixing"]): if(is_array($fwleixing)): foreach($fwleixing as $key=>$v): if($fangyuan["fwleixing"] == $v["lxid"]): echo ($v["lxming"]); endif; endforeach; endif; ?>
											<?php else: ?>不详<?php endif; ?>
											</div>
										</div>
										<div style="line-height:10PX;">&nbsp;</div>
										<div class="formControls col-xs-12 col-sm-12 col-md-12">
											<div style="margin:0;padding:0;" class="formControls col-xs-2 col-sm-2 col-md-2">
												<span style="float: right;color: #757575">
													建筑面积：
												</span>
											</div>
											<div style="margin:0;padding:0;" class="formControls col-xs-4 col-sm-4 col-md-4">
												<?php echo ($fangyuan["mianji"]); ?>
											</div>



										</div>
										<div style="line-height:10PX;">&nbsp;</div>
										<div class="formControls col-xs-12 col-sm-12 col-md-12">
											<div style="margin:0;padding:0;" class="formControls col-xs-2 col-sm-2 col-md-2">
												<span style="float: right;color: #757575">
													来源：
												</span>
											</div>
											<div style="margin:0;padding:0;" class="formControls col-xs-4 col-sm-4 col-md-4">
											<?php if($fangyuan["laiyuan"]): if(is_array($laiyuan)): foreach($laiyuan as $key=>$v): if($fangyuan["laiyuan"] == $v["lxid"]): echo ($v["lxming"]); endif; endforeach; endif; ?>
											<?php else: ?>不详<?php endif; ?>
											</div>
										</div>
										<div style="line-height:10PX;">&nbsp;</div>
										<div class="formControls col-xs-12 col-sm-12 col-md-12">
											<div style="margin:0;padding:0;" class="formControls col-xs-2 col-sm-2 col-md-2">
												<span style="float: right;color: #757575">
													房源标题：
												</span>
											</div>
											<div style="margin:0;padding:0;" class="formControls col-xs-4 col-sm-4 col-md-4">
												<?php echo ($fangyuan["fybiaoti"]); ?>
											</div>

										</div>
										<div style="line-height:10PX;">&nbsp;</div>
										<div class="formControls col-xs-12 col-sm-12 col-md-12">

											<div style="margin:0;padding:0;" class="formControls col-xs-2 col-sm-2 col-md-2">
												<span style="float: right;color: #757575">
													建筑年代：
												</span>
											</div>
											<div style="margin:0;padding:0;" class="formControls col-xs-4 col-sm-4 col-md-4">
											<?php if($fangyuan["niandai"]): echo ($fangyuan["niandai"]); ?>年
											<?php else: ?>不详<?php endif; ?>
											</div>
										</div>
										<div style="line-height:10PX;">&nbsp;</div>
										<div class="formControls col-xs-12 col-sm-12 col-md-12">
											<div style="margin:0;padding:0;" class="formControls col-xs-2 col-sm-2 col-md-2">
												<span style="float: right;color: #757575">
													产权性质：
												</span>
											</div>
											<div style="margin:0;padding:0;" class="formControls col-xs-4 col-sm-4 col-md-4">
											<?php if($fangyuan["cqxingzhi"]): if(is_array($cqxingzhi)): foreach($cqxingzhi as $key=>$v): if($fangyuan["cqxingzhi"] == $v["lxid"]): echo ($v["lxming"]); endif; endforeach; endif; ?>
											<?php else: ?>不详<?php endif; ?>
											</div>
											<div style="margin:0;padding:0;" class="formControls col-xs-2 col-sm-2 col-md-2">
												<span style="float: right;color: #757575">
													产权年限：
												</span>
											</div>
											<div style="margin:0;padding:0;" class="formControls col-xs-4 col-sm-4 col-md-4">
											<?php if($fangyuan["cqnianxian"]): echo ($fangyuan["cqnianxian"]); ?>年
												<?php else: ?>不详<?php endif; ?>
											</div>
										</div>
										<div style="line-height:10PX;">&nbsp;</div>
										<div class="formControls col-xs-12 col-sm-12 col-md-12">
											<div style="margin:0;padding:0;" class="formControls col-xs-2 col-sm-2 col-md-2">
												<span style="float: right;color: #757575">
													产证日期：
												</span>
											</div>
											<div style="margin:0;padding:0;" class="formControls col-xs-4 col-sm-4 col-md-4">
												<?php if($fangyuan["czriqi"]): echo (date('Y-m-d',$fangyuan["czriqi"])); ?>
												<?php else: ?>不详<?php endif; ?>
											</div>

										</div>




									</th>
								</tr>
								<tr>
									<th>
										<div style="line-height:10PX;">&nbsp;</div>
										<div class="formControls col-xs-12 col-sm-12 col-md-12">
											<div style="margin:0;padding:0;" class="formControls col-xs-1 col-sm-1 col-md-1">
												<span style="float: right;color: #757575">
													备注：
												</span>
											</div>
											<div style="margin:0;padding:0;" class="formControls col-xs-11 col-sm-11 col-md-11">
												<?php echo ($fangyuan['beizhu']); ?>
											</div>
										</div>
										<div style="line-height:10PX;">&nbsp;</div>
									</th>
								</tr>
							</table>
						</div>

					</div>
				</div>
				<div>&nbsp;</div>
			</div>
			<div class="tabCon">
				<div>&nbsp;</div>
				<div class="formControls col-xs-1 col-sm-1 col-md-1"></div>
				<div class="formControls col-xs-10 col-sm-10 col-md-10">
					<div align="center">
						<?php if(($yesshangtu == 1) or ($_SESSION["superadmin"] == 1) or (session("uid") == 2)): ?><a class="btn btn-primary radius  size-XXL" href="javascript:void;" onclick="tupian('上传房源图片','<?php echo U('fangyuanimg/add',array('fybh'=>$fangyuan['bianhao']));?>','800')">
								上传房源图片
							</a><?php endif; ?>
						<a class="btn btn-default radius  size-XXL" href="javascript:;" id="downloadallpic">全部图片下载</a>
					</div>
					<div>&nbsp;</div>
					<div id="fy_img_div" style="padding: 10px;margin: 10px;"></div>
					<div>&nbsp;</div>
				</div>
			</div>
			<div class="tabCon">
				<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
				<meta name="viewport" content="initial-scale=1.0, user-scalable=no" />
				<style type="text/css">
					body, html,#allmap {width: 100%;height: 100%;margin:0;font-family:"微软雅黑";}
				</style>
				<script type="text/javascript" src="http://api.map.baidu.com/api?v=2.0&ak=bMcGRysohMkELc3LhlrUnDKlWGbv7Xno"></script>
				<div>&nbsp;</div>
				<div class="formControls col-xs-1 col-sm-1 col-md-1"></div>
				<div class="formControls col-xs-10 col-sm-10 col-md-10">
					<div id="allmap" style="height: 400px;"></div>
					<div style="height: 30px;">&nbsp;</div>
				</div>
			</div>
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

	<script type="text/javascript" src="/kaidandashi/Public/lib/jquery/1.9.1/jquery.min.js"></script>
	<script type="text/javascript">
                function genjingengduo(){
		$.Huitab("#tab_demo .tabBar span","#tab_demo .tabCon","current","click","5");
	}
		jQuery.Huitab =function(tabBar,tabCon,class_name,tabEvent,i){
			var $tab_menu=$(tabBar);
			// 初始化操作
			$tab_menu.removeClass(class_name);
			$(tabBar).eq(i).addClass(class_name);
			$(tabCon).hide();
			$(tabCon).eq(i).show();
			$tab_menu.bind(tabEvent,function(){
				$tab_menu.removeClass(class_name);
				$(this).addClass(class_name);
				var index=$tab_menu.index(this);
				$(tabCon).hide();
				$(tabCon).eq(index).show();

				// 百度地图API功能
				var map = new BMap.Map("allmap");
				var point = new BMap.Point(<?php if($xiaoqu["dituzb"]): echo ($xiaoqu["dituzb"]); else: ?>117.005758,32.631959<?php endif; ?>);
				map.centerAndZoom(<?php if($xiaoqu["dituzb"]): ?>point,15<?php else: ?>point,12<?php endif; ?>);
				<?php if($xiaoqu["dituzb"]): ?>var marker = new BMap.Marker(point);  // 创建标注
					map.addOverlay(marker);               // 将标注添加到地图中
					marker.setAnimation(BMAP_ANIMATION_BOUNCE); //跳动的动画
					map.addControl(new BMap.MapTypeControl());<?php endif; ?>
				map.addControl(new BMap.MapTypeControl());//添加地图类型控件
				map.enableScrollWheelZoom(true);//开启鼠标滚轮缩放
				map.enableInertialDragging();
				map.enableContinuousZoom();
				// 覆盖区域图层测试
				map.addTileLayer(new BMap.PanoramaCoverageLayer());
				var stCtrl = new BMap.PanoramaControl(); //构造全景控件
				stCtrl.setOffset(new BMap.Size(20, 36));
				map.addControl(stCtrl);//添加全景控件
				// 添加带有定位的导航控件
				var navigationControl = new BMap.NavigationControl({
					// 靠左上角位置
					anchor: BMAP_ANCHOR_TOP_LEFT,
					// LARGE类型
					type: BMAP_NAVIGATION_CONTROL_LARGE,
				});
				map.addControl(navigationControl);
			})
		}
		$(function(){
			$.Huitab("#tab_demo .tabBar span","#tab_demo .tabCon","current","click","0")
		});
	</script>
	<script type="text/javascript">
		function motai(title,url,w,h){
			layer_show(title,url,w,h);
		}
		function layer_show(title,url,w,h){
			if (title == null || title == '') {
				title=false;
			};
			if (url == null || url == '') {
				url="404.html";
			};
			if (w == null || w == '') {
				w=800;
			};
			if (h == null || h == '') {
				h=($(window).height() - 50);
			};
			layer.open({
				type: 2,
				area: [w+'px', h +'px'],
				fix: false, //不固定
				maxmin: false,
    			skin: 'layui-layer-rim',
				shade:0.4,
				title: title,
				content: url,
				end: function () {
					location.reload();
				}
			});
		}
		function tupian(title,url,w,h){
				layer_show1(title,url,w,h);
			}
		function layer_show1(title,url,w,h){
			if (title == null || title == '') {
				title=false;
			};
			if (url == null || url == '') {
				url="404.html";
			};
			if (w == null || w == '') {
				w=800;
			};
			if (h == null || h == '') {
				h=($(window).height() - 50);
			};
			layer.open({
				type: 2,
				area: [w+'px', h +'px'],
				fix: false, //不固定
				maxmin: false,
    			skin: 'layui-layer-rim',
				shade:0.4,
				title: title,
				content: url,
			});
		}
	</script>
	<script type="text/javascript">
		function delEsfy(obj,id){
			layer.confirm('您确定要删除此房源吗？',function(index){
				$.ajax({
					type: 'POST',
					url: '<?php echo U('Fyneirong/delEsfy');?>',
					data:{"id":id},
					dataType: 'json',
					success: function(data){
						var info=data.info;
						layer.msg(info);
					},
					error:function(data) {
						console.log(data.msg);
					},
				});
			})
		;}
		function gongpan(obj,id){
			layer.confirm('您确定要设置此房源为公盘吗？',function(index){
				$.ajax({
					type: 'POST',
					url: '<?php echo U('Fyneirong/gongpanHandle');?>',
					data:{"id":id},
					dataType: 'json',
					success: function(data){
						var info=data.info;
						$(obj).parents(".div2").remove();
						layer.msg(info);
					},
					error:function(data) {
						console.log(data.msg);
					},
				});
			});
		}
		function vrurl1(obj,id){
			layer.prompt({title: '请输入全景地址',value:'<?php echo ($fangyuan["vr_url"]); ?>',formType: 3}, function(text, index){
				$.ajax({
					type: 'POST',
					url: '<?php echo U('Fyneirong/quanjingHandle');?>',
					data:"id=" + id + "&text=" + text,
					dataType: 'json',
					success: function(data){
						var txt1="<a class=\"btn btn-primary radius\" href=\"javascript:;\" id=\"chakan\" onclick=\"motai(\'全景看房\',\'"+text+"\','950\')\">查看</a>";
						$("#chakan").remove();
						$(obj).parents("#quanj").append(txt1);
						layer.msg('修改成功!',{icon:1,time:1000});
					},
					error:function(data) {
						console.log(data.msg);
					},
				});
			});
		}
		function diaoqu(obj,id){
			layer.confirm('你今天还有<?php echo ($diaoqucs); ?>次调取机会，确定要调取吗？',function(index){
				$.ajax({
					type: 'POST',
					url: '<?php echo U('Fyneirong/diaoqu');?>',
					data:'id='+id,
					dataType: 'json',
					success: function(data){
						$(obj).remove();
						var txt2 = "<p>业主："+data['diaoqu1']['yezhu']+"</p><p><i class=\"Hui-iconfont\">&#xe6a3;</i>"+data['diaoqu1']['yezhudianhua']+"</p><p>座栋："+data['diaoqu1']['zuodong']+"</p><p>单元："+data['diaoqu1']['danyuan']+"</p><p>房号："+data['diaoqu1']['fanghao']+"</p>";
						$("#diaoqu").append(txt2);
						var txt3 = "<a class=\"btn btn-primary radius a\" href=\"javascript:;\" onclick=\"motai('门牌号修改','<?php echo U('Fyneirong/xgzuodong',array('id'=>$fangyuan['id']));?>','500')\">修改资料</a>"
						$("#xiugaianniu").append(txt3);
						layer.msg('已调取!',{icon:1,time:1000});

					},
					error:function(data) {
						console.log(data.msg);
					},
				});
			});
		}
	</script>
	<!--//图片上传-->
	<script type="text/javascript">
		var isFrist = false;
		$("#fy_img").click(function(){
			//异步显示房源图片列表页
			if(!isFrist){
				var fy_bh=<?php echo ($fangyuan["bianhao"]); ?>;
				$.ajax({
					url:'<?php echo U('Fangyuan/get_fy_img');?>',
					Type:"POST",
					data:"fy_bh=" + fy_bh,
					dataType:"json",
					success:function(data){
						var pics = data.pics;
						for(var i in pics){
							var img='<div class="row"><div class="col-sm-3 col-md-3"><div class="thumbnail mb-10"><div class="picbox"><a href="/Upload/'+pics[i]['gongsiid']+'/'+pics[i]['fybh']+'/'+pics[i]['image']+'" data-lightbox="gallery" data-title=""><img class="img-responsive1" width="220px" height="166px" src="/Upload/'+pics[i]['gongsiid']+'/'+pics[i]['fybh']+'/t_'+pics[i]['image']+'" alt="..." /></a></div><div class="caption mt-10"><p><a style="text-decoration:none" class=" btn btn-danger pd-5" onClick="picture_del(this,'+pics[i]['id']+')" href="javascript:;" >删除</a> <a download="/Upload/'+pics[i]['gongsiid']+'/'+pics[i]['fybh']+'/'+pics[i]['image']+'" href="/Upload/'+pics[i]['gongsiid']+'/'+pics[i]['fybh']+'/'+pics[i]['image']+'" class="btn btn-default" role="button">下载</a></p><p><h5 class="text-primary">上传人：'+pics[i]['ygmingcheng']+'<small class="text-muted pull-right"><span class="pd-10">'+pics[i]['create_time']+'</span></small></h5></p></div></div></div></div>';
							$("#fy_img_div").append(img);
						}
					}
				});
				isFrist = true;
			}
		});
		/*图片-删除*/
		function picture_del(obj,id){
			layer.confirm('确认要删除吗？',function(index){
				$.ajax({
					type: 'POST',
					url: '<?php echo U('Fangyuan/fy_pic_del');?>',
					data:"fy_pic_id=" + id,
					dataType: 'json',
					success: function(data){
						if(data.info=="你没有权限"){
							layer.msg('你没有权限!',{icon:5,time:1000});
						}else{
							$(obj).parents(".row").remove();
							layer.msg('已删除!',{icon:1,time:1000});
						}
					},
					error:function(data) {
						console.log(data.msg);
					},
				});
			});
		}
		function reloadparentimg(){
			var fy_bh=<?php echo ($fangyuan["bianhao"]); ?>;
			$.ajax({
				url:'<?php echo U('Fangyuan/get_fy_img');?>',
				Type:"POST",
				data:"fy_bh=" + fy_bh,
				dataType:"json",
				success:function(data){
					var pics = data.pics;
					$("#fy_img_div").empty();
					for(var i in pics){
						var img='<div class="row"><div class="col-sm-3 col-md-3"><div class="thumbnail mb-10"><div class="picbox"><a href="/Upload/'+pics[i]['gongsiid']+'/'+pics[i]['fybh']+'/'+pics[i]['image']+'" data-lightbox="gallery" data-title=""><img class="img-responsive1" width="220px" height="166px"  src="/Upload/'+pics[i]['gongsiid']+'/'+pics[i]['fybh']+'/t_'+pics[i]['image']+'" alt="..." /></a></div><div class="caption mt-10"><p><a style="text-decoration:none" class=" btn btn-danger pd-5" onClick="picture_del(this,'+pics[i]['id']+')" href="javascript:;" >删除</a> <a download="/Upload/'+pics[i]['gongsiid']+'/'+pics[i]['fybh']+'/'+pics[i]['image']+'" href="/Upload/'+pics[i]['gongsiid']+'/'+pics[i]['fybh']+'/'+pics[i]['image']+'" class="btn btn-default" role="button">下载</a></p><p><h5 class="text-primary">上传人：'+pics[i]['ygmingcheng']+'<small class="text-muted pull-right"><span class="pd-10">'+pics[i]['create_time']+'</span></small></h5></p></div></div></div></div>';
						$("#fy_img_div").append(img);
					}
				}
			});
		}
	</script>
	<script type="text/javascript">
		$(function(){
			$("#downloadallpic").click(function() {
				var downloadUrl = new Array();
				$('.downpic').each(function(){
					downloadUrl.push($(this).attr('href'));
				});
				$(downloadUrl).multiDownload({"source":"local"});
			});
		});
		function DownLoadReportIMG(obj){
			var downloadUrl = new Array();
			downloadUrl.push($(obj).attr('d'));
			$(downloadUrl).multiDownload({"source":"local"});
		}
	</script>
	<script type="text/javascript" src="/kaidandashi/Public/lib/lightbox2/2.8.1/js/lightbox.min.js"></script>

</body>
</html>