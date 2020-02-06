<!DOCTYPE html>
<html lang="ca">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>21. Pasar parámetros por valor o por referencia</title>
  <style media="screen">
    pre {
      background:darkgreen;
      color:lightgrey;
      padding:10px;
    }
  </style>
</head>
<body>
  <h1>21. Passar paràmetres per valor o por referència</h1>
<h2>Passar paràmetres a una funció per valor</h2>
  <p>Fins ara tots els exemples que hem vist de funcions han estat per valor.</p>
<pre>
  function escriure($parametre)
  {
      $nom = "pap $parametre <br>";
      echo $nom;
  }

  $nom="pep";
  escriure($nom);

  echo $nom;
</pre>
<p><strong>Resultat:</strong></p>
<?php
function escriure($parametre)
{
    $nom = "pap $parametre <br>";
    echo $nom;
}

$nom="pep";
escriure($nom);

echo $nom;
?>
<p>Si ens hi fixem, tot i que a dins de la funció a la variable $nom li hem assignat un nou valor al darrer echo $nom; ens torna a donar el valor original de $nom, que era "pep". </p>


<hr>


<h2>Passar paràmetres per referència</h2>
<p>Posant l'ampersan davant del paràmetre fem que la funció consideri que passem el paràmetre per referència. Quan fem això si canviem el valor d'alguna variable dins de la funció llavors també es canvia el valor de la variable fora de la funció. És a dir, es coordinen.</p>

<pre>
  function escri(&$param)
  {
      $param = "pap $param <br>";
      return $param;
  }

  $nim="patapum";
  echo(escri($nim));

  echo $nim;
</pre>

<p><strong>Resultat</strong>:</p>
<?php
function escri(&$param)
{
    $param = "pap $param <br>";
    return $param;
}

$nim="patapum";
echo(escri($nim));

echo $nim;
?>





</body>
</html>
