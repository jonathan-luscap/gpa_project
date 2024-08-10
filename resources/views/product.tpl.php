<?php
$pageTitle = $productTitle;
require_once '../resources/views/layouts/header.tpl.php';?>
<div class="container mt-5">
    <div class="card p-5">
        <div class="d-flex justify-content-center align-items-center" style="">
            <img src="<?=$productImage?>" alt="Image produit : <?=$productTitle?>" class="card-img img-fluid d-block" style="margin:auto; max-width: 50%; height:50%">
        </div>        
        <div class="card-body">
            <h3 class="card-title"><?=$productTitle?></h3>
            <div class="rating">
                <span class="rate me-5"><strong><?=$productRate?></strong> /5</span>
                <span class="count">pour <?=$productRateCount?> avis</span>
            </div>
            <p class="card-text"><?=$productDescription?></p>
            <div><?=$productPrice?> €</div>
        </div>
    </div>
</div>

<?php
require_once '../resources/views/layouts/footer.tpl.php';