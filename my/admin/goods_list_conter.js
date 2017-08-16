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
  
  $(".switch").click(function(){
  	var goods_id = $(this).parent().parent().find('td').eq(1).html(),
  		this = $(this);

	$.post('admin/admin/get_goods',{goods_id:goods_id},function(res){
		if( res[0].is_on_sale == 1){
	  		this.html("&#x1006;");
	  	}else{  		
	  		this.html("&#xe618;");
	  	}
	},'json');
  	
  })

});