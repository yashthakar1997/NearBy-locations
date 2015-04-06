
var map;
var contentString;

function initialize() {
	
  
  var mapOptions = {
    zoom: 8,
    center: myLatlng
  };

   map = new google.maps.Map(document.getElementById('map-canvas'), mapOptions);


   var i;
for(i=0;i<latt.length;i++)
{    
	  contentString = name[i];
	
	  var myLatlng = new google.maps.LatLng(latt[i],longi[i]);
	  var marker = new google.maps.Marker({
      position: myLatlng,
      map: map,
      title:name[i]
      
  });
  
   var infowindow = new google.maps.InfoWindow({
      content: contentString
  });
  
	
}

   
   
   
   
   
// for geolocation

    if(navigator.geolocation) {
    navigator.geolocation.getCurrentPosition(function(position) {
      var pos = new google.maps.LatLng(position.coords.latitude,
                                       position.coords.longitude);

      var infowindow = new google.maps.InfoWindow({
        map: map,
        position: pos,
        content: 'Location found using HTML5.'
      });

      map.setCenter(pos);
    }, function() {
      handleNoGeolocation(true);
    });
  } else {
    // Browser doesn't support Geolocation
    handleNoGeolocation(false);
  }
  
  
    //var contentString = name;

google.maps.event.addListener(marker, 'click', function() {
    infowindow.open(map,marker);
  });
  
  
  
}

function handleNoGeolocation(errorFlag) {
  if (errorFlag) {
    var content = 'Error: The Geolocation service failed.';
  } else {
    var content = 'Error: Your browser doesn\'t support geolocation.';
  }

  var options = {
    map: map,
    position: new google.maps.LatLng(60, 105),
    content: content
  };
  var infowindow = new google.maps.InfoWindow(options);
  map.setCenter(options.position);
}
// endddddddddddddddd geo location


 


google.maps.event.addDomListener(window, 'load', initialize);


   
