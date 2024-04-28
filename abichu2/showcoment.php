

<html>
<table border="1" align="center">
<tr bgcolor="green" style="color:white">
<td>Full Name</td>
<td>Email Addres</td>
<td>Comment</td>
</tr>
<?php
include_once "dbase.php";
$selectq="SELECT * FROM comment";
$run_selectq=mysqli_query($conn,$selectq);

$numofrows=mysqli_num_rows($run_selectq);
if($numofrows>0)
{
	while($x=mysqli_fetch_assoc($run_selectq))
	{
		echo"
		<tr>
		<td>".$x['Full_Name']."</td>
		<td>".$x['E-Mail_Address']."</td>
		<td>".$x['Comment']."</td>
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