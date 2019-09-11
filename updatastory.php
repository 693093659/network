<?php 
	session_start();
	require('connect.php'); 
	$story_id=$_POST['story_id'];
	$area=$_POST['area'];
	$number=$_POST['number'];
	$sql="insert into chapter_info (chapter_id,story_id,content) values('{$number}','{$story_id}','{$area}')";
	$result=$pdo -> exec($sql);
	if($result)
	{	
		echo '<script>alert("修改成功");history.back()</script>';
	}
	else
		echo '<script>alert("修改失败");history.back()</script>';
	
 ?>