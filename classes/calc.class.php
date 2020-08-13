<?php
class Calc{
  public $num1;
  public $num2;
  public $operator;

  public function __construct($num1, $num2, $operator)
  {
    $this->num1      = $num1;
    $this->num2      = $num2;
    $this->operator  = $operator;
  }

  public function result()
  {
    if($this->operator === 'plus')
    {
      return $this->num1 + $this->num2;
    }
    elseif($this->operator == 'minus')
    {
      return $this->num1 - $this->num2;
    }
    elseif($this->operator == 'mnozi')
    {
      return $this->num1 * $this->num2;
    }
    elseif($this->operator == 'dijeli')
    {
      return $this->num1 / $this->num2;
    }
    else
    {
      echo "Greška!";
    }

  }
}


 ?>
