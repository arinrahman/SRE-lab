<?php 

$host="localhost";
$user="root";
$password="";
$db="aap_student";

mysql_connect($host,$user,$password);
mysql_select_db($db);

if(isset($_POST['uname'])){
    
    $uname=$_POST['username'];
    $password=$_POST['psw'];
    
    $sql="select * from student where user='".$uname."'AND Pass='".$password."' limit 1";
    
    $result=mysql_query($sql);
    
    if(mysql_num_rows($result)==1){
        echo " You Have Successfully Logged in";
        exit();
    }
    else{
        echo " You Have Entered Incorrect Password";
        exit();
    }
        
}
?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">

  <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--css link-->
    <link rel="stylesheet" type="text/css" href="style.css">
       <link rel="stylesheet" type="text/css" href="responsive.css">
       <!-- owl link-->
       <link rel="stylesheet" type="text/css" href="owl.carousel.min.css">
       <link rel="stylesheet" type="text/css" href="owl.theme.default.min.css">
        <!--font awesome link -->
        <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css">
        <!--google fonts link-->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
   
</head>
<header>
   <title>Home Page By Arin Rahman 2054901056</title> 
</header>
<body>
<div class="arin-container">
            <div class="navbar-arin">
                <div class="identity-menu-arin">
                    <div class="identity-arin">
                        <div class="logo-arin">
                            <img src="logo-arin.jpg">
                        </div>
                        <div class="title-arin">
                            <h6>BANGLADESH UNIVERSITY OF PROFESSIONALS</h6>
                        </div>
                    </div>
                    <div class="menu-arin">
                        <ul>
                            <li><div class="dropdown">
                                <button class="dropbtn"><a href="">LOGIN</a></button>
                                <div class="dropdown-content">
                                  <a href="#">Student<br> Login</a>
                                  <a href="#">Admin<br> Login</a>
                                  
                                </div>
                              </div></li>
                            <li><a href=""><i class="fa fa-user-circle-o" aria-hidden="true"></i></a></li>
    
                        </ul>
                    </div>
                </div>
            </div>
           <div class="container-arin">
            <div class="login-tog-arin">
                <div class="login-left-arin">
                    <img src="bup_final.jpg">
                    <h1>Welcome</h1>
                    <h2>To BUP After Admission Portal!</h2>
                </div>
                <div class="login-right-arin">
                    
                        <img src="logo-arin.jpg">
                        <h3>BANGLADESH UNIVERSITY <br> OF PROFESSIONALS</h3>
                        <div id="id01" class="modal"></div>
                        <form class="modal-content animate" action="/action_page.php" method="post">
                            <div class="imgcontainer">
                              <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
                              
                            </div>
                        
                            <div class="container">
                              <label for="uname"><b>Username</b></label>
                              <input type="text" placeholder="Enter Username" name="uname" required>
                        
                              <label for="psw"><b>Password</b></label>
                              <input type="password" placeholder="Enter Password" name="psw" required>
                                
                              <button type="submit">Login</button>
                              <label>
                                <input type="checkbox" checked="checked" name="remember"> Remember me
                              </label>
                            </div>
                        
                            <div class="container" style="background-color:#f1f1f1">
                              <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>
                              <span class="psw">Forgot <a href="#">password?</a></span>
                            </div>
                          </form>
                    
                </div>
            </div>
           </div>
<!--summary section starts here -->
<section class="summary">
    <div class="#">
       <div class="sum-tog">
       <div class="sum-item">
           <h1>Bangladesh University of Professionals (BUP)</h1>
           <p>To develop the civil and military <br>human capital through advanced education<br> and research to respond to the knowledge-based <br>society of the contemporary world.</p>
           <div class="sum-vegefoods-icons">
               <a href=""><i class="fa fa-twitter"></i></a>
               <a href=""><i class="fa fa-facebook-f"></i></a>
               <a href=""><i class="fa fa-instagram"></i></a>
               
           </div>
       </div>
       <div class="sum-item">
           
           <ul>
               <li><a href="">Research at BUP</a></li>
               <li><a href="">MPhil & PhD Programs</a></li>
               <li><a href="">Complete Research</a></li>
               <li><a href="">Ongoing Research</a></li>
               <li><a href="">BUP Journal</a></li>

           </ul>
       </div>
       <div class="sum-item">
         
           <ul>
               <li><a href="">About the University</a></li>
               <li><a href="">Mission</a></li>
               <li><a href="">Core Values</a></li>
               <li><a href="">Objectives</a></li>
           </ul>
       </div>
       <div class="sum-item">
          
               <div class="sum-map">
                   <span><i class="fa fa-map-marker"></i></span>
                   <span>Mirpur Cantonment, Dhaka- 1216</span>
               </div>
               <div class="sum-phone">
                   <span><i class="fa fa-phone"></i></span>
                   <span>88-02-8000443</span>
               </div>
               <div class="sum-mail">
                   <span><i class="fa fa-envelope"></i></span>
                   <span>info@bup.edu.bd</span>
               </div>
       </div>
   </div>
    </div>
</section>


<footer>
<div class="#">
   <div class="footer-div">
       <cite>Copyright ©2022 All rights reserved | This template is made with  by <a href="">Arin Rahman</a></cite>
   </div>
</div>
</footer>
            
        </div>
  
</body>

</html>
