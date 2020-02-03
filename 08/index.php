<!DOCTYPE html>
<html lang="ca">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Ús de les dobles cometes i de les cometes simples</title>
  <style>
      .resaltar {
        color:#f00;
        font-weight: bold;
      }

      pre {
        background:darkgreen;
        color:#eee;
      }

      .warn {
        background:red;
        color:white;
      }

  </style>
</head>
<body>

<h1>Ús de les dobles cometes i de les cometes simples</h1>

<p>Escrivim el codi següent:</p>
<pre>
echo "&lt;p class="resaltar"&gt;Text resaltat&lt;/p&gt;";
</pre>
<?php
// echo "<p class="resaltar">Text resaltat</p>";
?>
<p>Observem que ens dona el següent error:</p>
<div class="warn">Parse error: syntax error, unexpected 'resaltar' (T_STRING), expecting ',' or ';' in I:\laragon\www\PHP-PILDORAS\08\index.php on line 29</div>


<p>Per evitar això cal alternar <em>cometes dobles</em> amb <em>cometes simples</em> de la següent manera:</p>

<pre>
  echo "&lt;p class='resaltar'&gt;Text resaltat&lt;/p&gt;";
</pre>

<p>I el resultat és el següent:</p>
<?php
echo "<p class='resaltar'>Text resaltat</p>";
?>
<p>Tant podem anidar cometes dobles dins de cometes simples o a l'inrevés. L'important és que l'intèrpret de php sàpiga on comença i on acaba el valor de la expressió a executar.</p>
<hr>

<h2>Diferència entre utilitzar cometes dobles i cometes simples.</h2>
<p>Cal tenir en compte però que hi ha una subtil diferència entre utilitzar cometes dobles o simples. Quan dins de la cadena estem fent servir variables php (per exemple:'$variable') cal tenir en compte que les cometes simples prendran la variable de forma literal, no la interpretarà com a variable sino com text normal. Si volem però que ens la interpreti com a variable caldrà utilitzar cometes dobles. Si volem que ens escrigui la variable '$variable' llavors posem cometes simples.</p>

<hr>

<h2>Comparació de cadenes</h2>
<p>Per comparar si dos cadenes són iguals disposem de les següents funcions:</p>
<ul>
  <li><strong>strcmp(cadena1, cadena2)</strong>: Aquesta funció compara si les dues cadenes contenen les mateixes lletres, <strong><em>sense importar si estan en majúscules o en minúscules</em></strong>. I el valor que ens retorna és 0 si no són les mateixes lletres i 1 si són les mateixes lletres. </li>
  <li><strong>strcasecmp(cadena1, cadena2)</strong>: Aquesta altra funció fa el mateix, però distingeix entre majúscules i minúscules.</li>
</ul>
  <p>Veiem un exemple:</p>
  <pre>
    $resultat1 = strcmp("Casa","CASA");
    $resultat2 = strcasecmp("Casa","CASA");

    echo "La primera comparació amb strcmp dona: $resultat1. Per tant contenen les mateixes lletres, malgrat que no siguin els mateixos caràcters";
    echo "La segona comparació amb strcasecmp dona: $resultat2. Per tant no són els mateixos caràcters";
  </pre>
<?php
$resultat1 = strcmp("Casa", "CASA");
$resultat2 = strcasecmp("Casa", "CASA");

echo "-La primera comparació amb strcmp dona: $resultat1. Per tant contenen les mateixes lletres, malgrat que no siguin els mateixos caràcters<br/>";
echo "-La segona comparació amb strcasecmp dona: $resultat2. Per tant no són els mateixos caràcters";
?>

<p>Que aquestes dues funcions donin <strong>1</strong> o <strong>0</strong> significa que són booleanes. En programació que donin <strong>1</strong> és equivalent també al valor <strong>true</strong> i <strong>0</strong> al valor <strong>false</strong>. I això ho podrem fer servir amb les condicionals. Per exemple:</p>

<pre>
  if($resultat2) {
    echo "Són idèntiques";
  }
  else {
    echo "No coincideixen";
  }
</pre>

<p>Resultat:</p>

<strong>
  <?php
    if ($resultat2) {
        echo "Són idèntiques";
    } else {
        echo "No coincideixen";
    }
  ?>
</strong>

</body>
</html>
