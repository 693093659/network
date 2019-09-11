<?php 
	session_start();
	require('connect.php');
	$username=$_POST['username'];
	$password=$_POST['password'];	
	$area=$_POST['name'];
	$sql="insert into author_info (username,password,name) values('{$username}','{$password}','{$name}')";
	if($pdo -> exec($sql)){ 		
		{
			echo '<script>alert("添加成功");history.back()</script>';
			echo $pdo -> lastinsertid(); 
		} 
}
 ?>	