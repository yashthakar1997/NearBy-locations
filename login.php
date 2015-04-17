<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<div class="header" id="head">
  <html xmlns="http://www.w3.org/1999/xhtml">
  <head>
  <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
  <title>Untitled Document</title>

  <link rel="stylesheet" type="text/css" href="display.css">
  <script src="https://maps.googleapis.com/maps/api/js?v=3.exp&signed_in=true"></script>
  <script src="map.js"></script>
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
  
  </head>
  <body>
  <div id="Layer1" align="center">
  
      <div class="header" id="header" style="float:left;width:20px;" >
      		<div align="left"><img src="image/logo.png" height="100px">
	    </div>
      </div>
    <div class="header" id="header" ><p><h1 align="center">Near By Location</h1></p></div>
 		
 	  <div class="menu" id="menu">
		<table width="100%" border="1" cellspacing="1" cellpadding="1">
  			<tr>
    		<th height="45" scope="col"><a href="index.php">Home</a></th>
    		<th scope="col"><a href="index.php">logout</a></th>
    		<th scope="col"><a href="Reg.php">Registration</a></th>
    		<th scope="col">Offers</th>
    		<th scope="col">About</th>
  			</tr>
		</table>
 	 </div>
     <div class="maincontent" id="main" style="float:left;height:400px;width:700px;">
		
		
		<h1 align="center">Log In </h1>
		<form action="login.php" method="post">
		<table width="100%"   cellspacing="1" cellpadding="1" >
  		<tr>
    		<td width="250" height="35" align="right">User Id </td>
    		<td><input type="text" name="user" size="40"/></td>
  		</tr>
  		<tr>
    		<td height="38" align="right" width="250">Password </td>
    		<td><input type="password" name="pass" size="40"/></td>
  		</tr>
  		<tr>
    		<td height="47" colspan="2" align="center"><input id="button" type="submit" name="submit" value="Log In"/></td>
   		</tr>
		</table>
		
		<?php include 'loginlogic.php'?>
		
		</form>
				
		
   	 </div>
        
	<div class="offers" id="offers" style="height:400px;">
        
				<?php include 'db_show.php';?>  
        
    </div>
    
    <div class="img" id="slide_img" style="height:300px">
    
    	<div class="container"><br>
 	    <div id="myCarousel" class="carousel slide" data-ride="carousel">
    	<!-- Indicators --><!-- Wrapper for slides -->
    	<div class="carousel-inner" role="listbox">
      	<div class="item active"><img src="image/1.jpg" alt="img" width="460" height="345"></div>
	  	<div class="item"><img src="image/2.jpg" alt="img" width="460" height="345"></div>
      	<div class="item"><img src="image/3.jpg" alt="img" width="460" height="345"></div>
	  	<div class="item"><img src="image/4.jpg" alt="img" width="460" height="345"></div>
      	<div class="item"><img src="image/5.jpg" alt="img" width="460" height="345"></div>
      	<div class="item"><img src="image/6.jpg" alt="img" width="460" height="345"></div>   
    	</div>
		<!-- Left and right controls -->
  		<a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
      	<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
      	<span class="sr-only">Previous</span>
    	</a>
    	<a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
      	<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
      	<span class="sr-only">Next</span>
    	</a>
  		</div>
  		</div>
    
     
    </div>
       
    <div class="footer" id="developeroption" ><h1>Developer option</h1>
          <p>&nbsp;</p> 
    </div>
        
        
  </div>
  </body>
  </html>
</div>
