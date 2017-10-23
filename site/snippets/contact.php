<section class="container" id="contact">
    <div class="row inside" id="contact-content">
        <h2 class="text red" id="sl-6"><?php echo $data->headline() ?></h2>
        <div class="line red"></div>
        <p id="contact-name"><?php echo $data->contactName() ?></p>
        <p id="contact-position"><?php echo $data->contactPosition() ?></p>
        
        <?php if($image = $data->image('contactImage.png')): ?>
            <img src="<?php echo $image->url() ?>" id="contact-photo" />
        <?php endif ?>

        <p id="contact-quote"><?php echo $data->contactQuote() ?></p>
        <a href="mailto:<?php echo $site->mail() ?>" class="btn contact" target="_top"><?php echo $data->cta() ?></a>
    </div>
</section>
</main>