<!DOCTYPE html>
<html lang="ca">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Variables Estàtiques</title>
  <style media="screen">
    pre {
      background:darkgreen;
      color:#eee;
    }
  </style>
</head>
<body>

<h1>Variables estàtiques</h1>
<p></p>


<h2>incrementaVariable()</h2>
<p>Fem còrrer el següent codi:</p>
<pre>function incrementaVariable()
{
    $contador=0;
    $contador++;

    echo $contador."<br>";
}

incrementaVariable();
incrementaVariable();
incrementaVariable();
incrementaVariable();</pre>

<?php

function incrementaVariable()
{
    $contador=0;
    $contador++;

    echo $contador."<br>";
}

incrementaVariable();
incrementaVariable();
incrementaVariable();
incrementaVariable();

?>
<p>Però observem que malgrat que hem invocat a la funció incrementaVariable() 4 cops en comptes de donar-nos com a resultat 1, 2, 3 i 4 ens escriu tota la estona 1.</p>

<p><strong>Per què passa això?</strong><br>
  Hem de tenir en compte que cada cop que arribem al <strong>}</strong> (o, dit d'una altra manera, quan sortim del bloc) el valor de la variable es detrueix.
</p>

<p>Per evitar que passi això, que es destrueixi el valor podem crear una variable estàtica. </p>

<pre>

  function incrementaVariable2()
  {
      static $contador=0;
      $contador++;

      echo $contador."<br>";
  }

  incrementaVariable2();
  incrementaVariable2();
  incrementaVariable2();
  incrementaVariable2();

</pre>

<p>Davant de la variable $contador hem afegit <strong>static</strong>.</p>

<p>Amb això aconseguim dues coses:</p>
<ol><li>Només es defineixe el valor la primera vegada que apareix.</li>
<li>Es conserva el darrer valor amb que s'hagi definit.</li>
</ol>

<p>I el resultat és el següent:</p>



<?php

function incrementaVariable2()
{
    static $contador=0;
    $contador++;

    echo $contador."<br>";
}

incrementaVariable2();
incrementaVariable2();
incrementaVariable2();
incrementaVariable2();

?>




<hr>
<?php

?>


</body>
</html>
