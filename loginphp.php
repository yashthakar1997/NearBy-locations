<?php
error_reporting(0);
if(isset($_POST['submit']))
{
echo "btn press   :";
$name = $_POST['user'];
$pass = $_POST['Pass'];


$con=mysql_connect("localhost","root");
// Check connection
if (!$con)
  {
  echo"You Cannot Connect To MYSQL";
  }
mysql_select_db("project",$con);
 $sql="select Name, password from reg where name=$name and password= $pass";

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