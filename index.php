<?php

require_once "core/util.php";
require_once "core/http/router.php";
require_once "core/db/database.php";

$routes = require "routes.php";
$uri = parse_url($_SERVER['REQUEST_URI'])['path'];
route($uri, $routes);
