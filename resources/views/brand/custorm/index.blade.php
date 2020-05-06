<!doctype html>
<html lang="en">
 <head>
  <meta charset="UTF-8">
  <meta name="Generator" content="EditPlus®">
  <meta name="Author" content="">
  <meta name="Keywords" content="">
  <meta name="Description" content="">
  <title>客服拜访列表</title>
 </head>
 <body>
 	<h3 style="color:blue">客服拜访信息列表</h3>
	<table border="1">
	<tr>
		<td>拜访ID</td>
		<td>业务员名称</td>
		<td>客户名称</td>
		<td>访问时间</td>
		<td>访问人</td>
		<td>访问地址</td>
		<td>下次访问时间</td>
		<td>操作</td>
	</tr>
	@foreach($custorm as $v)
	<tr>
		<td>{{$v->c_id}}</td>
		<td>{{$v->c_name}}</td>
		<td>{{$v->k_name}}</td>
		<td>{{date('Y-m-d h:i:s',$v->c_time)}}</td>
		<td>{{$v->c_man}}</td>
		<td>{{$v->c_address}}</td>
		<td>{{date('Y-m-d h:i:s',$v->cc_time)}}</td>
		<td><a href="{{url('/custorm/destroy/'.$v->c_id)}}">删除</a>
			<a href="{{url('/custorm/edit/'.$v->c_id)}}">修改</a>
		</td>
	</tr>
	@endforeach
	</table>
 </body>
</html>
