<?php include_once('index.php'); ?>

<section name="map_section map">
  <div class="container px-lg-5" id="map_sec">
    <div class="row">
      <div class="map_intro">
        <img src="pic/e-waste-map.png" width="263" height="60">
          <p>
            Find an e-waste recycling point in your area and see how many electronic waste recycling points are around.
          </p>
        </div>
        <?php include_once('blocks/google_map.php'); ?>
  </div>
</div>
</section>
