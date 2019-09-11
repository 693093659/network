<?php 
	require('connect.php');
	$story_id=$_GET['story_id'];
	$chapter_id=$_GET['chapter_id']+1;
	header('location:read.php?story_id='.$story_id.'&chapter_id='.$chapter_id);	
?>