<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>BHU Apartment Management System</title>
<style type="text/css">
#apDiv1 {
	position: absolute;
	width: 858px;
	height: 29px;
	z-index: 1;
	top: 49px;
	left: 162px;
}
.main{
	width:100%;
	background:linear-gradient(to top, rgba(0,0,0,0.5)50%, rgba(0,0,0,0.5)50%), url(House.jpg);
	background-position:center;
	background-size:cover;
	height:109vh;
}
</style>
<link href="SpryAssets/SpryMenuBarHorizontal.css" rel="stylesheet" type="text/css" />
<style type="text/css">
#apDiv2 {
	position: absolute;
	width: 141px;
	height: 223px;
	z-index: 2;
	left: 137px;
	top: 213px;
}
#apDiv3 {
	position: absolute;
	width: 165px;
	height: 221px;
	z-index: 3;
	left: 427px;
	top: 213px;
}
#apDiv4 {
	position: absolute;
	width: 170px;
	height: 115px;
	z-index: 4;
	left: 742px;
	top: 211px;
}
#apDiv5 {
	position: absolute;
	width: 177px;
	height: 115px;
	z-index: 5;
	left: 1037px;
	top: 206px;
}
</style>
<script src="SpryAssets/SpryMenuBar.js" type="text/javascript"></script>
</head>
<?php
include_once"dbase.php";
$msg="";
if(isset ($_POST['button2']))
{
//variable declaration
$fn=$_POST["fn"];
$em=$_POST["em"];
$cm=$_POST["cm"];
//insert query
$insert="INSERT INTO comment(Full_Name,Email,Comment) values('$fn','$em','$cm')";
$save=mysqli_query($conn,$insert);

if(!$save)
{
	echo"not succesfully";
	}
	else
	{
		echo"New user is registered succesfully";
		}
}
?>
<body>
      <div id="apDiv1">
        <ul id="MenuBar1" class="MenuBarHorizontal">
         <li><a href="home.html">HOME</a></li>
          <li><a class="MenuBarItemSubmenu" href="#">ABOUT</a>
            <ul>
              <li><a href="http://www.bhu.edu.et">Bule Hora University</a></li>
              <li><a href="Apartama.html">Apartment Service</a></li>
              <li><a href="mode.html">Service Mode</a></li>
            </ul>
          </li>
          <li><a class="MenuBarItemSubmenu" href="#">USERS</a>
            <ul>
              <li><a class="MenuBarItemSubmenu" href="#">Gallery</a>
                <ul>
                  <li><a href="photo.html">Photos</a></li>
                  <li><a href="https://www.youtube.com/channel/UCOwKefYkEcmCvFmfThy9KrQ">Videos</a></li>
                </ul>
              </li>
              <li><a href="http://www.bhu.edu.et">Web Mail</a></li>
              <li><a href="interest.html">Interests</a></li>
            </ul>
          </li>
          <li><a class="MenuBarItemSubmenu" href="#">DONATE</a>
          	<ul>
         	 <li><a href="#">Sponsorship</a></li>
         	</ul>
          </li>
          <li><a class="MenuBarItemSubmenu" href="#">SERVICES</a>
            <ul>
              <li><a class="MenuBarItemSubmenu" href="#">Apartama</a>
                <ul>
                  <li><a href="add.php">Add New</a></li>
                  <li><a href="showdata.php">Formers</a></li>
                </ul>
              </li>
               <li><a href="#">Bill</a>
                <ul>
                  <li><a href="#">Water</a></li>
                   <li><a href="#">Electric</a></li>
                  <li><a href="#">Phone</a></li>
                </ul>
              </li>
              <li><a href="#">Report</a></li>
            </ul>
          </li>
          <li><a href="contact.php">CONTACT US</a></li>
        </ul>
      </div>
<table width="1332" bgcolor="#000000">
        <tr>
          <td width="1054" height="102" align="">
    
<img src="download.jpg" width="104" height="100" />
          </td>
          <td width="266" align=""><div class="search">
<a href="#" style=" text-align:up">
<input class="srch" type="search" name="input" placeholder="your search text here!"/>
<button class="btn">Search</button> 
</a></td>
        </tr>
</table>
<table width="1335" height="321">
  <tr>
    <td width="1327" align="center" bgcolor="#CCCC99"><p style="text-align:center"><b><font size="72" style="color:#00F">Contact Us</font></b></p>
      <p style="text-align:center">&nbsp;</p>
      <p style="text-align:center">&nbsp;</p>
      <p style="text-align:center">&nbsp;</p>
      <p style="text-align:center">&nbsp;</p>
      <p style="text-align:center">&nbsp;</p>
      <div id="apDiv2"><span style="text-align:center"><img src="pobox.jpg" alt="" width="136" height="220" class="MenuBarActive" /></span></div>
      <div id="apDiv3"><span style="text-align:center"><img src="p.obox.jpg" alt="" width="154" height="219" /></span></div>
      <div id="apDiv4"><span style="text-align:center"><img src="phone.jpg" alt="" width="166" height="219" /></span></div>
      <div id="apDiv5"><span style="text-align:center"><img src="Mail.jpg" alt="" width="175" height="220" /></span></div>
      <p style="text-align:center">&nbsp;</p>
    <pre style="color:#00F"><b style="font-size:24px">                
ADDRESS              P.O.BOX                 PHONE                EMAIL</b></pre>        
      <pre style="font-size:18px">Bule Hora, Ethiopia           144, Hule Hora               +251464430199               BHU@gmail.com

</pre>
      <p style="color:#FF0"><font style="font-size:24px">*** </font></p>
      <p style="color:#00F"><font style="font-size:36px"><b>SEND US MESSAGE</b></font></p>
      <p style="color:#FFF"><font style="font-size:24px">Feel Free To Send Message</font></p>
      <p style="color:#FF0"><font style="font-size:24px">*** </font></p>
           <form id="form1" name="form1" method="post" action="" style="text-align:center">
        <p>
                <label for="textfield3">Full Name</label>
          <input name="fn" type="text" id="textfield3" placeholder="Full Name" size="40" />
          <label for="textfield4">Email</label>
        <input name="em" type="text" id="textfield4" placeholder="E-Mail Address" size="40" />
        </p>
        <p style="font-size:24px">
          <label for="textarea2">Comment</label>
          <textarea name="cm" id="textarea2" cols="100" rows="10" placeholder="Put your message here!"></textarea>
        </p>
        <p style="border-color:#09F">
          <input type="submit" name="button2" id="button2" value="THANK YOU!" />
        </p>
      </form>
      <p><br>
      </p></td>
  </tr>
</table>
<table width="1336" height="153">
  <tr>
    <td width="41"><img src="pobox.jpg" width="41" height="38" /></td>
    <td colspan="2" style="text-align:center"><h1>Get In Touch</h1></td>
    <td width="382">&nbsp;</td>
    <td width="247"><a href="http://www.bhu.edu.et"><img src="Web.png" width="22" height="25" /></a>
    <a href="https://www.alluniversity.info/ethiopia/bule-hora-university/"><img src="google.png" width="25" height="24" /></a>
    <a href="https://www.facebook.com/BuleHoraUniversity"><img src="facebook.jpg" width="31" height="27" /></a>
    <a href="https://twitter.com/Bule_Hora_Uni"><img src="twitter.png" width="32" height="26" /></a>
    <a href="https://www.youtube.com/channel/UCOwKefYkEcmCvFmfThy9KrQ"><img src="youtube.png" width="31" height="28" /></a>
    <img src="whatsup.png" width="25" height="30" />
    <a href="https://t.me/BuleHoraUniversity"><img src="telegram.jpg" width="26" height="28" /></a>
    </td>
  </tr>
  <tr>
    <td height="29"><img src="phone.png" width="30" height="27" /></td>
    <td width="240">(+251464430355)</td>
    <td width="391" align="center"><b>Put your comment here!</b></td>
    <td><form id="form4" name="form4" method="post" action="">
      <label for="textfield"></label>
    </form></td>
    <td align="center">
    <img src="share.jpg" width="56" height="22" />
    </td>
  </tr>
  <tr>
    <td height="23"><img src="Mail.png" width="24" height="21" /></td>
    <td>Example@mail.com</td>
    <td rowspan="3"><form id="form2" name="form2" method="post" action="">
      <label for="textarea"></label>
      <textarea name="textarea" id="textarea" cols="45" rows="5"></textarea>
    </form></td>
    <td><input name="textfield" type="text" id="textfield" placeholder="YOUR NAME" size="30" /></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td height="26"><img src="p.obox.png" width="29" height="24" /></td>
    <td>144, Bule Hora</td>
    <td><input name="textfield2" type="text" id="textfield2" placeholder="Your Email" size="30" /></td>
    <td>&nbsp;</td>
    <td width="7">&nbsp;</td>
  </tr>
  <tr>
    <td height="23"><a href="http://www.bhu.edu.et"><img src="Web.png" alt="" width="26" height="21" /></a></td>
    <td><a href="http://www.bhu.edu.et">www.bhu.edu.et</a></td>
    <td><form id="form3" name="form3" method="post" action="">
      <input type="submit" name="button" id="button" value="THANK YOU!" />
    </form></td>
    <td align="right">@2022 Bule Hora University</td>
    <td>&nbsp;</td>
  </tr>
</table>
<p>&nbsp;</p>
<p>&nbsp; </p>
<script type="text/javascript">
var MenuBar1 = new Spry.Widget.MenuBar("MenuBar1", {imgDown:"SpryAssets/SpryMenuBarDownHover.gif", imgRight:"SpryAssets/SpryMenuBarRightHover.gif"});
  </script>
</body>
</html>
