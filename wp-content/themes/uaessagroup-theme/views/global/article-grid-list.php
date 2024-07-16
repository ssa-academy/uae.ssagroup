<?php

$paged = (get_query_var('paged')) ? absint(get_query_var('paged')) : 1;

$args = array(
    'post_type' => $post ?? 'post',
    'post_status' => 'publish',
    'order'    => 'DESC',
    'posts_per_page' => 9,
    'paged' => $paged,
    'author' => $user_id ?? ''

);

$result = new WP_Query($args);
if ($result->have_posts()) : ?>


    <section class="w-full min-h-max bg-customWhite py-10">
        <div class="container">'
            <h1 class="text-[26px] font-[700] leading-[34px] font-poppins px-5 pb-10">All Articles </h1>
        </div>
        <div class="container grid md:grid-cols-3 gap-10 auto-rows-fr px-5">
            <?php while ($result->have_posts()) :
                $result->the_post(); ?>
                <a href="<?php the_permalink(); ?>">
                    <div class="group py-2 grid gap-2 overflow-hidden">
                        <img src="<?php the_post_thumbnail_url(); ?>" class="md:max-h-64 w-full object-cover transition-transform duration-500 ease-in-out transform group-hover:scale-105" alt="">
                        <p class="text-[14px] font-[400] leading-[22px] italic text-gray-400"><?php the_time('F j, Y') ?></p>
                        <h1 class="text-[20px] font-[700] leading-[26px] font-poppins"><?= the_title(); ?></h1>
                        <p class="text-[14px] font-[400] leading-[22px] text-justify max-h-12 text-ellipsis line-clamp-2 mb-4"><?= get_the_excerpt() ?></p>
                    </div>
                </a>
            <?php endwhile; ?>
        </div>
        <div class="container mt-10 flex justify-end px-5 gap-5 text-[14px] font-[400] leading-[22px]">
            <?php
            $big = 999999999;

            echo $paginate = paginate_links(array(
                'base' => str_replace($big, '%#%', esc_url(get_pagenum_link($big))),
                'format' => '?paged=%#%',
                'current' => max(1, get_query_var('paged')),
                'prev_next' => false,
                'total' => $result->max_num_pages,
            ));
            ?>
        </div>
    </section>


<?php endif; ?>
<?php wp_reset_postdata() ?>