<?php 
	session_start();
	require('connect.php'); 
	$author_id=$_SESSION['author_id'];
	$sql="select * from story_info where author_id='{$author_id}'";
	$rs=$pdo->query($sql);
	$result=$rs->fetch(PDO::FETCH_ASSOC);
	$story_id=$result['story_id'];
	$sql="select * from chapter_info where story_id='{$story_id}'";
	$rs1=$pdo->query($sql);
	$result1=$rs1->fetchAll(PDO::FETCH_ASSOC);
	echo "您一共有:";
	foreach ($result1 as $key => $value) {
		echo "第".$value['chapter_id']."章 ";
	}
 ?>
 <!DOCTYPE html>
 <html>
 <head>
 	<meta charset="utf-8">
 	<title>我的小说更新</title>
 </head>
 <body>
 	<div>
 		<p></p>
 		<div>
 			<form action="updatastory.php" method="POST">
 			<input type="hidden" name="story_id" value="<?php echo $story_id ?>">
 			<input type="text" name="number" placeholder="请输入您要添加的章节序号">
 			<textarea placeholder="请输入您要添加的章节内容" name="area"></textarea>
 			<input type="submit" name="submit">
			</form>
 		</div>
 	</div>
 </body>
 </html>