<?php
include"connection.php";
session_start();

if(isset($_POST['submit']))
{
    $email=$_POST['email'];
    $pass=$_POST['pass'];
    $sql="SELECT *FROM registration WHERE email='$email' AND password='$pass'";
    $query=mysqli_query($con,$sql);
    $result=mysqli_fetch_assoc($query);
    if($result['usertype']=='user')
    {
        header("Location:./User/user_index.php");
        $_SESSION['email']=$_POST['email'];
    }
    else if($result['usertype']=='admin')
    {
       header("Location:./Admin/admin_index.php");
       $_SESSION['email']=$_POST['email'];
    }
    else{
        echo "failed";
    }
}
?>
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
    <style>
        .login {
            margin-top: 20px;
            margin-bottom: 20px;
        }

        #log {

            border: 2px solid black;
            box-shadow: 5px 3px 2px gray;
            border-radius: 20px;

            padding-top: 20px;

        }

        #log h3 {
            text-align: center;
            margin-bottom: 40px;
        }

        #log h3 hr {
            max-width: 100px;

        }

        #f {
            text-decoration: none;
            color: white;
        }
    </style>

</head>

<body>
    <!--menubar-->
    <div id="header" class="sticky-top">
        <div class="container">
            <div class="row">
                <div class="col-sm-3 col-md-3 col-lg-4">
                    <h1 id="logo"> <img src="./image/logom.png" alt="" width="50px" height="50px" id="pathshala">
                        Pathshala </h1>
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

    <!--login page-->
    <div class="login">
        
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <img src="./image/login.jpg" alt="" width="400px" height="500px">
                    </div>
                    <div class="col-md-6" id="log">
                    <form action="" method="post">
                        <h3>Login Pathshala
                            <hr>
                            </hr>
                        </h3>

                        <div class="form-group">
                            <input type="text" placeholder="Enter your email-id" name="email" class="form-control">
                        </div>
                        <div class="form-group">
                            <input type="password" placeholder="Enter your password" name="pass" class="form-control">
                        </div>
                        <div class="form-group">
                            <button name="submit" class="btn btn-primary form-control">Login</button>
                        </div>
                        <div class="form-group">
                            <a href="./registration.php">
                                <p>New Registration</p>
                            </a>
                            <!--<button name="sub" class="btn btn-primary form-control"><a id="f" href="">
                                    New Registration</a></button>-->
                        </div>
                    </div>
                </div>
            </div>
        </form>
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
                        <p>You will be able to read books at any timeand at any place.</p>
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
    <div id="footer">
        <div class="container text-center">
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