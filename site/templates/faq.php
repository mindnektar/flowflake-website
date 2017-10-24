<?php
snippet('head');
snippet('header');
?>

<main>
    <section class="faq">
        <?php foreach ($page->children()->visible() as $item) { ?>
            <article>
                <h3><?php echo $item->question()->html(); ?></h3>
                <p><?php echo $item->answer()->html(); ?></p>
            </article>
        <?php } ?>
    <section>
</main>

<?php
snippet('footer');
