<?php
include './includes/functions.php';
include './includes/data.php';
?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="description" content="Хочешь заговорить на английском, записывайся на пробный урок в сеть школ английского SAY&nbsp;YES!">
    <meta name="yandex-verification" content="77618a975ea21450">

    <title>Английский для детей онлайн | SAY&nbsp;YES!</title>

    <link rel="icon" href="https://sayes.ru/wp-content/uploads/2018/09/cropped-favicon-32x32.png" sizes="32x32">
    <link rel="icon" href="https://sayes.ru/wp-content/uploads/2018/09/cropped-favicon-192x192.png" sizes="192x192">
    <link rel="apple-touch-icon" href="https://sayes.ru/wp-content/uploads/2018/09/cropped-favicon-180x180.png">
    <meta name="msapplication-TileImage" content="https://sayes.ru/wp-content/uploads/2018/09/cropped-favicon-270x270.png">

    <?php
        include './includes/yandex-metrika.php';
        include './includes/google-analytics.php';
        include './includes/facebook-pixel.php';
        include './includes/call-tracking.php';
    ?>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@300;400;600;700;800&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.css" />

    <link rel="stylesheet" href="./styles/normalize.css">
    <link rel="stylesheet" href="./styles/style.css">
    <style>
        .section-bg:before {
            background-image: url('<?= get_image('wave-after.svg') ?>');
        }

        .section-bg:after {
            background-image: url('<?= get_image('wave-before.svg') ?>');
        }
    </style>
</head>

<body class="page">
    <div class="section-first">
        <div class="section-first-bg" style="background-image: url('<?= get_image('container-first-bg.png') ?>')"></div>
        <div class="section-first-wave" style="background-image: url('<?= get_image('wave-1.png') ?>')"></div>
        <div class="header-main-container">
            <div class="header-main">
                <div class="header-main-left">
                    <div class="header-main-item _has_logo">
                        <img src="<?= get_image('logo.svg') ?>" alt="">
                    </div>
                    <div class="header-main-item _has_expert">
                        <img src="<?= get_image('expert.svg') ?>" alt="">
                    </div>
                </div>
                <div class="header-main-right">
                    <div class="header-main-item _has_tel">
                        <div class="tel-call">
                            <a target="_blank" href="<?= get_tel_for_href($info['tel']) ?>" class="r-link tel-call-tel"><?= $info['tel'] ?></a>
                            <button class="r-button tel-call-call js-button">
                                <div>
                                    <img src="<?= get_image('tel-small.svg') ?>" <?= role_image() ?> alt="">
                                </div>
                                <span>Перезвоните мне</span>
                            </button>
                        </div>
                    </div>
                    <div class="header-main-item _has_social">
                        <ul class="r-list social">
                            <li>
                                <a class="whatsapp-button" target="_blank" href="<?= $info['whatsapp'] ?>">
                                    <img <?= role_image() ?> src="<?= get_image('whatsapp.svg') ?>" alt="">
                                </a>
                            </li>
                            <li>
                                <a class="facebook-button" target="_blank" href="<?= $info['fb'] ?>">
                                    <img <?= role_image() ?> src="<?= get_image('facebook.svg') ?>" alt="">
                                </a>
                            </li>
                            <li>
                                <a class="instagram-button" target="_blank" href="<?= $info['in'] ?>">
                                    <img <?= role_image() ?> src="<?= get_image('instagram.svg') ?>" alt="">
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="container container-first">
            <div class="hero">
                <h1 class="hero-title">Только в августе! Получите <strong class="nbsp">2 недели</strong> занятий по английскому <strong>в подарок!</strong></h1>

                <p class="hero-subtitle">Индивидуально онлайн для детей 5-16 лет</p>

                <button type="button" class="hero-button r-button button-accent js-button">Получить 2 недели в подарок</button>
            </div>
        </div>
    </div>

    <div class="section-second" style="background-image: url('<?= get_image('second-bg.png') ?>')">
        <div class="container">
            <form class="form-main js-form">
                <h2 class="section-title form-main-header">Узнайте уровень английского у вашего ребенка на пробном бесплатном уроке, а также</h2>

                <ul class="r-list">
                    <li>
                        <div>
                            <div class="circle">1</div>
                        </div>
                        <span>Познакомьтесь с методикой и программой обучения</span>
                    </li>
                    <li>
                        <div>
                            <div class="circle">2</div>
                        </div>
                        <span>Получите план изучения языка на лето</span>
                    </li>
                    <li>
                        <div>
                            <div class="circle">3</div>
                        </div>
                        <span>Оцените, нравится ли вам преподаватель</span>
                    </li>
                </ul>

                <div class="cat-dialog">
                    <img src="<?= get_image('gift.png') ?>" <?= role_image() ?> alt="">
                </div>

                <p class="form-offer">Запишитесь на пробный урок и получите <span class="nbsp">ДВЕ НЕДЕЛИ ОБУЧЕНИЯ</span> в подарок!</p>

                <div class="form-main-row">
                    <div class="form-main-col _has_input">
                        <input type="text" class="input" placeholder="Имя" name="name" required>
                    </div>
                    <div class="form-main-col _has_input">
                        <input type="tel" class="input" placeholder="Телефон" name="phone" required>
                    </div>
                    <div class="form-main-col _has_button">
                        <button type="submit" class="r-button button-accent button-form">
                            <span>Записаться на пробный урок</span>
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>

    <div class="section-third">
        <div class="container">
            <h2 class="section-title">Почему вам стоит выбрать онлайн летнюю школу для детей и подростков SAY&nbsp;YES?</h2>

            <ul class="r-list cat-cards">
                <li class="cat-card">
                    <div>
                        <img src="<?= get_image('cat-3-1.png') ?>" <?= role_image() ?> alt="">
                    </div>
                    <div class="cat-card-info">
                        <h3 class="cat-card-header">Подготовка к школе</h3>
                        <p class="cat-card-desc">Возможность подготовить ребенка к изучению языка, адаптировать к занятиям в общеобразовательной школе и с ранних лет увлечь его иностранной речью.</p>
                    </div>
                </li>
                <li class="cat-card">
                    <div>
                        <img src="<?= get_image('cat-3-2.png') ?>" <?= role_image() ?> alt="">
                    </div>
                    <div class="cat-card-info">
                        <h3 class="cat-card-header">Разговорный онлайн-клуб с носителями языка </h3>
                        <p class="cat-card-desc">Разговорные клубы с носителями языка БЕСПЛАТНО только этим летом! Ваш ребенок гарантированно преодолеет разговорный барьер к новому учебному году.</p>
                    </div>
                </li>
                <li class="cat-card">
                    <div>
                        <img src="<?= get_image('cat-3-3.png') ?>" <?= role_image() ?> alt="">
                    </div>
                    <div class="cat-card-info">
                        <h3 class="cat-card-header">Сертифицированные и талантливые педагоги</h3>
                        <p class="cat-card-desc">Отбираем преподавателей по опыту и дипломам, а также по отзывам родителей учеников.</p>
                        <div class="cat-card-footer">
                            <a target="_blank" class="r-link scroll-to" href="#ourteam-section">Посмотреть видео от преподавателей</a>
                        </div>
                    </div>
                </li>
                <li class="cat-card">
                    <div>
                        <img src="<?= get_image('cat-3-4.png') ?>" <?= role_image() ?> alt="">
                    </div>
                    <div class="cat-card-info">
                        <h3 class="cat-card-header">Нескучная летняя программа</h3>
                        <p class="cat-card-desc">Специальные разработанные летние программы с учебными материалами с героями любимых мультфильмов для самых маленьких, National Geographic и TED Talks для подростков.</p>
                    </div>
                </li>
            </ul>
        </div>
    </div>

    <div class="section-fourth">
        <div class="section-bg _comfort" style="background-image: url('<?= get_image('fourth.png') ?>')"></div>
        <div class="comfort container">
            <div class="comfort-info">
                <h2 class="section-title text-color-yellow">Занятия онлайн летом — это удобно!</h2>

                <ul class="r-list semibold">
                    <li>
                        <div>
                            <img width="54" height="54" src="<?= get_image('check-mark.svg') ?>" <?= role_image() ?> alt="">
                        </div>
                        <div>Обучение в комфортной для вашего ребенка обстановке.</div>
                    </li>
                    <li>
                        <div>
                            <img width="54" height="54" src="<?= get_image('check-mark.svg') ?>" <?= role_image() ?> alt="">
                        </div>
                        <div>Занимайтесь откуда угодно - из дома, отпуска или с дачи.</div>
                    </li>
                </ul>

                <div class="comfort-info-footer">
                    <div class="comfort-info-row">
                        <div class="comfort-info-col">
                            <button class="r-button button-accent button-form js-button" type="button">Оставить заявку и получить подарок</button>
                        </div>
                        <div class="comfort-info-col">
                            <p class="comfort-message">
                                <span>
                                    Посмотрите, как динамично проходят наши онлайн-уроки (2 мин.)
                                </span>
                                <img src="<?= get_image('line-arrow-45.svg') ?>" <?= role_image() ?> alt="">
                            </p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="comfort-video">
                <a data-fancybox data-width="640" data-height="360" target="_blank" href="https://youtu.be/T_v4tBsnD4c" class="video-block">
                    <img src="<?= get_youtube_image('T_v4tBsnD4c') ?>" <?= role_image() ?> alt="">
                </a>
                <button class="r-button button-accent button-form js-button" type="button">Оставить заявку и получить подарок</button>
            </div>
        </div>
    </div>

    <div class="section-six">
        <div class="container">
            <h2 class="section-title">Почему мы рекомендуем заниматься английским летом?</h2>

            <div class="section-content">
                <div class="section-content__left">
                    <img class="r-size" src="<?= get_image('little-girl-2.png') ?>" <?= role_image() ?> alt="">
                </div>

                <div class="section-content__right">
                    <h3>1. Это эффективно для прогресса в английском</h3>
                    <p>За три месяца каникул дети могут забыть почти 1/4 пройденного за год материала. Если поддерживать уровень английского в течение лета, осенью ребенок не будет тратить 1-2 месяца чтобы вернуться на прежний уровень владения языком.</p>

                    <h3>2. Меньше стресса в начале учебного года</h3>
                    <p>В начале учебного года сложно возвращаться одновременно и к школе, и к дополнительным занятиям. Попытка включить занятия английским может вызвать еще больший стресс. Этого не случится, если ребенок продолжал занятия летом.</p>

                    <h3>3. Час свободного времени для родителей</h3>
                    <p>Летом у детей больше свободного времени (точнее, оно все свободное:) и нет проблемы найти 25-50 минут на занятие английским. Признаться честно, для многих родителей это отличное решение вопроса “чем занять детей во время каникул”.</p>

                    <h3>4. Возможность сделать прорыв в английском</h3>
                    <p>Для тех, кто не мог найти время плотнее заняться английским во время учебного года, летние каникулы – отличная возможность сделать настоящий рывок! Занятиям ничего не мешает, дети больше отдыхают и лучше запоминают информацию.</p>
                    
                    <button type="button" class="r-button button-accent button-form js-button">Оставить заявку и получить подарок</button>
                </div>
            </div>
        </div>
    </div>

    <div id="ourteam-section" class="ourteam">
        <div class="section-bg _ourteam" style="background-image: url('<?= get_image('ourteam-bg.png') ?>')"></div>
        <div class="container ourteam-container">
            <div class="section-overline">
                Найдем подход к любому ребенку
            </div>

            <h2 class="section-title">
                В нашей команде только внимательные и заботливые преподаватели с опытом обучения детей
            </h2>

            <ul class="r-list ourteam__list semibold">
                <li>
                    Cтрогий кастинг: отбор <br>проходит только 1 из <br>50 преподавателей
                </li>
                <li>
                    Проверяем наличие различных дипломов, сертификатов и профессионального образования
                </li>
                <li>
                    Регулярно собираем отзывы <br>и контролируем результат и качество обучения
                </li>
            </ul>

            <div class="team-slider swiper-container">
                <div class="swiper-wrapper">
                    <?php
                    $index = 0;
                    foreach ($teachers as $teacher) {
                        $index++
                    ?>
                        <div class="swiper-slide teamtab" id="team-<?= $index ?>">
                            <div class="team-slider__top">
                                <div class="team-slider__photo">
                                    <a data-fancybox data-width="640" data-height="360" target="_blank" class="r-link" href="<?= $teacher['video'] ?>" target="blank">
                                        <img src="<?= get_image('play.svg') ?>" alt="" <?= role_image() ?>>
                                        <span class="-visually-hidden">Смотреть видео</span>
                                    </a>
                                    <img class="r-size" src="<?= get_image('teachers/' . $teacher['foto']) ?>" <?= role_image() ?> alt="">
                                </div>
                                <div class="team-slider__cont">
                                    <div class="team-slider__title bold"><?= $teacher['name'] ?></div>
                                    <div class="team-slider__article">
                                        <p>
                                            <?= $teacher['text'] ?>
                                        </p>
                                    </div>
                                    <ul class="r-list team-slider__list">
                                        <?php
                                        foreach ($teacher['features'] as $item) {
                                            if (!empty($item)) {
                                                echo '<li>' . $item . '</li>';
                                            }
                                        }
                                        ?>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    <?php } ?>
                </div>
                <div class="swiper-button-next"></div>
                <div class="swiper-button-prev"></div>
            </div>
        </div>
    </div>

    <div class="advantages">
        <div class="container">
            <div class="section-overline">
                Эффективность нашего обучения подтверждена отзывами и наградами
            </div>

            <h2 class="section-title advantages__title">
                Школа <span class="nbsp">SAY YES!</span> существует 8 лет в оффлайн формате в Москве и 4 раза становилась победителем премии
                «Эксперт Года» от SchoolRate
            </h2>

            <div class="advantages__top">
                <ul class="r-list advantage-list">
                    <li>
                        <div class="advantage-list__icon">
                            <img class="r-size" src="<?= get_image('icon-1.svg') ?>" <?= role_image() ?> alt="" width="94" height="95">
                        </div>
                        <div class="advantage-list__cont">
                            <div class="advantage-list__title bold">Инноватор года </div>
                            <div class="advantage-list__article semibold">
                                за курс English<br> Challenge (2017 г.)
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="advantage-list__icon">
                            <img class="r-size" src="<?= get_image('icon-2.svg') ?>" <?= role_image() ?> alt="" width="94" height="95">
                        </div>
                        <div class="advantage-list__cont">
                            <div class="advantage-list__title bold">WEB–доверие</div>
                            <div class="advantage-list__article semibold">
                                за самую лояльную публику<br> в Интернет (2019 г.)
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="advantage-list__icon">
                            <img class="r-size" src="<?= get_image('icon-3.svg') ?>" <?= role_image() ?> alt="" width="94" height="95">
                        </div>
                        <div class="advantage-list__cont">
                            <div class="advantage-list__title bold">Лучшие языковые<br> мероприятия</div>
                            <div class="advantage-list__article semibold">
                                для студентов (2018 г.)
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="advantage-list__icon">
                            <img class="r-size" src="<?= get_image('icon-4.svg') ?>" <?= role_image() ?> alt="" width="94" height="95">
                        </div>
                        <div class="advantage-list__cont">
                            <div class="advantage-list__title bold">Методика года</div>
                            <div class="advantage-list__article semibold">
                                за метод «Английский до<br> автоматизма» (2019 г.)
                            </div>
                        </div>
                    </li>
                </ul>
                <div class="license">
                    <div class="license__img">
                        <img class="r-size" src="<?= get_image('reward.png') ?>" <?= role_image() ?> alt="" width="207" height="294">
                    </div>
                    <div class="dialog dialog_adv _mobile_position-left">Качество обучения подтверждено лицензией Министерства образования</div>
                </div>
            </div>
            <div class="advantages__bottom">
                <button type="button" class="r-button button-accent button-form adv-btn js-button">Оставить заявку и получить подарок</button>
            </div>
        </div>
    </div>

    <div class="reviews container">
        <h2 class="section-title reviews__title">За 8 лет работы обучили 4.5 тысяч студентов и получили более 300 отзывов</h2>
        <div class="reviews-slider-wrap">
            <div class="reviews-slider swiper-container">
                <div class="swiper-wrapper">
                    <?php foreach ($reviews_from_portals as $portal) { ?>
                        <div class="swiper-slide">
                            <div class="reviews-slider__title semibold"><?= $portal['name'] ?></div>
                            <ul class="r-list reviews-slider__list">
                                <li>
                                    <img class="r-size" src="<?= get_image($portal['image']) ?>" <?= role_image() ?> alt="">
                                </li>
                                </li>
                            </ul>
                            <a target="_blank" class="reviews-slider__link" href="<?= $portal['link']['href'] ?>"><?= $portal['link']['text'] ?></a>
                        </div>
                    <?php } ?>
                </div>
            </div>
            <div class="swiper-button-next reviews-slider-next"></div>
            <div class="swiper-button-prev reviews-slider-prev"></div>
        </div>

        <div class="revfull-slider-wrap">
            <div class="revfull-slider swiper-container">
                <div class="swiper-wrapper">
                    <?php foreach ($reviews as $item) { ?>
                        <div class="swiper-slide">
                            <div class="revfull-slider__item">
                                <ul class="r-list revfull-slider__top">
                                    <li>
                                        <div class="revfull-slider__photo">
                                            <img class="r-size" src="<?= $item['foto'] ?>" <?= role_image() ?> alt="">
                                        </div>
                                    </li>
                                    <li>
                                        <div class="revfull-slider__name bold"><?= $item['header'] ?></div>
                                        <div class="revfull-slider__article"><?= $item['subheader'] ?></div>
                                        <a class="revfull-slider__link" href="<?= $item['profile'] ?>" target="_blank">
                                            <span>Профиль в</span>
                                            <div class="revfull-slider__social-icon">
                                                <?php
                                                $profile_host = parse_url($item['profile'], PHP_URL_HOST);
                                                $profile_icon = 'inst-min.svg';
                                                if ($profile_host == 'www.facebook.com' || $profile_host == 'facebook.com') {
                                                    $profile_icon = 'facebook-icon.svg';
                                                }?>
                                                <img width="20" class="r-size" src="<?= get_image($profile_icon) ?>" <?= role_image() ?> alt="">
                                            </div>
                                        </a>
                                    </li>
                                </ul>
                                <div class="dialog revfull-slider__dialog text-hidden">
                                    <p><?= $item['text'] ?></p>
                                    <div class="text-show" style="cursor: pointer;">
                                        <span>Развернуть</span>
                                    </div>
                                </div>
                                <a data-fancybox data-width="640" data-height="360" target="_blank" href="<?= $item['video_link'] ?>" class="video-block">
                                    <img class="r-size" src="<?= $item['video_preview'] ?>" <?= role_image() ?> alt="">
                                </a>
                            </div>
                        </div>
                    <?php } ?>
                </div>
            </div>
            <div class="swiper-button-next revfull-slider-next"></div>
            <div class="swiper-button-prev revfull-slider-prev"></div>
        </div>
    </div>

    <div class="about-progress container">
        <div class="about-progress__column">
            <h2 class="section-title about-progress__title">Единственная онлайн-школа, где снимают отчеты о прогрессе учеников на видео</h2>
            
            <div class="about-progress__article">
                Посмотрите не просто отзывы наших юных студентов, а то, как они говорят на английском
            </div>
        </div>
        <div class="about-progress__column">
            <a data-fancybox data-width="640" data-height="360" href="https://youtu.be/lSL9KuIwc_0" target="_blank" class="video-block about-progress__video">
                <img class="r-size" src="<?= get_image('video-prev.jpg') ?>" <?= role_image() ?> alt="">
            </a>
        </div>
    </div>

    <div class="price-section">
        <div class="section-bg _price-section" style="background-image: url('<?= get_image('price-section-bg.png') ?>')"></div>
        <div class="container price-section-container">
            <h2 class="section-title">Стоимость индивидуальных уроков</h2>

            <p class="price-section-subtitle">Вы можете выбрать продолжительность обучения в зависимости от возраста ребенка </p>
            <ul class="r-list">
                <li class="price-section-card">
                    <div class="price-section-card-header">25 минут</div>
                    <div class="price-section-card-subheader">рекомендуем от 5 лет</div>
                    <div class="price-section-card-price">от 550 руб/занятие</div>
                    <button class="r-button button-accent button-form js-button" type="button">Узнать подробнее</button>
                </li>
                <li class="price-section-card">
                    <div class="price-section-card-header">50 минут</div>
                    <div class="price-section-card-subheader">рекомендуем от 7 лет</div>
                    <div class="price-section-card-price">от 815 руб/занятие</div>
                    <button class="r-button button-accent button-form js-button" type="button">Узнать подробнее</button>
                </li>
            </ul>
        </div>
    </div>

    <div class="about-lessons">
        <div class="container">
            <h2 class="section-title about-lessons__title">В пакет уроков также включены:</h2>
            <ul class="r-list lessons-info">
                <li>
                    <div class="lessons-info__cont">
                        <div class="lessons-info__title bold">1. Онлайн-платформа для обучения</div>
                        <div class="lessons-info__article">
                            Интерактивная комната, разработанная для детей,
                            делает процесс обучения удобным и захватывающим.
                            Игры, интерактивные задания, видео и аудио вовлекают ребенка в
                            процесс обучения с первых минут.
                        </div>
                        <img class="r-size" src="<?= get_image('lesson-img.jpg') ?>" <?= role_image() ?> alt="">
                    </div>
                    <div class="lessons-info__img">
                        <img class="r-size" src="<?= get_image('lesson-img.jpg') ?>" <?= role_image() ?> alt="">
                    </div>
                </li>
                <li>
                    <div class="lessons-info__cont">
                        <div class="lessons-info__title bold">2. Отчеты об успеваемости ребенка</div>
                        <div class="lessons-info__article">
                            Каждый месяц преподаватель формирует отчет для родителя о пройденном материале и
                            прогрессе в обучении. Вы будете в курсе, каких успехов добился ваш ребенок.
                        </div>
                        <img class="r-size" src="<?= get_image('progress-report.jpg') ?>" <?= role_image() ?> alt="">
                    </div>
                    <div class="lessons-info__img">
                        <img class="r-size" src="<?= get_image('progress-report.jpg') ?>" <?= role_image() ?> alt="">
                    </div>
                </li>
                <li>
                    <div class="lessons-info__cont">
                        <div class="lessons-info__title bold">3. Онлайн спикинг клубы </div>
                        <div class="lessons-info__article">
                            Групповые занятия с ровесниками, которые проходят по отдельной программе,
                            погрузят вашего ребенка в англоговорящую среду и улучшат разговорный навык.
                        </div>
                        <img class="r-size" src="<?= get_image('speaking-club.jpg') ?>" <?= role_image() ?> alt="">
                    </div>
                    <div class="lessons-info__img">
                        <img class="r-size" src="<?= get_image('speaking-club.jpg') ?>" <?= role_image() ?> alt="">
                    </div>
                </li>
            </ul>
        </div>
    </div>

    <div class="accordeon-section">
        <div class="section-bg _accordeon-section" style="background-image: url('<?= get_image('accordeon-section-bg.png') ?>')"></div>
        <div class="container accordeon-section-container">
            <div class="accordeon-section-row">
                <div class="accordeon-section-img">
                    <img class="r-size" src="<?= get_image('accordeon-image.png') ?>" <?= role_image() ?> alt="">
                </div>

                <div class="accordeon-section-content">
                    <div class="accordeon-section-header">
                        <h2 class="section-title">На часто задаваемые вопросы отвечает <span><span>Вера Шаталова,<br>руководитель школы SAY&nbsp;YES!</span></span></h2>
                        <img class="r-size accordeon-image-mobile" src="<?= get_image('accordeon-image.png') ?>" <?= role_image() ?> alt="">
                    </div>

                    <ul id="accordeon" class="r-list accordeon">
                        <?php foreach ($questions as $item) { ?>
                            <li class="accordeon-card">
                                <button type="button" class="r-button accordeon-card-header">
                                    <span><?= $item['header'] ?></span>
                                    <img src="<?= get_image('accordeon-down.svg') ?>" <?= role_image() ?> alt="">
                                </button>
                                <div class="accordeon-card-content"><?= $item['text'] ?></div>
                            </li>
                        <?php } ?>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <div class="form-section">
        <div class="container">
            <form class="form-main js-form">
                <h2 class="section-title form-main-header">Узнайте уровень английского у вашего ребенка на пробном бесплатном уроке, а также</h2>
                <ul class="r-list">
                    <li>
                        <div>
                            <div class="circle">1</div>
                        </div>
                        <span>Познакомьтесь с методикой и программой обучения</span>
                    </li>
                    <li>
                        <div>
                            <div class="circle">2</div>
                        </div>
                        <span>Получите план изучения языка</span>
                    </li>
                    <li>
                        <div>
                            <div class="circle">3</div>
                        </div>
                        <span>Оцените, нравится ли вам преподаватель</span>
                    </li>
                </ul>

                <div class="cat-dialog">
                    <img src="<?= get_image('gift.png') ?>" <?= role_image() ?> alt="">
                </div>

                <p class="form-offer">Запишитесь на пробный урок и получите ДВЕ НЕДЕЛИ ОБУЧЕНИЯ в подарок!</p>

                <div class="form-main-row">
                    <div class="form-main-col _has_input">
                        <input type="text" class="input" placeholder="Имя" name="name" required>
                    </div>
                    <div class="form-main-col _has_input">
                        <input type="tel" class="input" placeholder="Телефон" name="phone" required>
                    </div>
                    <div class="form-main-col _has_button">
                        <button type="submit" class="r-button button-accent button-form">
                            <span>Записаться на пробный урок</span>
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>

    <div class="contact container">
        <h2 class="section-title contact__title">Контакты</h2>

        <div class="contact__item">
            <div class="contact__column-left">
                <ul class="r-list contact__list">
                    <li>
                        <div class="contact__article semibold">
                            Если вы хотите узнать больше о нашей школе, просто позвоните нам!
                        </div>
                    </li>
                    <li>
                        <a class="recall" href="<?= get_tel_for_href($info['tel']) ?>" target="_blank"><?= $info['tel'] ?></a>
                    </li>
                    <li>
                        <a class="whatsup-link whatsapp-button bold" href="<?= $info['whatsapp'] ?>" target="_blank">Написать в WhatsApp</a>
                    </li>
                </ul>
            </div>
            <div class="contact__column-right">
                <ul class="r-list contact__phones">
                    <li>
                        <div class="social-screen">
                            <img class="r-size" src="<?= get_image('phone-1.png') ?>" <?= role_image() ?> alt="">
                        </div>
                        <a class="subscription-social subscription-social_inst instagram-button" href="<?= $info['in'] ?>" target="_blank">Подписаться на Instagram</a>
                    </li>
                    <li>
                        <div class="social-screen">
                            <img class="r-size" src="<?= get_image('phone-2.png') ?>" <?= role_image() ?> alt="">
                        </div>
                        <a class="subscription-social subscription-social_facebook facebook-button" href="<?= $info['fb'] ?>" target="_blank">Подписаться в Facebook</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>

    <footer class="footer">
        <div class="section-bg"></div>

        <div class="container">
            <div class="footer__top">
                <div class="footer__column">
                    <div class="footer__logo">
                        <img class="r-size" src="<?= get_image('logo.svg') ?>" <?= role_image() ?> alt="">
                    </div>

                    <ul class="r-list footer__contact">
                        <li>
                            <a target="_blank" class="email-link" href="<?= get_email_for_href($info['email']) ?>"><?= $info['email'] ?></a>
                        </li>
                        <li>
                            <a target="_blank" class="whatsapp-link" href="<?= $info['whatsapp'] ?>">Написать в WhatsApp</a>
                        </li>
                        <?php foreach ($info['addesses'] as $address) { ?>
                            <li>
                                <span class="adress-info"><?= $address ?></span>
                            </li>
                        <?php } ?>
                    </ul>
                </div>

                <?php foreach ($footer as $menu) { ?>
                    <div class="footer__column">
                        <div class="footer__title semibold"><?= $menu['header'] ?></div>
                        <ul class="r-list footer__list">
                            <?php foreach ($menu['links'] as $link) { ?>
                                <li><a target="_blank" href="<?= $link['href'] ?>"><?= $link['text'] ?></a></li>
                            <?php } ?>
                        </ul>
                    </div>
                <?php } ?>
            </div>

            <div class="footer__bottom">
                <ul class="r-list footer__lisense">
                    <li><a target="_blank" href="#">Лицензия ДО Правительства Москвы №036801</a></li>
                </ul>
                <div class="footer__copy">© 2013 - 2021 SAY&nbsp;YES!</div>
                <ul class="r-list footer__privacy">
                    <li><a target="_blank" href="<?= $info['pc']['link'] ?>"><?= $info['pc']['text'] ?></a></li>
                    <li><a target="_blank" href="<?= $info['oferta']['link'] ?>"><?= $info['oferta']['text'] ?></a></li>
                </ul>
            </div>
        </div>
    </footer>

    <div id="js-modal-form" class="modal-container">
        <div class="modal-wrapper">
            <button id="js-close2-modal-form" class="r-button modal-overlay"><span class="-visually-hidden">Закрыть</span></button>
            <div class="modal modal_loan">
                <form class="modal__inner form-loan js-form">
                    <button id="js-close-modal-form" class="modal-close" type="button"></button>
                    <div class="modal__title bold">Оставьте заявку на пробный урок</div>
                    <div class="modal__article">
                        и получите ДВЕ НЕДЕЛИ ОБУЧЕНИЯ в подарок!
                    </div>
                    <ul class="r-list modal__list">
                        <li>
                            <input class="inp" type="text" placeholder="Имя" name="name" required>
                        </li>
                        <li>
                            <input class="inp" type="tel" placeholder="Телефон" name="phone" required>
                        </li>
                        <li>
                            <button class="form-loan__btn button-accent r-button" type="submit">Получить 2 недели в подарок</button>
                        </li>
                        <li>
                            <div class="check-privacy">
                                <span>Я согласен на обработку моих персональных данных</span>
                            </div>
                        </li>
                    </ul>
                </form>
            </div>
        </div>
    </div>

    <div id="js-modal-success" class="modal-container">
        <div class="modal-wrapper">
            <button id="js-close2-modal-success" class="r-button modal-overlay"><span class="-visually-hidden">Закрыть</span></button>
            <div class="modal modal_thanks">
                <div class="modal__inner">
                    <button id="js-close-modal-success" class="modal-close" type="button"></button>
                    <div class="modal__block">
                        <div class="modal__column">
                            <div class="modal__title bold">Спасибо, что записались!</div>
                            <div class="modal__article">
                                Мы перезвоним вам в ближайшее время и пригласим на пробное занятие!
                            </div>
                        </div>
                        <div class="modal__column">
                            <img class="r-size" src="<?= get_image('cool-cat.png') ?>" <?= role_image() ?> alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/jquery@3.4.1/dist/jquery.min.js"></script>
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.js"></script>


    <script src="https://static.sayes.ru/js/crm.js"></script>
    <script src="https://static.sayes.ru/js/masked-input.js"></script>

    <script>
        var $modalForm = $('#js-modal-form');
        var $modalSuccess = $('#js-modal-success');

        var formElement = document.querySelectorAll('form');

        $('input[type=tel]').mask('+7 (999) 999-9999');

        document.querySelectorAll('form').forEach(function(form) {
            form.addEventListener('submit', function(event) {
                event.preventDefault();
                var that = this;
                var name = this.elements.name.value;
                var phone = this.elements.phone.value;
                if (!name || !phone) {
                    return false;
                }
                var data = {
                    type: 'Заявка на пробный урок дети лето',
                    name: name,
                    phone: phone,
                };

                ym(YANDEX_METRIKA_COUNTER, 'reachGoal', 'lead');
                gtag('event', 'lead', {
                    event_category: 'form'
                });
                fbq('track', 'Lead_kids');

                crm.addStudyRequest(data);

                $.post({
                    url: 'https://api.sayes.ru/request.php' + location.search,
                    data: data,
                    contentType: 'application/x-www-form-urlencoded'
                }).done(function() {
                    $modalForm.fadeOut();
                    $modalSuccess.fadeIn();
                    that.elements.name.value = '';
                    that.elements.phone.value = '';
                });
            });
        });

        $('.whatsapp-button').click(function() {
            ym(YANDEX_METRIKA_COUNTER, 'reachGoal', 'wa');
            gtag('event', 'wa', {
                event_category: 'click'
            });
            fbq('track', 'Contact');

            return true;
        });

        $('.facebook-button').click(function() {
            ym(YANDEX_METRIKA_COUNTER, 'reachGoal', 'fb');
            gtag('event', 'fb', {
                event_category: 'click'
            });
            fbq('track', 'Contact');

            return true;
        });

        $('.instagram-button').click(function() {
            ym(YANDEX_METRIKA_COUNTER, 'reachGoal', 'inst');
            gtag('event', 'inst', {
                event_category: 'click'
            });
            fbq('track', 'AddToWishlist_insta');

            return true;
        });

        $('.tel-call-tel, .recall').click(function() {
            gtag('event', 'tel', {
                event_category: 'click'
            });

            return true;
        });

        /******************************************* */
        var $accordeon = $('#accordeon');
        $accordeon.find('button').on('click', function() {
            var $this = $(this);
            var $content = $this.parent().find('.accordeon-card-content');
            if (!$content.hasClass('_is_open')) {
                $accordeon.find('.accordeon-card-content').removeClass('_is_open').slideUp();
            } else {
                $content.removeClass('_is_open').slideUp();
                return;
            }
            $content.addClass('_is_open').slideDown();
        });

        $('[data-fancybox]').fancybox({
            youtube: {
                controls: 0,
                showinfo: 0
            },
            vimeo: {
                color: 'f00'
            },
        });

        $('a.scroll-to').on('click', function(e) {
            e.preventDefault();

            $([document.documentElement, document.body]).animate({
                scrollTop: $(this.getAttribute('href')).offset().top
            }, 1000);
        });

        $('.programs-tabs .programs-tabs__item').click(function() {
            $('.programs-tabs__item').removeClass('is-active');
            $(this).addClass('is-active');
            var tab = $(this).attr('data-tab');
            $('.programs-content__item').not(tab).css({
                display: 'none'
            });
            $(tab).fadeIn(400);
        });
        $('.programs-tabs .programs-tabs__item:first-child').click();

        $('.team-tabs').on('click', '.team-tabs__btn', function() {
            $('.team-tabs__btn').removeClass('is-active');
            $(this).addClass('is-active');
            var tab = $(this).attr('data-tab');
            $('.teamtab').not(tab).css({
                display: 'none'
            });
            $(tab).fadeIn(400);
        });

        function teamTabMobile() {
            $('.team-tabs .swiper-wrapper .swiper-slide:first-child .team-tabs__btn').click();
        }

        var revSlider = new Swiper('.reviews-slider', {
            slidesPerView: 1,
            spaceBetween: 10,
            loop: true,
            navigation: {
                nextEl: '.reviews-slider-next',
                prevEl: '.reviews-slider-prev',
            },
        });

        var revFullSlider = new Swiper('.revfull-slider', {
            slidesPerView: 1,
            spaceBetween: 20,
            loop: true,
            navigation: {
                nextEl: '.revfull-slider-next',
                prevEl: '.revfull-slider-prev',
            },
            breakpoints: {
                701: {
                    slidesPerView: 2,
                },
            },
        });
        var teamSlider = new Swiper('.team-slider', {
            slidesPerView: 1,
            spaceBetween: 50,
            loop: true,
            // observer: true,
            // observeParents: true,
            navigation: {
                nextEl: '.swiper-button-next',
                prevEl: '.swiper-button-prev',
            },
            breakpoints: {
                1200: {
                    spaceBetween: 140,
                },
            },
        });

        $('.text-show').click(function() {
            var $this = $(this);
            $this.toggleClass('is-active');
            $this.parents('.text-hidden').find('p').toggleClass('is-active');
            if ($this.hasClass('is-active')) {
                $this.html('Свернуть');
            } else {
                $this.html('Развернуть');
            }
        });


        $('.js-button').on('click', function() {
            $modalForm.fadeIn();
        });
        // $('.js-button').on('click', function() {
        //     console.log(2)
        //     $modalForm.fadeIn();
        // });

        $('#js-close-modal-form').add('#js-close2-modal-form').on('click', function() {
            $modalForm.fadeOut();
        });
        $('#js-close-modal-success').add('#js-close2-modal-success').on('click', function() {
            $modalSuccess.fadeOut();
        });
    </script>
</body>

</html>