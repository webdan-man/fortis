<!DOCTYPE html>
<html lang="ru">
    <head>
        <meta charset="UTF-8">
        <title>Fortis</title>
        <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0">
        <link type="image/x-icon" href="favicon.ico" rel="shortcut icon">
        <style>
            <?php include('css/head.css');
            ?>
        </style>
        <link type="text/css" href="css/libs.css" rel="stylesheet">
        <link type="text/css" href="css/style.css" rel="stylesheet">
        <link type="text/css" href="css/media.css" rel="stylesheet">
        <link type="text/css" href="css/scripts.css" rel="stylesheet">
        <?php include('../track/head.php'); ?>
    </head>
    <body>
        <div class="container pc_only" style="position: relative;">
        </div>
        <div class="fixed_header animated fadeIn fadeInDown">
            <!--<div class="container">-->
            <div class="logo" style="cursor: pointer;"></div>
            <div class="toggle">
                <div class="a"></div>
                <div class="b"></div>
                <div class="c"></div>
                <span>Меню</span>
            </div>
            <div class="right">
                <a class="phone ya-phone" href="tel:+74951812126">+7 (495) 181 21 26</a>
                <div class="btn">Задать вопрос</div>
            </div>
            <!--</div>-->
        </div>
        <header class="section">
            <div class="container">
                <div class="slice" id="s1s1">
                    <div class="menu pc_only">
                        <a>меню</a>
                    </div>
                    <div class="menu_phone phone_only">
                        <a></a>
                    </div>
                    <div class="logo">
                        <img src="img/logo.png" alt="Logo">
                    </div>
                    <div class="phone pc_only">
                        <a href="tel:84952235511">8 495 223 55 11</a>
                    </div>
                    <div class="mob_question phone_only">
                        <a></a>
                    </div>
                </div>
                <div class="slice" id="s1s2">
                    <h1 class="title1">за 15 минут Узнайте
                        <br/>все варианты страхования</h1>
                    <div class="var_items">
                        <div class="item">
                            <div class="img">
                                <img src="img/var/1.png" alt="Имущества">
                            </div>
                            <div class="title">Имущества</div>
                        </div>
                        <div class="item">
                            <div class="img">
                                <img src="img/var/2.png" alt="Грузов">
                            </div>
                            <div class="title">Грузов</div>
                        </div>
                        <div class="item">
                            <div class="img">
                                <img src="img/var/3.png" alt="Ответственности">
                            </div>
                            <div class="title">Ответственности</div>
                        </div>
                        <div class="item">
                            <div class="img">
                                <img src="img/var/4.png" alt="Иных рисков">
                            </div>
                            <div class="title">Иных рисков</div>
                        </div>
                    </div>
                    <div class="title2">от страхового брокера с опытом 11 лет</div>
                </div>
                <div class="slice" id="s1s3">
                    <div class="form1">
                        <h2 class="title">Бесплатная консультация
                            <br/>страхового брокера</h2>
                        <form action="ajax/mail.php" method="POST">
                            <input name="phone" type="text" placeholder="Телефон">
                            <button type="submit">Получить
                                <br/>консультацию</button>
                        </form>
                    </div>
                </div>
                <div class="question">
                    <a></a>
                </div>
            </div>
        </header>
        <div class="open_menu hidden animated fadeIn fadeInLeft">
            <div class="close">
                <a>
                    <img src="img/close.png" alt>
                </a>
            </div>
            <ul>
                <li>
                    <a href="#href1">Что мы делаем</a>
                </li>
                <li>
                    <a href="#href2">Расчитайте страховку</a>
                </li>
                <li>
                    <a href="#href3">Заблуждения о страховой компании</a>
                </li>
                <li>
                    <a href="#href4">истории клиентов</a>
                </li>
                <li>
                    <a href="#href5">Виды страхования</a>
                </li>
                <li>
                    <a href="#href6">контакты</a>
                </li>
            </ul>
            <div class="phone phone_only">8 495 223 55 11</div>
        </div>
        <div class="open_question hidden animated fadeIn fadeInRight">
            <div class="close">
                <img src="img/q.png" alt>
                <a>
                    <img src="img/q_hide.png" alt>
                </a>
            </div>
            <div class="form">
                <form action="ajax/mail.php" method="POST" novalidate="novalidate">
                    <div class="form_title">Задайте свой вопрос
                        <br/>нашему специалисту</div>
                    <div class="input_block">
                        <input name="name" type="text" placeholder="Введите имя">
                    </div>
                    <div class="input_block">
                        <input name="phone" type="text" placeholder="Введите телефон">
                    </div>
                    <div class="input_block">
                        <textarea name="question" placeholder="Введите вопрос"></textarea>
                    </div>
                    <div class="btn_block">
                        <input type="submit" value="Отправить">
                    </div>
                </form>
            </div>
        </div>
        <div class="info1 section" id="href1">
            <div class="container2">
                <div class="slice" id="s2s1">
                    <h2 class="main_title">На рынке более 300 страховых компаний</h2>
                </div>
                <div class="slice" id="s2s2">
                    <div class="info_items">
                        <div class="item">
                            <div class="img">
                                <img src="img/1/1.png" alt="Почему наши услуги бесплатны?">
                            </div>
                            <div class="desc">
                                <div class="title">Почему наши услуги<br/>бесплатны?</div>
                                <div class="text">Потому что за нашу работу нам платят
                                    <br/>страховые компании</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="slice" id="s2s3">
                    <div class="info_items">
                        <div class="item">
                            <div class="img">
                                <img src="img/1/2.png" alt="Зачем нужны услуги страхового брокера ?">
                            </div>
                            <div class="desc">
                                <div class="title">Зачем нужны услуги
                                    <br/>страхового брокера ?</div>
                                <div class="text">Для того, чтобы руководитель организации смог выбрать услугу страхования для своей компании основываясь на фактах, а не на мнениях своих сотрудников</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="slice" id="s2s4">
                    <div class="info_items">
                        <div class="item">
                            <div class="img">
                                <img src="img/1/3.png" alt="Что делает страховой брокер?">
                            </div>
                            <div class="desc">
                                <div class="title">Что делает
                                    <br/>страховой брокер?</div>
                                <div class="text">Предоставляет клиенту выбор подходящих вариантов страхования под требования заказчика и обеспечивает сопровождение страховых случаев</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="info12 section" id="href2">
            <div class="container">
                <div class="slice" id="s3s1">
                    <h2 class="title2">Помогите нам помочь вам!</h2>
                </div>
                <div class="slice" id="s3s2">
                    <div class="title3">Заполните форму и мы решим проблемы страхования в вашей организации</div>
                </div>
                <div class="slice" id="s3s3">
                    <div class="form">
                        <div class="step1">
                            <div class="form_title"> Какие виды страхования вас интересуют? </div>
                            <div class="steps pc_only">
                                <span>Страхование<br/>оборудования</span>
                                <span>Строительно монтажные<br/>и технические риски</span>
                                <span>Страхование<br/>недвижимости</span>
                                <span>Страхование<br/>транспорта</span>
                                <span>Страхование грузов<br/>и грузоперевозок</span>
                                <span>Страхование<br/>сотрудников</span>
                                <span>Сельохоз<br/>страхование</span>
                                <span>Страхование<br/>отвественности</span>
                                <span>Финансовые риски</span>
                            </div>
                            <div class="steps phone_only">
                                <div class="bxslider1">
                                    <div class="row">
                                        <span>Страхование<br/>оборудования</span>
                                        <span>Строительно монтажные<br/>и технические риски</span>
                                        <span>Страхование<br/>недвижимости</span>
                                        <span>Страхование<br/>транспорта</span>
                                        <span>Страхование грузов<br/>и грузоперевозок</span>
                                    </div>
                                    <div class="row">
                                        <span>Страхование<br/>сотрудников</span>
                                        <span>Сельохоз<br/>страхование</span>
                                        <span>Страхование<br/>отвественности</span>
                                        <span>Финансовые<br/>риски</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="step2 hidden">
                            <div class="form_title"> Риски вашей компании уже застрахованы? </div>
                            <div class="steps">
                                <span>Не застрахованы</span>
                                <span>Застрахованы</span>
                            </div>
                        </div>
                        <div class="step3 hidden">
                            <div class="form_title"> Выберите причину поиска страховой компании </div>
                            <div class="steps">
                                <span>Гром уже грянул,<br/>вынесли урок</span>
                                <span>Хотим приготовить<br/>сани летом</span>
                            </div>
                        </div>
                        <div class="step4 hidden">
                            <div class="form_title"> Выберите причину поиска новой страховой </div>
                            <div class="steps">
                                <span>Недовольны работой<br/>нынешней компании</span>
                                <span>Хотим найти<br/>дешевле</span>
                            </div>
                        </div>
                        <div class="step5 hidden">
                            <div class="form_title"> Заполните форму и наш менеджер снимет все вопросы выбора
                                <br/>страховой компании под ваши требования за 15 минут </div>
                            <form action="ajax/mail.php" method="POST">
                                <input name="name" type="text" placeholder="Введите имя">
                                <input name="phone" type="text" placeholder="Введите телефон">
                                <input type="submit" value="Отправить"> </form>
                        </div>
                    </div>
                    <img class="hand" src="img/hand.png" alt> </div>
            </div>
        </div>
        <div class="info2 section" id="href3">
            <div class="hr"></div>
            <div class="container2">
                <div class="slice" id="s4s1">
                    <h2 class="title">Заблуждения, о которых говорит клиент при выборе страховой компании</h2>
                </div>
                <div class="slice" id="s4s2">
                    <div class="tab_block">
                        <div class="tabs">
                            <a class="active" data-id="1">Страховая компания<br/>очень долго платит</a>
                            <a data-id="2">Дешевле копить<br/>деньги самим</a>
                            <a data-id="3">Не важно где<br/>страховаться</a>
                        </div>
                        <div class="tab_content">
                            <div id="tab_1">
                                <div class="img">
                                    <img src="img/2/1.png" alt> </div>
                                <div class="desc"> По статистике 90% детей тратят деньги на чипсы, сладости или вообще ходят весь день голодные — ведь родители все равно не узнают.
                                    <br/>
                                    <br/> Проект «Школа будущего» исправит ситуацию
                                    <br/> со школьными обедами так, чтобы дети
                                    <br/> были сыты, а родители — спокойны. </div>
                            </div>
                            <div class="hidden" id="tab_2">
                                <div class="img">
                                    <img src="img/2/2.png" alt> </div>
                                <div class="desc"> По статистике 90% детей тратят деньги на чипсы, сладости или вообще ходят весь день голодные — ведь родители все равно не узнают.
                                    <br/>
                                    <br/> Проект «Школа будущего» исправит ситуацию
                                    <br/> со школьными обедами так, чтобы дети
                                    <br/> были сыты, а родители — спокойны. </div>
                            </div>
                            <div class="hidden" id="tab_3">
                                <div class="img">
                                    <img src="img/2/3.png" alt> </div>
                                <div class="desc"> По статистике 90% детей тратят деньги на чипсы, сладости или вообще ходят весь день голодные — ведь родители все равно не узнают.
                                    <br/>
                                    <br/> Проект «Школа будущего» исправит ситуацию
                                    <br/> со школьными обедами так, чтобы дети
                                    <br/> были сыты, а родители — спокойны. </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="info3 section" id="href4">
            <div class="slice" id="s5s1">
                <h2 class="title">Истории наших клиентов</h2>
            </div>
            <div class="slice" id="s5s2">
                <div class="cascade-slider_container" id="cascade-slider">
                    <div class="cascade-slider_slides">
                        <div class="cascade-slider_item">
                            <div class="opacity"></div>
                            <div class="video" data-video="qlcWFoNqZHc"></div>
                            <img src="img/bro.jpg" alt>
                            <div class="desc">
                                <div class="hr"></div>
                                <div class="title1">Семен Радаев</div>
                                <div class="title2">Директор по развитию “Альфабанк”</div>
                            </div>
                        </div>
                        <div class="cascade-slider_item">
                            <div class="opacity"></div>
                            <div class="video" data-video="qlcWFoNqZHc"></div>
                            <img src="img/bro.jpg" alt>
                            <div class="desc">
                                <div class="hr"></div>
                                <div class="title1">Семен Радаев</div>
                                <div class="title2">Директор по развитию “Альфабанк”</div>
                            </div>
                        </div>
                        <div class="cascade-slider_item">
                            <div class="opacity"></div>
                            <div class="video" data-video="qlcWFoNqZHc"></div>
                            <img src="img/bro.jpg" alt>
                            <div class="desc">
                                <div class="hr"></div>
                                <div class="title1">Семен Радаев</div>
                                <div class="title2">Директор по развитию “Альфабанк”</div>
                            </div>
                        </div>
                        <div class="cascade-slider_item">
                            <div class="opacity"></div>
                            <div class="video" data-video="qlcWFoNqZHc"></div>
                            <img src="img/bro.jpg" alt>
                            <div class="desc">
                                <div class="hr"></div>
                                <div class="title1">Семен Радаев</div>
                                <div class="title2">Директор по развитию “Альфабанк”</div>
                            </div>
                        </div>
                    </div>
                    <ol class="cascade-slider_nav">
                        <li class="cascade-slider_dot cur"></li>
                        <li class="cascade-slider_dot"></li>
                        <li class="cascade-slider_dot"></li>
                        <li class="cascade-slider_dot"></li>
                    </ol>
                    <span class="cascade-slider_arrow cascade-slider_arrow-left" data-action="prev">
                        <img src="img/slider_left.png" alt>
                    </span>
                    <span class="cascade-slider_arrow cascade-slider_arrow-right" data-action="next">
                        <img src="img/slider_right.png" alt>
                    </span>
                </div>
            </div>
        </div>
        <div class="info4 section" id="href5">
            <div class="container">
                <div class="slice" id="s6s1">
                    <h2 class="title">Возможные виды страхования</h2>
                </div>
                <div class="slice" id="s6s2">
                    <div class="tab_block">
                        <div class="tabs">
                            <a class="active" data-id="1">Каско</a>
                            <a data-id="2">Осаго</a>
                            <a data-id="3">Страхование квартир</a>
                            <a data-id="4">Зеленая карта</a>
                            <a data-id="5">Страхование жизни</a>
                            <a data-id="6">Страхование путешествий</a>
                        </div>
                        <div class="tab_content">
                            <div id="tabb_1">
                                <div class="desc">
                                    <div class="item_title">Каско</div>
                                    <div class="hr"></div>
                                    <div class="text"> Мы привыкли мечтать о большем, но довольствоваться малым. Годы проходят, мы по-прежнему живем своей размеренной жизнью и все чаще осознаем, что многие мечты так и останутся всего лишь мечтами.
                                        <br/> Счастливая семья, респектабельная жизнь, крепкое здоровье, кругосветные путешествия, успешная карьера, прибыльный бизнес — многое из этого кажется чем-то несбыточным. Мы продолжаем ждать чуда, но надежда на волшебство с каждым днем угасает. </div>
                                </div>
                                <div class="img">
                                    <img src="img/korova.jpg" alt> </div>
                            </div>
                            <div class="hidden_pc" id="tabb_2">
                                <div class="desc">
                                    <div class="item_title">Осаго</div>
                                    <div class="hr"></div>
                                    <div class="text"> Мы привыкли мечтать о большем, но довольствоваться малым. Годы проходят, мы по-прежнему живем своей размеренной жизнью и все чаще осознаем, что многие мечты так и останутся всего лишь мечтами.
                                        <br/> Счастливая семья, респектабельная жизнь, крепкое здоровье, кругосветные путешествия, успешная карьера, прибыльный бизнес — многое из этого кажется чем-то несбыточным. Мы продолжаем ждать чуда, но надежда на волшебство с каждым днем угасает. </div>
                                </div>
                                <div class="img">
                                    <img src="img/korova.jpg" alt> </div>
                            </div>
                            <div class="hidden_pc" id="tabb_3">
                                <div class="desc">
                                    <div class="item_title">Страхование квартир</div>
                                    <div class="hr"></div>
                                    <div class="text"> Мы привыкли мечтать о большем, но довольствоваться малым. Годы проходят, мы по-прежнему живем своей размеренной жизнью и все чаще осознаем, что многие мечты так и останутся всего лишь мечтами.
                                        <br/> Счастливая семья, респектабельная жизнь, крепкое здоровье, кругосветные путешествия, успешная карьера, прибыльный бизнес — многое из этого кажется чем-то несбыточным. Мы продолжаем ждать чуда, но надежда на волшебство с каждым днем угасает. </div>
                                </div>
                                <div class="img">
                                    <img src="img/korova.jpg" alt> </div>
                            </div>
                            <div class="hidden_pc" id="tabb_4">
                                <div class="desc">
                                    <div class="item_title">Зеленая карта</div>
                                    <div class="hr"></div>
                                    <div class="text"> Мы привыкли мечтать о большем, но довольствоваться малым. Годы проходят, мы по-прежнему живем своей размеренной жизнью и все чаще осознаем, что многие мечты так и останутся всего лишь мечтами.
                                        <br/> Счастливая семья, респектабельная жизнь, крепкое здоровье, кругосветные путешествия, успешная карьера, прибыльный бизнес — многое из этого кажется чем-то несбыточным. Мы продолжаем ждать чуда, но надежда на волшебство с каждым днем угасает. </div>
                                </div>
                                <div class="img">
                                    <img src="img/korova.jpg" alt> </div>
                            </div>
                            <div class="hidden_pc" id="tabb_5">
                                <div class="desc">
                                    <div class="item_title">Страхование жизни</div>
                                    <div class="hr"></div>
                                    <div class="text"> Мы привыкли мечтать о большем, но довольствоваться малым. Годы проходят, мы по-прежнему живем своей размеренной жизнью и все чаще осознаем, что многие мечты так и останутся всего лишь мечтами.
                                        <br/> Счастливая семья, респектабельная жизнь, крепкое здоровье, кругосветные путешествия, успешная карьера, прибыльный бизнес — многое из этого кажется чем-то несбыточным. Мы продолжаем ждать чуда, но надежда на волшебство с каждым днем угасает. </div>
                                </div>
                                <div class="img">
                                    <img src="img/korova.jpg" alt> </div>
                            </div>
                            <div class="hidden_pc" id="tabb_6">
                                <div class="desc">
                                    <div class="item_title">Страхование путешествий</div>
                                    <div class="hr"></div>
                                    <div class="text"> Мы привыкли мечтать о большем, но довольствоваться малым. Годы проходят, мы по-прежнему живем своей размеренной жизнью и все чаще осознаем, что многие мечты так и останутся всего лишь мечтами.
                                        <br/> Счастливая семья, респектабельная жизнь, крепкое здоровье, кругосветные путешествия, успешная карьера, прибыльный бизнес — многое из этого кажется чем-то несбыточным. Мы продолжаем ждать чуда, но надежда на волшебство с каждым днем угасает. </div>
                                </div>
                                <div class="img">
                                    <img src="img/korova.jpg" alt> </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="info5 section">
            <div class="slice" id="s7s1">
                <h2 class="title">Запишитесь на консультацию с
                    <br/>основателем компании в нашем офисе</h2>
            </div>
            <div class="slice" id="s7s2">
                <div class="container">
                    <div class="block1">
                        <div class="girl">
                            <img src="img/girl.png" alt>
                        </div>
                        <div class="desc">
                            <div class="text1">Юртаева Елена
                                <br/>Васильевна</div>
                            <div class="text2">Генеральный Директор</div>
                            <div class="text3"> Почему у некоторых мужчин крепкие семьи, успешные друзья, они хорошо зарабатывают и всегда находятся в центре внимания? Иногда кажется, что эти люди уже родились такими. </div>
                        </div>
                        <div class="img pc_only">
                            <img src="img/cars.jpg" alt> </div>
                    </div>
                </div>
            </div>
            <div class="slice" id="s7s3">
                <div class="container3">
                    <div class="block2">
                        <div class="left">
                            <div class="form_title">Запишитесь на консультацию с
                                <br/>Юртаевой Еленой Васильевной</div>
                            <div class="form">
                                <form action="ajax/mail.php" method="POST">
                                    <input name="name" type="text" placeholder="Имя">
                                    <input name="phone" type="text" placeholder="Телефон">
                                    <div class="btn_block">
                                        <button type="submit">Записатья на
                                            <br/>консультацию</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class="img pc_only">
                            <img src="img/cars.jpg" alt> </div>
                        <div class="right pc_only">
                            <span>Адрес: </span> г. Москва, ул. Красная Пресня д. 22 </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="info6 section">
            <div class="slice" id="s8s1">
                <h2 class="title">Истории наших клиентов
                    <span>, которые
                        <br/> застраховались слишком поздно</span>
                </h2>
            </div>
            <div class="slice" id="s8s2">
                <div class="cascade-slider_container" id="cascade-slider2">
                    <div class="cascade-slider_slides2">
                        <div class=" cascade-slider_item2">
                            <div class="opacity"></div>
                            <div class="video" data-video="qlcWFoNqZHc"></div>
                            <img src="img/bro.jpg" alt>
                            <div class="desc">
                                <div class="hr"></div>
                                <div class="title1">Семен Радаев</div>
                                <div class="title2">Директор по развитию “Альфабанк”</div>
                            </div>
                        </div>
                        <div class="cascade-slider_item2">
                            <div class="opacity"></div>
                            <div class="video" data-video="qlcWFoNqZHc"></div>
                            <img src="img/bro.jpg" alt>
                            <div class="desc">
                                <div class="hr"></div>
                                <div class="title1">Семен Радаев</div>
                                <div class="title2">Директор по развитию “Альфабанк”</div>
                            </div>
                        </div>
                        <div class="cascade-slider_item2">
                            <div class="opacity"></div>
                            <div class="video" data-video="qlcWFoNqZHc"></div>
                            <img src="img/bro.jpg" alt>
                            <div class="desc">
                                <div class="hr"></div>
                                <div class="title1">Семен Радаев</div>
                                <div class="title2">Директор по развитию “Альфабанк”</div>
                            </div>
                        </div>
                        <div class="cascade-slider_item2">
                            <div class="opacity"></div>
                            <div class="video" data-video="qlcWFoNqZHc"></div>
                            <img src="img/bro.jpg" alt>
                            <div class="desc">
                                <div class="hr"></div>
                                <div class="title1">Семен Радаев</div>
                                <div class="title2">Директор по развитию “Альфабанк”</div>
                            </div>
                        </div>
                    </div>
                    <ol class="cascade-slider_nav2">
                        <li class="cascade-slider_dot2 cur"></li>
                        <li class="cascade-slider_dot2"></li>
                        <li class="cascade-slider_dot2"></li>
                        <li class="cascade-slider_dot2"></li>
                    </ol>
                    <span class="cascade-slider_arrow cascade-slider_arrow2 cascade-slider_arrow-left" data-action="prev">
                        <img src="img/slider_left.png" alt>
                    </span>
                    <span class="cascade-slider_arrow cascade-slider_arrow2 cascade-slider_arrow-right" data-action="next">
                        <img src="img/slider_right.png" alt>
                    </span>
                </div>
            </div>
        </div>
        <div class="map section" id="href6">
            <div class="slice" id="s9s1">
                <h2 class="title">Контактная информация</h2>
            </div>
            <div class="slice" id="s9s2">
                <div class="container">
                    <div class="form pc_only">
                        <form action="ajax/mail.php" method="POST">
                            <div class="form_title">Остались вопросы? Пишите</div>
                            <div class="input_block">
                                <input name="name" type="text" placeholder="Введите имя">
                            </div>
                            <div class="input_block">
                                <input name="phone" type="text" placeholder="Введите телефон">
                            </div>
                            <div class="input_block">
                                <textarea name="question" placeholder="Введите вопрос"></textarea>
                            </div>
                            <div class="btn_block">
                                <input type="submit" value="Отправить">
                            </div>
                            <div class="phone">8 495 223 55 11</div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="q_open_close phone_only">
                <div class="cls">
                    <img src="img/mob/q.png" alt>
                    <p>Задать вопрос</p>
                    <img class="q1" src="img/mob/q_open.png" alt>
                    <img class="q2" src="img/mob/q_close.png" alt>
                </div>
                <div class="form form2 phone_only">
                    <form action="ajax/mail.php" method="POST" novalidate="novalidate">
                        <div class="form_title">Остались вопросы? Пишите</div>
                        <div class="input_block">
                            <input name="name" type="text" placeholder="Введите имя">
                        </div>
                        <div class="input_block">
                            <input name="phone" type="text" placeholder="Введите телефон">
                        </div>
                        <div class="input_block">
                            <textarea name="question" placeholder="Введите вопрос"></textarea>
                        </div>
                        <div class="btn_block">
                            <input type="submit" value="Отправить">
                        </div>
                        <div class="phone">8 495 223 55 11</div>
                    </form>
                </div>
            </div>
            <div id="map"></div>
            <footer>
                <div class="copyright">© 2016 Fortis</div>
                <div class="logo">
                    <img src="img/footer_logo.png" alt>
                </div>
            </footer>
        </div>
        <a class="fancy" id="tnx_btn" href="#zakaz" style="display: none;"></a>
        <div style="display: none;">
            <div id="zakaz">
                <div class="tnx_text">Спасибо за заявку.
                    <br/>Наш менеджер свяжется с Вами в ближайшее время!</div>
            </div>
        </div>
        <div id="maket"></div>
        <script src="https://ajax.googleapis.com/ajax/libs/webfont/1.6.16/webfont.js"></script>
        <script src="js/init.js"></script>
        <?php include('../track/body.php'); ?>
    </body>
</html>