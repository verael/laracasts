<?php

$page_title = 'About';
$page_header = 'About Us';
$page_body_content = "about content";

views("about", [
    "page_title" => $page_title,
    "page_header" => $page_header,
    "page_body_content" => $page_body_content,
]);