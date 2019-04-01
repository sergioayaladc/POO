<?php


namespace App;


class Index
{
     static function run(){

        $cuadrado = new Cuadrado(4);
        $cuadrado->nombre ();
        $cuadrado->area ();
        $cuadrado->perimetro ();
        $cuadrado->caras ();

        $rectangulo = new Rectangulo(2,9);
        $rectangulo->nombre ();
        $rectangulo->area ();
        $rectangulo->perimetro ();
        $cuadrado->caras ();


    }
}
