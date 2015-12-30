<!DOCTYPE html>
<html lang="en-US">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=yes">
<title><?php echo page_title('404: Page not found'); ?> - <?php echo site_name(); ?></title>
<link rel="stylesheet" type="text/css" href="<?php echo theme_url('assets/css/style.css'); ?>" />
<link rel="icon" type="image/png" href="<?php echo theme_url('img/favicon.png'); ?>" />
</head>
<body>
    <div class="makeout" id="makeout">
        <header class="header makeout__header" id="head">
            <div class="header__banner">
                <h3 class="header__title">
                    <a class="header__title-link" href="<?php echo base_url(); ?>"><?php echo site_name(); ?></a>
                </h3>
            </div>
            <div class="header__twitter">
                <a class="header__twitter-link" href="<?php echo site_meta_twitter(); ?>"></a>
            </div>
        </header>
        <?php partial('menu'); ?>
        <main class="makeout__content">
