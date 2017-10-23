<section class="container" id="section5">
    <div id="background5">
                <h2 id="sl-5"><?php echo $data->headline() ?><br>Entscheide selbst.</h2>
                <!--<div class="line"></div>-->
    </div>
    <div class="row inside" id="price-cards">
        <?php foreach($data->children()->visible() as $priceCard): ?>
            <div class="col-lg-4 card-container" data-package="<?php echo $priceCard->title(); ?>">
                <div class="price-card">
                    <div class="card-popularity <?php echo $priceCard->popularityBool() ?> <?php echo $priceCard->ctaGradient() ?>">
                        <p class=""><?php echo $priceCard->popularityTitle() ?></p>
                    </div>
                    <div class="card-title">
                        <p class=""><?php echo $priceCard->title() ?></p>
                    </div>
                    <div class="card line <?php echo $priceCard->ctaGradient() ?>"></div>
                    <div class="card-content row">
                        <div class="col-xs-12"><p class="bullet text <?php echo $priceCard->ctaGradient() ?>">&#9679;</p><p class="card-bullet"><?php echo $priceCard->bullet1() ?></p></div>
                        <div class="col-xs-12"><p class="bullet text <?php echo $priceCard->ctaGradient() ?>">&#9679;</p><p class="card-bullet"><?php echo $priceCard->bullet2() ?></p></div>
                        <div class="col-xs-12"><p class="bullet text <?php echo $priceCard->ctaGradient() ?>">&#9679;</p><p class="card-bullet"><?php echo $priceCard->bullet3() ?></p></div>
                    </div>
                    <div class="card-action <?php echo $priceCard->ctaGradient() ?>">
                        <p class="card-cta"><?php echo $priceCard->cta() ?></p>
                    </div>
                </div>
            </div>
        <?php endforeach ?>
    </div>
</section>
