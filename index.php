<?php
function get_image($name)
{
    return 'https://static.sayes.ru/images/kids/' . $name;
}
function role_image()
{
    return 'aria-hidden="true" aria-role="presentation" draggable="false"';
}
?>
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
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@300;400;600;700;800&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.css" />

    <link rel="stylesheet" href="./styles/normalize.css">
    <link rel="stylesheet" href="./styles/style.css">
    <link rel="stylesheet" href="./styles/style-aslal.css">
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
    <style>
        .section-first-bg {
            background-image: url('<?= get_image('container-first-bg.png') ?>');
        }

        .section-first-wave {
            background-image: url('<?= get_image('wave-1.png') ?>');
        }
    </style>
    <div class="section-first">
        <div class="section-first-bg"></div>
        <div class="section-first-wave"></div>
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
                            <a href="84953107214" class="r-link tel-call-tel">8-495-310-72-14</a>
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
                                <a href="">
                                    <img <?= role_image() ?> src="<?= get_image('whatsapp.svg') ?>" alt="">
                                </a>
                            </li>
                            <li><a href=""><img <?= role_image() ?> src="<?= get_image('facebook.svg') ?>" alt=""></a></li>
                            <li><a href=""><img <?= role_image() ?> src="<?= get_image('instagram.svg') ?>" alt=""></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="container container-first">
            <div class="hero">
                <h1>Индивидуальные онлайн-уроки английского для детей 5-16 лет</h1>
                <p class="hero-subtitle text-color-yellow">От 500 руб за занятие</p>
                <ul class="r-list hero-list">
                    <li><img src="<?= get_image('list-icon.svg') ?>" <?= role_image() ?> alt=""><span>Обучаем онлайн в <span class="text-color-yellow">удобное вам время</span></li>
                    <li><img src="<?= get_image('list-icon.svg') ?>" <?= role_image() ?> alt=""><span>Захватывающие уроки по <span class="text-color-yellow">25</span> или <span class="text-color-yellow">50 минут<span></span></li>
                    <li><img src="<?= get_image('list-icon.svg') ?>" <?= role_image() ?> alt=""><span><span class="text-color-yellow">Сертифицированные преподаватели</span> с опытом работы с детьми</span></li>
                </ul>
                <button class="hero-button r-button button-accent js-button" type="button">
                    <span class="hero-button-inner">
                        <img src="<?= get_image('flag-uk.png') ?>" <?= role_image() ?> alt="">
                        <span>Записаться на бесплатный урок</span>
                    </span>
                </button>
                <div class="first-section-mobile-circle"></div>
                <img class="hero-male" src="<?= get_image('male.png') ?>" <?= role_image() ?> alt="">
            </div>
        </div>
    </div>
    <style>
        .section-second {
            background-image: url('<?= get_image('second-bg.png') ?>');
        }

        @media (max-width: 1199px) {
            .section-second {
                background-image: none !important;
            }
        }
    </style>
    <div class="section-second">
        <div class="container">
            <form class="form-main js-form">
                <h2 class="h2 form-main-header">Узнайте уровень английского у вашего ребенка на пробном бесплатном уроке, а также</h2>
                <ul class="r-list">
                    <li>
                        <div>
                            <div class="circle">1</div>
                        </div>
                        <span>Познакомитесь с методикой и программой обучения</span>
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
                    <img src="<?= get_image('cat.png') ?>" <?= role_image() ?> alt="">
                    <div class="dialog _mobile_position-left">Урок проходит на онлайн-платформе в удобное вам время</div>
                </div>
                <div class="form-main-row">
                    <div class="form-main-col _has_input">
                        <input type="text" class="input" placeholder="Имя" name="name">
                    </div>
                    <div class="form-main-col _has_input">
                        <input type="tel" class="input" placeholder="Телефон" name="phone">
                    </div>
                    <div class="form-main-col _has_button">
                        <button type="submit" class="r-button button-accent button-form">
                            <span>Записаться на бесплатный урок</span>
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>

    <div class="section-third">
        <div class="container">
            <h2 class="h2">Почему дети начинают разговаривать на английском, любить язык и получать хорошие отметки в школе, обучаясь в SAY YES?</h2>
            <ul class="r-list cat-cards">
                <li class="cat-card">
                    <div>
                        <img src="<?= get_image('cat-3-1.png') ?>" <?= role_image() ?> alt="">
                    </div>
                    <div class="cat-card-info">
                        <div class="cat-card-header">Уроки, построенные на интересах ребенка</div>
                        <div class="cat-card-desc">Включаем в программу обсуждение любимых игр, мультфильмов и книг. Даже непоседе не удастся заскучать! </div>
                    </div>
                </li>
                <li class="cat-card">
                    <div>
                        <img src="<?= get_image('cat-3-2.png') ?>" <?= role_image() ?> alt="">
                    </div>
                    <div class="cat-card-info">
                        <div class="cat-card-header">Разговорный онлайн-клуб с носителями языка </div>
                        <div class="cat-card-desc">Организовываем дополнительную практику “живого” языка. Общение на английском с ровесниками и море позитивных эмоций.</div>
                    </div>
                </li>
                <li class="cat-card">
                    <div>
                        <img src="<?= get_image('cat-3-3.png') ?>" <?= role_image() ?> alt="">
                    </div>
                    <div class="cat-card-info">
                        <div class="cat-card-header">Сертифицированные и талантливые педагоги</div>
                        <div class="cat-card-desc">Отбираем преподавателей по опыту и дипломам, а также по отзывам родителей учеников.</div>
                        <div class="cat-card-footer">
                            <a class="r-link" href="#">Посмотреть видео от преподавателей</a>
                        </div>
                    </div>
                </li>
                <li class="cat-card">
                    <div>
                        <img src="<?= get_image('cat-3-4.png') ?>" <?= role_image() ?> alt="">
                    </div>
                    <div class="cat-card-info">
                        <div class="cat-card-header">Программа для конкретных целей</div>
                        <div class="cat-card-desc">Повышение успеваемости в школе? Помощь с домашкой? Нужно “разговорить” ребенка или “почистить” грамматику? Высокий балл на ЕГЭ? Работаем над вашей целью до получения результата. </div>
                    </div>
                </li>
            </ul>
        </div>
    </div>

    <style>
        .section-bg._comfort {
            background-image: url('<?= get_image('fourth.png') ?>');
        }
    </style>

    <div class="section-fourth">
        <div class="section-bg _comfort"></div>
        <div class="comfort container">
            <div class="comfort-info">
                <h2 class="h2 text-color-yellow">Занятия онлайн — это удобно!</h2>
                <ul class="r-list semibold">
                    <li>
                        <div>
                            <img width="54" height="54" src="<?= get_image('check-mark.svg') ?>" <?= role_image() ?> alt="">
                        </div>
                        <div>Обучение в комфортной и безопасной для вашего ребенка обстановке.</div>
                    </li>
                    <li>
                        <div>
                            <img width="54" height="54" src="<?= get_image('check-mark.svg') ?>" <?= role_image() ?> alt="">
                        </div>
                        <div>Экономия времени на поездках к репетитору или в школу.</div>
                    </li>
                </ul>
                <div class="comfort-info-footer">
                    <div class="comfort-info-row">
                        <div class="comfort-info-col">
                            <button class="r-button button-accent button-form js-button" type="button">Записаться на бесплатный урок</button>
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
                <div class="video-block">
                    <img src="<?= get_image('video-comfort.jpg') ?>" <?= role_image() ?> alt="">
                </div>
                <button class="r-button button-accent button-form js-button" type="button">Записаться на бесплатный урок</button>
            </div>
        </div>
    </div>

    <div class="section-six">
        <div class="stydeprograms container">
            <div class="cont-subtitle semibold">
                В зависимости от возраста и уровня ребенка, вы можете выбрать
            </div>
            <h2 class="stydeprograms__title h2">3 программы обучения, направленные на получение конкретного результата</h2>
            <div class="programs-tabs">
                <div class="programs-tabs__item bold" data-tab="#tab1">5-7 лет</div>
                <div class="programs-tabs__item bold" data-tab="#tab2">8-13 лет</div>
                <div class="programs-tabs__item bold" data-tab="#tab3">14-16 лет</div>
            </div>
            <div class="programs-content">
                <div class="programs-content__item" id="tab1">
                    <div class="programs-content__left">
                        <div class="programs-content__img">
                            <img class="r-size" src="<?= get_image('little-girl.png') ?>" <?= role_image() ?> alt="">
                        </div>
                        <div class="dialog programs-content__dialog _mobile_position-left">
                            Каждый месяц родителям формируется отчет о результатах и пройденном материале
                        </div>
                    </div>
                    <div class="programs-content__right">
                        <div class="programs-content__title bold">Особенности обучения:</div>
                        <ul class="r-list info-list bold">
                            <li>Знакомимся с основами языка</li>
                            <li>Влюбляем в английский</li>
                            <li>Начинаем говорить, читать и писать</li>
                            <li>Готовимся к школьной программе</li>
                        </ul>
                        <div class="programs-content__title bold">Результаты обучения:</div>
                        <ul class="r-list info-list bold">
                            <li>Воспринимает на слух английскую речь</li>
                            <li>Уверенно рассказывает о себе и любимых вещах </li>
                            <li>Может составлять простые предложения</li>
                            <li>Знает более 100 новых слов и выражений</li>
                        </ul>
                        <button type="button" class="r-button button-accent programs-content__btn js-button">Записаться на бесплатный урок</button>
                    </div>
                </div>
                <div class="programs-content__item" id="tab2">
                    <div class="programs-content__left">
                        <div class="programs-content__img">
                            <img class="r-size" src="<?= get_image('little-girl-2.png') ?>" <?= role_image() ?> alt="">
                        </div>
                        <div class="dialog programs-content__dialog">
                            Каждый месяц родителям формируется отчет о результатах и пройденном материале
                        </div>
                    </div>
                    <div class="programs-content__right">
                        <div class="programs-content__title bold">Особенности обучения:</div>
                        <ul class="r-list info-list bold">
                            <li>Повышаем успеваемость в школе</li>
                            <li>Концентрируемся на чистоте грамматики</li>
                            <li>Расширяем словарный запас и много говорим</li>
                            <li>Системно готовимся к ОГЭ</li>
                        </ul>
                        <div class="programs-content__title bold">Результаты обучения:</div>
                        <ul class="r-list info-list bold">
                            <li>Владеет 6 грамматическими временами</li>
                            <li>Поддерживает беседы на повседневные темы</li>
                            <li>Сочиняет и рассказывает истории</li>
                            <li>Получает высокий балл на школьных экзаменах</li>
                        </ul>
                        <button type="button" class="r-button button-accent programs-content__btn js-button">Записаться на бесплатный урок</button>
                    </div>
                </div>
                <div class="programs-content__item" id="tab3">
                    <div class="programs-content__left">
                        <div class="programs-content__img">
                            <img class="r-size" src="<?= get_image('little-girl-3.png') ?>" <?= role_image() ?> alt="">
                        </div>
                        <div class="dialog programs-content__dialog">
                            Каждый месяц родителям формируется отчет о результатах и пройденном материале
                        </div>
                    </div>
                    <div class="programs-content__right">
                        <div class="programs-content__title bold">Особенности обучения:</div>
                        <ul class="r-list info-list bold">
                            <li>Развиваем разговорный навык</li>
                            <li>Улучшаем произношение и понимание на слух</li>
                            <li>Закрываем пробелы в знаниях языка</li>
                            <li>Усиленно готовимся к ЕГЭ</li>
                        </ul>
                        <div class="programs-content__title bold">Результаты обучения:</div>
                        <ul class="r-list info-list bold">
                            <li>Владеет всеми грамматическими временами</li>
                            <li>Может свободно общаться с носителем языка</li>
                            <li>Может читать неадаптированную литературу</li>
                            <li>Получает высокий балл на выпускном экзамене</li>
                        </ul>
                        <button type="button" class="r-button button-accent programs-content__btn js-button">Записаться на бесплатный урок</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <style>
        .section-bg._ourteam {
            background-image: url('<?= get_image('ourteam-bg.png') ?>');
        }
    </style>
    <div class="ourteam">
        <div class="section-bg _ourteam"></div>
        <div class="container ourteam-container">
            <div class="cont-subtitle ourteam__sub-title semibold">
                В зависимости от возраста и уровня ребенка, вы можете выбрать
            </div>
            <h2 class="h2 ourteam__title">
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
            <ul class="r-list team-tabs bold">
                <li>
                    <button type="button" class="team-tabs__btn" data-tab="#team-1">Марта</button>
                </li>
                <li>
                    <button type="button" class="team-tabs__btn" data-tab="#team-2">Анна</button>
                </li>
                <li>
                    <button type="button" class="team-tabs__btn" data-tab="#team-3">Павел</button>
                </li>
            </ul>
            <div class="team-slider swiper-container">
                <div class="swiper-wrapper">
                    <div class="swiper-slide teamtab" id="team-1">
                        <div class="team-slider__top">
                            <div class="team-slider__photo">
                                <img class="r-size" src="<?= get_image('team-photo.png') ?>" <?= role_image() ?> alt="">
                            </div>
                            <div class="team-slider__cont">
                                <div class="team-slider__title bold">Марта Филоненко</div>
                                <div class="team-slider__article">
                                    <p>
                                        Активный, позитивный и жизнерадостный педагог.
                                        Окончила Московский педагогический государственный университет по специальности
                                        “Преподаватель иностранного языка”. В совершенстве владеет английским
                                        и немецким языками, стажировалась в Великобритании и Германии. Считает,
                                        что самое главное в обучении английскому языку - это интересные,
                                        разнообразные уроки и опытный, влюбляющий в английский язык педагог.
                                    </p>
                                </div>
                                <ul class="r-list team-slider__list semibold">
                                    <li>Более 3-х лет опыта работы с детьми</li>
                                    <li>Обучила более 30 человек</li>
                                </ul>
                            </div>
                        </div>
                        <div class="team-slider__article-mob text-hidden">
                            <p>
                                Активный, позитивный и жизнерадостный педагог.
                                Окончила Московский педагогический государственный университет по специальности
                                “Преподаватель иностранного языка”. В совершенстве владеет английским
                                и немецким языками, стажировалась в Великобритании и Германии. Считает,
                                что самое главное в обучении английскому языку - это интересные,
                                разнообразные уроки и опытный, влюбляющий в английский язык педагог.
                            </p>
                            <div class="text-show text-show-w">
                                <span>Развернуть</span>
                            </div>
                        </div>
                        <div class="team-slider__bottom">
                            <div class="video-block video-block_min">
                                <img class="r-size" src="<?= get_image('team-video.jpg') ?>" <?= role_image() ?> alt="">
                            </div>
                            <div class="team-slider__video-article">
                                Смотреть <br>видео-приветствие<br> от преподавателя
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide teamtab" id="team-2">
                        <div class="team-slider__top">
                            <div class="team-slider__photo">
                                <img class="r-size" src="<?= get_image('team-photo.png') ?>" <?= role_image() ?> alt="">
                            </div>
                            <div class="team-slider__cont">
                                <div class="team-slider__title">Марта Филоненко</div>
                                <div class="team-slider__article">
                                    <p>
                                        Активный, позитивный и жизнерадостный педагог.
                                        Окончила Московский педагогический государственный университет по специальности
                                        “Преподаватель иностранного языка”. В совершенстве владеет английским
                                        и немецким языками, стажировалась в Великобритании и Германии. Считает,
                                        что самое главное в обучении английскому языку - это интересные,
                                        разнообразные уроки и опытный, влюбляющий в английский язык педагог.
                                    </p>
                                </div>
                                <ul class="r-list team-slider__list">
                                    <li>Более 3-х лет опыта работы с детьми</li>
                                    <li>Обучила более 30 человек</li>
                                </ul>
                            </div>
                        </div>
                        <div class="team-slider__article-mob text-hidden">
                            <p>
                                Активный, позитивный и жизнерадостный педагог.
                                Окончила Московский педагогический государственный университет по специальности
                                “Преподаватель иностранного языка”. В совершенстве владеет английским
                                и немецким языками, стажировалась в Великобритании и Германии. Считает,
                                что самое главное в обучении английскому языку - это интересные,
                                разнообразные уроки и опытный, влюбляющий в английский язык педагог.
                            </p>
                            <div class="text-show text-show-w">
                                <span>Развернуть</span>
                            </div>
                        </div>
                        <div class="team-slider__bottom">
                            <div class="video-block video-block_min">
                                <img class="r-size" src="<?= get_image('team-video.jpg') ?>" <?= role_image() ?> alt="">
                            </div>
                            <div class="team-slider__video-article">
                                Смотреть <br>видео-приветствие <br>от преподавателя
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide teamtab" id="team-3">
                        <div class="team-slider__top">
                            <div class="team-slider__photo">
                                <img class="r-size" src="<?= get_image('team-photo.png') ?>" <?= role_image() ?> alt="">
                            </div>
                            <div class="team-slider__cont">
                                <div class="team-slider__title">Марта Филоненко</div>
                                <div class="team-slider__article">
                                    <p>
                                        Активный, позитивный и жизнерадостный педагог.
                                        Окончила Московский педагогический государственный университет по специальности
                                        “Преподаватель иностранного языка”. В совершенстве владеет английским
                                        и немецким языками, стажировалась в Великобритании и Германии. Считает,
                                        что самое главное в обучении английскому языку - это интересные,
                                        разнообразные уроки и опытный, влюбляющий в английский язык педагог.
                                    </p>
                                </div>
                                <ul class="r-list team-slider__list">
                                    <li>Более 3-х лет опыта работы с детьми</li>
                                    <li>Обучила более 30 человек</li>
                                </ul>
                            </div>
                        </div>
                        <div class="team-slider__article-mob text-hidden">
                            <p>
                                Активный, позитивный и жизнерадостный педагог.
                                Окончила Московский педагогический государственный университет по специальности
                                “Преподаватель иностранного языка”. В совершенстве владеет английским
                                и немецким языками, стажировалась в Великобритании и Германии. Считает,
                                что самое главное в обучении английскому языку - это интересные,
                                разнообразные уроки и опытный, влюбляющий в английский язык педагог.
                            </p>
                            <div class="text-show text-show-w">
                                <span>Развернуть</span>
                            </div>
                        </div>
                        <div class="team-slider__bottom">
                            <div class="video-block video-block_min">
                                <img class="r-size" src="<?= get_image('team-video.jpg') ?>" <?= role_image() ?> alt="">
                            </div>
                            <div class="team-slider__video-article">
                                Смотреть <br>видео-приветствие <br>от преподавателя
                            </div>
                        </div>
                    </div>
                </div>

                <div class="swiper-button-next"></div>
                <div class="swiper-button-prev"></div>
            </div>
        </div>
    </div>

    <div class="advantages">
        <div class="cont-subtitle semibold">
            В зависимости от возраста и уровня ребенка, вы можете выбрать
        </div>
        <h2 class="h2 advantages__title">
            Школа SAY YES! существует в оффлайн формате в Москве и 4 раза становилась победителем премии
            «Эксперт Года» от SchoolRate
        </h2>
        <div class="container">
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
                <button type="button" class="r-button button-accent adv-btn js-button">Записаться на бесплатный урок</button>
            </div>
        </div>
    </div>

    <div class="reviews container">
        <h2 class="h2 reviews__title">За 7 лет работы обучили 4.5 тысяч студентов и получили более 300 отзывов</h2>
        <div class="reviews-slider-wrap">
            <div class="reviews-slider swiper-container">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="reviews-slider__title semibold">На Zoon</div>
                        <ul class="r-list reviews-slider__list">
                            <li>
                                <img class="r-size" src="<?= get_image('rev-1.png') ?>" <?= role_image() ?> alt="">
                            </li>
                            <li>
                                <img class="r-size" src="<?= get_image('rev-2.png') ?>" <?= role_image() ?> alt="">
                            </li>
                            <li>
                                <img class="r-size" src="<?= get_image('rev-3.png') ?>" <?= role_image() ?> alt="">
                            </li>
                            <li>
                                <img class="r-size" src="<?= get_image('rev-4.png') ?>" <?= role_image() ?> alt="">
                            </li>
                            <li>
                                <img class="r-size" src="<?= get_image('rev-5.png') ?>" <?= role_image() ?> alt="">
                            </li>
                        </ul>
                        <a class="reviews-slider__link" href="#">Читать все отзывы</a>
                    </div>
                </div>
            </div>
            <div class="swiper-button-next reviews-slider-next"></div>
            <div class="swiper-button-prev reviews-slider-prev"></div>
        </div>
        <?php
        $reviews = [
            //             [
            //                 'header' => 'Ольга',
            //                 'foto' => get_image('rev-photo.png'),
            //                 'subheader' => 'Мама ученицы Кати, 10лет',
            //                 'profile' => '',
            //                 'text' => 'Всем привет! Моя дочь Катюша в 4 классе, где-то полгода назад мы начали заниматься
            // в языковой школе Say Yes. Изначально я относилась немного скептически к идее
            // изучения английского по скайпу, потому что удержать внимание ребенка довольно
            // сложно, особенно через монитор компьютера. Но пока что все удается, Катюша
            // занимается с удовольствием - за что отдельное спасибо нашему преподавателю
            // Наталье Курселевой, а самое главное - ребенок заговорил. Я вижу, что она не боится
            // совершать ошибок, и формировать фразы у нее получается довольно легко и
            // непринужденно. И в целом очень прикольно наблюдать, как твой ребенок начинает
            // болтать по-английски:) Поэтому я очень довольна результатом, всем рекомендую
            // языковую школу Say Yes!',
            //                 'video_link' => 'https://youtu.be/HVXOMGVgHfQ',
            //                 'video_preview' => 'http://i3.ytimg.com/vi/HVXOMGVgHfQ/hqdefault.jpg',
            //             ],
            [
                'header' => 'Ольга',
                'foto' => get_image('inst2.jpg'),
                'subheader' => 'Мама ученика Степы, 6 лет',
                'profile' => 'https://www.instagram.com/olia_pi/',
                'text' => 'Всем привет! Меня зовут Оля, а это мой сын Стёпа, он занимается английском по скайп в
школе SAY YES уже четвёртый месяц.
Благодаря интересным занятиям, Стёпа с лёгкостью выдерживает занятия по 50 минут два раза
в неделю и уже прошёл целый учебник!
На занятиях Стёпа учится в первую очередь говорить на английском, это было моё основное
пожелание к занятиям. Но также, наш преподаватель Полина уделяет время чтению и письму
на английском.
Результат вижу в процессе выполнения домашнего задания - Стёпа делает всё быстро,
запомнил много новых слов, стал понимать английский на слух. А ещё я заметила, что он стал
чаще узнавать слова в песнях на английском)
Конечно, говорить ему пока сложновато, но мы точно движемся в правильном направлении!',
                'video_link' => 'https://youtu.be/WaAVxYmBCBA',
                'video_preview' => 'http://i3.ytimg.com/vi/WaAVxYmBCBA/hqdefault.jpg',
            ],
            [
                'header' => 'Ксения',
                'foto' => get_image('inst3.jpg'),
                'subheader' => 'Мама учеников Льва, 10 лет и Ланы, 5 лет',
                'profile' => 'https://www.instagram.com/p/B9MMZ-hILEh/?igshid=c1xjyk7c1yei',
                'text' => 'В школе Say Yes у меня учатся двое детей. Первопроходцем был десятилетний сын.Я долго выбирала для него курсы. Главной задачей было – заинтересовать ребёнка,
так как он испытывал сильную антипатию к языку. При слове «английский» сын
заявлял, что готов работать дворником, лишь бы не учить ненавистный ему
предмет.
Перепробовав много мест, решила взять пробный урок в Say Yes.
Меня впечатлило, что перед первым занятием менеджеры очень подробно
расспрашивали про увлечения сына и его жизнь. Все полученные данные передали
учителю – Полине, которая настолько сумела увлечь сына за пробные 30 минут, что
после него мой непоседливый ребёнок заявил о желании учиться и даже выполнять
домашние задания! А уже через пару уроков он стал употреблять английские слова в
обиходе.
Конечно, такой успех у брата не прошёл мимо моей пятилетней дочки. Теперь и она
с удовольствием познаёт азы английского языка вместе с нашей замечательной
Полиной Орликовой!',
                'video_link' => 'https://youtu.be/voQ5bweTHwU',
                'video_preview' => 'http://i3.ytimg.com/vi/voQ5bweTHwU/hqdefault.jpg',
            ],
            [
                'header' => 'Ирина',
                'foto' => get_image('inst4.jpg'),
                'subheader' => 'Мама ученицы Маши, 12 лет',
                'profile' => 'https://www.instagram.com/ir.parshina/?igshid=ibabxlgtyc6r',
                'text' => 'Меня зовут Ирина, моя дочь Маша занимается в школе Say Yes. В этом году мы решили
заняться английским дополнительно, потому что появились проблемы в школе. Я бы рада
помочь дочери, но к своему стыду я ни слова не знаю по-английски. Огромное спасибо хочу
сказать нашему преподавателю - Марии Наливайкиной. Я не знаю, как ей это удается, ведь
возраст сложный, эти барышни в 12 лет со своим внутренним протестом и заниматься не хотят,
но тем не менее я вижу результат, и что самое главное, Маша сама делает домашнее задание и
даже с удовольствием, и в школе стало все получаться. Спасибо огромное школе Say Yes!',
                'video_link' => 'https://youtu.be/thqTEQRgSjg',
                'video_preview' => 'http://i3.ytimg.com/vi/thqTEQRgSjg/hqdefault.jpg',
            ],
            [
                'header' => 'Екатерина',
                'foto' => get_image('inst5.jpg'),
                'subheader' => 'Мама ученицы Софьи, 5лет',
                'profile' => 'https://www.instagram.com/ekaterina.dzhurinskaya/',
                'text' => 'Моей дочке Софье 5 лет, и она учится в школе SAY YES по скайпу. Занятия очень
интерактивные. Это и теория в легкой форме, и игры, и песни, и очень такая
душевная подача информации. Мы учимся относительно недавно, но успехи уже
налицо: это и очень легкое запоминание всех конструкций и пополненный
словарный запас, и это всегда ожидание новых уроков. Как мама я одно могу
сказать – это дорогого стоит заинтересовать маленького ребенка и держать его
внимание на протяжении урока. Поэтому я просто огромную благодарность
высказываю школе SAY YES за их подход индивидуальный и за те знания,
которые они дают.
Если вы ищите школу дистанционного обучения для своего ребенка, то я вам очень
рекомендую обратить внимания на эту школу! Всего вам самого лучшего и
выбирайте лучших!',
                'video_link' => 'https://youtu.be/MgGH2raaSZo',
                'video_preview' => 'http://i3.ytimg.com/vi/MgGH2raaSZo/hqdefault.jpg',
            ],
            [
                'header' => 'Юлия',
                'foto' => get_image('inst6.jpg'),
                'subheader' => 'Мама ученка Миши, 7лет',
                'profile' => 'https://www.instagram.com/shkrediuliia/?igshid=1jovqom392njq',
                'text' => 'Мы искали онлайн школу английского языка довольно долго. Проходили пробные
уроки и видели, что ни интереса, ни любопытства у ребенка этот процесс не
вызывает, скорее напряжение. Подумывала уже отложить эту идею. Случайно в
ленте новостей увидела рекламу школы Say Yes и оставила заявку.
Сразу увидела приятное отличие при общении с менеджером. Данное отличие в том,
что первым делом, прежде чем рассказать, какая крутая школа и почему нужно
выбрать именно ее, Виктория, уточнила имя сына, чем он увлекается, что ему
нравится, какие персонажи мультфильмов, комиксов он любит. Такой подход, думаю
будет эмоционально гораздо более приятен, тем более что цены плюс минус везде
одинаковые.
Прошли пробный урок с нашим преподавателем, и сын сразу сказал, что ему
нравиться Полина (преподаватель). Возможно, еще и потому, что она очень
симпатичная девушка))
В уроке очень хорошо использовали те приоритеты, которые выяснили заранее.
Например, сын сейчас очень любит Микки Мауса.
Мне тоже сразу отозвалась ее легкая, приятная манера общения, там, где нужно
артистичная, где нужно спокойная. Я вижу и профессионализм в преподавании
языка и чуткое искренние отношение к ребенку.
Мы занимаемся 2 раза в неделю, и сын ждет занятий, что для него не свойственно.
Ему стало интересно учить язык, новые слова, говорить что-то на английском дома.
Мы очень рады и благодарим всех причастных к нашему счастливому обучению!',
                'video_link' => 'https://youtu.be/Avef-4osuMg',
                'video_preview' => 'http://i3.ytimg.com/vi/Avef-4osuMg/hqdefault.jpg',
            ],
        ];
        ?>
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
                                                <img class="r-size" src="<?= get_image('inst-min.svg') ?>" <?= role_image() ?> alt="">
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
                                <a data-fancybox target="_blank" href="<?= $item['video_link'] ?>" class="video-block">
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
            <h2 class="h2 about-progress__title">Единственная онлайн-школа, где снимают отчеты о прогрессе учеников на видео </h2>
            <div class="about-progress__article">
                Посмотрите не просто отзывы наших юных студентов, а то, как они говорят на английском
            </div>
        </div>
        <div class="about-progress__column">
            <a data-fancybox href="https://youtu.be/lSL9KuIwc_0" target="_blank" class="video-block about-progress__video">
                <img class="r-size" src="<?= get_image('video-prev.jpg') ?>" <?= role_image() ?> alt="">
            </a>
        </div>
    </div>
    <style>
        .section-bg._price-section {
            background-image: url('<?= get_image('price-section-bg.png') ?>');
        }
    </style>
    <div class="price-section">
        <div class="section-bg _price-section"></div>
        <div class="container price-section-container">
            <h2 class="h2">Стоимость индивидуальных уроков </h2>
            <p class="price-section-subtitle">Вы можете выбрать продолжительность обучения в зависимости от возраста ребенка </p>
            <ul class="r-list">
                <li class="price-section-card">
                    <div class="price-section-card-header">25 минут</div>
                    <div class="price-section-card-subheader">рекомендуем от 5 лет</div>
                    <div class="price-section-card-price">от 500 руб/занятие</div>
                    <button class="r-button button-accent button-form js-button" type="button">Записаться</button>
                </li>
                <li class="price-section-card">
                    <div class="price-section-card-header">50 минут</div>
                    <div class="price-section-card-subheader">рекомендуем от 7 лет</div>
                    <div class="price-section-card-price">от 815 руб/занятие</div>
                    <button class="r-button button-accent button-form js-button" type="button">Записаться</button>
                </li>
            </ul>
        </div>
    </div>

    <div class="about-lessons">
        <div class="container">
            <h2 class="h2 about-lessons__title">В пакет уроков также включены:</h2>
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
                    </div>
                    <div class="lessons-info__img">
                        <img class="r-size" src="<?= get_image('lesson-img.jpg') ?>" <?= role_image() ?> alt="">
                    </div>
                </li>
                <li>
                    <div class="lessons-info__cont">
                        <div class="lessons-info__title bold">3. Онлайн спикинг клубы </div>
                        <div class="lessons-info__article">
                            Групповые занятия с ровесниками, которые проходят по отдельной программе,
                            погрузят вашего ребенка в англоговорящую среду и улучшат разговорный навык.
                        </div>
                    </div>
                    <div class="lessons-info__img">
                        <img class="r-size" src="<?= get_image('lesson-img.jpg') ?>" <?= role_image() ?> alt="">
                    </div>
                </li>
            </ul>
        </div>
    </div>

    <?php
    $questions = [
        [
            'header' => 'Сколько стоит обучение?',
            'text' => 'Стоимость обучения зависит от продолжительности урока (25 или 50 минут) и от количества
приобретаемых уроков: чем больше уроков в приобретенном пакете, тем выгоднее. Вы
можете приобрести 4, 8, 16 или 32 урока. Стоимость начинается от 500 рублей за урок. Более
подробную информацию вам предоставит менеджер.',
        ],
        [
            'header' => 'Как начать заниматься?',
            'text' => 'После того, как вы оставите заявку на пробный урок, с вами свяжется наш менеджер.
Менеджер уточнит у вас детали, необходимые для начала обучения и ответит на ваши
вопросы. Далее, мы подберем преподавателя и проведем для вашего ребенка пробное
занятие. После урока с вами свяжется менеджер и , если вам понравится преподаватель и
пробный урок, вы сможете обсудить график занятий, оплатить обучение и начать заниматься.',
        ],
        [
            'header' => 'Могу ли я выбрать преподавателя для ребенка?',
            'text' => 'Во время консультации по телефону наш менеджер детально расспросит вас о вашем ребенке,
его знаниях, увлечениях, характере и особенностях, также
мы обязательно учтём ваши пожелания к преподавателю. В случае необходимости, вы можете
в любой момент запросить замену преподавателя и мы снова организуем пробный урок для
вас.',
        ],
        [
            'header' => 'Где проходят занятия? Нужно ли мне что-то устанавливать для уроков?',
            'text' => 'Вам нужен только компьютер и доступ в интернет.
Обучение в нашей школе проходит на нашей собственной онлайн-платформе. У вас будет
доступ в Личный кабинет, где будет отображена вся информация по оплатам, пройденным и
предстоящим урокам, а также отчет о прогрессе вашего ребенка.
Все материалы к урокам мы предоставляем, они будут находиться внутри классной комнаты, в
которой проходят онлайн-уроки.',
        ],
        [
            'header' => 'Возможно ли заниматься с телефона?',
            'text' => 'В классной комнате нашей платформы дети видят материал урока, а также видео себя и
учителя. Размеры экрана телефона недостаточны, чтобы ребенок отчетливо распознавал
артикуляцию учителя, его мимику и четко видел, что отображено на обучающих материалах.
Поэтому для эффективных занятий вам будет необходим компьютер, ноутбук или планшет.',
        ],
        [
            'header' => 'Нужно ли родителю присутствовать на уроках?',
            'text' => 'Мы рекомендуем родителю присутствовать на пробном уроке и на нескольких первых
полноценных уроках, пока ребенок не привыкнет к формату и учителю. Если вашему ребенку
5-6 лет, особенно важно поддержать его пробном уроке, чтобы он не растерялся перед
незнакомым преподавателем.',
        ],
        [
            'header' => 'Как я пойму, что у ребёнка есть прогресс, если я не говорю по-английски?',
            'text' => 'Не реже, чем раз в месяц преподаватель готовит отчёт об успехах вашего ребёнка, который вы
сможете видеть в Личном кабинете в нашей онлайн-платформе. Также, мы можем предложить
вам снимать вашего ребёнка на видео, раз в месяц, чтобы прогресс было легче отследить.',
        ],
        [
            'header' => 'Есть ли у вас какие-либо скидки и акции?',
            'text' => 'Да, есть. Мы дарим вам 2 урока в подарок за каждого нового студента, который пришёл по
вашей рекомендации.',
        ],
    ];
    ?>
    <style>
        .section-bg._accordeon-section {
            background-image: url('<?= get_image('accordeon-section-bg.png') ?>');
        }
    </style>
    <div class="accordeon-section">
        <div class="section-bg _accordeon-section"></div>
        <div class="container accordeon-section-container">
            <div class="accordeon-section-row">
                <div class="accordeon-section-img">
                    <img class="r-size" src="<?= get_image('accordeon-image.png') ?>" <?= role_image() ?> alt="">
                </div>
                <div class="accordeon-section-content">
                    <div class="accordeon-section-header">
                        <h2 class="h2">На часто задаваемые вопросы отвечает <span><span>Вера Шаталова,</span> <span>руководитель школы SAY YES!</span></span></h2>
                        <img class="r-size accordeon-image-mobile" src="<?= get_image('accordeon-image-mobile.png') ?>" <?= role_image() ?> alt="">
                    </div>
                    <ul class="r-list accordeon">
                        <?php foreach ($questions as $item) { ?>
                            <li class="accordeon-card">
                                <div class="accordeon-card-header">
                                    <span><?= $item['header'] ?></span>
                                    <img src="<?= get_image('accordeon-down.svg') ?>" <?= role_image() ?> alt="">
                                </div>
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
                <h2 class="h2 form-main-header">Узнайте уровень английского у вашего ребенка на пробном бесплатном уроке, а также</h2>
                <ul class="r-list">
                    <li>
                        <div>
                            <div class="circle">1</div>
                        </div>
                        <span>Познакомитесь с методикой и программой обучения</span>
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
                <img class="cat-education" src="<?= get_image('cat-education.png') ?>" <?= role_image() ?> alt="">
                <div class="cat-dialog">
                    <img src="<?= get_image('cat.png') ?>" <?= role_image() ?> alt="">
                    <div class="dialog _mobile_position-left">Урок проходит на онлайн-платформе в удобное вам время</div>
                </div>
                <div class="form-main-row">
                    <div class="form-main-col _has_input">
                        <input type="text" class="input" placeholder="Имя" name="name">
                    </div>
                    <div class="form-main-col _has_input">
                        <input type="tel" class="input" placeholder="Телефон" name="phone">
                    </div>
                    <div class="form-main-col _has_button">
                        <button type="submit" class="r-button button-accent button-form">
                            <span>Записаться на бесплатный урок</span>
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>

    <div class="contact container">
        <h2 class="h2 contact__title">Контакты</h2>
        <div class="contact__item">
            <div class="contact__column-left">
                <ul class="r-list contact__list">
                    <li>
                        <div class="contact__article semibold">
                            Если вы хотите узнать больше о нашей школе, просто позвоните нам!
                        </div>
                    </li>
                    <li>
                        <a class="recall" href="tel:84953107214">8-495-310-72-14</a>
                    </li>
                    <li>
                        <a class="whatsup-link bold" href="#">Написать в WhatsApp</a>
                    </li>
                </ul>
            </div>
            <div class="contact__column-right">
                <ul class="r-list contact__phones">
                    <li>
                        <div class="social-screen">
                            <img class="r-size" src="<?= get_image('phone-1.png') ?>" <?= role_image() ?> alt="">
                        </div>
                        <a class="subscription-social subscription-social_inst" href="#">Подписаться на Instagram</a>
                    </li>
                    <li>
                        <div class="social-screen">
                            <img class="r-size" src="<?= get_image('phone-2.png') ?>" <?= role_image() ?> alt="">
                        </div>
                        <a class="subscription-social subscription-social_facebook" href="#">Подписаться в Facebook</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>

    <div class="footer">
        <div class="section-bg"></div>
        <div class="footer-container container">
            <div class="footer__top">
                <div class="footer__column">
                    <div class="footer__logo">
                        <img class="r-size" src="<?= get_image('logo.svg') ?>" <?= role_image() ?> alt="">
                    </div>
                    <ul class="r-list footer__contact">
                        <li>
                            <a class="email-link" href="mailto:info@sayes.ru">info@sayes.ru</a>
                        </li>
                        <li>
                            <span class="adress-info">м. Павелецкая, ул. Кожевническая, д. 14к1ст2</span>
                        </li>
                        <li>
                            <span class="adress-info">м. Белорусская, ул. Б. Грузинская, д. 61</span>
                        </li>
                    </ul>
                </div>
                <div class="footer__column">
                    <div class="footer__title semibold">О Компании</div>
                    <ul class="r-list footer__list">
                        <li><a href="#">Миссия и ценности</a></li>
                        <li><a href="#">Методика</a></li>
                        <li><a href="#">Преподаватели</a></li>
                        <li><a href="#">Прогресс студентов</a></li>
                        <li><a href="#">Отзывы</a></li>
                        <li><a href="#">Лицензия и награды</a></li>
                        <li><a href="#">Контакты</a></li>
                    </ul>
                </div>
                <div class="footer__column">
                    <div class="footer__title semibold">Курсы и программы</div>
                    <ul class="r-list footer__list">
                        <li><a href="#">Курсы для взрослых</a></li>
                        <li><a href="#">Индивидуальное обучение</a></li>
                        <li><a href="#">Обучение по Skype</a></li>
                        <li><a href="#">Корпоративное обучение</a></li>
                        <li><a href="#">Стоимость</a></li>
                        <li><a href="#">Акции и скидки</a></li>
                    </ul>
                </div>
                <div class="footer__column">
                    <div class="footer__title semibold">Полезное</div>
                    <ul class="r-list footer__list">
                        <li><a href="#">Разговорный клуб</a></li>
                        <li><a href="#">Вебинары</a></li>
                        <li><a href="#">Онлайн-тест</a></li>
                        <li><a href="#">Блог</a></li>
                    </ul>
                </div>
            </div>
            <div class="footer__bottom">
                <ul class="r-list footer__lisense">
                    <li><a href="#">Лицензия ДО Правительства Москвы №036801</a></li>
                    <li><a href="#">Результаты проведения СОУТ</a></li>
                </ul>
                <div class="footer__copy">© 2013 - 2020 SAY YES!</div>
                <ul class="r-list footer__privacy">
                    <li><a href="#">Политика конфиденциальности</a></li>
                    <li><a href="#">Договор-оферта</a></li>
                </ul>
            </div>
        </div>
    </div>

    <div id="js-modal-form" class="modal-container">
        <div class="modal-wrapper">
            <div class="modal modal_loan">
                <form class="modal__inner form-loan js-form">
                    <button id="js-close-modal-form" class="modal-close" type="button"></button>
                    <div class="modal__title bold">Оставьте заявку</div>
                    <div class="modal__article">
                        В течение 30 минут с вами свяжется менеджер и запишет вас на бесплатный урок, в удобное для вас время
                    </div>
                    <ul class="r-list modal__list">
                        <li>
                            <input class="inp" type="text" placeholder="Имя" name="name">
                        </li>
                        <li>
                            <input class="inp" type="tel" placeholder="Телефон" name="phone">
                        </li>
                        <li>
                            <button class="form-loan__btn button-accent r-button" type="submit">Записаться на бесплатный урок</button>
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
        var formElement = document.querySelectorAll('form');

        $('input[type=tel]').mask('+7 (999) 999-9999');

        document.querySelectorAll('form').forEach(function(form) {
            form.addEventListener('submit', function(event) {
                event.preventDefault();

                var name = this.elements.name.value;
                var phone = this.elements.phone.value;

                if (!name || !phone) {
                    return false;
                }

                var data = {
                    type: 'Заявка на пробный урок',
                    name: name,
                    phone: phone,
                };

                ym(YANDEX_METRIKA_COUNTER, 'reachGoal', 'zayavka');
                gtag('event', 'click', {
                    event_category: 'zayavka'
                });
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
            gtag('event', 'click', {
                event_category: 'click'
            });
            fbq('track', 'InitiateCheckout');

            return true;
        });

        /******************************************* */

        $('[data-fancybox]').fancybox({
            youtube: {
                controls: 0,
                showinfo: 0
            },
            vimeo: {
                color: 'f00'
            }
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

        function teamTabMobile() {
            $('.team-tabs .team-tabs__btn').click(function() {
                $('.team-tabs__btn').removeClass('is-active');
                $(this).addClass('is-active');
                var tab = $(this).attr('data-tab');
                $('.teamtab').not(tab).css({
                    display: 'none'
                });
                $(tab).fadeIn(400);
            });
            $('.team-tabs li:first-child .team-tabs__btn').click();
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

        var teamSlider = undefined;

        function initSwiper() {
            var screenWidth = $(window).width();
            if (screenWidth > 700 && teamSlider == undefined) {
                console.log(teamSlider);
                if (typeof teamSlider !== 'undefined') {
                    teamSlider.destroy();
                }
                teamSlider = new Swiper('.team-slider', {
                    slidesPerView: 1,
                    spaceBetween: 50,
                    loop: true,
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
            } else if (screenWidth < 701) {
                if (typeof teamSlider !== 'undefined') {
                    teamSlider.destroy();
                }
                // teamSlider = undefined;
                teamTabMobile();
            }
        }
        initSwiper();
        $(window).on('resize', initSwiper);

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

        var $modalForm = $('#js-modal-form');
        var $modalSuccess = $('#js-modal-success');

        $('.js-button').on('click', function() {
            console.log(1)
            $modalForm.fadeIn();
        });
        $('.js-button').on('click', function() {
            console.log(2)
            $modalForm.fadeIn();
        });

        $('#js-close-modal-form').on('click', function() {
            $modalForm.fadeOut();
        });
        $('#js-close-modal-success').on('click', function() {
            $modalSuccess.fadeOut();
        });
    </script>
</body>

</html>