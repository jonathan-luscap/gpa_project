<?php
require_once '../app/persistences/categories.php';
require_once '../app/persistences/product.php';

$product = json_decode(getProduct($productId));
$productTitle = $product->title;
$productImage = $product->image;
$productPrice = $product->price;
$productDescription = $product->description;
$productRate = $product->rating->rate;
$productRateCount = $product->rating->count;

require_once '../resources/views/product.tpl.php';