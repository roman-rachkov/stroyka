<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Владстройзаказчик</title>
    <link rel="stylesheet" href="./styles/main.css">
</head>
<body>
<div id="loader"></div>

<div id="index-page">
    <header>
        <div class="container">
            <div class="header-wrapper">
                <a href="/" class="logo">
                    <img src="./assets/icons/logo-white.svg" alt="logo">
                </a>
                <div class="header-contacts">
                    <div class="header-contacts__item">
                        <div class="header-contacts-item__title">Отдел продаж</div>
                        <div class="header-contacts-item__phone">+7 (423) 254-23-24</div>
                    </div>
                    <div class="header-contacts__item">
                        <div class="header-contacts-item__title">WhatsApp</div>
                        <div class="header-contacts-item__phone">+7 902-524-23-24</div>
                    </div>
                </div>
                <button class="menu-btn">
                    <img src="./assets/icons/btn-burger-white.svg" alt="burger">
                </button>
            </div>
        </div>
    </header>
    <div class="index-page-slider slider">
        <div id="about-company-slide" class="slider__item">
            <div class="index-page-slider-info">
                <div class="container index-page-slider-info__wrapper">
                    <div class="index-page-slider-info__title">
                        <div class="index-page-slider-info__title-number">01</div>
                        <div class="index-page-slider-info__title-text">о компании</div>
                    </div>
                    <div class="index-page-slider-info__description">
                        “Владстройзаказчик” – это стабильная компетентная компания, объединившая высококвалифицированных
                        специалистов для решения строительных задач любой сложности.
                    </div>
                    <div class="index-page-slider-info__buttons">
                        <a href="#" class="index-page-slider-info__button">о компании</a>
                        <a href="#" class="index-page-slider-info__button">история</a>
                        <a href="#" class="index-page-slider-info__button">наши преимущества</a>
                    </div>
                </div>
            </div>
            <div class="index-page-slider__picture">
                <div class="index-page-slider-image index-page-slider__small-image"
                     style="--background: url('../../assets/images/index-slider-about.png')"></div>
                <div class="index-page-slider__delimiter"></div>
                <div class="index-page-slider-image index-page-slider__medium-image"
                     style="--background: url('../../assets/images/index-slider-about.png')"></div>
                <div class="index-page-slider-image index-page-slider__main-image"
                     style="--background: url('../../assets/images/index-slider-about.png')"></div>
            </div>
        </div>
        <div id="our-objects-slide" class="slider__item">
            <div class="index-page-slider-info">
                <div class="container index-page-slider-info__wrapper">
                    <div class="index-page-slider-info__title">
                        <div class="index-page-slider-info__title-number">02</div>
                        <div class="index-page-slider-info__title-text">наши объекты</div>
                    </div>
                    <div class="index-page-slider-info__description">
                        Наша работа — это не просто метры бетона и стекла, а создание современной среды для жизни, в
                        которой сочетаются проверенное качество и актуальные стандарты.
                    </div>
                    <div class="index-page-slider-info__buttons">
                        <a class="index-page-slider-info__button" href="#">подробнее</a>
                    </div>
                </div>
            </div>
            <div class="index-page-slider__picture">
                <div class="index-page-slider-image index-page-slider__small-image"
                     style="--background: url('../../assets/images/index-slider-objects.jpg')"></div>
                <div class="index-page-slider__delimiter"></div>
                <div class="index-page-slider-image index-page-slider__medium-image"
                     style="--background: url('../../assets/images/index-slider-objects.jpg')"></div>
                <div class="index-page-slider-image index-page-slider__main-image"
                     style="--background: url('../../assets/images/index-slider-objects.jpg')"></div>
            </div>
        </div>
        <div id="news-slide" class="slider__item">
            <div class="index-page-slider-info">
                <div class="container index-page-slider-info__wrapper">
                    <div class="index-page-slider-info__title">
                        <div class="index-page-slider-info__title-number">03</div>
                        <div class="index-page-slider-info__title-text">Новости</div>
                    </div>
                    <div class="index-page-slider-info__description">
                        Оставайтесь в курсе нашего развития.
                        В этом разделе мы публикуем все, что важно
                        для вас: от запуска новых проектов
                        до изменений в условиях сотрудничества.
                    </div>
                    <div class="index-page-slider-info__buttons">
                        <a class="index-page-slider-info__button" href="#">подробнее</a>
                    </div>
                </div>
            </div>
            <div class="index-page-slider__picture">
                <div class="index-page-slider-image index-page-slider__small-image"
                     style="--background: url('../../assets/images/index-slider-news.jpg')"></div>
                <div class="index-page-slider__delimiter"></div>
                <div class="index-page-slider-image index-page-slider__medium-image"
                     style="--background: url('../../assets/images/index-slider-news.jpg')"></div>
                <div class="index-page-slider-image index-page-slider__main-image"
                     style="--background: url('../../assets/images/index-slider-news.jpg')"></div>
            </div>
        </div>
    </div>
    <footer>
        <div class="container">
            <div class="copywright">
                2025, ГК Владстройзаказчик
            </div>
        </div>
    </footer>
</div>
<script src="./js/index.js" type="module"></script>
</body>
</html>