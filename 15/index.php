<!DOCTYPE html>
<html lang="ca">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>15 - Condicionals I</title>

  <style>
pre {background: darkgreen;
color:#eee;
padding:10px;
}

thead tr {background:darkgreen; color:#eee;}

table {border:1px solid darkgreen;}

th, td {padding:5px; border:1px solid darkgreen;}


  </style>

</head>
<body>
<p>A PHP i altres llenguatges de programació existeixen diverses estructures de condicionals.</p>

  <h1>15 - Condicionals I</h1>
<p>Abans però hem de parlar dels operadors lògics. I hem de tenir en compte que la seva prioritat no és sempre la mateixa. </p>

  <h2>Operadors lògics</h2>
  <table>
    <thead><tr><th>Operador</th>
    <th>Nombre</th></tr></thead>
    <tr>
      <td>&&</td>
      <td>I lògic</td>
    </tr>
    <tr>
      <td>AND</td>
      <td>I lògic</td>
    </tr>
    <tr>
      <td>||</td>
      <td>O lògic</td>
    </tr>
    <tr>
      <td>OR</td>
      <td>O lògic</td>
    </tr>
    <tr>
      <td>XOR</td>
      <td>Exclussió</td>
    </tr>
    <tr>
      <td>!</td>
      <td>Negació NOT</td>
    </tr>
  </table>

  <h2>Prioritats d'operadors lògics</h2>
<p>A matemàtiques tenim la jerarquia d'operacions. A programació tenim una sèrie d'operadors que relatem a continuació en ordre descendent en prioritat. Ho trobarem a la pàgina: <a href="https://www.php.net/manual/es/language.operators.precedence.php">https://www.php.net/manual/es/language.operators.precedence.php</a></p>

<table>
  <thead><tr><th>Operadores</th>
  <th>Información adicional
</th></tr></thead>
<tr>
  <td>clone new	</td>
  <td></td>
</tr>
<tr>
<td>[</td>
  <td></td>
</tr>
<tr>
  <td>**</td>
  <td></td>
</tr>
<tr>
  <td>++ -- ~ (int) (float) (string) (array) (object) (bool) @</td>
  <td></td>
</tr>
<tr>
  <td>instanceof</td>
  <td></td>
</tr>
<tr>
  <td>!</td>
  <td></td>
</tr>
<tr>
  <td>* / %	</td>
  <td></td>
</tr>
<tr>
  <td>+ - .	</td>
  <td></td>
</tr>
<tr>
  <td><< >>	</td>
  <td></td>
</tr>
<tr>
  <td>< <= > >=	</td>
  <td></td>
</tr>

<tr>
  <td>== != === !== &lt;&gt; <=>	</td>
  <td></td>
</tr>
<tr>
  <td>&</td>
  <td></td>
</tr>
<tr>
  <td>^</td>
  <td></td>
</tr>
<tr>
  <td>|</td>
  <td></td>
</tr>
<tr>
  <td>&&</td>
  <td></td>
</tr>
<tr>
  <td>||</td>
  <td></td>
</tr>
<tr>
  <td>??</td>
  <td></td>
</tr>
<tr>
  <td>?:</td>
  <td></td>
</tr>
<tr>
  <td>	= += -= *= **= /= .= %= &= |= ^= <<= >>=</td>
  <td></td>
</tr>
<tr>
  <td>and</td>
  <td></td>
</tr>
<tr>
  <td>xor</td>
  <td></td>
</tr>
<tr>
  <td>or</td>
  <td></td>
</tr>
</table>
<hr>
<h2>Condicional 1. IF ELSE.</h2>
<h3>ACTUALITZACIÓ</h3>
<p>Això que posaré a continuació no està al video. Però ho ajunto. Hi ha dues maneres de fer servir la estructura condicional IF ELSE. La clàssica amb claudators i una forma alternativa amb "dos punts". Veiem a continuació les dues formes: </p>

<table>
  <thead>
    <tr>
      <th>Clàssica</th>
      <th>Alternativa</th>
    </tr>
  </thead>
    <tr>
      <td>
        <pre>
          if (CONDICION)
          {
            SENTENCIAS A EJECUTAR;
          }
          else if (CONDICION 2)
          {
            OTRAS SENTENCIAS A EJECUTAR;
          }
          elseif (CONDICION 3)
          {
            AÚN OTRAS SENTENCIAS A EJECUTAR;
          }
          else {
            OTRAS SENTENCIAS A EJECUTAR SI NO SE CUMPLE NINGUNA DE LAS CONDICIONES PRECEDENTES;
          }
        </pre>
      </td>
      <td>
        <pre>
            if (CONDICION):
              SENTENCIAS;
            elseif (CONDICION2):
              OTRAS SENTENCIAS;
            else:
              SENTENCIAS CUANDO NO SE CUMPLE NINGUNA CONDICIÓN PREVIA;
        </pre>
      </td>
    </tr>
    <tr>
      <td><strong>Nota:</strong> Al mode clàssic es pot fer servir:
        <ul>
          <li>ELSE IF()</li>
          <li>ELSEIF()</li>
        </ul>
        És a dir, en dues paraules o una.
       </td>
      <td>
        En canvi en mode alternatiu només es pot fer servir ELSEIF().

      </td>
    </tr>
</table>

<hr>





<p>A continuació avaluarem què fa el codi següent:</p>
<pre>
  $var1=true;
  $var2=false;

  // $resultado=$var1 && $var2;
  $resultado=$var1 && $var2;

  if ($resultado==true) {
      echo "Correcto";
  } else {
      echo "Incorrecto";
  }
</pre>


<p><strong>Resultat:</strong>

<?php

$var1=true;
$var2=false;

$resultado=$var1 && $var2;

if ($resultado==true) {
    echo "Correcto";
} else {
    echo "Incorrecto";
}

?>
</p>

<p>Però si en comptes de posar <strong>&&</strong> posem <strong>and</strong></p>
<pre>
  $var1=true;
  $var2=false;

  // $resultado=$var1 && $var2;
  $resultado=$var1 and $var2;

  if ($resultado==true) {
      echo "Correcto";
  } else {
      echo "Incorrecto";
  }
</pre>

<p>llavors el que resulta és: <strong>
<?php
$var1=true;
$var2=false;

// $resultado=$var1 && $var2;
$resultado=$var1 and $var2;

if ($resultado==true) {
    echo "Correcto";
} else {
    echo "Incorrecto";
}
?>
</strong></p>

<h3>Per què dona un resultat diferent?</h3>
<p><strong>Resposta:</strong> perquè si ens fixem en la taula l'operador <strong>=</strong> té precedència sobre <strong>and</strong> i llavors a l'expressió...</p>
<pre>
  $resultado=$var1 and $var2;
</pre>
...primer té prioritat l'operador <strong>=</strong>...
<pre>
  $resultado=$var1
</pre>
... i després tracta els dos blocs resultants amb l'operador <strong>and</strong>:
<pre>
  ($resultado=$var1) and $var2 //false and false
</pre>

<p>La manera correcta hauria estat agrupar $var1 i $var2 posant-los entre parèntesi ($var1+$var2) expresant-ho de la següent manera:</p>

<pre>
  $resultado=($var1 and $var2);
</pre>

<hr>

<p>El video acaba amb un exemple de formulari fent servir estructures if else if de la següent manera:</p>
<pre>
  if(cond) {
    sentències
  }
  else if() {
    sentències
  }
  else {
    sentències
  }
</pre>


</body>
</html>
