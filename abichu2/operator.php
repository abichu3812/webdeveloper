<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<style type="text/css">
#apDiv1 {
	position: absolute;
	width: 646px;
	height: 517px;
	z-index: 1;
	left: 300px;
	top: 96px;
	background-color: #99FF99;
}
#apDiv2 {
	position: absolute;
	width: 543px;
	height: 485px;
	z-index: 2;
	left: 355px;
	top: 64px;
	background-color: #99FF99;
}
#apDiv3 {
	position: absolute;
	width: 49px;
	height: 24px;
	z-index: 3;
	left: 365px;
	top: 379px;
	background-color: #CCCCCC;
}
body {
	background-color: #CCC;
}
#apDiv4 {	position: absolute;
	width: 200px;
	height: 115px;
	z-index: 4;
	left: 5px;
	top: 433px;
}
</style>
</head>
<?php
include_once"dbase.php";
$msg="";
if(isset ($_POST['button']))
{
//variable declaration
$fn=$_POST["fn"];
$ln=$_POST["ln"];
$jd=$_POST["jd"];
$pn=$_POST["pn"];
$un=$_POST["un"];
$pw=$_POST["pw"];
$gd=$_POST["sex"];
//insert query
$insert="INSERT INTO admin(First_name,Last_name,Job_Description,Phone,Username,Password,Gender) values('$fn','$ln','$jd','$pn','$un','$pw','$gd')";
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
<body background="../../../Users/SES YOUTH MINISTRY/Documents/Unnamed Site 2/shutterstock.jpg">
<div id="apDiv2">
  <p align="center" style="font-size:18px">&nbsp;</p>
 <form id="form1" name="form1" method="post" action="">
  <p align="center" style="font-size:18px"><b>Fill The Adminstrator Information Correctly</b></p>
  <p align="center">
    <label for="fn">First name</label>
    <input type="text" name="fn" id="fn" />
    <span id="nerr" style="color:red"> </span> </p>
  <p align="center">
    <label for="fn">Last name</label>
    <input type="text" name="ln" id="ln" />
    <span id="lerr" style="color:red"> </span> </p>
  <p align="center">Job Description
    <input type="text" name="jd" id="ln2" />
    <span id="lerr2" style="color:red"> </span></p>
  <p align="center">
    <label for="fn">Phone</label>
    <input type="text" name="pn" id="pn" />
    <span id="pp" style="color:red"> </span> </p >
  <p align="center">
    <label for="fn">Username</label>
    <input type="text" name="un" id="un" />
  </p>
  <p align="center">
    <label for="fn">Password</label>
    <input type="password" name="pw" id="pw" />
  </p>
  <p align="center">
    <label for="fn">Confirm password</label>
    <input type="password" name="pw2" id="pw2" />
  </p>
  <p align="center">
    <label> Gender
      <input type="radio" name="sex" value="m" id="sex_0" />
      Male</label>
    <br />
    <label>
      <input type="radio" name="sex" value="f" id="sex_1" />
      Female</label>
  </p>
  <p align="center">
    <input type="submit" name="button" id="button" value="SUBMIT" onclick="return valme();" />
      </p>
      </form>
  <div id="apDiv3" align="center"><a href="admin.html"><b>Next</b></a></div>
</div>
</body>
</html>
