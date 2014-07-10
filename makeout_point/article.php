<?php theme_include('header'); ?>
    <article id="article-<?php echo article_id(); ?>">
        <h3 class="post-title"><a href="<?php echo article_url(); ?>"><?php echo article_title();?></a></h3>
        <p class="post-info">by <a href="mailto:<?php echo user_authed_email(); ?>"><?php echo article_author(); ?></a> on <time datetime="<?php echo article_date(); ?>"><?php echo article_date(); ?></time></p>
        <?php echo article_markdown(); ?>
    </article>
<?php theme_include('footer'); ?>