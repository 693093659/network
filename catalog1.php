<?php 
    require('connect.php'); 
    $name=$_POST['name'];
	$sql="select * from story_info where name='$name'";
	$rs1=$pdo->query($sql);
	$result1=$rs1->fetch(PDO::FETCH_ASSOC);
	$story_id=$result1['story_id'];
	$sql="select * from chapter_info where story_id='{$story_id}'";
	$rs=$pdo->query($sql);
	$result=$rs->fetch(PDO::FETCH_ASSOC);
?>
<!DOCTYPE html>
<html>
<head>
	<style type="text/css">
	.u1 li{
		display: inline-block;
	}
	.l11{
		margin-left: 90px;
	}
	.l12{
		margin-left: 400px;
	}
	.l13{
		margin-left: 400px;
	}
	.u2{
		padding-top: 50px;
	}
	.u3{
		padding-top: 50px;
	}
	.u2 li{
		display: inline-block;
	}
	.u3 li{
		display: inline-block;
	}
	.t_name{
		text-align: center;

	}
	</style>
	<link rel="stylesheet" type="text/css" href="css/story.css">
	<meta charset="utf-8">
	<title>评论</title>
</head>
	<div class="head">
<body>
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
		<div class="t_name"><h2><?php echo $result1['name']; ?></h2></div>
		<div class="sort">
			<ul class="u1"><li class="l11"><a href="read.php?story_id=<?php echo $story_id ?>&chapter_id=1">第一章</a></li><li class="l12"><a href="read.php?story_id=<?php echo $story_id ?>&chapter_id=2">第二章</a></li><li class="l13"><a href="read.php?story_id=<?php echo $story_id ?>&chapter_id=3">第三章</a></li></ul>
			<ul class="u2"><li class="l11"><a href="read.php?story_id=<?php echo $story_id ?>&chapter_id=4">第四章</a></li><li class="l12"><a href="read.php?story_id=<?php echo $story_id ?>&chapter_id=5">第五章</a></li><li class="l13"><a href="read.php?story_id=<?php echo $story_id ?>&chapter_id=6">第六章</a></li></ul>
			<ul class="u3"><li class="l11"><a href="read.php?story_id=<?php echo $story_id ?>&chapter_id=7">第七章</a></li><li class="l12"><a href="read.php?story_id=<?php echo $story_id ?>&chapter_id=8">第八章</a></li><li class="l13"><a href="read.php?story_id=<?php echo $story_id ?>&chapter_id=9">第九章</a></li></ul>
		</div>

	</div>
</body>
</html>