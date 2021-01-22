<?php
function get_image($name)
{
    return 'https://static.sayes.ru/images/kids/' . $name;
}
function role_image()
{
    return 'aria-hidden="true" aria-role="presentation" draggable="false"';
}
function get_tel_for_href($tel)
{
    return 'tel:' . preg_replace("/[^+0-9]/", '', $tel);
}
function get_email_for_href($email)
{
    return 'mailto:' . $email;
}

$info = [
    'tel' => '+7 499 650-53-47',
    'whatsapp' => 'https://api.whatsapp.com/send?phone=79267371137',
    'fb' => 'https://www.facebook.com/YesISpeakEnglishSchool',
    'in' => 'https://www.instagram.com/sayyes2english/',
    'email' => 'info@sayes.ru',
    'addesses' => [
        'м. Павелецкая, ул. Кожевническая, д. 14к1ст2',
        'м. Белорусская, ул. Б. Грузинская, д. 61'
    ],
    'pc' => [
        'text' => 'Политика конфиденциальности',
        'link' => 'https://sayes.ru/politika-konfidentsialnosti/'
    ],
    'oferta' => [
        'text' => 'Договор-оферта',
        'link' => 'https://sayes.ru/dogovor-oferta/'
    ],
    'license' => [
        'text' => 'Лицензия ДО Правительства Москвы №036801',
        'link' => 'https://sayes.ru/licenzii/'
    ],
];

$footer = [
    [
        'header' => 'О Компании',
        'links' => [
            [
                'text' => 'Миссия и ценности',
                'href' => 'https://sayes.ru/missiya-i-tsennosti/',
            ],
            [
                'text' => 'Методика',
                'href' => 'https://sayes.ru/metodika/',
            ],
            [
                'text' => 'Преподаватели',
                'href' => 'https://sayes.ru/prepodavateli/',
            ],
            [
                'text' => 'Прогресс студентов',
                'href' => 'https://sayes.ru/progress-studentov/',
            ],
            [
                'text' => 'Отзывы',
                'href' => 'https://sayes.ru/otzyvy-sayes/',
            ],
            [
                'text' => 'Лицензия и награды',
                'href' => 'https://sayes.ru/licenzii/',
            ],
            [
                'text' => 'Контакты',
                'href' => 'https://sayes.ru/kontakti/',
            ],
        ]
    ],
    [
        'header' => 'Курсы и программы',
        'links' => [
            [
                'text' => 'Курсы для взрослых',
                'href' => 'https://sayes.ru/kursi-angliyskogo-dlya-vzroslikh/'
            ],
            [
                'text' => 'Курсы для детей',
                'href' => 'https://sayes.ru/kursi-angliyskogo-dlya-detei/'
            ],
            [
                'text' => 'Индивидуальное обучение',
                'href' => 'https://sayes.ru/kursi/individualnoe-obuchenie-angliyskomu/'
            ],
            [
                'text' => 'Обучение по Skype',
                'href' => 'https://sayes.ru/kursi/obuchenie-po-skype/'
            ],
            [
                'text' => 'Корпоративное обучение',
                'href' => 'https://sayes.ru/korporativniy-angliyskiy/'
            ],
            [
                'text' => 'Стоимость',
                'href' => 'https://sayes.ru/kursy-i-ceny/'
            ],
            [
                'text' => 'Акции и скидки',
                'href' => 'https://sayes.ru/akcii-i-skidki/'
            ],
        ]
    ],
    [
        'header' => 'Полезное',
        'links' => [
            [
                'text' => 'Разговорный клуб',
                'href' => 'https://sayes.ru/speaking-club/'
            ],
            [
                'text' => 'Вебинары',
                'href' => 'https://sayes.ru/vebinari/'
            ],
            [
                'text' => 'Наш Instagram',
                'href' => 'https://www.instagram.com/sayyes2english'
            ],
            [
                'text' => 'Онлайн-тест',
                'href' => 'https://sayes.ru/online-test/'
            ],
            [
                'text' => 'Блог',
                'href' => 'https://sayes.ru/blog/'
            ],
        ]
    ]
];


$questions = [
    [
        'header' => 'Сколько стоит обучение?',
        'text' => 'Стоимость обучения зависит от продолжительности урока (25 или 50 минут) и от количества приобретаемых уроков: чем больше уроков в приобретенном пакете, тем выгоднее. Вы можете приобрести 4, 8, 16 или 32 урока. Стоимость начинается от 500 рублей за урок. Более подробную информацию вам предоставит менеджер.',
    ],
    [
        'header' => 'Как начать заниматься?',
        'text' => 'После того, как вы оставите заявку на пробный урок, с вами свяжется наш менеджер. Менеджер уточнит у вас детали, необходимые для начала обучения и ответит на ваши вопросы. Далее, мы подберем преподавателя и проведем для вашего ребенка пробное занятие. После урока с вами свяжется менеджер и , если вам понравится преподаватель и пробный урок, вы сможете обсудить график занятий, оплатить обучение и начать заниматься.',
    ],
    [
        'header' => 'Могу ли я выбрать преподавателя для ребенка?',
        'text' => 'Во время консультации по телефону наш менеджер детально расспросит вас о вашем ребенке, его знаниях, увлечениях, характере и особенностях, также мы обязательно учтём ваши пожелания к преподавателю. В случае необходимости, вы можете в любой момент запросить замену преподавателя и мы снова организуем пробный урок для вас.',
    ],
    [
        'header' => 'Где проходят занятия? Нужно ли мне что-то устанавливать для уроков?',
        'text' => 'Вам нужен только компьютер и доступ в интернет. Обучение в нашей школе проходит на нашей собственной онлайн-платформе. У вас будет доступ в Личный кабинет, где будет отображена вся информация по оплатам, пройденным и предстоящим урокам, а также отчет о прогрессе вашего ребенка. Все материалы к урокам мы предоставляем, они будут находиться внутри классной комнаты, в которой проходят онлайн-уроки.',
    ],
    [
        'header' => 'Возможно ли заниматься с телефона?',
        'text' => 'В классной комнате нашей платформы дети видят материал урока, а также видео себя и учителя. Размеры экрана телефона недостаточны, чтобы ребенок отчетливо распознавал артикуляцию учителя, его мимику и четко видел, что отображено на обучающих материалах. Поэтому для эффективных занятий вам будет необходим компьютер, ноутбук или планшет.',
    ],
    [
        'header' => 'Нужно ли родителю присутствовать на уроках?',
        'text' => 'Мы рекомендуем родителю присутствовать на пробном уроке и на нескольких первых полноценных уроках, пока ребенок не привыкнет к формату и учителю. Если вашему ребенку 5-6 лет, особенно важно поддержать его пробном уроке, чтобы он не растерялся перед незнакомым преподавателем.',
    ],
    [
        'header' => 'Как я пойму, что у ребёнка есть прогресс, если я не говорю по-английски?',
        'text' => 'Не реже, чем раз в месяц преподаватель готовит отчёт об успехах вашего ребёнка, который вы сможете видеть в Личном кабинете в нашей онлайн-платформе. Также, мы можем предложить вам снимать вашего ребёнка на видео, раз в месяц, чтобы прогресс было легче отследить.',
    ],
    [
        'header' => 'Есть ли у вас какие-либо скидки и акции?',
        'text' => 'Да, есть. Мы дарим вам 2 урока в подарок за каждого нового студента, который пришёл по вашей рекомендации.',
    ],
];

$reviews = [
    [
        'header' => 'Ольга',
        'foto' => get_image('inst1.jpg'),
        'subheader' => 'Мама ученицы Кати, 10 лет',
        'profile' => 'https://www.facebook.com/OlgaBourto',
        'text' => 'Всем привет! Моя дочь Катюша в 4 классе, где-то полгода назад мы начали заниматься в языковой школе Say Yes. Изначально я относилась немного скептически к идее изучения английского по скайпу, потому что удержать внимание ребенка довольно сложно, особенно через монитор компьютера. Но пока что все удается, Катюша занимается с удовольствием - за что отдельное спасибо нашему преподавателю Наталье Курселевой, а самое главное - ребенок заговорил. Я вижу, что она не боится совершать ошибок, и формировать фразы у нее получается довольно легко и непринужденно. И в целом очень прикольно наблюдать, как твой ребенок начинает болтать по-английски:) Поэтому я очень довольна результатом, всем рекомендую языковую школу Say Yes!',
        'video_link' => 'https://youtu.be/SVVQZh647bg',
        'video_preview' => 'https://i3.ytimg.com/vi/SVVQZh647bg/mqdefault.jpg',
    ],
    [
        'header' => 'Ольга',
        'foto' => get_image('inst2.jpg'),
        'subheader' => 'Мама ученика Степы, 6 лет',
        'profile' => 'https://www.instagram.com/olia_pi/',
        'text' => 'Всем привет! Меня зовут Оля, а это мой сын Стёпа, он занимается английском по скайп в школе SAY&nbsp;YES уже четвёртый месяц. Благодаря интересным занятиям, Стёпа с лёгкостью выдерживает занятия по 50 минут два раза в неделю и уже прошёл целый учебник! На занятиях Стёпа учится в первую очередь говорить на английском, это было моё основное пожелание к занятиям. Но также, наш преподаватель Полина уделяет время чтению и письму на английском. Результат вижу в процессе выполнения домашнего задания - Стёпа делает всё быстро, запомнил много новых слов, стал понимать английский на слух. А ещё я заметила, что он стал чаще узнавать слова в песнях на английском) Конечно, говорить ему пока сложновато, но мы точно движемся в правильном направлении!',
        'video_link' => 'https://youtu.be/WaAVxYmBCBA',
        'video_preview' => 'https://i3.ytimg.com/vi/WaAVxYmBCBA/mqdefault.jpg',
    ],
    [
        'header' => 'Ксения',
        'foto' => get_image('inst3.jpg'),
        'subheader' => 'Мама учеников Льва, 10 лет и Ланы, 5 лет',
        'profile' => 'https://www.instagram.com/p/B9MMZ-hILEh/?igshid=c1xjyk7c1yei',
        'text' => 'В школе SAY&nbsp;YES у меня учатся двое детей. Первопроходцем был десятилетний сын.Я долго выбирала для него курсы. Главной задачей было – заинтересовать ребёнка, так как он испытывал сильную антипатию к языку. При слове «английский» сын заявлял, что готов работать дворником, лишь бы не учить ненавистный ему предмет. Перепробовав много мест, решила взять пробный урок в SAY&nbsp;YES. Меня впечатлило, что перед первым занятием менеджеры очень подробно расспрашивали про увлечения сына и его жизнь. Все полученные данные передали учителю – Полине, которая настолько сумела увлечь сына за пробные 30 минут, что после него мой непоседливый ребёнок заявил о желании учиться и даже выполнять домашние задания! А уже через пару уроков он стал употреблять английские слова в обиходе. Конечно, такой успех у брата не прошёл мимо моей пятилетней дочки. Теперь и она с удовольствием познаёт азы английского языка вместе с нашей замечательной Полиной Орликовой!',
        'video_link' => 'https://youtu.be/voQ5bweTHwU',
        'video_preview' => 'https://i3.ytimg.com/vi/voQ5bweTHwU/mqdefault.jpg',
    ],
    [
        'header' => 'Ирина',
        'foto' => get_image('inst4.jpg'),
        'subheader' => 'Мама ученицы Маши, 12 лет',
        'profile' => 'https://www.instagram.com/ir.parshina/?igshid=ibabxlgtyc6r',
        'text' => 'Меня зовут Ирина, моя дочь Маша занимается в школе SAY&nbsp;YES. В этом году мы решили заняться английским дополнительно, потому что появились проблемы в школе. Я бы рада помочь дочери, но к своему стыду я ни слова не знаю по-английски. Огромное спасибо хочу сказать нашему преподавателю - Марии Наливайкиной. Я не знаю, как ей это удается, ведь возраст сложный, эти барышни в 12 лет со своим внутренним протестом и заниматься не хотят, но тем не менее я вижу результат, и что самое главное, Маша сама делает домашнее задание и даже с удовольствием, и в школе стало все получаться. Спасибо огромное школе SAY&nbsp;YES!',
        'video_link' => 'https://youtu.be/thqTEQRgSjg',
        'video_preview' => 'https://i3.ytimg.com/vi/thqTEQRgSjg/mqdefault.jpg',
    ],
    [
        'header' => 'Екатерина',
        'foto' => get_image('inst5.jpg'),
        'subheader' => 'Мама ученицы Софьи, 5лет',
        'profile' => 'https://www.instagram.com/ekaterina.dzhurinskaya/',
        'text' => 'Моей дочке Софье 5 лет, и она учится в школе SAY&nbsp;YES по скайпу. Занятия очень интерактивные. Это и теория в легкой форме, и игры, и песни, и очень такая душевная подача информации. Мы учимся относительно недавно, но успехи уже налицо: это и очень легкое запоминание всех конструкций и пополненный словарный запас, и это всегда ожидание новых уроков. Как мама я одно могу сказать – это дорогого стоит заинтересовать маленького ребенка и держать его внимание на протяжении урока. Поэтому я просто огромную благодарность высказываю школе SAY&nbsp;YES за их подход индивидуальный и за те знания, которые они дают. Если вы ищите школу дистанционного обучения для своего ребенка, то я вам очень рекомендую обратить внимания на эту школу! Всего вам самого лучшего и выбирайте лучших!',
        'video_link' => 'https://youtu.be/MgGH2raaSZo',
        'video_preview' => 'https://i3.ytimg.com/vi/MgGH2raaSZo/mqdefault.jpg',
    ],
    [
        'header' => 'Юлия',
        'foto' => get_image('inst6.jpg'),
        'subheader' => 'Мама ученка Миши, 7лет',
        'profile' => 'https://www.instagram.com/shkrediuliia/?igshid=1jovqom392njq',
        'text' => 'Мы искали онлайн школу английского языка довольно долго. Проходили пробные уроки и видели, что ни интереса, ни любопытства у ребенка этот процесс не вызывает, скорее напряжение. Подумывала уже отложить эту идею. Случайно в ленте новостей увидела рекламу школы SAY&nbsp;YES и оставила заявку. Сразу увидела приятное отличие при общении с менеджером. Данное отличие в том, что первым делом, прежде чем рассказать, какая крутая школа и почему нужно выбрать именно ее, Виктория, уточнила имя сына, чем он увлекается, что ему нравится, какие персонажи мультфильмов, комиксов он любит. Такой подход, думаю будет эмоционально гораздо более приятен, тем более что цены плюс минус везде одинаковые. Прошли пробный урок с нашим преподавателем, и сын сразу сказал, что ему нравиться Полина (преподаватель). Возможно, еще и потому, что она очень симпатичная девушка)) В уроке очень хорошо использовали те приоритеты, которые выяснили заранее. Например, сын сейчас очень любит Микки Мауса. Мне тоже сразу отозвалась ее легкая, приятная манера общения, там, где нужно артистичная, где нужно спокойная. Я вижу и профессионализм в преподавании языка и чуткое искренние отношение к ребенку. Мы занимаемся 2 раза в неделю, и сын ждет занятий, что для него не свойственно. Ему стало интересно учить язык, новые слова, говорить что-то на английском дома. Мы очень рады и благодарим всех причастных к нашему счастливому обучению!',
        'video_link' => 'https://youtu.be/Avef-4osuMg',
        'video_preview' => 'https://i3.ytimg.com/vi/Avef-4osuMg/mqdefault.jpg',
    ],
];

$teachers = [
    [
        'name' => 'Валерия Илюкович',
        'video' => 'https://youtu.be/8GojnLNQxAA',
        'foto' => '10.png',
        'text' => 'Валерия — это верный друг, надёжный партнёр и мудрый наставник для юного студента. Уверена, что найти верный подход и построить доверительные отношения с ребёнком - залог эффективного обучения и блестящего результата в итоге. Изучает детскую психологию, коррекционную педагогику, особенности обучения детей с ОВЗ. Интересуется Арт-терапией в детском консультировании.',
        'features' => [
            'МСПИ (Московский социально-педагогический институт) Факультет: педагогики и психологии (английский язык)',
            'Опыт работы с детьми 7 лет',
            'Специалист по работе с детьми (центр раннего развития детей)',
        ],
    ],
    [
        'name' => 'Полина Орликова',
        'video' => 'https://youtu.be/bteFTXr0Sqs',
        'foto' => '3.png',
        'text' => 'Полина - удивительно добрый, чуткий, при этом харизматичный преподаватель, которого дети просто обожают. Полина увлечена своим делом, и продолжает постоянно развиваться в преподавании: осваивает новые онлайн инструменты и технологии, изучает современные исследования по преподаванию детям, создает новые учебные программы, и поддерживает свой собственный английский с носителем.',
        'features' => [
            'Опыт преподавания английского детям на Тайване, в билингвальном детском саду',
            'Сертификат владения английским языком IELTS',
            'Создатель 3 авторских курсов по различным методикам обучения детей онлайн и офлайн',
        ],
    ],

    [
        'name' => 'Дарина Мамаева',
        'video' => 'https://youtu.be/7roUKb-DBsI',
        'foto' => '11.png',
        'text' => 'Дарина не перестает удивлять отличными результатами своих учеников, которые не хотят с ней расставаться даже ненадолго. Она внимательный и невероятно отзывчивый человек, на которого можно положиться во всем. Дарина постоянно внедряет новые идеи и подходы, даря своим ученикам вдохновение: создает авторские игры, задания и системы мотивации для детей.',
        'features' => [
            'Имеет CAE (Certificate of Advanced English)',
            'Практиковала английский 4 месяца в США',
            'Постоянно попадает в топ рейтинга преподавателей Say Yes!',
        ],
    ],

    [
        'name' => 'Светлана Карпец',
        'video' => 'https://www.youtube.com/watch?v=H8wbTeIdRFI&feature=emb_logo',
        'foto' => '5.jpg',
        'text' => 'Светлана, как говорят ее студенты, искренний и невероятно деликатный человек. При этом ей удается и достичь блестящих результатов со студентами всех возрастов, и проявить в школе свой актерский талант, снимаясь для обучающих роликов в YouTube.',
        'features' => [
            'Диплом РГУ им.Косыгина  Лингвист - преподаватель',
            'Имеет преподавательские сертификаты TEFL и TESOL',
            'Преподавала английский язык 1 год в США',
        ],
    ],

    [
        'name' => 'Полина Ангаткина',
        'video' => 'https://youtu.be/mAk5aP2rFJw',
        'foto' => '7.jpeg',
        'text' => 'Активный и позитивный преподаватель, который очарует вашего ребенка с первого урока. Интересуется фотографией, модой и новинками в методиках обучении детей и подростков. Студенты обожают Полину за умение искренне интересоваться увлечениями ребенка и умение быть интересным собеседником.',
        'features' => [
            'Московский Государственный Лингвистический Университет имени Мориса Тореза',
            'Увлекается разработкой собственных материалов для обучения детей',
        ],
    ],
    [
        'name' => 'Полина Сизова',
        'video' => 'https://youtu.be/sOA73CpHHJk',
        'foto' => '4.png',
        'text' => 'Полина безмерно увлечена своей работой, и зажигает каждого своей мотивацией и энергией. Такие качества, как отзывчивость и душевность, помогают Полине сделать атмосферу уроков теплой и непринужденной. А ее педагогические знания и умения - получить неизменно устойчивый, высокий результат в обучении английскому языку!',
        'features' => [
            'Санкт-Петербургский Государственный Университет, Лингвистика, Дискурс и вариативность английского языка',
            'Разрабатывает собственные программы обучения английскому',
            'Имеет обширный успешный опыт обучения детей по игровой методике',
        ],
    ],
    [
        'name' => 'Сабина Шейхова',
        'video' => 'https://www.youtube.com/watch?v=nbHaB0f1avc&feature=emb_logo',
        'foto' => '6.jpg',
        'text' => 'Сабина - не только опытный и талантливый преподаватель, но и внимательный и приятный собеседник. Она уже много лет является надежной опорой Say Yes! в непрерывном обучении преподавателей. Сабина основательно подходит к любому делу, и ее правильно выстроенные и интересные занятия неизменно приносят великолепные результаты у учеников всех возрастов!',
        'features' => [
            'Московский Государственный Педагогический Университет Преподаватель английского языка',
            'Опыт работы 11 лет',
            'Методист Школы и тренер по методике детского направления',
        ],
    ],
    [
        'name' => 'Елена Голубева',
        'video' => 'https://youtu.be/uH7VmRwaBhc',
        'foto' => '12.png',
        'text' => 'Елена - наш светлый и уютный маячок, который уверенно приводит своих учеников к любви к английскому. Она постоянно занимается своим развитием в преподавании, проходит курсы в Великобритании. С Еленой освоение языка станет захватывающим процессом, от которого не захочется отрываться!',
        'features' => [
            'Оренбургский государственный университет, бакалавр лингвистики',
            'Certificate of Attendance in Summer General English courses (International house of Bristol, 2017)',
        ],
    ],
    [
        'name' => 'Лиана Макртумян',
        'video' => 'https://www.youtube.com/watch?v=Dn6TUYiDhy8&feature=emb_logo',
        'foto' => '9.jpg',
        'text' => 'С таким сердечным и открытым учителем, как Лиана, ребятам всегда легко и комфортно на уроках. Лиана без ума от преподавания, беспрерывно развивается в профессии и совершенствует навыки собственного английского. Мы уверены, что она станет для каждого ученика настоящим добрым волшебником и проводником в мир безупречного английского!',
        'features' => [
            'Диплом МИТУ-МАСИ Преподаватель английского языка.',
            'Преподавала 1 год в США',
            'Ведет собственный блог на английском',
        ],
    ],
    [
        'name' => 'Анна Олейник',
        'video' => 'https://youtu.be/77dOWJJFqc8',
        'foto' => '8.jpg',
        'text' => 'Анна - веселый, яркий человек, и тонкий психолог, умеющий преподавать всем возрастам. Особенно много опыта у Анны с детьми, начиная от 4 лет. Мы прямо-таки восхищаемся ее неутолимой жаждой новых знаний в английском и в преподавании, ее вовлеченностью в жизнь школы и умением достичь великолепных результатов с учениками в короткие сроки!',
        'features' => [
            'Нижегородский Государственный Лингвистический Университет, английский язык',
            'Опыт преподавания 8 лет',
            'Сертификат TKT – Teaching Knowledge Test (3 modules)',
        ],
    ],
    // [
    //     'name' => '',
    //     'video' => '',
    //     'foto' => '',
    //     'text' => '',
    //     'features' => [
    //         '',
    //         '',
    //         '',
    //     ],
    // ],
];

$reviews_from_portals = [
    [
        'name' => 'На Zoon',
        'link' => [
            'text' => 'Читать остальные 50 отзывов на Zoon',
            'href' => 'https://zoon.ru/msk/trainings/shkola_anglijskogo_yazyka_say_yes_na_kozhevnicheskoj_ulitse/'
        ],
        'image' => 'r-zoon.png'
    ],
    [
        'name' => 'На Schoolrate',
        'link' => [
            'text' => 'Читать остальные 94 отзыва на SchoolRate',
            'href' => 'https://www.schoolrate.ru/about-course/courses/yes_i_speak/'
        ],
        'image' => 'r-schoolrate.png'
    ],
    [
        'name' => 'На Yell',
        'link' => [
            'text' => 'Читать остальные 38 отзывов на Yell',
            'href' => 'https://www.yell.ru/moscow/com/shkola-anglijskogo-yazyka-say-yes-na-kozhevnicheskoj-ulice_11761547/'
        ],
        'image' => 'r-yell.png'
    ]
];

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
    include './includes/roistat.php';
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
                                <a target="_blank" href="<?= $info['fb'] ?>">
                                    <img <?= role_image() ?> src="<?= get_image('facebook.svg') ?>" alt="">
                                </a>
                            </li>
                            <li>
                                <a target="_blank" href="<?= $info['in'] ?>">
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
                    <img src="<?= get_image('cat.png') ?>" <?= role_image() ?> alt="">
                    <div class="dialog _mobile_position-left">Урок проходит на онлайн-платформе в удобное вам время</div>
                </div>
                <div class="form-main-row">
                    <div class="form-main-col _has_input">
                        <input type="text" class="input" placeholder="Имя" name="name" required>
                    </div>
                    <div class="form-main-col _has_input">
                        <input type="tel" class="input" placeholder="Телефон" name="phone" required>
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
            <h2 class="h2">Почему дети начинают разговаривать на английском, любить язык и получать хорошие отметки в школе, обучаясь в SAY&nbsp;YES?</h2>
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
                            <a target="_blank" class="r-link scroll-to" href="#ourteam-section">Посмотреть видео от преподавателей</a>
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
                <a data-fancybox data-width="640" data-height="360" target="_blank" href="https://youtu.be/T_v4tBsnD4c" class="video-block">
                    <img src="<?= get_image('video-comfort.jpg') ?>" <?= role_image() ?> alt="">
                </a>
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
    <div id="ourteam-section" class="ourteam">
        <div class="section-bg _ourteam"></div>
        <div class="container ourteam-container">
            <div class="cont-subtitle ourteam__sub-title semibold">
                Найдем подход к любому ребенку
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
            <div class="cont-subtitle semibold">
                Эффективность нашего обучения подтверждена отзывами и наградами
            </div>

            <h2 class="h2 advantages__title">
                Школа SAY&nbsp;YES! существует в оффлайн формате в Москве и 4 раза становилась победителем премии
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
                <button type="button" class="r-button button-accent adv-btn js-button">Записаться на бесплатный урок</button>
            </div>
        </div>
    </div>

    <div class="reviews container">
        <h2 class="h2 reviews__title">За 7 лет работы обучили 4.5 тысяч студентов и получили более 300 отзывов</h2>
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
            <h2 class="h2 about-progress__title">Единственная онлайн-школа, где снимают отчеты о прогрессе учеников на видео </h2>
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
                        <img class="r-size" src="<?= get_image('lesson-img.jpg') ?>" <?= role_image() ?> alt="">
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
                        <img class="r-size" src="<?= get_image('progress-report.jpg') ?>" <?= role_image() ?> alt="">
                        <div class="lessons-info__article">
                            Каждый месяц преподаватель формирует отчет для родителя о пройденном материале и
                            прогрессе в обучении. Вы будете в курсе, каких успехов добился ваш ребенок.
                        </div>
                    </div>
                    <div class="lessons-info__img">
                        <img class="r-size" src="<?= get_image('progress-report.jpg') ?>" <?= role_image() ?> alt="">
                    </div>
                </li>
                <li>
                    <div class="lessons-info__cont">
                        <div class="lessons-info__title bold">3. Онлайн спикинг клубы </div>
                        <img class="r-size" src="<?= get_image('speaking-club.jpg') ?>" <?= role_image() ?> alt="">
                        <div class="lessons-info__article">
                            Групповые занятия с ровесниками, которые проходят по отдельной программе,
                            погрузят вашего ребенка в англоговорящую среду и улучшат разговорный навык.
                        </div>
                    </div>
                    <div class="lessons-info__img">
                        <img class="r-size" src="<?= get_image('speaking-club.jpg') ?>" <?= role_image() ?> alt="">
                    </div>
                </li>
            </ul>
        </div>
    </div>

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
                        <h2 class="h2">На часто задаваемые вопросы отвечает <span><span>Вера Шаталова,<br>руководитель школы SAY&nbsp;YES!</span></span></h2>
                        <img class="r-size accordeon-image-mobile" src="<?= get_image('accordeon-image-mobile.png') ?>" <?= role_image() ?> alt="">
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
                        <input type="text" class="input" placeholder="Имя" name="name" required>
                    </div>
                    <div class="form-main-col _has_input">
                        <input type="tel" class="input" placeholder="Телефон" name="phone" required>
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
                        <a class="recall" href="<?= get_tel_for_href($info['tel']) ?>" target="_blank"><?= $info['tel'] ?></a>
                    </li>
                    <li>
                        <a class="whatsup-link bold" href="<?= $info['whatsapp'] ?>" target="_blank">Написать в WhatsApp</a>
                    </li>
                </ul>
            </div>
            <div class="contact__column-right">
                <ul class="r-list contact__phones">
                    <li>
                        <div class="social-screen">
                            <img class="r-size" src="<?= get_image('phone-1.png') ?>" <?= role_image() ?> alt="">
                        </div>
                        <a target="_blank" class="subscription-social subscription-social_inst instagram-button" href="<?= $info['in'] ?>">Подписаться на Instagram</a>
                    </li>
                    <li>
                        <div class="social-screen">
                            <img class="r-size" src="<?= get_image('phone-2.png') ?>" <?= role_image() ?> alt="">
                        </div>
                        <a class="subscription-social subscription-social_facebook" href="<?= $info['fb'] ?>">Подписаться в Facebook</a>
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
                            <a target="_blank" class="email-link" href="<?= get_email_for_href($info['email']) ?>"><?= $info['email'] ?></a>
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
    </div>

    <div id="js-modal-form" class="modal-container">
        <div class="modal-wrapper">
            <button id="js-close2-modal-form" class="r-button modal-overlay"><span class="-visually-hidden">Закрыть</span></button>
            <div class="modal modal_loan">
                <form class="modal__inner form-loan js-form">
                    <button id="js-close-modal-form" class="modal-close" type="button"></button>
                    <div class="modal__title bold">Оставьте заявку</div>
                    <div class="modal__article">
                        В течение 30 минут с вами свяжется менеджер и запишет вас на бесплатный урок, в удобное для вас время
                    </div>
                    <ul class="r-list modal__list">
                        <li>
                            <input class="inp" type="text" placeholder="Имя" name="name" required>
                        </li>
                        <li>
                            <input class="inp" type="tel" placeholder="Телефон" name="phone" required>
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
                    $modalForm.fadeOut();
                    $modalSuccess.fadeIn();
                    that.elements.name.value = '';
                    that.elements.phone.value = '';
                });
            });
        });

        $('.whatsapp-button').click(function() {
            ym(YANDEX_METRIKA_COUNTER, 'reachGoal', 'click');
            gtag('event', 'click', {
                event_category: 'click'
            });
            fbq('track', 'Contact');

            return true;
        });

        $('.instagram-button').click(function() {
            fbq('track', 'AddToWishlist_insta');

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