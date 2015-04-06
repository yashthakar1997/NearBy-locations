<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<div class="header" id="head">
  <html xmlns="http://www.w3.org/1999/xhtml">
  <head>
  
  
	<?php 
		include('connect.php');
		session_start();
 	?>
  
  
  <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
  <title>Near By Location</title>
      
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
      		<div align="left"><a href="index.php"><img src="logo.png" height="100px"></a>
	    </div>
      </div>
    <div class="header" id="header" ><p><h1 align="center">Near By Location <br /><h6>we are still improving this site <b>Thnks for visit</b></h6></h1></p></div>
 		
 	  <div class="menu" id="menu">
		<table width="100%" border="1" cellspacing="0" cellpadding="0">
  			<tr>
    		<th height="45" scope="col"><a href="index.php">Home</a></th>
    		<th scope="col"><a href="#">Offers</a></th>
    		<th scope="col"><a href="#">cafes</a></th>
    		<th scope="col">About</th>
  			</tr>
		</table>
 	 </div>
     <div class="maincontent" id="main" style="float:left;height:400px;width:700px;">
        <div id="map-canvas"></div>
   	 </div>
        
	<div class="offers" id="offers" style="height:400px;">
        
   		<?php include 'db_show.php';?> 
		
		<?php 
			
		?>
    	<script>
		
    	var latt = <?php echo json_encode($lat);?>;
	  	var longi= <?php echo json_encode($lon);?>;
		var name = <?php echo json_encode($name);?>;
		for(i=0;i<name.length;i++){
		document.write(name[i]);
		}
		</script>
		<script src="map.js"></script>
        
    </div>
    
    <div class="img" id="slide_img" style="height:300px">
                
			<?php include 'slide_img.php';?>                            
     
    </div>
       
    <div class="footer" id="developeroption" ><h1>Developer option</h1>
          <p>&nbsp;</p> 
    </div>
        
        
  </div>
  </body>
  </html>
</div>
