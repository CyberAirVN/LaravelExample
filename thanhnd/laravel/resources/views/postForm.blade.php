<form action="{{route('PostForm')}}" method="post">
	<input type="hidden" name="_token" value="{{ csrf_token() }}">
	Name:<br>
	<input type="text" name="hoten"><br>
	Password:<br>
	<input type="password" name="password"><br>
	Data Response:<input type="checkbox" name="json" checked="">Json<br>
	<input type="submit">
</form>