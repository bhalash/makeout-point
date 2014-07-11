<?php theme_include('header'); ?>
<?php if(has_posts()) : while(posts()) : ?>
    <article>
        <h3 class="post-title"><a href="<?php echo article_url(); ?>"><?php echo article_title();?></a></h3>
        <p class="post-info">by <a href="mailto:<?php echo user_authed_email(); ?>"><?php echo article_author(); ?></a> on <time datetime="<?php echo article_date(); ?>"><?php echo article_date(); ?></time></p>
        <?php echo article_markdown(); ?>
    </article>
<?php endwhile; endif; ?>
<?php if(has_pagination()): ?>
    <p class="pagination">
        <!-- TODO: FIXME -->
        <span class="previous"><a href="<?php echo posts_prev(); ?>">Previous Page</a></span>
        <span class="next"><a href="<?php echo posts_next(); ?>">Next Page</a></span>
    </p>
<?php endif; ?>
<?php theme_include('footer'); ?>