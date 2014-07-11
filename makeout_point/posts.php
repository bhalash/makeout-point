<?php theme_include('header'); ?>
<?php if(has_posts()) : while(posts()) : ?>
    <article>
        <h3 class="article-title"><a href="<?php echo article_url(); ?>"><?php echo article_title();?></a></h3>
        <p class="article-info">by <a href="mailto:<?php echo user_authed_email(); ?>"><?php echo article_author(); ?></a> on <time datetime="<?php echo article_date(); ?>"><?php echo article_date(); ?></time></p>
        <?php echo article_markdown(); ?>
    </article>
<?php endwhile; endif; ?>
<?php theme_include('footer'); ?>