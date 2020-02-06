<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>17. Condicionals 2. Switch - Case</title>
  <style>
    pre {
      background:darkgreen;
      color:#ddd;
      padding:10px;
    }

  form {
    border:2px dashed red;
  }
  </style>
</head>
<body>
  <h1>17. Condicionals 2. Switch Case</h1>

  <p>Aquesta estructura va bé quan s'han d'avaluar múltiples condicions, o valors de condicions. </p>
  <table>
    <tr><td><pre>
      switch (Concepte a avaluar)
      {
        Case valor1:
          Sentències;
          Break;
        Case valor2:
            Sentències;
            Break;
        Case valor3:
          Sentències;
          Break;
        Case valor4:
            Sentències;
            Break;
        Default:
            Sentències;
      }
    </pre></td>
    <td><pre>
      switch (Concepte a avaluar):

        Case valor1:
          Sentències;
          Break;
        Case valor2:
            Sentències;
            Break;
        Case valor3:
          Sentències;
          Break;
        Case valor4:
            Sentències;
            Break;
        Default:
            Sentències;
      endswitch
    </pre></td></tr>
  </table>


<p>Com que és una estructura coneguda per mí ho he volgut passar però he vist que al video posen un exemple més interessant en el que s'han de complir dues condicions alhora i al concepte a avaluar posa <strong><em>true</em></strong> per la qual cosa he decidit replicar l'exemple encara que perdi una mica de temps. Al video fan un formulari de login en què cal introduir nom i password.</p>

<form action="" method="post">
  <label for="nick">Escriu el nick:</label><br>
  <input type="text" name="nick" id="nick"><br>
  <label for="password">Escriu el password:</label><br>
  <input type="text" name="password" id="password"><br>
  <input type="submit" name="enviant" id="enviant" value="Entrar">
</form>

<?php
//Comprovem que s'hagi enviat el formulari
if (isset($_POST["enviant"])) {

    //Defineixo variables a partir de valors rebuts en cas d'haver-se enviat
    $id=$_POST["nick"];
    $pw=$_POST["password"];


    //Comprovem que es compleixin les dues condicions alhora:
    switch (true) {
      case $id=="pep" && $pw=="1234":
        echo "Benvingut $id  <br>Pots passar.";
        break;
      case $id=="pip" && $pw=="4321":
        echo "Benvingut $id. Pots passar.";
        break;
      case $id=="pop" && $pw=="1111":
        echo "Benvingut $id. Pots passar.";
        break;
      default:
        echo "No estàs autoritzat";

    }
}




?>


</body>
</html>
