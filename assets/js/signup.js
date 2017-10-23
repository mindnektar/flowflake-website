(function() {
    var $signup = $('.signup');
    var $form = $('.signup__form');

    $('.card-container').click(function() {
        $signup.addClass('signup--visible');
    });

    $signup.click(function(event) {
        if (event.target === event.currentTarget) {
            $signup.removeClass('signup--visible');
        }
    });

    $form.submit(function(event) {
        event.preventDefault();

        $.post(
            '',
            $form.serialize(),
            function() {

            }
        );
    });
})();
