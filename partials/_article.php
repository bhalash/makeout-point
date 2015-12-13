<article class="article article--regular" id="article--<?php echo article_id(); ?>">
    <header class="article__header">
        <h3 class="article__title">
            <a class="article__link" href="<?php echo article_url(); ?>"><?php echo article_title();?></a>
        </h3>
        <p class="article__info">
            <span class="article__author">by <a href="mailto:<?php echo user_authed_email(); ?>"><?php echo article_author(); ?></a></span>
            <span class="article_date">on <time datetime="<?php echo article_date(); ?>"><?php echo article_date(); ?></time></span>
            <span class="article__category">in <a href="<?php echo category_url(); ?>"><?php echo category_title(); ?></a></span>
            <?php if (comments_open()) : ?>
                <span class="article__comment-count">
                    <a href="<?php echo article_url(); ?>#comments"><?php echo pluralize_wrap('comment', article_comment_count()); ?></a>
                </span>
            <?php endif; ?>
        </p>
    </header>
    <div class="article__content">
        <?php echo article_html(); ?>
    </div>
</article>
