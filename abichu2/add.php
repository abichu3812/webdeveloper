<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>BHU Apartment Management System</title>
<style type="text/css">
#apDiv1 {
	position: absolute;
	width: 783px;
	height: 29px;
	z-index: 1;
	top: 176px;
	left: 71px;
}
.main{
	width:100%;
	background:linear-gradient(to top, rgba(0,0,0,0.5)50%, rgba(0,0,0,0.5)50%), url(House.jpg);
	background-position:center;;
	background-size:cover;
	height:109vh;
}
</style>
 <script type="text/javascript">
	function valme()
	{
	var name=document.getElementById("fn");
	var error1=document.getElementById("nerr");
	
	var fname=document.getElementById("ff");
	var error2=document.getElementById("ferr");
	
	var lname=document.getElementById("ln");
	var error3=document.getElementById("lerr");

	var phn=document.getElementById("pn");
	var error4=document.getElementById("pp");
	
	var ms=document.getElementById("sex_0");
	var fs=document.getElementById("sex_1");
	var phone=document.getElementById("pn").value;
	var phoneno = /^\(?([0-9]{3})\)?[-. ]?([0-9]{3})[-. ]?([0-9]{4})$/;
	var txt=/^[A-Za-z]+$/;
	
	var message="";
	
	if(name.value=="")
	{
		message="Please write your name";
		error1.innerHTML=message;
		name.setAttribute("style","border-color:red");
		return false;
	}
	if(!(name.value.match(txt)))
	{
		message="name Should contain only letters";
		error1.innerHTML=message;
		name.setAttribute("style","border-color:red");
		return false;
	}
	else 
	{
		name.setAttribute("style","border-color:green");
		message="";
		error1.innerHTML=message;
	}
	if(fname.value=="")
	{
		message="Please write father name";
		error2.innerHTML=message;
		fname.setAttribute("style","border-color:red");
		return false;
	}
	if(lname.value=="")
	{
		message="Please write your last name";
		error3.innerHTML=message;
		lname.setAttribute("style","border-color:red");
		return false;
	}
	if(!(phn.value.match(phoneno)))
	{
		message="Please write Phone number";
		error4.innerHTML=message;
		name.setAttribute("style","border-color:red");
		return false;
	}
	if(phn.value.indexOf("09")!=0)
	{
		message="Phone number must start from 09";
		error4.innerHTML=message;
		name.setAttribute("style","border-color:red");
		return false;
	}
	}
	</script>
<link href="SpryAssets/SpryMenuBarHorizontal.css" rel="stylesheet" type="text/css" />
<style type="text/css">
#apDiv2 {
	position: absolute;
	width: 242px;
	height: 32px;
	z-index: 2;
	left: 1073px;
	top: 139px;
}
body {
	background-color: #FFF;
}
#apDiv3 {
	position: absolute;
	width: 200px;
	height: 115px;
	z-index: 3;
}
#apDiv4 {
	position: absolute;
	width: 200px;
	height: 115px;
	z-index: 4;
	left: 7px;
	top: 664px;
	background-color: #FFFFFF;
}
#apDiv5 {
	position: absolute;
	width: 779px;
	height: 115px;
	z-index: 5;
	left: 191px;
	top: 290px;
}
#apDiv6 {
	position: absolute;
	width: 647px;
	height: 115px;
	z-index: 6;
	left: 706px;
	top: 285px;
}
#apDiv7 {
	position: absolute;
	width: 249px;
	height: 28px;
	z-index: 7;
	left: 945px;
	top: 568px;
}
#apDiv8 {
	position: absolute;
	width: 109px;
	height: 25px;
	z-index: 8;
	left: 1005px;
	top: 606px;
	background-color: #66FFFF;
}
</style>
<script src="SpryAssets/SpryMenuBar.js" type="text/javascript"></script>
</head>
<?php
include_once"dbase.php";
$msg="";
if(isset ($_POST['button']))
{
//variable declaration
$id=$_POST["sn"];
$fn=$_POST["fn"];
$ff=$_POST["ff"];
$ln=$_POST["ln"];
$ag=$_POST["ag"];
$gd=$_POST["sex"];
$bp=$_POST["bp"];
$pt=$_POST["up"];
$eo=$_POST["eo"];
$jd=$_POST["jd"];
$pn=$_POST["pn"];
$em=$_POST["em"];
$sb=$_POST["sb"];
$sf=$_POST["sf"];
$su=$_POST["su"];
$fm=$_POST["fm"];
//insert query
$insert="INSERT INTO project(ID_No,First_name,Father_name,Last_name,Age,Gender,Birth_Place,upload_photo,Employee_Office,Job_Description,Phone,Email,Select_Block,Select_Flour,Select_Unit,Family_Members) values('$id','$fn','$ff','$ln','$ag','$gd','$bp','$pt','$eo','$jd','$pn','$em','$sb','$sf','$su','$fm')";
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
<table width="1349">
  <tr>
    <td><img src="photo.jpg" width="1343" height="164" /></td>
  </tr>
</table>
<p>&nbsp;</p>
<form id="form1" name="form1" method="post" action=""><u><b style="color:#00F">
  <h1 style="text-align:center">	Fill The Employee Information Correctly</h1></b></u></p>
  <div id="apDiv5">
    <p style="font-size:16px">
      <label for="textfield4">ID No</label>
      <input name="sn" type="text" id="sn" size="10" placeholder="ID Here!" />
      <label for="textfield3"><br />
        <br />
        First name</label>
      <input name="fn" type="text" id="fn" placeholder="First Name Here!" size="40" />
    </p>
    <p style="font-size:16px">
      <label for="Sn">Father name</label>
      <input name="ff" type="text" id="ff" placeholder="Father Name Here!" size="40" />
    </p>
    <p style="font-size:16px"> <span id="ferr" style="color:red"> </span> <span id="nerr" style="color:red"> </span>
      <label for="textfield4">Last name</label>
      <input name="ln" type="text" id="ln" placeholder="Last Name Here!" size="40" />
      <span id="lerr" style="color:red"> </span></p>
    <p>
      <label for="textfield5">Age</label>
      <input name="ag" type="text" id="ag" size="10" placeholder="Age Here!" />
      <label> <br />
        <br />
        Gender <br />
        <input type="radio" name="sex" value="m" id="sex_0" />
        Male</label>
      <label>
        <input type="radio" name="sex" value="f" id="sex_1" />
        Female</label>
    </p>
  </div>
  <div id="apDiv6">
    <p>
      <label for="textfield5"> Birth Place</label>
      <input type="text" name="bp" id="bp" placeholder="Birth Place Here!" />
    </p>
    <p>
      <label>upload photo :</label>
      <input type="file" name="up" />
    </p>
    <p>Employee Office
      <input name="eo" type="text" id="textfield7" size="40" placeholder="Office Here!" />
    </p>
    <p>
      <label for="textfield7">Job Description</label>
      <input name="jd" type="text" id="textfield7" size="50" placeholder="Job Here!" />
    </p>
    <p>
      <label for="textfield9">Phone</label>
      <input type="text" name="pn" id="pn" placeholder="Phone Here!" />
      <span id="pp" style="color:red"> </span>
      <label for="textfield11"><br />
        <br />
        Email</label>
      <input name="em" type="text" id="em" size="40" placeholder="Email Here!" />
    </p >
  </div>
  <p align="center">&nbsp;</p>
  <div id="apDiv2"><a href="#" style=" text-align:up">
    <input class="srch" type="search" name="sr" placeholder="your search text here!"/>
    </a> <a href="#" style=" text-align:up">
      <button class="btn">Search</button>
    </a></div>
  <p align="center" style="font-size:16px">&nbsp;</p>
  <p align="center">&nbsp;</p>
  <p align="center" style="color:#00F"><label> <b> <br />
    <br />
    <br />
    <br />
    <br />
    <br />
    <br />
    <br />
    Select The Favorite House</b></label>
  </p>
  <div id="apDiv7"><span style="font-size:16px">
    <label for="textfield6">Family Members</label>
    <input name="fm" type="text" id="fm" size="10" placeholder="Family No Here!" />
    <label for="textfield8"></label>
  </span></div>
<div id="apDiv8" style="color: #FFF"><a href="family.php">ADD FAMILY</a></div>
  <p align="center" style="color:#00F">
    <select name="sb">
      <option>Select Block</option>
      <option> 001</option>
      <option> 002</option>
      <option> 003</option>
      <option> 004</option>
      <option> 005</option>
      <option> 006</option>
      <option> 007</option>
      <option> 008</option>
      <option> 009</option>
      <option> 010</option>
      <option> 011</option>
      <option> 012</option>
      <option> 013</option>
      <option> 014</option>
      <option> 015</option>
      <option> 016</option>
    </select>
    <select name="sf">
      <option>Select Flour</option>
      <option> Ground</option>
      <option> G+1</option>
      <option> G+2</option>
      <option> G+3</option>
      <option> G+4</option>
      <option> G+5</option>
      <option> G+6</option>
      <option> G+7</option>
      <option> G+8</option>
      <option> G+9</option>
      <option> G+10</option>
      <option> G+11</option>
      <option> G+12</option>
    </select>
    <select name="su">
      <option>Select Unit</option>
      <option> 001</option>
      <option> 002</option>
      <option> 003</option>
      <option> 004</option>
      <option> 005</option>
      <option> 006</option>
      <option> 007</option>
      <option> 008</option>
      <option> 009</option>
      <option> 010</option>
      <option> 011</option>
      <option> 012</option>
      <option> 013</option>
      <option> 014</option>
      <option> 015</option>
      <option> 016</option>
    </select>
    <br>
  </p>
  <p align="center">
    <input type="submit" name="button" id="button" value="Save" onclick="return valme();" />
    <input type="reset" name="button2" id="button2" value="Clear" />
    <br />
      
  </p>
</form> 
________________________________________________________________________________________________________________________________________________________________________
</p>
<div id="apDiv4">
  <table width="1192" height="153">
    <tr>
      <td width="65"><img src="pobox.jpg" alt="" width="41" height="38" /></td>
      <td colspan="2" style="text-align:center"><h1>Get In Touch</h1></td>
      <td width="285">&nbsp;</td>
      <td width="287"><a href="http://www.bhu.edu.et"><img src="Web.png" alt="" width="22" height="25" /></a><a href="https://www.alluniversity.info/ethiopia/bule-hora-university/"><img src="google.png" alt="" width="25" height="24" /></a><a href="https://www.facebook.com/BuleHoraUniversity"><img src="facebook.jpg" alt="" width="31" height="27" /></a><a href="https://twitter.com/Bule_Hora_Uni"><img src="twitter.png" alt="" width="32" height="26" /></a><a href="https://www.youtube.com/channel/UCOwKefYkEcmCvFmfThy9KrQ"><img src="youtube.png" alt="" width="31" height="28" /></a><img src="whatsup.png" alt="" width="25" height="30" /><a href="https://t.me/BuleHoraUniversity"><img src="telegram.jpg" alt="" width="26" height="28" /></a></td>
    </tr>
    <tr>
      <td height="29"><img src="phone.png" alt="" width="30" height="27" /></td>
      <td width="241">(+251464430355)</td>
      <td align="center"><b>Put your comment here!</b></td>
      <td><form id="form4" name="form4" method="post" action="">
        <label for="textfield2"></label>
      </form></td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td height="23"><img src="Mail.png" alt="" width="24" height="21" /></td>
      <td>Example@mail.com</td>
      <td rowspan="3"><form id="form2" name="form2" method="post" action="">
        <label for="textarea"></label>
        <textarea name="textarea" id="textarea" cols="45" rows="5"></textarea>
      </form></td>
      <td align="center"><input name="textfield" type="text" id="textfield2" placeholder="YOUR NAME" size="30" /></td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td height="26"><img src="p.obox.png" alt="" width="29" height="24" /></td>
      <td>144, Bule Hora</td>
      <td align="center"><input name="textfield2" type="text" id="textfield2" placeholder="Your Email" size="30" /></td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td height="23"><a href="http://www.bhu.edu.et"><img src="Web.png" alt="" width="26" height="21" /></a></td>
      <td><a href="http://www.bhu.edu.et">www.bhu.edu.et</a></td>
      <td><form id="form3" name="form3" method="post" action="">
        <input type="submit" name="button3" id="button3" value="THANK YOU!" />
      </form></td>
      <td align="right">@2022 Bule Hora University</td>
      <td>&nbsp;</td>
    </tr>
  </table>
</div>
<p>&nbsp; </p>
<script type="text/javascript">
var MenuBar1 = new Spry.Widget.MenuBar("MenuBar1", {imgDown:"SpryAssets/SpryMenuBarDownHover.gif", imgRight:"SpryAssets/SpryMenuBarRightHover.gif"});
  </script>
</body>
</html>
