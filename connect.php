<?php 
header('Content-type:text/html;charset=utf-8');
//1. 连接数据库
try{
    $dsn='mysql:host=localhost;dbname=db';
    $pdo=new PDO($dsn, 'root', '');
    $pdo->query('set names utf8'); 
}catch( PDOException $e){
    echo "error:". $e->getMessage() ;
    exit();
}
 ?>