<?php
class Veza{
     public $veza;
     public $error;
     public function __construct()
     {
          $this->veza = mysqli_connect("localhost", "root", "", "future_site");
          if(!$this->veza)
          {
               echo 'Neuspješna veza ' . mysqli_connect_error($this->veza);
          }
     }

     public function insert($table_name, $data)
     {
          $string = "INSERT INTO ".$table_name." (";
          $string .= implode(",", array_keys($data)) . ') VALUES (';
          $string .= "'" . implode("','", array_values($data)) . "')";
          if(mysqli_query($this->veza, $string))
          {
               return true;
          }
          else
          {
               echo mysqli_error($this->veza);
          }
     }

}
?>
