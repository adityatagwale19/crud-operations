<?php

$stu_id = $_GET['id'];

include 'connection.php';

$sql = "DELETE FROM students WHERE sid = {$stu_id}";
$result = mysqli_query($conn, $sql) or die("Query unsuccesfull");

header("location: http://localhost/php/CRUD_Operations/CRUD/index.php");

mysqli_close($conn);

?>