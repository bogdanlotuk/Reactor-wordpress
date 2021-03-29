<!DOCTYPE html>
<html lang="uk">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php bloginfo( 'description' ); ?></title>    
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,400;0,500;0,600;0,800;1,400&display=swap" rel="stylesheet">
    <?php wp_head(); ?>
</head>
<body>
    <header class="header">        
        <div class="container"> 
            <div class="header__inner" style="background-image: url(<?php bloginfo( 'template_url' ); ?>/assets/img/header__bg.jpg);">
                <div class="header__left">
                    <p class="header__slogan"><?php the_field('header__slogan')?></p>
                    <p class="header__name"><span class="header__name-title">kaif</span> upgrade</p>
                    <p class="header__advances"><?php the_field('header__advances')?></p>
                    <a class="header__booking" href="tel:+380737221244">замовити столик</a>
                    <div class="header__socials socials">
                        <a class="header__instagram" href="https://instagram.com"><img class="header__instagram-icon" src="<?php bloginfo( 'template_url' ); ?>/assets/img/instagram.svg" alt=""></a>
                        <a class="header__telegram" href="https://teleg.one/bogdanlotuk"><img class="header__telegram-icon" src="<?php bloginfo( 'template_url' ); ?>/assets/img/telegram.svg" alt=""></a>
                        <a class="header__facebook" href="https://facebook.com"><img class="header__facebook-icon" src="<?php bloginfo( 'template_url' ); ?>/assets/img/facebook.svg" alt=""></a>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <section class="gallery">
        <div class="container">
            <div class="gallery__inner">
                <h2 class="gallery__title"><?php the_field('gallery__title')?></h2>
                <div class="gallery__photos">
                    <div class="gallery__top">
                        <div class="gallery__top-left">
                            <img class="gallery__top-left-img" src="<?php the_field('gallery__top-left-img')?>" alt="">
                        </div>                        
                        <div class="gallery__top-center">
                            <img class="gallery__top-center-img" src="<?php the_field('gallery__top-center-img')?>" alt="">
                        </div>                        
                        <div class="gallery__top-right-top">
                            <img class="gallery__top-right-top-img" src="<?php the_field('gallery__top-right-top-img')?>" alt="">
                        </div>
                        <div class="gallery__top-right-bottom">
                            <img class="gallery__top-right-bottom-img" src="<?php the_field('gallery__top-right-bottom-img')?>" alt="">
                        </div>
                    </div>
                    <div class="gallery__bottom">
                        <div class="gallery__bottom-left">
                            <img class="gallery__bottom-left-img" src="<?php the_field('gallery__bottom-left-img')?>" alt="">
                        </div>
                        <div class="gallery__bottom-right">
                            <div class="gallery__bottom-right-wrap">
                                <img class="gallery__instagram-icon" src="<?php bloginfo( 'template_url' ); ?>/assets/img/instagram.svg" alt="">
                                <a class="gallery__instagram-more" href="https://instagram.com"><?php the_field('gallery__instagram-more')?></a>
                                <p class="gallery__instagram-nickname"><?php the_field('gallery__instagram-nickname')?></p>
                                <p class="gallery__instagram-tag"><?php the_field('gallery__instagram-tag')?></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="menu">
        <div class="container">
            <div class="menu__inner">
                <a class="menu__link" href="<?php bloginfo( 'template_url' ); ?>/assets/menu.php">
                    <div class="menu__banner">
                        <div class="menu__vertical">
                            <p class="menu__vertical-text">menu menu menu menu menu</p>
                        </div>
                        <div class="menu__main">
                            <div class="menu__left">
                                <img class="menu__left-img" src="<?php the_field('menu__left-img')?>" alt="">
                            </div>                            
                            <div class="menu__right-top">
                                    <p class="menu__right-top-text">
                                        Багато з тих, хто говорив, що немає нічого такого міцного, що вони не <br>
                                        могли <br> б викурити - були змушені визнати себе переможеними і просили помилування
                                    </p>
                            </div>
                            <div class="menu__right-bottom">
                                    <p class="menu__right-bottom-text">
                                        — The Champagne of Tobaccos, <br>
                                        A Research Paper by Neal T. M. Poke,<br>
                                        December 19, 1955.
                                    </p>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
        </div>
    </section>

    <section class="blog">
        <div class="container">
            <div class="blog__inner">
                <a class="blog__title-link" href="<?php bloginfo( 'template_url' ); ?>/assets/blog.php"><h2 class="blog__title"><?php the_field('blog__title-link')?></h2></a>
                <div class="blog__articles">
                    <div class="blog__left" style="background-image: url(<?php the_field('blog__left')?>);">
                        <div class="blog__left-article-wrap">
                            <p class="blog__article-date">10.02.2021</p>
                            <p class="blog__article-title">Koress K1 - стильний 
                                та особливий.</p>
                            <p class="blog__article-text">Саме з ним ви можете регулювати тягу одразу 
                                під час куріння. На внутрішній трубці. Hendricks Gin – це поєднання 
                                троянди, огірка та одинадцяти трав для досягнення м’якого. Легкий і 
                                солодкий з приємною кислинкою та яскравим цитрусовим. Альтернатива 
                                відомому Aperol Spritz але...</p>
                            <a class="blog__article-more" href="<?php bloginfo( 'template_url' ); ?>/assets/blog.php">Більше</a>
                        </div>
                    </div>
                    <div class="blog__right">
                        <div class="blog__right-top" style="background-image: url(<?php the_field('blog__right-top')?>);">
                            <div class="blog__right-article-wrap">
                                <p class="blog__article-date">01.02.2021</p>
                                <p class="blog__article-title">11 трав, що створюють 
                                1 джин.</p>                        
                                <a class="blog__article-more" href="<?php bloginfo( 'template_url' ); ?>/assets/blog.php">Більше</a>
                            </div>
                        </div>
                        <div class="blog__right-bottom" style="background-image: url(<?php the_field('blog__right-bottom')?>);">
                            <div class="blog__right-article-wrap">
                                <p class="blog__article-date">01.02.2021</p>
                                <p class="blog__article-title">11 трав, що створюють 
                                1 джин.</p>                        
                                <a class="blog__article-more" href="<?php bloginfo( 'template_url' ); ?>/assets/blog.php">Більше</a>
                            </div>
                        </div>
                    </div>
                </div>
                <a class="blog__link" href="<?php bloginfo( 'template_url' ); ?>/assets/blog.php">дивитися блог</a>
            </div>
        </div>
    </section>  

    <section class="booking">
        <div class="container">
            <div class="booking__inner">
                <div class="booking__left">
                    <h3 class="booking__title"><?php the_field('booking__title')?></h3>
                    <p class="booking__text"><?php the_field('booking__text')?></p>
                </div>
                <a class="booking__right-link" href="https://teleg.one/bogdanlotuk">забронювати</a>
            </div>
        </div>
    </section>

    <section class="about">
        <div class="container">
            <div class="about__inner">
                <div class="about__address">
                    <img class="about__address-img" src="img/about__icon-address.svg" alt="">
                    <p class="about__address-text">
                        м. Вінниця <br>
                        вул. Оводова 32/8
                    </p>
                </div>
                <div class="about__clock">
                    <img class="about__clock-img" src="img/about__icon-clock.svg" alt="">
                    <p class="about__clock-text">
                        Пн-Нд <br>
                        13:00-01:00
                    </p>
                </div>
                <div class="about__phone">
                    <img class="about__phone-img" src="img/about__icon-phone.svg" alt="">
                    <p class="about__phone-text">
                        +380 73 722 1244
                    </p>
                </div>
            </div>
        </div>
    </section>
    <?php get_footer(); ?>
