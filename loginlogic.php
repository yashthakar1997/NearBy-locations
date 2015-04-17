<?php

if(isset($_POST['submit']))
{
echo "btn press";


$a = $_POST['user'];
$b = $_POST['pass'];


$con=mysql_connect("localhost","root");
mysql_select_db("Project");
// Check connection
if (!$con)
  {
  echo"You Cannot Connect To MYSQL";
  }
 $sql="SELECT * FROM reg WHERE name='$a' and password='$b'";
$result=mysql_query($sql);

// Mysql_num_row is counting table row
$count=mysql_num_rows($result);

// If result matched $myusername and $mypassword, table row must be 1 row
if($count==1){

// Register $myusername, $mypassword and redirect to file "login_success.php"
echo "sucess";
//echo "<a href='index.php'></a>";
header("Location:index.php");
}
else {
echo "Wrong Username or Password";
} 
  
  
  

mysql_close($con);
}
?> 