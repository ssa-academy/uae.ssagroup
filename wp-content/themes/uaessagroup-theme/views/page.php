<?php
    if (is_front_page()) {
        require('page-about.php');
    }elseif (is_page('Consulting')) {
        require('page-consulting.php');
    }elseif(is_page('Training')){
        require('page-training.php');
    }elseif(is_page('articles')){
        require('page-articles.php');
    }