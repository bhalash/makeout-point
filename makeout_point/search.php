<?php theme_include('header'); ?>
<p>Results for &ldquo;<?php echo search_term(); ?>&rdquo;.</p>
<?php if(has_search_results()) : while(search_results()) : ?>
    <article>
        <h3 class="article-title"><a href="<?php echo article_url(); ?>"><?php echo article_title();?></a></h3>
        <p class="article-info">by <a href="mailto:<?php echo user_authed_email(); ?>"><?php echo article_author(); ?></a> on <time datetime="<?php echo article_date(); ?>"><?php echo article_date(); ?></time></p>
        <?php echo article_markdown(); ?>
    </article>
    <?php if(has_pagination()): ?>
    <nav class="pagination">
        <div class="wrap">
            <?php echo search_prev(); ?>
            <?php echo search_next(); ?>
        </div>
    </nav>
    <?php endif; ?>
<?php endwhile; endif; ?>
<?php else: ?>
    <p class="wrap">No match for &ldquo;<?php echo search_term(); ?>&rdquo;. Fail.</p>
<?php endif; ?>
<?php theme_include('footer'); ?>