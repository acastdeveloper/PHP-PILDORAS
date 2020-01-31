<?php
// $directorio = opendir("."); //ruta actual
// while ($archivo = readdir($directorio)) { //obtenemos un archivo y luego otro sucesivamente
//     if (is_dir($archivo)) {//verificamos si es o no un directorio
//         echo "[".$archivo . "]<br />"; //de ser un directorio lo envolvemos entre corchetes
//     } else {
//         echo $archivo . "<br />";
//     }
// }


function getTitle($url)
{
    $str = @file_get_contents($url);
    if ($str) {
        preg_match('/<title>([^<]+)</', $str, $title);
        return isset($title[1]) ? $title[1] : false;
    }
    return false;
}





$ruta=".";
$dir=opendir($ruta);


echo("<ol>");

if ($dir=opendir($ruta)) {
    // echo "És aquest directori";

    while (false !== ($item = readdir($dir))) {
        if ($item!="." && $item!=".." && $item!="k" && $item!=".git" && $item!="index.php") {

            // echo "$item\n";
            $link = "./".$item."/index.php";
            $title=getTitle($link);

            echo("<li><a href=".$link.">".$title."</a></li>");
            /*
            echo("<li><a href="$item">getTitle($item."/index.php")</a></li>");
            */
        }
    }

    closedir($dir);
}

echo("</ol>");
