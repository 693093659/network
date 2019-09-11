<?php 
	session_start();
	require('connect.php'); 
	$name=$_POST['name'];
	$content=$_POST['content'];
	$author_id=$_SESSION['author_id'];
	$sql="insert into story_info (name,content,author_id) values('{$name}','{$content}','{$author_id}')";
	$result=$pdo -> exec($sql);
	if($result)
	{	
		echo '<script>alert("修改成功");history.back()</script>';
	}
	else
		echo '<script>alert("修改失败");history.back()</script>';
	
 ?>