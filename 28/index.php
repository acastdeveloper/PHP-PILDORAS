<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>28. Variables i mètodes static</title>
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
  <h1>28. Variables i mètodes static</h1>

  <p>Fins ara tots els mètodes i propietats de les classes que hem creat no éren de tipus <strong><em>static</em></strong>.</p>

  <p>Cada cop que instanciem una classe per crear un objecte aquest objecte té una còpia de cadascún dels mètodes i de les seves propietats, o camps. Podent comportar-se, aquests mètodes, de forma diferent depenent de l'objecte. No necessàriament han de comportar-se igual.</p>

  <p>Però si un mètode el definim com a <strong><em>static</em></strong> significa que <u>NOMÉS ES TROBA A LA CLASSE ON HA ESTAT CREAT</u>. És a dir les seves instàncies ja no tenen una còpia personalitzada d'aquell mètode. Serà un mètode <strong><em>compartit</em></strong> a tots els objectes que siguin instància d'aquella classe.</p>

  <p>Això té una sèrie d'implicacions que veurem a continuació.</p>

  <h2>Com accedir a una variable <strong><em>static</em></strong> des de dins de la mateixa classe.</h2>
  <p>Com que allò definim com <strong><em>static</em></strong> ja no pertany a l'OBJECTE sino a la CLASSE ja no podem utilitzar l'operador <strong><em>$this-></em></strong> que serveix per referir-se al "MATEIX OBJECTE/INSTÀNCIA". En el seu lloc haurem d'utilitzar un OPERADOR DE RESOLUCIÓ D'ÀMBIT (::), tal i com vam veure al video 25. Concretament haurem de fer servir <strong><em>self::</em></strong>. </p>

  <pre>
    class MevaClasse {
      static $var1="valor";

      ...

      public function meth1() {
        $valorfinal=self::$var1;
        echo $valorfinal;
      }

      ...

    }
  </pre>


  <h2>Com accedim a una propietat <strong><em>static</em></strong> des de fora de la classe.</h2>

<p>Tal i com hem dit, en declarar una variable de forma <strong><em>static</em></strong> només està i només pertany a la classe en la que està. És a dir, no podem accedir a ella mitjançant l'objecte que instancia la classe.</p>

<p>És a dir que des de fora no podem accedir a la propietat fent com fins ara. La manera <strong>INCORRECTA</strong></p>

<pre>
  /* MANERA INCORRECTA */
  $objecte=new MevaClasse();
  echo $objecte->var1;
</pre>

<p>La manera <strong>CORRECTA</strong> per accedir a una variable <strong>static</strong> és la següent: </p>





<table>
  <thead><tr><th>Si volem ASSIGNAR (SET) un valor:
</th>
  <th>Si volem OBTENIR (GET) un valor:
</th></tr>
<tr>
  <td><pre>
    MevaClasse::$var1="un altre valor";
  </pre></td>
  <td><pre>
    echo MevaClasse::$var1;
  </pre></td>
</tr>
</table>


<p><strong>NOTA:</strong> Cal fixar-se que per poder accedir a la propietat <strong>static</strong> $var1 des de fora no hem hagut de crear primer un objecte instanciant la classe sino que hem accedit directament a la classe.</p>


</body>
</html>
