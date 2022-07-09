<?php
include"connection.php";
$id=$_GET['id'];
$delquery="delete from registration where id=$id";
$query=mysqli_query($con,$delquery);

header('location:user_details.php');
if($query)
{
    ?>
    <script>
        alert("Recorded deleted");
    </script>
    <?php
}
?>