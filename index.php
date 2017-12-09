<?php
define('DS', DIRECTORY_SEPARATOR);
require __DIR__.DS.'vendor'.DS.'autoload.php';
require "functions.php";

use Model\GalleryModel;
use Model\TestimonialModel;
//
//$gallery = new GalleryModel();
//$gallery->setCategory(GalleryModel::CATEGORY_OUR_GARDEN);
//$gallery->setPic("snimka1.jpg");
//
//
//p($gallery->saveToDB());
//

$t = new TestimonialModel();
$t->setAuthor('author 1');
$t->setAvatar('avatar example');
//$t->setSort(1);
$t->setText('the testimonial text');

$t->saveToDB();