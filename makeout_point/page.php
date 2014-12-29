<?php theme_include('header'); ?>
    <!-- Wordpress pages are basically posts. This threw me. Pages here don't have author or creation date. -->
    <!-- Neither do they have comments. I guess they are supposed to be pinned/linked-to reference items. -->
    <!-- Nice change IMO. --> 
    <article id="article-<?php echo page_id(); ?>">
        <h3 class="article-title"><a href="<?php echo page_url(); ?>"><?php echo page_title();?></a></h3>
        <p class="article-info">&nbsp;</p>
        <?php echo page_content(); ?>
    </article>
<?php theme_include('footer'); ?>