<?php include 'header.php'; 

if(isset($_POST['deletebtn'])){

    include 'connection.php';

    $stu_id = $_POST['sid'];

    $sql = "DELETE FROM students WHERE sid = {$stu_id }";
    $result = mysqli_query($conn, $sql) or die("Query unsucessfull");

    header("location: http://localhost/php/CRUD_Operations/CRUD/index.php");

    mysqli_close($conn);
}
?>
<div id="main-content">
    <h2>Delete Record</h2>
    <form class="post-form" action="" method="post">
        <div class="form-group">
            <label>Id</label>
            <input type="text" name="sid" />
        </div>
        <input class="submit" type="submit" name="deletebtn" value="Delete" />
    </form>
</div>
</div>
</body>
</html>
