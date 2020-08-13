<?php include_once('index.php'); ?>

<section name="map_section map">
  <div class="container px-lg-5" id="map_sec">
    <div class="row">
      <div class="map_intro">
        <img src="pic/e-waste-map.png" width="263" height="60">
          <p>
            Find an e-waste recycling point in your area and see how many electronic waste recycling points are around.
          </p>
          Enter credentials that will be shown on the map:
          <form action="includes/veza.inc.php" method="post"> <!-- zbog ove forme koja mi treba za PHP suzi skroz content :/ ako ju zbrises, sve je normalno -->
          <input type="text" class="form-control" name="ltd" placeholder="Latitude:"></input>
          <input type="text" class="form-control" name="lng" placeholder="Longitude:"></input></br>
          <textarea class="form-control" rows="5" name="desc_coo" placeholder="Description:"></textarea></br>
          <button type="submit" name="input" class="btn_next_step">Enter</button>

        </form>
        </div>
        <?php include_once('blocks/google_map.php'); ?>
  </div>
</div>
</section>
