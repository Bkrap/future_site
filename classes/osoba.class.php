<?php

class Osoba{
  private $ime;
  private $prezime;
  private $grad;
  public static $rasa;

  public function __construct($ime, $prezime, $grad)
  {
    $this->ime      = $ime;
    $this->prezime  = $prezime;
    $this->grad     = $grad;
  }

  public function info()
  {
    return $this->ime;
  }

public static function defaultRasa($tip_rase)
{
  return self::$rasa = $tip_rase;
}

}
 ?>
