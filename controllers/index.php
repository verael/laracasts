<?php

$page_title = 'Home';
$page_header = 'Home';
$page_body_content = "home content";

views("index", [
    "page_title" => $page_title,
    "page_header" => $page_header,
    "page_body_content" => $page_body_content,
]);