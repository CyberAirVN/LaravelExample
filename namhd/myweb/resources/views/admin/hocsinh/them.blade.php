<!DOCTYPE html>
<html lang="vi">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Thêm Điểm Học Sinh</title>
    <link type="text/css" href="{{Asset('template/css/bootstrap.min.css')}}" rel="stylesheet">
  </head>
  <body>
    <div class="container" style="margin-top:20px; width: 500px">
      <div class="panel panel-primary">
        <div class="panel-heading">
          <h3 class="panel-title">Thêm Điểm Học Sinh</h3>
        </div>
        <div class="panel-body">
         
          <form action="{!! route('getthem') !!}" method="POST" enctype="multipart/form-data">
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
            <div class="form-group">
              <label for="hoten">Họ Tên Học Sinh</label>
              <input type="text" class="form-control" name="hoten" id="hoten" />
            </div>
            <div class="form-group">
              <label for="toan">Điểm Môn Toán</label>
              <input type="text" class="form-control" name="toan" id="toan" />
            </div>
            <div class="form-group">
              <label for="ly">Điểm Môn Lý</label>
              <input type="text" class="form-control" name="ly" id="ly" />
            </div>
            <div class="form-group">
              <label for="hoa">Điểm Môn Hóa</label>
              <input type="text" class="form-control" name="hoa" id="hoa" />
            </div>
            <button type="submit" class="btn btn-default">Thực Hiện</button>
            <button type="submit" class="btn btn-default">Làm Mới</button>
          </form>
        </div>
      </div>
    </div>
    <script type="text/javascript" src="js/jquery.min.js"></script>
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
  </body>
</html>