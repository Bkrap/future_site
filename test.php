<?php
include_once('veza.php');

$sql = "SELECT * FROM grad WHERE adresa = 'Ulica grada Dubrovnika'";
$upit = $veza->query($sql);
while($red = $upit->fetch_assoc()){

  $lat = $red['lat'];
  $lng = $red['lng'];
  echo $lat . $lng;
}
 ?>
