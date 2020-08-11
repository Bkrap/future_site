<?php
$server = "localhost";
$korisnicko_ime = "root";
$lozinka = "";
$ime_baze = "future_site";

$veza = new mysqli($server, $korisnicko_ime, $lozinka, $ime_baze);

if($veza->connect_error)
  die("Veza nije uspješna! " . $veza->connect_error);
 ?>
