﻿<?php 
include 'ctrl/conn.php';
$sql="select users_id,users_name,users_pwd,users_phone,users_mail,users_photo,address.address_name from users,address where address.address_id=users.address_id and users_id=".$_GET['uid'];
$rs = $conn->query($sql);
$att1= $rs->fetch_row();
?>
<!DOCTYPE html>
<head>
<title>网站后台管理后台</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- bootstrap-css -->
<link rel="stylesheet" href="css/bootstrap.min.css" >
<!-- //bootstrap-css -->
<!-- Custom CSS -->
<link href="css/style.css" rel='stylesheet' type='text/css' />
<link href="css/style-responsive.css" rel="stylesheet"/>
<!-- font CSS -->
<link href='http://fonts.googleapis.com/css?family=Roboto:400,100,100italic,300,300italic,400italic,500,500italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>
<!-- font-awesome icons -->
<link rel="stylesheet" href="css/font.css" type="text/css"/>
<link href="css/font-awesome.css" rel="stylesheet"> 
<!-- //font-awesome icons -->
<script src="js/jquery2.0.3.min.js"></script>
<link rel="stylesheet" type="text/css" href="bootstrap-3.3.4-dist/css/bootstrap.css"/>
	<script src="bootstrap/js/bootstrap.min.js"></script>
	<link href="../umeditor/themes/default/css/umeditor.css" type="text/css" rel="stylesheet">
    <script type="text/javascript" src="../umeditor/third-party/jquery.min.js"></script>
    <script type="text/javascript" src="../umeditor/third-party/template.min.js"></script>
    <script type="text/javascript" charset="utf-8" src="../umeditor/umeditor.config.js"></script>
    <script type="text/javascript" charset="utf-8" src="../umeditor/umeditor.min.js"></script>
    <script type="text/javascript" src="../umeditor/lang/zh-cn/zh-cn.js"></script>
</head>
<body>
<section id="container">
<!--header start-->
<header class="header fixed-top clearfix">
<!--logo start-->
<div class="brand">

    <a href="index.html" class="logo">
        天软二手交易平台
    </a>
    <div class="sidebar-toggle-box">
        <div class="fa fa-bars"></div>
    </div>
</div>
<!--logo end-->
<div class="top-nav clearfix">
    <!--search & user info start-->
    <ul class="nav pull-right top-menu">
        <!-- user login dropdown start-->
        <li class="dropdown">
						<a data-toggle="dropdown" class="dropdown-toggle" href="#">
							<span class="username">
							   欢迎登录
							</span>
							<b class="caret"></b>
						</a>
						<ul class="dropdown-menu extended logout">
							<!--<li>
								<a href="registration.html"><i class="fa fa-cog"></i> 注册</a>
							</li>-->
							<li>
								<a href="login.php"><i class="fa fa-key"></i> 登录</a>
							</li>
							<li>
								<a href="login.php"><i class="fa fa-key"></i>退出</a>
							</li>
						</ul>
					</li>
        <!-- user login dropdown end -->
       
    </ul>
    <!--search & user info end-->
</div>
</header>
<!--header end-->
<!--sidebar start-->
<aside>
    <div id="sidebar" class="nav-collapse">
        <!-- sidebar menu start-->
        <div class="leftside-navigation">
            <ul class="sidebar-menu" id="nav-accordion">
                <li class="sub-menu">
                    <a class="active" href="javascript:;">
                        <i class="fa fa-user"></i>
                        <span>用户管理</span>
                    </a>
                    <ul class="sub">
                        <li><a href="userslist.html">普通用户管理</a></li>
                        <li><a href="adminlist.html">管理员管理</a></li>
                        <li><a href="addresslist.html">用户地址管理</a></li>
                    </ul>
                </li>
                <li class="sub-menu">
                    <a class="active" href="javascript:;">
                        <i class="fa fa-th"></i>
                        <span>商品类别管理</span>
                    </a>
                    <ul class="sub">
                        <li><a href="protypelistbig.html">商品大类管理</a></li>
                        <li><a href="protypelistsmall.html">商品小类管理</a></li>
                    </ul>
                </li>
                <li class="sub-menu">
                    <a class="active" href="javascript:;">
                        <i class="fa fa-print"></i>
                        <span>商品管理</span>
                    </a>
                    <ul class="sub">
                        <li><a href="goodslist.html">商品列表管理</a></li>
                    </ul>
                </li>
                <li class="sub-menu">
                    <a class="active" href="javascript:;">
                        <i class="fa fa-th"></i>
                        <span>订单管理</span>
                    </a>
                    <ul class="sub">
                        <li><a href="orderslist.html">订单管理</a></li>
                    </ul>
                </li>
            </ul> 
        </div>
        <!-- sidebar menu end-->
    </div>
</aside>
<!--sidebar end-->
<!--main content start-->
<section id="main-content">
	<section class="wrapper">
		<div class="table-agile-info">
  <div class="panel panel-default">
    <div class="panel-heading">
      修改用户
    </div>
    <div class="row w3-res-tb">
    </div>
    <div class="table-responsive">
     <div style="margin: 5px;">
     <form action="ctrl/updateusers.php" role="form" method="post" enctype="multipart/form-data">
     <input type="hidden" class="form-control" name="uid" value="<?php echo $att1[0];?>"/>
     <div class="form-group has-success has-feedback">
      <label class="control-label" for="uname">用户名：</label>
      <input type="text" class="form-control" name="uname" value="<?php echo $att1[1];?>"/>
      <span class="glyphicon glyphicon-ok form-control-feedback"></span>
    </div>
    <div class="form-group has-warning has-feedback">
      <label class="control-label" for="upwd">用户密码：</label>
      <input type="password" class="form-control" name="upwd" value="<?php echo $att1[2];?>"/>
      <span class="glyphicon glyphicon-ok form-control-feedback"></span>
    </div>
     <div class="form-group has-warning has-feedback">
      <label class="control-label" for="uphone">用户电话：</label>
      <input type="text" class="form-control" name="uphone" value="<?php echo $att1[3];?>"/>
      <span class="glyphicon glyphicon-ok form-control-feedback"></span>
    </div> 
    <div class="form-group has-success has-feedback">
      <label class="control-label" for="umail">用户邮箱：</label>
      <input type="text" class="form-control" name="umail" value="<?php echo $att1[4];?>"/>
      <span class="glyphicon glyphicon-ok form-control-feedback"></span>
    </div> 
     <div class="form-group has-warning has-feedback">
      <label class="control-label" for="uphoto">用户图片：</label>
      <input type="file" class="form-control" name="uphoto"/>
      <span class="glyphicon glyphicon-ok form-control-feedback"></span>
    </div>     
     <label class="control-label" for="addname">用户地址：</label>
     <select class="form-control" name="addname">
     <?php
     include 'ctrl/conn.php';//连接数据库
     $sql="select * from address";
     $r=$conn->query($sql);
     $attaddress=$r->fetch_all();
     //数组的遍历
     foreach ($attaddress as $v){
         //小类表的大类名称与大类表的大类名称进行比较
         if($att1[6]==$v[1]){
             echo "<option value='".$v[0]."' selected='selected'>".$v[1]."</option>";
         }else{
             echo "<option value='".$v[0]."'>".$v[1]."</option>";         }
     }
     ?>
     </select>
    <input type="submit" class="btn btn-success" value="修改">
    <input type="reset" class="btn btn-warning" value="取消" />
   </form>
     </div>
    </div>
    <footer class="panel-footer">
      <div class="row">
        
        <div class="col-sm-5 text-center">
          <small class="text-muted inline m-t-sm m-b-sm">showing 20-30 of 50 items</small>
        </div>
        <div class="col-sm-7 text-right text-center-xs">                
          <ul class="pagination pagination-sm m-t-none m-b-none">
            <li><a href=""><i class="fa fa-chevron-left"></i></a></li>
            <li><a href="">1</a></li>
            <li><a href="">2</a></li>
            <li><a href="">3</a></li>
            <li><a href="">4</a></li>
            <li><a href=""><i class="fa fa-chevron-right"></i></a></li>
          </ul>
        </div>
      </div>
    </footer>
  </div>
</div>
<!--main content end-->
</section>
<script src="js/bootstrap.js"></script>
<script src="js/jquery.dcjqaccordion.2.7.js"></script>
<script src="js/scripts.js"></script>
<script src="js/jquery.slimscroll.js"></script>
<script src="js/jquery.nicescroll.js"></script>
<!--[if lte IE 8]><script language="javascript" type="text/javascript" src="js/flot-chart/excanvas.min.js"></script><![endif]-->
<script src="js/jquery.scrollTo.js"></script>
</body>
</html>
