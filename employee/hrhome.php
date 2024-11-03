<?php 
include 'hrbase.php';
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
            <a href="#header">Home</a>
            <a href="#aboutus">About us</a>
            <a href="#services">Services</a>
            <a href="#contact">Contact</a> 
            <a href="#mission">mission & vission</a> 
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
     
    <div class="head" id="aboutus">
     <p style="text-align: center; background-color: rgb(172, 139, 50); font-size: xx-large; color: black; font-weight: bold;">About us</p>
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
     
    <div class="head" id="services"> 
      <h1 style="background-color: aquamarine; text-align: center; text-emphasis-color: black;">Services</h1>
    </div>
      <h1 >Service  of Our Company</h1>
    <section class="cards">
       <div class="card">
      <img src="https://bitcluster.ru/wp-content/uploads/2023/12/i1-1.png" alt />
      <h1>Data center service</h1>
      <p>The facility helps companies that</p>
      <p>want to build data centers to have</p>
      <p>data centers without having to build</p>
      <p>them on their own private premises.</p>
    </div> <div class="card">
      <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRZYJ6f-NNRqv2-ER4LDpOc_hFuhYUATWGVDA&s" alt>
      <h1>Web-site And Software Developed</h1>
      <p>The facility helps companies that</p>
      <p>want to build data centers to have</p>
      <p>data centers without having to build</p>
      <p>them on there own private premises.</p>
    </div>
    <div class="card">
      <img src="https://www.uaa.alaska.edu/academics/college-of-engineering/departments/computer-science-and-engineering/_images/cse-internship-1.png" alt />
      <h1>Internship training service</h1>
      <p>The facility helps companies that</p>
      <p>want to build data centers to have</p>
      <p>data centers without having to build</p>
      <p>them on their own private premises.
    </div></section>
    
      <h1>Service of Our Web-site</h1>
      <section class="cards2" style="background-color: dimgrey;">
        <div class="card2"> 
          <img src="https://empmonitor.com/blog/wp-content/uploads/2020/04/Importance-Of-Employee-Management-System.png"alt>
          <h1>Importance-Of-Employee-Management-System</h1>
          <p>The purpose of an employee management system</p> 
          <p>to help improve workforce productivity, identify</p>
          <p> ways to engage and retain talent, and alleviate</p>
          <p> administrative burdens for HR professionals. </p> 
          </div> 
        <div class="card2"> 
          <img src="https://www.timedoctor.com/blog/images/2020/01/employee-management-1170x780.jpg.webp"alt>
          <h1 > helps for managers and employee</h1>  
          <p>managers and employees improve communication and connection</p>
          <p>which boost the workplace environment. It makes them </p>
          <p>work together and reduces gaps to meet organizational goal </p> 
          <p>A positive relationship between the employee and employer improves</p>
          <p>workforce productivity and removes negativity, </p>
        </div> 
        <div class="card2"> 
          <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcT0kdmg2_QVwirLV_MUoIWpzcLKFAfNu0QEQg&s" alt="">
          <h1>main serviece of our Web-site</h1>
          <p>Add Unlimited Employees.</p>
          <p>Assign Employee to Manager.</p>
        <p> Manage Monthly, Weekly, Fixed Salary Employees.</p>
        <p>Employee Leave Management System.</p>
        <p>Employee Task Management.</p>
        <p> Employee Login Panel.</p>
        <p>Employee Payroll Management.</p>
        <p> Employee Performance Management.</p>
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
     <li><a href="#header">Home</a></li>
     <li> <a href="#aboutus">About </a></li>
    <li><a href="#mission">mission and Vision</a></li>
    <li><a href="#services">Services</a></li>

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