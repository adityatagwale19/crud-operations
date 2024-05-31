<?php
echo $stu_name = $_POST['sname'];
echo $stu_address = $_POST['saddress'];
echo $stu_class = $_POST['class'];
echo $stu_phone = $_POST['sphone'];

$conn = mysqli_connect("localhost","root","","crud") or die("connection failed");

$sql = "INSERT INTO students(sname,saddress,sclass,sphone) VALUES('{$stu_name}','{$stu_address}','{$stu_class}','{$stu_phone}')";

$result = mysqli_query($conn, $sql) or die("Query unsuccesful");

header("location: http://localhost/php/CRUD_Operations/CRUD/index.php");

mysqli_close($conn);

?>