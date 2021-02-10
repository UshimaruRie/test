<?php 

$db_name = 'myshop';
$host = 'localhost';
$user_name = 'root';
$password = '';
$dsn = "mysql:dbname={$db_name};host={$host}";
try {
$pdo = new PDO($dsn, $user_name, $password);

} catch (PDOException $e) {

exit;
}



?>