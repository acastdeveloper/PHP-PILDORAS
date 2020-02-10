<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>30. Arrays I/III.</title>
  <style>
  pre {
    background:darkgreen;
    color:lightgrey;
    padding:10px;
  }</style>
</head>
<body>
  <h1>30. Arrays I/III</h1>
  <h2>Què són els Array</h2>
  <p>Estructura que és comuna amb altres llenguatges de programació.</p>
  <p>Ens comenta Pildoras que és important aquesta estructura perquè és com s'emmagatzemen les consultes que fem amb la base de dades.</p>
  <p>La definició d'<strong>Array</strong>, altrament dit Arreglo o Matriu, és molt similar a la de variable. Si una variable és un espai de la memòria on s'emmagatzema una informació la matriu és un conjunt d'espais per emmagatzemar un conjunt d'informacions.</p>
<hr>
  <h2>Tipus d'arrays</h2>
  <ul><li><strong>Arrays indexats</strong>(amb un índex numèric)</li>
  <li><strong>Arrays associatius</strong>(amb un índex que és una paraula)</li></ul>
<hr>
  <h2>Com crear Arrays</h2>
  <p>Anem a veure com crear un <strong><em>array indexat</em></strong>, és a dir: aquell que com a índex té valors numèrics.</p>

<h2>Creació d'<strong>Arrays Indexats</strong></h3>
<h4>Mode 1</h4>
  <pre>
    $setmana[]="Dilluns";
    $setmana[]="Dimarts";
    $setmana[]="Dimecres";
    $setmana[]="Dijous";</pre>

<h4>Mode 2</h4>

<pre>$setmana=array("Dilluns", "Dimarts", "Dimecres", "Dijous");</pre>
<p>Tant d'un mode o de l'altre s'obté el mateix Array</p>

<h2>Creació d'<strong>Arrays Associatius</strong></h3>

  <pre>
  $datos=array("NombreIndex1"=>"Valor1","NombreIndex2"=>"Valor2","NombreIndex3"=>"Valor3","NombreIndex4"=>"Valor4");
  </pre>



  <h2>Com accedir a 1 valor d'un Array</h2>
  <h3>Accés a valors d'un <strong>Array Indexat</strong>.</h3>
  <p>Si volem accedir a un valor dins d'un array indexat hem d'utilitzar el seu número d'index. Vegem un exemple:</p>
<pre>
  //Suposem que tenim aquesta matriu
  $setmana=array("Dilluns", "Dimarts", "Dimecres", "Dijous");

  //Accés al primer element:
  echo $setmana[0];

  //Accés al segon element:
  echo $setmana [1];

  ...
</pre>

<p>Cal tenir en compte que en programació l'índex 0 correspón al primer element d'un array. </p>


<h3>Accés al valor d'un <strong>Array Associatiu</strong>.</h3>
  <p>Per accedir al valor d'un element d'un <strong>Array Associatiu</strong> es fa de la mateixa manera que amb un <strong>Array Indexat</strong>. És a dir: amb el seu "índex". Això sí, ara l'índex no serà un número sino un string. Vegem un exemple:</p>

  <pre>
  //Array Associatiu
  $datos=array("NombreIndex1"=>"Valor1","NombreIndex2"=>"Valor2","NombreIndex3"=>"Valor3","NombreIndex4"=>"Valor4");

  //Accés a un valor d'un Array Associatiu:
   echo $datos["NombreIndex2"];
   //Donarà Valor2

  </pre>


</body>
</html>
