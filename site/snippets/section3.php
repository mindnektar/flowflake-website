<section id="section3">
    <div class="container">
        <div class="row inside">
            <h2 id="sl-3"><?php echo $data->headline() ?></h2>
            <div class="line"></div>
            <div class="col-xs-12 col-xl-6" id="s3-image">
                <div id="section3-ipad-container">
                    <div id="image-container">
                    <?php if($image = $data->image()): ?>
                        <img src="<?php echo $image->url() ?>" id="ipad-image" />
                    <?php endif ?>
                    </div>
                </div>
            </div>
            <div class="col-xs-12 col-xl-6" id="s3-copy">
                <p id="copy-3"><?php echo $data->copy() ?></p>
            </div>
        </div>
    </div>
</section>