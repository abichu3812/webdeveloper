<?php 
include 'adminbase.php';
?>
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
      
       <p style=" width:auto;height:40px; font-size:xx-large ; text-align: center; color: black; ; "><em>Welcome to STCC Employee Management System  
      </em> </p> 
     
    <div>
    <img style="position: relative;" src="https://lh3.googleusercontent.com/p/AF1QipNX__8T-9tYwkrwamUbhgDV0ZSGkA1is3xVDjxI=s680-w680-h510" alt="centerphoto">
     <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15633.578687563042!2d37.3658072986136!3d11.595185835193924!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x1644d3546b792e67%3A0xc2ab4d79879b33a0!2sAmhara%20Science%20and%20Technology%20commission!5e0!3m2!1sen!2set!4v1693228438033!5m2!1sen!2set" width="550" height="350" margin-right="60%" style="border: 0" allowfullscreen loading="lazy" referrerpolicy="no-referrer-when-downgrade">
    </iframe>
  </div>

    <p style="text-align: left;font-size: x-large; font-weight: bold; ">Amhara Science and Technology Commission</p>
       
     <div class="visit-often-container">
      <a href="https://www.example.com" class="visit-often-button">Visit often </a>
    </div> 

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