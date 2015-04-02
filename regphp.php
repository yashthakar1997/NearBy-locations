<?php
error_reporting(0);
if(isset($_POST['submit']))
{
echo "btn press   :";
$b = $_POST['name'];
$c = $_POST['E-mail'];
$d = $_POST['RE-mail'];
$e = $_POST['Password'];
$f = $_POST['Conformpassword'];
$g = $_POST['Birthdate'];
$h = $_POST['Location'] ;

$con=mysql_connect("localhost","root");
// Check connection
if (!$con)
  {
  echo"You Cannot Connect To MYSQL";
  }
mysql_select_db("project",$con);
 $sql="INSERT INTO reg (name,Email,ReEmail,Password,Conformpassword,Birthdate,Location) VALUES('$b','$c','$d','$e','$f','$g','$h')";

$e=mysql_query($sql);
if (isset($e))
{
	echo"create another or go to login";
}
else
  {
  die("Try Again.").mysql_error();
  }
mysql_close($con);
}
?>