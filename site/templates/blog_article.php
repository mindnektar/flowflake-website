<?php
snippet('head');
snippet('header');
?>

<main>
    <section class="blogarticle">
        <article>
            <h2><?php echo $page->title()->html(); ?></h2>

            <?php echo $page->text()->kirbytext(); ?>
        </article>
    </section>
</main>

<?php
snippet('footer');
