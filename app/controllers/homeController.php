<?php
require_once '../app/persistences/categories.php';
require_once '../app/persistences/product.php';

$articles = json_decode(getAllProducts());
$categories = json_decode(getAllCategories());

require_once '../resources/views/home.tpl.php';