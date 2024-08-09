<?php
$title = 'Fake Store : Accueil';
require_once '../resources/views/layouts/header.tpl.php';?>

<div class="container">

    <div class="container">
        <h1 class="text-center bg-warning-subtle p-5">A voir cette semaine !</h1>
        <div id="top_product" class="carousel slide m-3" data-bs-ride="carousel">
            <div class="carousel-indicators">
                <?php foreach ($articles as $key => $article): ?>
                    <?php if ($article->id === 1):?>
                        <button type="button" id="indicator_0" data-bs-target="#carousel"
                                data-bs-slide-to="0" aria-current="true" class="active" aria-label="Slide 0"></button>
                    <?php else:?>
                        <button type="button" id="indicator_<?=$article->id - 1?>" data-bs-target="#carousel"
                                data-bs-slide-to="<?=$article->id - 1?>" aria-label="Slide <?=$article->id - 1?>"></button>
                    <?php endif; ?>
                <?php endforeach;?>
            </div>
            <div class="carousel-inner">

                <?php foreach ($articles as $article): ?>
                <a href="?action=Produit&id=<?=$article->id?>">
                    <div class="carousel-item w-40 bg-body-tertiary p-x-auto" id="image_<?=$article->id - 1?>">
                        <img src="<?=$article->image?>" alt="Carrousel slide <?=$article->id - 1?>" class="d-block" style="margin:auto; width:auto; height:50vw">
                    </div>
                </a>
                <?php endforeach; ?>

                <button class="carousel-control-prev" type="button" data-bs-target="#top_product" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#top_product" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>
    </div>
    <script src="js/carousel.js"></script>
</div>
<?php
require_once '../resources/views/layouts/footer.tpl.php';