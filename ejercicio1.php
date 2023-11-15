<?php
Class MultiplosSuma{
  public $a;
  public $b;

  public function __construct($a,$b)
  {
    $this->a=$a;
    $this->b=$b;
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

  public function getB()
  {
    return $this->b;
  }

  public function setB($b)
  {
    $this->b = $b;

    return $this;
  }

  public function encontrarMultiplos($a,$b){
    $i = 1;
    $n = 0;
    while ($i < 1000){
      if ($i%$a == 0 || $i % $b == 0 ){
        $n += $i;
      }
      $i++;  
    }
    return $n;
  }
}
$m = new MultiplosSuma(3,5);
echo $m->encontrarMultiplos(3,5);
