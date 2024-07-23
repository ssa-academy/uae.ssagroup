<?php get_header() ?>

<section class="min-h-max bg-customWhite py-12">
    <div class="container px-5 space-y-5 lg:grid lg:grid-cols-3 lg:gap-10">
        <div class="grid gap-5 lg:col-span-2">
            <?php
            while (have_posts()) {
                the_post();

            ?>
                <div class="grid gap-3 justify-center text-center pb-12">
                    <h1 class="text-xl font-bold font-poppins"><?php the_title() ?></h1>
                </div>
                <div class="grid gap-20">
                    <img src="<?= get_the_post_thumbnail_url(); ?>" class="max-h-96 object-cover w-full" alt="">
                    <div class="py-12"><?= the_content() ?></div>
                </div>
            <?php } //end of while loop
            ?>
        </div>
        <div>
            <h1 class="text-lg font-bold font-poppins">Other Consulting Program</h1>
            <?php
            $trainingServices = new WP_Query(array(
                'post_type' => 'post',
                'posts_per_page' => 6
            ));

            while ($trainingServices->have_posts()) {
                $trainingServices->the_post();
            ?>
                <a href="<?= the_permalink(); ?>">
                    <div class="flex border-b border-customDark py-5 gap-5">
                        <img src="<?= get_the_post_thumbnail_url() ?>" class="aspect-square max-h-24 object-cover" alt="">
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