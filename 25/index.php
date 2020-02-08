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



</body>
</html>
