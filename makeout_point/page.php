<?php theme_include('header'); ?>
    <article id="article-<?php echo page_id(); ?>">
        <p class="article-info"></p>
        <h3 class="article-title"><a href="<?php echo page_url(); ?>"><?php echo page_title();?></a></h3>
        <?php echo page_content(); ?>
    </article>
<?php theme_include('footer'); ?>