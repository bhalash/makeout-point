    <footer>
        <?php if(has_pagination()): ?>
            <p class="pagination">
                <!-- TODO: FIXME -->
                <span class="previous"><?php echo posts_prev(); ?></span>
                <span class="next"><?php echo posts_next(); ?></span>
            </p>
        <?php endif; ?>
    </footer>
    </div>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="http://cdnjs.cloudflare.com/ajax/libs/prettify/r224/prettify.js" type="text/javascript"></script>
    <script src="<?php echo theme_url('js/functions.js'); ?>"></script>
</body>
</html>