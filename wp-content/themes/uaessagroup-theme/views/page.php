<?php
    if (is_front_page()) {
        require('page-about.php');
    }elseif (is_page('Services')) {
        require('page-services.php');
    }