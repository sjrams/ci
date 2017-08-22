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
		        <th>虚拟销量</th>
		        <th>操作</th>
		      </tr> 
		    </thead>
		    <tbody>
		      <?php foreach ($goods as $v): ?>
		      <tr>
		        <td><input type="checkbox" name="" lay-skin="primary"></td>
		        <td><?=$v['goods_id'] ?></td>
		        <td><?=$v['goods_name'] ?></td>
		        <td><?=$v['goods_sn'] ?></td>
		        <td><?=$v['shop_price'] ?></td>
		        <td><i class="layui-icon switch" data-i="is_on_sale"><?php if($v['is_on_sale']): ?>&#xe618;<?php else: ?>&#x1006;<?php endif; ?></i></td>
		        <td><i class="layui-icon switch" data-i="is_best"><?php if($v['is_best']): ?>&#xe618;<?php else: ?>&#x1006;<?php endif; ?></i></td>
		        <td><i class="layui-icon switch" data-i="is_new"><?php if($v['is_new']): ?>&#xe618;<?php else: ?>&#x1006;<?php endif; ?></i></td>
		        <td><i class="layui-icon switch" data-i="is_hot"><?php if($v['is_hot']): ?>&#xe618;<?php else: ?>&#x1006;<?php endif; ?></i></td>
		        <td><?=$v['sort_order'] ?></td>
		        <td><?=$v['goods_number'] ?></td>
		        <td><?=$v['virtual_sales'] ?></td>
		        <td>
		        	<a href="" target="_blank" title="浏览"><i class="layui-icon">&#xe615;</i></a>
		        	<a href="<?php echo site_url('admin/admin/add_goods/'.$v['goods_id']) ?>" title="编剧"><i class="layui-icon">&#xe642;</i></a>
		        	<a href="" title="复制"><i class="layui-icon">&#xe60a;</i></a>
		        	<a href="" title="删除"><i class="layui-icon">&#xe640;</i></a>
		        </td>
		      </tr>
		  	  <?php endforeach; ?>
		      
		    </tbody>
		  </table>
		  <div style="display:flex;justify-content:space-between">
		  	<div class="layui-form-item" style="margin-left:1%">
			    <div class="layui-input-inline">
			      <select name="quiz1">
			        <option value="">请选择</option>
			        <option value="回收站">回收站</option>
			        <option value="上架">上架</option>
			        <option value="下架">下架</option>
			        <option value="精品">精品</option>
			        <option value="取消精品">取消精品</option>
			        <option value="新品">新品</option>
			        <option value="取消新品">取消新品</option>
			        <option value="热销">热销</option>
			        <option value="取消热销">取消热销</option>
			        <option value="转移到分类">转移到分类</option>
			      </select>
			    </div>
			    <button class="layui-btn">确定</button>
			  </div>
			<div style="margin-right:1%" class="layui-box layui-laypage layui -laypage-default" id="layui-laypage-0">
			  	<?php echo $links ?>
			</div>
		  </div>
		  
		  
		</div>
		<script type="text/javascript" src="<?php echo base_url('layui/layui.js') ?>"></script>
		<script type="text/javascript" src="<?php echo base_url('my/admin/goods_list_conter.js') ?>"></script>
	</body>
</html>