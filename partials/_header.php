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
            <?php partial('menu'); ?>
