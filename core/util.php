<?php


function debug($var, $exit = false)
{
    echo '<pre>';
    var_dump($var);
    echo '</pre>';
    if ($exit) die();
}

function isUrl($url) {
    return $_SERVER['REQUEST_URI'] == $url;
}

function views($basename, $variables = [])
{
    extract($variables);
    require __DIR__ . '/../views/' . $basename . '.php';
}