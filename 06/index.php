<!DOCTYPE html>
<html lang="ca">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Àmbit de les variables - Scope</title>
</head>
<body>
<?php
/*ÀMBIT LOCAL
Quan es declara dins d'una funció. NOMÉS és accessible des de dins de la funció.

Per altra banda, des de dins de la funció no es pot accedir a una variable declarada fora de la funció si és que no està definida com a GLOBAL
*/



/*ÀMBIT GLOBAL
Declarada a qualsevol lloc, dins o fora de funció, sent visible i accessible des de qualsevol lloc del codi.
*/


/*ÀMBIT SUPER GLOBAL
És declarada com Array. És visible i accessible dins i fora de l'script PHP
*/



/* EXEMPLES */
// Exemple 1
$quelcom = "adeu";

function escriu_quelcom()
{
    $quelcom = "hola";
}

echo $quelcom;
// Podem observar que el $quelcom que guanya és el de fora de la funció.



//Exemple 2

$paraula ="codonyat";

function escriu_paraula()
{
    echo $paraula();
}

escriu_paraula();



 ?>

FINAL DE PÀGINA QUE NO SURT PERQUÈ HI HA UN ERROR QUE INTERROMP EL FLUX DE TREBALL. DINS DE LA FUNCIÓ ESCRIU_PARAULA() S'ESTÀ UTILITZANT UNA VARIABLE DEFINIDA FORA. 

</body>
</html>
