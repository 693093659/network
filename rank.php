	<?php 
    require('connect.php'); 
	$sql="select * from story_info where story_id=1";
	$rs=$pdo->query($sql);
	$result=$rs->fetch(PDO::FETCH_ASSOC);
	$sql="select * from story_info where story_id=2 ";
	$rs1=$pdo->query($sql);
	$result1=$rs1->fetch(PDO::FETCH_ASSOC);
	$sql="select * from story_info where story_id=3 ";
	$rs2=$pdo->query($sql);
	$result2=$rs2->fetch(PDO::FETCH_ASSOC);
	$sql="select * from story_info where story_id=4";
	$rs3=$pdo->query($sql);
	$result3=$rs3->fetch(PDO::FETCH_ASSOC);
	$sql="select * from story_info where story_id=5 ";
	$rs4=$pdo->query($sql);
	$result4=$rs4->fetch(PDO::FETCH_ASSOC);
	?>
<!DOCTYPE html>
<html>
<head>
	<style type="text/css">
		.sidebar1 h2{
			padding-left: 43px;
			font-size: 20px;
			color: rgba(0,0,0,0.5);
		}
		.l1{
			border-bottom: 1px solid #ccc;
			display: inline-block;
			width: 180px;
			padding-top: 10px;
			text-align: center;
			margin-left: 19px;
			margin-top: 5px;
		}
		ul span{
			padding-left: 16px;
		}
		.i1{
			font-size: 18px;
			color: #2C4390;
		}
		.i2{
			font-size: 18px;
			color: #2C4390;
		}
		.i3{
			font-size: 18px;
			color: #333;	
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
			<a href="rank.php" class="label_l">排行</a>
			<a href="book.php" class="label_b">书库</a>
			<a href="author_login.html" class="label_a">作者专区</a>
	</div>
	</div>
	<div class="box">
		<div class="sidebar1">
		<h2>月票榜单</h2>
		<ul>
			<i class="i1">1</i><li class="l1"><a href="wuxia.php">武侠世界</a></li><span><?php echo $result['vote_count']; ?></span>
			<i class="i1">2</i><li class="l1"><a href="meiju.php">美剧世界</a></li><span><?php echo $result1['vote_count']; ?></span>
		    <i class="i3">3</i><li class="l1"><a href="shenhua.php">神话基因</a></li><span><?php echo $result2['vote_count']; ?></span>
		    <i class="i3">4 </i><li class="l1"><a href="zhoulin.php">纣临</a></li><span><?php echo $result3['vote_count']; ?></span>
		    <i class="i3">5</i><li class="l1"><a href="qiji.php">奇迹的召唤师</a></li><span><?php echo $result4['vote_count']; ?></span>
		</ul>

		</div>
	</div>
</body>
</html>