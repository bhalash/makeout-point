<article class="article article--regular">
    <h3 class="article__title">
        <a href="<?php echo article_url(); ?>"><?php echo article_title();?></a>
    </h3>
    <p class="article__info">
        by <a href="mailto:<?php echo user_authed_email(); ?>"><?php echo article_author(); ?></a>
         on <time datetime="<?php echo article_date(); ?>"><?php echo article_date(); ?></time>
         in <a href="<?php echo category_url(); ?>"><?php echo category_title(); ?></a>
        <?php if (comments_open()) : ?>
            <span>
                <a href="<?php echo article_url(); ?>#comments"><?php echo mp_article_total_comments(); ?>
                <?php if (mp_article_total_comments() != 1) : ?>
                    comments</a>
                <?php else : ?>
                    comment</a>
                <?php endif; ?>
            </span>
        <?php endif; ?>
     </p>
    <div class="article__content">
        <?php echo article_markdown(); ?>
    </div>
</article>
