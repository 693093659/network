<?php 
	require('connect.php');
	$username=$_POST['username'];
	$username=strtolower($username);
	$password=$_POST['password'];
	$password=addslashes($password);
	$sql="select * from author_info where username='{$username}' and password='{$password}'";
	$rs=$pdo->query($sql);
	$result=$rs->fetch(PDO::FETCH_ASSOC);
	if($result)
	{	
		 session_start();
   	 	 $_SESSION['username']=$username;
    	 $_SESSION['name']=$result['name'];
    	 $_SESSION['author_id']=$result['author_id'];
		 header('location:author.php');

	}
	else
		echo '<script>alert("用户名或密码错误");history.back()</script>';