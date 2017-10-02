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


	<div class="col-xs-12 col-sm-12 col-md-12">
		<div class="row cl">
			<div>&nbsp;</div>
			<div class="formControls col-xs-1 col-sm-1 col-md-1"></div>
			<div class="formControls col-xs-10 col-sm-10 col-md-10">
				<?php if(($keyuan["weihurenid"] == session("uid") and (($keyuan["zhuangtai"] == 0) or ($keyuan["zhuangtai"] == 1))) or ((session("uid") == 2) and (($keyuan["zhuangtai"] == 0) or ($keyuan["zhuangtai"] == 1)))): ?><div style="width: 72px;float: left;">
						<a href="javascript:;" onclick="edit('客源编辑','<?php echo U('Kyneirong/editKeyuan',array('id'=>$keyuan['id']));?>','950')" style="text-decoration:none;">
							<i class="Hui-iconfont" style="font-size:50px; line-height:10px;">
								&#xe6df;
							</i>
							<strong><p style="color:black;">修改信息</p></strong>
						</a>
					</div><?php endif; ?>
				<?php if(($keyuan["zhuangtai"] == 1) and ($keyuan["weihurenid"] == session("uid")) or ((session("uid") == 2) and ($keyuan["zhuangtai"] == 1))): ?><div style="width: 72px;float: left;">
						<a href="javascript:;" onclick="gongke(this,<?php echo ($keyuan['id']); ?>)" style="text-decoration:none">
							<i class="Hui-iconfont" style="font-size:50px;line-height:10px;">
								&#xe725;
							</i>
							<strong><p style="color:black;">转为公客</p></strong>
						</a>
					</div><?php endif; ?>
				<?php if(($keyuan["zhuangtai"] == 0) and ($keyuan["weihurenid"] == session("uid")) and ($keyuanshu < 15) or ((session("uid") == 2) and ($keyuan["zhuangtai"] == 0))): ?><div style="width: 72px;float: left;">
						<a href="javascript:;" onclick="sike(this,<?php echo ($keyuan['id']); ?>)" style="text-decoration:none">
							<i class="Hui-iconfont" style="font-size:50px;line-height:10px;">
								&#xe624;
							</i>
							<strong><p style="color:black;">收为私客</p></strong>
						</a>
					</div><?php endif; ?>
				<?php if(($keyuan["zhuangtai"] == 1)): if(($keyuan["weihurenid"] == session("uid")) or (session("uid") == 2)): ?><div style="width: 72px;float: left;">
							<a href="javascript:;" onclick="fengpan('封盘','<?php echo U('Kyneirong/fengpan',array('id'=>$keyuan['id']));?>','480','300')" style="text-decoration:none">
								<i class="Hui-iconfont" style="font-size:50px;line-height:10px;">
									&#xe60e;
								</i>
								<strong><p style="color:black;">&nbsp;&nbsp;&nbsp;封盘</p></strong>
							</a>
						</div><?php endif; endif; ?>
				<?php if(($keyuan["zhuangtai"] == 0) or ((session("uid") == 2) and ($keyuan["zhuangtai"] == 0))): ?><div style="width: 72px;float: left;">
						<a href="javascript:;" onclick="fengpan('封盘','<?php echo U('Kyneirong/fengpan',array('id'=>$keyuan['id']));?>','480','300')" style="text-decoration:none">
							<i class="Hui-iconfont" style="font-size:50px;line-height:10px;">
								&#xe60e;
							</i>
							<strong><p style="color:black;">&nbsp;&nbsp;&nbsp;封盘</p></strong>
						</a>
					</div><?php endif; ?>
				<?php if(($keyuan["zhuangtai"] == 4) and ($keyuan["weihurenid"] == session("uid")) or ((session("uid") == 2) and ($keyuan["zhuangtai"] == 4))): ?><div style="width: 72px;float: left;">
						<a href="javascript:;" onclick="kaipan('开盘','<?php echo U('Kyneirong/kaipan',array('id'=>$keyuan['id']));?>','480','300')" style="text-decoration:none">
							<i class="Hui-iconfont" style="font-size:50px;line-height:10px;">
								&#xe605;
							</i>
							<strong><p style="color:black;">&nbsp;&nbsp;&nbsp;开盘</p></strong>
						</a>
					</div><?php endif; ?>
				<?php if(($keyuan["zhuangtai"] == 0) or ($keyuan["zhuangtai"] == 1)): if($keyuan["weihurenid"] == session("uid") or (session("uid") == 2)): ?><div style="width: 72px;float: left;">
							<a href="javascript:;" onclick="genjin('写跟进','<?php echo U('Kyneirong/genjin',array('kyid'=>$keyuan['id'],'kybh'=>$keyuan['xqbianhao'],'uid'=>session('uid')));?>','950')" style="text-decoration:none">
								<i class="Hui-iconfont" style="font-size:50px;line-height:10px;">
									&#xe70c;
								</i>
								<strong><p style="color:black;">&nbsp;写跟进</p></strong>
							</a>
						</div><?php endif; endif; ?>
				<?php if(($keyuan["zhuangtai"] == 0) or ($keyuan["zhuangtai"] == 1) or ($keyuan["zhuangtai"] == 4)): if($keyuan["weihurenid"] == session("uid") or (session("uid") == 2)): ?><div style="width: 72px;float: left;">
							<a href="javascript:;" onclick="tixing('写提醒','<?php echo U('Kyneirong/tixing',array('kyid'=>$keyuan['id'],'kybh'=>$keyuan['xqbianhao'],'uid'=>session('uid')));?>','800','500')" style="text-decoration:none">
								<i class="Hui-iconfont" style="font-size:50px;line-height:10px;">
									&#xe6c5;
								</i>
								<strong><p style="color:black;">写提醒</p></strong>
							</a>
						</div><?php endif; endif; ?>
				<?php if(($keyuan["zhuangtai"] == 0) or ($keyuan["zhuangtai"] == 1)): if($keyuan["weihurenid"] == session("uid") or (session("uid") == 2)): ?><div style="width: 72px;float: left;">
							<a href="javascript:;" onclick="daikan('写带看','<?php echo U('Kyneirong/daikan',array('kyid'=>$keyuan['id'],'kybh'=>$keyuan['xqbianhao'],'uid'=>session('uid')));?>','800','500')" style="text-decoration:none">
								<i class="Hui-iconfont" style="font-size:50px;line-height:10px;">
									&#xe6a9;
								</i>
								<strong><p style="color:black;">&nbsp;写带看</p></strong>
							</a>
						</div><?php endif; endif; ?>
				<div style="width: 72px;float: left;">
					<a title="刷新" href="javascript:location.replace(location.href);" onclick="" style="text-decoration:none">
						<i class="Hui-iconfont" style="font-size:50px;line-height:10px;">
							&#xe68f;
						</i>
						<strong><p style="color:black;">&nbsp;&nbsp;刷新</p></strong>
					</a>
				</div>
			</div>
		</div>
		<div id="tab_demo" class="HuiTab">
			<div class="row cl">
				<div class="formControls col-xs-1 col-sm-1 col-md-1"></div>
				<div id="tab_demo" class="formControls col-xs-10 col-sm-10 col-md-10">
					<div class="tabBar clearfix">
						<span style="font-size:15px">基本信息</span>
						<span id="fy_img" style="font-size:15px;display:none">房源匹配</span>
						<span style="font-size:15px">跟进记录</span>
						<span style="font-size:15px">带看记录</span>
						<span style="font-size:15px">提醒记录</span>
						<span style="font-size:15px;display:none">日志</span>
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
								<tr>
									<th style="color: black;">
										<div style="line-height:10PX;">&nbsp;</div>
										<div class="formControls col-xs-12 col-sm-12 col-md-12">
											<div style="font-size:30px;" align="center" class="formControls col-xs-12 col-sm-12 col-md-12">
												<strong>[<?php echo ($keyuan['xqbianhao']); ?>]<?php echo ($xiaoqum); ?></strong>
											</div>
											<?php if($keyuan["xqquyu"]): ?><div style="font-size:21px;" class="formControls col-xs-12 col-sm-12 col-md-12">
													<div style="margin:0;padding:0;" class="formControls col-xs-2 col-sm-2 col-md-2">
														<span style="float: right;color: #757575">
															需求区域：
														</span>
													</div>
													<div style="margin:0;padding:0;" class="formControls col-xs-10 col-sm-10 col-md-10">
														<?php echo ($keyuan["xqquyu"]); ?>
													</div>
												</div><?php endif; ?>
											<?php if($keyuan["xqxiaoqu"]): ?><div style="font-size:21px;" class="formControls col-xs-12 col-sm-12 col-md-12">
													<div style="margin:0;padding:0;" class="formControls col-xs-2 col-sm-2 col-md-2">
														<span style="float: right;color: #757575">
															需求小区：
														</span>
													</div>
													<div style="margin:0;padding:0;" class="formControls col-xs-9 col-sm-9 col-md-9">
														<?php echo ($keyuan["xqxiaoqu"]); ?>
													</div>
												</div><?php endif; ?>
											<div style="font-size:21px;" class="formControls col-xs-12 col-sm-12 col-md-12">
												<div style="margin:0;padding:0;" class="formControls col-xs-2 col-sm-2 col-md-2">
													<span style="float: right;color: #757575">
														需求价格：
													</span>
												</div>
												<div style="margin:0;padding:0;" class="formControls col-xs-9 col-sm-9 col-md-9">
													<?php if($keyuan["xqjiage1"] and $keyuan["xqjiage2"]): ?><strong style="color: red">
															<?php echo ($keyuan["xqjiage1"]); ?>
														</strong>
														<sub style="color: red">万</sub>
														<span style="color: red">~</span>
														<strong style="color: red">
															<?php echo ($keyuan["xqjiage2"]); ?>
														</strong>
														<sub style="color: red">万</sub>
														<?php elseif($keyuan["xqjiage1"]): ?>
														<strong style="color: red">
															<?php echo ($keyuan["xqjiage1"]); ?>
														</strong>
														<sub style="color: red">万以上</sub>
														<?php elseif($keyuan["xqjiage2"]): ?>
														<strong style="color: red">
															<?php echo ($keyuan["xqjiage2"]); ?>
														</strong>
														<sub style="color: red">万以下</sub><?php endif; ?>
												</div>
											</div>
											<div style="font-size:21px;" class="formControls col-xs-12 col-sm-12 col-md-12">
												<div style="margin:0;padding:0;" class="formControls col-xs-2 col-sm-2 col-md-2">
													<span style="float: right;color: #757575">
														需求面积：
													</span>
												</div>
												<div style="margin:0;padding:0;" class="formControls col-xs-9 col-sm-9 col-md-9">
													<?php if($keyuan["xqmianji1"] and $keyuan["xqmianji2"]): ?><strong><?php echo ($keyuan["xqmianji1"]); ?></strong>
														<sub>平米</sub>
														~
														<strong><?php echo ($keyuan["xqmianji2"]); ?></strong>
														<sub>平米</sub>
														<?php elseif($keyuan["xqmianji1"]): ?>
														<strong><?php echo ($keyuan["xqmianji1"]); ?></strong>
														<sub>平米以上</sub>
														<?php elseif($keyuan["xqmianji2"]): ?>
														<strong><?php echo ($keyuan["xqmianji2"]); ?></strong>
														<sub>平米以下</sub><?php endif; ?>
												</div>
											</div>
											<div style="font-size:21px;" class="formControls col-xs-12 col-sm-12 col-md-12">
												<div style="margin:0;padding:0;" class="formControls col-xs-2 col-sm-2 col-md-2">
													<span style="float: right;color: #757575">
														需求户型：
													</span>
												</div>
												<div style="margin:0;padding:0;" class="formControls col-xs-9 col-sm-9 col-md-9">
													<?php if($keyuan["xqhuxing1"] and $keyuan["xqhuxing2"]): ?><strong><?php echo ($keyuan["xqhuxing1"]); ?></strong>
														<sub>室</sub>
														~
														<strong><?php echo ($keyuan["xqhuxing2"]); ?></strong>
														<sub>室</sub>
														<?php elseif($keyuan["xqhuxing1"]): ?>
														<strong><?php echo ($keyuan["xqhuxing1"]); ?></strong>
														<sub>室以上</sub>
														<?php elseif($keyuan["xqhuxing2"]): ?>
														<strong><?php echo ($keyuan["xqhuxing2"]); ?></strong>
														<sub>室以下</sub><?php endif; ?>
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
													客户姓名：
												</span>
											</div>
											<div style="margin:0;padding:0;" class="formControls col-xs-4 col-sm-4 col-md-4">
												<?php echo ($keyuan['khxingming']); ?>
											</div>
											<div style="margin:0;padding:0;" class="formControls col-xs-2 col-sm-2 col-md-2">
												<span style="float: right;color: #757575">
													客户等级：
												</span>
											</div>
											<div style="margin:0;padding:0;" class="formControls col-xs-4 col-sm-4 col-md-4">
												<?php if(is_array($kydengji)): foreach($kydengji as $key=>$vv): if($keyuan["kydengji"] == $vv["lxid"]): echo ($vv["lxming"]); endif; endforeach; endif; ?>
											</div>
										</div>
										<div style="line-height:5PX;">&nbsp;</div>
										<div class="formControls col-xs-12 col-sm-12 col-md-12">
											<div style="margin:0;padding:0;" class="formControls col-xs-2 col-sm-2 col-md-2">
												<span style="float: right;color: #757575">
													需求楼层：
												</span>
											</div>
											<div style="margin:0;padding:0;" class="formControls col-xs-4 col-sm-4 col-md-4">
												<?php if($keyuan["louceng1"] and $keyuan["louceng2"]): echo ($keyuan["louceng1"]); ?>
													~
													<?php echo ($keyuan["louceng2"]); ?>层
													<?php elseif($keyuan["louceng1"]): ?>
													<?php echo ($keyuan["louceng1"]); ?>层以上
													<?php elseif($keyuan["louceng2"]): ?>
													<?php echo ($keyuan["louceng2"]); ?>层以下<?php endif; ?>
											</div>
											<div style="margin:0;padding:0;" class="formControls col-xs-2 col-sm-2 col-md-2">
												<span style="float: right;color: #757575">
													需求朝向：
												</span>
											</div>
											<div style="margin:0;padding:0;" class="formControls col-xs-4 col-sm-4 col-md-4">
												<?php if(is_array($chaoxiang)): foreach($chaoxiang as $key=>$v): echo ($v["lxming"]); ?>;<?php endforeach; endif; ?>
											</div>
										</div>
										<div style="line-height:5PX;">&nbsp;</div>
										<div class="formControls col-xs-12 col-sm-12 col-md-12">
											<div style="margin:0;padding:0;" class="formControls col-xs-2 col-sm-2 col-md-2">
												<span style="float: right;color: #757575">
													需求房龄：
												</span>
											</div>
											<div style="margin:0;padding:0;" class="formControls col-xs-4 col-sm-4 col-md-4">
												<?php if($keyuan["fangling1"] and $keyuan["fangling2"]): echo ($keyuan["fangling1"]); ?>
													~
													<?php echo ($keyuan["fangling2"]); ?>年
													<?php elseif($keyuan["fangling1"]): ?>
													<?php echo ($keyuan["fangling1"]); ?>年以上
													<?php elseif($keyuan["fangling2"]): ?>
													<?php echo ($keyuan["fangling2"]); ?>年以下<?php endif; ?>
											</div>
											<div style="margin:0;padding:0;" class="formControls col-xs-2 col-sm-2 col-md-2">
												<span style="float: right;color: #757575">
													需求装修：
												</span>
											</div>
											<div style="margin:0;padding:0;" class="formControls col-xs-4 col-sm-4 col-md-4">
												<?php if(is_array($zhuangxiu)): foreach($zhuangxiu as $key=>$v): echo ($v["lxming"]); ?>;<?php endforeach; endif; ?>
											</div>
										</div>
										<div style="line-height:5PX;">&nbsp;</div>
										<div class="formControls col-xs-12 col-sm-12 col-md-12">
											<div style="margin:0;padding:0;" class="formControls col-xs-2 col-sm-2 col-md-2">
												<span style="float: right;color: #757575">
													需求配套：
												</span>
											</div>
											<div style="margin:0;padding:0;" class="formControls col-xs-4 col-sm-4 col-md-4">
												<?php if(is_array($peitao)): foreach($peitao as $key=>$v): echo ($v["lxming"]); ?>;<?php endforeach; endif; ?>
											</div>
											<div style="margin:0;padding:0;" class="formControls col-xs-2 col-sm-2 col-md-2">
												<span style="float: right;color: #757575">
													客户来源：
												</span>
											</div>
											<div style="margin:0;padding:0;" class="formControls col-xs-4 col-sm-4 col-md-4">
												<?php if(is_array($laiyuan)): foreach($laiyuan as $key=>$vv): if($keyuan["khlaiyuan"] == $vv["lxid"]): echo ($vv["lxming"]); endif; endforeach; endif; ?>
											</div>
										</div>
										<div style="line-height:5PX;">&nbsp;</div>
										<div class="formControls col-xs-12 col-sm-12 col-md-12">
											<div style="margin:0;padding:0;" class="formControls col-xs-2 col-sm-2 col-md-2">
												<span style="float: right;color: #757575">
													沟通阶段：
												</span>
											</div>
											<div style="margin:0;padding:0;" class="formControls col-xs-4 col-sm-4 col-md-4">
												<?php if(is_array($gtjieduan)): foreach($gtjieduan as $key=>$vv): if($keyuan["gtjieduan"] == $vv["lxid"]): echo ($vv["lxming"]); endif; endforeach; endif; ?>
											</div>
											<div style="margin:0;padding:0;" class="formControls col-xs-2 col-sm-2 col-md-2">
												<span style="float: right;color: #757575">
													消费理念：
												</span>
											</div>
											<div style="margin:0;padding:0;" class="formControls col-xs-4 col-sm-4 col-md-4">
												<?php if(is_array($xflinian)): foreach($xflinian as $key=>$vv): if($keyuan["xflinian"] == $vv["lxid"]): echo ($vv["lxming"]); endif; endforeach; endif; ?>
											</div>
										</div>
										<div style="line-height:5PX;">&nbsp;</div>
										<div class="formControls col-xs-12 col-sm-12 col-md-12">
											<div style="margin:0;padding:0;" class="formControls col-xs-2 col-sm-2 col-md-2">
												<span style="float: right;color: #757575">
													需求付款：
												</span>
											</div>
											<div style="margin:0;padding:0;" class="formControls col-xs-4 col-sm-4 col-md-4">
												<?php if(is_array($fukuan)): foreach($fukuan as $key=>$vv): if($keyuan["fukuan"] == $vv["lxid"]): echo ($vv["lxming"]); endif; endforeach; endif; ?>
											</div>
											<div style="margin:0;padding:0;" class="formControls col-xs-2 col-sm-2 col-md-2">
												<span style="float: right;color: #757575">
													客户等级：
												</span>
											</div>
											<div style="margin:0;padding:0;" class="formControls col-xs-4 col-sm-4 col-md-4">
												<?php if(is_array($kydengji)): foreach($kydengji as $key=>$vv): if($keyuan["kydengji"] == $vv["lxid"]): echo ($vv["lxming"]); endif; endforeach; endif; ?>
											</div>
										</div>
										<div style="line-height:5PX;">&nbsp;</div>
										<div class="formControls col-xs-12 col-sm-12 col-md-12">
											<div style="margin:0;padding:0;" class="formControls col-xs-2 col-sm-2 col-md-2">
												<span style="float: right;color: #757575">
													国籍：
												</span>
											</div>
											<div style="margin:0;padding:0;" class="formControls col-xs-4 col-sm-4 col-md-4">
												<?php if(is_array($guoji)): foreach($guoji as $key=>$vv): if($keyuan["guoji"] == $vv["lxid"]): echo ($vv["lxming"]); endif; endforeach; endif; ?>
											</div>
											<div style="margin:0;padding:0;" class="formControls col-xs-2 col-sm-2 col-md-2">
												<span style="float: right;color: #757575">
													民族：
												</span>
											</div>
											<div style="margin:0;padding:0;" class="formControls col-xs-4 col-sm-4 col-md-4">
												<?php if(is_array($minzu)): foreach($minzu as $key=>$vv): if($keyuan["minzu"] == $vv["lxid"]): echo ($vv["lxming"]); endif; endforeach; endif; ?>
											</div>
										</div>
										<div style="line-height:5PX;">&nbsp;</div>
										<div class="formControls col-xs-12 col-sm-12 col-md-12">
											<div style="margin:0;padding:0;" class="formControls col-xs-2 col-sm-2 col-md-2">
												<span style="float: right;color: #757575">
													证件号码：
												</span>
											</div>
											<div style="margin:0;padding:0;" class="formControls col-xs-4 col-sm-4 col-md-4">
												<?php echo ($keyuan['sfzheng']); ?>
											</div>
											<div style="margin:0;padding:0;" class="formControls col-xs-2 col-sm-2 col-md-2">
												<span style="float: right;color: #757575">
													邮箱：
												</span>
											</div>
											<div style="margin:0;padding:0;" class="formControls col-xs-4 col-sm-4 col-md-4">
												<?php echo ($keyuan['youxiang']); ?>
											</div>
										</div>
										<div style="line-height:5PX;">&nbsp;</div>
										<div class="formControls col-xs-12 col-sm-12 col-md-12">
											<div style="margin:0;padding:0;" class="formControls col-xs-2 col-sm-2 col-md-2">
												<span style="float: right;color: #757575">
													QQ：
												</span>
											</div>
											<div style="margin:0;padding:0;" class="formControls col-xs-4 col-sm-4 col-md-4">
												<?php echo ($keyuan['qqhao']); ?>
											</div>
											<div style="margin:0;padding:0;" class="formControls col-xs-2 col-sm-2 col-md-2">
												<span style="float: right;color: #757575">
													微信：
												</span>
											</div>
											<div style="margin:0;padding:0;" class="formControls col-xs-4 col-sm-4 col-md-4">
												<?php echo ($keyuan['weixin']); ?>
											</div>
										</div>
										<div style="line-height:5PX;">&nbsp;</div>
										<div class="formControls col-xs-12 col-sm-12 col-md-12">
											<div style="margin:0;padding:0;" class="formControls col-xs-2 col-sm-2 col-md-2">
												<span style="float: right;color: #757575">
													交通工具：
												</span>
											</div>
											<div style="margin:0;padding:0;" class="formControls col-xs-4 col-sm-4 col-md-4">
												<?php if(is_array($jtgongju)): foreach($jtgongju as $key=>$vv): if($keyuan["jtgongju"] == $vv["lxid"]): echo ($vv["lxming"]); endif; endforeach; endif; ?>
											</div>
											<div style="margin:0;padding:0;" class="formControls col-xs-2 col-sm-2 col-md-2">
												<span style="float: right;color: #757575">
													车型：
												</span>
											</div>
											<div style="margin:0;padding:0;" class="formControls col-xs-4 col-sm-4 col-md-4">
												<?php echo ($keyuan['chexing']); ?>
											</div>
										</div>
										<div style="line-height:10PX;">&nbsp;</div>
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
												<?php echo ($keyuan['beizhu']); ?>
											</div>
										</div>
										<div style="line-height:10PX;">&nbsp;</div>
									</th>
								</tr>
							</table>
						</div>
						<div style="float:right;width:30%;">
							<div>
								<table border="1">
									<tr>
										<th style="font-size:18px;color: black">
											<div style="line-height:5PX;">&nbsp;</div>
											&nbsp;&nbsp;&nbsp;最近7天：
											<h1 align="center"><?php echo ($daikanshu); ?>次带看</h1>
										</th>
									</tr>
								</table>
							</div>
							<div style="line-height:5PX;">&nbsp;</div>
							<div>
								<table border="1">
									<tr>
										<th style="font-size:15px;color: black">
											<div class="formControls col-xs-10 col-sm-10 col-md-10">
												<span style="color: #757575">
													客户：
												</span>
												<?php echo ($keyuan["khxingming"]); ?>
												<?php if(is_array($kehulx)): foreach($kehulx as $key=>$vv): if($keyuan["kehulx"] == $vv["lxid"]): echo ($vv["lxming"]); endif; endforeach; endif; ?>
												<div style="line-height:5PX;"></div>
												<i class="Hui-iconfont" style="color: #757575">&#xe6a3;</i>
												<?php echo ($keyuan["dianhua"]); ?>
											</div>
										</th>
									</tr>
								</table>
							</div>
							<div style="line-height:5PX;">&nbsp;</div>
							<div>
								<table border="1">
									<tr>
										<th style="color: #757575;font-size:15px">
											&nbsp;相关经纪人
										</th>
										<th></th>
										<th></th>
									</tr>
									<tr>
										<th style="width:80px;color:black;font-size:15px">
											<div align="right" style="color: #757575;">
												录入人：&nbsp;
											</div>
										</th>
										<th style="color:black;font-size:15px">
											&nbsp;&nbsp;&nbsp;<?php echo ($luru['bmming']); ?>-<?php echo ($luru["ygmingcheng"]); ?>
											<div style="line-height:5PX;"></div>
											<span style="color: #757575">
												&nbsp;&nbsp;&nbsp;电话:
											</span>
											<span style="color: black">
												&nbsp;&nbsp;&nbsp;<?php echo ($lrdh); ?>
											</span>
										</th>
										<th></th>
									</tr>
									<tr>
										<th style="width:80px;color:black;font-size:15px">
											<div align="right" style="color: #757575;">
												维护人：&nbsp;
											</div>
										</th>
										<th style="color:black;font-size:15px">
											&nbsp;&nbsp;&nbsp;<?php echo ($weihu['bmming']); ?>-<?php echo ($weihu["ygmingcheng"]); ?>
											<div style="line-height:5PX;"></div>
											<span style="color: #757575">
												&nbsp;&nbsp;&nbsp;电话:
											</span>
											<span style="color: black">
												&nbsp;&nbsp;&nbsp;<?php echo ($whdh); ?>
											</span>
										</th>
										<th>
											<div align="center">
												<a title="变更维护人" href="javascript:;" onclick="bgwhr('变更维护人','<?php echo U('Kyneirong/bgwhr',array('id'=>$keyuan['id']));?>','540','400')" style="text-decoration:none" class="btn btn-primary radius">
													变更维护人
												</a>
											</div>
										</th>
									</tr>
									<tr>
										<th style="width:80px;color:black;font-size:15px">
											<div align="right" style="color: #757575;">
												封盘人：&nbsp;
											</div>
										</th>
										<th style="color:black;font-size:15px">
											&nbsp;&nbsp;&nbsp;
											<?php echo ($fengpan['bmming']); ?>-<?php echo ($fengpan["ygmingcheng"]); ?>
											<div style="line-height:5PX;"></div>
											<span style="color: #757575">
												&nbsp;&nbsp;&nbsp;电话:
											</span>
											<span style="color: black">
												&nbsp;&nbsp;&nbsp;<?php echo ($fpdh); ?>
											</span>
										</th>
										<th></th>
									</tr>
								</table>
							</div>
							<div>&nbsp;</div>
						</div>
					</div>
				</div>
				<div>&nbsp;</div>
			</div>
			<div class="tabCon" style="display:none"></div>
			<div class="tabCon">
				<div>&nbsp;</div>
				<div class="formControls col-xs-1 col-sm-1 col-md-1"></div>
				<div class="formControls col-xs-10 col-sm-10 col-md-10">
					<table class="table table-border table-bordered table-hover table-bg">
						<thead>
							<tr>
								<th scope="col" colspan="12" style="color:black;font-size:16px">
									<strong>跟进记录</strong>
								</th>
							</tr>
							<tr class="text-c">
								<th width="80" style="color:black;font-size:15px">
									<strong>跟进时间</strong>
								</th>
								<th width="80" style="color:black;font-size:15px">
									<strong>跟进方式</strong>
								</th>
								<th width="80" style="color:black;font-size:15px">
									<strong>跟进人</strong>
								</th>
								<th width="80" style="color:black;font-size:15px">
									<strong>所在部门</strong>
								</th>
								<th width="80" style="color:black;font-size:15px">
									<strong>跟进内容</strong>
								</th>
								<th width="80" style="color:black;font-size:15px;display:none">
									<strong>操作</strong>
								</th>
							</tr>
						</thead>
						<tbody>
							<?php if(is_array($kygenjin)): foreach($kygenjin as $key=>$gj): ?><tr class="text-c">
									<td style="font-size:12px;color:black;">
										<strong>
											<?php echo (date('Y-m-d h:i',$gj["gjshijian"])); ?>
										</strong>
									</td>
									<td style="font-size:12px;color:black;">
										<strong>
											<?php if(is_array($genjinfs)): foreach($genjinfs as $key=>$vv): if($gj["genjinfs"] == $vv["lxid"]): echo ($vv["lxming"]); endif; endforeach; endif; ?>
										</strong>
									</td>
									<td style="font-size:12px;color:black;">
										<strong>
											<?php echo ($gj["ygmingcheng"]); ?>
										</strong>
									</td>
									<td style="font-size:12px;color:black;">
										<strong><?php echo ($gj["bmming"]); ?></strong>
									</td>
									<td style="font-size:12px;color:black;">
										<strong><?php echo ($gj["gjneirong"]); ?></strong>
									</td>
									<td class="f-14" style="font-size:12px;color:black;display:none">
										<strong>
											<a title="编辑" href="javascript:;" onclick="admin_xiaoqu_edit('编辑小区','<?php echo U('Ziyuan/editXiaoqu',array('id'=>$xq['id']));?>','800')" style="text-decoration:none" >
												<i class="Hui-iconfont">&#xe6df;</i>
											</a>
											<a title="删除" href="javascript:;" onclick="admin_xiaoqu_del(this,'<?php echo ($xq["id"]); ?>')" class="ml-5" style="text-decoration:none">
												<i class="Hui-iconfont">&#xe6e2;</i>
											</a>
										</strong>
									</td>
								</tr><?php endforeach; endif; ?>
						</tbody>
					</table>
				</div>
			</div>
			<div class="tabCon">
				<div>&nbsp;</div>
				<div class="formControls col-xs-1 col-sm-1 col-md-1"></div>
				<div class="formControls col-xs-10 col-sm-10 col-md-10">
					<table class="table table-border table-bordered table-hover table-bg">
						<thead>
							<tr>
								<th scope="col" colspan="12" style="color:black;font-size:16px">
									<strong>带看记录</strong>
								</th>
							</tr>
							<tr class="text-c">
								<th width="80" style="color:black;font-size:15px;display:none">
									<strong>图片</strong>
								</th>
								<th width="80" style="color:black;font-size:15px">
									<strong>带看时间</strong>
								</th>
								<th width="80" style="color:black;font-size:15px">
									<strong>带看房源</strong>
								</th>
								<th width="80" style="color:black;font-size:15px">
									<strong>带看人</strong>
								</th>
								<th width="80" style="color:black;font-size:15px">
									<strong>所在部门</strong>
								</th>
								<th width="80" style="color:black;font-size:15px">
									<strong>带看内容</strong>
								</th>
								<th width="80" style="color:black;font-size:15px;display:none">
									<strong>操作</strong>
								</th>
							</tr>
						</thead>
						<tbody>
							<?php if(is_array($kydaikan)): foreach($kydaikan as $key=>$dk): ?><tr class="text-c">
									<td style="font-size:12px;color:black;display:none">
										<strong><?php echo ($dk["tupian"]); ?></strong>
									</td>
									<td style="font-size:12px;color:black;">
										<strong>
											<?php echo (date('Y-m-d h:i',$dk["dkshijian"])); ?>
										</strong>
									</td>
									<td style="font-size:12px;color:black;">
										<strong><?php echo ($dk["dkfangyuan"]); ?></strong>
									</td>
									<td style="font-size:12px;color:black;">
										<strong>
											<?php echo ($dk["ygmingcheng"]); ?>
										</strong>
									</td>
									<td style="font-size:12px;color:black;">
										<strong><?php echo ($dk["bmming"]); ?></strong>
									</td>
									<td style="font-size:12px;color:black;">
										<strong><?php echo ($dk["kehupj"]); ?></strong>
									</td>
									<td class="f-14" style="font-size:12px;color:black;display:none">
										<strong>
											<a title="编辑" href="javascript:;" onclick="admin_xiaoqu_edit('编辑小区','<?php echo U('Ziyuan/editXiaoqu',array('id'=>$xq['id']));?>','800')" style="text-decoration:none" >
												<i class="Hui-iconfont">&#xe6df;</i>
											</a>
											<a title="删除" href="javascript:;" onclick="admin_xiaoqu_del(this,'<?php echo ($xq["id"]); ?>')" class="ml-5" style="text-decoration:none">
												<i class="Hui-iconfont">&#xe6e2;</i>
											</a>
										</strong>
									</td>
								</tr><?php endforeach; endif; ?>
						</tbody>
					</table>
				</div>
			</div>
			<div class="tabCon">
				<div>&nbsp;</div>
				<div class="formControls col-xs-1 col-sm-1 col-md-1"></div>
				<div class="formControls col-xs-10 col-sm-10 col-md-10">
					<table class="table table-border table-bordered table-hover table-bg">
						<thead>
							<tr>
								<th scope="col" colspan="12" style="color:black;font-size:16px">
									<strong>提醒记录</strong>
								</th>
							</tr>
							<tr class="text-c">
								<th width="80" style="color:black;font-size:15px">
									<strong>提醒时间</strong>
								</th>
								<th width="80" style="color:black;font-size:15px">
									<strong>提醒人</strong>
								</th>
								<th width="80" style="color:black;font-size:15px">
									<strong>所在部门</strong>
								</th>
								<th width="80" style="color:black;font-size:15px">
									<strong>提醒内容</strong>
								</th>
								<th width="80" style="color:black;font-size:15px;display:none">
									<strong>操作</strong>
								</th>
							</tr>
						</thead>
						<tbody>
							<?php if(is_array($kytixing)): foreach($kytixing as $key=>$tx): ?><tr class="text-c">
									<td style="font-size:12px;color:black;">
										<strong>
											<?php echo (date('Y-m-d h:i',$tx["txshijian"])); ?>
										</strong>
									</td>
									<td style="font-size:12px;color:black;">
										<strong>
											<?php echo ($tx["ygmingcheng"]); ?>
										</strong>
									</td>
									<td style="font-size:12px;color:black;">
										<strong><?php echo ($tx["bmming"]); ?></strong>
									</td>
									<td style="font-size:12px;color:black;">
										<strong><?php echo ($tx["txneirong"]); ?></strong>
									</td>
									<td class="f-14" style="font-size:12px;color:black;display:none">
										<strong>
											<a title="编辑" href="javascript:;" onclick="admin_xiaoqu_edit('编辑小区','<?php echo U('Ziyuan/editXiaoqu',array('id'=>$xq['id']));?>','800')" style="text-decoration:none" >
												<i class="Hui-iconfont">&#xe6df;</i>
											</a>
											<a title="删除" href="javascript:;" onclick="admin_xiaoqu_del(this,'<?php echo ($xq["id"]); ?>')" class="ml-5" style="text-decoration:none">
												<i class="Hui-iconfont">&#xe6e2;</i>
											</a>
										</strong>
									</td>
								</tr><?php endforeach; endif; ?>
						</tbody>
					</table>
				</div>
			</div>
			<div class="tabCon" style="display:none">
				<div>&nbsp;</div>
				<div class="formControls col-xs-1 col-sm-1 col-md-1"></div>
				<div class="formControls col-xs-10 col-sm-10 col-md-10">
					<table class="table table-border table-bordered table-hover table-bg">
						<thead>
							<tr>
								<th scope="col" colspan="12" style="color:black;font-size:16px">
									<strong>客源操作日志<strong>
								</th>
							</tr>
							<tr class="text-c">
								<th width="80" style="color:black;font-size:15px">
									<strong>时间<strong>
								</th>
								<th width="80" style="color:black;font-size:15px">
									<strong>类型<strong>
								</th>
								<th width="80" style="color:black;font-size:15px">
									<strong>操作人<strong>
								</th>
								<th width="80" style="color:black;font-size:15px">
									<strong>所在部门<strong>
								</th>
								<th width="80" style="color:black;font-size:15px">
									<strong>操作内容<strong>
								</th>
							</tr>
						</thead>
						<tbody>
							<?php if(is_array($xiaoqu)): foreach($xiaoqu as $key=>$xq): ?><tr class="text-c">
									<td style="font-size:12px;color:black;"></td>
									<td style="font-size:12px;color:black;"></td>
									<td style="font-size:12px;color:black;"></td>
									<td style="font-size:12px;color:black;"></td>
									<td style="font-size:12px;color:black;"></td>
								</tr><?php endforeach; endif; ?>
						</tbody>
					</table>
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
		jQuery.Huitab =function(tabBar,tabCon,class_name,tabEvent,i){
			var $tab_menu=$(tabBar);
			//初始化操作
			$tab_menu.removeClass(class_name);
			$(tabBar).eq(i).addClass(class_name);
			$(tabCon).hide();
			$(tabCon).eq(i).show();
			$tab_menu.bind(tabEvent,function(){
				$tab_menu.removeClass(class_name);
				$(this).addClass(class_name);
				var index=$tab_menu.index(this);
				$(tabCon).hide();
				$(tabCon).eq(index).show()
			})
		}
		$(function(){
			$.Huitab("#tab_demo .tabBar span","#tab_demo .tabCon","current","click","0")
		});
	</script>
	<script type="text/javascript">
		function vr_url(title,url,w,h){
			layer_show(title,url,w,h);
		}
		function edit(title,url,w,h){
			layer_show(title,url,w,h);
		}
		function fengpan(title,url,w,h){
			layer_show(title,url,w,h);
		}
		function kaipan(title,url,w,h){
			layer_show(title,url,w,h);
		}
		function genjin(title,url,w,h){
			layer_show(title,url,w,h);
		}
		function tixing(title,url,w,h){
			layer_show(title,url,w,h);
		}
		function daikan(title,url,w,h){
			layer_show(title,url,w,h);
		}
		function jubao(title,url,w,h){
			layer_show(title,url,w,h);
		}
		function bgwhr(title,url,w,h){
			layer_show(title,url,w,h);
		}
		function tonghua(title,url,w,h){
			layer_show(title,url,w,h);
		}
		function xzdianhua(title,url,w,h){
			layer_show(title,url,w,h);
		}
	</script>
	<script language="JavaScript" type="text/JavaScript">
		<!--
		function showdiv(targetid1,targetid2,objN){
			var target1=document.getElementById(targetid1);
			var target2=document.getElementById(targetid2);
			var clicktext=document.getElementById(objN)
			if (target1.style.display=="block"){
				target1.style.display="none";
				target2.style.display="block";
				clicktext.innerText="关闭";
			} else {
				target1.style.display="block";
				target2.style.display="none";
				clicktext.innerText='显示';
			}
		}
		-->
	</script>
	<script type="text/javascript">
		var isFrist = false;
		$("#fy_img").click(function(){
			if(!isFrist){
				var fy_id=<?php echo ($fangyuan["id"]); ?>;
				$.ajax({
					url:'<?php echo U('fangyuan/get_fy_img');?>',
					Type:"POST",
					data:"fy_id="+fy_id,
					dataType:"json",
					success:function(data){
						var city = data.city;
						for(var i in city){
							var img=$("<img/>");
							$(img).attr('src',city[i]['image']);
							$(img).attr('class','fy_img');
							$("#fy_img_div").append(img);
						}
					}
				});
				isFrist = true;
			}
		});
	</script>
	<script type="text/javascript">
		function sike(obj,id){
			layer.confirm('您确定要设置此客源为私客吗？',function(index){
				$.ajax({
					type: 'POST',
					url: '<?php echo U('Kyneirong/sikeHandle');?>',
					data:'id='+id,
					dataType: 'json',
					success: function(data){
						$(obj).parents(".div2").remove();
						layer.msg('已修改!',{icon:1,time:1000});
					},
					error:function(data) {
						console.log(data.msg);
					},
				});
			});
		}
		function gongke(obj,id){
			layer.confirm('您确定要设置此客源为公客吗？',function(index){
				$.ajax({
					type: 'POST',
					url: '<?php echo U('Kyneirong/gongkeHandle');?>',
					data:'id='+id,
					dataType: 'json',
					success: function(data){
						$(obj).parents(".div2").remove();
						layer.msg('已修改!',{icon:1,time:1000});
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