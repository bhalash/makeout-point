<?php partial('header'); ?>

<?php if(has_search_results()); ?>
    <?php while(search_results()) : ?>

        <div class="fail">
            <h4>Results for '<?php echo search_term(); ?>'</h4>
            <?php if(total_search_results() == 1) : ?>
                <p><?php echo total_search_results(); ?> total result.</p>
            <?php else: ?>
                <p><?php echo total_search_results(); ?> total results.</p>
            <?php endif; ?>
        </div>

        <?php partial('article'); ?>

        <?php if(has_pagination()): ?>
            <nav class="pagination">
                <div class="wrap">
                    <?php echo search_prev(); ?>
                    <?php echo search_next(); ?>
                </div>
            </nav>
        <?php endif; ?>
    <?php endwhile; ?>
<?php else:
    include('404.php');
endif; ?>

<?php partial('footer'); ?>
