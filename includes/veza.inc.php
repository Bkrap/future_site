<?php
  include 'include-class.inc.php';


  $ltd = $_POST['ltd'];
  $lng = $_POST['lng'];
  $desc_coo = $_POST['desc_coo'];

  $unos = new Veza();
  $unos->input($ltd, $lng, $desc_coo);


 ?>
