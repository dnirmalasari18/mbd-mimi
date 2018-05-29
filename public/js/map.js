window.onload = getMyLocation;

var map;
var userlat;
var userlng;
function getMyLocation() {
  if(navigator.geolocation){
    navigator.geolocation.getCurrentPosition(displayLocation);
  }
  else{
    alert('Allow Maps on this website!')
  }
}

function displayLocation(position){
  userlat = position.coords.latitude;
  userlng= position.coords.longitude;

  var latLng = new google.maps.LatLng(userlat,userlng);

  showMap(latLng);

  addNearByPlaces(latLng);
  apiMarkerCreate(latLng);
}

function showMap(latLng){
  var mapOptions ={
    center: latLng,
    zoom : 14,
    mapTypeId : google.maps.MapTypeId.ROADMAP
  };

  map = new google.maps.Map(document.getElementById('map'),mapOptions)
}

function searchNearBy(results,status){
  if(status == google.maps.places.PlacesServiceStatus.OK){
    for (var i=0 ; i<results.length ; i++){
      var place = results[i];
      apiMarkerCreate(place.geometry.location,place);
    }
  }
}
