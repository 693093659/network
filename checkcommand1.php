<?php 
	require('connect.php');
	require('check_login.php');
	$name=$_SESSION['name'];
	$sql="select * from comment_info where name='{$name}'";
	$rs=$pdo->query($sql);
	$result=$rs->fetch(PDO::FETCH_ASSOC);
?>
<style type="text/css">

</style>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>我的留言板</title>
</head>
<body>
<table width="200" border="1">
    <caption>我的留言板</caption>
    <thead>
        <tr>
            <th>用户名</th>
            <th>标题</th>
            <th>内容</th>
            <th>时间</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td><?php echo $result['name']; ?></td>
            <td><?php echo $result['title']; ?></td>
            <td><?php echo $result['content']; ?></td>
            <td><?php echo $result['time']; ?></td>
        </tr>
    </tbody>
</table>	
</body>
</html>