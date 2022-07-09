<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/style1.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.1.1/css/all.min.css">
    
    <title>Pathshala</title>
      
</head>
<body>
    <!--menubar-->
    <div id="header" class="sticky-top">
        <div class="container">
            <div class="row">
                <div class="col-md-4">                   
                    <h1 id="logo"> <img src="./image/logom.png" alt="" width="50px" height="50px"  id="pathshala"> Pathshala </h1>
                </div>
                <div class="col-md-8">
                    <ul id="menu" class="float-md-right">
                        <li><a href="index.php"><i class="fas fa-home"></i> Home</a></li>
                        <li><a href="About us.php"><i class="fas fa-address-card"></i> About us</a></li>
                        <li><a href="Contact us.php"><i class="fas fa-phone"></i> Contact us</a></li>
                        <li><a href="Books.php"><i class="fa fa-book"></i> Books</a></li>
                        <li><a href="Login.php"><i class="fas fa-sign-in-alt"></i> Login</a></li>
                    </ul>
                </div>
            </div>
        </div>

    </div>

   
  <div class="container">
       <div class="row row-cols-3">
         <?php
include"connection.php";
$sql="SELECT * FROM  book";
$query=mysqli_query($con,$sql);
while($fetch=mysqli_fetch_assoc($query))
{
?>

             <div class="col  mb-5">
                <div class="card" style="width: 18rem;">
                    <img src="./Admin/upload/<?php echo $fetch["bimage"]; ?>" class="card-img-top" alt="..." width="200px;" height="200px">
                    <div class="card-body">
                      <h5 class="card-title">Book name: <?php echo $fetch['bname'] ?></h5>
                      <p class="card-text">Author:<?php echo $fetch['bauthor']?></p>
                      <p class="card-text">Publication Date:<?php echo $fetch['bdate']?></p>
                      <!--<img src='images/".$row['imagename']."' >-->
                      <div class="text-center">
                     <a href="Login.php" class="btn btn-primary">Apply</a>
                      </div>
                      
                    </div>
                  </div>
                </div>
             <?php
}
             ?>
   </div>
      </div>
 



      <!--footer-sidebar-->
       <div id="footer-sidebar">
           <div class="container">
               <div class="row">
                   <div class="col-md-4">
                          <div class="footer-widget">
                              <h4 id="fw">About company</h4>
                              <p>Pathshala is an open library for everyone.You can read your favorites books in just  single click.</p>
                              <p>You will be able to read books at any timeand at any place.</p>
                          </div>
                   </div>
                   <div class="col-md-4">
                    <div class="footer-widget">
                        <h4 id="fw">Books</h4>
                        <ul class="books-types">
                            <li><i class="fa fa-book" ></i><a href="">  Kid's story</i></a></li>
                            <li><i class="fa fa-book" ></i><a href="">  Novels</i></a></li>
                            <li><i class="fa fa-book" ></i><a href="">  School Books</i></a></li>
                            <li><i class="fa fa-book" ></i><a href="">  Motivation Books</i></a></li>
                            <li><i class="fa fa-book" ></i><a href="">  Riligious Books</i></a></li>
                           
                        </ul>
                        </div>
                   </div>
                   <div class="col-md-4">
                    <div class="footer-widget">
                        <h4 id="fw">Pathshala Address</h4>
                        <address>
                            <b>Pathshala</b>
                            Awaleshpur, Mahespur Varanasi
                           <br> UTTAR PRADESH ,INDIA 221106<br>
                           p:(+91)6392843685
                        </address>
                        </address>
                        </div>
                   </div>
               </div>
           </div>
       </div>



       <!--footer-->
       <div id="footer">
            <div class="container text-center">
                <div class="row" >
                    <div class="col-md-6" class="text-center">
                        copyright@2022 <strong> <a href="index.html" id="f"> PATHSHALA</a></strong>
                    </div>
                    <div class="col-md-6" class="text-center">
                        Designed by <strong>Priya & Pankaj</strong>
                    </div>
                </div>
            </div>
       </div>
</body>
</html>