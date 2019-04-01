<?php

namespace App;

class Cuadrado extends Cuadrilatero
{
     function __construct($lado){
        $this->Cuadrilatero($lado,$lado);
    }
     function perimetro()
    {
        echo 'el perimetro es: ',$this->lados[0]*4,' - ';
    }

     function area()
    {
        echo 'el area es: ',pow($this->lados[0],2),' - ';
    }

     function nombre(){
        echo 'soy un ',$this->cuadrado,' - ';
    }
     function caras(){
        echo 'mi numero de caras es: ',$this->caras,'<br>'.'<br>';
    }
}
