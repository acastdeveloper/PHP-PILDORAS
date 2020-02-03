<!DOCTYPE html>
<html lang="ca">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Operadors de Comparació</title>
  <style>
  .taula {
    border:1px solid white;
  }

  .taula td {padding:5px;}

  .taula th {background:darkgreen; color:#eee;}

  tr:nth-child(odd) {background:#ddd;}

  </style>


</head>
<body>

  <table class="taula">
    <thead>
<tr>      <th>Sintaxi</th>
      <th>Definició</th>
      <th>Resultat</th></tr>
    </thead>
    <tr>
      <td>$var1==$var2</td>
      <td>Igual que</td>
      <td>Si les dues variables són iguals donarà TRUE</td>
    </tr>
    <tr>
      <td>$var1===$var2</td>
      <td>Idèntica que</td>
      <td>Si les dues variables tenen el mateix valor i a més són de la mateixa tipologia de variable (string, number o el que sigui) llavors donarà TRUE</td>
    </tr>
    <tr>
      <td>$var1!=$var2</td>
      <td>Diferent que</td>
      <td>Quan tenen diferent valor donarà TRUE</td>
    </tr>
    <tr>
      <td>$var1&lt;&gt;$var2</td>
      <td>Diferent que</td>
      <td>Quan tenen diferent valor i a més són de diferent tipologia donarà TRUE</td>
    </tr>
    <tr>
      <td>$var1&lt;$var2</td>
      <td>Més petit que</td>
      <td>Quan la $var1 sigui més petita que la $var2 donarà TRUE </td>
    </tr>
    <tr>
      <td>$var1&gt;$var2</td>
      <td>Més gran</td>
      <td>Quan la $var1 sigui més gran que la $var2 donarà TRUE</td>
    </tr>
    <tr>
      <td>$var1&lt;=$var2</td>
      <td>Més petit o igual</td>
      <td>Quan la $var1 sigui més petita o igual que la $var2 donarà TRUE</td>
    </tr>
    <tr>
      <td>$var1&gt;=$var2</td>
      <td>Més gran o igual</td>
      <td>Quan la $var1 sigui més gran o igual que la $var2 donarà TRUE</td>
    </tr>
  </table>

<hr>

<p>Al video per provar aquestes opcions fa servir un formulari per enviar unes cadenes a la mateixa pàgina a traves d'un formulari. </p>

<p>Per la explicació del video introdueix els següents continguts que ara no reproduiré per bàsics:</p>
<ul>
<li>Construeix un formulari </li>
<li>Utilitza variables superglobals del tipus $_POST</li>
<li>Introdueix la funció isset() per comprovar si s'ha definit una variable.</li>
<li>També introdueix operadors com && que s'explicarà més endavant.</li>
</ul>

  <p>Bàsicament fa un formulari de login en la que comprovarà si </p>

</body>
</html>
