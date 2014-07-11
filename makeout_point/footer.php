    <footer>
        <?php if(has_pagination()): ?>
            <p class="pagination">
                <!-- TODO: FIXME -->
                <span class="previous"><a href="<?php echo posts_prev(); ?>">Previous Page</a></span>
                <span class="next"><a href="<?php echo posts_next(); ?>">Next Page</a></span>
            </p>
        <?php endif; ?>
    </footer>
    </div>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="<?php echo theme_url('prettify/prettify.js'); ?>"></script>
    <script src="<?php echo theme_url('functions.js'); ?>"></script>
</body>
</html>