<?php get_header() ?>
<?php
require('views/global/hero.php');

$user_id = get_the_author_meta('ID');

require('views/global/article-grid-list.php')
?>
<?php get_footer() ?>