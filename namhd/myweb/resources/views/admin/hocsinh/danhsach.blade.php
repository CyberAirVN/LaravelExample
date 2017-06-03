<!DOCTYPE html>
<html lang="vi">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Danh Sách Học Sinh</title>
    <link type="text/css" href="{{Asset('template/css/bootstrap.min.css')}}" rel="stylesheet">
    <style type="text/css">
      .btn {padding:0px;font-weight:bold}
    </style>
    <script type="text/javascript">
        function xacnhanxoa(msg) {
            if (window.confirm(msg)) {
                return true;
            }
            return false;
        }
    </script>
  </head>
  <body>
  <div>
    <nav class="navbar navbar-default">
        <div class="container-fluid">
          <!-- Brand and toggle get grouped for better mobile display -->
          <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#">Học Laravel 5.4</a>
          </div>
          <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav navbar-right">

            @if(!isset($nguoidung))
              
                 <li>
                    <a><span class="glyphicon glyphicon-user"></span>{{-- {!!$nguoidung->username!!} --}}</a></li>
                <li><a href="dangxuat">Đăng Xuất</a></li> 
              
            @endif


            </ul>
          </div>
        </div>
</nav>
  </div>
    <div class="container" style="margin-top:20px">
      <div class="panel panel-primary">
        <div class="panel-heading">
          <h3 class="panel-title">Danh Sách Học Sinh</h3>
        </div>
        <div class="panel-body">
          <table class="table table-bordered">
            <thead>
              <tr>
                <th>STT</th>
                <th>Họ Tên</th>
                <th>Điểm Toán</th>
                <th>Điểm Lý</th>
                <th>Điểm Hóa</th>
                <th>Xóa</th>
                <th>Sửa</th>
              </tr>
            </thead>
            <tbody>
              <?php $stt = 0 ?>
              @foreach($hocsinh as $hs)
             
              <?php $stt = $stt + 1 ?>

              <tr>
                <th scope="row">{!! $stt; !!}</th>
                <td>{!! $hs['hoten'] !!}</td>
                <td>{!! $hs['toan'] !!}</td>
                <td>{!! $hs['ly'] !!}</td>
                <td>{!! $hs['hoa'] !!}</td>
                <td class="text-center" id="delete"></i><a href="{!! URL::route('hocsinh/getxoa',$hs['id']) !!}">Xóa</a></td>
                <td class="text-center" ><a href="{!! URL::route('hocsinh/getsua',$hs['id']) !!}">Sửa</a></td>
                </tr>
             
              @endforeach


            </tbody>
          </table>

           <th class="btn btn-default"><a href="dangki">Thêm Học Sinh</a></th>
        </div>
      </div>


    </div>
   
    <script type="text/javascript" src="js/jquery.min.js"></script>
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
  </body>
</html>