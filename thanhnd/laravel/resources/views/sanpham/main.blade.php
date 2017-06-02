<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
    	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    	<meta name="viewport" content="width=device-width, initial-scale=1">
    	<title>Quản lý sản phẩm</title>
    	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    	<script type="text/javascript">
    		// Refresh
    		function Refresh() {
    			$.get('sanpham', function(data) {
        			$('body').html(data);    
   				 });
			}
			// form check
			function formcheck(ma, ten, loai, gia, giavnd)
			{
				if(ma == "" || ten == "" || loai == "" || gia == "")
                {
                	alert("Vui lòng điền hết thông tin trước khi thêm sản phẩm. Cảm ơn");
                }
                else if(ma.length > 50) alert("Mã sản phẩm tối đa 50 ký tự.Vui lòng kiểm tra lại.");
                else if(ten.length > 200) alert("Tên sản phẩm nhập tối đa 200 ký tự.Vui lòng kiểm tra lại.");
                else if(loai.length > 100) alert("Loại sản phẩm nhập tối đa 100 ký tự.Vui lòng kiểm tra lại.")
                else if(giavnd < 0 || !$.isNumeric(giavnd)) alert("Giá trị sản phẩm tối thiểu: 0 VND");
            	else return 1;
			}
    		// Sửa sản phẩm
    		$(document).ready(function(){
    			$(".edit_data").click(function(){
        			var trElem = $(this).closest("tr");// grabs the button parent tr element
        			var id = $(trElem).children("td")[0];
        			var suamasp = $(trElem).children("td")[1]; //takes the first td which would have your Id
        			var suatensp = $(trElem).children("td")[2];
        			var sualoaisp = $(trElem).children("td")[3];
        			var suagiasp = $(trElem).children("td")[4];
        			$("#id").attr("value", $(id).text()).blur();
       				$("#suamasp").attr("value", $(suamasp).text()).blur();
       				$("#suatensp").attr("value", $(suatensp).text()).blur();
       				$("#sualoaisp").attr("value", $(sualoaisp).text()).blur();
       				$("#suagiasp").attr("value", $(suagiasp).text()).blur();

    			})
    		});
    		function update_data(){
    			var token = $('#token1').val();
    			var id = $('#id').val();
				var ma = $('#suamasp').val();
				var ten = $('#suatensp').val();
                var loai = $('#sualoaisp').val();
                var gia = $('#suagiasp').val();
                var giavnd = parseFloat($('#suagiasp').val(), 10);
                if(formcheck(ma, ten, loai, gia, giavnd) == 1)
    			{
	    			$.ajax({
		                url: "sanpham/update",
		                type: "post",
		                dateType: "json",
		                data: {
		                	_token: token,
		                	id : id,
		                    suamasp: ma,
		                    suatensp: ten,
		                    sualoaisp: loai,
		                    suagiasp: gia
		                },
		                success: function() {
		                	$('#edit').modal('hide');
		                	Refresh();  
		                },
		                error: function(jqXHR, textStatus, errorThrown) {
	  						console.log(textStatus, errorThrown);
	  						alert("Có lỗi. Vui lòng kiểm tra lại quá trình nhập liệu. Cảm ơn");
						}
		            });
	    		}
    		}
    		// Xóa SP
			$(document).ready(function(){
				$(".delete_data").click(function(){
					var id = $(this).attr('id');
					$.ajax({
						type : "GET",
						url : "sanpham/xoa/" + id,
						success:function(){
							Refresh();
						}
					});
				});
			});
			// POST Data
			function postdata(token, ma, ten, loai, gia, id)
			{
				$.ajax({
	                url: "sanpham/them",
	                type: "post",
	                dateType: "json",
	                data: {
	                	_token: token,
	                    masp: ma,
	                    tensp: ten,
	                    loaisp: loai,
	                    giasp: gia
	                },
	                success: function() {
	                	$('#myModal').modal('hide');
	                    Refresh();
	                },
	                error: function(jqXHR, textStatus, errorThrown) {
  						console.log(textStatus, errorThrown);
  						alert("Có lỗi. Vui lòng kiểm tra lại quá trình nhập liệu. Cảm ơn");
					}
	            });
			}

			// Thêm mới sản phẩm
			function addnew(){
				var token = $('#token').val();
				var ma = $('#masp').val();
				var ten = $('#tensp').val();
                var loai = $('#loaisp').val();
                var gia = $('#giasp').val();
                var giavnd = parseFloat($('#giasp').val(), 10);
                if(formcheck(ma, ten, loai, gia, giavnd) == 1)
					postdata(token, ma, ten, loai, gia);
			}
		</script>
	</head>
	<body>
		<div class="container">
			<div class="panel panel-primary" style="margin-top: 30px">
				<div class="panel-heading">Danh mục sản phẩm</div>
				<div class="panel-body">
					<div class="row">
						<div class="col-xs-12">
							<p>Các bạn có thể sửa, thêm, xóa sản phẩm tại đây</p>
							<p><div class="btn-group">
								<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">Thêm</button>
							</div></p>
						</div>
					</div>
				</div>
				<table class="table">
					<tr>
						<td>#</td>
						<td>Mã sản phẩm</td>
						<td>Tên sản phẩm</td>
						<td>Loại sản phẩm</td>
						<td>Đơn giá</td>
						<td>Tiền tệ</td>
						<td>Sửa</td>
						<td>Xóa</td>
					</tr>
					<?php
						foreach($data as $sanpham){
					?>
					<tr>
						<td><?php echo $sanpham['id']; ?></td>
						<td><?php echo $sanpham['masp']; ?></td>
						<td><?php echo $sanpham['tensp'] ?></td>
						<td><?php echo $sanpham['loaisp'] ?></td>
						<td><?php echo $sanpham['giasp'] ?></td>
						<td>VND</td>
						<td>
							<button class="btn btn-primary btn-xs edit_data"  data-toggle="modal" data-target="#edit">
							<span class="glyphicon glyphicon-pencil"></span>
							</button>
						</td>
						<td><button class="btn btn-danger btn-xs delete_data" id="<?php echo $sanpham['id']; ?>">
							<span class="glyphicon glyphicon-trash"></span>
						</button></td>
					</tr>
					<?php } ?>
				</table>
			</div>
		</div>


	  <!-- Modal Thêm sản phẩm -->
		<div class="modal fade" id="myModal" role="dialog">
		    <div class="modal-dialog">

		        <!-- Modal content Thêm sản phẩm-->
		        <div class="modal-content">
		            <div class="modal-header">
		                <button type="button" class="close" data-dismiss="modal">&times;</button>
		                <h4 class="modal-title">Thêm sản phẩm</h4>
		            </div>
		            <div class="modal-body">
						<input type="hidden" name="_token" id="token" value="{{ csrf_token() }}">
						<p><input type="text" class="form-control" placeholder="Mã sản phẩm" name="masp" id="masp"></p>
						<p><input type="text" class="form-control" placeholder="Tên sản phẩm" name="tensp" id="tensp"></p>
						<p><input type="text" class="form-control" placeholder="Loại sản phẩm" name="loaisp" id="loaisp"></p>
						<p>
							<span class="input-group">
							<input type="text" class="form-control" placeholder="Đơn giá" aria-describedby="basic-addon2" name="giasp" id="giasp">
							<span class="input-group-addon" id="basic-addon2">VND</span>
							</span>
						</p>					
		            </div>
		            <div class="modal-footer">
		                <p><center><input type="submit" class="form-control btn btn-primary" value="Thực hiện" onclick="addnew()"></center></p>
		            </div>
		        </div>

		    </div>
		</div>
		<!-- Modal Sửa SP -->
		<div class="modal fade" id="edit" role="dialog">
		    <div class="modal-dialog">

		        <!-- Modal content Sửa SP-->
		        <div class="modal-content">
		            <div class="modal-header">
		                <button type="button" class="close" data-dismiss="modal">&times;</button>
		                <h4 class="modal-title">Sửa sản phẩm</h4>
		            </div>
		            <div class="modal-body">
						<input type="hidden" name="_token" id="token1" value="{{ csrf_token() }}">
						<input type="hidden" name="id"  id="id" value="">
						<p><input type="text" class="form-control" name="suamasp" id="suamasp" value=""></p>
						<p><input type="text" class="form-control" name="suatensp" id="suatensp" value=""></p>
						<p><input type="text" class="form-control" name="sualoaisp" id="sualoaisp" value=""></p>
						<p>
							<span class="input-group">
							<input type="text" class="form-control" aria-describedby="basic-addon2" name="suagiasp" id="suagiasp" value="">
							<span class="input-group-addon" id="basic-addon2">VND</span>
							</span>
						</p>					
		            </div>
		            <div class="modal-footer">
		                <p><center><input type="submit" class="form-control btn btn-primary" id="closemodal" value="Cập nhật" onclick="update_data()"></center></p>
		            </div>
		        </div>

		    </div>
		</div>
	</body>
</html>