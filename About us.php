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
        body{
            background:#FAF9F6;
        }
    #banner2
   {
   background:url("./image/b.jpg");
   background-size:cover;
   height:500px;  
   padding-top: 12em;    
   }
   
     .title {
  color: black;
  font-family: monospace;
  overflow: hidden; /* Ensures the content is not revealed until the animation */
  border-right:  solid white; /* The typwriter cursor */
  white-space: nowrap; /* Keeps the content on a single line */
  margin: 0 auto; /* Gives that scrolling effect as the typing happens */
  letter-spacing: .10em; /* Adjust as needed */
  animation: 
    typing 3.5s steps(35, end),
    blink-caret .5s ;
    animation-iteration-count: 100;
}


/* The typing effect */
@keyframes typing {
  from { width: 0 }
  to { width: 100% }
}

/* The typewriter cursor effect */
@keyframes blink-caret {
  from, to { border-color: transparent }
  50% { border-color: orange}
}



       #about
        {
          padding:3em;              
            
        }
        #i::after{
          content:'|';
          font-size:80px;
          text-align:center;
         
          

        }
      
        #l
        {  
         width:280px;
         height:200px;
        margin-left:-15px;
        }
        #border
        {
            border:2px solid gray;
            background:#FFFFFF;
        }
        .path{
            font-family: "Times New Roman", Times, serif;
            color:tomato;
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
    <!--About Pathshala-->
    
    <div id="banner2" >     
     <div class="container">
         <div class="row">
             <div class="col">
                <h1 class="title text-center text-danger">In order to succeed,you must read books!</h1>             
             </div>             
         </div>
     </div>
 </div>
 

       
       
       <div class="container" id="about">
       <div class="row" id="border">
           <div class="col-md-4 " id="i">
               <img src="./image/logom.png" alt="" id="l" >
           </div>
           <div class="col-md-8" id="c">
              <h2 class=" path text-center" >
                  <u>Pathshala<i class="fas fa-book"></i> <small>Your best friend!!</small></u>
              </h2>
              <p>Pathshala is a E-Library where you can read every types of book without any charges.<br>
                  Pathshala enables users to obtain open digitized data from anywhere in the world by online access.
                  <br>Here you can search books on your choice and read anywhere at any time. 
                  <br>Different types pf books are available here like kids,story,novel etc.
                   </p>              
                 </div>
           </div>
    </div>
   

      
   

    <div class="main"> 
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
       <script>    AOS.init();  </script>
       <script src="./css/aos/dist/aos.js"></script>
</body>
</html>