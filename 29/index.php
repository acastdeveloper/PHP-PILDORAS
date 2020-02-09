<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>29. Variables i mètodes static. 2a Part. Mètodes static.</title>
  <style>
  pre {
  background:darkgreen;
  color:lightgrey;
  padding:10px;
  }

  table, th, td {border:1px solid black;}

  </style>
</head>
<body>
  <h1>29. Variables i mètodes static. 2a Part. Mètodes static.</h1>

  <p>En aquest vídeo continua la explicació amb un exemple en el que havia definit una variable com a static.</p>
  <p>L'avantatge d'haver definit la variable com a <strong>static</strong> és que s'aplica a totes les instàncies d'aquella clàssica. És a dir, que si ho posem en mode <strong>static</strong> centralitzem en un sol lloc per a totes les instàncies d'aquella classe les propietats i els mètodes amb el mateix valor. Les propietats i els mètodes <strong>static</strong> convé que siguin allò que han de tenir en comú tots els objectes que s'obtinguin d'instanciar-se amb la Classe.</p>

  <p>Per impedir la manipulació de la variable $var1 des de l'exterior seria convenient que restringíssim el seu accés a <strong>private</strong> o <strong>protected</strong>.</p>

  <pre>
    class MevaClasse {
      ...
      private static $var1="valor";
    }
  </pre>

<p>Amb la qual cosa, per poder accedir a ella ens caldrà definir mètodes getters i setters.</p>

<pre>
  class MevaClasse {

    ...

    private static $var1="valor per defecte";

    ...

    static function get_var1() { //getter
        return self::$var1;
    }

    static function set_var1() { //setter
      self::$var1 = "nou valor";
    }

  }
</pre>

<p>Si des de fora de la classe volem obtenir el valor de la variable $var1 apel·larem al mètode get corresponent fent:</p>

<pre>
  echo MevaClasse::get_var1();
</pre>

<p><strong>Resultat</strong>:</p>
<p><em>valor per defecte</em></p>

<p>Però, i sí executessim abans el seu setter?</p>
<pre>
  MevaClasse::set_var1(); //setter
  echo MevaClasse::get_var1(); //getter
</pre>

<p>Llavors el <strong>resultat</strong> serà:</p>

<p><em>nou valor</em></p>


</body>
</html>
