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
</head>
<body>
 <div style="position:fixed;top:0;width: 100%; border-top-style: solid;border-top-width: 2px;border-top-color: #009688;"></div> 
<fieldset class="layui-elem-field layui-field-title " style="margin-top: 20px;display: none;">
  <legend>房源写跟进</legend>
</fieldset>
 
<form class="layui-form" action="/kaidandashi/index.php/home/fyneirong/genjinHandle" method="get" id="form-admin-node-add" style="margin-top: 20px;>
  <input type="hidden" name="gongsiid" id="" value="<?php echo ($_SESSION['gongsiid']); ?>">
  <input type="hidden" name="fybh" id="" value="<?php echo ($_GET['fybh']); ?>">
  <input type="hidden" name="fyid" id="" value="<?php echo ($_GET['fyid']); ?>">
  <input type="hidden" name="uid" id="" value="<?php echo ($_GET['uid']); ?>">
  <div class="layui-inline">
    <label class="layui-form-label">跟进方式</label>
    <div class="layui-input-block">
      <select name="genjinfs" lay-filter="aihao" lay-verify="required">
        <?php if(is_array($genjinfs)): foreach($genjinfs as $key=>$pz): ?><option ></option>
			<option value="<?php echo ($pz["lxid"]); ?>"><?php echo ($pz["lxming"]); ?></option><?php endforeach; endif; ?>
      </select>
    </div>
  </div>
  	
  <br><br>
  
  <div class="layui-form-item layui-form-text">
    <label class="layui-form-label">跟进内容</label>
    <div class="layui-input-block">
      <textarea placeholder="请输入内容" name="neirong" class="layui-textarea" style="width: 400px;height: 180px;" lay-verify="required"></textarea>
    </div>
  </div>
  <div style="height: 50px;"></div>
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
    <div class="layui-input-block" style="margin-left: 0px;">
      <button class="layui-btn layui-btn-radius" lay-submit="" lay-filter="demo1">立即提交</button>
      <button type="reset" class="layui-btn layui-btn-radius layui-btn-primary">重置</button>
    </div>
  </div>
</form>

 <script type="text/javascript" src="/kaidandashi/Public/lib/jquery/1.9.1/jquery.min.js"></script> 
<script type="text/javascript" src="/kaidandashi/Public/lib/jquery.validation/1.14.0/validate-methods.js"></script>
<script src="/kaidandashi/Public/lib/layui/layui.js" charset="utf-8"></script>
<!-- 注意：如果你直接复制所有代码到本地，上述js路径需要改成你本地的 -->
<script>
    layui.use(['form', 'layedit', 'laydate'], function(){
        var form = layui.form()
        ,layer = layui.layer
        ,layedit = layui.layedit
        ,laydate = layui.laydate;
        //监听提交
        form.on('submit(demo1)', function(data){
            parent.layer.msg('更新成功',{time:3600});
            setTimeout("parent.location.reload();",{time:3600});
        });
  

 
  

  //监听提交
  
  
  
});

$("#form-admin-node-add").validate({
    rules:{
      roleName:{
        required:true,
      },
    },
    onkeyup:false,
    focusCleanup:true,
    success:"valid",
    submitHandler:function(form){
      $(form).ajaxSubmit();
      var index = parent.layer.getFrameIndex(window.name);
      parent.location.reload();
      parent.layer.msg('添加成功');
      parent.layer.close(index);
    }
  });
</script>

</body>
</html>