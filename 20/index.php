





<!DOCTYPE html>
<html lang="ca">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Les funcions(Ia part).</title>
  <style>
    pre {
      background:darkgreen;
      color:lightgrey;
      padding:10px;
    }
  </style>
</head>
<body>
  <h1>20. Les funcions(Ia part).</h1>
  <p>Les funcions serveixen per automatitzar tasques. Això permet eliminar codi repetitiu als programes.</p>

  <p>N'hi ha de dos tipus:</p>
  <ul>
    <li><strong>Funcions predefinides</strong>: venen amb el llenguatge PHP. A l'enllaç següent les trobem: <a href="https://www.php.net/manual/es/indexes.functions.php">https://www.php.net/manual/es/indexes.functions.php</a></li>
    <li><strong>Funcions pròpies</strong>: les crea el programador amb l'objectiu de reutilitzar-les en el futur.</li>
  </ul>

<hr>

<p>Veiem un exemple ràpid:</p>

<pre>
  function suma($num1, $num2) {
      $resultat=$num1+$num2;
    return;
  }

  suma(5,7); //Invoquem a la funció i li passem els valors dels dos paràmetres $num1 i $num2. I com que la funció té un return, torna el valor de $resultat com a valor de $resultat. I res més. No ho mostra.

  echo(suma(5,7));  //En canvi aquí fem un echo del que retorni d'invocar la funció suma i passar-li els dos paràmetres.

</pre>
<p><strong>Resultat</strong>:</p>
<?php

function sumar($a, $b)
{
    $suma = $a + $b;
    return $suma;
}
echo(sumar(5, 7));
?>

<hr>
<h2>També es pot definir paràmetres per defecte</h2>
<p>Veiem-ne un exemple:  </p>
<pre>
  function money($cantidad,$euro=true){

        if($euro == true) {
          echo "$cantidad€";
        }
        else {
          echo $cantidad;
        }
  }

  money("35");

</pre>
<p><strong>Resultat:</strong></p>
<?php
function money($cantidad, $euro=true)
{
    if ($euro == true) {
        echo "$cantidad €";
    } else {
        echo $cantidad;
    }
}

money("35");
?>

<p>Podem observar que tot i que no li hem passat el segon paràmetre pren com a valor per defecte <strong><em>true</em></strong>.</p>

 </body>
</html>
