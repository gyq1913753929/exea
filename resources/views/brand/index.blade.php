<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"> 
    <title></title>
    <link rel="stylesheet" href="https://cdn.staticfile.org/twitter-bootstrap/3.3.7/css/bootstrap.min.css">  
    <script src="https://cdn.staticfile.org/jquery/2.1.1/jquery.min.js"></script>
    <script src="https://cdn.staticfile.org/twitter-bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
    <nav class="navbar navbar-inverse" role="navigation">
    <div class="container-fluid">
    <div class="navbar-header">
        <a class="navbar-brand" href="#">项目</a>
    </div>
    <div>
        <ul class="nav navbar-nav">
        <li class="active"><a href="">客户</a></li>
        <li><a href="">业务员</a></li>
        <li><a href="">拜访会议</a></li>
        <li><a href="">管理员</a></li>
        </ul>
    </div>
    </div>
</nav>
<a href="{{url('brand/create')}}">添加</a>
<table class="table table-hover">
  <caption>悬停表格布局</caption>
  <thead>
    <tr>
      <th>客户ID</th>
      <th>客户名称</th>
      <th>客户级别</th>
      <th>客户从事事业</th>
      <th>业务员</th>
      <th>电话</th>
      <th>操作</th>
    </tr>
  </thead>
  @foreach($brand as $v)
  <tbody>
    <tr>
      <td>{{$v->brand_id}}</td>
      <td>{{$v->brand_name}}</td>
      <td>{{$v->brand_gred}}</td>
      <td>{{$v->brand_source}}</td>
      <td>{{$v->brand_cell}}</td>
      <td>{{$v->cart_id}}</td>
      <td><a href="{{url('brand/destroy/'.$v->brand_id)}}">删除
          <a href="{{url('brand/update/'.$v->brand_id)}}">修改
      </td>
    </tr>
  </tbody>
   @endforeach
</table>