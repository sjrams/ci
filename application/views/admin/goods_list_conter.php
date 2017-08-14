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
	</head>

	<body>
		<div class="layui-form">
		  <table class="layui-table">
		    <colgroup>
		      <col width="50">
		      <col >
		      <col >
		      <col >
		      <col>
		    </colgroup>
		    <thead>
		      <tr>
		        <th><input type="checkbox" name="" lay-skin="primary" lay-filter="allChoose"></th>
		        <th>编号<i class="layui-icon" style="font-size: 15px;">&#xe625;</i></th>
		        <th>商品名称</th>
		        <th>货号</th>
		        <th>价格</th>
		        <th>上架</th>
		        <th>精品</th>
		        <th>新品</th>
		        <th>热销</th>
		        <th>推荐排序</th>
		        <th>库存</th>
		        <th>操作</th>
		      </tr> 
		    </thead>
		    <tbody>
		      <tr>
		        <td><input type="checkbox" name="" lay-skin="primary"></td>
		        <td>善品</td>
		        <td>汉族</td>
		        <td>1989-10-14</td>
		        <td>人生似修行</td>
		        <td>人生似修行</td>
		        <td>人生似修行</td>
		        <td>人生似修行</td>
		        <td>人生似修行</td>
		        <td>人生似修行</td>
		        <td>人生似修行</td>
		        <td>人生似修行</td>
		      </tr>
		      <tr>
		        <td><input type="checkbox" name="" lay-skin="primary"></td>
		        <td>张爱玲</td>
		        <td>汉族</td>
		        <td>1920-09-30</td>
		        <td>于千万人之中遇见你所遇见的人，于千万年之中，时间的无涯的荒野里…</td>
		      </tr>
		      <tr>
		        <td><input type="checkbox" name="" lay-skin="primary"></td>
		        <td>Helen Keller</td>
		        <td>拉丁美裔</td>
		        <td>1880-06-27</td>
		        <td> Life is either a daring adventure or nothing.</td>
		      </tr>
		      <tr>
		        <td><input type="checkbox" name="" lay-skin="primary"></td>
		        <td>岳飞</td>
		        <td>汉族</td>
		        <td>1103-北宋崇宁二年</td>
		        <td>教科书再滥改，也抹不去“民族英雄”的事实</td>
		      </tr>
		      <tr>
		        <td><input type="checkbox" name="" lay-skin="primary"></td>
		        <td>孟子</td>
		        <td>华夏族（汉族）</td>
		        <td>公元前-372年</td>
		        <td>猿强，则国强。国强，则猿更强！ </td>
		      </tr>
		    </tbody>
		  </table>
		</div>
		<script type="text/javascript" src="<?php echo base_url('layui/layui.js') ?>"></script>
		<script>
		layui.use('form', function(){
		  var $ = layui.jquery, form = layui.form();
		  
		  //全选
		  form.on('checkbox(allChoose)', function(data){
		    var child = $(data.elem).parents('table').find('tbody input[type="checkbox"]');
		    child.each(function(index, item){
		      item.checked = data.elem.checked;
		    });
		    form.render('checkbox');
		  });
		  
		});
		</script>
	</body>
</html>