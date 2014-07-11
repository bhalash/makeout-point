<?php theme_include('header'); ?>
    <article id="article-<?php echo article_id(); ?>">
        <h3 class="post-title"><a href="<?php echo article_url(); ?>"><?php echo article_title();?></a></h3>
        <p class="post-info">by <a href="mailto:<?php echo user_authed_email(); ?>"><?php echo article_author(); ?></a> on <time datetime="<?php echo article_date(); ?>"><?php echo article_date(); ?></time></p>
        <?php echo article_markdown(); ?>
    </article>
    <?php if(comments_open()): ?>
    <section class="comments">
        <?php if(has_comments()): ?>
            <ul class="commentlist">
                <?php $i = 0; while(comments()): $i++; ?>
                    <li class="comment" id="comment-<?php echo comment_id(); ?>">
                        <div class="wrap">
                            <span class="counter"><?php echo $i; ?></span>
                            <h5><?php echo comment_name(); ?></h5>
                            <div class="content">
                                <?php echo comment_text(); ?>
                            </div>
                        </div>
                    </li>
                <?php endwhile; ?>
            </ul>
        <?php endif; ?>
        <form id="comment" class="commentform wrap" method="post" action="<?php echo comment_form_url(); ?>#comment">
            <?php echo comment_form_notifications(); ?>
            <p class="name">
                <label for="name">Your name:</label>
                <?php echo comment_form_input_name('placeholder="Your name"'); ?>
            </p>
            <p class="email">
                <label for="email">Your email address:</label>
                <?php echo comment_form_input_email('placeholder="Your email (won’t be published)"'); ?>
            </p>
            <p class="textarea">
                <label for="text">Your comment:</label>
                <?php echo comment_form_input_text('placeholder="Your comment"'); ?>
            </p>
            <p class="submit">
                <?php echo comment_form_button(); ?>
            </p>
        </form>
    </section>
    <?php endif; ?>
<?php theme_include('footer'); ?>