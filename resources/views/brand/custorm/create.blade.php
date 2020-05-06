<!DOCTYPE html>
<html>
<head>
	<title>客户拜访信息表</title>
</head>
<body>
	<h3 style="color:blue">客服拜访信息表</h3>
	<form method="post" action="{{url('/custorm/store')}}">
		@csrf
		<!-- {{csrf_field()}}
		<input type="hidden" name="_token" value="{{csrf_token()}}"> -->
		<tr>
			<td>业务员名称</td>
			<td><input type="text" name="c_name" placeholder="请输入业务员名称"></td></br>
		</tr>
		<tr>
			<td>客户名称</td>
			<td><input type="text" name="k_name" placeholder="请输入客户名称"></td></br>
		</tr>
		<tr>
			<td>访问人</td>
			<td><input type="text" name="c_man" placeholder="请输入访问人"></td></br>
		<tr>
		<tr>
			<td>访问地址</td>
			<td><input type="text" name="c_address" placeholder="请输入访问地址"></td></br>
		</tr>
			<td></td>
			<td><input type="submit" value="客服提交"></td>
		</tr>
	</form>
</body>
</html>