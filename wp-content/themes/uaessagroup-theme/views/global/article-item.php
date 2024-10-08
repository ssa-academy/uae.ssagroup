<?php
if (is_page(array('consulting', 'training'))) {
    $servicepageOrganisations = new WP_Query(array(
        'post_type' => 'organisation'
    ));

    while ($servicepageOrganisations->have_posts()) {
        $servicepageOrganisations->the_post(); ?>
        <div class="bg-customWhite md:mx-4 mx-2">
            <!-- <div class="w-full md:h-[500px] min-h-96 text-customWhite p-5 bg-cover flex flex-col justify-end" style="background:linear-gradient(180deg, rgba(0, 0, 0, 0) 0%, rgba(0, 0, 0, 0.8) 100%), url('<?php //the_post_thumbnail_url(); 
                                                                                                                                                                                                                    ?>');
                                background-size: cover"> -->
            <a href="<?php the_permalink(); ?>" class="block group relative">
                <div class="w-full md:h-[300px] min-h-[300px] text-customWhite p-5 bg-cover flex flex-col justify-end transition-transform duration-500 ease-in-out transform hover:scale-105" style="background:linear-gradient(180deg, rgba(0, 0, 0, 0) 0%, rgba(0, 0, 0, 0.8) 100%), url('<?php the_post_thumbnail_url(); ?>'); background-size: cover; background-position: center;">
                    <div class="inline-flex justify-between mb-3">
                        <p class="text-[12px] font-[600] leading-[22px] text-customDark bg-customWhite px-5 rounded-xl hover:text-customYellow"><?php the_title(); ?></p>
                        <!-- <p class="text-[14px] font-[400] leading-[22px] text-customGray2 italic"><?php //the_time('F j, Y')
                                                                                                        ?></p> -->
                    </div>
                    <p class="text-sm text-left max-h-12 text-ellipsis line-clamp-2 mb-4">
                        <?php if (has_excerpt()) {
                            echo get_the_excerpt();
                        } else {
                            echo wp_trim_words(get_the_content(), 20, '...');
                        } ?>
                    </p>
                </div>
            </a>
        </div>
<?php  } //end of while loop
    wp_reset_postdata();
} ?>

<?php

if (is_front_page()) {
    while (have_posts()) {
        the_post();
?>
        <div class="bg-customWhite md:mx-4 mx-2">
            <!-- <div class="w-full md:h-[500px] min-h-96 text-customWhite p-5 bg-cover flex flex-col justify-end" style="background:linear-gradient(180deg, rgba(0, 0, 0, 0) 0%, rgba(0, 0, 0, 0.8) 100%), url('<?php //the_post_thumbnail_url(); 
                                                                                                                                                                                                                    ?>');
                        background-size: cover"> -->
            <a href="<?php the_permalink(); ?>" class="block group relative">
                <div class="w-full md:h-[300px] min-h-[300px] text-customWhite p-5 bg-cover flex flex-col justify-end transition-transform duration-500 ease-in-out transform hover:scale-105" style="background:linear-gradient(180deg, rgba(0, 0, 0, 0) 0%, rgba(0, 0, 0, 0.8) 100%), url('<?php the_post_thumbnail_url(); ?>'); background-size: cover; background-position: center;">
                    <div class="inline-flex justify-between mb-3">
                        <p class="text-xs font-semibold text-customDark bg-customWhite px-5 rounded-xl hover:text-customYellow py-[2px]"><?php the_title(); ?></p>
                        <p class="text-sm text-customGray2 italic"><?php the_time('F j, Y') ?></p>
                    </div>
                    <p class="text-sm text-left max-h-16 text-ellipsis line-clamp-3 mb-4"><?php if (has_excerpt()) {
                                                                                                echo get_the_excerpt();
                                                                                            } else {
                                                                                                echo wp_trim_words(get_the_content(), 20, '...');
                                                                                            } ?></p>
                </div>
            </a>
        </div>

<?php } //end of while loop
} ?>