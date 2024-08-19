<?php
if (is_front_page()) {
    require('page-about.php');
} elseif (is_page('Consulting')) {
    require('page-consulting.php');
} elseif (is_page('Training')) {
    require('page-training.php');
} elseif (is_page('articles')) {
    require('page-articles.php');
} elseif (is_page('contact')) {
    require('page-contact.php');
} elseif (is_page('blog')) {
    require('page-blog.php');
} elseif (is_404()) {
    require('404.php');
}
