<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/style1.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.1.1/css/all.min.css">
    <title>Pathshala</title>
    <script>
        function validateForm()
        {
            var password1 = document.f1.pass.value;
            var password2 = document.f1.rpass.value;
           
            if(password1!=password2)
            {
               alert("Password should be same!");
                return false;
            }
           
        }
    </script>
    <style>
        .registration {
            background-image: url("image/back.jpg");
            color: white;
        }

        .registration h2 {
            margin-bottom: 2em;

        }
        

        .col {
            margin-top: 30px;
        }

        .fas {
            height: 1.5em;
            padding-top: 3px;
        }
        .btn
        {
            margin-top:-20px;
        }
        
    </style>
   
</head>
<body>
    <!--menubar-->
    <div id="header" class="sticky-top">
        <div class="container">
            <div class="row">
                <div class="col-sm-3 col-md-3 col-lg-4">
                    <h1 id="logo" class="mt-2"> <img src="./image/logom.png" alt="" width="50px" height="50px" id="pathshala">Pathshala </h1>
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

    <!--Registration page-->
    <div class="registration">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 offset-2 mt-5" id="res">
                        <h2 class="text-center"><u>Registration  </u></h2>
 <!--for start from here-->  <form action="" name="f1" method="post" onsubmit="return validateForm()">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="input-group">
                                        <div class="input-group-prepened">
                                            <span class="input-group-text"> <i class="fas fa-user"></i></span>
                                        </div>
                                        <input type="text" placeholder="Enter your First name" name="fname"  class="form-control">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="input-group">
                                        <div class="input-group-prepened">
                                            <span class="input-group-text"> <i class="fas fa-user"></i></span>
                                        </div>
                                        <input type="text" placeholder="Enter your Last name" name="lname"  class="form-control">
                                    </div>
                                </div>

                            </div>
                          
                            <div class="row">
                                <div class="col">
                                    <div class="input-group ">
                                        <div class="input-group-prepened">
                                            <span class="input-group-text"><i class="fas fa-envelope"></i></span>
                                        </div>
                                        <input type="email" placeholder="Enter your Email-id" name="email"class="form-control">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <div class="input-group ">
                                        <div class="input-group-prepened">
                                            <span class="input-group-text"><i class="fas fa-lock"></i></span>
                                        </div>
                                        <input type="password" placeholder="Enter your Password" name="pass" class="form-control">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <div class="input-group ">
                                        <div class="input-group-prepened">
                                            <span class="input-group-text"><i class="fas fa-lock"></i></span>
                                        </div>
                                        <input type="password" placeholder="Re-enter Password" name="rpass" class="form-control">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <div class="input-group ">
                                        <div class="input-group-prepened">
                                            <span class="input-group-text"><i class="fas fa-map-marker-alt"></i></span>
                                        </div>
                                        <input type="text" placeholder="Enter your Address" name="add"  class="form-control">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <div class="form-group" id="gen">
                                        <strong>Gender:</strong>
                                        <input type="radio" name="gender" value="male" >Male &nbsp
                                        <input type="radio" name="gender" value="female">female
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <div class="form-group">
                                        <button type="submit" class="btn btn-primary form-control mb-5" name="submit">Submit</button>
                                    </div>
                                </div>
                            </div>
                    </div>

        </form>
    </div>
    </div>
    </div>
    </div>


    <!--footer-sidebar-->
    <div id="footer-sidebar">
        <div class="container">
            <div class="row">
                <div class=" col-sm-4 col-md-4">
                    <div class="footer-widget">
                        <h4 id="fw">About company</h4>
                        <p>Pathshala is an open library for everyone.You can read your favorites books in just single
                            click.</p>
                        <p>You will be able to read books at any time and at any place.</p>
                    </div>
                </div>
                <div class="col-sm-4 col-md-4">
                    <div class="footer-widget">
                        <h4 id="fw">Books</h4>
                        <ul class="books-types">
                            <li><i class="fa fa-book"></i><a href=""> Kid's story</i></a></li>
                            <li><i class="fa fa-book"></i><a href=""> Novels</i></a></li>
                            <li><i class="fa fa-book"></i><a href=""> School Books</i></a></li>
                            <li><i class="fa fa-book"></i><a href=""> Motivation Books</i></a></li>
                            <li><i class="fa fa-book"></i><a href=""> Riligious Books</i></a></li>

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
    <div id="footer" >
        <div class="container">
            <div class="row">
                <div class=" col-sm-6 col-md-6" class="text-center">
                    copyright@2022 <strong> <a href="index.html" id="f"> PATHSHALA</a></strong>
                </div>
                <div class=" col-sm-6 col-md-6" class="text-center">
                    Designed by <strong>Priya & Pankaj</strong>
                </div>
            </div>
        </div>
    </div>
</body>
</html>

<?php
include"connection.php";
if(isset($_POST["submit"]))
{
$fname=$_POST["fname"];
$lname=$_POST["lname"];
$email=$_POST["email"];
$pass=$_POST["pass"];
$add=$_POST["add"];
$gender=$_POST["gender"];
$sql="INSERT INTO registration(fname,lname,email,password,address,gender) VALUES('$fname','$lname','$email','$pass','$add','$gender')";
$query=mysqli_query($con,$sql);
if($query)
{
    ?>
    <script>
        alert("Registration successfully");
    </script>
    <?php
}
else{
    ?>
<script>
    alert("Registration failed");
</script>
<?php
}
}

?>