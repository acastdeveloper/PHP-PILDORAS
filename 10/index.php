<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>CONSTANTS</title>
  <style>
    pre {
      background:darkgreen;
      color:white;
      padding:10px;
    }
  </style>
</head>
<body>
  <H1>CONSTANTS</H1>
  <h2>Constants pròpies</h2>
  <p><strong>Constant</strong>: Espai a la memòria de l'ordinador on s'emmagatzemarà un valor que no odrà canviar durant l'execució del programa. </p>

  <h2>Aspectes a tenir en compte</h2>
  <ul>
    <li>El nom de les constants ha d'anar en majúscules (conveni).</li>
    <li>El nom de les constants NO  ha de portar el símbol $.</li>
    <li>És obligatori l'ús de la funció define() per definir constants.</li>
    <li>L'àmbit de les constants és global per defecte.</li>
    <li>Les constants no es poden redefinir.</li>
    <li>Les constants només poden emmagatzemar valors escalars. (És a dir, que no pot definir una matriu)</li>
  </ul>

  <p>Per definir una constant es fa de la següent manera:</p>
  <pre>
    &lt;?php
    define ("AUTOR","Manolo");
    echo "El autor es:".AUTOR;
    ?&gt;</pre>

    <p>Si volem concatenar, a diferència de les variables no podem ficar dins de les cometes la $variable. Ho hem de fer concatenant per fora, com a l'exemple anterior.</p>

  <?php
    define("AUTOR", "Manolo");
      echo "El autor es:" . AUTOR;
  ?>
  <hr>



<p>  Si re-definim una constant no té en compte el nou valor. És a dir, que amb el codi següent</p>

<pre>
&lt;?php
define("AUTOR", "Manolo");
define("AUTOR", "Pepe");
echo "El autor es:" . AUTOR;
?&gt;</pre>

<p>el resultat és:</p>
<?php
define("AUTOR", "Manolo");
define("AUTOR", "Pepe");
echo "El autor es:" . AUTOR;
?>
<p><strong>Nota:</strong>Ens dona un Warning: <br>
  <em>Notice: Constant AUTOR already defined in I:\laragon\www\PHP-PILDORAS\10\index.php on line 58 <br>
Notice: Constant AUTOR already defined in I:\laragon\www\PHP-PILDORAS\10\index.php on line 59</em> </p>

<p>Però a continuació escriu el valor original de la constant que és <strong>Manolo</strong>.</p>


<hr>

<h2>Constants Predefinides</h2>


<p><strong>Constants "màgiques"</strong></p>

<p>A la pàgina <a href="https://www.php.net/manual/es/language.constants.predefined.php">https://www.php.net/manual/es/language.constants.predefined.php</a> podem veure quines constants pre-definides hi ha</p>
<table>
  <thead><tr><th>Nom</th>
  <th>Descripció</th></tr></thead>
  <tr>
    <td>__LINE__</td>
    <td>El número de línea actual en el fichero.</td>
  </tr>
  <tr>
    <td>__FILE__</td>
    <td>Ruta completa y nombre del fichero con enlaces simbólicos resueltos. Si se usa dentro de un include, devolverá el nombre del fichero incluido.</td>
  </tr>
  <tr>
    <td>__DIR__</td>
    <td>Directorio del fichero. Si se utiliza dentro de un include, devolverá el directorio del fichero incluído. Esta constante es igual que dirname(__FILE__). El nombre del directorio no lleva la barra final a no ser que esté en el directorio root.</td>
  </tr>
  <tr>
    <td>__FUNCTION__</td>
    <td>Nombre de la función.</td>
  </tr>
  <tr>
    <td>__CLASS__</td>
    <td>Nombre de la clase. El nombre de la clase incluye el namespace declarado en (p.e.j. Foo\Bar). Tenga en cuenta que a partir de PHP 5.4 __CLASS__ también funciona con traits. Cuando es usado en un método trait, __CLASS__ es el nombre de la clase del trait que está siendo utilizado.</td>
  </tr>
  <tr>
    <td>__TRAIT__</td>
    <td>El nombre del trait. El nombre del trait incluye el espacio de nombres en el que fue declarado (p.e.j. Foo\Bar).</td>
  </tr>
  <tr>
    <td>__METHOD__</td>
    <td>Nombre del método de la clase.
</td>
  </tr>
  <tr>
    <td>__NAMESPACE__</td>
    <td>Nombre del espacio de nombres actual.</td>
  </tr>
  <tr>
    <td>ClassName::class</td>
    <td>El nombre de clase completamente cualificado. Véase también ::clas</td>
  </tr>

</table>


<p>Veiem a continuació algun exemple:</p>
<pre>
  echo "La línia d'aquesta instrucció és: ". __LINE__
</pre>
<?php
echo "La línia d'aquesta instrucció és: ". __LINE__;
?>



</body>
</html>
