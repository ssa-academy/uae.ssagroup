<?php

$article_1st = new WP_Query(array(
    'post_type' => 'post',
    'posts_per_page' => 1,

)); ?>

<section class="min-h-max bg-customDark py-20">
    <?php ?>
    <div class="container px-5 <?= !empty($article_1st->have_posts()) ? 'hidden' : 'grid justify-center items-center' ?>">
        <img src="<?php echo get_template_directory_uri(); ?>/src/images/stay-tuned.png" alt="stay tuned" class="object-cover w-full max-h-[450px]">
    </div>
    <div class="container px-5 pb-10 text-customWhite space-y-5 mb-10 lg:mb-0 <?= empty($article_1st->have_posts()) ? 'hidden' : '' ?>">
        <h1 class="text-xl font-bold font-poppins">Insights</h1>
        <p class="text-sm lg:max-w-[784px]">Explore our current perspectives on the most important topics in the world of business and technology. </p>
    </div>
    <div class="container px-5">
        <div class="grid lg:grid-cols-5 lg:gap-20 gap-16">
            <!-- INITIAL ARTICLE -->
            <div class="grid gap-5 lg:col-span-3" data-aos="fade-down-left">
                <?php if ($article_1st->have_posts()) {
                    $article_1st->the_post();
                ?>
                    <a href="<?php the_permalink(); ?>"><img src="<?php the_post_thumbnail_url(); ?>" class="object-cover max-h-44 w-full md:max-h-[316px]" alt=""></a>
                    <div class="flex justify-between mt-3">
                        <p class="text-xs font-semibold text-customDark bg-customWhite px-5 rounded-xl"><?= get_the_category_list(' ') ?></p>
                        <p class="text-sm text-customGray2 italic"><?php the_time('F j, Y') ?></p>
                    </div>
                    <a href="<?php the_permalink(); ?>">
                        <h2 class="text-xl font-bold font-poppins text-customWhite"><?= the_title() ?></h2>
                        <div class="text-sm mt-5 text-customWhite line-clamp-2 text-ellipsis overflow-hidden"><?= get_the_content() ?></div>
                    </a>
                <?php } ?>
            </div>

            <!-- REST OF THE ARTICLE -->
            <div class="grid lg:col-span-2 lg:gap-5" data-aos="fade-down-left" data-aos-delay="200">
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
                        <a class="border-b border-customWhite" href="<?php the_permalink() ?>">
                            <div class=" flex py-5 gap-5 lg:py-0">
                                <img src="<?php the_post_thumbnail_url(); ?>" class="aspect-square lg:aspect-auto max-h-32 object-cover" alt="">
                                <div class="flex flex-col gap-5">
                                    <p class="text-sm text-customGray2 italic"><?php the_time('F j, Y') ?></p>
                                    <h2 class="text-[20px] font-bold leading-[26px] font-poppins text-customWhite line-clamp-3 overflow-hidden text-ellipsis"><?= the_title() ?></h2>
                                </div>
                            </div>
                        </a>
                <?php }
                }
                wp_reset_postdata();
                ?>

            </div>
        </div>
    </div>
</section>