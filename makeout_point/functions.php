<?php

function twitter_account() {
    return site_meta('twitter', 'bhalash');
}

function twitter_url() {
    return 'https://twitter.com/' . twitter_account();
}

?>