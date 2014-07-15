<?php theme_include('header'); ?>
    <article id="article-<?php echo article_id(); ?>">
        <h3 class="article-title"><a href="<?php echo article_url(); ?>"><?php echo article_title();?></a></h3>
        <p class="article-info">
            by <a href="mailto:<?php echo user_authed_email(); ?>"><?php echo article_author(); ?></a>
             on <time datetime="<?php echo article_date(); ?>"><?php echo article_date(); ?></time>
             in <a href="<?php echo category_url(); ?>"><?php echo category_title(); ?></a>
            <?php if (comments_open()) : ?>
                <span>
                    <a href="#comment"><?php echo mp_article_total_comments(); ?> 
                    <?php if (mp_article_total_comments() != 1) : ?>
                        comments</a>
                    <?php else : ?>
                        comment</a>
                    <?php endif; ?>
                </span>
            <?php endif; ?>
         </p>
        <?php echo article_markdown(); ?>
    </article>
    <?php if (comments_open()) : ?>
    <!-- #comment -->
    <section class="comments">
        <div class="button"><a href="javascript:void(0)"></a></div>
        <div class="wrap">
            <div class="menu">
                <?php if(has_comments()): ?>
                    <h5 class="comment-info">
                        <?php echo mp_article_total_comments(); ?> 
                    <?php if (mp_article_total_comments() != 1) : ?>
                        comments</h5>
                    <?php else : ?>
                        comment</h5>
                    <?php endif; ?>
                    <ul class="commentlist">
                        <?php while(comments()): ?>
                            <li class="comment" id="comment-<?php echo comment_id(); ?>">
                                <h6 class="comment-name"><?php echo comment_name(); ?></h6>
                                <span class="comment-date"><time datetime="<?php echo comment_date(); ?>"><?php echo comment_date(); ?></time></span><br />
                                <?php echo comment_text(); ?>
                            </li>
                        <?php endwhile; ?>
                    </ul>
                <?php endif; ?>
                <h5 class="comment-info">Say something</h5>
                <form id="comment" class="commentform" method="post" action="<?php echo comment_form_url(); ?>#comment">
                    <p>
                        <?php echo comment_form_input_name('placeholder="Your name"'); ?>
                        <?php echo comment_form_input_email('placeholder="Your email (won’t be published)"'); ?>
                        <?php echo comment_form_input_text('placeholder="Your comment"'); ?>
                        <?php echo comment_form_button(); ?>
                    </p>
                </form>
            </div>
        </div>
    </section>
    <?php endif; ?>
<?php theme_include('footer'); ?>