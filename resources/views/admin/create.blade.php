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


<form class="form-horizontal" role="form">
  <div class="form-group">
    <label for="firstname" class="col-sm-2 control-label">客户名称</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="firstname" name="brand_name">
    </div>
  </div>

  <div class="form-group">
    <label for="lastname" class="col-sm-2 control-label">客户级别</label>
    <div class="col-sm-10">
      <label class="radio-inline">
        <input type="radio" name="brand_gred"  value="1" checked> 普通客户
    </label>

    <label class="radio-inline">
        <input type="radio" name="brand_gred"  value="2"> vip客户
    </label>
    </div>
  </div>

  <div class="form-group">
    <label for="lastname" class="col-sm-2 control-label">客户从事事业</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" name="brand_source">
    </div>
  </div>

  <div class="form-group">
    <label for="lastname" class="col-sm-2 control-label">客户手机</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" name="brand_cell">
    </div>
  </div>

  <div class="form-group">
    <label for="lastname" class="col-sm-2 control-label">业务员</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" name="cart_id">
    </div>
  </div>

  <div class="form-group">
  	<div class="col-sm-offset-2 col-sm-10">
  		<button type="button" class="btn btn-default btn-lg ">提交</button>
  </div>
 </form>
