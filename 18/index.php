<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>18 - Bucles I. WHILE. DO-WHILE.</title>
  <style>
    pre {background:darkgreen;
    color:lightgrey;
  padding:10px;}
  </style>
</head>
<body>
  <H1>18 - Bucles I. WHILE. DO-WHILE.</H1>
  <h2>Què són els bucles?</h2>
  <p>Els bucles són estructures que repeteixen el codi al seu interior.</p>
  <h2>Tipus de bucles</h2>
  <ul>
    <li><strong>Indeterminats</strong>: No sabem quants cops es repetiran.</li>
    <ul><li>While</li>
    <li>Do-While</li></ul>
    <li><strong>Determinats</strong>: Sabem, i de fet definim, quants cops es repetiran.</li>
    <ul>
      <li>For</li>
    </ul>
  </ul>


    <h2>Bucle WHILE</h2>
    <p>"MENTRE" s'acompleixi una condició executarà un codi. Veiem com s'ha d'expressar:</p>

    <table>
      <tr>
        <th>Clàssica</th><th>Alternativa</th>
      </tr>
      <tr>
        <td><pre>
          while (CONDICIÓ) {
            CODI A EXECUTAR;
          }
        </pre></td>
        <td><pre>
          while (CONDICIÓ):

            CODI A EXECUTAR;

          endwhile;
        </pre></td>

      </tr>
    </table>
<hr>


<p>Observem a continuació el següent codi:</p>
<pre>
  $var1=1;
  while ($var1<6) {
      echo "Estamos ejecutando el código del bucle &lt;br&gt;";
      $var1++;
  }
  echo "Hemos salido del bucle";

</pre>

<p><strong>Resultat:</strong></p>

<?php
$var1=1;
while ($var1<6) {
    echo "Estamos ejecutando el código del bucle <br>";
    $var1++; //al valor que tingui inicialment li afegeix 1
}
echo "Hemos salido del bucle";
?>

<p><strong>Nota</strong>: Si la CONDICIÓ no és TRUE mai llavors s'executarà el CODI  de dins.</p>

<hr>


<h2>BUCLE DO-WHILE</h2>
<p><strong>Nota</strong>: En canvi si fem servir la estructura DO-WHILE s'executarà el CODI de dins almenys 1 sol cop i, en tot cas, mentre es compleixi la CONDICIÓ s'anirà repetint. </p>

<p>La estructura DO-WHILE a continuació:</p>
<pre>
  do {
    CODI A EXECUTAR
  } while (CONDICIÓ);
</pre>

<p>Veiem a continuació un exemple:</p>
<pre>
  $var1=7;
  do {
    echo "Estem executant el codi del bucle";
  }
  while ($var1<6);
</pre>

</body>
</html>
