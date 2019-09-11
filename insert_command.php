<?php 
	session_start();
	require('connect.php');
	$story_id=$_POST['story_id'];
	$title=$_POST['c_title'];	
	$name=$_SESSION['name'];
	$area=$_POST['area'];
	$sql="insert into comment_info(story_id,title,name,content) values('{$story_id}','{$title}','{$name}','{$area}')";
	if($pdo -> exec($sql)){ 		
		{
			echo '<script>alert("评论成功");history.back();history.back()</script>';
			echo $pdo -> lastinsertid(); 
		} 
}
 ?>	