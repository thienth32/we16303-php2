<?php
$title = $_GET['title'];
$author_id = $_GET['author_id'];

$connect = new PDO("mysql:host=127.0.0.1;dbname=we16303-php2;charset=utf8", "root", "12345678");
$sql = "insert into posts (title, author_id)
        values ('$title', $author_id)";
$stmt = $connect->prepare($sql);
$stmt->execute();

header("location: index.php");

?>