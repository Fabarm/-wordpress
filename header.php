<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>AUTO from USA</title>

    <?php wp_head(); ?>   

</head>

<body>
    <header class="header">
        <div class="container">
            <div class="header__top">
                <?php the_custom_logo(); ?>
                <a href = "tel:<?php the_field('phone-number'); ?>" class = "phone"><?php the_field('phone'); ?></a>
            </div>
            <div class="header__content">
                <h1 class="header__title">авто из сша “под ключ”</h1>
                <h2 class="header__subtitle">ЗАКАЖИ СЕБЕ АВТО ИЗ США С ВЫГОДОЙ ДО 40%</h2>
                <p class="header__text">Подбор, покупка, доставка, растаможка, ремонт, оформление по договору</p>
                <a href="#" class="button">КОНСУЛЬТАЦИЯ ЭКСПЕРТА</a>
                <div class="social header__social">
                    <a class="social-link" href = "<?php the_field("instagram-link"); ?>">
                        <img src="<?php bloginfo('template_url'); ?>/assets/images/instagram.svg" alt = "instagram-icon" class = "social-img">
                    </a>
                    <a class="social-link" href= "<?php the_field("telegram-link");?>">
                        <img src = "<?php bloginfo('template_url'); ?>/assets/images/telegram.svg" alt = "telegram-icon" class = "social-img">
                    </a>
                    <a class="social-link" href = "<?php the_field("whatsapp-link");?>">
                        <img src = "<?php bloginfo('template_url'); ?>/assets/images/whatsapp.svg" alt = "whatsapp-icon" class = "social-img">
                    </a>
                    <a class="social-link" href = "<?php the_field("facebook-link");?>">
                        <img src = "<?php bloginfo('template_url'); ?>/assets/images/facebook.svg" alt = "facebook-icon" class = "social-img">
                    </a>
                </div>
                <img class="header__images" src = "<?php bloginfo('template_url'); ?>/assets/images/ford-mustang.png" alt = "ford-mustang" >
            </div>
        </div>
    </header>