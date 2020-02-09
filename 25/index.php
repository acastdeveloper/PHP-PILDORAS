<!DOCTYPE html>
<html lang="ca">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>25 - Programació Orientada a Objectes IV. Herència. Superclasses i Subclasses. Reutilització de codi.</title>
  <style>
    pre {
      background:darkgreen;
      color:lightgrey;
      padding:10px;
    }
  </style>
</head>
<body>
  <h1>25 - Programació Orientada a Objectes IV. Herència. Superclasses i Subclasses. Reutilització de codi.</h1>

  <p>Una cosa que ens permet reutilitzar codi és que podem fer que una classe hereti propietats i mètodes d'una altra classe.</p>

<h2>Subclasse i Superclasse</h2>
  <p>Se'n diu <strong><em>SUBCLASSE</em></strong> a la classe que hereta d'una altra.</p>
  <p>I <strong><em>SUPERCLASSE</em></strong> a la classe de la que hereta una altra.</p>

  <h2>Sintaxi per fer que una classe hereti d'una altra:</h2>
  <p>Per fer que una classe hereti d'una altra hem d'afegir <strong><em>extends</em></strong> i dir de quina classe hereta a continuació. Vejam l'exemple: </p>
<pre>
  class classe2 extends classe1 {
    CODI INTERN DE LA CLASSE 2
  }
</pre>
<p>Pot passar que una classe hereti d'una altra classe que al seu cop hereti d'una altra. No hi ha límit. Per exemple:</p>
<pre>

  class classe2 extends classe1 {
    CODI INTERN DE LA CLASSE 2
  }

  class classe3 extends classe 2 {
    CODI INTERN DE LA CLASSE 3
  }

  //.... etc .....

</pre>

<p>Però el que <strong>NO ES POT FER</strong> és que una classe hereti de vàries classes alhora. Només pot heretar d'una altra.</p>


<hr>

<p>Vejam com quedaria amb el nostre exemple:</p>

<pre>

   class Coche
   {
       //PROPIETATS
       public $ruedas;
       public $color;
       public $motor;

       //MÈTODES
       public function __construct()
       { //Mètode CONSTRUCTOR
           $this->ruedas=4;
           $this->color="";
           $this->motor=1600;
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

       public function estableix_color($color_cotxe)
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
   }

</pre>

<p>Al final hem afegit la classe Camion que extén(hereta) de Coche. Amb això el que fem és reutilitzar tot el codi que ja teníem a la classe Coche. No cal tornar-lo a escriure. Únicament hem posat un MÈTODE CONSTRUCTOR que és diferent del de la seva SUPERCLASSE Coche perquè li hem canviat els valors per defecte. </p>

  <h2>Sobre-escriptura de mètodes</h2>
  <p>Si volem que un mètode heretat de la superclasse es comporti de forma diferent a la subclasse podem fer servir la sobre-escriptura de mètodes. Com? Doncs definint dintre de la subclasse un mètode amb el mateix nom. Vejam a continuació:</p>

<pre>
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
          echo "El color de del camió és:" . $this->color. "<br>";
      }

  }
</pre>

<p><strong>Resultat</strong>: </p>

<?php
include("class.php");
$pegaso = new Camion();
$pegaso->estableix_color("vermell", "camioncete");
?>

<p><strong>NOTA:</strong> Pildoras Informáticas proposa utilizar la sobre-escriptura d'un mètode però afegint un paràmetre més. Es veu que a partir de la versió PHP7 no deixa. Ha d'utilitzar els mateixos paràmetres. En tot cas el que sí deixa fer és canviar el codi del mètode.</p>


<hr>

<h2>Referència a mètodes de la superclasse amb <strong><em>parent::</em></strong></h2>

<p>A l'exemple farem una sobre-escriptura d'un mètode de la superclasse Coche amb <strong><em>parent::</em></strong>.</p>


<pre>
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
          echo "El color de del camió és:" . $this->color. "<br>";
      }


      public function arrencar() {
        parent::arrencar();
        /* Amb aquesta instrucció fem que s'executi el mètode arrencar() que hi ha a la seva superclasse. */

        echo "Camió arrencat";
      }

  }
</pre>

<p><strong>Resultat:</strong></p>

<?php
  $pegaso->arrencar();
?>


<hr>

<h1>Ampliació</h1>

<h2>Operador de Resolució d'àmbit <strong>::</strong></h2>
<p>A l'exemple anterior hem fet servir <strong><em>parent::</em></strong> que contenia els dobles dos punts <strong>::</strong> al qual anomenem <strong><em>Operador de Resolució d'àmbit</em></strong>. Altres vegades que ho trobarem:</p>
<ul>
  <li>self::</li>
  <li>parent::</li>
  <li>NomDeClasse::</li>
  <li>etc.</li>
</ul>
<p>L'<strong><em>Operador de Resolució d'Àmbit (::)</em></strong> és un "token" que permet:</p>
<ul>
  <li>Accedir a elements ESTÀTICS i CONSTANTS d'una CLASSE</li>
  <li>Sobre-escriure mètodes d'una CLASSE, no d'un Objecte.</li>
</ul>


<h2>Diferències entre <strong><em>self::</em></strong> i <strong><em>this-></em></strong></h2>

<p><strong><em>self::</em></strong> serveix per referir-se a la mateixa CLASSE. Quan posem <strong>::</strong> és per referir-nos a la mateixa classe</p>

<strong><em>this-></em> serveix per referir-se al mateix  OBJECTE.</strong>


<h2>Com definir constants dins d'una classe</h2>
<p>Per crear <strong>CONSTANTS</strong> a PHP hem utilitzat, fins el moment:</p>
<p>define("NOM_CONSTANT","valor");</p>
<p>Dins d'una classe es fa de la següent manera:</p>
<p>S'avantposa la paraula reservada <strong><em>const</em></strong></p>
<p>Vegem un exemple:</p>
<pre>
  class MevaClasse {
    const C = 'valorC';
  }
</pre>

<h2>Com accedir a la constant d'una classe, des de la mateixa classe almenys, amb l'ús d'<strong>static</strong> i l'<strong>Operador de Resolució d'Àmbit (::)</strong>:</h2>
<pre>
  class A {
    const C = 'constA';
    public function m() {
        echo static::C;
    }
}
</pre>

</body>
</html>
