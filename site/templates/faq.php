<?php
snippet('head');

snippet('legal_header');
?>

<main id="legal-content">
    <body>
        <div class="inside">
            <h2><?php echo $page->faqTitle() ?></h2>

            <h3><?php echo $page->faqTitle() ?></h3>

            <h3><?php echo $page->faqAnswer() ?></h3>
        <div>
    </body>
</main>

<?php snippet('footer'); ?>