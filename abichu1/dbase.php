<?php
$servername="localhost";
$username="root";
$password="";
$dbname="mydbase";

$connect=mysqli_connect($servername,$username,$password,$dbname);
if(!$connect)
{
  die("You have a error in your connection".mysqli_connect_error());
}
else
{
  echo"connection successfully ";
}
?>