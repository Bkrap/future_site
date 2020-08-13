<?php
  include 'include-class.inc.php';


  $num1 = $_POST['num1'];
  $num2 = $_POST['num2'];
  $operator = $_POST['operator'];

  $calculator = new Calc($num1, $num2, $operator);
  try{
    echo $calculator->result();
  }
  catch (TypeError $e){
    echo "Greška!";
  }


 ?>
