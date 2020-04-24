<!doctype html>
<html lang="en">
 <head>
  <meta charset="UTF-8">
  <meta name="Generator" content="EditPlus®">
  <meta name="Author" content="">
  <meta name="Keywords" content="">
  <meta name="Description" content="">
  <title>Document</title>
 </head>

<form>
	<input type="text" name="goods_name" value="{{$goods_name}}">
	<select name="brandar_cid">
			<option>请选择分类</option>
		@foreach($brandar as $v)
			<option value="{{$v->brandar_cid}}">{{$v->brandar_name}}</option>
		@endforeach
		</select>
	<button>搜索</button>
</form>


 <body>
	<table border="">
	<tr>
		<td>文章ID</td>
		<td>文章标题</td>
		<td>文章分类</td>
		<td>文章重要性</td>
		<td>作者Email</td>
		<td>网页描述</td>
		<td>上传文件</td>
		<td>操作</td>
	</tr>
	@foreach($goodsarr as $v)
	<tr>
		<td>{{$v->goodsarr_id}}</td>
		<td>{{$v->goods_name}}</td>
		<td>{{$v->brandar_name}}</td>
		<td>{{$v->goods_dx}}</td>
		<td>{{$v->goods_email}}</td>
		<td>{{$v->goods_jieshao}}</td>
		<td>@if($v->goods_file)<img width="50px" height="50px" src="{{env('UPLOADS_URL')}}{{$v->goods_file}}">@endif</td>
		<td><a href="{{url('/goods/delete/'.$v->goodsarr_id)}}">删除</a>
			<a href="{{url('/goods/xiu/'.$v->goodsarr_id)}}">修改</a>
		</td>
	</tr>
	@endforeach
	</table>
	<td>
		{{$goodsarr->appends(['goods_name'=>$goods_name])->links()}}
	</td>
	<a href="{{url('goods/tian')}}">添加</a>
 </body>
</html>
