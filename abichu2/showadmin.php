

<html>
<?php
include_once "dbase.php";
$un="";
if(isset($_GET['Username']))
{
	$un=$_GET['Username'];
	$deleteq="delete from admin where Username='$un'";
	$run_deleteq=mysqli_query($conn,$deleteq);
	
	if($run_deleteq)
	{
		echo"deleted";
	}
else
	{
		echo"not deleted";
	}
}
?>
<table border="1" align="center">
<tr bgcolor="green" style="color:white">
<td>First Name</td>
<td>Last Name</td>
<td>Job Description</td>
<td>Phone</td>
<td>Username</td>
<td>Password</td>
<td>Gender</td>
<td colspan="2">Actions</td>
</tr>
<?php
include_once "dbase.php";
$selectq="SELECT * FROM admin";
$run_selectq=mysqli_query($conn,$selectq);

$numofrows=mysqli_num_rows($run_selectq);
if($numofrows>0)
{
	while($x=mysqli_fetch_assoc($run_selectq))
	{
		echo"
		<tr>
		<td>".$x['First_name']."</td>
		<td>".$x['Last_name']."</td>
		<td>".$x['Job_Description']."</td>
		<td>".$x['Phone']."</td>
		<td>".$x['Username']."</td>
		<td>".$x['Password']."</td>
		<td>".$x['Gender']."</td>
		<td>
		<a href='?Username=".$x['Username']."'>Delete</a>
		</td>
		<td>
		<a href='update.php?Username=".$x['Username']."'>Edit</a>
		</td>
		
		</tr>
		
		";
	}
}
else
{
	echo"there is no information in your database";
}
?>
</table>
</html>