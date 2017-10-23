<section class="container" id="section4">
    <div class="row inside">
        <h2 class="text purple" id="sl-4"><?php echo $data->headline() ?></h2>
        <div class="line purple"></div>
        <div class="col-xs-12" id="s4-image">
            <?php if($image = $data->image('contentImage.png')): ?>
                <img src="<?php echo $image->url() ?>" id="perspektive">
            <?php endif ?>
        </div>
        <div class="col-xs-12" id="s4-copy">
            <p id="copy-4"><?php echo $data->copy() ?></p>
        </div>
    </div>
</section>