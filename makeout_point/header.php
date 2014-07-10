<!DOCTYPE html>
<html lang="en-US">
<head>
<!-- Bless the Maker and His water. Bless the coming and going of Him. May His passage cleanse the world. May He keep the world for His people. -->
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
<title><?php echo page_title('404: Page not found'); ?> - <?php echo site_name(); ?></title>
<link rel="stylesheet" type="text/css" href="<?php echo theme_url('prettify.css'); ?>" />
<link rel="stylesheet" type="text/css" href="<?php echo theme_url('style.css'); ?>" />
<meta property="og:title" content="<?php echo site_name(); ?>">
<meta property="og:type" content="website">
<meta property="og:url" content="<?php echo current_url(); ?>">
<meta property="og:image" content="<?php echo theme_url('screenshot.png'); ?>">
<meta property="og:site_name" content="<?php echo site_name(); ?>">
<meta property="og:description" content="<?php echo site_description(); ?>">
</head>
<body onload="prettyPrint()">
    <header>
        <div class="banner">
            <div class="title">
                <h4><a href="<?php echo base_url(); ?>"><?php echo site_name(); ?></a></h4>
            </div>
        </div>
        <div class="logo-wrap">
            <div class="logo"><a href="https://www.twitter.com"></a></div>
        </div>
    </header>
    <div class="content">
        <nav>
            <div class="button">
                <a href="javascript:void(0)"></a>
            </div>
            <div class="menu-wrap">
                <div class="menu">
                    <form id="search" action="<?php echo search_url(); ?>" method="post">
                        <input id="term" name="term" placeholder="Type and then hit enter to search" tabindex="1" type="search" value="<?php echo search_term(); ?>">
                    </form>
                    <ul>
                        <li><a href="javascript:void(0)">Placeholder</a></li>
                        <li><a href="javascript:void(0)">Placeholder</a></li>
                        <li><a href="javascript:void(0)">Placeholder</a></li>
                        <li><a href="javascript:void(0)">Placeholder</a></li>
                        <li><a href="javascript:void(0)">Placeholder</a></li>
                    </ul>
                </div>
            </div>
        </nav>