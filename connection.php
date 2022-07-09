<?php
$host="localhost";
$user="root";
$pass="";
$database="pathshala";
$con=mysqli_connect($host,$user,$pass,$database);
if(!$con)
{
?>
<script>
    alert("connection failed");
</script>
<?php
}
?>