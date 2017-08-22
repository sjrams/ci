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
		<div style="display:flex">
			<a href="<?php echo site_url('i/goods_list') ?>"><button class="layui-btn layui-btn-warm">商品列表</button></a>
			<fieldset class="layui-elem-field layui-field-title" style="margin-top: 20px;">
			  <legend><?php echo $type ?></legend>
			</fieldset>
		</div>
		<form class="layui-form layui-form-pane" action="<?php echo site_url('admin/deal_with/add_goods') ?>" method="post">
		<div class="layui-tab layui-tab-card">		  
		  <ul class="layui-tab-title">
		    <li class="layui-this">通用信息</li>
		    <li>详细描述</li>
		    <li>其他信息</li>
		    <li>商品属性</li>
		    <li>商品相册</li>
		    <li>关联商品</li>
		    <li>配件</li>
		    <li>关联文章</li>
		  </ul>
		  <!--通用信息star-->
		  <div class="layui-tab-content">		  	
	    	<div class="layui-tab-item layui-show">
			  	<div class="layui-form-item">
				    <label class="layui-form-label">商品名称</label>
				    <div class="layui-input-block">
				      <input type="text" name="goods_name" autocomplete="off" placeholder="请输入商品名称" class="layui-input" lay-verify="required|title" value="<?php if($type == '编辑商品信息') echo $goods[0]['goods_name'] ?>">
				    </div>
			  	</div>
			  	<div class="layui-form-item">
				    <label class="layui-form-label">商品货号</label>
				    <div class="layui-input-inline">
				      <input type="text" name="goods_sn" autocomplete="off" placeholder="可空，系统生成唯一货号" class="layui-input" value="<?php if($type == '编辑商品信息') echo $goods[0]['goods_sn'] ?>">
				    </div>
			  	</div>
			  	<div class="layui-form-item">
				    <div class="layui-inline">
				      <label class="layui-form-label">商品分类</label>
				      <div class="layui-input-inline">
				        <select name="cat_id" lay-filter="aihao">
				          <option value="">请选择商品分类</option>
				          <?php foreach ($cat_list as $v): ?>
					          <optgroup label="<?php echo $v['cat_name'] ?>">
					          	<option <?php if($type == '编辑商品信息') if($goods[0]['cat_id'] == $v['cat_id']) echo "selected" ?> value="<?php echo $v['cat_id'] ?>"><?php echo $v['cat_name'] ?></option>
					          	<?php foreach ($v['has_children'] as $val): ?>
					            	<option <?php if($type == '编辑商品信息') if($goods[0]['cat_id'] == $val['cat_id']) echo "selected" ?> value="<?php echo $val['cat_id'] ?>" ><?php echo $val['cat_name'] ?></option>
					            <?php endforeach; ?>
					          </optgroup>
				      	  <?php endforeach; ?>
				        </select>
				      </div>
				    </div>
			  	</div>
			  	<div class="layui-form-item">
				    <label class="layui-form-label">商品品牌</label>
				    <div class="layui-input-inline">
				      <select name="goods_brand" lay-filter="goods_brand">
				        <option value="">请选择品牌</option>
				        <?php foreach ($brand as $v): ?>
				        	<option <?php if($type == '编辑商品信息') if($goods[0]['brand_id'] == $v['brand_id']) echo "selected" ?> value="<?php echo $v['brand_id'] ?>"><?php echo $v['brand_name'] ?></option>
				        <?php endforeach; ?>
				      </select>
				    </div>
			  	</div>
			  	<div class="layui-form-item">
				    <label class="layui-form-label">本店售价</label>
				    <div class="layui-input-inline">
				      <input type="text" name="shop_price" autocomplete="off" class="layui-input" value="<?php if($type == '编辑商品信息') echo $goods[0]['shop_price'] ?>">
				    </div>
			  	</div>
		 	 	<div class="layui-form-item">
				    <label class="layui-form-label">市场售价</label>
				    <div class="layui-input-inline">
				      <input type="text" name="market_price" autocomplete="off" class="layui-input" value="<?php if($type == '编辑商品信息') echo $goods[0]['market_price'] ?>">
				    </div>
			  	</div>
			  	<div class="layui-form-item">
				    <label class="layui-form-label">虚拟销量</label>
				    <div class="layui-input-inline">
				      <input type="text" name="virtual_sales" autocomplete="off" class="layui-input" value="<?php if($type == '编辑商品信息') echo $goods[0]['virtual_sales'] ?>">
				    </div>
			  	</div>
			  	<div class="layui-form-item">
				    <label class="layui-form-label">积分金额</label>
				    <div class="layui-input-inline">
				      <input type="text" name="integral" autocomplete="off" class="layui-input" placeholder="最大使用积分金额" value="<?php if($type == '编辑商品信息') echo $goods[0]['integral'] ?>">
				    </div>
			  	</div>
			  	<div class="layui-form-item">
				    <label class="layui-form-label">促销价</label>
				    <div class="layui-input-inline">
				      <input type="text" id="promote_1" name="promote_price" autocomplete="off" class="layui-input" value="<?php if($type == '编辑商品信息') echo $goods[0]['promote_price'] ?>">
				    </div>
			  	</div>
			  	<div style="display:flex;margin-bottom:15px">
				  <div class="layui-inline">
				      <label class="layui-form-label">促销日期</label>
				      <div class="layui-input-inline">
				        <input type="text" name="promote_start_date" id="promote_start_date" lay-verify="date" autocomplete="off" class="layui-input" onclick="layui.laydate({elem: this})" value="<?php if($type == '编辑商品信息') echo $goods[0]['promote_start_date'] ?>">
				      </div>
				  	  -
				      <div class="layui-input-inline">
				        <input type="text" name="promote_end_date" id="promote_end_date" lay-verify="date" autocomplete="off" class="layui-input" onclick="layui.laydate({elem: this})" value="<?php if($type == '编辑商品信息') echo $goods[0]['promote_end_date'] ?>">
				      </div>
				  </div>
			 	</div>
		    	<div style="display:flex">
		    		<div class="layui-form-item">
					    <label class="layui-form-label">商品缩略图</label>
					    <div class="layui-input-inline">
					      <input type="text" name="goods_img_describe" autocomplete="off" class="layui-input" placeholder="图片描述">
					    </div>
					</div>
					<div class="layui-box layui-upload-button" style="margin-right:10px">
						<input type="file" name="goods_img" class="layui-upload-file">
						<span class="layui-upload-icon"><i class="layui-icon">&#xe608;</i>上传图片</span>
					</div>
					<div class="layui-form-item">
					    <div class="layui-input-inline">
					      <input type="text" name="goods_img_url" autocomplete="off" class="layui-input" placeholder="或者填外部链接">
					    </div>
					</div>
		    	</div>
		    </div>
		    <!--通用信息end-->
		    <!--详细描述star-->
		    <div class="layui-tab-item">
		    	<div class="layui-form-item layui-form-text">
				    <label class="layui-form-label">编辑器</label>
				    <div class="layui-input-block">
				      <textarea class="layui-textarea layui-hide" name="goods_content" lay-verify="content" id="LAY_demo_editor" value="<?php if($type == '编辑商品信息') echo $goods[0]['goods_desc'] ?>"></textarea>
				    </div>
				</div>
		    </div>
		    <!--详细描述end-->
		    <!--其他信息star-->
		    <div class="layui-tab-item">
		    	<div style="display:flex">
			    	<div class="layui-form-item">
					    <label class="layui-form-label">商品重量</label>
					    <div class="layui-input-inline">
					      <input type="text" name="goods_weight" autocomplete="off" class="layui-input" value="<?php if($type == '编辑商品信息') echo $goods[0]['goods_weight'] ?>">
					    </div>
					</div>
					<div class="layui-form-item">
					    <div class="layui-input-inline">
					      <select name="weight_unit" lay-filter="aihao">
					        <option value="0">克</option>
					        <option value="1">千克</option>
					      </select>
					    </div>
					</div>
				</div>
				<div class="layui-form-item">
				    <label class="layui-form-label">商品库存</label>
				    <div class="layui-input-inline">
				      <input type="text" name="goods_number" autocomplete="off" class="layui-input" value="<?php if($type == '编辑商品信息') echo $goods[0]['goods_number'] ?>">
				    </div>
				</div>
				<div class="layui-form-item">
				    <label class="layui-form-label">库存警告数</label>
				    <div class="layui-input-inline">
				      <input type="text" name="warn_number" autocomplete="off" class="layui-input" value="<?php if($type == '编辑商品信息') echo $goods[0]['warn_number'] ?>">
				    </div>
				</div>
				<div class="layui-form-item">
				    <label class="layui-form-label">状态选择</label>
				    <div class="layui-input-block">
				      <input <?php if($type == '编辑商品信息') if($goods[0]['is_best']) echo "checked" ?> type="checkbox" name="is_best" title="精品">
				      <input <?php if($type == '编辑商品信息'){if($goods[0]['is_new']) echo "checked";}else{echo "checked";} ?> type="checkbox" name="is_new" title="新品" >
				      <input <?php if($type == '编辑商品信息') if($goods[0]['is_hot']) echo "checked" ?> type="checkbox" name="is_hot" title="热销" >
				      <input <?php if($type == '编辑商品信息'){if($goods[0]['is_on_sale']) echo "checked";}else{echo "checked";} ?> type="checkbox" name="is_on_sale" title="上架" >
				      <input <?php if($type == '编辑商品信息'){if($goods[0]['is_alone_sale']) echo "checked";}else{echo "checked";} ?> type="checkbox" name="is_alone_sale" title="允许销售" >
				      <input <?php if($type == '编辑商品信息') if($goods[0]['is_shipping']) echo "checked" ?> type="checkbox" name="is_shipping" title="包邮" >
				    </div>
				</div>
				<div class="layui-form-item">
				    <label class="layui-form-label">商品关键词</label>
				    <div class="layui-input-block">
				      <input type="text" name="keywords" autocomplete="off" class="layui-input" placeholder="用空格分隔" value="<?php if($type == '编辑商品信息') echo $goods[0]['keywords'] ?>">
				    </div>
				</div>
				<div class="layui-form-item layui-form-text">
				    <label class="layui-form-label">商品简单描述</label>
				    <div class="layui-input-block">
				      <textarea name="goods_brief" placeholder="请输入内容" class="layui-textarea"></textarea value="<?php if($type == '编辑商品信息') echo $goods[0]['goods_brief'] ?>">
				    </div>
				</div>
				<div class="layui-form-item layui-form-text">
				    <label class="layui-form-label">商家备注</label>
				    <div class="layui-input-block">
				      <textarea name="seller_note" placeholder="仅商家自己看的信息" class="layui-textarea" value="<?php if($type == '编辑商品信息') echo $goods[0]['seller_note'] ?>"></textarea>
				    </div>
				</div>
		    </div>
		    <!--其他信息end-->
		    <!--商品属性star-->
		    <div class="layui-tab-item">
		    	<div class="layui-form-item">
				    <label class="layui-form-label">商品类型</label>
				    <div class="layui-input-inline">
				      <select name="goods_type" lay-filter="goods_type">
				        <option value="">请选择商品类型</option>
				        <?php foreach ($goods_type as $v): ?>
				        	<option <?php if($type == '编辑商品信息') if($goods[0]['goods_type'] == $v['cat_id']) echo "selected" ?> value="<?php echo $v['cat_id'] ?>"><?php echo $v['cat_name'] ?></option>
				    	<?php endforeach; ?>				     
				      </select>
				    </div>
				</div>
		    </div>
		    <!--商品属性end-->
		    <!--商品相册star-->
		    <div class="layui-tab-item">
		    	<div style="display:flex">
		    		<div class="layui-btn-group">
		    			<button class="layui-btn">增加</button>
		    		</div>
		    		<div class="layui-form-item">
					    <label class="layui-form-label">图片描述</label>
					    <div class="layui-input-inline">
					      <input type="text" name="img_desc[]" autocomplete="off" class="layui-input">
					    </div>
					</div>
					<div class="layui-box layui-upload-button" style="margin-right:10px">
						<input type="file" name="img_url[]" class="layui-upload-file">
						<span class="layui-upload-icon"><i class="layui-icon">&#xe608;</i>上传图片
						</span>
					</div>
					<div class="layui-form-item">
					    <div class="layui-input-block">
					      <input type="text" name="img_file[]" autocomplete="off" class="layui-input" placeholder="或者填外部链接">
					    </div>
					</div>
		    	</div>
		    </div>
		    <!--商品相册end-->
		    <!--关联商品star-->
		    <div class="layui-tab-item">
		    	
		    </div>
		    <!--关联商品end-->
		    <!--配件star-->
		    <div class="layui-tab-item">7</div>
		    <!--配件end-->
		    <!--关联文章star-->
		    <div class="layui-tab-item">8</div>
		    <!--关联文章end-->
		    <div class="layui-form-item">
			    <div class="layui-input-block">
			      <button class="layui-btn" lay-submit lay-filter="demo1">立即提交</button>
			      <button type="reset" class="layui-btn layui-btn-primary">重置</button>
			    </div>
			</div>
		  </div>		  
		</div>
		</form>
		<script type="text/javascript" src="<?php echo base_url('layui/layui.js') ?>"></script>
		<script type="text/javascript" src="<?php echo base_url('my/admin/add_goods.js') ?>"></script>
	</body>
</html>