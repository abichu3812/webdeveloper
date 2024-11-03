<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>employee managment system</title>
    <script src="script.js"></script>
    <script>
      function greetUser() {
        alert('Hello, world!');
      }
    </script>
    <link rel="stylesheet"
    href="home.css">
    <link rel="stylesheet" href="bootstrap.min.css"
<body>
<?php 
include 'base.php';
?>
   <header id="header" class="header">
  <div class="header-container">
    <div class="logo">
      <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSVIIFnFTqUON_-eYdsJ9G5nuuKuLx8pDgtTQ&s" alt="Logo">
    </div>
    <div class="header-right">
      <div class="location-info">
        <i class="fas fa-map-marker-alt location-icon"></i>
        <span>Mulualem Rd, Bahir Dar</span>
      </div>
      <div class="phone-info">
        <i class="fas fa-phone phone-icon"></i>
        <span>0582263759</span>
      </div>
    </div>
  </div>
</header>
 <header style=" width:auto; height: auto;">       
 <nav>
            <div class="link" > 
            <a href="home.php">Home</a>
            <a href="aboutus.php">About us</a>
            <a href="services.php">Services</a>
            <a href="#contact">Contact</a> 
            <a href="mission.php">mission & vission</a> 
        </div>  
         <div class="nav-toggle" onclick="toggleNavMenu()">&#9776;</div>
      </nav>
      
  </header>
     <br>
      <br>
      
     
    <div class="head" id="aboutus">
     <p style="text-align: center; font-size: xx-large; color: black; font-weight: bold;">About us</p>
       <section class="descriptions">
        <div class="description">

  <img  src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSPfOPts4BEVxKlDwEmYerr7hxFC_XmWcgwfQ&s" alt="Your Image">
       <P> Ethiopian learners will have the opportunity to gain foundational level skills across three domains: Programming Fundamentals, Data Science Fundamentals and ...
      </p>   
        </div>
        <div class="description">
          <h1> Background of Organization </h1>
           <p>  For the first time in 1995, the task of coordinating and leading the sector, 
              which started in our region by an expert and the relevant regional offices as a committee,
              has been carried out since the end of 2001 through the implementation of a basic work process
              change study under the capacity building office, when a study and trial implementation was
              carried out to organize a work process and three versions. During the preparations for full 
               implementation, the regional government allowed the sector to be established as an agency,
              and in December 2002, it was established independently under Rule No. 72/2002 as the ABKME Information and Communication Technology Development Agency.‌‌For the first time in 1995, the task of coordinating and leading the sector,which started in our region by an expert and the relevant regional offices as a committe. </p>
        </div>
       </section>
   
</body>
<footer style="background-color: white; width: auto; height: auto;"> 
  <div class="footer">
 
 <div id="contact" class="contact"> 
      <h1>contact us</h1>
    <li>
      <i class="fa-solid fa-map-marker-alt"></i>
       Bahir Dar, Ethiopia
    </li>
  
    <li>
      <i class="fa-solid fa-blender-phone"></i> Telephone No. :
      0582263759
    </li>
    <a href="mailto:example@email.com">
      <i class="fa fa-envelope"></i> example@email.com
    </a>
      </li>
    <li>
      <i class="fa-solid fa-envelopes-bulk"></i> Postal : 2276 Fax>
      :058-220-93-64
    </li>
    <li>
      <i class="fa-solid fa-globe"></i> For More Info. :<a href="http://sticc.gov.et/">Sticc.gov.et</a>
    </li>
  </ul>
</div>
   <div class="social-icons">
      <h1> visit here</h1>
      <ul>
    <li>
       <a href="https://www.facebook.com/people/Amhara-Science-and-Technology-Commission/100067560995785/" class="icon-link">
      <i class="fab fa-facebook-f" ></i>
      </a></li>
    <li> <a href="#" class="icon-link">
      <i class="fab fa-twitter"></i>
    </a></li>
    <li>
    <a href="#" class="icon-link">
      <i class="fab fa-telegram"></i>
    </a></li>
    <li>
    <a href="#" class="icon-link">
      <i class="fab fa-linkedin-in"></i>
    </a></li> 
    </ul>

  </div>
  <div class="catagorie">
    <h1>company</h1>
    <li><a href="home.php">Home</a></li>
     <li> <a href="aboutus.php">About </a></li>
    <li><a href="mission.php">mission and Vision</a></li>
    <li><a href="services.php">Services</a></li>


   </div>
  </div>

<div class="copy">
  <hr />
  <p>Copyright © 2023 Amhara Science and Technology Commission</p>
  <p>Developed  By: intern student </p>
  <p>Advised By : Mr.leul</p>
</div>



</footer>

    

</html>