<?php

namespace App;

abstract class Cuadrilatero extends FiguraPlana{
    protected $lados = [];
    protected $cuadrado = "cuadrado";
    protected $rectangulo = "rectangulo";
    protected $caras = 4;

     function Cuadrilatero($lado1, $lado2){
        array_push($this->lados,$lado1);
        if(!empty($lado2)){
            array_push($this->lados,$lado2);
        }
    if($lado1 == $lado2){
        $this->cuadrado;
    }else{
        $this->rectangulo;
    }
    }

}