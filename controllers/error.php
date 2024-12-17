<?php

global $HTTP_STATUS_CODE;
$page_title = 'HTTP Error';
$page_header = 'HTTP Error';

$status = http_get('status');
$body = $HTTP_STATUS_CODE[$status];
$page_body_content = "<h1>$status $body</h1>";

views("error", [
    "page_title" => $page_title,
    "page_header" => $page_header,
    "page_body_content" => $page_body_content,
]);