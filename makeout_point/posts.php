<?php theme_include('header'); ?>
<?php if(has_posts()) : while(posts()) : ?>
    <article>
        <h3 class="article-title"><a href="<?php echo article_url(); ?>"><?php echo article_title();?></a></h3>
        <p class="article-info">
            by <a href="mailto:<?php echo user_authed_email(); ?>"><?php echo article_author(); ?></a>
             on <time datetime="<?php echo article_date(); ?>"><?php echo article_date(); ?></time>
             in <a href="<?php echo category_url(); ?>"><?php echo category_title(); ?></a>
            <?php if (comments_open()) : ?>
                <span>
                    <?php if (total_comments() == 1) : ?>
                        <a href="<?php echo article_url(); ?>#comments"><?php echo total_comments(); ?> comment</a>
                    <?php else : ?>
                        <a href="<?php echo article_url(); ?>#comments"><?php echo total_comments(); ?> comments</a>
                    <?php endif; ?>
                </span>
            <?php endif; ?>
         </p>
        <?php echo article_markdown(); ?>
    </article>
<?php endwhile; endif; ?>
<?php if(has_pagination()): ?>
    <p class="pagination">
        <span class="previous"><?php echo posts_prev(); ?></span>
        <span class="next"><?php echo posts_next(); ?></span>
    </p>
<?php endif; ?>
<?php theme_include('footer'); ?>