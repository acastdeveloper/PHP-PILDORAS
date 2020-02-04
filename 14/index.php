<!DOCTYPE html>
<html lang="ca">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Funcions Matemàtiques. Casting.</title>
  <style>
  pre {
    background: darkgreen;
    color:lightgrey;
    padding:5px;
  }
  </style>
</head>
<body>
  <h1>Funcions Matemàtiques. Casting.</h1>

  <h2>Funcions Matemàtiques</h2>
  <p>Al vídeo ens parla de les funcions matemàtiques. A l'enllaç següent <a href="https://www.php.net/manual/es/ref.math.php">https://www.php.net/manual/es/ref.math.php</a> trobem un llistat de les funcions matemàtiques que hi ha a PHP que són les següents:</p>
<ul>
  <li>abs — Valor absoluto</li>
  <li>acos — Arco coseno</li>
  <li>acosh — Arco coseno hiperbólico</li>
  <li>asin — Arco seno</li>
  <li>asinh — Arco seno hiperbólico</li>
    <li>atan2 — Arco tangente de dos variables</li>
  <li>atan — Arco tangente</li>
  <li>atanh — Arco tangente hiperbólica</li>
  <li>base_convert — Convertir un número entre bases arbitrarias</li>
  <li>bindec — Binario a decimal</li>
  <li>ceil — Redondear fracciones hacia arriba</li>
  <li>cos — Coseno</li>
  <li>cosh — Coseno hiperbólico</li>
  <li>decbin — Decimal a binario</li>
  <li>dechex — Decimal a hexadecimal</li>
  <li>decoct — Decimal a octal</li>
  <li>deg2rad — Convierte el número en grados a su equivalente en radianes</li>
  <li>exp — Calcula la exponencial de </li>
  <li>expm1 — Devuelve exp(numero)-1, calculado de tal forma que no pierde precisión incluso cuando el valor del numero se aproxima a cero.</li>
  <li>floor — Redondear fracciones hacia abajo</li>
  <li>fmod — Devuelve el resto en punto flotante (módulo) de la división de los argumentos</li>
  <li>getrandmax — Mostrar el mayor valor aleatorio posible</li>
    <li>hexdec — Hexadecimal a </li>
  <li>hypot — Calcula la longitud de la hipotenusa de un triángulo de ángulo recto</li>
  <li>intdiv — División entera</li>
  <li>is_finite — Encuentra si un valor es un número finito legal</li>
  <li>is_infinite — Encuentra si un valor es infinito</li>
  <li>is_nan — Encuentra si un valor no es un número</li>
  <li>lcg_value — Generador lineal congruente combinado</li>
  <li>log10 — Logaritmo en base 10</li>
  <li>log1p — Devuelve log(1 + numero), calculado de tal forma que no pierde precisión incluso cuando el valor del numero se aproxima a cero.</li>
  <li>log — Logaritmo natural</li>
  <li>max — Encontrar el valor más alto</li>
  <li>min — Encontrar el valor más bajo</li>
  <li>mt_getrandmax — Mostrar el mayor valor aleatorio posible</li>
  <li>mt_rand — Genera un mejor número entero aleatorio</li>
  <li>mt_srand — Genera el mejor número aleatorio a partir de una semilla</li>
  <li>octdec — Octal a decimal</li>
  <li>pi — Obtener valor de pi</li>
  <li>pow — Expresión exponencial</li>
  <li>rad2deg — Convierte el número en radianes a su equivalente en grados</li>
  <li>rand — Genera un número entero aleatorio</li>
  <li>round — Redondea un float</li>
  <li>sin — Seno</li>
  <li>sinh — Seno hiperbólico</li>
  <li>sqrt — Raíz cuadrada</li>
  <li>srand — Genera un número aleatorio a partir de una semilla</li>
    <li>tan — Tangente</li>
  <li>tanh — Tangente hiperbólica</li>
</ul>

<hr>
<p>Anem a posar un exemple. Per exemple anem a arrodonir un número decimal amb dues xifres significatives:</p>

<pre>
  $num1=5.78598854554565545;
  echo "El numero és:". round($num1,2);
</pre>
<?php
$num1=5.78598854554565545;
echo "El numero és:". round($num1, 2);
?>

<hr>


<h2>Casting</h2>
<p><strong>Casting</strong> als llenguatges de programació és el canvi de tipologia d'un tipus de variable a un altre. Hi ha dos tipus de castings: explícit i implícit. A PHP per defecte tenim <em>càsting implícit</em> que facilita molt la vida.</p>

<h3>Casting implícit</h3>
<pre>
  $num1=5.78598854554565545;
  /*PHP interpreta que és de tipus float.
  Però si la redefinim... */

  $num1 += 2;
  /* A partir d'aquest punt PHP asumeix que es tracta d'una variable integre
  */

  $num1="5";
  /*
I a partir d'aquí asumeix que es tracta d'una variable tipus string.
  */
  echo "El numero és:". round($num1,2);
</pre>


<h3>Casting explícit</h3>
<p>En ocasions ens interessarà tenir control de a quin tipus de variable volem que es tranformi. Suposem que volem canviar una variable de tipus string a tipus integer. Això es faria de la següent manera:</p>
<pre>
  $num1="5"; /* PHP en veure que va entre cometes entén que és un string */
  $resultado=(int)$num1;
  /* Al posar (int) davant de la variable interpretarà la variable com a integer. */
</pre>



</body>
</html>
