<?php
include"connection.php";
if(isset($_POST["submit"]))
{
$name=$_POST["username"];
$email=$_POST["email"];
$msg=$_POST["msg"];
$sql="INSERT INTO message(name,email,msg) VALUES('$name','$email','$msg')";
$query=mysqli_query($con,$sql);
if($query)
{
    ?>
    <script>
        alert("Message Send Successfully");
    </script>
    <?php
}
else{
    ?>
<script>
    alert("Message failed");
</script>
<?php
}
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/style1.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.1.1/css/all.min.css">
    <link rel="stylesheet" href="./css/aos/dist/aos.css" />
    <title>Pathshala</title>
    <style>
      #detail{
          color:white;
          margin-bottom:150px;
          box-shadow: 0px 0px 40px 20px #0ff;
         
      
      }
        .contact
        {
           
            background:url("./image/conn.jpg");
            background-size:cover;
            
            
           
           
        }
        h2
        {
            color:white;
            text-align: center;
        }
        .content p{
            color:white;
            text-align: center;
            margin-bottom:100px;
        }
        .btn
        {
            margin-top:20px;
        }
        .col
        {
            margin-top:20px;
        }
        label
        {
            color:white;
            margin-left: -150px;
        }
      span
      {
        font-weight: bold;
        font-size: 150%;
}
      }
      p
      {
        font-size: 20px;
      }
      .contactForm 
      {
       
      padding-left:160px;
      box-shadow: 0px 0px 40px 20px #0ff;
      height:395px;
      }
     

    </style>
      
</head>
<body>
    <!--menubar-->
    <div id="header" class="sticky-top">
        <div class="container">
            <div class="row">
                <div class="col-sm-3 col-md-3 col-lg-4">                   
                    <h1 id="logo"> <img src="./image/logom.png" alt="" width="50px" height="50px"  id="pathshala"> Pathshala </h1>
                </div>
                <div class=" col-sm-9 col-md-9 col-lg-8">
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
    <section class="contact">
       
       <div class="container">
           <div class="row">
               <div class="col">
                <div class="content " data-aos="fade-up">
                    <h2><u>Contact us</u></h2>
                    <p>Pathshala is open library for everyone.Whenever you need help just contact us and also you can give us a suggestion for Pathshala.</p>
                </div>
               </div>
           </div>
           
           <div class="row">
               <div class="col-md-6"  id="detail">
                <div class="contactInfo">
                    <h2 class="text-center"><u>Contact-Information</u></h2>
                    <div class="box">
                       <div class="icon"><i class="fas fa-map-marker-alt"></i></div> 
                       <div class="text">
                       <span>Address</span> 
                           <p>Awaleshpur kandawa Varanasi Uttar Pradesh 221106</p>
                       </div>
                    </div>
     
                    <div class="box">
                     <div class="icon"><i class="fas fa-phone"></i></div> 
                     <div class="text">
                     <span>Phone</span>                         
                         <p> 6307217700 <br> 6392843685</p>
                        
                     </div>
                  </div>
     
                  <div class="box">
                     <div class="icon"><i class="fas fa-box"></i></div> 
                     <div class="text">
                     <span>Email</span>                         
                         <p> pankajkeshari77@gmail.com<br>
                             mauryapriya0018@gmail.com </p>
                     </div>
                  </div>
                </div>
               </div>

               <div class="col-md-6">
                <div class="contactForm ">
                    <center>
                    <div class="row">
                    <form action="" method="post" >
                        <h2><u>Send message</u></h2>
                        <br>
                        <div class="col">                          
                            <div class="input-group">                               
                                <input type="text" placeholder="Enter your name" name="username"class="form-control">
                            </div>
                        </div>  
                        <div class="col">                         
                            <div class="input-group">                           
                                <input type="text" placeholder="Enter your Email-Id" name="email"class="form-control">
                            </div>
                        </div>  
                        <div class="col">                       
                            <div class="input-group">                        
                                <input type="text" placeholder="Enter your Message" name="msg"class="form-control">
                            </div>
                        </div>  
                        <div class="col">
                            <div class="form-group">
                                <button type="submit" class="btn btn-primary form-control mb-5 "name="submit">Send</button>
                            </div>
                        </div>

                    </form>
                </div>
                </div>
            </div>
     
               </div>
               </center>
           </div>          
       </div>

   </section>

  

      <!--footer-sidebar-->
       <div id="footer-sidebar">
           <div class="container">
               <div class="row">
                   <div class=" col-sm-4 col-md-4">
                          <div class="footer-widget">
                              <h4 id="fw">About company</h4>
                              <p>Pathshala is an open library for everyone.You can read your favorites books in just  single click.</p>
                              <p>You will be able to read books at any timeand at any place.</p>
                          </div>
                   </div>
                   <div class="col-sm-4 col-md-4">
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
                   <div class=" col-sm-4 col-md-4">
                    <div class="footer-widget">
                        <h4 id="fw">Pathshala Address</h4>
                        <address>
                            <b>Pathshala</b>
                            Awaleshpur, Mahespur Varanasi
                           <br> UTTAR PRADESH,INDIA 221106<br>
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
                    <div class=" col-sm-6 col-md-6" class="text-center">
                        copyright@2022 <strong> <a href="index.html" id="f"> PATHSHALA</a></strong>
                    </div>
                    <div class=" col-sm-6 col-md-6" class="text-center">
                        Designed by <strong>Priya & Pankaj</strong>
                    </div>
                </div>
            </div>
       </div>



       <script src="./css/aos/dist/aos.js"></script>
       <script>    AOS.init();  </script>
</body>
</html>

