<?php 
	require('connect.php'); 
	$story_id=$_GET['story_id'];
	$sql="select * from story_info where story_id='$story_id'";
	$rs=$pdo->query($sql);
	$result=$rs->fetch(PDO::FETCH_ASSOC);
	$vote_count=$result['vote_count']+1;
	$sql="update story_info set vote_count='{$vote_count}' where story_id={$story_id}";
	$pdo->exec($sql);
	echo "<script>location.href='".$_SERVER["HTTP_REFERER"]."';</script>";
 ?>