<!DOCTYPE html>
<html lang="ca">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>19. BUCLES II. FOR </title>
  <style>
    pre {
      background:darkgreen;
      color:lightgrey;
      padding:10px;
    }

    table {
      width:100vw;
    }
  </style>
</head>
<body>
  <H1>BUCLE FOR</H1>
  <H2>Sintaxi</H2>
  <p>La estructura de bucle FOR té la següent Sintaxi:</p>

<table>
  <tr>
    <th>Clàssica</th>
    <th>Alternativa</th>
  </tr>
  <tr>
    <td>
      <pre>
        for (INICI BUCLE; CONDICIÓ DEL BUCLE; INCREMENT-DECREIXEMENT DEL BUCLE)
        {
          CODI A EXECUTAR
        }
      </pre>
    </td>
    <td>  <pre>
        for (INICI BUCLE; CONDICIÓ DEL BUCLE; INCREMENT-DECREIXEMENT DEL BUCLE):

            CODI A EXECUTAR;
        endfor;

      </pre></td>
  </tr>
</table>

<p>Veiem a continuació algun exemple:</p>
<pre>
  for($i=0; $i<=10; $i++) {
    echo "<p>Hem entrat al bucle $i cops.</p>";
  }
</pre>

<p><strong>Resultat</strong>:</p>

<?php
for ($i=0; $i<=10; $i++) {
    echo "<p>Hem entrat al bucle $i cops.</p>";
}
?>

<hr>
<p>Veiem a continuació un altre exemple:</p>
<pre>
  for($i=0; $i<=20; $i+=2) {
    echo "<p>Hem entrat al bucle $i cops.</p>";
    if ($i==6) {
      echo ("<p>Loop interromptu</p>");
      break; // Sentència per sortir del bucle
    }
  }
</pre>

<p><strong>Resultat</strong>:</p>

<?php
for ($i=0; $i<=20; $i+=2) {
    echo "<p>Hem entrat al bucle $i cops.</p>";
    if ($i==6) {
        echo("<p>Loop interrompu</p>");
        break; // Sentència pert sortir del bucle
    }
}
?>



</body>
</html>
