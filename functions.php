<?php

/**
 * Count Comments
 * -----------------------------------------------------------------------------
 * Anchor returns the /total/ count of comments, not the total count for the
 * post.
 *
 * @return  string                      Total number of comments.
 * @link https://github.com/anchorcms/anchor-cms/issues/357
 */

function article_comment_count($article_id = null) {
    $article_id = $article_id ?: article_id();
    return Comment::where('post', '=', $article_id)->count();
}

/**
 * Twiter URL
 * -----------------------------------------------------------------------------
 * @param   string      $fallback       Default twitter account to use.
 * @return  string                      Twitter profile URL.
 */

function site_meta_twitter($fallback = 'bhalash') {
    return sprintf('https://twitter.com/%s', site_meta('twitter', $fallback));
}

/**
 * Pluralize Words
 * -----------------------------------------------------------------------------
 * This is a Terrible, Horrible, No Good, Very Bad pluralization solution.
 *
 * @param   string      $word           Word to pluralize.
 * @param   int         $count          Quantity to pluralize against.
 * @return  string      $word           Pluralized word.
 */

function pluralize($word, $count) {
    if (abs($count) !== 1) {
        switch ($word) {
            case preg_match('/o$/', $word):
                $word .= 's'; break;
            case preg_match('/.+(s|x|z|ch|sh|)$/', $word):
                $word .= 'es'; break;
            default:
                $word .= 's';
        }
    }

    return $word;
}

/**
 * Wrap Pluralized Word
 * -----------------------------------------------------------------------------
 * This is a Terrible, Horrible, No Good, Very Bad pluralization solution.
 *
 * @param   string      $word           Word to pluralize.
 * @param   int         $count          Quantity to pluralize against.
 * @return                              Pluralized word preceded by count.
 */

function pluralize_wrap($word, $count) {
    return sprintf('%s %s', $count, pluralize($word, $count));
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
