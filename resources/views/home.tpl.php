<?php
$pageTitle = 'Fake Store : Accueil';
require_once '../resources/views/layouts/header.tpl.php';?>

<div class="container">
    <div class="container">
        <h1 class="text-center bg-warning-subtle p-5">A voir cette semaine !</h1>
        <div id="top_$product" class="carousel slide m-3" data-bs-ride="carousel">
            <div class="carousel-indicators">
                <?php 
                var_dump($products['id']);
                foreach ($products as $key => $product): ?>
                    <?php if ($product['id'] === 1):?>
                        <button type="button" id="indicator_0" data-bs-target="#carousel"
                                data-bs-slide-to="0" aria-current="true" class="active" aria-label="Slide 0"></button>
                    <?php else:?>
                        <button type="button" id="indicator_<?=$product->id - 1?>" data-bs-target="#carousel"
                                data-bs-slide-to="<?=$product->id - 1?>" aria-label="Slide <?=$product->id - 1?>"></button>
                    <?php endif; ?>
                <?php endforeach;?>
            </div>
            <div class="carousel-inner">

                <?php foreach ($products as $product): ?>
                <a href="?action=Produit&id=<?=$product->id?>">
                    <div class="carousel-item w-40 bg-body-tertiary p-x-auto" id="image_<?=$product->id - 1?>">
                        <img src="<?=$product->image_url?>" alt="Carrousel slide <?=$product->id - 1?>" class="d-block" style="margin:auto; width:auto; height:50vw">
                    </div>
                </a>
                <?php endforeach; ?>

                <button class="carousel-control-prev" type="button" data-bs-target="#top_$product" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#top_$product" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>
    </div>
    <div class="container">
        <h2 class="bg-success bg-opacity-50 py-2 px-2 text-white" id="categories">Catégories</h2>
        <div class="row">
            <?php foreach ($categories as $key => $category):?>
                <div class="col-12">
                    <a href="?action=Categorie&name=<?=$category?>" class="text-decoration-none text-reset responsive-font">
                        <div class="category m-1 py-5 px-5 text-uppercase text-nowrap rounded bg-info bg-opacity-25">
                            <?php echo $category?>
                        </div>
                    </a>
                </div>
            <?php endforeach;?>
        </div>
    </div>
    <script src="js/carousel.js"></script>
</div>
<?php
require_once '../resources/views/layouts/footer.tpl.php';