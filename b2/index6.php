<?php

namespace MyTest;
//require 'bootstrap/Autoload.php';
//use bootstrap\Autoload;
//new Autoload();
require 'vendor/autoload.php';
use src\controller\HomeController;
$home = new HomeController();
$data = $home->index();
print_r($data);