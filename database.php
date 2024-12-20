<?php

$config = require_once "config.php";
$config = $config["database"];


return new Database(
    $config["config"], 
    $config["user"],
    $config["pass"]
);