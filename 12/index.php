<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Operadors matemàtics</title>
</head>
<body>

  <p>Ajuntarem els videos 12, 13 en una sola pràctica en aquest.</p>

  <form action="" method="post">
    <p><label for="num1"></label>
      <input type="text" name="num1" id="num1">
      <label for="num2"></label>
      <input type="text" name="num2" id="num2">
      <label for="operacion"></label>
      <select name="operacion" id="operacion">
        <option value="Suma">Suma</option>
        <option value="Resta">Resta</option>
        <option value="Multiplicacion">Multiplicacion</option>
        <option value="Division">Division</option>
        <option value="Modulo">Modulo</option>
        <option value="Incremento">Incremento</option>
        <option value="Decremento">Decremento</option>
      </select></p>
    <p><input type="submit" name="button" id="button" value="Enviar" onclick="prueba"></p>

  </form>

<?php
  if (isset($_POST["button"])) {
      $numero1=$_POST["num1"];
      $numero2=$_POST["num2"];
      $operacion=$_POST["operacion"];

      resultat($operacion, $numero1, $numero2);
  }

function resultat($op, $n1, $n2)
{
    switch ($op) {
    case "Suma":
      echo $n1+$n2;
      break;
    case "Resta":
      echo $n1-$n2;
      break;
    case "Multiplicacion":
      echo $n1*$n2;
      break;
    case "Division":
      echo $n1/$n2;
      break;
    case "Modulo":
      echo $n1%$n2;
      break;
    case "Incremento":
      echo $n1++;
      break;
    case "Decremento":
      echo $n1--;
      break;
  }
}





?>

</body>
</html>
