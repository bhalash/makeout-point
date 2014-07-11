<?php theme_include('header'); ?>
    <article id="article-<?php echo article_id(); ?>">
        <h3 class="article-title"><a href="<?php echo article_url(); ?>"><?php echo article_title();?></a></h3>
        <p class="article-info">by <a href="mailto:<?php echo user_authed_email(); ?>"><?php echo article_author(); ?></a> on <time datetime="<?php echo article_date(); ?>"><?php echo article_date(); ?></time></p>
        <?php echo article_markdown(); ?>
    </article>
    <?php if(comments_open()): ?>
    <section class="comments">
        <?php if(has_comments()): ?>
            <ul class="commentlist">
                <?php while(comments()): ?>
                    <li class="comment" id="comment-<?php echo comment_id(); ?>">
                        <h6><?php echo comment_name(); ?></h6>
                        <span class="comment-date"><time datetime="<?php echo comment_date(); ?>"><?php echo comment_date(); ?></time></span><br />
                        <?php echo comment_text(); ?>
                    </li>
                <?php endwhile; ?>
            </ul>
        <?php endif; ?>
        <form id="comment" class="commentform" method="post" action="<?php echo comment_form_url(); ?>#comment">
            <p>
                <?php echo comment_form_notifications(); ?>
                <?php echo comment_form_input_name('placeholder="Your name"'); ?>
                <?php echo comment_form_input_email('placeholder="Your email (won’t be published)"'); ?>
                <?php echo comment_form_input_text('placeholder="Your comment"'); ?>
                <?php echo comment_form_button(); ?>
            </p>
        </form>
    </section>
    <?php endif; ?>
<?php theme_include('footer'); ?>