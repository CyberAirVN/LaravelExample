<!DOCTYPE html>
<html lang="en">
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<head>
    <title>Login DEVNET</title>
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
    <link href="//netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.css" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('css/style.css')}}" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('css/full-slider.css')}}" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('css/login-DevNET.css')}}" rel="stylesheet">
</head>
<body>
<div id="page">
    <div class="header">
        <div class="container">
            <div class="row">
                <div class="col-sm-3 logo-header">
                    <a href="#"><img src="images/logo-bni.png"></a>
                </div>
                <div class="header-menu col-sm-9 col-xs-12">
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
                            </div>

                            <!-- Collect the nav links, forms, and other content for toggling -->
                            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                                <ul class="nav navbar-nav">
                                    <li><a href="#">Giới thiệu</a></li>
                                    <li><a href="#">Tính năng</a></li>
                                    <li><a href="#">Khách hàng</a></li>
                                    <li><a href="#">Báo giá</a></li>
                                    <li><a href="#">Blog</a></li>
                                    <li><a href="#">Hỗ trợ</a></li>
                                </ul>
                            </div><!-- /.navbar-collapse -->
                        </div><!-- /.container-fluid -->
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <div class="middle-section">
        <div class="container">
            <div class="row">
                <h2 class="col-sm-12 title-crm">DevNET</h2>
                <div class="col-sm-7 middle-section-left">
                    <div id="myCarousel" class="carousel slide">
                        <!-- Indicators -->
                        <ol class="carousel-indicators">
                            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                            <li data-target="#myCarousel" data-slide-to="1"></li>
                            <li data-target="#myCarousel" data-slide-to="2"></li>
                        </ol>

                        <!-- Wrapper for Slides -->
                        <div class="carousel-inner">
                            <div class="item active">
                                <!-- Set the first background image using inline CSS below. -->
                                <div class="fill" style="background-image:url('');"><img src="{{asset('images/slide1.jpg')}}"></div>
                                <!--<div class="carousel-caption">-->
                                <!--<h2>Caption 1</h2>-->
                                <!--</div>-->
                            </div>
                            <div class="item">
                                <!-- Set the second background image using inline CSS below. -->
                                <div class="fill" style="background-image:url('');"><img src="{{asset('images/slide2.jpg')}}"></div>
                                <!--<div class="carousel-caption">-->
                                <!--<h2>Caption 2</h2>-->
                                <!--</div>-->
                            </div>
                            <div class="item">
                                <!-- Set the third background image using inline CSS below. -->
                                <div class="fill" style="background-image:url('');"><img src="{{asset('images/slide3.jpg')}}"></div>
                                <!--<div class="carousel-caption">-->
                                <!--<h2>Caption 3</h2>-->
                                <!--</div>-->
                            </div>
                        </div>

                        <!-- Controls -->
                        <a class="left carousel-control" href="#myCarousel" data-slide="prev">
                            <span class="icon-prev"></span>
                        </a>
                        <a class="right carousel-control" href="#myCarousel" data-slide="next">
                            <span class="icon-next"></span>
                        </a>

                    </div>
                </div>

                <div class="col-sm-5 middle-section-right">
                    <form class="login-form" action="{{url('login')}}" method="POST" role="form">
                    <div class="loginpanel">
                          <div class="txt">
                               <input type="text" id="email" name="email" placeholder="Email" value="{{old('email')}}" />
                               <label for="user" class="entypo-user"></label>
                          </div>

                          <!-- ------------------  -->
                          @if($errors->has('email'))
                               <p style="color: red">{{$errors->first('email')}}</p>
                          @endif
                          <!-- ------------------  -->


                          <div class="txt">
                                <input type="password" id="password"  name="password" placeholder="Password"/>
                                <label for="pwd" class="entypo-lock"></label>
                          </div>

                          <!-- ------------------  -->
                          @if($errors->has('email'))
                                <p style="color: red">{{$errors->first('password')}}</p>
                          @endif
                          <!-- ------------------  -->


                            @if($errors->has('errorlogin'))
                                 <p style="color: red">{{$errors->first('errorlogin')}}</p>
                            @endif



                          <div class="buttons">
                                <button type="submit" style="background: rgba(0, 180, 23, 0.85);color:#fff;width: 100%;height: 50px;border-radius: 10px;">Đăng Nhập</button>
                                {{--<input type="submit" style="background: rgba(0, 180, 23, 0.85)" value="Đăng nhập" />--}}
                          </div>
                          {!!csrf_field()!!}
                          <div class="hr">
                          <div></div>
                          <div>Hoặc đăng nhập với</div>
                          <div></div>
                          </div>
                          <div class="social-login social">
                          <a href="{{url('facebook/redirect')}}">
                                <i class="fa fa-facebook fa-lg"></i>
                                facebook
                          </a>
                          <a href="#">
                          <i class="fa fa-google-plus fa-lg"></i>
                            Google
                          </a>
                          </div>
                    </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="footer">
        <div class="container">
            <small>Bản quyền của DevNET © 2017</small>
            <div class="help-link">
                <a href="#">BNIGreen.vn</a>
                |
                <a href="#">FB BNIGreen.vn</a>
                |
                <a href="#">DevNET Vietnam</a></div>
        </div>
    </div>
</div>
<script src="{{asset('js/jquery.js')}}"></script>
<script src="{{asset('js/bootstrap.min.js')}}"></script>
<script src="{{asset('js/home.js')}}"></script>
</body>

</html>
