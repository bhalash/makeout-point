<?php

partial('header');
partial('article');


if (comments_open()) {
    partial('comments');
}

partial('footer');

?>
