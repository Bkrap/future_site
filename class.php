<?php
require 'veza.php';
include_once('blocks/home/map-e-waste.php');

class Map{
  public $lat;
  public $lng;
  public $desc;

  public function __construct($lat, $lng, $coo_desc){
    $this->lat = $lat;
    $this->lng = $lng;
    $this->coo_desc = $coo_desc;
 }

  public function getLat(){
    return $this->lat;
  }

  public function getLng(){
    return $this->lng;
  }

  public function getDesc(){
    return $this->coo_desc;
  }
}



 ?>
