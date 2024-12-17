<?php


function debug($var)
{
    echo '<pre>';
    var_dump($var);
    echo '</pre>';
    die();
}

function isUrl($url) {
    return $_SERVER['REQUEST_URI'] == $url;
}

function views($basename, $variables = [])
{
    extract($variables);
    require __DIR__ . '/../views/' . $basename . '.php';
}