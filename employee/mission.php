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
 <h1 id="mission" style="text-align: center;">Missions And Visions</h1>
  <section class="background">
    <div class="about-us">
      <div class="aside-left">
        <h1>Vision</h1>
        <ul>
          <li class="marked-item">
            In the year 2024, the life of the region's society will be
          </li>
          <li class="none-marked">
            supported by science, technology and information communication.
          </li>
        </ul>
        <h1>Values</h1>
        <ul>
          <li class="marked-item">Sincerity</li>
          <li class="marked-item">Group Work</li>
          <li class="marked-item">Willing o know new things</li>
          <li class="marked-item">Deep observation</li>
          <li class="marked-item">Making a difference</li>
        </ul>
      </div>
      <div>
        <h1>Mission</h1>
        <ul>
          <li class="marked-item">
            Finding, selecting, introducing, adapting and creating effective
            technologies.
          </li>
          <li class="marked-item">
            Ensuring the growth of the region by using and developing and
            transferring technology.
          </li>
        </ul>
        <h1>Customers</h1>
        <ul>
          <li class="marked-item">
            Government institutions and employees if the region.
          </li>
          <li class="marked-item">Non-governmental organizations.</li>
          <li class="marked-item">The community.</li>
          <li class="marked-item">Private sector.</li>
        </ul>
      </div>
    </div>
  </section>
  <div class="head" id="videos">
    <h1>Some Videos</h1>
  </div>

  <section class="videos">
    <div class="video1">
      <iframe width="360" height="315" src="https://www.youtube.com/embed/vLPEF8PSZ3M?si=YiOxhgrPHN9QAQfn" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
    </div><div class="video2">
      <iframe width="360" height="315" src="https://www.youtube.com/embed/0qLeL9kyHBs?si=OnSWJLXZ2Lh_uRJ_" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
    </div>
    <div class="video3">
      <iframe width="360" height="315" src="https://www.youtube.com/embed/gVzQ6JtixD0?si=RMPmsujID4a1XHlo" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
    </div>


</section>
     <div class="view-more-container">
      
      <a href="https://www.youtube.com/watch?v=_05eMvvhk7A" class="view-more-button">View More</a>
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