<!doctype html>
<html>

	<head>
		<meta charset="utf-8">
		<title>Layui</title>
		<meta name="renderer" content="webkit">
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
		<meta name="apple-mobile-web-app-status-bar-style" content="black">
		<meta name="apple-mobile-web-app-capable" content="yes">
		<meta name="format-detection" content="telephone=no">
		<link rel="stylesheet" href="<?php echo base_url('layui/css/layui.css') ?>" media="all" />
		<link rel="stylesheet" href="<?php echo base_url('my/admin/css/global.css') ?>" media="all">
		<link rel="stylesheet" type="text/css" href="http://www.jq22.com/jquery/font-awesome.4.6.0.css">
	</head>

	<body>
		<a href="<?php echo site_url('i/add_goods') ?>"><button class="layui-btn layui-btn-warm">添加新商品</button></a>

		<form class="layui-form" action="">
			<div class="layui-form-item">
			    <div class="layui-input-inline">
			      <select name="quiz1">
			        <option value="">所有分类</option>
			        <option value="浙江">浙江省</option>
			      </select>
			    </div>
			    <div class="layui-input-inline">
			      <select name="quiz2">
			        <option value="">所有品牌</option>
			        <option value="杭州">杭州</option>
			      </select>
			    </div>
			    <div class="layui-input-inline">
			      <select name="quiz3">
			        <option value="">全部</option>
			        <option value="精品">精品</option>
			        <option value="新品">新品</option>
			        <option value="热销">热销</option>
			        <option value="特价">特价</option>
			        <option value="全部推荐">全部推荐</option>
			      </select>
			    </div>
			    <div class="layui-input-inline">
			      <select name="quiz4">
			        <option value="">全部</option>
			        <option value="上架">上架</option>
			        <option value="下架">下架</option>
			      </select>
			    </div>
			    <div class="layui-inline">
			      <label class="layui-form-label">商品关键字</label>
			      <div class="layui-input-inline">
			        <select name="modules" lay-verify="required" lay-search="">
			          <option value="">直接选择或搜索选择</option>
			          <option value="1">layer</option>
			          <option value="2">form</option>
			          <option value="3">layim</option>
			          <option value="4">element</option>
			          <option value="5">laytpl</option>
			          <option value="6">upload</option>
			          <option value="7">laydate</option>
			          <option value="8">laypage</option>
			          <option value="9">flow</option>
			          <option value="10">util</option>
			          <option value="11">code</option>
			          <option value="12">tree</option>
			          <option value="13">layedit</option>
			          <option value="14">nav</option>
			          <option value="15">tab</option>
			          <option value="16">table</option>
			          <option value="17">select</option>
			          <option value="18">checkbox</option>
			          <option value="19">switch</option>
			          <option value="20">radio</option>
			        </select>
			      </div>
			    </div>
			    <div class="layui-inline">
			    	<button class="layui-btn">搜索</button>
			    </div>
			</div>
			<?php $this->load->view('admin/libraries/goods_list_conter') ?>
			
		</form>
		<script type="text/javascript" src="<?php echo base_url('layui/layui.js') ?>"></script>
		<script>
		layui.use(['form', 'layedit', 'laydate'], function(){
		  var form = layui.form()
		  ,layer = layui.layer
		  ,layedit = layui.layedit
		  ,laydate = layui.laydate
		  ,$ = layui.jquery;
		  //iframe自适应
			$(window).on('resize', function() {
				var $content = $('.biaoge');
				$content.height($(this).height() - 147);
				$content.find('iframe').each(function() {
					$(this).height($content.height());
				});
			}).resize();
		  //创建一个编辑器
		  var editIndex = layedit.build('LAY_demo_editor');
		 
		  //自定义验证规则
		  form.verify({
		    title: function(value){
		      if(value.length < 5){
		        return '标题至少得5个字符啊';
		      }
		    }
		    ,pass: [/(.+){6,12}$/, '密码必须6到12位']
		    ,content: function(value){
		      layedit.sync(editIndex);
		    }
		  });
		  
		  //监听指定开关
		  form.on('switch(switchTest)', function(data){
		    layer.msg('开关checked：'+ (this.checked ? 'true' : 'false'), {
		      offset: '6px'
		    });
		    layer.tips('温馨提示：请注意开关状态的文字可以随意定义，而不仅仅是ON|OFF', data.othis)
		  });
		  
		  //监听提交
		  form.on('submit(demo1)', function(data){
		    layer.alert(JSON.stringify(data.field), {
		      title: '最终的提交信息'
		    })
		    return false;
		  });
		  
		  
		});
		</script>
	</body>

</html>