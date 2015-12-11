<!-- #comment -->
<section class="comments">
    <div class="button comments-button"><a href="javascript:void(0)"></a></div>
    <div class="wrap comments-wrap">
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
                <fieldset>
                    <?php printf(comment_form_input_name('placeholder="Your name"')); ?>
                    <?php printf(comment_form_input_email('placeholder="Your email (won’t be published))"')); ?>
                    <?php printf(comment_form_input_text('placeholder="Your comment"')); ?>
                    <?php printf(comment_form_button()); ?>
                </fieldset>
            </form>
        </div>
    </div>
</section>
