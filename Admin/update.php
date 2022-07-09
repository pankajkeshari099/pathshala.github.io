<?php
include"connection.php";
$ids=$_GET['id'];
$sql="Select * from registration where id='$ids'";
$query=mysqli_query($con,$sql);
$res=mysqli_fetch_assoc($query);

if(isset($_POST['update']))
{
$idds=$_GET['id'];
$name=$_POST['fname'];
$lname=$_POST['lname'];
$email=$_POST['email'];
$pass=$_POST['pass'];
$address=$_POST['address'];
$gender=$_POST['gender'];

$sqll="UPDATE registration SET fname='$name',lname='$lname',email='$email',password='$pass',address='$address',gender='gender' WHERE id=$idds";
$queryy=mysqli_query($con,$sqll);
if($queryy)
{
    ?>
    <script>
        alert("data updated");
    </script>
    <?php
}
else
{
    ?>
    <script>
        alert("data failed to updated");
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
            background: linear-gradient(90deg, rgba(2,0,36,1) 0%, rgba(9,9,121,1) 35%, rgba(0,212,255,1) 100%);
            color: white;
        }

        .registration h2 {
            margin-bottom: 2em;

        }
        .mt-5, .my-5 {
    margin-top: 3rem!important;
    padding-bottom: 6.4em;
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
 
    

    <!--Registration page-->
    <div class="registration">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 offset-2 mt-5" id="res">
                        <h2 class="text-center"><u>Update Profile  </u></h2>
 <!--for start from here-->  <form action="" name="f1" method="post" onsubmit="return validateForm()">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="input-group">
                                        <div class="input-group-prepened">
                                            <span class="input-group-text"> <i class="fas fa-user"></i></span>
                                        </div>
                                        <input type="text" placeholder="Enter your First name" name="fname" value="<?php echo $res['fname'];?>" class="form-control">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="input-group">
                                        <div class="input-group-prepened">
                                            <span class="input-group-text"> <i class="fas fa-user"></i></span>
                                        </div>
                                        <input type="text" placeholder="Enter your Last name" name="lname" value="<?php echo $res['lname'];?>"  class="form-control">
                                    </div>
                                </div>

                            </div>
                          
                            <div class="row">
                                <div class="col">
                                    <div class="input-group ">
                                        <div class="input-group-prepened">
                                            <span class="input-group-text"><i class="fas fa-envelope"></i></span>
                                        </div>
                                        <input type="email" placeholder="Enter your Email-id"value="<?php echo $res['email'];?>" name="email" class="form-control">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <div class="input-group ">
                                        <div class="input-group-prepened">
                                            <span class="input-group-text"><i class="fas fa-lock"></i></span>
                                        </div>
                                        <input type="password" placeholder="Enter your Password" value="<?php echo $res['password'];?>" name="pass" class="form-control">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <div class="input-group ">
                                        <div class="input-group-prepened">
                                            <span class="input-group-text"><i class="fas fa-lock"></i></span>
                                        </div>
                                        <input type="password" placeholder="Re-enter Password" value="<?php echo $res['password'];?>" name="rpass" class="form-control">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <div class="input-group ">
                                        <div class="input-group-prepened">
                                            <span class="input-group-text"><i class="fas fa-map-marker-alt"></i></span>
                                        </div>
                                        <input type="text" placeholder="Enter your Address" value="<?php echo $res['address'];?>" name="address"  class="form-control">
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
                                        <button type="submit" class="btn btn-primary form-control mb-5" name="update">Update</button>
                                    </div>
                                </div>
                            </div>
                    </div>

        </form>
    </div>
    </div>
    </div>
    </div>  
</body>
</html>