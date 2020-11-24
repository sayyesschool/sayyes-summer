<!DOCTYPE html>
<html lang="ru">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <meta name="description" content="Хочешь заговорить на английском, записывайся на пробный урок в сеть школ английского SAY YES!">
        <meta name="yandex-verification" content="77618a975ea21450">

        <title>Бесплатный пробный урок английского в Москве | SAY YES!</title>

        <link rel="icon" href="https://static.sayes.ru/images/favicon-32x32.png" sizes="32x32">
        <link rel="icon" href="https://static.sayes.ru/images/favicon-192x192.png" sizes="192x192">

        <?php
            include './includes/yandex-metrika.php';
            include './includes/google-analytics.php';
            include './includes/facebook-pixel.php';
            include './includes/roistat.php';
        ?>
    </head>

    <body class="page">
        
        <script src="https://cdn.jsdelivr.net/npm/jquery@3.4.1/dist/jquery.min.js"></script>
        <script src="https://static.sayes.ru/js/crm.js"></script>
        <script src="https://static.sayes.ru/js/masked-input.js"></script>

        <script>
            var formElement = document.querySelectorAll('form');
            
            $('input[type=tel]').mask('+7 (999) 999-9999');

            document.querySelectorAll('form').forEach(function(form) {
                form.addEventListener('submit', function(event) {
                    event.preventDefault();

                    var data = {
                        type: 'Заявка на пробный урок',
                        name: this.elements.name.value,
                        phone: this.elements.phone.value
                    };

                    ym(YANDEX_METRIKA_COUNTER, 'reachGoal', 'zayavka');
                    gtag('event', 'click', { event_category: 'zayavka' });
                    fbq('track', 'Lead');
                    
                    crm.addStudyRequest(data);
                    
                    $.post({
                        url: 'https://api.sayes.ru/request.php' + location.search,
                        data: data,
                        contentType: 'application/x-www-form-urlencoded'
                    }).done(function() {
                        formElement.reset();
                    });
                });
            });

            $('.whatsapp-button').click(function() {
                ym(YANDEX_METRIKA_COUNTER, 'reachGoal', 'click');
                gtag('event', 'click', { event_category: 'click' });
                fbq('track', 'InitiateCheckout');
                
                return true;
            });
            </script>
    </body>
</html>