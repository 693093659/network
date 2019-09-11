<?php 
	session_start();
	$story_id=$_GET['story_id'];
	if($_SESSION['username'])
	 	{

	 		header('location:command.php?story_id='.$story_id);
		}
	else{
	 		header('location:login.html');
	 }
 ?>