<?php

class Veza extends Baza
{
  public function get($table, $value)
  {
    $sql = "SELECT * FROM $table";
    $stmt = $this->spoji()->query($sql);
      while($red = $stmt->fetch())
      {
        echo $red[$value] . '<br>';
      }
  }

  public function input($ltd, $lng, $desc_coo)
  {
    $sql = "INSERT INTO grad(ltd, lng, desc_coo) VALUES ('$ltd', '$lng', '$desc_coo')";
    $stmt = $this->spoji()->query($sql);
  }
}

 ?>
