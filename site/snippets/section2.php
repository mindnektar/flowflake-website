<section id="section2">
    <div class="container">
        <div class="row inside">
            <h2 class="text blue" id="sl-2"><?php echo $data->headline() ?></h2>
            <div class="line blue"></div>
            <div id="s2-content">
            <div class="col-xs-12 col-xl-4" id="s2-copy">
                <p id="copy-2"><?php echo $data->copy() ?></p>
            </div>
            <div class="col-xs-12 col-xl-8" id="s2-image">
                <?php if($image = $data->image()): ?>
                <img src="<?php echo $image->url()?>" id="desktop">
                <?php endif ?>
                    <!--<div id="section2-ipad-container">
                        <div id="section2Carousel" class="carousel slide" data-ride="carousel">
                            <ol class="carousel-indicators">
                                <?php 
                                $images = $data->images();
                                $first  = $data->image();
                                $index = 0;
                                foreach($images as $image): $index++; ?>
                                    <li data-target="#stageCarousel" data-slide-to="<?php echo $index ?>" <?php if($image == $first) echo ' class="active"' ?>></li>
                                <?php endforeach ?>
                            </ol>

                            <div class="carousel-inner">
                                <?php foreach($images as $image): ?>
                                    <div style="background: #000;" class="item <?php if($image == $first) echo 'active' ?>">
                                        <img src="<?php echo $image->url() ?>" alt="" id="section2-carousel-image">
                                    </div>
                                <?php endforeach ?>
                            </div>

                            <a class="left carousel-control" href="#section2Carousel" data-slide="prev">
                                <span class="sr-only">Previous</span>
                            </a>
                            <a class="right carousel-control" href="#section2Carousel" data-slide="next">
                                <span class="sr-only">Next</span>
                            </a>
                        </div>
                    </div>-->
            </div>
            </div>
        </div>
    </div>
</section>