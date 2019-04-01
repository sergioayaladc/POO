<?php

namespace App;

class Rectangulo extends Cuadrilatero
{
     function __construct($ladoA,$ladoB){
        $this->Cuadrilatero($ladoA,$ladoB);
    }
     function perimetro()
    {
        echo 'el perimetro es: ',2*($this->lados[0] +  $this->lados[1] ),' - ';
    }

     function area()
    {
        echo 'el area es: ',$this->lados[0] * $this->lados[1],' - ';
    }
     function nombre(){
        echo 'soy un ',$this->rectangulo,' - ';
    }
     function caras(){
        echo 'mi numero de caras es: ',$this->caras;
    }
}
