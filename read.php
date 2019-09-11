<?php require('connect.php');
	$story_id=$_GET['story_id'];
	$chapter_id=$_GET['chapter_id'];
	$sql="select * from chapter_info where story_id='$story_id' and chapter_id=$chapter_id";
	$rs=$pdo->query($sql);
	$result=$rs->fetch(PDO::FETCH_ASSOC); 
 ?>
<!DOCTYPE html>
<html>
<head>
	<style type="text/css">
	.content{
		font-size: 18px;
		text-indent: 2em;
		padding-top: 20px;
	}
	.r_title{
		font-size: 26px;
		font-weight: bold;
		width: 96%;
		text-align: center;

	}
	.next{
		font-weight: bold;
		font-size: 26px;
		margin-left: 45%;
	}
	.votebox{
		float: left;
		position: absolute;
		top: 402px;
		left: 4%;
		border: 1px solid #ccc;
		width: 80px;
		line-height: 50px;
		text-align: center;

	}
	.commandbox{
		float: left;
		position: absolute;
		top: 352px;
		left: 4%;
		border: 1px solid #ccc;
		width: 80px;
		line-height: 50px;
		text-align: center;

	}
	.listbox{
		float: left;
		position: absolute;
		top: 300px;
		left: 4%;
		border: 1px solid #ccc;
				width: 80px;
		line-height: 50px;
		text-align: center;

	}
	</style>
	<link rel="stylesheet" type="text/css" href="css/story.css">
	<meta charset="utf-8">
	<title>第<?php echo $result['chapter_id']; ?>章</title>
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
	<div class="tool">
		<div class="listbox"><a href="catalog.php?story_id=<?php echo $story_id ?>">目录</a></div>
		<div class="votebox"><a href="vote.php?story_id=<?php echo $story_id?>">投票</a></div>
		<div class="commandbox"><a href="command_Login.php?story_id=<?php echo $story_id ?>">评论</a></div>
	</div>
	<div class="box">
		<div class="read_body">
		<div class="r_title">第<?php echo $result['chapter_id']; ?>章</div>
		<div class="content"><?php echo $result['content']; ?></div>
		<div><a  class="next" href="next.php?story_id=<?php echo $story_id?>&chapter_id=<?php  echo $_GET['chapter_id'] ;?>">下一章</a></div>
		</div>
	</div>
</body>
</html>