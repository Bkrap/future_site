<?php
require 'veza.php';
include_once('blocks/home/map-e-waste.php');

class Map{
  private $lat;
  private $lng;
  private $desc;

  public function __construct($lat, $lng, $coo_desc){
    $this->lat = $lat;
    $this->lng = $lng;
    $this->coo_desc = $coo_desc;
 }

  public function getLat($lat){
    return $this->lat;
  }

  public function getLng($lng){
    return $this->lng;
  }

  public function getDesc($coo_desc){
    return $this->coo_desc;
  }
}



 ?>
