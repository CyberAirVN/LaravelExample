<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
    	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    	<meta name="viewport" content="width=device-width, initial-scale=1">
    	<title>Thêm sản phẩm</title>
    	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
	</head>
	<body>
		<div class="container">
			<div class="panel panel-primary" style="margin-top: 30px">
				<div class="panel-heading">Thêm sản phẩm</div>
				<div class="panel-body">
					<div class="row">
						<div class="col-xs-12">
							<form action="{{URL::action('MyController@add') }}" method="post">
								<input type="hidden" name="_token" value="{{ csrf_token() }}">
								<p><input type="text" class="form-control" placeholder="Mã sản phẩm" name="masp"></p>
								<p><input type="text" class="form-control" placeholder="Tên sản phẩm" name="tensp"></p>
								<p><input type="text" class="form-control" placeholder="Loại sản phẩm" name="loaisp"></p>
								<p>
									<span class="input-group">
											<input type="text" class="form-control" placeholder="Đơn giá" aria-describedby="basic-addon2" name="giasp">
											<span class="input-group-addon" id="basic-addon2">VND</span>
									</span>
								</p>
								<p><center><input type="submit" class="form-control btn btn-primary" value="Thực hiện"></center></p>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</body>
</html>