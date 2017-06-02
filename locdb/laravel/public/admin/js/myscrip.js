
$("div.alert").delay(3000).slideUp();

function xacnhanxoa(msg){
	if (window.confirm(msg))
		return true;
	else
	return false;
}


$('.delReview').click(function(){
	if (!window.confirm('Ban co chac chan muon xoa?'))
		return false;
	var id = $(this).attr('value');
	$.ajax({
		type: "GET",
		url:"/public/admin/cate/delete/"+id,
		data: "id="+id,
	    success:function(result){
	    	$($('#dataTables-example').find('tbody')).html(result);
		    	$('.delReview').click(function(){
					if (!window.confirm('Ban co chac chan muon xoa?'))
						return false;
					var id = $(this).attr('value');
					$.ajax({
						type: "GET",
						url:"/public/admin/cate/delete/"+id,
						data: "id="+id,
					    success:function(result){
					    	$($('#dataTables-example').find('tbody')).html(result);
					        // $("html").(result);
					    }
				});
});
	        // $("html").(result);
	    }
	});
});