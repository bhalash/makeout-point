<?php

partial('header');

if(has_posts()) {
    while(posts()) {
        partial('article');
    }
}

if(has_pagination()) {
    partial('pagination');
}

partial('footer');

?>
