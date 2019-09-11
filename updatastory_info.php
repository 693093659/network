<?php 
	session_start();
	require('connect.php'); 
	$name=$_POST['name'];
	$intr=$_POST['intr'];
	$author_id=$_SESSION['author_id'];
	$sql="select * from story_info where author_id='{$author_id}'";
	$sql="update story_info set name='{$name}',content='{$intr}' where author_id=$author_id";
	$result=$pdo -> exec($sql);
	if($result)
	{
		echo '<script>alert("修改成功");history.back()</script>';
	}
	else
		echo '<script>alert("修改失败");history.back()</script>';
 ?>