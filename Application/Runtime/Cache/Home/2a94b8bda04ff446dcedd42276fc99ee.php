<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
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
  <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
  <title>开单大师（专业的房产ERP管理系统）</title>
  <link rel="Bookmark" href="/Public/favicon.ico" >
  <link rel="stylesheet" href="/Public/lib/layui/css/layui.css"  media="all">
  <link rel="stylesheet" type="text/css" href="/Public/lib/ceshi/bootstrap-3.3.7/dist/css/bootstrap.min.css" />
  <link rel="stylesheet" type="text/css" href="/Public/lib/ceshi/css/css.css" />
  <style type="text/css">
    a:link{
      text-decoration:none;
    }
    a:visited{
      color:blue;
      text-decoration:none;
    }
    a:hover{
      color:red;
      text-decoration:none;
    }
    a:active{
      color:orange;
      text-decoration:none;
    }
  </style>
</head>
<body>
  <header>
    <nav class="navbar navbar-fixed-top navbar-primary g-nav-bg" role="navigation" style="height: 53px;">
    <div class="container">
      <div class="navbar-header" style="padding-right:15px;background-color:#393D49;">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
          <span class="sr-only">See You</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
         <a class="navbar-brand layui-inline logo layui-small-hidden" href="/" style="padding-left:15px;">
          <div style="width: 50px;"></div>
         </a>

      </div>
      <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1" style="background-color:#393D49;border-color:#009688!important;">
        <ul class="nav navbar-nav" style="padding-left:15px;">
          
          <li class="dropdown">
            <a href="javarcript:void(0);" class="dropdown-toggle" data-toggle="dropdown">
              <i class="glyphicon glyphicon-th"></i>&nbsp;房屋管理<span class="caret"></span>
            </a>

            <div class="dropdown-menu1">
                <i class="glyphicon glyphicon-triangle-top" style="left: 250px;font-size:20px;color: #fff; "></i>
                <div class="s_nav">
                    <div style="width: 100%;border-left: 5px solid #009688;padding: 5px;">
                        <div style="width: 100% ; padding: 5px;display: block;margin-bottom: 10px;">
                              <div style="float: left; width: 100px; padding-left: 40px;"><span>房源</span></div>
                              <div style="float: left;width: 350px;">
                                  <ul>
                                      <li style="float: left;cursor:pointer" class="tab" data-href="<?php echo U('Fangyuan/Esfy');?>" data-title="二手房源" href="javascript:;">|&nbsp;房屋信息管理&nbsp;|</li>
                                      <li style="float: left;cursor:pointer" class="tab" data-href="<?php echo U('Fangyuan/Esfy');?>" data-title="二手房源" href="javascript:;">|&nbsp;房屋信息审核&nbsp;|</li>
                                      <!--<li style="float: left;cursor:pointer" class="tab1">&nbsp;一手房源&nbsp;|</li>
                                      <li style="float: left;cursor:pointer" class="tab1">&nbsp;地图找房&nbsp;|</li>
                                      <li style="float: left;cursor:pointer" class="tab1">&nbsp;资料盘管理&nbsp;|</li><br />
                                      <li style="float: left;cursor:pointer" class="tab" data-href="<?php echo U('Fangyuan/yaoshi');?>" data-title="钥匙管理" href="javascript:;">|&nbsp;钥匙管理&nbsp;|</li><br/>
                                      <li style="float: left;cursor:pointer" class="tab" data-href="<?php echo U('Fygenjin/all');?>" data-title="房源跟进" href="javascript:;">|&nbsp;房源跟进&nbsp;|</li>-->
                                  </ul>
                              </div>
                              <div style="clear: both;"></div>     
                        </div>
                        <!--<div style="width: 100% ; padding: 5px;display: block;margin-bottom: 10px;">
                              <div style="float: left; width: 100px; padding-left: 40px;"><span>客源</span></div>
                              <div style="float: left;width: 350px;">
                                  <ul>
                                      <li style="float: left;cursor:pointer" class="tab" data-href="<?php echo U('Keyuan1/index');?>" data-title="买卖客源" href="javascript:;">|&nbsp;买卖客源&nbsp;|</li>
                                      <li style="float: left;cursor:pointer" class="tab" data-href="<?php echo U('Keyuan1/index2');?>" data-title="租赁客源" href="javascript:;">&nbsp;租赁客源&nbsp;|</li><br />
                                      &lt;!&ndash;<li style="float: left;cursor:pointer" class="tab1">|&nbsp;定金管理&nbsp;|</li><br />
                                      <li style="float: left;cursor:pointer" class="tab" data-href="<?php echo U('Keyuan1/kygenjin');?>" data-title="客源跟进" href="javascript:;">|&nbsp;客源跟进&nbsp;|</li>
                                      <li style="float: left;cursor:pointer" class="tab" data-href="<?php echo U('Keyuan1/kydaikan');?>" data-title="客源带看" href="javascript:;">&nbsp;客源带看&nbsp;|</li>&ndash;&gt;
                                  </ul>
                              </div> 
                              <div style="clear: both;"></div>     
                        </div>-->
                       <!-- <div style="width: 100% ; padding: 5px;display: block;margin-bottom: 10px;">
                              <div style="float: left; width: 100px; padding-left: 40px;"><span>成交</span></div>
                              <div style="float: left;width: 350px;">
                                  <ul>
                                      <li style="float: left;cursor:pointer" class="tab1">|&nbsp;买卖成交&nbsp;|</li>
                                      <li style="float: left;cursor:pointer" class="tab1">&nbsp;租赁成交&nbsp;|</li>
                                      <li style="float: left;cursor:pointer" class="tab1">&nbsp;一手成交&nbsp;|</li>
                                      <li style="float: left;cursor:pointer" class="tab1">&nbsp;分成明细查询&nbsp;|</li><br/>
                                      <li style="float: left;cursor:pointer" class="tab1">|&nbsp;金融分成查询&nbsp;|</li>
                                      <li style="float: left;cursor:pointer" class="tab1">&nbsp;过户进度查看&nbsp;|</li>
                                      <li style="float: left;cursor:pointer" class="tab1">&nbsp;佣金记录查询&nbsp;|</li><br />
                                      
                                  </ul>
                              </div> 
                              <div style="clear: both;"></div>     
                        </div>  
                        <div style="width: 100% ; padding: 5px;display: block;margin-bottom: 10px;">
                              <div style="float: left; width: 100px; padding-left: 40px;"><span>审批</span></div>
                              <div style="float: left;width: 350px;">
                                  <ul>
                                      <li style="float: left;cursor:pointer" class="tab1">|&nbsp;业务审批&nbsp;|</li>
                                      <li style="float: left;cursor:pointer" class="tab1">&nbsp;日报审批&nbsp;|</li>
                                  </ul>
                              </div> 
                              <div style="clear: both;"></div>     
                        </div> 
                        <div style="width: 100% ; padding: 5px;display: block;margin-bottom: 10px;">
                              <div style="float: left; width: 100px; padding-left: 40px;"><span>日志</span></div>
                              <div style="float: left;width: 350px;">
                                  <ul>
                                      <li style="float: left;cursor:pointer" class="tab1">|&nbsp;房源日志&nbsp;|</li>
                                      <li style="float: left;cursor:pointer" class="tab1">&nbsp;客源日志&nbsp;|</li>
                                      <li style="float: left;cursor:pointer" class="tab1">&nbsp;成交日志&nbsp;|</li>
                                      <li style="float: left;cursor:pointer" class="tab1">&nbsp;电话查看日志&nbsp;|</li>
                                  </ul>
                              </div> 
                              <div style="clear: both;"></div>     
                        </div>
                        <div style="width: 100% ; padding: 5px;display: block;margin-bottom: 10px;">
                              <div style="float: left; width: 100px; padding-left: 40px;"><span>外网后台</span></div>
                              <div style="float: left;width: 350px;">
                                  <ul>
                                      <li style="float: left;cursor:pointer" class="tab1">|&nbsp;基础配置&nbsp;|</li>
                                      <li style="float: left;cursor:pointer" class="tab1">&nbsp;广告位管理&nbsp;|</li>
                                      <li style="float: left;cursor:pointer" class="tab1">&nbsp;招聘信息&nbsp;|</li>
                                      <li style="float: left;cursor:pointer" class="tab1">&nbsp;友情链接&nbsp;|</li><br />
                                      <li style="float: left;cursor:pointer" class="tab1">|&nbsp;房产资讯&nbsp;|</li>
                                      <li style="float: left;cursor:pointer" class="tab1">&nbsp;业主自助&nbsp;|</li>
                                      <li style="float: left;cursor:pointer" class="tab1">&nbsp;委托信息&nbsp;|</li>
                                      <li style="float: left;cursor:pointer" class="tab1">&nbsp;访客档案&nbsp;|</li><br />
                                      <li style="float: left;cursor:pointer" class="tab1">|&nbsp;访客浏览记录&nbsp;|</li>
                                      <li style="float: left;cursor:pointer" class="tab1">&nbsp;带看评价&nbsp;|</li>
                                      <li style="float: left;cursor:pointer" class="tab1">&nbsp;网站优化&nbsp;|</li>
                                  </ul>
                              </div> 
                              <div style="clear: both;"></div>     
                        </div>
                      <div style="clear: both;"></div>-->
                    </div>
                </div>
            </div>
          </li>

          <li class="dropdown">
            <a href="javarcript:void(0);" class="dropdown-toggle" data-toggle="dropdown">
              <i class="glyphicon glyphicon-usd"></i>&nbsp;订单管理<span class="caret"></span>
            </a>

            <div class="dropdown-menu1">
                <i class="glyphicon glyphicon-triangle-top" style="left: 250px;font-size:20px;color: #fff; "></i>
                <div class="s_nav">
                    <div style="width: 100%;border-left: 5px solid #009688;padding: 5px;">


                      <div style="clear: both;"></div>
                    </div>
                </div>
            </div>
          </li>
          <li class="dropdown">
            <a href="javarcript:void(0);" class="dropdown-toggle" data-toggle="dropdown">
              <i class="glyphicon glyphicon-stats"></i>&nbsp;数据统计<span class="caret"></span>
            </a>

            <div class="dropdown-menu1">
                <i class="glyphicon glyphicon-triangle-top" style="left: 250px;font-size:20px;color: #fff; "></i>
                <div class="s_nav">
                    <div style="width: 100%;border-left: 5px solid #009688;padding: 5px;">

                      <div style="clear: both;"></div>
                    </div>
                </div>
            </div>
          </li>

        <li class="dropdown">
                <a href="javarcript:void(0);" class="dropdown-toggle acc" data-toggle="dropdown">
                    <i class="glyphicon glyphicon-cog"></i>&nbsp;会员中心<span class="caret"></span>
                </a>

                <div class="dropdown-menu1">
                    <i class="glyphicon glyphicon-triangle-top" style="left: 250px;font-size:20px;color: #fff; "></i>
                    <div class="s_nav">
                        <div style="width: 100%;border-left: 5px solid #009688;padding: 5px;">
                            <div style="width: 100% ; padding: 5px;display: block;margin-bottom: 10px;">
                                <div style="float: left;width: 350px;">
                                    <ul>
                                        <li style="float: left;cursor:pointer" class="tab" data-href="<?php echo U('Rbac/bumen');?>" data-title="会员管理" href="javascript:;">|&nbsp;会员管理&nbsp;|</li>
                                    </ul>
                                </div>
                                <div style="clear: both;"></div>
                            </div>


                            <div style="clear: both;"></div>
                        </div>
                    </div>
                </div>
            </li>
        <li class="dropdown">
            <a href="javarcript:void(0);" class="dropdown-toggle acc" data-toggle="dropdown">
              <i class="glyphicon glyphicon-cog"></i>&nbsp;管理后台<span class="caret"></span>
            </a>

            <div class="dropdown-menu1">
                <i class="glyphicon glyphicon-triangle-top" style="left: 250px;font-size:20px;color: #fff; "></i>
                <div class="s_nav">
                    <div style="width: 100%;border-left: 5px solid #009688;padding: 5px;">
                        <div style="width: 100% ; padding: 5px;display: block;margin-bottom: 10px;">
                              <div style="float: left; width: 100px; padding-left: 50px;"><span>账户</span></div>
                              <div style="float: left;width: 350px;">
                                  <ul>
                                      <!--<li style="float: left;cursor:pointer" class="tab" data-href="<?php echo U('Rbac/bumen');?>" data-title="部门管理" href="javascript:;">|&nbsp;部门管理&nbsp;|</li>-->
                                      <li style="float: left;cursor:pointer" class="tab" data-href="<?php echo U('Rbac/role');?>" data-title="角色管理" href="javascript:;">&nbsp;角色管理&nbsp;|</li>
                                      <li style="float: left;cursor:pointer" class="tab" data-href="<?php echo U('Rbac/index');?>" data-title="用户管理" href="javascript:;">&nbsp;用户管理&nbsp;|</li>
                                  </ul>
                              </div> 
                              <div style="clear: both;"></div>     
                        </div> 
                        <div style="width: 100% ; padding: 5px;display: block;margin-bottom: 10px;">
                              <div style="float: left; width: 100px; padding-left: 50px;"><span>资源</span></div>
                              <div style="float: left;width: 350px;">
                                  <ul>
                                      <li style="float: left;cursor:pointer" class="tab" data-href="<?php echo U('Ziyuan/xingzhengqu');?>" data-title="行政区管理" href="javascript:;">|&nbsp;行政区管理&nbsp;|</li>
                                      <li style="float: left;cursor:pointer" class="tab" data-href="<?php echo U('Ziyuan/pianqu');?>" data-title="片区管理" href="javascript:;">&nbsp;片区管理&nbsp;|</li>
                                      <li style="float: left;cursor:pointer" class="tab" data-href="<?php echo U('Ziyuan/xiaoqu');?>" data-title="小区管理" href="javascript:;">&nbsp;小区管理&nbsp;|</li>
                                      <!--<li style="float: left;cursor:pointer" class="tab" data-href="<?php echo U('Ziyuan/xuequ');?>" data-title="学区管理" href="javascript:;">&nbsp;学区管理&nbsp;|</li><br />-->

                                  </ul>
                              </div> 
                              <div style="clear: both;"></div>     
                        </div> 

                      <div style="clear: both;"></div>
                    </div>
                </div>
            </div>
          </li>

        </ul>
        <ul class="nav navbar-nav navbar-right layui-small-hidden">
          <li class="dropdown">
            <a href="javarcript:void(0);" class="dropdown-toggle" data-toggle="dropdown" style="padding-top:16px;">
              <span class="">当前账号：<?php echo ($user["ygmingcheng"]); ?></span>
            </a>
            <ul class="dropdown-menu">
                <li><a href="javascript:;" onClick="updatepass()" class=""><i class="glyphicon glyphicon-pencil"></i>&nbsp;修改密码</a></li>
                <li><a href="<?php echo U('Login/Logout');?>" class=""><i class="glyphicon glyphicon-off"></i>&nbsp;退出登录</a></li>
            </ul>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  </header>
  <section class="Hui-article-box">
      <div id="Hui-tabNav" class="Hui-tabNav hidden-xs">
        <div class="Hui-tabNav-wp">
          <ul id="min_title_list" class="acrossTab cl">
            <li class="active">
              <span title="我的桌面" data-href="welcome.html">我的桌面</span>
              <em></em>
            </li>
          </ul>
        </div>
        <div class="Hui-tabNav-more btn-group">
          <a id="js-tabNav-prev" class="btn radius btn-default size-S" href="javascript:;">
            <i class="Hui-iconfont">&#xe6d4;</i>
          </a>
          <a id="js-tabNav-next" class="btn radius btn-default size-S" href="javascript:;">
            <i class="Hui-iconfont">&#xe6d7;</i>
          </a>
        </div>
      </div>
      <div id="iframe_box" class="Hui-article">
        <div class="show_iframe">
          <div style="display:none" class="loading"></div>
          <iframe scrolling="yes" frameborder="0" src="<?php echo U('Index/welcome');?>"></iframe>
        </div>
      </div>
    </section>
    <div class="contextMenu" id="Huiadminmenu">
      <ul>
        <li id="closethis">关闭当前 </li>
        <li id="closeall">关闭全部 </li>
      </ul>
    </div>
        <script type="text/javascript" src="/Public/lib/jquery/1.9.1/jquery.min.js"></script>
        <script type="text/javascript" src="/Public/lib/layer/2.4/layer.js"></script>
        <script type="text/javascript" src="/Public/lib/layui/layui.js" charset="utf-8"></script>
        <script type="text/javascript" src="/Public/static/h-ui/js/H-ui.min.js"></script>
        <script type="text/javascript" src="/Public/lib/ceshi/bootstrap-3.3.7/dist/js/bootstrap.min.js"></script>
        <script type="text/javascript" src="/Public/lib/jquery.contextmenu/jquery.contextmenu.r2.js">
        </script>
        <script>
          $(document).ready(function(){
              $(document).off('click.bs.dropdown.data-api');
          });
          $(document).ready(function(){
              dropdownOpen();//调用
          });
          /**
           * 鼠标划过就展开子菜单，免得需要点击才能展开
           */
          function dropdownOpen() {
              var $dropdownLi = $('li.dropdown');
              $dropdownLi.mouseover(function() {
                  $(this).addClass('open');
              }).mouseout(function() {
                  $(this).removeClass('open');
              });
          }
        </script>
        <script type="text/javascript">
          $('.tab1').on('click', function(){
             layer.alert('<div style="text-align:center">更多功能请到<a href="http://www.kaidandashi.com" target="_blank" title="" style="text-decoration: none;">官网</a>下载正式版！</div>');
          });
        </script>
        <script type="text/javascript">
          /*异步修改密码*/
          function updatepass(){
          layer.prompt({title: '修改密码',formType: 1}, function(text,index){
                $.ajax({
                type: 'POST',
                url: '<?php echo U('Index/updatepass');?>',
                data: "passwd=" + text,
                dataType: 'json',
                success: function(data){            
                  layer.msg('修改成功!',{icon:1,time:1000});
                },
                error:function(data) {
                  console.log(data.msg);
                },
              }); 
            });
          }
        </script>
        <script>
          $(document).ready(function(){
              $(document).bind("contextmenu",function(e){
                    return false;
              });
          });
          $(function(){
            if($.cookie("lockscreen")=="1"){
              likaiyihui();
            }
          });
          function likaiyihui(){
            $.cookie("lockscreen", "1",{expires:1});
            layer.prompt({
                title: '输入密码',
                formType: 1,
                cancel: false,
                shade: 0.8,
                btn: ['解锁'],  //['确认','取消']
              },
              function(val, index){
                  $.ajax({
                  type: 'POST',
                  url: '<?php echo U('Index/validatepass');?>',
                  data: {passwd: val},
                  dataType: 'json',
                  success: function(data){            
                    //alert(data.r);
                    if(data.r>0){
                      $.cookie("lockscreen",null);
                      layer.msg('欢迎回来!');
                    }else{
                      layer.tips('再试试吧!', '.layui-layer-input', {
                          tips: [1, '#0FA6D8'] //还可配置颜色
                      });
                    }
                  },
                  error:function(data) {
                    console.log(data.msg);
                  },
                });
            });
          }
        </script>
        <script type="text/javascript">
            $(".navbar-nav").on("click",".tab",function(){
                Hui_admin_tab(this);
            });
            var num=0,oUl=$("#min_title_list"),hide_nav=$("#Hui-tabNav");
            /*获取顶部选项卡总长度*/
            function tabNavallwidth(){
                var taballwidth=0,
                $tabNav = hide_nav.find(".acrossTab"),
                $tabNavWp = hide_nav.find(".Hui-tabNav-wp"),
                $tabNavitem = hide_nav.find(".acrossTab li"),
                $tabNavmore =hide_nav.find(".Hui-tabNav-more");
                if (!$tabNav[0]){return}
                $tabNavitem.each(function(index, element) {
                    taballwidth += Number(parseFloat($(this).width()+60))
                });
                $tabNav.width(taballwidth+25);
                var w = $tabNavWp.width();
                if(taballwidth+25>w){
                    $tabNavmore.show()
                } else{
                    $tabNavmore.hide();
                    $tabNav.css({left:0})
                }
            }
            /*菜单导航*/
            function Hui_admin_tab(obj){
                var bStop = false,
                bStopIndex = 0,
                href = $(obj).attr('data-href'),
                title = $(obj).attr("data-title"),
                topWindow = $(window.parent.document),
                show_navLi = topWindow.find("#min_title_list li"),
                iframe_box = topWindow.find("#iframe_box");
                //console.log(topWindow);
                if(!href||href==""){
                    alert("data-href不存在，v2.5版本之前用_href属性，升级后请改为data-href属性");
                    return false;
                }if(!title){
                    alert("v2.5版本之后使用data-title属性");
                    return false;
                }
                if(title==""){
                    alert("data-title属性不能为空");
                    return false;
                }
                show_navLi.each(function() {
                    if($(this).find('span').attr("data-href")==href){
                        bStop=true;
                        bStopIndex=show_navLi.index($(this));
                        return false;
                    }
                });
                if(!bStop){
                    creatIframe(href,title);
                    min_titleList();
                }
                else{
                    show_navLi.removeClass("active").eq(bStopIndex).addClass("active");     
                    iframe_box.find(".show_iframe").hide().eq(bStopIndex).show().find("iframe").attr("src",href);
                }
            }
            /*最新tab标题栏列表*/
            function min_titleList(){
              var topWindow = $(window.parent.document),
                show_nav = topWindow.find("#min_title_list"),
                aLi = show_nav.find("li");
            }
            /*创建iframe*/
            function creatIframe(href,titleName){
              var topWindow=$(window.top.document),
                show_nav=topWindow.find('#min_title_list'),
                iframe_box=topWindow.find('#iframe_box'),
                iframeBox=iframe_box.find('.show_iframe'),
                $tabNav = topWindow.find(".acrossTab"),
                $tabNavWp = topWindow.find(".Hui-tabNav-wp"),
                $tabNavmore =topWindow.find(".Hui-tabNav-more");
              var taballwidth=0;
              show_nav.find('li').removeClass("active");  
              show_nav.append('<li class="active"><span data-href="'+href+'">'+titleName+'</span><i></i><em></em></li>');
              if('function'==typeof $('#min_title_list li').contextMenu){
                $("#min_title_list li").contextMenu('Huiadminmenu', {
                  bindings: {
                    'closethis': function(t) {
                      var $t = $(t);        
                      if($t.find("i")){
                        $t.find("i").trigger("click");
                      }
                    },
                    'closeall': function(t) {
                      $("#min_title_list li i").trigger("click");
                    },
                  }
                });
              }else {} 
              var $tabNavitem = topWindow.find(".acrossTab li");
              if (!$tabNav[0]){return}
              $tabNavitem.each(function(index, element) {
                    taballwidth+=Number(parseFloat($(this).width()+60))
                });
              $tabNav.width(taballwidth+25);
              var w = $tabNavWp.width();
              if(taballwidth+25>w){
                $tabNavmore.show()}
              else{
                $tabNavmore.hide();
                $tabNav.css({left:0})
              } 
              iframeBox.hide();
              iframe_box.append('<div class="show_iframe"><div class="loading"></div><iframe frameborder="0" src='+href+'></iframe></div>');
              var showBox=iframe_box.find('.show_iframe:visible');
              showBox.find('iframe').load(function(){
                showBox.find('.loading').hide();
              });
            }
            /*关闭iframe*/
            function removeIframe(){
              var topWindow = $(window.parent.document),
                iframe = topWindow.find('#iframe_box .show_iframe'),
                tab = topWindow.find(".acrossTab li"),
                showTab = topWindow.find(".acrossTab li.active"),
                showBox=topWindow.find('.show_iframe:visible'),
                i = showTab.index();
              tab.eq(i-1).addClass("active");
              tab.eq(i).remove();
              iframe.eq(i-1).show();  
              iframe.eq(i).remove();
            }
            /*关闭所有iframe*/
            function removeIframeAll(){
              var topWindow = $(window.parent.document),
                iframe = topWindow.find('#iframe_box .show_iframe'),
                tab = topWindow.find(".acrossTab li");
              for(var i=0;i<tab.length;i++){
                if(tab.eq(i).find("i").length>0){
                  tab.eq(i).remove();
                  iframe.eq(i).remove();
                }
              }
            }
            /*弹出层*/
            /*
              参数解释：
              title 标题
              url   请求的url
              id    需要操作的数据id
              w   弹出层宽度（缺省调默认值）
              h   弹出层高度（缺省调默认值）
            */
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
                maxmin: true,
                shade:0.4,
                title: title,
                content: url
              });
            }
            /*关闭弹出框口*/
            function layer_close(){
              var index = parent.layer.getFrameIndex(window.name);
              parent.layer.close(index);
            }
            $(function(){
              $(document).on("click","#min_title_list li",function(){
                var bStopIndex=$(this).index();
                var iframe_box=$("#iframe_box");
                $("#min_title_list li").removeClass("active").eq(bStopIndex).addClass("active");
                iframe_box.find(".show_iframe").hide().eq(bStopIndex).show();
              });
              $(document).on("click","#min_title_list li i",function(){
                var aCloseIndex=$(this).parents("li").index();
                $(this).parent().remove();
                $('#iframe_box').find('.show_iframe').eq(aCloseIndex).remove(); 
                num==0?num=0:num--;
                tabNavallwidth();
              });
              $(document).on("dblclick","#min_title_list li",function(){
                var aCloseIndex=$(this).index();
                var iframe_box=$("#iframe_box");
                if(aCloseIndex>0){
                  $(this).remove();
                  $('#iframe_box').find('.show_iframe').eq(aCloseIndex).remove(); 
                  num==0?num=0:num--;
                  $("#min_title_list li").removeClass("active").eq(aCloseIndex-1).addClass("active");
                  iframe_box.find(".show_iframe").hide().eq(aCloseIndex-1).show();
                  tabNavallwidth();
                }else{
                  return false;
                }
              });
              tabNavallwidth();
              $('#js-tabNav-next').click(function(){
                num==oUl.find('li').length-1?num=oUl.find('li').length-1:num++;
                toNavPos();
              });
              $('#js-tabNav-prev').click(function(){
                num==0?num=0:num--;
                toNavPos();
              });
              function toNavPos(){
                oUl.stop().animate({'left':-num*100},100);
              }
          });
        </script>
        <script language="javascript" type="text/javascript" src="//js.users.51.la/19223564.js"></script>
        <noscript>
          <a href="//www.51.la/?19223564" target="_blank">
            <img alt="&#x6211;&#x8981;&#x5566;&#x514D;&#x8D39;&#x7EDF;&#x8BA1;" src="//img.users.51.la/19223564.asp" style="border:none"/>
          </a>
        </noscript>
    </body>
</html>