<!DOCTYPE html>
<html lang="en-US">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
    <title><?php echo page_title('404: Page not found'); ?> - <?php echo site_name(); ?></title>
    <link href="http://fonts.googleapis.com/css?family=Source+Sans+Pro|Source+Code+Pro" rel="stylesheet" type="text/css">
    <link rel="stylesheet" type="text/css" href="<?php echo theme_url('assets/css/style.css'); ?>" />
    <link rel="icon" type="image/png" href="<?php echo theme_url('img/favicon.png'); ?>" />
    <meta property="og:title" content="<?php echo site_name(); ?>">
    <meta property="og:type" content="website">
    <meta property="og:url" content="<?php echo current_url(); ?>">
    <meta property="og:image" content="<?php echo theme_url('img/screenshot.png'); ?>">
    <meta property="og:site_name" content="<?php echo site_name(); ?>">
    <meta property="og:description" content="<?php echo site_description(); ?>">
</head>
<body>
    <div class="makeout" id="makeout">
        <header class="header makeout__header" id="head">
            <div class="header__banner">
                <h4 class="header__title"><a class="header__site-link" href="<?php echo base_url(); ?>"><?php echo site_name(); ?></a></h4>
            </div>
            <div class="header__logo">
                <!-- Set this in functions.php -->
                <div class="header__logo-wrap">
                    <a class="header__logo-link" href="<?php echo twitter_url(); ?>"></a>
                </div>
            </div>
        </header>
        <main class="makeout__content">
            <nav class="menu">
                <div class="button menu__button"><a href="javascript:void(0)"></a></div>
                <div class="menu__wrap">
                    <div class="menu__content">
                        <form class="menu__search form searchform" id="search" action="<?php echo search_url(); ?>" method="post">
                            <fieldset>
                                <input class="menu__input searchform__input" id="term" name="term" placeholder="Type and then hit enter to search" tabindex="1" type="search" value="<?php echo search_term(); ?>">
                            </fieldset>
                        </form>
                        <?php if (has_menu_items()) : ?> 
                            <ul class="menu__left menu__list">
                                <?php while(menu_items()): ?> 
                                    <li class="menu__item <?php echo (menu_active() ? 'menu__item--active"' : ''); ?>">
                                        <a class="menu__link" href="<?php echo menu_url(); ?>" title="<?php echo menu_title(); ?>"><?php echo menu_name(); ?></a>
                                    </li>
                                <?php endwhile; ?>
                            </ul>
                            <ul class="menu__center menu__list">
                                <?php while(categories()) : ?>
                                    <li class="menu__item">
                                        <a class="menu__link" href="<?php echo category_url(); ?>" title="<?php echo category_description(); ?>">
                                            <?php echo category_title(); ?> (<?php echo category_count(); ?>)
                                        </a>
                                    </li>
                                <?php endwhile; ?>
                            </ul>
                            <ul class="menu__right menu__list">
                                <li class="menu__item"><a class="menu__link beard" href="http://www.bhalash.com" title="Real Men Wear Beards">Real Men Wear Beards</a></li>
                                <li class="menu__item"><a class="menu__link facebook" href="http://www.facebook.com" title="Facebook">Facebook</a></li>
                                <li class="menu__item"><a class="menu__link labs" href="http://www.091labs.com" title="091 Labs">091 Labs</a></li>
                                <li class="menu__item"><a class="menu__link rss" href="<?php rss_url(); ?>" title="RSS Feed">RSS Feed</a></li>
                            </ul>
                        <?php endif; ?>
                    </div>
                </div>
            </nav>
