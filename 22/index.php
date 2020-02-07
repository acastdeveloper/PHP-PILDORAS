<!DOCTYPE html>
<html lang="ca">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>22 - Programació Orientada a Objectes I. Concepte i creació de classe i d'instàncies.</title>
  <style>
    pre {
      background:darkgreen;
      color:lightgrey;
      padding:10px;
    }
  </style>
</head>
<body>
  <h1>22 - Programació Orientada a Objectes I. Concepte i creació de classe i d'instàncies.</h1>
  <p><strong>Sumari</strong>:</p>
  <ul>
    <li>Concepte de Programació Orientada a Objectes</li>
    <li>Creació de Classes(objectes) en PHP</li>
    <li>Concepte i creació de instància de classe</li>
  </ul>

  <h2>Què és la POO</h2>
  <p>L'objectiu de la POO és la reutilització de codi i fer més fàcil la programació. Una mica com ja hem vist amb les funcions. Traslladen el concepte i comportament dels objectes de la vida real al codi de programació.</p>

  <h3>Objecte</h3>
  <p>El tutor de Píldoras Informàtiques per explicar-ho fa referència a un exemple de la vida real com és el dels cotxes, com a objecte. </p>

  <p><strong>Objecte</strong>: Cotxe.</p>
  <ul>
    <li>Té propietats (atributs):
    <ul>
      <li>Rodes</li>
      <li>Color</li>
      <li>alçada</li>
      <li>llarg</li>
    </ul>
    </li>
    <li>Què és capaç de fer:
    <ul>
      <li>Arrencar</li>
      <li>Frenar</li>
      <li>Girar</li>
      <li>Accelerar</li>
    </ul>
    </li>
  </ul>


  <h3>Classe</h3>
  <p>És un model on es redacten les característiques comuns d'un grup d'objectes similars. Defineixen aspectes comuns a tots ells. Per exemple, en el cas dels cotxes les característiques comuns que els defineixen són:</p>
  <ul>
    <li>4 rodes</li>
      <li>1 motor</li>
      <li>alçada</li>
      <li>amplada</li>
      <li>1 roda de recanvi</li>

  </ul>

  <h3>Instància</h3>
  <p>És un exemplar particular que pertany a una classe.</p>

<hr>

  <h2>Creació de classes(objectes) a PHP</h2>

<p>Veiem a continuació com traslladar tot això a PHP. Per crear una classe escrivim <strong><em>class</em></strong> i per convenció a continuació el nom de la classe en majúscules. I a continuació posem claudàtors: <strong><em>{ }</em></strong></p>

<pre>
  class Coche {

  }
</pre>

<p>Amb això hem creat una classe buida.</p>


<hr>

  <h2>Concepte i creació d'instància de classe</h2>

  <p>Veiem com crear una instància d'una classe. Per instanciar una classe hem de escriure <strong><em>new</em></strong> davant delnom de la classe. I també, per poder referir-nos en aquesta instància de la Classe, li hem de posar un nom. Veiem a continuació com:</p>


  <pre>
  $renault = new Coche();
  </pre>

<p>Podem crear tantes instàncies d'una classe com vulguem. per exemple: </p>

<pre>
$renault = new Coche();
$mazda = new Coche();
$porsche = new Coche();
$seat = new Coche();
</pre>


<p>Tot el codi junt quedaria així, de moment, fins el següent vídeo:</p>



<pre>
  class Coche
  {

  }

  $renault = new Coche();
  $mazda = new Coche();
  $porsche = new Coche();
  $seat = new Coche();
</pre>

</body>
</html>
