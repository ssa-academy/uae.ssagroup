<?php get_header() ?>

<section class="min-h-max bg-customWhite py-12">
    <div class="container px-5 space-y-5 lg:grid lg:grid-cols-3 lg:gap-10">
        <div class="grid gap-5 lg:col-span-2">
            <?php
            while (have_posts()) {
                the_post();
                $category = get_the_category()[0]->name;

            ?>
                <div class="grid gap-3 justify-center text-center">
                    <p class="text-[12px] font-[600] leading-[22px] text-customDark bg-customGray2 px-5 rounded-xl max-w-max mx-auto"><?= $category ?></p>
                    <h1 class="text-[40px] font-[700] leading-[50px] font-poppins"><?php the_title() ?></h1>
                    <p class="text-[14px] font-[400] leading-[22px] italic text-gray-400"><?php the_author_posts_link(); ?> • <?php the_time('F j, Y') ?></p>
                </div>
                <div class="grid gap-5">
                    <img src="<?= get_the_post_thumbnail_url(); ?>" alt="">
                    <p><?= the_excerpt() ?></p>
                </div>
            <?php } //end of while loop
            ?>
        </div>
        <div>
            <h1 class="text-[26px] font-[700] leading-[34px] font-poppins">Training Services</h1>
            <?php
            $trainingServices = new WP_Query(array(
                'post_type' => 'training'
            ));

            while ($trainingServices->have_posts()) {
                $trainingServices->the_post();
            ?>
                <a href="<?= the_permalink(); ?>">
                    <div class="flex border-b border-customDark py-5 gap-5">
                        <img src="<?= get_the_post_thumbnail_url() ?>" class="aspect-square max-h-24 object-cover" alt="">
                        <div class="flex items-center">
                            <h2 class="text-[14px] font-[700] leading-[24px] font-poppins line-clamp-3 overflow-hidden text-ellipsis"><?= the_title() ?></h2>
                        </div>
                    </div>
                </a>
            <?php } //end of while loop
            wp_reset_postdata();
            ?>
        </div>
    </div>
</section>

<section>
    <div class="max-w-6xl mx-auto text-center mb-40 px-10 pt-16">
        <?php while (have_posts()) {
            the_post();
        ?>
            <h3 class="mb-8 text-3xl font-bold text-customDark md:text-3xl"><?php the_title(); ?></h3>
            <p class="max-w-3xl mx-auto mb-10 text-customYellow text-2xl">By <?php the_author_posts_link(); ?> <?php the_time('F j, Y') ?></p>
            <!-- By <a href="<?php //echo get_author_posts_url(get_the_author_meta('ID'));
                                ?>" class="text-customYellow max-w-3xl mx-auto mb-10"><?php //the_author();
                                                                                                                                                ?></a> <?php //the_time('F j, Y'); 
                                                                                                                                                                            ?> -->
            <img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="" class="mx-auto my-16">
        <?php } ?>
        <p class="max-w-3xl mx-auto mb-10 text-2xl"><?php the_excerpt(); ?></p>
        <h1>hello world</h1>
    </div>
</section>

<?php get_footer() ?>