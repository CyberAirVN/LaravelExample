@extends('main')
@section('title')
Register
@endsection
@section('content')
<div class="login-wrap">
	<div class="login-html">
		<h3>Đăng Ký</h3>
		<!-- <input id="tab-2" type="radio" name="tab" class="sign-up"><label for="tab-2" class="tab">Đăng Ký</label> -->
		<div class="login-form">
		<div class="sign-up-htm">
			<form action="{!! route('admin/postregister') !!}" method="post" id="">
				<input type="hidden" name="_token" value="{!! csrf_token() !!}">
				<div class="group">
					<label for="user" class="label">Tài khoản</label>
					<input id="user" type="text" name="name" class="input">
				</div>
				<div class="group">
					<label for="pass" class="label">Mật khẩu</label>
					<input id="pass" type="password" name="password" class="input" data-type="password">
				</div>
				<div class="group">
					<label for="pass" class="label">Nhập lại mật khẩu</label>
					<input id="pass" type="password" name="re_password" class="input" data-type="password">
				</div>
				<div class="group">
					<label for="pass" class="label">Email</label>
					<input id="pass" type="email" name="email" class="input">
				</div>
				<div class="group">
					<button class="button">Sign Up</button>
				</div>
				@include('validateerror')
				<div class="hr"></div>
				<div class="foot-lnk">
					<label for="tab-1">Already Member?</label>
				</div>
			</form>
			</div>
		</div>
	</div>
</div>
@endsection