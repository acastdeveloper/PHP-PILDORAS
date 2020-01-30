<!DOCTYPE html>
<html lang="ca">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>05 - Fluxe d'execució</title>
  <meta name="keywords" content="flow of execution, include, require, include_once, require_once">
</head>
<body>

<?php

echo "Este es el primer mensaje <br>";

echo "Este es el segundo mensaje <br>";
/*
S'està executant de dalt a baix. Aquest és el fluxe normal de treball.
Però hi ha estructures com les funcions, les condicionals i alguns bucles
que interrompeixen el fluxe normal de treball.



*/

/* INTRODUCCIÓ A LES FUNCIONS
Les funcions no s'executaran fins que no les invoquem

*/

function escriure()
{
    echo "Estem escrivint des de la funció escriure() <br>";
}
escriure();





// A continuació exemple d'invocació abans de definir una funció.
// Funciona igualment i tot i així està sent invocada abans de ser definida. Amb la qual cosa el fluxe de treball no és de dalt a baix.
escriure2();
function escriure2()
{
    echo "Estem escrivint des de la funció escriure2() i la invoquem abans de definir-la <br>";
}

?>

<hr>

<?php
/* INCLUDE, REQUIRE, INCLUDE_ONCE, REQUIRE_ONCE
La funció INCLUDE serveix per col·locar el codi que hi ha a un arxiu extern
 */
escriure3();
include("extern.php");
/*
En aquest cas he invocat a la funció escriure3() que està definida a l'arxiu extern.php abans de l'include. El resultat és un error.

Fatal error: Uncaught Error: Call to undefined function escriure3() in I:\laragon\www\PHP-PILDORAS\05\index.php:55 Stack trace: #0 {main} thrown in I:\laragon\www\PHP-PILDORAS\05\index.php on line 55.


Aquest error impedeix que s'executi a partir d'aquest punt interrompent
el fluxe normal d'execució.

Passar a index2.php
*/

escriure4();
echo "hola";

 ?>
</body>
</html>
