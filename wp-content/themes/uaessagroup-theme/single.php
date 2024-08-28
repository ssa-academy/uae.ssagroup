<?php get_header() ?>

<section class="min-h-max bg-customWhite py-12">
    <div class="container px-5 space-y-5 lg:grid lg:grid-cols-4 lg:gap-14">
        <div class="grid gap-5 lg:col-span-3">
            <?php
            while (have_posts()) {
                the_post();
                $category = get_the_category()[0]->name;

            ?>
                <div class="grid gap-3 justify-center text-center">
                    <p class="text-xs font-semibold text-customDark bg-gray-200 px-5 rounded-xl max-w-max mx-auto"><?= $category ?></p>
                    <h1 class="text-xl font-bold font-poppins"><?php the_title() ?></h1>
                    <p class="text-sm italic text-gray-400"><?php the_author_posts_link(); ?> • <?php the_time('F j, Y') ?></p>
                </div>
                <div class="grid">
                    <img src="<?= get_the_post_thumbnail_url(); ?>" class="max-h-96 object-cover w-full" alt="">
                    <div class="py-20"><?= the_content() ?></div>
                </div>
            <?php } //end of while loop
            ?>
        </div>
        <div class="lg:max-w-80">
            <h1 class="text-lg font-bold font-poppins">Training Services</h1>
            <?php
            $trainingServices = new WP_Query(array(
                'post_type' => 'training'
            ));

            while ($trainingServices->have_posts()) {
                $trainingServices->the_post();
            ?>
                <a href="<?= the_permalink(); ?>">
                    <div class="flex border-b border-customDark py-5 gap-5">
                        <img src="<?= get_the_post_thumbnail_url() ?>" class="aspect-square max-h-24 object-cover duration-300 ease-in-out transform hover:scale-105" alt="">
                        <div class="flex items-center">
                            <h2 class="text-sm font-bold font-poppins line-clamp-3 overflow-hidden text-ellipsis"><?= the_title() ?></h2>
                        </div>
                    </div>
                </a>
            <?php } //end of while loop
            wp_reset_postdata();
            ?>
        </div>
    </div>
</section>

<?php require('views/global/ready-to-connect.php') ?>

<?php get_footer() ?>