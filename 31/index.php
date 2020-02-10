<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>31. Arrays II/III. Iteració i ordenació d'un array. Afegir elements a un Array.</title>
  <style>
  pre {
    background:darkgreen;
    color:lightgrey;
    padding:10px;
  }
  </style>
</head>
<body>
  <h1>31. Arrays II/III. Iteració i ordenació d'un array. Afegir elements a un Array.</h1>

  <h2>Comprovar si és un array</h2>
  <p>Existeix una funció de PHP que ens permet esbrinar si una variable és en realitat un array. Aquesta funció és <strong><em>is_array()</em></strong> la qual dona com a resultat un booleà. Si és un Array donarà <strong>true</strong>. Vegem a continuació un exemple:</p>
<pre>
  if(is_array($datos)){
    echo "És un Array";
  } else {
    echo "No és un Array";
  }
</pre>

<h2>Iteració d'Arrays</h2>
<h3>Iteració d'Array Associatiu</h3>
<p>Hem vist al video anterior que si volem obtenir un valor d'un array hem d'utilitzar el seu índex corresponent, que en el cas dels <strong><em>Arrays Indexats</em></strong> és numèric però en el cas dels <strong><em>Arrays Associatius</em></strong> és un string, amb la qual cosa no podem fer servir un bucle normal recorrent cadascún dels seus índex. Però per sort a PHP disposem d'una funció que recorre tots els valors d'un Array sense necessitat de saber el seu <strong>índex</strong>. Es tracta de la funció <strong><em>foreach</em></strong>. Vegem a continuació un exemple:</p>

<pre>
  $datos=array("Nombre"=>"Juan", "Apellido"=>"Gómez", "Edad"=>"21");

  foreach($datos as $clave=>$valor) {
    echo "A $clave le corresponde $valor <br>";
  }

</pre>
<p><strong>Resultat</strong>:</p>

<p><?php   $datos=array("Nombre"=>"Juan", "Apellido"=>"Gómez", "Edad"=>"21");

  foreach ($datos as $clave=>$valor) {
      echo "A <strong>$clave</strong> le corresponde <strong>$valor</strong>. <br>";
  }
 ?></p>
<hr>
 <h3>Iteració d'Array Indexat</h3>
 <pre>
   $setmana=array("Dilluns", "Dimarts", "Dimecres", "Dijous");

    for($i=0; count($setmana); $i++){
      echo "Dia de la setmana: ". $setmana[$i] . "<br>";
    }

 </pre>
<p><strong>Resultat</strong>:</p>
<p><?php  $setmana=array("Dilluns", "Dimarts", "Dimecres", "Dijous");

  for ($i=0; $i<count($setmana); $i++) {
      echo "Dia de la setmana: ". $setmana[$i] . "<br>";
  } ?></p>

<p><strong>Explicació</strong>. Hem utilitzat la funció <strong><em>count()</em></strong> que a PHP ens diu quants elements té l'Array.</p>

<hr>
<h2>Addicció d'elements a Arrays.</h2>
<h3>Afegir un element a un <strong><em>Array Indexat</em></strong></h3>
<p>Si volem afegir un element a la darrera posició d'un Array hem de fer el següent:</p>

<pre>
  $setmana=array("Dilluns", "Dimarts", "Dimecres", "Dijous"); //ARRAY
  $setmana[]="Divendres"; //AFEGIM UN ARRAY

    for ($i=0; $i&lt;count($setmana); $i++) {
        echo "Dia de la setmana: ". $setmana[$i] . "<br>";
    }

</pre>

<p><strong>Resultat</strong>:</p>
<p><?php $setmana=array("Dilluns", "Dimarts", "Dimecres", "Dijous"); //ARRAY
$setmana[]="Divendres"; //AFEGIM UN ARRAY

  for ($i=0; $i<count($setmana); $i++) {
      echo "Dia de la setmana: ". $setmana[$i] . "<br>";
  } ?></p>

  <p><strong>Nota:</strong> Com podem comprovar, aquell element que hem afegit s'afegeix al final.</p>


  <h3>Afegir un element a un <strong><em>Array Associatiu</em></strong>.</h3>
<p>De la següent manera:</p>
<pre>
  $datos=array("Nombre"=>"Juan", "Apellido"=>"Gómez", "Edad"="21");

  foreach($datos as $clave=>$valor) {
    echo "A $clave le corresponde $valor <br>";
  }

</pre>

<p><strong>Resultat</strong>:</p>
<p><?php
$datos=array("Nombre"=>"Juan", "Apellido"=>"Gómez", "Edad"=>"21");
$datos["Nacionalitat"]="Veneçuela";
foreach ($datos as $clave=>$valor) {
    echo "A $clave le corresponde $valor <br>";
}

 ?></p>

<hr>
<h2>Ordenar els elements d'un Array</h2>
  <p>Per ordenar alfabèticament un array existeix la funció de PHP <strong><em>sort()</em></strong>. Vegem el seu ús:</p>

  <pre>
    $setmana=array("Dilluns", "Dimarts", "Dimecres", "Dijous"); //ARRAY
    sort($setmana); //ORDENA ALFABÈTICAMENT

      for ($i=0; $i&lt;count($setmana); $i++) {
          echo "Dia de la setmana: ". $setmana[$i] . "<br>";
      }
  </pre>
  <p><strong>Resultat</strong>:</p>
  <p><?php $setmana=array("Dilluns", "Dimarts", "Dimecres", "Dijous"); //ARRAY
  sort($setmana); //ORDENA ALFABÈTICAMENT

    for ($i=0; $i<count($setmana); $i++) {
        echo "Dia de la setmana: ". $setmana[$i] . "<br>";
    } ?></p>

    <p><strong>Nota</strong>: Podem comprovar que Dijous ha passat a ser el primer element.</p>
</body>
</html>
