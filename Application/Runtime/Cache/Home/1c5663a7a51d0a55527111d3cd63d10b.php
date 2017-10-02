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
        <title>Document</title>
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
            #greetings2{
                position: absolute;
                height: auto;
                border-left: 1px solid rgba(0, 0, 0, 0.11);
                border-right: 1px solid rgba(0, 0, 0, 0.11);
                left: 0px;
                z-index:5555; 
                display: none;
            }
            #greetings2 ul{
                list-style: none;
                box-shadow: 1px 1px 5px rgba(0, 0, 0, 0.44);
                -webkit-margin-before: 0em;
                -webkit-margin-after: 0em;
                -webkit-margin-start: 0px;
                -webkit-margin-end: 0px;
                -webkit-padding-start: 0px;
            }
            #greetings2 li{
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
            #greetings2 li:hover{
                background-color: rgba(175, 42, 0, 0.52);
                color: white;
            }
        </style>
        <link rel="stylesheet" type="text/css" href="/kaidandashi/Public/lib/layui/css/layui.css">
    </head>
    <body>
        <div style="position:fixed;top:0;width: 100%; border-top-style: solid;border-top-width: 2px;border-top-color: #009688;"></div>
        <form class="layui-form" action="/kaidandashi/index.php/home/keyuan1/addKeyuanHandle" method="get">
            <div class="layui-form-item">
                &nbsp;
            </div>
            <?php if(($keyuanshu > 14) and ($keyuan["zhuangtai"] == 0)): ?><div align="center" class="layui-form-item" style="color:red;font-size:18px">
                    <strong>您的私客已达上限！无法再添加私客！</strong>
                </div><?php endif; ?>
            <div class="layui-form-item">
                <div class="layui-inline">
                    <label class="layui-form-label" style="color:#f00;">
                        客户姓名
                    </label>
                    <div class="layui-input-inline" style="width:150px;">
                        <input type="text" name="khxingming" lay-verify="required" autocomplete="off" class="layui-input">
                        <input type="hidden" name="leixing" lay-verify="" value="1">
                    </div>
                    <div class="layui-input-inline" style="width:120px;">
                        <select name="kehulx" lay-filter="aihao" lay-verify="required">
                            <?php if(is_array($kehulx)): foreach($kehulx as $key=>$pz): ?><option value="<?php echo ($pz["lxid"]); ?>"><?php echo ($pz["lxming"]); ?></option><?php endforeach; endif; ?>
                        </select>
                    </div>
                </div>
                <div class="layui-inline">
                    <label class="layui-form-label" style="color:#f00;">
                        手机
                    </label>
                    <div class="layui-input-inline">
                        <input type="tel" name="dianhua" lay-verify="required|phone" autocomplete="off" class="layui-input">
                    </div>
                    <?php if($keyuanshu < 15): ?><input type="checkbox" name="zhuangtai" title="私有" value="1" checked><?php endif; ?>
                    <?php if($keyuanshu > 14): ?><input type="checkbox" name="zhuangtai" title="私有" value="1" disabled="false"><?php endif; ?>
                </div>
                <div class="layui-inline" style="display:none">
                    <label class="layui-form-label">
                        买卖租赁
                    </label>
                    <div class="layui-input-inline" style="width:150px;">
                        <input type="tel" name="mmzl" lay-verify="required" autocomplete="off" class="layui-input" value="1">
                    </div>
                </div>
            </div>
            <div class="layui-form-item">
                <div class="layui-inline">
                    <label class="layui-form-label" style="color:#f00;">
                        需求户型
                    </label>
                    <div class="layui-input-inline" style="width: 100px;">
                        <input type="text" name="xqhuxing1" placeholder="" autocomplete="off" class="layui-input" lay-verify="shuzi" id="xqhuxing1">
                    </div>
                    <div class="layui-form-mid layui-word-aux">室</div>
                    <div class="layui-form-mid">-</div>
                    <div class="layui-input-inline" style="width: 100px;">
                        <input type="text" name="xqhuxing2" placeholder="" autocomplete="off" class="layui-input" lay-verify="shuzi" id="xqhuxing2">
                    </div>
                    <div class="layui-form-mid layui-word-aux">室</div>
                </div>
                <div class="layui-inline">
                    <label class="layui-form-label" style="color:#f00;">
                        价格范围
                    </label>
                    <div class="layui-input-inline" style="width: 100px;">
                        <input type="text" name="xqjiage1" placeholder="￥" autocomplete="off" class="layui-input" lay-verify="shuzi" id="xqjiage1">
                    </div>
                    <div class="layui-form-mid layui-word-aux">万</div>
                    <div class="layui-form-mid">-</div>
                    <div class="layui-input-inline" style="width: 100px;">
                        <input type="text" name="xqjiage2" placeholder="￥" autocomplete="off" class="layui-input" lay-verify="shuzi" id="xqjiage2">
                    </div>
                    <div class="layui-form-mid layui-word-aux">万</div>
                </div>
            </div>
            <div class="layui-form-item">
                <div class="layui-inline">
                    <label class="layui-form-label" style="color:#f00;">
                        需求面积
                    </label>
                    <div class="layui-input-inline" style="width: 100px;">
                        <input type="text" name="xqmianji1" placeholder="" autocomplete="off" class="layui-input" lay-verify="shuzi" id="xqmianji1">
                    </div>
                    <div class="layui-form-mid layui-word-aux">平米</div>
                    <div class="layui-form-mid">-</div>
                    <div class="layui-input-inline" style="width: 100px;">
                        <input type="text" name="xqmianji2" placeholder="" autocomplete="off" class="layui-input" lay-verify="shuzi" id="xqmianji2">
                    </div>
                    <div class="layui-form-mid layui-word-aux">平米</div>
                </div>
                <div class="layui-inline">
                    <label class="layui-form-label">
                        需求付款
                    </label>
                    <div class="layui-input-block">
                        <select name="fukuan" lay-filter="aihao">
                            <?php if(is_array($fukuan)): foreach($fukuan as $key=>$pz): ?><option style="display:none"></option>
                                <option value="<?php echo ($pz["lxid"]); ?>"><?php echo ($pz["lxming"]); ?></option><?php endforeach; endif; ?>
                        </select>
                    </div>
                </div>
            </div>
            <div class="layui-form-item">
                <div class="layui-inline">
                    <label class="layui-form-label">
                        需求楼层
                    </label>
                    <div class="layui-input-inline" style="width: 100px;">
                        <input type="text" name="louceng1" placeholder="" autocomplete="off" class="layui-input" id="louceng1">
                    </div>
                    <div class="layui-form-mid layui-word-aux">楼</div>
                    <div class="layui-form-mid">-</div>
                    <div class="layui-input-inline" style="width: 100px;">
                        <input type="text" name="louceng2" placeholder="" autocomplete="off" class="layui-input" id="louceng2">
                    </div>
                    <div class="layui-form-mid layui-word-aux">楼</div>
                </div>
                <div class="layui-inline">
                    <label class="layui-form-label" style="color:#f00;">
                        用途
                    </label>
                    <div class="layui-input-block">
                        <select name="xqyongtu" lay-filter="aihao" lay-verify="required">
                            <?php if(is_array($yongtu)): foreach($yongtu as $key=>$pz): ?><option style="display:none"></option>
                                <option value="<?php echo ($pz["lxid"]); ?>"><?php echo ($pz["lxming"]); ?></option><?php endforeach; endif; ?>
                        </select>
                    </div>
                </div>
            </div>
            <div class="layui-form-item">
                <div class="layui-inline">
                    <label class="layui-form-label">
                        需求房龄
                    </label>
                    <div class="layui-input-inline" style="width: 100px;">
                        <input type="text" name="fangling1" placeholder="" autocomplete="off" class="layui-input" id="fangling1">
                    </div>
                    <div class="layui-form-mid layui-word-aux">年</div>
                    <div class="layui-form-mid">-</div>
                    <div class="layui-input-inline" style="width: 100px;">
                        <input type="text" name="fangling2" placeholder="" autocomplete="off" class="layui-input" id="fangling2">
                    </div>
                    <div class="layui-form-mid layui-word-aux">年</div>
                </div>
                <div class="layui-inline">
                    <div class="layui-input-block">
                        <input type="checkbox" name="jiqie" title="急切" value="1">
                    </div>
                </div>
            </div>
            <div class="layui-form-item">
                <div class="layui-inline">
                    <label class="layui-form-label" style="color:#f00;">
                        需求区域
                    </label>
                    <div class="layui-input-inline">
                        <input type="text" name="xqquyu" placeholder="" autocomplete="off" class="layui-input" id="xqquyu" style="width: 333px;" lay-verify="required">
                </div>
            </div>
            <div class="layui-form-item">
                <div class="layui-inline">
                    <label class="layui-form-label" style="color:#f00;">
                        需求小区
                    </label>
                    <div class="layui-input-inline">
                        <a class="layui-btn layui-btn-primary" id="cz1">重置</a>
                        <div style="line-height:15PX;">&nbsp;</div>
                        <textarea type="text" name="xqxiaoqu" autocomplete="off" placeholder="点击搜索" class="layui-textarea" id="sousuo1" style="width: 666px;" readonly="readonly" lay-verify="required"></textarea>
                        <input type="hidden" name="xiaoqu" id="xiaoqu">
                        <div id="greetings">
                            <input type="text" name="" autocomplete="off" placeholder="请搜索小区并选择" class="layui-input" id="sousuo">
                            <ul id="tcontent"></ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="layui-form-item" pane="">
                <label class="layui-form-label" style="color:#f00;">
                    朝向
                </label>
                <div class="layui-input-block">
                    <?php if(is_array($chaoxiang)): foreach($chaoxiang as $key=>$pz): ?><input type="checkbox" name="chaoxiang[<?php echo ($pz["lxid"]); ?>]" lay-skin="primary" title="<?php echo ($pz["lxming"]); ?>" lay-verify="required"><?php endforeach; endif; ?>
                </div>
            </div>
            <div class="layui-form-item" pane="">
                <label class="layui-form-label" style="color:#f00;">
                    装修
                </label>
                <div class="layui-input-block">
                    <?php if(is_array($zhuangxiu)): foreach($zhuangxiu as $key=>$pz): ?><input type="checkbox" name="zhuangxiu[<?php echo ($pz["lxid"]); ?>]" lay-skin="primary" title="<?php echo ($pz["lxming"]); ?>" lay-verify="required"><?php endforeach; endif; ?>
                </div>
            </div>
            <div class="layui-form-item" pane="">
                <label class="layui-form-label" style="color:#f00;">
                    配套
                </label>
                <div class="layui-input-block">
                    <?php if(is_array($peitao)): foreach($peitao as $key=>$pz): ?><input type="checkbox" name="peitao[<?php echo ($pz["lxid"]); ?>]" lay-skin="primary" title="<?php echo ($pz["lxming"]); ?>" lay-verify="required"><?php endforeach; endif; ?>
                </div>
            </div>
            <div class="layui-form-item">
                <label class="layui-form-label">需求原因</label>
                <div class="layui-input-block" style="width: 666px;">
                    <input type="text" name="xqyuanyin" lay-verify="" autocomplete="off" placeholder="" class="layui-input">
                </div>
            </div>
            <div class="layui-form-item">
                <div class="layui-inline">
                    <label class="layui-form-label" style="color:#f00;">
                        客户来源
                    </label>
                    <div class="layui-input-block">
                        <select name="khlaiyuan" lay-filter="aihao" lay-verify="required">
                            <?php if(is_array($laiyuan)): foreach($laiyuan as $key=>$pz): ?><option style="display:none"></option>
                                <option value="<?php echo ($pz["lxid"]); ?>"><?php echo ($pz["lxming"]); ?></option><?php endforeach; endif; ?>
                        </select>
                    </div>
                </div>
                <div class="layui-inline">
                    <label class="layui-form-label">沟通阶段</label>
                    <div class="layui-input-block">
                        <select name="gtjieduan" lay-filter="aihao">
                            <?php if(is_array($gtjieduan)): foreach($gtjieduan as $key=>$pz): ?><option style="display:none"></option>
                                <option value="<?php echo ($pz["lxid"]); ?>"><?php echo ($pz["lxming"]); ?></option><?php endforeach; endif; ?>
                        </select>
                    </div>
                </div>
            </div>
            <div class="layui-form-item">
                <div class="layui-inline">
                    <label class="layui-form-label">国籍</label>
                    <div class="layui-input-block">
                        <select name="guoji" lay-filter="aihao">
                            <?php if(is_array($guoji)): foreach($guoji as $key=>$pz): ?><option style="display:none"></option>
                                <option value="<?php echo ($pz["lxid"]); ?>"><?php echo ($pz["lxming"]); ?></option><?php endforeach; endif; ?>
                        </select>
                    </div>
                </div>
                <div class="layui-inline">
                    <label class="layui-form-label">民族</label>
                    <div class="layui-input-block">
                        <select name="minzu" lay-filter="aihao">
                            <?php if(is_array($minzu)): foreach($minzu as $key=>$pz): ?><option style="display:none"></option>
                                <option value="<?php echo ($pz["lxid"]); ?>"><?php echo ($pz["lxming"]); ?></option><?php endforeach; endif; ?>
                        </select>
                    </div>
                </div>
            </div>
            <div class="layui-form-item">
                <div class="layui-inline">
                    <label class="layui-form-label">消费理念</label>
                    <div class="layui-input-block">
                        <select name="xflinian" lay-filter="aihao">
                            <?php if(is_array($xflinian)): foreach($xflinian as $key=>$pz): ?><option style="display:none"></option>
                                <option value="<?php echo ($pz["lxid"]); ?>"><?php echo ($pz["lxming"]); ?></option><?php endforeach; endif; ?>
                        </select>
                    </div>
                </div>
                <div class="layui-inline">
                    <label class="layui-form-label">客源等级</label>
                    <div class="layui-input-block">
                        <select name="kydengji" lay-filter="aihao">
                             <?php if(is_array($kydengji)): foreach($kydengji as $key=>$pz): ?><option style="display:none"></option>
                                <option value="<?php echo ($pz["lxid"]); ?>"><?php echo ($pz["lxming"]); ?></option><?php endforeach; endif; ?>
                        </select>
                    </div>
                </div>
            </div>
            <div class="layui-form-item">
                <label class="layui-form-label">身份证</label>
                <div class="layui-input-block"  style="width: 666px;">
                    <input type="text" name="sfzheng" lay-verify="" placeholder="" autocomplete="off" class="layui-input">
                </div>
            </div>
            <div class="layui-form-item">
                <div class="layui-inline">
                    <label class="layui-form-label">QQ</label>
                    <div class="layui-input-inline">
                        <input type="tel" name="qqhao" lay-verify="" autocomplete="off" class="layui-input">
                    </div>
                </div>
                <div class="layui-inline">
                    <label class="layui-form-label">邮箱</label>
                    <div class="layui-input-inline">
                        <input type="text" name="youxiang" lay-verify="" autocomplete="off" class="layui-input">
                    </div>
                </div>
            </div>
            <div class="layui-form-item">
                <div class="layui-inline">
                    <label class="layui-form-label">微信</label>
                    <div class="layui-input-inline">
                        <input type="tel" name="weixin" lay-verify="" autocomplete="off" class="layui-input">
                    </div>
                </div>
                <div class="layui-inline">
                    <label class="layui-form-label">交通工具</label>
                    <div class="layui-input-block">
                      <select name="jtgongju" lay-filter="aihao">
                          <?php if(is_array($jtgongju)): foreach($jtgongju as $key=>$pz): ?><option style="display:none"></option>
                                <option value="<?php echo ($pz["lxid"]); ?>"><?php echo ($pz["lxming"]); ?></option><?php endforeach; endif; ?>
                      </select>
                   </div>
                </div>
            </div>
            <div class="layui-form-item">
                <div class="layui-inline">
                    <label class="layui-form-label">车型</label>
                    <div class="layui-input-inline">
                        <input type="tel" name="chexing" lay-verify="" autocomplete="off" class="layui-input">
                    </div>
                </div>
            </div>
            <div class="layui-form-item layui-form-text">
                <label class="layui-form-label">备注</label>
                <div class="layui-input-block" style="width: 666px;">
                    <textarea placeholder="请输入内容" class="layui-textarea" name="beizhu"></textarea>
                </div>
            </div>
            <div style="line-height:48PX;">&nbsp;</div>
            <div class="layui-form-item" style="width:100%;height:50px;margin:0 auto;background:#fff;position:fixed;bottom:0;text-align:center; border-top-style: solid;border-top-width: 1px;border-top-color: #009688;padding-top: 5px;">
                <div class="layui-form-item">
                    <button class="layui-btn layui-btn-radius" lay-submit="" lay-filter="demo1">立即提交</button>
                    <button type="reset" class="layui-btn layui-btn-radius layui-btn-primary">重置</button>
                </div>
            </div>
        </form>
        <!--aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa-->
        <script type="text/javascript" src="/kaidandashi/Public/lib/jquery/1.9.1/jquery.min.js"></script> 
        <script src="/kaidandashi/Public/lib/layui/layui.js" charset="utf-8"></script>
        <script>
            //Demo
            layui.use('form', function(){
                var form = layui.form();
                //监听提交
                form.on('submit(demo1)', function(data){
                    var index = parent.layer.getFrameIndex(window.name);
                    parent.layer.msg('添加成功');
                    parent.layer.close(index);
                });
                form.verify({
                    title: function(value){
                        if(value.length < 5){
                            return '标题至少得5个字符啊';
                        }
                    }
                    ,shuzi: [/^(0|[1-9][0-9]{0,9})(\.[0-9]{1,2})?$/, '只能填写数字']
                    ,content: function(value){
                        layedit.sync(editIndex);
                    }
                });
                $("#xqhuxing1,#xqhuxing2").blur(function(){
                    var xqhuxing1=$("#xqhuxing1").val();
                    var xqhuxing2=$("#xqhuxing2").val();
                    if(xqhuxing1.length!=0 && xqhuxing2.length!=0){
                        if (parseInt(xqhuxing1) >parseInt(xqhuxing2) ) {
                            layer.alert('需求户型2小于需求户型1！！！', {icon: 5});
                            $("#submit").hide();
                        }else{
                            $("#submit").show();
                        }
                    }
                });
                $("#xqjiage1,#xqjiage2").blur(function(){
                    var xqjiage1=$("#xqjiage1").val();
                    var xqjiage2=$("#xqjiage2").val();
                    if(xqjiage1.length!=0 && xqjiage2.length!=0){
                        if (parseInt(xqjiage1) >parseInt(xqjiage2) ) {
                            layer.alert('价格范围2小于价格范围1！！！', {icon: 5});
                            $("#submit").hide();
                        }else{
                            $("#submit").show();
                        }
                    }
                });
                $("#xqmianji1,#xqmianji2").blur(function(){
                    var xqmianji1=$("#xqmianji1").val();
                    var xqmianji2=$("#xqmianji2").val();
                    if(xqmianji1.length!=0 && xqmianji2.length!=0){
                        if (parseInt(xqmianji1) >parseInt(xqmianji2) ) {
                            layer.alert('需求面积2小于需求面积1！！！', {icon: 5});
                            $("#submit").hide();
                        }else{
                            $("#submit").show();
                        }
                    }
                });
                $("#louceng1,#louceng2").blur(function(){
                    var louceng1=$("#louceng1").val();
                    var louceng2=$("#louceng2").val();
                    if(louceng1.length!=0 && louceng2.length!=0){
                        if (parseInt(louceng1) >parseInt(louceng2) ) {
                            layer.alert('需求楼层2小于需求楼层1！！！', {icon: 5});
                            $("#submit").hide();
                        }else{
                            $("#submit").show();
                        }
                    }
                });
                $("#fangling1,#fangling2").blur(function(){
                    var fangling1=$("#fangling1").val();
                    var fangling2=$("#fangling2").val();
                    if(fangling1.length!=0 && fangling2.length!=0){
                        if (parseInt(fangling1) >parseInt(fangling2) ) {
                            layer.alert('需求房龄2小于需求房龄1！！！', {icon: 5});
                            $("#submit").hide();
                        }else{
                            $("#submit").show();
                        }
                    }
                });
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
                            url:'<?php echo U('Keyuan1/get_xiaoqu');?>',
                            Type:"POST",
                            data:"txt="+txt,
                            dataType:"json",
                            success:function(data){
                                var district = data.district;
                                $("#tcontent li").remove();
                                for(var i in district){
                                    var li=$("<li></li>");
                                    $(li).attr('dataid',district[i]['id']);
                                    $(li).html(district[i]['xiaoqum']);
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
                    var xiaoquid=Uarry.eq(count).attr('dataid');
                    var bb=$("#sousuo1").val();
                    bb+=Tresult+'；';
                    $("#xiaoqu").val(xiaoquid);
                    $("#sousuo1").val(bb);
                    $("#sousuo").val("");
                    $("#greetings").hide();
                })
                $("#cz1").click(function(){
                    $("#sousuo1").val("");
                })
            });
        </script>
    </body>
</html>