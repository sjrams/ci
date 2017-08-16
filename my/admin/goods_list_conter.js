layui.use('form', function(){
  var $ = layui.jquery, form = layui.form();
  $(".switch").css("cursor","pointer");
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
  		  thiss = $(this),
        data = $(this).data('i');

	$.post('get_goods',{goods_id:goods_id,data:data},function(res){
    console.log(res)
    var obj = eval(res);
		if( obj[0][data] == 1){
	  		thiss.html("&#x1006;");
	  	}else{  		
	  		thiss.html("&#xe618;");
	  	}
	},'json');
  	
  })

});