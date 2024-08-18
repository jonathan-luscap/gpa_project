<?php

$pageTitle = $categoryName;
require_once '../resources/views/layouts/header.tpl.php';?>

<div class="container pt-3">
    <h1><?=$categoryName?></h1>
    <div class="row">
        <?php foreach ($products as $product):?>
            <div class="card col-12 col-md-6 col-lg-3 py-4" style="height: 80vh; display: flex; flex-direction: column; justify-content: space-between;">
                <a href="?action=Produit&id=<?=$product->id?>" class="text-decoration-none text-reset responsive-font" style="height: 100%">
                    <div class="container-fluid m-2" style="display: flex; flex-direction: column; height: 100%">
                        <div class="mb-auto">
                            <img src="<?=$product->image?>" class="img-prd-cat img-fluid rounded d-block">
                        </div>
                        <div class="row my-auto" style="flex-grow: 1; display: flex; justify-content: center; align-items: center;">
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