<?php 
	require('connect.php');
	require('check_login.php');
	$author_id=$_SESSION['author_id'];
	$sql="select * from story_info where author_id='{$author_id}'";
	$rs=$pdo->query($sql);
	$result=$rs->fetch(PDO::FETCH_ASSOC);
	$story_id=$result['story_id'];
	$sql="select * from comment_info where story_id='{$story_id}'";
	$rs1=$pdo->query($sql);
	$result1=$rs1->fetch(PDO::FETCH_ASSOC);
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
	</style>
	<link rel="stylesheet" type="text/css" href="css/story.css">
	<meta charset="utf-8">
	<title>评论</title>
</head>
<body>
	<div class="head">
	<div class="sign-in">
		<a href="login.html" class="log"><?php echo $_SESSION["username"];?></a><a href="register.html" class="reg">注册</a>
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
	
		<div class="container">
	<div class="head">	
	<h1>个人中心</h1>
	<h2>我的首页</h2>
	<h2>主页</h2>
	</div>
	<ul class="nav">
		<li><a href="index.html">首页</a></li>
   		<li><a href="updata.php" class="current">我的小说更新</a></li>
    	<li><a href="checkcommand.php">留言查看</a></li>
   		<li><a href="catelog.php?story_id=<?php echo $story_id ?>">小说章节查询</a></li>
  		</ul>
  	<div class="content"></div>	
  	</div>	
	</div>
</body>
</html>