<?php

/**
 * Twiter URL
 * -----------------------------------------------------------------------------
 * @param   string      $default        Default twitter account to use.
 */

function meta_twitter_href($default = 'bhalash') {
    printf('https://twitter.com/%s', site_meta('twitter', $default));
}

/**
 * Count Comments
 * -----------------------------------------------------------------------------
 * Anchor returns the /total/ count of comments, not the total count for the
 * post.
 *
 * @return  string                      Total number of comments.
 * @link https://github.com/anchorcms/anchor-cms/issues/357
 */

function total_comments() {
    return Comment::where('post', '=', article_id())->count();
}

/**
 * Fetch Partial
 * -----------------------------------------------------------------------------
 * Output post header information (category and date).
 *
 * @param   string      $partial        Partial file.
 * @param   string      $variant        File variant.
 */

function partial($partial, $variant = null) {
    if ($variant) {
        $variant = '-' . $variant;
    }

    include(sprintf('%s/partials/_%s%s.php', __DIR__, $partial, $variant));
}

?>
