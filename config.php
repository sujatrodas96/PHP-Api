<?php
$username='root';
$password='';
$db='tuefri';
$servername='localhost';
$sql=new PDO(mysql:host=127.0.0.1;dbname='.$db.'';charset=utf8',$username,$password);
$sql->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
$sql->setAttribute(PDO::MYSQL_ATTR_USE_BUFFERED_QUERY, true);
$sql->setAttribute(PDO::ATTR_ERRMODE , PDO::ERRMODE_EXCEPTION);

define('APP_NAME', 'PHP REST API TUTORIAL');
?>