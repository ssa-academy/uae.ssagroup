<?php get_header() ?>

<section>
    <div class="max-w-6xl mx-auto text-center mb-40 px-10 pt-16">
        <?php while (have_posts()) {
        the_post();
        ?>
        
        <!-- <p class="max-w-3xl mx-auto mb-10 text-customYellow text-2xl">By <?php //the_author_posts_link(); ?> <?php //the_time('F j, Y')?></p> -->
        <!-- By <a href="<?php // echo get_author_posts_url(get_the_author_meta('ID')); ?>" class="text-customYellow max-w-3xl mx-auto mb-10"><?php //the_author(); ?></a> <?php //the_time('F j, Y'); ?> -->
        <img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="" class="mx-auto my-16">
        <?php } ?>
        <h3 class="mb-8 text-3xl font-bold text-customDark md:text-3xl"><?php the_title(); ?></h3>
        
    </div>
</section>

<?php get_footer() ?>