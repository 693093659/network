<?php 
	require('connect.php');
	require('check_login.php');
	$author_id=$_SESSION['author_id'];
	$sql="select * from story_info where author_id='{$author_id}'";
	$rs=$pdo->query($sql);
	$result=$rs->fetch(PDO::FETCH_ASSOC);
	$story_id=$result['story_id'];
	$sql="select * from comment_info where story_id='{$story_id}'";
	$rs1=$pdo->query($sql);
	$result1=$rs1->fetch(PDO::FETCH_ASSOC);
?>
<style type="text/css">
	.box1{
		width: 90%;
		height: 300px;
		border: 2px solid #ededed；
	}
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
            <td><?php echo $result1['name']; ?></td>
            <td><?php echo $result1['title']; ?></td>
            <td><?php echo $result1['content']; ?></td>
            <td><?php echo $result1['time']; ?></td>
        </tr>
    </tbody>
</table>
</body>
</html>