<?php
    session_start();	
    if (!isset($_SESSION['username'])) {
        echo '<script>alert("请重新登录");history.back()</script>';
    }
?>