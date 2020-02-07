<!DOCTYPE html>
<html lang="ca">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>23 - Programació Orientada a Objectes II. Definint propietats i mètodes d'una classe.</title>
  <style>
    pre {
      background:darkgreen;
      color:lightgrey;
      padding:10px;
    }
  </style>
</head>
<body>
  <h1>23 - Programació Orientada a Objectes II. Definint propietats i mètodes d'una classe.</h1>

  <p>Al vídeo anterior havíem creat una classe buida Cotxe. Ara l'omplirem amb propietats i mètodes.</p>

  <h2>Propietats</h2>
  <p> Són les característiques comunes que defineixen la classe. A l'exemple que estem fent servir basat en els cotxes quedaria així:</p>
<pre>
  class Coche {
    //PROPIETATS
    var $ruedas;
    var $color;
    var $motor;
  }
</pre>

<hr>

<h2>Mètodes</h2>
<p>Els mètodes són les accions comunes que poden realitzar els objectes d'aquella classe. Es defineixen de la següent manera:</p>

<pre>
  class Coche {
    //PROPIETATS
    var $ruedas;
    var $color;
    var $motor;

    //MÈTODES
    function arrencar() {

    }

    function girar() {

    }

    function frenar() {

    }

  }



  $renault = new Coche();
  $mazda = new Coche();
  $porsche = new Coche();
  $seat = new Coche();
</pre>

<hr>

<h2>MÈTODE CONSTRUCTOR. Estat inicial dels objectes</h2>
  <p>Tota classe ha de tenir un estat inicial. Aquest estat inicial el definim amb un mètode anomenat <strong><em>MÈTODE CONSTRUCTOR</em></strong>, al qual li hem de donar el mateix nom que a la classe. Veiem a continuació com quedaria al nostre exemple:</p>

  <pre>
    class Coche {
      //PROPIETATS
      var $ruedas;
      var $color;
      var $motor;

      //MÈTODES
      function Coche(){ //Mètode CONSTRUCTOR
        $this->ruedas=4;
        $this->color="blanco";
        $this->motor=1600;
      }

      function arrencar() {
        echo "Está arrancando";
      }

      function girar() {
        echo "està girando";
      }

      function frenar() {
        echo "està frenando"
      }

    }

    /*Creació de diferents Objectes de la classe Coche instanciant-los a la classe de la següent manera. */
    $renault = new Coche();
    $mazda = new Coche();
    $porsche = new Coche();
    $seat = new Coche();

  </pre>

  <P>Cal fixar-se que quan fem...</P>
<pre>
  $renault = new Coche();
</pre>
<p>... en realitat estem invocant al mètode constructor, per això porta els parèntesi. I cada cop que estàs cridant al mètode constructor s'està executant el seu codi que inicialitza la classe. </p>


<p>Un cop hem creat un objecte, instanciant-lo a la classe amb <strong><em>new</em></strong>, ja podem invocar algun dels seus mètodes o propietats i ho fem de la següent manera: </p>

<pre>
$mazda->girar();
</pre>

<p>Veja'm tot el codi junt:</p>
<pre>
  class Coche {
    //PROPIETATS
    var $ruedas;
    var $color;
    var $motor;

    //MÈTODES
    function Coche(){ //Mètode CONSTRUCTOR
      $this->ruedas=4;
      $this->color="blanco";
      $this->motor=1600;
    }

    function arrencar() {
      echo "Está arrancando<br>";
    }

    function girar() {
      echo "està girando<br>";
    }

    function frenar() {
      echo "està frenando<br>";
    }

  }

  /*Creació de diferents Objectes de la classe Coche instanciant-los a la classe de la següent manera. */
  $renault = new Coche();
  $mazda = new Coche();
  $porsche = new Coche();
  $seat = new Coche();

//Invocació al mètode girar per a l'objecte $mazda
$mazda->girar();

</pre>

  <p><strong>Restultat</strong>:</p>


<?php
class Coche
{
    //PROPIETATS
    public $ruedas;
    public $color;
    public $motor;

    //MÈTODES
    public function Coche()
    { //Mètode CONSTRUCTOR
        $this->ruedas=4;
        $this->color="blanco";
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
}

/*Creació de diferents Objectes de la classe Coche instanciant-los a la classe de la següent manera. */
$renault = new Coche();
$mazda = new Coche();
$porsche = new Coche();
$seat = new Coche();

//Invocació al mètode girar per a l'objecte $mazda
$mazda->girar();
?>

</body>
</html>
