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
      
     
    <div class="head" id="services"> 
      <h1 style="text-align: center; text-emphasis-color: black;">Services</h1>
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