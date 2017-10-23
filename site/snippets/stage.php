<main>
     <section class="container" id="stage">
        <div class="row inside">
            <div class="col" id="stage-content">
                <h1 class="text blue" id="headline"><?php echo $data->headline() ?></h1>
                    <div id="stage-ipad-container">
                        <div id="ipad-gradient">
                        <div id="stageCarousel" class="carousel slide" data-ride="carousel">
                            <ol class="carousel-indicators">
                                <?php 
                                $images = $data->images();
                                $first  = $data->image();
                                $index = 0;
                                $index2 = 0;
                                $index3 = 0;
                                $index4 = 0;

                                foreach($images as $image): $index4++;
                                endforeach;

                                foreach($images as $image): $index++; ?>
                                    <?php if ($index4 == 1): ?>
                                    <?php else: ?>
                                    <li data-target="#stageCarousel" data-slide-to="<?php echo $index ?>" <?php if($image == $first) echo ' class="active"' ?>></li>
                                    <?php endif ?>
                                <?php endforeach ?>
                            </ol>

                            <div class="carousel-inner" id="ipad-carousel-inner">
                                <?php foreach($images as $image): $index2++?>
                                    <div style="background: #000;" class="item <?php if($image == $first) echo 'active' ?>">
                                        <img src="<?php echo $image->url() ?>" alt="" id="stage-carousel-image"  />
                                    </div>
                                <?php endforeach ?>
                            </div>

                            <?php if ($index4 == 1): ?>
                            <?php else: ?>
                            <a class="left carousel-control" href="#stageCarousel" data-slide="prev">
                                <span class="sr-only">Previous</span>
                            </a>
                            <a class="right carousel-control" href="#stageCarousel" data-slide="next">
                                <span class="sr-only">Next</span>
                            </a>
                            <?php endif ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>