<?php

$pageTitle = $categoryName;
require_once '../resources/views/layouts/header.tpl.php';?>

<div class="container pt-3">
    <h1><?=$categoryName?></h1>
    <div class="row">
        <?php foreach ($products as $product):?>
            <div class="card col-12 col-md-6 col-lg-3">
                <a href="?action=Produit&id=<?=$product->id?>" class="text-decoration-none">
                    <div class="container-fluid m-2">
                        <div class="row mb-auto">
                            <img src="<?=$product->image?>" class="img-prd-cat img-fluid rounded d-block">
                        </div>
                        <div class="row">
                            <h4><?=$product->title?></h4>
                        </div>
                        <div class="row mt-auto d-flex justify-content-between">
                            <div class="col-6 price"><?=$product->price?> €</div>
                            <div class="col-6 text-nowrap rate">Note : <?=$product->rating->rate?> / 5</div>
                        </div>
                    </div>

                </a>
            </div>
        <?php endforeach;?>
    </div>
</div>



<?php
require_once '../resources/views/layouts/footer.tpl.php';