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
                                  <a href="studentlogin.html">Student<br> Login</a>
                                  <a href="#">Admin<br> Login</a>
                                  
                                </div>
                              </div></li>
                            <li><a href=""><i class="fa fa-user-circle-o" aria-hidden="true"></i></a></li>
    
                        </ul>
                    </div>
                </div>
            </div>
            <!-- New Code-->
            <div class="welcome-message">
                <h1>Welcome to BUP After Admission Portal!</h1>
            </div>
            

<div class="w3-content w3-display-container ">
  <img class="mySlides" src="img_snowtops.jpg" style="width:1400px;  height:500px;">
  <img class="mySlides" src="img_lights.jpg" style="width:1400px;  height:500px;">
  <img class="mySlides" src="img_mountains.jpg" style="width:1400px; height:500px;">
  <img class="mySlides" src="img_forest.jpg" style="width:1400px;  height:500px;">

  <div class="button-tog">
    <div class="button-l">
        <button class="arin-slider-button-left" onclick="plusDivs(-1)">&#10094;</button>
       
    </div>
    <div class="button-r">
       
        <button class="arin-slider-button-right" onclick="plusDivs(1)">&#10095;</button>
    </div>
  </div>
  
</div>

<script>
var slideIndex = 1;
showDivs(slideIndex);

function plusDivs(n) {
  showDivs(slideIndex += n);
}

function showDivs(n) {
  var i;
  var x = document.getElementsByClassName("mySlides");
  if (n > x.length) {slideIndex = 1}
  if (n < 1) {slideIndex = x.length}
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none";  
  }
  x[slideIndex-1].style.display = "block";  
}
</script>
<!--testimonial section starts here--> 
<section class="testimonial">
    <div class="container">
        <div class="upper-part">
            <h1>Notices</h1>
           
            
        </div>

        <div class="owl-carousel owl-theme">
            <div class="item">                       <!--1 starts here -->
                <div class="test-1">
                 <div class="user-image">
                     <img src="person_1.jpg">
                     <i class="fa fa-quote-left"></i>
                 </div>
                 <p>List of finally selected <br>candidates for admission...</p>
                 <button class="slider-button">See More</button>
                
                 </div>
                
                <!--1 ends here --></div>
            <div class="item">                       <!--1 starts here -->
                <div class="test-1">
                 <div class="user-image">
                     <img src="person_1.jpg">
                     <i class="fa fa-quote-left"></i>
                 </div>
                 <p>List of finally selected <br>candidates for admission...</p>
                 <button class="slider-button">See More</button>
                
                 </div>
                
                <!--1 ends here --></div>
            <div class="item">                       <!--1 starts here -->
                <div class="test-1">
                 <div class="user-image">
                     <img src="person_1.jpg">
                     <i class="fa fa-quote-left"></i>
                 </div>
                 <p>List of finally selected <br>candidates for admission...</p>
                 <button class="slider-button">See More</button>
                 
                 </div>
                
                <!--1 ends here --></div>
            <div class="item">                       <!--1 starts here -->
                <div class="test-1">
                 <div class="user-image">
                     <img src="person_1.jpg">
                     <i class="fa fa-quote-left"></i>
                 </div>
                 <p>List of finally selected <br>candidates for admission...</p>
                 <button class="slider-button">See More</button>
                
                 </div>
                
                <!--1 ends here --></div>
            <div class="item">                       <!--1 starts here -->
                <div class="test-1">
                 <div class="user-image">
                     <img src="person_1.jpg">
                     <i class="fa fa-quote-left"></i>
                 </div>
                 <   <p>List of finally selected <br>candidates for admission...</p>
                 <button class="slider-button">See More</button>
                 
                 </div>
                
                <!--1 ends here --></div>
            <div class="item">                       <!--1 starts here -->
                <div class="test-1">
                 <div class="user-image">
                     <img src="person_1.jpg">
                     <i class="fa fa-quote-left"></i>
                 </div>
                 <p>List of finally selected <br>candidates for admission...</p>
                 <button class="slider-button">See More</button>
                 
                 </div>
                
                <!--1 ends here --></div>
            <div class="item">                       <!--1 starts here -->
                <div class="test-1">
                 <div class="user-image">
                     <img src="person_1.jpg">
                     <i class="fa fa-quote-left"></i>
                 </div>
                 <p>List of finally selected <br>candidates for admission...</p>
                 <button class="slider-button">See More</button>
            
                 </div>
                
                <!--1 ends here --></div>
            <div class="item">                       <!--1 starts here -->
                <div class="test-1">
                 <div class="user-image">
                     <img src="person_1.jpg">
                     <i class="fa fa-quote-left"></i>
                 </div>
                 <p>List of finally selected <br>candidates for admission...</p>
                 <button class="slider-button">See More</button>
               
                 </div>
                
                <!--1 ends here --></div>
                
                <!--1 ends here --></div>
        </div>



    </div>
    
</section>
<!--testimonial section ends here--> 
<!--java script file link-->
<script src="jquery.min.js"></script>
<script src="owl.carousel.js"></script>
<script src="function.js"></script>

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
