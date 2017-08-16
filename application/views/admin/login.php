<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
  <title>智能后台</title>
  <link rel="stylesheet" href="<?php echo base_url('layui/css/layui.css'); ?>">
</head>
<body>

<!-- 你的HTML代码 -->
<div style="width:30%;margin:10% auto">
  <form class="layui-form layui-form-pane" action="admin/login/login_in" method="post">
    <div class="layui-form-item">
      <label class="layui-form-label">用户名</label>
      <div class="layui-input-block">
        <input type="text" name="username" required lay-verify="required" placeholder="请输入用户名" autocomplete="off" class="layui-input">
      </div>
    </div>
    <div class="layui-form-item">
      <label class="layui-form-label">密码框</label>
      <div class="layui-input-block">
        <input type="password" name="password" required  lay-verify="required" placeholder="请输入密码" autocomplete="off" class="layui-input">
      </div>
    </div>
    <div class="layui-form-item">
      <label class="layui-form-label">验证码</label>
      <div class="layui-input-inline">
        <input type="text" name="code" required lay-verify="required" placeholder="请输入验证码" autocomplete="off" class="layui-input">
      </div>
      <div class="layui-form-mid layui-word-aux" style="padding: 0">
        <p id="captcha-image"></p>
      </div>
    </div>
    <div class="layui-form-item">
      <label class="layui-form-label">记住密码</label>
      <div class="layui-input-block">
        <input type="checkbox" checked="" name="open" lay-skin="switch" lay-filter="switchTest" lay-text="ON|OFF">
      </div>
    </div>
    <div class="layui-form-item">
      <div class="layui-input-block">
        <button class="layui-btn" lay-submit lay-filter="formDemo">立即提交</button>
        <button type="reset" class="layui-btn layui-btn-primary">重置</button>
        <input type="hidden" name="user_id" id="user_id" value="" />
      </div>
    </div>
  </form>
</div> 
<script src="http://cdn.bootcss.com/blueimp-md5/1.1.0/js/md5.min.js"></script>
<script src="<?php echo base_url('layui/layui.js');?>"></script>
<script type="text/javascript">
layui.config({
  base: "<?php echo base_url('my/admin/') ?>" //你的模块目录
}).use('login'); //加载入口
</script>
  
</body>
</html>