<?php

require "response.php";
require "status.php";

function route($uri, $routes)
{
    global $HTTP_STATUS_CODE;

    $response = new Response(200, [], "");
    if (array_key_exists($uri, $routes))
    {
        ob_start();
        require_once $routes[$uri];
        $body = ob_get_clean();
        $response->setStatus(200);
        $response->sendHTML($body);
    }
    else
    {
        $response->setStatus(404);
        $response->setBody($HTTP_STATUS_CODE[404]);
        $response->send();
    }
}
