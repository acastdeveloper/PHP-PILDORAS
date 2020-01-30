<!DOCTYPE html>
<html lang="ca">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>04 - Comentaris, variables, print i echo.</title>
  <meta name="keywords" value="Comments, variables, print, echo, concat">
</head>
<body>
<?php
/* Comentari
en diverses
línies*/

//Comentari breu que no s'executa


//Variables
/* Per definir una variable a PHP cal respectar els següents punts:

1) Posem $ davant del nom de la variable
2) No poden contenir símbols extranys
3) Els noms de variables poden contenir números, però no començar per número.
4) Per inicialitzar una variable podem posar:
    $nom_variable;
5) El més habitual, però, és donar-les un valor.
    $nom_variable="valor de la variable";
6) Els valors de las variables poden ser strings, números, null, booleans, etc.
7) PHP és un llenguatge "poc tipat" per la qual cosa
*/

$nom; //No sabem si és una variable de tipus string, null, boolean, number,...
$nom_variable="valor de la variable";
$nom_variable="reasignació de valor de la mateixa variable";
$nom_variable="3"; //En fer servir cometes la variable és un string.
$nom_variable=3; //En no fer servir cometes la variable no és un string.


// PRINT, Serveix per renderitzar text
 print $nom; //renderitza el valor de $nom
/* Però com que $nom, tot i estar iniciada, no està definida amb un valor retorna el següent:
Notice: Undefined variable: nom in I:\laragon\www\PHP-PILDORAS\04\index.php on line 39
*/

$nom = "3";
print $nom; //En canvi si li asignem un valor llavors sí imprimeix
?>

<hr>

<?php
/* CONCATENAR STRINGS */
/* Per concatenar cadenes, és a dir strings, cal utilitzar el punt.  */
$text1="La variable nom conté el valor:" . $nom;
print $text1;
// Segons "píldoras informáticas" convé deixar un espai en blanc davant i darrera del punt
?>

<hr>

<?php
/* Incloure variable dins de l'String */
$text2 = "La variable nom conté el valor:$nom";
print $text2;
?>

<hr>

<?php
/* Diferències entre cometes simples i cometes dobles.
Si a l'hora d'incloure una variable dins d'un string fem servir
comes simples en comptes de dobles llavors no substitueix el valor de la variable.
*/
$text3 = 'La variable nom conté el valor:$nom';
print $text3;
?>

<hr>

<?php
/* ECHO
Serveix per escriure al navegador, igual que PRINT.
*/
echo "Això és una cadena" . " que és concatenada amb aquesta";
?>>

<hr>

<?php
/* Diferències entre PRINT i ECHO */
echo $nom, $text3, $text2;
/* Amb echo podem seqüenciar, que no és el mateix que concatenar, successivament diversos strings. Això amb print no deixa.


PRINT és una funció mentre que ECHO és una expressió.

PRINT és una funció que torna 1.

PRINT consumeix més recursos que ECHO,
per això en la majoria de vegades veurem ECHO.
 */

?>




</body>
</html>
