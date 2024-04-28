<html>
<table border="1" align="center">
<caption><font color="#FF00FF"><b><i>=====DATABASE INFORMATION.=====</i></b></font></caption>
<tr bgcolor="black" style="color:#FFF;">
<td>Name</td>
<td>Id_number</td>
<td>Sex</td>
<td>Age</td>
<td>COLLEGE</td>
<td>DEPARTMENT</td>
<td>Year</td>
<td>Semester</td>
<td  colspan="2" >action</td>
</tr>
<?php
session_start();
$id=$_SESSION['ID_NUMBER'];
if(!($id=="ru6556/12")){
  header("location:login.php");
  die();  
	   }
?>
<?php
include_once "dbase.php";

$selectq="SELECT * FROM stud  WHERE ID_NUMBER='$id'";
$run_selectq=mysqli_query($connect,$selectq);
$numofrows=mysqli_num_rows($run_selectq);
if($numofrows>0)
{
  while($x=mysqli_fetch_assoc($run_selectq))
  {
    echo"
    <tr>
    <td>".$x['NAME']."</td>
    <td>".$x['ID_NUMBER']."</td>
    <td>".$x['SEX']."</td>
    <td>".$x['AGE']."</td>
    <td>".$x['COLLEGE']."</td>
    <td>".$x['DEPARTMENT']."</td>
	<td>".$x['YEAR']."</td>
	<td>".$x['SEMISTER']."</td>
   <td>
	<a href='updatte5.php?ID_NUMBER=".$x['ID_NUMBER']."'>Update</a>
  </td>
    </tr>
    ";
  }
}
else{
  echo"There is no informaion in this database";
}
?>	
<tr><td colspan="2"align="center"><a href="logout.php">Logout</a>
 </td></tr>
</table>
</html>