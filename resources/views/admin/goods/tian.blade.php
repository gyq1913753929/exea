<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<form method="post" action="{{url('/goods/tianjia')}}" enctype="multipart/form-data">
		@csrf
		文章标题<input type="text" name="goods_name"><br>
		<b style="color:red">{{$errors->first('goods_name')}}</b>
		文章分类<select name="brandar_cid">
			<option>请选择分类</option>
		@foreach($brandar as $v)
			<option value="{{$v->brandar_cid}}">{{$v->brandar_name}}</option>
		@endforeach
		</select><br>
		文章重要性<input type="radio" name="goods_dx" value="1">普通
				  <input type="radio" name="goods_dx" value="2">顶置<br>
		作者email<input type="text" name="goods_email"><br>
		网页描述<textarea name="goods_jieshao"></textarea><br>
		上传文件<input type="file" name="goods_file">{{$errors->first('goods_file')}}<br>
		<button>提交</button>
	</form>
</body>
</html>