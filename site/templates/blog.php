<?php
snippet('head');
snippet('header');
?>

<main>
    <section class="blog">
        <?php foreach ($page->children()->visible()->flip() as $article) { ?>
            <article>
                <h2><?php echo $article->title()->html(); ?></h2>
                <p><?php echo $article->intro()->kirbytext(); ?></p>
                <a href="<?php echo $article->url() ?>"><?php echo $page->readmore(); ?></a>
            </article>
        <?php } ?>
    </section>
</main>

<?php
snippet('footer');
