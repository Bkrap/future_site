<?php include_once('index.php'); ?>

<section name="map_section">
  <div class="container px-lg-5">
    <div class="row">
      <div class="map_intro">
        <img src="pic/e-waste-map.png" width="263" height="60">
          <p>
            Find an e-waste recycling point in your area and see how many electronic waste recycling points are around.
          </p>
        </div>
    <div id="googleMap" style="width:1196px;height:500px;">
      <script>
      function myMap() {
      var mapProp= {
        center:new google.maps.LatLng(51.508742,-0.120850),
        zoom:5,
      };
      var map = new google.maps.Map(document.getElementById("googleMap"),mapProp);
      }
      </script>

      <script src="https://maps.googleapis.com/maps/api/js?key=&callback=myMap"></script>
    </div>
  </div>
</div>
</section>
