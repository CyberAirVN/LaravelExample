@extends('main')
@section('title')
login
@endsection

<body style="background-image: url({{Asset('assets/image/bg.jpg')}});">
     <div class="container">
    <div class ="row"  style="background-color:#58ACFA ">
      <div class="header">
        <div class="col-md-6">
           <img src="{{Asset('assets/image/name.png')}}" width=100%; style="width: 250px;height: 42px;    margin-top: 10px;">
        </div>
<!--Đăng nhập-->
          <div class="col-md-6" id="login" style="margin-top: 10px;">
    <form class="form-inline" method="post" action=""  style=" margin-right:10%;">
    <input type="hidden" name="_token" value="{!! csrf_token() !!}">
  <div class="form-group" >
    <label class="sr-only" for="exampleInputEmail2">Tên Đang Nhập</label>
    <input type="text" class="form-control" name="username"  placeholder="Tên đăng nhập">
  </div>
  <div class="form-group">
    <label class="sr-only" for="exampleInputPassword2">Password</label>
    <input type="password" class="form-control" name="password" placeholder="Mật Khẩu">
  </div>
  <button class="btn btn-default">Đăng nhập</button>
</form>

</div>
</div>
</div>
</div>
<!--Đăng nhập-->
<div class="container">
  <div class="row">
<!--Đăng Kí-->
    <div class="col-md-6">

      </div>
    <div class="col-md-6">
<form  action="" method="post" style= " margin-top: 55px;" id="login">
<input type="hidden" name="_token" value="{!! csrf_token() !!}">
  <h2>HÃY ĐĂNG KÍ TẠI ĐÂY</h2>
  <h3>Miễn phí và sẽ luôn như vậy</h3>
  <div class="form-group">
    <label for="exampleInputEmail1">Tên Đăng Nhập</label>
    <input type="text" class="form-control" name="username" id="exampleInputEmail1" placeholder="Tên đăng nhập">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Mật Khẩu</label>
    <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Nhập mật khẩu">
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Nhập Lại Mật Khẩu</label>
    <input type="password" class="form-control" name="re-password" id="exampleInputEmail1" placeholder="Nhập lại mật khẩu">
  </div>
  <button class="btn btn-default">Tạo tài khoản</button>
</form>
@if (count($errors)>0)
<div class="alert alert-danger" >
  <ul>
    @foreach($errors->all() as $error)
    <li>{!! $error !!}</li>
    @endforeach
  </ul>
</div>
@endif
</div>
</div>
</div>
<!--body-->
<!--footer-->
<footer >

</footer>




    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>