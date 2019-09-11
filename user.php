<?php
require('check_login.php');
 ?>
<!DOCTYPE html>
<html>
<head>
	<style type="text/css">
		.head1{
			margin-left: 500px;
		}
		.nav li{
			list-style: none;
			font-size: 20px;
			padding-top: 10px;
		}
		.body1{
			float: left;
			width: 500px;
			position: absolute;
			left: 600px;
			top: 370px;
			font-size: 22px;
		}

		.lbox{
			
			width: 300px;
		}
		.exit{
			display: inline-block;
			text-align: center;
			color: #fff;
			background-color: #D32F2F;
			width: 80px;
			line-height: 30px;
			margin-top: 100px;
			margin-left: 300px;
		}
	</style>
	<link rel="stylesheet" type="text/css" href="css/story.css">
	<meta charset="utf-8">
	<title>评论</title>
</head>
<body>
	<div class="head">
	<div class="sign-in">
		<a href="login.html" class="log"><?php echo $_SESSION["username"]; ?></a><a href="register.html" class="reg">注册</a>
	</div>
		<div class="title">
			<a href="index.html"><img src="images/title_bg.jpg"></a>
			<a href="index.html" class="ta1">玄侠小说网</a>
	<div>
	<input type="text" name="search" placeholder="请输入关键字" class="input1">
    <div id="search">搜索</div> 
	</div>
	</div>
	<div class="logo">
		<a href="" class="label_s">作品分类</a>
		<a href="index.html" class="label_h">首页</a>
		<a href="" class="label_l">排行</a>
		<a href="" class="label_b">书库</a>
		<a href="author_login.html" class="label_a">作者专区</a>
	</div>
	</div>
	<div class="box">
	<div class="head1">	
		<h1>个人中心</h1>
	</div>
	<h2>我的工具</h2>
	<div class="lbox">
	<ul class="nav" class="tool">
		<li><a href="index.html">首页</a></li>
   		<li><a href="checkcommand1.php" class="current">我的留言</a></li>
   		<li><a href="select.php">小说章节查询</a></li>
  	</ul>
  	<div class="body1">1、期望的实此刻我们,期望的实现关键在此刻。让我们为强者喝彩,为强者歌唱! 2、知识改变命运学习成就未来。 </div>
  	<a href="exit.php" class="exit">注销</a>
  	</div>	
	</div>
</body>
</html>