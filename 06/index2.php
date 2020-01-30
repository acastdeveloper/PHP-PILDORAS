<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
</head>
<body>

  <?php
// EXEMPLE 3

  $paraula = "codonyat";
  function escriu_paraula()
  {
      global $paraula;
      echo $paraula;
  }


  escriu_paraula();
  /* A diferència de l'exemple 2 havent definit global la variable $paraula,
  cosa que es fa dins de la funció
    */
 
  ?>

</body>
</html>
