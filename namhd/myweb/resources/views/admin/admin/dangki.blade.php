<!DOCTYPE html>
<html lang="vi">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Đăng Kí Thành Viên</title>
    <link type="text/css" href="{{Asset('template/css/bootstrap.min.css')}}" rel="stylesheet">
    <script src="//code.jquery.com/jquery-1.11.3.min.js"></script>
    <script type="text/javascript" src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.13.1/jquery.validate.min.js"></script>
  </head>
  <body>
    <div class="container" style="margin-top:20px; width: 500px">
      <div class="panel panel-primary">
        <div class="panel-heading">
          <h3 class="panel-title">Đăng Kí Thành Viên</h3>
        </div>
        <div class="panel-body">
         
          <form action="dangki" method="POST" enctype="multipart/form-data" id="formdangki">
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
            <div class="form-group">
              <label for="username">Tài Khoản</label>
              <input type="text" class="form-control" name="username" id="username" />
            </div>
            <div class="form-group">
              <label for="password">Mật Khẩu</label>
              <input type="password" class="form-control" name="password" id="password" />
            </div>
            <div class="form-group">
              <label for="password">Nhập Lại Mật Khẩu</label>
              <input type="password" class="form-control" name="passwordAgain" id="passwordAgain" />
            </div>
            <div class="form-group">
              <label for="email">Email</label>
              <input type="email" class="form-control" name="email" id="email" />
            </div>
            <button type="submit" class="btn btn-default">Đăng Kí</button>
            <button type="submit" class="btn btn-default">Làm Mới</button>
          </form>
        </div>
      </div>
    </div>
    <script type="text/javascript">
    $(document).ready(function() {
      $('#formdangki').validate({
        rules:{
          username:{
            required:true,
            minlength:3,
          },
          password:{
            required:true,
            minlength:6,
          },
          passwordAgain:{
            equalTo:"#password"
          },
          email:{
            required:true,
            email:true,
          }
        },
        messages:{
          username:{
            required:"Vui lòng nhập Username",
            minlength:"Username phải 3 ký tự trở lên"
          },
          password:{
            required:"Vui lòng nhập mật khẩu",
            minlength:"Mật khẩu phải lớn hơn 6 kí tự",
          },
          passwordAgain:{
            equalTo:"Mật khẩu xác nhận không đúng",
          },
          email:{
            required:"Vui lòng nhập Email",
            email:"Định dạng Email không đúng",
          }

        }
      });
      });
    </script>
    {{-- <script type="text/javascript" src="js/jquery.min.js"></script>
    <script type="text/javascript" src="js/bootstrap.min.js"></script> --}}
  </body>
</html>