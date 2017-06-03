<!DOCTYPE html>
<html lang="vi">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Đăng Nhập</title>
    <link type="text/css" href="{{Asset('template/css/bootstrap.min.css')}}" rel="stylesheet">
  </head>
  <body>
    <div class="container" style="margin-top:20px;width: 500px">
      <div class="panel panel-primary">
        <div class="panel-heading">
          <h3 class="panel-title">Đăng Nhập</h3>
        </div>
        <div class="panel-body">

          <form method="POST" action="dang-nhap">
          <input type="hidden" name="_token" value="{{ csrf_token() }}">
            <div class="form-group">
              <label for="email">Email</label>
              <input type="text" class="form-control" name="email" />
            </div>
            <div class="form-group">
              <label for="password">Mật Khẩu</label>
              <input type="password" class="form-control" name="password" />
            </div>
            
            <button type="submit" class="btn btn-default">Đăng Nhập</button>
            
            <th class="btn btn-default"><a href="dangki">Đăng kí ngay bây giờ !</a></th>
          </form>
        </div>
      </div>
    </div>
    <script type="text/javascript" src="js/jquery.min.js"></script>
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
  </body>
</html>