<?php
define('DS', DIRECTORY_SEPARATOR);
require __DIR__.DS.'vendor'.DS.'autoload.php';
require "functions.php";

use Model\Gallery;
use Model\Testimonial;

$gallery = new Gallery();
$gallery->read(4);

