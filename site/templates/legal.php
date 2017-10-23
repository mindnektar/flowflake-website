<?php
snippet('head');

snippet('legal_header');
?>

<main id="legal-content">
    <body>
        <div class="inside">
            <h2><?php echo $page->legalTitle() ?></h2>

            <h3><?php echo $page->section5tmgTitle() ?></h3>
            <p><?php echo $page->section5tmgCopy() ?></p>

            <h3><?php echo $page->representedTitle() ?></h3>
            <p><?php echo $page->representedCopy() ?></p>

            <h3><?php echo $page->contactTitle() ?></h3>
            <p><?php echo $page->contactCopy() ?></p>

            <h3><?php echo $page->registerTitle() ?></h3>
            <p><?php echo $page->registerCopy() ?></p>

            <h3><?php echo $page->vatTitle() ?></h3>
            <p><?php echo $page->vatCopy() ?></p>

            <h3><?php echo $page->sourceOfIMGTitle() ?></h3>
            <p><?php echo $page->sourceOfIMGCopy() ?></p>

            <h2 id="disclaimer"><?php echo $page->disclaimerTitle() ?></h2>

            <h3><?php echo $page->accountabilityContentTitle() ?></h3>
            <p><?php echo $page->accountabilityContentCopy() ?></p>

            <h3><?php echo $page->accountabilityLinksTitle() ?></h3>
            <p><?php echo $page->accountabilityLinksCopy() ?></p>

            <h3><?php echo $page->copyrightTitle() ?></h3>
            <p><?php echo $page->copyrightCopy() ?></p>
        <div>
    </body>
</main>

<?php snippet('footer'); ?>