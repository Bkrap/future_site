
<div id="googleMap" style="width:1196px;height:500px;">
  <script>
  function myMap(){
    var ulDub = {lat: 45.4999313, lng: 16.3551708}; //vrati koordinate na ulicu grada duborvnika
    var ulVuk = {lat: 45.4999314, lng: 16.3551708};
    var ulMar = {lat: 45.5074345, lng: 16.3761173};
    var ulBer = {lat: 45.4992764, lng: 16.3649263};

    var map = new google.maps.Map(document.getElementById('googleMap'), {
      zoom: 15,
      center: ulDub
    });

    var greenIcon = 'pic/marker.png';

    var marker = new google.maps.Marker({
      position: ulDub,
      map: map,
      icon: greenIcon
    });

    var marker = new google.maps.Marker({
      position: ulVuk,
      map: map,
      icon: greenIcon
    });

    var marker = new google.maps.Marker({
      position: ulMar,
      map: map,
      icon: greenIcon
    });

    var marker = new google.maps.Marker({
      position: ulBer,
      map: map,
      icon: greenIcon
    });
  }
  </script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCikysarNLm6L-wRtg0CakgJAnxizWAnho&callback=myMap"></script>
</div>
