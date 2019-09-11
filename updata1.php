<?php 
	session_start();
	require('connect.php'); 
	$author_id=$_SESSION['author_id'];
	$sql="select * from story_info where author_id='{$author_id}'";
	$rs=$pdo->query($sql);
	$result=$rs->fetch(PDO::FETCH_ASSOC);
 ?>
 <!DOCTYPE html>
 <html>
 <head>
 	<meta charset="utf-8">
 	<title>我的小说更新</title>
 </head>
 <body>
 	<div>
 		<p>您的小说简介为</p>
 		<p><?php echo "小说名:".$result['name']."<br>介绍:".$result['content']."<br>所属栏目:".$result['belong']."<br>所有投票:".$result['vote_count']."<br>字数为:".$result['word']; ?></p>
 		<div>
 			<form action="updatastory_info.php" method="POST">
 			<input type="text" name="name" placeholder="请输入您的小说的名字">
 			<input type="text" name="intr" placeholder="请输入您的小说的介绍">
 			<input type="submit" name="submit">
			</form>
 		</div>
 	</div>
 </body>
 </html>