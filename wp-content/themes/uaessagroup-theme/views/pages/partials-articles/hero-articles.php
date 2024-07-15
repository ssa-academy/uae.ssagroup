<section class="min-h-max bg-customDark py-20">
    <div class="container px-5 pb-10 text-customWhite space-y-5">
        <h1 class="text-[40px] font-[700] leading-[50px] font-poppins">Insights</h1>
        <p class="text-[14px] font-[400] leading-[22px] lg:max-w-[784px]">Explore our current perspectives on the most important topics in the world of business and technology. </p>
    </div>
    <div class="container px-5">
        <div class="grid lg:grid-cols-5 lg:gap-20 gap-10">
            <!-- INITIAL ARTICLE -->
            <div class="grid gap-5 lg:col-span-3">
                <?php
                $article_1st = new WP_Query(array(
                    'post_type' => 'post',
                    'posts_per_page' => 1,

                ));

                if ($article_1st->have_posts()) {
                    $article_1st->the_post();
                ?>
                    <a href="<?php the_permalink(); ?>"><img src="<?php the_post_thumbnail_url(); ?>" class="object-cover max-h-44 w-full md:max-h-[316px]" alt=""></a>
                    <div class="flex justify-between mt-3">
                        <p class="text-[12px] font-[600] leading-[22px] text-customDark bg-customWhite px-5 rounded-xl"><?= get_the_category_list(' ') ?></p>
                        <p class="text-[14px] font-[400] leading-[22px] text-customGray2 italic"><?php the_time('F j, Y') ?></p>
                    </div>
                    <a href="<?php the_permalink(); ?>">
                        <h2 class="text-[30px] font-[700] leading-[40px] font-poppins text-customWhite"><?= the_title() ?></h2>
                        <div class="text-[14px] font-[400] leading-[22px] mt-5 text-customWhite line-clamp-2 text-ellipsis overflow-hidden"><?= get_the_content() ?></div>
                    </a>
                <?php } ?>
            </div>

            <!-- REST OF THE ARTICLE -->
            <div class="grid lg:col-span-2 lg:gap-8">
                <?php
                $article_next_three = new WP_Query(array(
                    'post_type' => 'post',
                    'posts_per_page' => 3,
                    'offset' => 1
                ));

                if ($article_next_three->have_posts()) {
                ?>

                    <?php while ($article_next_three->have_posts()) {
                        $article_next_three->the_post();
                    ?>
                        <div class="flex border-b border-customWhite py-5 gap-5 lg:py-0">
                            <img src="<?php the_post_thumbnail_url(); ?>" class="aspect-square lg:aspect-auto max-h-32 object-cover" alt="">
                            <div class="flex flex-col gap-5">
                                <p class="text-[14px] font-[400] leading-[22px] text-customGray2 italic"><?php the_time('F j, Y') ?></p>
                                <h2 class="text-[20px] font-[700] leading-[26px] font-poppins text-customWhite line-clamp-3 overflow-hidden text-ellipsis"><?= the_title() ?></h2>
                            </div>
                        </div>

                <?php }
                }
                wp_reset_postdata();
                ?>

            </div>
        </div>
    </div>
</section>