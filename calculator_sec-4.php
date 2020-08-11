<?php include_once('head.php'); ?>

<?php include_once('blocks/header.php'); ?>
<body>
<section name="calc_section-4">
  <div class="container">
    <div class="row">
      <div class="map_intro">
        <img src="pic/ec.png" width="367" height="40">
        <div class="circles">
          <div class="circle"><img src="pic/circle.png" width="42" height="42"></div>
          <div class="circle"><img src="pic/circle.png" width="42" height="42"></div>
          <div class="circle"><img src="pic/circle.png" width="42" height="42"></div>
          <div class="circle"><img src="pic/circle.png" width="42" height="42"></div>
        </div>
          <p>
            <b>Step 4/4</b></br>
Congratulations, now you are ready for the most important step: <br>a proper <b>e-waste recycling!</b> Check recycling points in your area:
          </p>
        </div>
        <?php include_once('blocks/google_map.php'); ?>
  </div>
</div>
</section>
</body>
<?php include_once('blocks/footer.php'); ?>
