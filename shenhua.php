<?php 
    require('connect.php'); 
	$sql="select * from story_info where story_id=5";
	$rs=$pdo->query($sql);
	$result=$rs->fetch(PDO::FETCH_ASSOC);
	$sql="select * from comment_info where story_id=5 and comment_id=1";
	$rs1=$pdo->query($sql);
	$result1=$rs1->fetch(PDO::FETCH_ASSOC);
	$sql="select * from comment_info where story_id=5 and comment_id=5";
	$rs2=$pdo->query($sql);
	$result2=$rs2->fetch(PDO::FETCH_ASSOC);
	$sql="select * from comment_info where story_id=5 and comment_id=3";
	$rs3=$pdo->query($sql);
	$result3=$rs3->fetch(PDO::FETCH_ASSOC);
	$sql="select * from comment_info where story_id=5 and comment_id=5";
	$rs4=$pdo->query($sql);
	$result4=$rs4->fetch(PDO::FETCH_ASSOC);
	?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="css/story.css">
	<title>神话基因</title>
	<style type="text/css">
		.box{
			display: inline-block;
			position: relative;
			border:2px solid #EDEDED;
			border-top: 2px solid #EDEDED;
			margin-left: 10%;
			margin-top: 10px;
			padding-top: 10px;
			width: 900px;
		}
		.book_img{
			padding-top: 25px;
			display: inline-block;
		}
		.intr{
			display: inline-block;
			position: absolute;
			top: 25px;
			padding-left: 25px;
		}
		.num span{
			font-weight: bold;
			color: rgba(0,0,0,0.5);
		}
		.num i{
			padding-left: 5px;
		}
		.intr p{
			padding-top: 15px;
		}
		.s2{
			padding-left: 10px;
		}
		.read{
			padding-left:50px;
			width: 200px;
			height: 80px;
			display: inline-block;
			position: relative;
		}
		.read_a{
			color: #fff;
			background-color: #D32F2F;
			text-align: center;
			width: 170px;
			line-height: 40px;
			display: inline-block;
			position: absolute;
			left: 25px;
			top: 35px;
		}
		.sidebar1{
			border:2px solid #EDEDED;
			width: 300px;
			height: 280px;
			margin-top: 10px;
			float: right;
			margin-right: 130px;
		}
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
		.command{
			border: 2px solid #EDEDED;
			margin-left: 10%;
			margin-top: 10px;
			padding-top: 10px;
			width: 900px;
			height: 800px;
			position: absolute;
		}
		.command h2{
			padding-left: 30px; 
		}
		.c_head{
			height: 40px;
			border-bottom: 1px solid #ccc;
		}
		.c_head_a{
			color: #fff;
			background-color: #D32F2F;
			text-align: center;
			width: 120px;
			line-height: 32px;
			display: inline-block;
			position: absolute;
			right:  25px;
			top: 27px;
		}
		.command1{
			height: 180px;	
			width: 900px;
			border:1px dotted #ccc;
		}
		.command1 img{
			float: left;
			padding-left: 15px;
			padding-top: 35px;	
		}
		.content1{
			display: inline-block;
			padding-left: 30px;
		}
		.content1 .p1{
			color: rgba(0,0,0,0.5);
			padding-top: 5px;
		}
		.content1 .p2{
			padding-top: 5px;
		}
		.content1 .p3{
			padding-top: 20px;
		}
		.content1 .p4{
			font-weight: bold;
		}
		.vote{
			color: #fff;
			background-color: #D32F2F;
			text-align: center;
			width: 100px;
			line-height: 30px;
			display: inline-block;
			position: absolute;
			float: right;
			margin-left: 250px;
			top: 10px;
		}
	</style>
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
			<div class="book_img">
				<img src="images/shenhua1.jpg" >
			</div>
			<div class="intr">
				<h2><?php  echo $result['name'];?></h2>
				<div class="num">
					<span>字数:</span><i><?php echo $result['word']; ?></i>
					<span class="s2">票数:</span><i><?php  echo $result['vote_count'];?></i>
				</div>
				<div class="vote"><a href="vote.php?story_id=5" class="vote">投票</a></div>
				<p><?php echo $result['content'];?></p>
			</div>
			<div class="read"><a href="read.php?story_id=5&chapter_id=1" class="read_a">开始阅读</a></div>
		</div>
		<div class="sidebar1">
		<h2>月票榜单</h2>
		<ul>
			<i class="i1">1</i><li class="l1"><a href="wuxia.php">武侠世界</a></li><span>380</span>
			<i class="i1">2</i><li class="l1"><a href="meiju.php">美剧世界</a></li><span>249</span>
		    <i class="i3">3</i><li class="l1"><a href="shenhua.php">神话基因</a></li><span><?php echo $result['vote_count']; ?></span>
		    <i class="i3">4</i><li class="l1"><a href="zhoulin.php">纣临</a></li><span>200</span>
		    <i class="i3">5</i><li class="l1"><a href="qiji.php">奇迹的召唤师</a></li><span>200</span>
		</ul>
		</div>
		<div class="command">
			<div class="c_head"><h2>评论区</h2><a href="command_Login.php?story_id=5" class="c_head_a">我要发帖</a> </div>
			<div class="command1">
			<img src="images/usercommand.PNG">
			<div class="content1"><p class="p1"><?php echo $result1['name']; ?></p><p class="p4"><?php echo $result1['title']; ?></p><p class="p2"><?php echo $result1['content']; ?></p><p class="p3"><?php echo $result1['time']; ?></p></div>
			</div>
			<div class="command1">
			<img src="images/usercommand.PNG">
			<div class="content1"><p class="p1"><?php echo $result2['name']; ?></p><p class="p4"><?php echo $result2['title']; ?></p><p class="p2"><?php echo $result2['content']; ?></p><p class="p3"><?php echo $result2['time']; ?></p></div>
			</div>
			<div class="command1">
			<img src="images/usercommand.PNG">
			<div class="content1"><p class="p1"><?php echo $result3['name']; ?></p><p class="p4"><?php echo $result3['title']; ?></p><p class="p2"><?php echo $result3['content']; ?></p><p class="p3"><?php echo $result3['time']; ?></p></div>
			</div>
			<div class="command1">
			<img src="images/usercommand.PNG">
			<div class="content1"><p class="p1"><?php echo $result4['name']; ?></p><p class="p4"><?php echo $result4['title']; ?></p><p class="p2"><?php echo $result4['content']; ?></p><p class="p3"><?php echo $result4['time']; ?></p></div>
			</div>
			</div>
		</div>
</body>
</html>