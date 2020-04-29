<!DOCTYPE html>
<html>
<head>
	<title>客服拜访修改信息表</title>
</head>
<body>
	<h3 style="color:blue">客服拜访修改信息表</h3>
	<form method="post" action="{{url('/custorm/update/'.$custorm->c_id)}}">
		@csrf
		<!-- {{csrf_field()}}
		<input type="hidden" name="_token" value="{{csrf_token()}}"> -->
		<tr>
			<td>业务员名称</td>
			<td><input type="text" name="c_name" value="{{$custorm->c_name}}"></td></br>
		</tr>
		<tr>
			<td>客户名称</td>
			<td><input type="text" name="k_name" value="{{$custorm->k_name}}"></td></br>
		</tr>
		<tr>
			<td>访问人</td>
			<td><input type="text" name="c_man" value="{{$custorm->c_man}}"></td></br>
		<tr>
		<tr>
			<td>访问地址</td>
			<td><input type="text" name="c_address" value="{{$custorm->c_address}}"></td></br>
		</tr>
			<td></td>
			<td><input type="submit" value="客服修改"></td>
		</tr>
	</form>
</body>
</html>