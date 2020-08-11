<?php include_once('head.php'); ?>

<?php include_once('blocks/header.php'); ?>
<body>
<section name="calc_section-2">
  <div class="container">
    <div class="row">
      <div class="map_intro">
        <img src="pic/ec.png" width="367" height="40">
        <div class="circles">
          <div class="circle"><img src="pic/circle.png" width="42" height="42"></div>
          <div class="circle"><img src="pic/circle.png" width="42" height="42"></div>
          <div class="circle"><img src="pic/circle.png" width="42" height="42"></div>
          <div class="circle"><img src="pic/circle_grey.png" width="42" height="42"></div>
        </div>
          <p>
            <b>Step 3/4</b></br>
            <b>Your calculation is completed!</b><br>
              If you properly recycle your e-waste, you will save <b>2.45</b> metric<br>
              tons of CO2. That equals 12 minutes of a train ride or a 10<br>
              minute hot shower.
          </p>
          <div class="icons_container">
            <div class="icon_calculator_box">
              <div id="icon_calculator_color_right_top"><b class="b_move">Train ride</b></div>
              <div class="boxes_icon"><img src="pic/train.png" width="75" height="75"></img></div>
              <div id="icon_calculator_color_right_down"><b>12 min</b></div>
            </div>
            <div class="icon_calculator_box">
              <div id="icon_calculator_color_left_top"><b>Hot shower</b></div>
              <div class="boxes_icon"><img src="pic/shower.png" width="75" height="75"></img></div>
              <div id="icon_calculator_color_left_down"><b>10 min</b></div>
            </div>
          </div>
          <a href="calculator_sec-4.php"><button class="btn_next_step">Next step</button></a>
          <div class="small_icon_button"></div>
        </div>
  </div>
</div>
</section>
</body>
<?php include_once('blocks/footer.php'); ?>
