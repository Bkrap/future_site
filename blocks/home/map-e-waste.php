<?php include 'baza.php'; ?>
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
          <form method="post">
          <input type="text" class="form-control" name="ltd" placeholder="Latitude:"></input>
          <input type="text" class="form-control" name="lng" placeholder="Longitude:"></input></br>
          <textarea class="form-control" rows="5" name="desc_coo" placeholder="Description:"></textarea></br>
          <button name="input" class="btn_next_step">Enter</button>
          <?php
          $data = new Veza;
          $success_message = '';
          if(isset($_POST["input"]))
            {
            $insert_data = array(
              'ltd' => mysqli_real_escape_string($data->veza, $_POST['ltd']),
              'lng'  => mysqli_real_escape_string($data->veza, $_POST['lng']),
              'desc_coo'  => mysqli_real_escape_string($data->veza, $_POST['desc_coo'])
              );
                if($data->insert('grad', $insert_data))
                  {
                    $success_message = 'Post Inserted';
                  }
              }

              $table_check = $data->select('grad');
              echo $table_check;


           ?>
        </form>
        </div>
        <?php include_once('blocks/google_map.php'); ?>
  </div>
</div>
</section>
