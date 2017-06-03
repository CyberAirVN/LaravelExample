<!DOCTYPE html>
<html lang="vi">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Sửa Điểm Học Sinh</title>
    <link type="text/css" href="{{Asset('template/css/bootstrap.min.css')}}" rel="stylesheet">
  </head>
  <body>
    <div class="container" style="margin-top:20px">
      <div class="panel panel-primary">
        <div class="panel-heading">
          <h3 class="panel-title">Sửa Điểm Học Sinh</h3>
        </div>


        


        <div class="panel-body">
          <form method="POST" action="" enctype="multipart/form-data" >
          <input type="hidden" name="_token" value="{{ csrf_token() }}">
            <div class="form-group">
              <label for="hoten">Họ Tên Học Sinh</label>
              <input type="text" class="form-control" name="hoten" value="{{$hocsinh->hoten}}" />
            </div>
            <div class="form-group">
              <label for="toan">Điểm Môn Toán</label>
              <input type="text" class="form-control" name="toan" value="{{$hocsinh->toan}}"/>
            </div>
            <div class="form-group">
              <label for="ly">Điểm Môn Lý</label>
              <input type="text" class="form-control" name="ly" value="{{$hocsinh->ly}}"/>
            </div>
            <div class="form-group">
              <label for="hoa">Điểm Môn Hóa</label>
              <input type="text" class="form-control" name="hoa" value="{{$hocsinh->hoa}}"/>
            </div>
            <button type="submit" class="btn btn-default">Cập Nhật</button>
          </form>
        </div>
        

      </div>
    </div>
    <script type="text/javascript" src="js/jquery.min.js"></script>
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
  </body>
</html>