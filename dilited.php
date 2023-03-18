<?php
include '../server/connection.php' ;
$id = $_GET['id'];
$deletequery =" delete from product where id=$id ";
$query = mysqli_query($con, $deletequery);
if($query){
    ?>
    <script>
        alert ("Deleted");
    </script>
    <?php
}else{
    ?>
    <script>
        alert ("Not Deleted");
    </script>
    <?php
}
header('location:actions.php');
?>