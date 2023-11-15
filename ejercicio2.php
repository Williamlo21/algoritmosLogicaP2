<?php
class NumeroPrimo{
  public $a;
  public function __construct($a)
  {
    $this->a=$a;
  }

  public function getA()
  {
    return $this->a;
  }

  public function setA($a)
  {
    $this->a = $a;

    return $this;
  }
  public function EncontrarNumeroPrimo(){
    $b = $this->a;
    $i = 1;
    $cont = 0;
    while ($i <= $b) {
      if ($b % $i == 0) {
        $cont = $cont + 1;
      }
      $i++;
    }
    if ($cont == 2) {
      return "Es primo";
    } else {
      return "No es primo";
    }
  }
}

$n = new NumeroPrimo(5);
echo $n->EncontrarNumeroPrimo();
