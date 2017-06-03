@include('flashmessage')
<h2 class="btn-lg btn-primary">Danh sach sản phẩm</h2>

<!-- Table -->
<table class="table">
<tr>
    <td>STT</td>
	<td>Mã sản phẩm</td>
	<td>Tên sản phẩm</td>
	<td>Mô tả sản phẩm</td>
	<td>Số lượng sản phẩm</td>
	<td>Hình Ảnh</td>
	<td>Sửa sản phẩm</td>
	<td>Xóa sản phẩm</td>

</tr>
	<?php $stt=0;?>
	@foreach($data as $sp)
	<?php $stt=$stt+1;?>
<tr>
	<td>{!! $stt !!}</td>
	<td>{!! $sp["ma_sp"] !!}</td>
	<td>{!! $sp["ten_sp"] !!}</td>
	<td>{!! $sp["mo_ta_sp"] !!}</td>
	<td>{!! $sp["so_luong_sp"] !!}</td>
	<td><img width="100px" src="{{Asset('upload')}}/{{$sp->hinh_sp}}"></td>
	<td class="text-center" id="delete"><i class="glyphicon glyphicon-trash"></i><a href="{!! URL::route('sanpham/getxoasp',$sp['id']) !!}">Delete</a></td>
	<td class="text-center" ><i class="glyphicon glyphicon-pencil"></i><a class="edit" href="{!! URL::route('sanpham/getsuasp',$sp['id']) !!}">Edit</a></td>
	
</tr>

@endforeach
</table>
