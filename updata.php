<?php 
	session_start();
	require('connect.php'); 
	$author_id=$_SESSION['author_id'];
	$sql="select * from story_info where author_id='{$author_id}'";
	$rs=$pdo->query($sql);
	$result=$rs->fetch(PDO::FETCH_ASSOC);
	$sql="select * from chapter_info where story_id='{$result['story_id']}'";
	$rs1=$pdo->query($sql);
	$result1=$rs1->fetch(PDO::FETCH_ASSOC);

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
 		<div><a href="updata1.php?story_id=<?php echo $result['story_id']?>">修改本小说简介</a></div>
 		<div><a href="updata2.php?story_id=<?php echo $result['story_id']?>">添加本小说章节</a></div>
 		<div><a href="updata3.php">添加新小说</a></div>	
 	</div>
 </body>
 </html>