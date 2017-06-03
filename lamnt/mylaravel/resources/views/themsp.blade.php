@extends('main')
@section('title')
them-sp
@endsection
@section('content')

<div class="col-md-4">
<form method="post" action="{!! route('sanpham/postthemsp') !!}" id="insertform" enctype="multipart/form-data">
	<input type="hidden" name="_token" value="{!! csrf_token() !!}">
	<h2 class="btn-lg btn-primary">Thêm sản phẩm</h2>
	<div><label>Mã sản phẩm :<input type="text" name="masp" id="ma_sp"  class="form-control"></label></div>
	<div><label>Tên sản phẩm :<input type="text" name="tensp" id="ten_sp"  class="form-control"></label></div>	
	<div><label>Mô tả sản phẩm :<textarea name="motasp" class="form-control"></textarea></label></div>
	<div><label>Số lượng sản phẩm :<input type="text" name="soluongsp" id="so_luong_sp"  class="form-control"></label></div>
	<div><label>Hình: <input type="file" name="hinh" id="hinh"></label></div>
	
	<button class="btn btn-lg btn-primary">Thêm</button>	
</form>
@include('validateerror')
 @include('dangxuat')
</div>
<div class="col-md-8">
@include('danhsachsp')
</div>
@endsection
