<html>
<?php
include_once "dbase.php";
if(isset($_GET['ID_NUMBER']))
{
  $id=$_GET['ID_NUMBER'];
  $deleteq="delete from stud where ID_NUMBER='$id' ";
  $run_deleteq=mysqli_query($connect,$deleteq);
  if($run_deleteq)
  {
    echo"";
  }
  else{
    echo"";
  }
}
?>
<table border="1" align="center">
<caption><font color="#FF00FF"><b><i>=====DATABASE INFORMATION.=====</i></b></font></caption>
<tr bgcolor="black" style="color:#FFF;">
<td>Name</td>
<td>Id_number</td>
<td>Age</td>
<td>DEPARTMENT</td>
<td  colspan="2" >action</td>
</tr>
<?php
session_start();
$id=$_SESSION['ID_NUMBER'];
if(!($id=="ru0120/12")){
  header("location:login.php");
  die();  
	   }
?>
<?php
include_once "dbase.php";

$selectq="SELECT * FROM stud";
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
    <td>".$x['AGE']."</td>
    <td>".$x['DEPARTMENT']."</td>
	<td>
	<a href='updatte6.php?ID_NUMBER=".$x['ID_NUMBER']."'>Update</a>
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