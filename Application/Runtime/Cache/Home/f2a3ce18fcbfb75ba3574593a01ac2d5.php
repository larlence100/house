<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
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
  <title>layui</title>
  <meta name="renderer" content="webkit">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
  <link rel="stylesheet" href="/kaidandashi/Public/lib/layui/css/layui.css"  media="all">
  <!-- 注意：如果你直接复制所有代码到本地，上述css路径需要改成你本地的 -->

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
    
  </style>
</head>
<body>
<div style="position:fixed;top:0;width: 100%; border-top-style: solid;border-top-width: 2px;border-top-color: #009688;"></div> 
<form class="layui-form" action="/kaidandashi/index.php/home/fangyuan/addEsfyHandle" method="post" id="addEsfy" style="margin-top: 10px;">

  <div class="layui-form-item">
    <div class="layui-inline">
      <label class="layui-form-label" style="color:#f00;">用途</label>
      <div class="layui-input-block">
        <select name="yongtu" lay-filter="aihao" lay-verify="required">
          <option></option>
          <?php if(is_array($yongtu)): foreach($yongtu as $key=>$pz): ?><option value="<?php echo ($pz["lxid"]); ?>" <?php if($pz['lxid'] == 1): ?>selected=""<?php endif; ?>><?php echo ($pz["lxming"]); ?></option><?php endforeach; endif; ?>
          </select>
        </select>
      </div>
    </div>
    <div class="layui-inline" style="display:none;">
      <label class="layui-form-label" style="color:#f00;">交易类型</label>
      <div class="layui-input-block">
        <select name="leixing" lay-filter="aihao" lay-verify="required">
          <option></option>
          <?php if(is_array($leixing)): foreach($leixing as $key=>$pz): ?><option value="<?php echo ($pz["lxid"]); ?>" <?php if($pz['lxid'] == $_GET['jylx']): ?>selected=""<?php endif; ?>><?php echo ($pz["lxming"]); ?></option><?php endforeach; endif; ?>
          </select>
        </select>
      </div>
    </div>
    <!--<div class="layui-inline">
      <label class="layui-form-label" style="color:#f00;">状态</label>
      <div class="layui-input-block">
        <select name="zhuangtai" lay-filter="aihao" lay-verify="required">
          <option></option>
          <?php if(is_array($zhuangtai)): foreach($zhuangtai as $key=>$pz): ?><option value="<?php echo ($pz["lxid"]); ?>" <?php if($pz['lxid'] == 1): ?>selected=""<?php endif; ?>><?php echo ($pz["lxming"]); ?></option><?php endforeach; endif; ?>
          </select>
        </select>
      </div>
    </div>-->
</div>
<div class="layui-form-item">
    <div class="layui-inline">
    <label class="layui-form-label" style="color:#f00;">小区</label>
    <div class="layui-input-inline">
      <input type="text" name="xiaoqum" lay-verify="required" autocomplete="off" placeholder="点击搜索" class="layui-input" id="sousuo1" readonly="">
      <input type="hidden" name="xiaoqu" id="xiaoqu">
      <div id="greetings" >
      <input type="text" name="" autocomplete="off" placeholder="请搜索小区并选择" class="layui-input" id="sousuo">
           <ul id="tcontent">
              
           </ul>
        </div>
    </div>
    </div>
   <!-- <div class="layui-inline">
      <label class="layui-form-label">存钥部门</label>
      <div class="layui-input-inline" style="width: 170px;">
        <select name="shouyaobm" lay-filter="aihao">
          <option></option>
          <?php if(is_array($bumen)): foreach($bumen as $key=>$bm): ?><option value="<?php echo ($bm["id"]); ?>"><?php echo ($bm["bmming"]); ?></option><?php endforeach; endif; ?>
          </select>
        </select>
      </div>
      
    </div>-->
  </div>

  <div class="layui-form-item">
    <div class="layui-inline">
      <label class="layui-form-label" style="color:#f00;">门牌号</label>
      <div class="layui-input-inline" style="width: 70px;">
        <input type="text" name="zuodong" placeholder="" autocomplete="off" class="layui-input" lay-verify="zuodong" id="zuodong">
      </div>
      <div class="layui-form-mid layui-word-aux" style="font-size: 16px">座栋</div>
      <div class="layui-input-inline" style="width: 70px;">
        <input type="text" name="danyuan" placeholder="" autocomplete="off" class="layui-input" lay-verify="zuodong" id="danyuan">
      </div>
      <div class="layui-form-mid layui-word-aux" style="font-size: 16px">单元</div>
      <div class="layui-input-inline" style="width: 70px;">
        <input type="text" name="fanghao" placeholder="" autocomplete="off" class="layui-input" lay-verify="number" id="fanghao" >
      </div>
      <div class="layui-form-mid layui-word-aux" style="font-size: 16px">房号</div>
    </div>
</div>

  <div class="layui-form-item" >
    <div class="layui-inline">
    <label class="layui-form-label">姓名</label>
    <div class="layui-input-inline">
      <input type="text" name="yezhu" autocomplete="off" placeholder="" class="layui-input">
    </div>
    <div class="layui-input-inline" style="width:100px;">
      <select name="yezhulx" >
      <option value="">请选择</option>
        <?php if(is_array($yezhulx)): foreach($yezhulx as $key=>$pz): ?><option value="<?php echo ($pz["lxid"]); ?>" <?php if($pz['lxid'] == 1): ?>selected=""<?php endif; ?>><?php echo ($pz["lxming"]); ?></option><?php endforeach; endif; ?>
      </select>
    </div>
  </div>
  <div class="layui-inline">
    <label class="layui-form-label" style="color:#f00;">电话</label>
    <div class="layui-input-inline">
      <input type="tel" name="yezhudianhua" lay-verify="phone" autocomplete="off" class="layui-input">
    </div>
    <div class="layui-input-inline" style="width:100px;">
      <select name="yezhugx" >
      <option value="">请选择</option>
        <?php if(is_array($yezhugx)): foreach($yezhugx as $key=>$pz): ?><option value="<?php echo ($pz["lxid"]); ?>" <?php if($pz['lxid'] == 1): ?>selected=""<?php endif; ?>><?php echo ($pz["lxming"]); ?></option><?php endforeach; endif; ?>
      </select>
    </div>
  </div>
  </div>

  <div class="layui-form-item">
   <!-- <?php if(($_GET['jylx'] == 1) or ($_GET['jylx'] == 3) ): ?><div class="layui-inline">
        <label class="layui-form-label" style="color:#f00;">出售底价</label>
        <div class="layui-input-inline" style="width:70px;">
          <input type="text" name="chushoudj"  autocomplete="off" placeholder="" class="layui-input" lay-verify="shuju" >
        </div>
        <div class="layui-form-mid layui-word-aux" style="font-size: 16px">万元</div>
      </div><?php endif; ?>-->
   <!-- <?php if(($_GET['jylx'] == 2) or ($_GET['jylx'] == 3) ): ?><div class="layui-inline">
        <label class="layui-form-label" style="color:#f00;">出租底价</label>
        <div class="layui-input-inline" style="width:70px;">
          <input type="text" name="chuzudj"  autocomplete="off" placeholder="" class="layui-input" lay-verify="shuju" >
        </div>
        <div class="layui-form-mid layui-word-aux" style="font-size: 16px">元</div>
      </div><?php endif; ?>
  </div>-->

  <div class="layui-form-item">
    <div class="layui-inline">
      <label class="layui-form-label">房源标题</label>
      <div class="layui-input-block">
        <input type="text" name="fybiaoti"  autocomplete="off" placeholder="" class="layui-input">
      </div>
    </div>
    <?php if(($_GET['jylx'] == 1) or ($_GET['jylx'] == 3) ): ?><div class="layui-inline">
      <label class="layui-form-label" style="color:#f00;">售价</label>
      <div class="layui-input-inline" style="width:70px;">
        <input type="text" name="shoujia"  autocomplete="off" placeholder="" class="layui-input" lay-verify="shuju" >
      </div>
      <div class="layui-form-mid layui-word-aux" style="font-size: 16px">万元</div>
    </div><?php endif; ?>

  </div>

<div class="layui-form-item">
    <div class="layui-inline">
      <label class="layui-form-label" style="color:#f00;">建筑面积</label>
      <div class="layui-input-inline" style="width:70px;">
        <input type="text" name="mianji"  autocomplete="off" placeholder="" class="layui-input" lay-verify="shuju">
      </div>
      <div class="layui-form-mid layui-word-aux" style="font-size: 16px">平方米</div>
    </div>
    <?php if(($_GET['jylx'] == 2) or ($_GET['jylx'] == 3) ): ?><div class="layui-inline">
        <label class="layui-form-label" style="color:#f00;">租价</label>
      <div class="layui-input-inline">
        <input type="text" name="zujia"  autocomplete="off" placeholder="" class="layui-input" lay-verify="number" >
      </div>
      <div class="layui-input-inline" style="width:100px;">
        <select name="zujialx" >
        <option value="">请选择</option>
          <?php if(is_array($zujialx)): foreach($zujialx as $key=>$pz): ?><option value="<?php echo ($pz["lxid"]); ?>" <?php if($pz['lxid'] == 1): ?>selected=""<?php endif; ?>><?php echo ($pz["lxming"]); ?></option><?php endforeach; endif; ?>
        </select>
      </div>
      </div><?php endif; ?>
  </div>

  <div class="layui-form-item">
    <!--<div class="layui-inline">
        <label class="layui-form-label">使用面积</label>
        <div class="layui-input-inline" style="width:70px;">
          <input type="text" name="symianji"  autocomplete="off" placeholder="请输入" class="layui-input">
        </div>
        <div class="layui-form-mid layui-word-aux" style="font-size: 16px">平方米</div>
    </div>-->
    <div class="layui-inline">
      <label class="layui-form-label" style="color:#f00;">户型</label>
    <div class="layui-input-inline" style="width:40px;">
      <input type="text" name="shi"  autocomplete="off" placeholder="" class="layui-input"  lay-verify="number">
    </div>
    <div class="layui-form-mid layui-word-aux" style="font-size: 16px">室</div>
    <div class="layui-input-inline" style="width:40px;">
      <input type="text" name="ting"  autocomplete="off" placeholder="" class="layui-input" lay-verify="number" >
      
    </div><div class="layui-form-mid layui-word-aux" style="font-size: 16px">厅</div>
    <div class="layui-input-inline" style="width:40px;">
      <input type="text" name="wei"  autocomplete="off" placeholder="" class="layui-input"  lay-verify="number">
      
    </div><div class="layui-form-mid layui-word-aux" style="font-size: 16px">卫</div>
    <div class="layui-input-inline" style="width:40px;">
      <input type="text" name="chu"  autocomplete="off" placeholder="" class="layui-input" lay-verify="number" >
      
    </div><div class="layui-form-mid layui-word-aux" style="font-size: 16px">厨</div>
    <div class="layui-input-inline" style="width:40px;">
      <input type="text" name="yangtai"  autocomplete="off" placeholder="" class="layui-input" lay-verify="number" >
      
    </div><div class="layui-form-mid layui-word-aux" style="font-size: 16px">阳台</div>
    </div>
  </div>

  <div class="layui-form-item">
    <div class="layui-inline">
      <label class="layui-form-label">朝向</label>
      <div class="layui-input-block">
        <select name="chaoxiang" lay-filter="aihao">
          <option></option>
          <?php if(is_array($chaoxiang)): foreach($chaoxiang as $key=>$pz): ?><option value="<?php echo ($pz["lxid"]); ?>"><?php echo ($pz["lxming"]); ?></option><?php endforeach; endif; ?>
          </select>
        </select>
      </div>
    </div>
    <!--<div class="layui-inline">
      <label class="layui-form-label">现状</label>
      <div class="layui-input-block">
        <select name="xianzhuang" lay-filter="aihao">
          <option></option>
          <?php if(is_array($xianzhuang)): foreach($xianzhuang as $key=>$pz): ?><option value="<?php echo ($pz["lxid"]); ?>"><?php echo ($pz["lxming"]); ?></option><?php endforeach; endif; ?>
          </select>
        </select>
      </div>
    </div>-->
    <div class="layui-inline">
      <label class="layui-form-label" style="color:#f00;">楼层</label>
      <div class="layui-input-inline" style="width: 100px;">
        <input type="text" name="louceng" placeholder="第几层" autocomplete="off" class="layui-input" lay-verify="number" id="louceng">
      </div>
      
      <div class="layui-input-inline" style="width: 100px;">
        <input type="text" name="zlouceng" placeholder="总楼层" autocomplete="off" class="layui-input" lay-verify="number" id="zlouceng">
      </div>
      
    </div>
    
</div>

  <div class="layui-form-item">
    <div class="layui-inline">
      <label class="layui-form-label" style="color:#f00;">装修</label>
      <div class="layui-input-block">
        <select name="zhuangxiu" lay-filter="aihao" lay-verify="required">
          <option></option>
          <?php if(is_array($zhuangxiu)): foreach($zhuangxiu as $key=>$pz): ?><option value="<?php echo ($pz["lxid"]); ?>"><?php echo ($pz["lxming"]); ?></option><?php endforeach; endif; ?>
          </select>
        </select>
      </div>
    </div>
    <div class="layui-inline">
      <label class="layui-form-label">房屋类型</label>
      <div class="layui-input-block">
        <select name="fwleixing" lay-filter="aihao">
          <option></option>
          <?php if(is_array($fwleixing)): foreach($fwleixing as $key=>$pz): ?><option value="<?php echo ($pz["lxid"]); ?>"><?php echo ($pz["lxming"]); ?></option><?php endforeach; endif; ?>
          </select>
        </select>
      </div>
    </div>
    <div class="layui-inline">
      <label class="layui-form-label">梯户</label>
      <div class="layui-input-inline" style="width: 100px;">
        <input type="text" name="ti" placeholder="梯" autocomplete="off" class="layui-input">
      </div>
      
      <div class="layui-input-inline" style="width: 100px;">
        <input type="text" name="hu" placeholder="户" autocomplete="off" class="layui-input">
      </div>
    </div>
  </div>

  <div class="layui-form-item" pane="">
    <label class="layui-form-label">配套</label>
    <div class="layui-input-block">
      <?php if(is_array($peitao)): foreach($peitao as $key=>$pz): ?><input type="checkbox" name="peitao[<?php echo ($pz["lxid"]); ?>]" lay-skin="primary" title="<?php echo ($pz["lxming"]); ?>"><?php endforeach; endif; ?>
    </div>
  </div>

  <div class="layui-form-item">
   <!-- <div class="layui-inline">
      <label class="layui-form-label">建筑结构</label>
      <div class="layui-input-block">
        <select name="jiegou" lay-filter="aihao">
          <option></option>
          <?php if(is_array($jiegou)): foreach($jiegou as $key=>$pz): ?><option value="<?php echo ($pz["lxid"]); ?>"><?php echo ($pz["lxming"]); ?></option><?php endforeach; endif; ?>
          </select>
        </select>
      </div>
    </div>-->
    <div class="layui-inline">
      <label class="layui-form-label">建筑年代</label>
      <div class="layui-input-inline">
        <input type="text" name="niandai" id="date"  placeholder="yyyy" autocomplete="off" class="layui-input" onclick="layui.laydate({elem: this, format: 'YYYY'})">
      </div>
    </div>
    <div class="layui-inline">
      <label class="layui-form-label" style="color:#f00;">产证日期</label>
      <div class="layui-input-inline">
        <input type="text" name="czriqi" id="date"  placeholder="yyyy-mm-dd" autocomplete="off" class="layui-input" onclick="layui.laydate({elem: this})" value="" >
      </div>
    </div>
    <!--<div class="layui-inline">
      <input type="checkbox" name="man2" title="满两年" value="1">
      <input type="checkbox" name="weiyi" title="唯一住房" value="1">
      <input type="checkbox" name="jishou" title="急售" value="1">
    </div>-->
  </div>

  <div class="layui-form-item">
    <div class="layui-inline">
      <label class="layui-form-label" style="color:#f00;">产权性质</label>
      <div class="layui-input-block">
        <select name="cqxingzhi" lay-filter="aihao" lay-verify="required" lay-verify="required">
          <option></option>
          <?php if(is_array($chanquan)): foreach($chanquan as $key=>$pz): ?><option value="<?php echo ($pz["lxid"]); ?>"><?php echo ($pz["lxming"]); ?></option><?php endforeach; endif; ?>
          </select>
        </select>
      </div>
    </div>
    <div class="layui-inline">
      <label class="layui-form-label">产权年限</label>
      <div class="layui-input-inline">
        <input type="text" name="cqnianxian"  autocomplete="off" placeholder="请输入" class="layui-input" value="">
      </div>
    </div>
  </div>

 <!-- <div class="layui-form-item">
    <label class="layui-form-label"></label>
    <div class="layui-input-block">
      
      <input type="checkbox" name="quankuan" title="要求全款" value="1">
      <input type="checkbox" name="youdaikuan" title="有贷款" value="1">
      <input type="checkbox" name="xuequ" title="学区房" value="1">
      <input type="checkbox" name="xinzheng" title="新证" value="1">
    </div>
  </div>
-->
  <!--<div class="layui-form-item">
    <div class="layui-inline">
      <label class="layui-form-label">看房方式</label>
      <div class="layui-input-block">
        <select name="kanfangfs" lay-filter="aihao">
          <option></option>
          <?php if(is_array($kanfangfs)): foreach($kanfangfs as $key=>$pz): ?><option value="<?php echo ($pz["lxid"]); ?>"><?php echo ($pz["lxming"]); ?></option><?php endforeach; endif; ?>
          </select>
        </select>
      </div>
    </div>-->
    <div class="layui-inline">
      <label class="layui-form-label">来源</label>
      <div class="layui-input-block">
        <select name="laiyuan" lay-filter="aihao">
          <option></option>
          <?php if(is_array($laiyuan)): foreach($laiyuan as $key=>$pz): ?><option value="<?php echo ($pz["lxid"]); ?>"><?php echo ($pz["lxming"]); ?></option><?php endforeach; endif; ?>
          </select>
        </select>
      </div>
    </div>
    <div class="layui-inline">
      <label class="layui-form-label">付款方式</label>
      <div class="layui-input-block">
        <select name="fukuanfs" lay-filter="aihao">
          <option></option>
          <?php if(is_array($fukuan)): foreach($fukuan as $key=>$pz): ?><option value="<?php echo ($pz["lxid"]); ?>"><?php echo ($pz["lxming"]); ?></option><?php endforeach; endif; ?>
          </select>
        </select>
      </div>
    </div>
  </div>

  



<div class="layui-form-item layui-form-text">
    <label class="layui-form-label">备注</label>
    <div class="layui-input-block">
      <textarea placeholder="请输入内容" class="layui-textarea" name="beizhu"></textarea>
    </div>
  </div>
<fieldset class="layui-elem-field layui-field-title" style="margin-top: 20px;">
  <legend></legend>
</fieldset>
<fieldset class="layui-elem-field layui-field-title" style="margin-top: 20px;">
  <legend></legend>
</fieldset>
  
  <div class="layui-form-item" style="width:100%;
    height:45px;
    margin:0 auto;
    background:#fff;
    position:fixed;
    bottom:0;
    text-align:center;
    border-top-style: solid;border-top-width: 1px;border-top-color: #009688;
    padding-top: 5px;
    "
     id="submit">
    <div class="layui-input-block" style="margin-left: -15px;">
      <button class="layui-btn layui-btn-radius" lay-submit="" lay-filter="demo1">立即提交</button>
      <button type="reset" class="layui-btn layui-btn-radius layui-btn-primary">重置</button>
    </div>
  </div>
</form>

<script type="text/javascript" src="/kaidandashi/Public/lib/jquery/1.9.1/jquery.min.js"></script> 
<script src="/kaidandashi/Public/lib/layui/layui.js" charset="utf-8"></script>
<!-- 注意：如果你直接复制所有代码到本地，上述js路径需要改成你本地的 -->
<script>
layui.use(['form', 'layedit', 'laydate'], function(){
  var form = layui.form()
  ,layer = layui.layer
  ,layedit = layui.layedit
  ,laydate = layui.laydate;
  
  
 
  //自定义验证规则
  form.verify({
    title: function(value){
      if(value.length < 5){
        return '标题至少得5个字符啊';
      }
    }
    ,shuju: [/^(0|[1-9][0-9]{0,9})(\.[0-9]{1,2})?$/, '格式不对']
    ,zuodong: [/^[A-Za-z0-9]+$/, '只能字母和数字']
    
    ,content: function(value){
      layedit.sync(editIndex);
    }
  });
  
 
  
  $("#louceng,#zlouceng").blur(function(){

    
    var louceng=$("#louceng").val();
    var zlouceng=$("#zlouceng").val();
    if(louceng.length!=0 && zlouceng.length!=0){
      if (parseInt(louceng) >parseInt(zlouceng) ) {
          layer.alert('总楼层小于楼层！！！', {icon: 5});
          $("#submit").hide();
      }else{
        $("#submit").show();
      }
    }
  });

  $("#fanghao,#zuodong,#danyuan").blur(function(){
    var leixing=<?php echo ($_GET['jylx']); ?>;
    var xiaoqu=$("#xiaoqu").val();
    var zuodong=$("#zuodong").val();
    var danyuan=$("#danyuan").val();
    var fanghao=$("#fanghao").val();
    if (xiaoqu!="" && zuodong!="" && danyuan!="" && fanghao!="") {
          $.ajax({
          url:'<?php echo U('fangyuan/cfyanzheng');?>',
          Type:"POST",
          data:{"xiaoqu":xiaoqu,"zuodong":zuodong,"danyuan":danyuan,"fanghao":fanghao,"leixing":leixing},
          dataType:"json",
          success:function(data){
            var city = data.city;
            if (city=="1") {
              layer.alert('房源重复', {icon: 5});
              $("#submit").hide();
            }else{
              $("#submit").show();
            }
          }
          
        });
    }
  });


  form.on('select(province_id)', function(data){
    
    var province_id=data.value;
    $.ajax({
    url:'<?php echo U('fangyuan/get_citys');?>',
    Type:"POST",
    data:"province_id="+province_id,
    dataType:"json",
    success:function(data){
      var city = data.city;
      $("#city_id option").remove();
      $("#district_id option").remove();
      var option=$("<option></option>");
      $(option).val("");
      $(option).html("请选择");
      var option1=$("<option></option>");
      $(option1).val("");
      $(option1).html("请选择");
      $("#city_id").html(option);
      $("#district_id").html(option1);
      for(var i in city){
        var option=$("<option></option>");
        $(option).val(city[i]['id']);
        $(option).html(city[i]['pianqum']);
        $("#city_id").append(option);
      }
      form.render('select');
    }
    
  });

  }); 

  form.on('select(city_id)', function(data){

    var city_id=data.value;
    $.ajax({
      url:'<?php echo U('fangyuan/get_district');?>',
      Type:"POST",
      data:"city_id="+city_id,
      dataType:"json",
      success:function(data){
        var district = data.district;
        $("#district_id option").remove();
        var option=$("<option></option>");
        $(option).val("");
        $(option).html("请选择");
        $("#district_id").html(option);
        for(var i in district){
          var option=$("<option></option>");
          $(option).val(district[i]['id']);
          $(option).html(district[i]['xiaoqum']);
          $("#district_id").append(option);
        }
        form.render('select');
      }
    });

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
          url:'<?php echo U('Fysousuo/get_xiaoqu');?>',
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
      //var v=$(this).text(); alert(v);        
     var Uarry=$("#tcontent li");  
     var count=$(this).index();//获取li的下标  
     var Tresult=Uarry.eq(count).text();
     var xiaoquid=Uarry.eq(count).attr('dataid');
     $("#xiaoqu").val(xiaoquid);
     $("#sousuo1").val(Tresult);
     $("#sousuo").val(""); 
     $("#greetings").hide(); 

     })


    

});


</script>


</body>
</html>