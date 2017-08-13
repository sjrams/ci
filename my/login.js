/**
  项目JS主入口
  以依赖Layui的layer和form模块为例
**/    
layui.define(['layer', 'form'], function(exports){
	var layer = layui.layer,
		form = layui.form(),
		$ = layui.jquery;
	//验证码点击刷新
    $('#captcha-image').on("click",function(){
    	$.get("admin/login/get_captcha", function(data){
	        $('#captcha-image').html(data);
	    });
    });
    $('#captcha-image').click();

	//监听提交
	form.on('submit(formDemo)', function(data){
		var result;
		$.ajaxSettings.async = false;
		$.post('admin/login/get_login',{username:data.field.username},function(res){
			result = res;
		},'json');
		$.ajaxSettings.async = true;
		console.log(result)

		if(result.error == 'error' || data.field.username != result[0].name || md5(data.field.password) != result[0].password){
			layer.msg('用户名或者密码错误!');
			return false;
		}
		if(result.code != data.field.code.toUpperCase()){
			layer.msg('验证码错误!');
			return false;
		}
		$('#aid').val(result[0].aid);
		
	});
  
	exports('login', {}); //注意，这里是模块输出的核心，模块名必须和use时的模块名一致
});