<?php

function twitter_account() {
    return site_meta('twitter', 'bhalash');
}

function twitter_url() {
    return 'https://twitter.com/' . twitter_account();
}

// Anchor returns the /total/ count of comments, not the total count for the post.
// See https://github.com/anchorcms/anchor-cms/issues/357
function mp_article_total_comments() {
    return Comment::where('post', '=', article_id())->count();
}

function partial($slug) {
    include(sprintf('%s/partials/_%s.php', __DIR__, $slug));
}

?>
