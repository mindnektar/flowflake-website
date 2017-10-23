<header>
    <a href="<?php echo $site->url() ?>"><img src="<?php echo kirby()->urls()->assets() . '/images/flowflake_logo_f.svg'?>" id="logo-f"></a>
    <a href="<?php echo $site->url() ?>"><img src="<?php echo kirby()->urls()->assets() . '/images/flowflake_logo.svg'?>" id="logo"></a>
    <div class="nav">
        <!--<a href="<?php echo $site->url() ?>" class="nav-link">Startseite</a>
        <a href="#section2" class="nav-link">Features</a>-->
        <a href="#section5" class="nav-btn">Jetzt Testen</a>
    </div>

    <script>
        // Select all links with hashes
        $('a[href*="#"]')
        // Remove links that don't actually link to anything
        .not('[href="#"]')
        .not('[href="#0"]')
        .click(function(event) {
        // On-page links
        if (
            location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') 
            && 
            location.hostname == this.hostname
        ) {
            // Figure out element to scroll to
            var target = $(this.hash);
            target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
            // Does a scroll target exist?
            if (target.length) {
            // Only prevent default if animation is actually gonna happen
            event.preventDefault();
            $('html, body').animate({
                scrollTop: target.offset().top
            }, 1000, function() {
                // Callback after animation
                // Must change focus!
                var $target = $(target);
                $target.focus();
                if ($target.is(":focus")) { // Checking if the target was focused
                return false;
                } else {
                $target.attr('tabindex','-1'); // Adding tabindex for elements not focusable
                $target.focus(); // Set focus again
                };
            });
            }
        }
        });
    </script>
</header>