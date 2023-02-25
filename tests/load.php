<?php

use ClassLoad\Oi\Loader;

require_once __DIR__ . "/../vendor/autoload.php";

$loader = new Loader(ClassLoad::class, true);
$loader->config(["app-root" => realpath(__DIR__ . "/..")]);
var_dump($loader->load());
