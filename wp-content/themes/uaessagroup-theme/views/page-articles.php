<?php
    require('pages/partials-articles/hero-articles.php');
?>

<?php 
    $paged = ( get_query_var('page') ) ? get_query_var('page') : 1;
    $args = array(
        'post_type'=> 'post',
        'orderby'    => 'ID',
        'post_status' => 'publish',
        'order'    => 'DESC',
        'posts_per_page' => 9,  
        'paged' => $paged // what page parameter
        );

        $result = new WP_Query( $args );
    if ( $result-> have_posts() ) : ?>


<section class="w-full min-h-max bg-customWhite py-10">
    <div class="container grid md:grid-cols-3 gap-10 auto-rows-fr px-5">
    <?php while ( $result->have_posts() ) :
         $result->the_post(); ?>
        <div class="group py-2 grid gap-2 overflow-hidden">
            <img src="<?php the_post_thumbnail_url(); ?>" class="md:max-h-64 w-full object-cover transition-transform duration-500 ease-in-out transform group-hover:scale-105" alt="">
            <p class="text-[14px] font-[400] leading-[22px] italic text-gray-400"><?php the_time('F j, Y')?></p>
            <h1 class="text-[20px] font-[700] leading-[26px] font-poppins"><?= the_title(); ?></h1>  
            <p class="text-[14px] font-[400] leading-[22px] text-justify max-h-12 text-ellipsis line-clamp-2 mb-4"><?= get_the_excerpt() ?></p>
        </div>       
    <?php endwhile; ?>
    </div>
    <?php 
    next_posts_link( __( 'Older Entries', 'textdomain' ), $result->max_num_pages );
	previous_posts_link( __( 'Newer Entries', 'textdomain' ) );

    wp_reset_postdata();
    ?>
</section>


<?php endif; ?>


