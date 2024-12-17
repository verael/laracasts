<?php

$page_title = 'Contact';
$page_header = 'Contact Us';
$page_body_content = "contact content";

views("contact", [
    "page_title" => $page_title,
    "page_header" => $page_header,
    "page_body_content" => $page_body_content,
]);