<html>
<head>
<?php
session_start();
$ids=$_SESSION['ID_NUMBER'];
if(!($ids=="ru0012/12")){
header("location:login.php");
die();
}
?>
</head>
 <?php
include_once"dbase.php";
error_reporting(0);
// variable declaration
$message="";
$mess="";
    $nm="";
	$i="";
	$yr="";
if(isset($_GET['ID_NUMBER']))
{
	$id=$_GET['ID_NUMBER'];
	$slectq="SELECT * FROM stud WHERE ID_NUMBER='$id'";
	$run_selectq=mysqli_query($connect,$slectq);
	$info=mysqli_fetch_assoc($run_selectq);
	
$nm=$info['NAME'];
$i=$info['ID_NUMBER'];
$yr=$info['YEAR'];
}
if(isset($_POST['update']))
{
$message="";
$nam=$_POST["name"];
$studid=$_POST["sid"];
$year=$_POST["year"];
$updateq="UPDATE stud SET NAME='$nam',ID_NUMBER='$studid',SEX='$sex',AGE='$age',
COLLEGE='$coll',DEPARTMENT='$dep',YEAR='$year',SEMISTER='$sem' WHERE ID_NUMBER='$studid'";
$run_updateq=mysqli_query($connect,$updateq);
	if($run_updateq)
	{
		$message="UPDATED";
	}
	else
	{
		$mess="NOT UPDATE".mysqli_connect_error($run_updateq);
	}
}
//mysqli_close($conn);
?>
<body> 
<center>
    <p >FILL THE INFORMATION BELOW</p>
    <table border="1" style="background-color:whitesmoke">
     <tr style="font-size:18px;font-weight:bold">
     <td width="311">
      <form id="form1" name="form1" method="post" action="updatte7.php">
     
          <label for="name">Student Name:<br />
            <input type="text" name="name" id="name" value="" /><br />
          </label>
          <label for="studid">Student Id:<br />
            <input type="text" name="sid" id="sid" value=""/><br />
          </label>
			 <label for="year">Year : </label><br />
            <input type="text" name="year" id="year" value=""/><br />
          <p>
            <input style="font-size:18px;font-weight:bold"type="submit" name="update" id="update" value="update" />
			<button type="button" ><a href="view7.php">ViewData</a></button>
			<button type="button" ><a href="logout.php">logout</a></button>
            <br />
            <span style="color:green"><?php echo $message;?></span> 
			<span style="color:red"><?php echo $mess;?></span> </p>
      </form>
      </td>
      </tr>
	  
      </table>
	  </center>
</body>
</html>