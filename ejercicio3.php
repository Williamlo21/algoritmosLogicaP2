<?php
class NumeroAleatorio{
    public function generarNumeroAleatorio(){
        $a = date("s");
        intval($a);

        $a= $a*$a;
        if ($a>100){
            $a= $a-100;
        }
        return $a;
    }
}

$n = new NumeroAleatorio();
echo $n->generarNumeroAleatorio();