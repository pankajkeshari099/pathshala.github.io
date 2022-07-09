<?php
include "connection.php";
$ids=$_GET['id'];
$sql="SELECT * FROM book where bid='$ids'";
$query=mysqli_query($con,$sql);
while($fetch=mysqli_fetch_array($query))
{
    ?>
    <embed src="../Admin/pdf/<?php echo $fetch['bbook'];?>" type="application/pdf" width="100%" height="100%">
    <?php
}
/*
$file='../Admin/pdf/$fetch["bbook"]';
header('Content-type: application/pdf'); 
header('Content-Disposition: inline; filename="' .$file. '"'); 
header('Content-Transfer-Encoding: binary'); 
header('Accept-Ranges: bytes'); 
@readfile($file); 
*/ 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
</body>
</html>