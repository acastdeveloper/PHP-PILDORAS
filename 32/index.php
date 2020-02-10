<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>32. Arrays Multidimensionals</title>
  <style media="screen">
    pre {
      background:darkgreen;
      color:lightgrey;
      padding:10px;
    }
  </style>
</head>
<body>
  <h1>32. Arrays Multidimensionals.</h1>
  <p>Els Arrays Multidimensionals es poden considerar arrays que contenent altres arrays.</p>

    <p>Com a l'exemple que ens dona Pildoras Informáticas anem a considerar una matriu multidimensional anomenada <strong>$aliments</strong> que contingui 3 subcategories:</p>

    <ul>
      <li><strong>Fruita</strong>
        <ul>
          <li>kiwi</li>
          <li>mandarina</li>
          <li>poma</li>
        </ul>
      </li>
      <li><strong>Llet</strong>
        <ul>
          <li>Vaca</li>
          <li>Coco</li>
        </ul>
      </li>
      <li><strong>Carn</strong>
        <ul><li>Llom</li>
        <li>Pota</li></ul>
      </li>
    </ul>

<p>Com expressar això amb una <strong><em>Array Multidimensional</em></strong>? Vegem a continuació:</p>


  <pre>
    $aliments=array("fruita"=>array("tropical"=>"kiwi",
                                    "citrico"=>"mandarina",
                                    "altres"=>"poma"),
                    "llet"=>array("animal"=>"vaca",
                                  "vegetal"=>"Coco"),
                    "carn"=>array("vacu"=>"llom",
                                "porci"=>"pota"));</pre>

<p><strong>Nota</strong>: En aquest exemple hem fet una matriu multidimensional associativa amb submatrius associatives.</p>


<h2>Com obtenir un element en concret d'una matriu multidimensional associativa</h2>

<pre>
  echo $aliments["carn"]["vacu"];
</pre>

<p><strong>Resultat</strong>:</p>
<p><?php
$aliments=array("fruita"=>array("tropical"=>"kiwi",
                                "citrico"=>"mandarina",
                                "altres"=>"poma"),
                "llet"=>array("animal"=>"vaca",
                              "vegetal"=>"Coco"),
                "carn"=>array("vacu"=>"llom",
                            "porci"=>"pota"));


echo $aliments["carn"]["vacu"]; //Llom

 ?></p>









<h2>Com recòrrer aquest Array Associatiu</h2>

<pre>
  foreach($alimentos as $clave_alim=>$alim) {
    echo "$clave_alim:<br>";

    while(list($clave,$valor)=each($alim)) {
      echo "$clave=$valor<br>";
    }

    echo "<br>";

  }

</pre>

<p><strong>Resultat</strong>:</p>
<p><?php
// foreach ($aliments as $clave_alim=>$alim) {
//      echo "$clave_alim:<br>";
//
//      while (list($clave, $valor)=each($alim)) {
//          echo "$clave=$valor<br>";
//      }
//
//      echo "<br>";
//  }
 ?></p>



<p><?php var_dump($aliments); ?></p>



<P><STRONG>NO EM RESULTA SATISFACTÒRIA L'EXPLICACIÓ</STRONG></P>



</body>
</html>
