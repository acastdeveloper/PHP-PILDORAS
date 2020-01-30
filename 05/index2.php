<!DOCTYPE html>
<html lang="ca">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>INCLUDE, REQUIRE</title>
</head>
<body>
<?php
/* INCLUDE */

include("extern.php");
escriure4();
?>
<hr>

<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Magnam itaque doloribus facilis quibusdam pariatur at quasi a consequatur ipsa id assumenda, mollitia aut tempora placeat?</p>

<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Asperiores impedit quae aut doloribus consectetur eos, ex voluptas, explicabo dolor odio aspernatur provident sapiente corporis, eligendi.</p>
<p>Facere consequatur, eligendi dicta dolore corporis provident repellat perspiciatis ex itaque aperiam cum in distinctio harum, pariatur id, odit quod nesciunt totam non! Explicabo, cum!</p>
<p>Vero voluptatem, incidunt. Ratione enim praesentium excepturi placeat, ut esse distinctio! Doloremque nostrum ratione vero, aliquid iusto, odio architecto consectetur, cum alias illum ut, laboriosam?</p>
<?php
include("notroba.php")
?>
<p>Si posem include, però l'arxiu no el troba, llavors dona un error però permet seguir executant el fluxe.</p>
<p>Delectus corporis aspernatur iure, quae dolorum. Non quod qui minima quos! Dolore tenetur autem, voluptates nesciunt modi quae quos minus vel sed dolorem aspernatur. Expedita!</p>
<?php
require("notroba.php");
?>
<p>Aquest paràgraf no apareix</p>

</body>
</html>
