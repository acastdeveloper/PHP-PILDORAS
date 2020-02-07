<?php

class Coche
{
    //PROPIETATS
    public $ruedas;
    public $color;
    public $motor;

    //MÈTODES
    public function __construct()
    { //Mètode CONSTRUCTOR
        $this->ruedas=4;
        $this->color="";
        $this->motor=1600;
    }

    public function arrencar()
    {
        echo "Está arrancando<br>";
    }

    public function girar()
    {
        echo "està girando<br>";
    }

    public function frenar()
    {
        echo "està frenando<br>";
    }

    public function estableix_color($color_cotxe)
    {
        $this->color=$color_cotxe;
        echo "El color d'aquest cotxe és: " . $this->color . "<br>";
    }
}
