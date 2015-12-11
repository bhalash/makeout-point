<?php partial('header'); ?>

<article class="article article--page"id="article-<?php echo page_id(); ?>">
    <h3 class="article__title"><a href="<?php echo page_url(); ?>"><?php echo page_title();?></a></h3>
    <p class="article__info">&nbsp;</p>
    <div class="article__content">
        <?php echo page_content(); ?>
    </div>
</article>

<?php partial('footer'); ?>
