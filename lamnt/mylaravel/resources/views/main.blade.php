<!DOCTYPE html>
<html >
<head>
  <meta charset="UTF-8">
  <title>@yield('title')</title>
  <link rel='stylesheet prefetch' href='http://fonts.googleapis.com/css?family=Open+Sans:600'>
  <link rel="stylesheet" href="{{Asset('css/style.css')}}">
  <link rel="stylesheet" type="text/css" href="{{Asset('css/bootstrap.css')}}">
  <link rel="stylesheet" type="text/css" href="{{Asset('css/animate.css')}}">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">

  
</head>
<body>
<div class="container fadeOutLeft">
  <div class="row">
      	<div class="col-md-12">
			@yield('content')
		</div>
	</div>
</div>
    <script src="{{Asset('js/jquery.min.js')}}"></script>
    <script src="{{Asset('js/bootstrap.min.js')}}"></script>
    <script src="{{Asset('js/myscript.js')}}"></script>
</body>
</html>