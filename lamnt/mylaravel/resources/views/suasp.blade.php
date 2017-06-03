@extends('main')
@section('title')
Sua-sp
@endsection
@section('content')
<div class="col-md-4">
<form method="post" action="" id="insertform" enctype="multipart/form-data">
	<input type="hidden" name="_token" value="{!! csrf_token() !!}">
	<h2 class="btn-lg btn-primary">Sửa sản phẩm</h2>
	<div><label>Mã sản phẩm :<input type="text" name="masp" value="{!!old('masp',isset($sanpham)?$sanpham['ma_sp']:null)!!}" id="ma_sp"  class="form-control"></label></div>
	<div><label>Tên sản phẩm :<input type="text" name="tensp" value="{!!old('tensp',isset($sanpham)?$sanpham['ten_sp']:null)!!}" id="ten_sp"  class="form-control"></label></div>	
	<div><label>Mô tả sản phẩm :<textarea name="motasp" class="form-control">{!!old('motasp',isset($sanpham)?$sanpham['mo_ta_sp']:null)!!}</textarea></label></div>
	<div><label>Số lượng sản phẩm :<input type="text" name="soluongsp" value="{!!old('so_luongsp',isset($sanpham)?$sanpham['so_luong_sp']:null)!!}" id="so_luong_sp"  class="form-control">	</label></div>
	<div><label>Hình :<input type="file" name="hinh" value="{!!old('hinh',isset($sanpham)?$sanpham['hinh_sp']:null)!!}" id="hinh"  class="form-control"></label></div>
	<button class="btn btn-lg btn-primary">Update</button>	
</form>
@include('validateerror')
 @include('dangxuat')
</div>
<div class="col-md-8">
@include('danhsachsp')
</div>
@endsection
