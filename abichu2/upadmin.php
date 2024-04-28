<?php
include_once"dbase.php";
// variable declaration
$msg="";

$fname="";
$lname="";
$phone="";
$jdescrpt="";
$uname="";
$pword="";
$gender="";

if(isset($_GET['Username']))
{
	$uname=$_GET['Username'];
	$slectq="SELECT * FROM admin WHERE Username='$un'";
	$run_selectq=mysqli_query($conn,$slectq);
	$info=mysqli_fetch_assoc($run_selectq);
	
	$fname=$info['First_name'];
	$lname=$info['Last_name'];
	$phone=$info['Phone'];
	$jdescrpt=$info['Job-Description'];
	$uname=$info['Username'];
	$pword=$info['Password'];
	$gender=$info['Gender'];
	
	
}
if(isset($_POST['change']))
{
$fn=$_POST["fn"];
$ln=$_POST["ln"];
$jd=$_POST["jd"];
$pn=$_POST["pn"];
$un=$_POST["un"];
$pw=$_POST["pw"];
$gd=$_POST["sex"];

$updateq="UPDATE admin SET First_name='$fn',Last_name='$ln',Job_Description='$jd',Phone='$pn',Username='$un',Password='$pw',Gender='$gd'";
	$run_updateq=mysqli_query($conn,$updateq);
	if($run_updateq)
	{
		$msg="updated";
	}
	else
	{
		$msg="not updated";
	}
}

mysqli_close($conn);
?>
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
<body background="../../../Users/SES YOUTH MINISTRY/Documents/Unnamed Site 2/shutterstock.jpg">
<div id="apDiv2">
  <p align="center" style="font-size:18px">&nbsp;</p>
 <form id="form1" name="form1" method="post" action="">
  <p align="center" style="font-size:18px"><b>Fill The Adminstrator Information Correctly</b></p>
  <p align="center">
    <label for="fn">First name</label>
    <input type="text" name="fn" id="fn" value="<?php echo $fname?>" />
    <span id="nerr" style="color:red"> </span> </p>
  <p align="center">
    <label for="fn">Last name</label>
    <input type="text" name="ln" id="ln" value="<?php echo $lname?>" />
    <span id="lerr" style="color:red"> </span> </p>
  <p align="center">Job Description
    <input type="text" name="jd" id="ln2" value="<?php echo $jdescrpt?>" />
    <span id="lerr2" style="color:red"> </span></p>
  <p align="center">
    <label for="fn">Phone</label>
    <input type="text" name="pn" id="pn" value="<?php echo $phone?>" />
    <span id="pp" style="color:red"> </span> </p >
  <p align="center">
    <label for="fn">Username</label>
    <input type="text" name="un" id="un" value="<?php echo $uname?>" />
  </p>
  <p align="center">
    <label for="fn">Password</label>
    <input type="password" name="pw" id="pw" value="<?php echo $pword?>" />
  </p>
  <p align="center">
    <label for="fn">Confirm password</label>
    <input type="password" name="pw2" id="pw2" value="<?php echo $pword?>" />
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
    <input type="submit" name="button" id="button" value="SUBMIT" onClick="return valme();" />
       <span id="ii" style="color:green; font-size:16px"> <?php echo $msg;?> </span>
      </p>
      </form>
  <div id="apDiv3" align="center"><a href="admin.html"><b>Next</b></a></div>
</div>
</body>
</html>
