<?php
require_once '../app/persistences/categories.php';
require_once '../app/persistences/product.php';

$products = json_decode(getCategoryProducts($categoryName));

require_once '../resources/views/category.tpl.php';