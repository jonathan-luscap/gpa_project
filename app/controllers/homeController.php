<?php
require_once '../app/persistences/categories.php';
require_once '../app/persistences/functions.php';
require_once '../app/persistences/variables.php';
require_once '../app/models/Product.php';
require_once '../app/models/ApiClient.php';

try {
    $apiClient = new ApiClient($url['allProducts']);
    $datas = $apiClient->fetchData();
} catch (Exception $e) {
    echo 'Error: ' . $e->getMessage();
}
$products = new ArrayObject();
foreach ($datas as $data) {
    var_dump($data);
    echo 'PHP_EOL';
    $product = processProduct($data);
    var_dump($product);
    for ($i = 0; $i < 5; $i++) {
        if (empty($products[$i]) | $products[$i]['rate'] == $data['']) {
            $products[$i] = $data;
        }
    }
}
/* var_dump($products);
echo 'hello !!'; */
$categories = json_decode(getAllCategories());

require_once '../resources/views/home.tpl.php';