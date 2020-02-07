<!DOCTYPE html>
<html lang="ca">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>24 - Programació Orientada a Objectes III. Invocació de mètodes amb paràmetres. Reutilització de codi.</title>
  <style>
    pre {
      background:darkgreen;
      color:lightgrey;
      padding:10px;
    }
  </style>
</head>
<body>
  <h1>24 - Programació Orientada a Objectes III. Invocació de mètodes passant paràmetres. Reutilització de codi.</h1>

  <h2>Invocació de mètodes passant paràmetres.</h2>

 <p>Per invocar un mètode passant paràmetres primer cal que existeixi un mètode que accepti paràmetres. Vejam un exmple de com crear el mètode afegint-lo al final de la Classe.</p>
<pre>
  function estableix_color($color_cotxe) {
    $this->color=$color_cotxe;
    echo "El color d'aquest cotxe és: " . $this->color;
  }
</pre>

<p>A continuació veurem com invocar un mètode de la classe de l'objecte $mazda passant paràmetre.</p>
<pre>//Posem la classe a un arxiu independent per poder-lo utilitzar des de qualsevol pàgina:
include("class.php");

/*Creació de diferents Objectes de la classe Coche instanciant-los a la classe de la següent manera. */
$mazda = new Coche();

//Invocació al mètode girar per a l'objecte $mazda
$mazda->estableix_color("vermell");</pre>



<?php
//Posem la classe a un arxiu independent per poder-lo utilitzar des de qualsevol pàgina:
include("class.php");

/*Creació de diferents Objectes de la classe Coche instanciant-los a la classe de la següent manera. */
$mazda = new Coche();
$seat = new Coche();

//Invocació al mètode girar per a l'objecte $mazda
$mazda->estableix_color("vermell");
$seat->estableix_color("blau");


 $mazda->arrencar();
 echo $seat->ruedas;



?>

</body>
</html>
