(function() {
    var $signup = $('.signup');
    var $form = $('.signup__form');
    var selectedPackage = null;

    var packageMap = { basic: 0, professional: 1, premium: 2 };

    $('.card-container').click(function() {
        $signup.addClass('signup--visible');

        selectedPackage = packageMap[this.dataset.package];
    });

    $signup.click(function(event) {
        if (event.target === event.currentTarget) {
            $signup.removeClass('signup--visible');
        }
    });

    $form.submit(function(event) {
        event.preventDefault();

        $signup.addClass('signup--loading');

        const host = location.href.includes('localhost') ? 'http://localhost:8080' : 'https://cms.flowflake.de';

        $.post(
            host + '/api/mgmt/signups',
            $form.serialize() + '&package=' + selectedPackage,
            function(response) {
                $signup
                    .addClass('signup--success')
                    .removeClass('signup--loading');
            }
        );
    });

    $('.signup__success button').click(function() {
        $signup.removeClass('signup--visible');

        window.setTimeout(function() {
            $signup.removeClass('signup--success');

            $('input, textarea', $form).val('');
        }, 300);
    });
})();
