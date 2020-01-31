<?php

function getTitle($url)
{
    $str = @file_get_contents($url);
    if ($str) {
        preg_match('/<title>([^<]+)</', $str, $title);
        return isset($title[1]) ? $title[1] : false;
    }
    return false;
}

// echo getTitle('https://www.jonijnm.es/web/foro/php/16485-conseguir-mediante-php-el-titulo-de-una-pagina.html');
