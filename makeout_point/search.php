<?php theme_include('header'); ?>
<?php if(has_search_results()) : while(search_results()) : ?>
    <div class="fail">
        <h4>Results for '<?php echo search_term(); ?>'</h4>
        <?php if(total_search_results() == 1) : ?>
            <p><?php echo total_search_results(); ?> total result.</p>
        <?php else: ?>
            <p><?php echo total_search_results(); ?> total results.</p>
        <?php endif; ?>
    </div>
    <article>
        <h3 class="article-title"><a href="<?php echo article_url(); ?>"><?php echo article_title();?></a></h3>
        <p class="article-info">
            by <a href="mailto:<?php echo user_authed_email(); ?>"><?php echo article_author(); ?></a>
             on <time datetime="<?php echo article_date(); ?>"><?php echo article_date(); ?></time>
             in <a href="<?php echo category_url(); ?>"><?php echo category_title(); ?></a>
         </p>
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
<?php endwhile; ?>
<?php else: ?>
    <div class="fail">
        <h4>No match for '<?php echo search_term(); ?>'</h4>
        <p>The eyes of my ancestors are cast down in shame!</p>
    </div>
<?php endif; ?>
<?php theme_include('footer'); ?>