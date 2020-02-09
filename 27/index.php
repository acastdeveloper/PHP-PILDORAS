<!DOCTYPE html>
<html lang="ca">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>26 - Programació Orientada a Objectes IV. Modificadors d'accés II.</title>
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
  <h1>26 - Programació Orientada a Objectes IV. Modificadors d'accés II. </h1>

    <h2>SUMARI</h2>
    <ul>
      <li>Mètodes "<strong><em>Setters i Getters</em></strong>"</li>
      <li>Modificadors d'accés
      <ul>
        <li>public</li>
        <li>private</li>
        <li>protected</li>
      </ul>
      </li>
    </ul>


<h2>Mètodes <strong><em>getters</em></strong> i <strong><em>setters</em></strong></h2>
<p>Mètodes <strong><em>"Setters"</em></strong>. Serveixen per MODIFICAR les propietats d'un <STRONG>OBJECTE</STRONG>.</p>
<p>Mètodes <strong><em>"Getters"</em></strong>. Serveixen per VEURE/OBTENIR la propietats d'un <STRONG>OBJECTE</STRONG>.</p>



<h3>Mètodes getters</h3>
<p>Per convenció, no per obligació, els anomenem avantposant al nom de la funció <strong><em>get_</em></strong>. Veiem a continuació un exemple amb el metode get_ruedas():</p>
<pre>
  class Coche {
    private $ruedas;
    public $color;
    public $motor;

    function __construct() {
      $this->ruedas = 4;
      $this->color="";
      $this->motor=1600;
    }

    function get_ruedas() {
      return $this->ruedas;
    }


    ...

  }
</pre>


<p>Llavors per poder escriure les rodes que té l'objecte mazda ara ho hem de fer de la següent manera:</p>

<pre>
  ...
  $mazda = new Coche();
  echo "El Mazda tiene " . $mazda->get_ruedas() . " ruedas<br>";
</pre>




<p>D'aquesta manera, tot i que no directament, aconseguim arribar a la propietat $ruedas, per llegir-la (GET), ja que la propietat l'haviem encapsulat posant-la en mode <strong><em>private</em></strong> i no ho ens permet per això llegir-la directament.</p>


<h3>Mètodes setters</h3>
<p>Aquells que serveixen per establir propietats. En realitat, al nostre exemple de la classe Coche, ja havíem creat un mètode setter amb el mètode <strong><em>estableix_color()</em></strong> encara que no havíem seguit la convenció de posar <strong><em>set_</em></strong>. Per seguir la convenció de nomenar els mètodes setters amb el començament <strong><em>set_</em></strong> canviarem <strong><em>estableix_color(...)</em></strong> per <strong><em>set_color(...)</em></strong> </p>
<pre>
  ...
  function set_color($color_coche) {
    $this->color=$color_coche;
    echo "El color del coche és " . $this->color . "<br>";
  }
  ...
</pre>



<h2>Modificador d'accés <strong><em>protected</em></strong></h2>

<p><strong>Problema</strong>: quan hem fet <strong><em>"private $rueda"</em></strong> a la classe Coche hem limitat l'accés a la propietat <strong><em>$rueda</em></strong> només des de la seva classe. Llavors, què passa si accedim des d'un objecte que és instància d'una subclase de Coche, com els objectes que són instàncies de Camion? Podran accedir a $rueda els objectes que són instància de la classe Camion?</p>

<p><strong>Resposta</strong>: No. Quan hem definit la propietat $rueda en mode private NOMÉS DEIXEM ACCEDIR en aquesta propietat DES DE LA SEVA CLASSE.</p>

<p>Per a aquests casos existex el modificador d'accés <strong><em>protected</em></strong>. Si en comptes de posar <strong>private</strong> posem <strong>protected</strong> es podrà accedir a llegir la propietat <strong>$rueda</strong> tant des de les instàncies a la classe <strong>Coche</strong> com de les instàncies de la seva subclasse <strong>Camió</strong>. </p>


<hr>
<p>Anem a veure com a quedat finalment el codi</p>

<pre>

class Coche
{
    //PROPIETATS
    protected $ruedas;
    public $color;
    protected $motor;

    //MÈTODES
    public function __construct()
    { //Mètode CONSTRUCTOR
        $this->ruedas=4;
        $this->color="";
        $this->motor=1600;
    }

    public function get_ruedas()
    {
        return $this->ruedas;
    }

    public function get_motor()
    {
        return $this->motor;
    }

    public function arrencar()
    {
        echo "Está arrancando<br>";
    }

    public function girar()
    {
        echo "està girando<br>";
    }

    public function frenar()
    {
        echo "està frenando<br>";
    }

    public function set_color($color_cotxe)
    {
        $this->color=$color_cotxe;
        echo "El color d'aquest cotxe és: " . $this->color . "<br>";
    }
}



class Camion extends Coche
{
    //MÈTODES
    public function __construct()
    { //Mètode CONSTRUCTOR
        $this->ruedas=6;
        $this->color="";
        $this->motor=4600;
    }

    public function estableix_color($color_cotxe)
    {
        $this->color=$color_cotxe;
        echo "El color d'aquest camió és: " . $this->color . "<br>";
    }

    public function arrencar()
    {
        parent::arrencar();
        echo "Camió arrencat";
    }
}
</pre>


<p>I el codi que posaríem allà on volem fer les instanciacions:</p>

<pre>
include("class.php");

$mazda=new Coche();
$pegaso=new Camion();

echo "El Mazda tiene ". $mazda->get_ruedas() . "ruedas<br>";
echo "El Pegaso tiene ". $pegaso->get_ruedas() . "ruedas<br>";
</pre>

<p><strong>Resultat</strong>:</p>
<?php
include("class.php");

$mazda=new Coche();
$pegaso=new Camion();

echo "El Mazda tiene ". $mazda->get_ruedas() . " ruedas<br>";
echo "El Pegaso tiene ". $pegaso->get_ruedas() . " ruedas<br>";
?>

</body>
</html>
