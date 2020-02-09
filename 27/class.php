<?php

class Coche
{
    //PROPIETATS
    protected $ruedas;
    public $color;
    protected $motor;

    //MÈTODES
    public function __construct()
    { //Mètode CONSTRUCTOR
        $this->ruedas=4;
        $this->color="";
        $this->motor=1600;
    }

    public function get_ruedas()
    {
        return $this->ruedas;
    }

    public function get_motor()
    {
        return $this->motor;
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

    public function set_color($color_cotxe)
    {
        $this->color=$color_cotxe;
        echo "El color d'aquest cotxe és: " . $this->color . "<br>";
    }
}



class Camion extends Coche
{
    //MÈTODES
    public function __construct()
    { //Mètode CONSTRUCTOR
        $this->ruedas=6;
        $this->color="";
        $this->motor=4600;
    }

    public function estableix_color($color_cotxe)
    {
        $this->color=$color_cotxe;
        echo "El color d'aquest camió és: " . $this->color . "<br>";
    }

    public function arrencar()
    {
        parent::arrencar();
        echo "Camió arrencat";
    }
}
