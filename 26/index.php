<!DOCTYPE html>
<html lang="ca">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>26 - Programació Orientada a Objectes IV. Modificadors d'accés I.</title>
  <style>
    pre {
      background:darkgreen;
      color:lightgrey;
      padding:10px;
    }

  table,td,th {border:1px solid black;}

  </style>
</head>
<body>
  <h1>26 - Programació Orientada a Objectes IV. Modificadors d'accés I. </h1>

  <h2>Sumari</h2>
  <ul>
    <li>Modularització</li>
    <li>Encapsulació</li>
    <li>Modificadors d'accés</li>
  </ul>

  <h2>Modularització</h2>
  <p>La <strong><em>Modularització</em></strong> a la hora de programar ens permet programar per parts, cadascuna que faci una cosa diferent, la qual cosa acaba sent més pràctic. Permet localitzar i corregir més fàcilment errors.</p>

  <h2>Modificadors d'accés</h2>
<p>Podem definir i limitar des d'on es pot accedir a les propietats i mètodes d'una classe. Per fer això abans de declarar la propietat o el mètode hem de definir com s'accedirà avantposant:</p>
<ul>
  <li><strong>public</strong>: podem accedir des de qualsevol lloc.</li>
  <li><strong>private</strong>: podem accedir des de la pròpia classe.</li>
  <li><strong>protected</strong>: podem accedir des de la pròpia classe i classes heretades</li>
</ul>

<h2>Encapsulació</h2>
<p>Si volem evitar que es pugui accedir i modificar una propietat des de qualsevol lloc, fins i tot des de fora de la classe, podem encapsular-la avantposant <strong><em>private</em></strong></p>

<p>En l'exemple anterior si no posem private teòricament podríem fer:</p>
<pre>
$mazda = new Coche();
$mazda->ruedas=7;

echo "El cotxe té ".$mazda->ruedas . "rodes";
</pre>
<p><strong>Resultat</strong>: El cotxe té 7 rodes.</p>

<p>Això passa perquè la propietat <strong><em>ruedas</em></strong> de la classe Coche té accés <strong>public</strong>. Per evitar que puguem modificar propietats inicials des de qualsevol lloc podem <strong><em>encapsular</em></strong> canviant la forma d'accés a <strong><em>private</em></strong> per tal que només es pugui modificar des de dins de la classe. Vegem com es fa la encapsulació de la propietat $ruedas al nostre exemple:</p>
<pre>
  class Coche
  {
      //PROPIETATS
      private $ruedas;
      public $color;
      public $motor;
...
}
</pre>

<p>Però, com a inconvenient pel fet d'haver encapsulat la propietat $ruedas, posant-la en private, ens donarà un error quan vulguem llegir la propietat $ruedas posant el codi següent:</p>

<pre>
  $mazda = new Coche();

echo "El cotxe té ".$mazda->ruedas . "rodes";
</pre>

<p><strong>Resultat</strong>: Fatal Error: Cannot access private property Coche::$ruedas in ...</p>
<h3>Conclussió</h3>
<p>És a dir: Ja no podem ni establir ni llegir propietats que estiguin en mode <strong>private</strong>.<br> No podem fer:</p>
<table>
  <thead>
    <tr>
      <th>Establir (SET)</th>
      <th>Llegir (GET)</th>
    </tr>
  </thead>
  <tr>
    <td><pre>$mazda->ruedas=7;
</pre> </td>
    <td><pre>echo "El cotxe té ".$mazda->ruedas . "rodes";</pre></td>
  </tr>
</table>

<p>Llavors per poder accedir a propietats establertes en mode <strong>private</strong> hem de recòrrer a mètodes que anomenem <strong><em>"getters i setters"</em></strong></p>

<hr>

<h2>Mètodes <strong><em>getters</em></strong> i <strong><em>setters</em></strong></h2>

<p>(Ho veiem al següent video)</p>
</body>
</html>
