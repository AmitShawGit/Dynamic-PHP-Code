<?php include '../server/connection.php' ; ?>
<?php
 $id = $_GET['id'];
 $status = $_GET['status'];
 $updatequery = " update product set status=$status where id=$id ";
 $query = mysqli_query($con ,$updatequery);
 header('location:actions.php');
?>