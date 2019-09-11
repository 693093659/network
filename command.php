<?php 
	require('check_login.php');
	$story_id=$_GET['story_id'];	
 ?>
<!DOCTYPE html>
<html>
<head>
	<style type="text/css">
		.box{
				position: relative;
		}
		.c_title{
			margin-top: 20px;
			margin-left: 19%;
			width: 700px;
			height: 35px;
			border: none;
			border-bottom: 1px solid #ccc;
			border-color: rgba(0,0,0,0.1);
			font-weight: bold;
			font-size: 22px;
			}
		.area{
			margin-left: 19%;
			width: 700px;
			height: 200px;
			border: none;
			margin-top: 20px;
		}
		.submit{
			margin-top: 20px;
			margin-left: 19%;
			display:block;
			border: none;
			width: 100px;
			height: 30px;
			text-decoration: none;
			color: #fff;
			background-color: #D32F2F;
		}
	</style>
	<link rel="stylesheet" type="text/css" href="css/story.css">
	<meta charset="utf-8">
	<title>评论</title>
</head>
<body>
	<div class="head">
	<div class="sign-in">
		<a href="login.html" class="log">登录</a><a href="register.html" class="reg">注册</a>
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
		<form action="insert_command.php" method="POST" >
		<input type="hidden" name="story_id" value="<?php echo $story_id ?>">
		<input type="text" name="c_title" placeholder="请输入文本标题	" class="c_title">
		<textarea name="area" cols="100" rows="30" class="area" placeholder="文本区域"></textarea>
		<input type="submit" name="submit"  value="发表" class="submit">
		</form>
	</div>
</body>
</html>