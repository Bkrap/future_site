<?php
include_once('veza.php');

$sql = "SELECT * FROM grad WHERE adresa = 'Ulica grada Dubrovnika'";
$upit = $veza->query($sql);
while($red = $upit->fetch_assoc()){

  $lat = $red['lat'];
  $lng = $red['lng'];
}
?>
<div id="googleMap" style="width:1196px;height:500px;">
  <script>
  function myMap(){
    var ulDub = {lat: <?php echo $lat; ?>, lng: <?php echo $lng; ?>};
    var ulVuk = {lat: 45.4999314, lng: 16.3551708};
    var ulMar = {lat: 45.5074345, lng: 16.3761173};
    var ulBer = {lat: 45.4992764, lng: 16.3649263};

    var map = new google.maps.Map(document.getElementById('googleMap'), {
      zoom: 14,
      center: ulVuk
    });

    var marker = new google.maps.Marker({
      position: ulDub,
      map: map
    });

    var marker = new google.maps.Marker({
      position: ulVuk,
      map: map
    });

    var marker = new google.maps.Marker({
      position: ulMar,
      map: map
    });

    var marker = new google.maps.Marker({
      position: ulBer,
      map: map
    });
  }
  </script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCikysarNLm6L-wRtg0CakgJAnxizWAnho&callback=myMap"></script>
</div>
