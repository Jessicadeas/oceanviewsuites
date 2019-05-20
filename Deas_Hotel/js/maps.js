function init() {
  var mapChoice = {                                 
    center: new google.maps.LatLng(33.6739488,-78.9036972),
    mapTypeId: google.maps.MapTypeId.ROADMAP,
    zoom: 16,
	
	panControl: false,
    zoomControl: true,
    zoomControlOptions: {
      style: google.maps.ZoomControlStyle.SMALL,
      position: google.maps.ControlPosition.TOP_LEFT
    },
    mapTypeControl: true,
    mapTypeControlOptions: {
      style: google.maps.MapTypeControlStyle.DROPDOWN_MENU,
      position: google.maps.ControlPosition.TOP_CENTER
    },
    scaleControl: true,
    scaleControlOptions: {
      position: google.maps.ControlPosition.TOP_CENTER
    },
    streetViewControl: true,
    overviewMapControl: true
	
  };
  var venueMap;                                      
  venueMap = new google.maps.Map(document.getElementById('map'), mapChoice);
}

function loadScript() {
  var script = document.createElement('script');     
  script.src = 'http://maps.googleapis.com/maps/api/js?sensor=false&callback=init';
  document.body.appendChild(script);                 
}

window.onload = loadScript;                          