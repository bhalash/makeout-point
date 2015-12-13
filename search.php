<?php partial('header'); ?>

<?php if(has_search_results()); ?>
    <?php while(search_results()) : ?>

        <div class="fail">
            <h4>Results for '<?php echo search_term(); ?>'</h4>
            <p><?php pluralize_wrap('result', total_search_results()); ?></p>
        </div>

        <?php partial('article'); ?>

        <?php if (has_pagination()) {
            partial('pagination', 'search');
        } ?>

    <?php endwhile; ?>
<?php endif; ?>

<?php partial('footer'); ?>
