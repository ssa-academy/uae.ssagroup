<?php
$servicepageOrganisations = new WP_Query(array(
    'post_type' => 'organisation'
));
?>


<section class="w-full min-h-max bg-customDark py-10 
<?php if (is_front_page() and empty(have_posts())) {
    echo 'hidden';
} elseif (is_page(array('consulting', 'training')) and empty($servicepageOrganisations->have_posts())) {
    echo 'hidden';
} ?>
">
    <div class="container xl:max-w-screen-2xl xl:px-14 px-5">
        <p class="text-lg font-bold font-poppins text-customWhite">Articles <a href="<?= is_front_page() ?  site_url('/blog') : site_url('/organisation') ?>"><span class="text-sm font-normal text-customYellow float-end hover:underline italic">View all</span></a></p>

        <!-- for organisation view all archive dont delete -->
        <!-- <p class="text-[26px] font-[700] leading-[34px] text-customWhite">Articles <a href="<?php //echo get_post_type_archive_link('organisation') 
                                                                                                    ?>"><span class="text-[14px] font-[400] leading-[22px] text-customYellow float-end underline italic">View all</span></a></p> -->
    </div>
    <div class="container article-slider xl:max-w-screen-2xl xl:px-8 my-10" data-aos="zoom-in">
        <?php /*foreach($articles as $article){
            $thumbnail = $article['thumbnail'];
            $pill = $article['pill'];
            $date = $article['date'];
            $description = $article['description'];
            require('article-item.php');
        }*/ ?>
        <?php
        require('article-item.php');
        ?>

    </div>
    <div class="container text-2xl text-customWhite flex justify-end space-x-8 xl:px-14 px-5">
        <button class="article-prev-button w-10 h-10 border-2 rounded-full hover:text-customYellow hover:border-customYellow" type="button">
            <i class="fa-solid fa-arrow-left"></i>
        </button>
        <button class="article-next-button w-10 h-10 border-2 rounded-full hover:text-customYellow hover:border-customYellow" type="button">
            <i class="fa-solid fa-arrow-right"></i>
        </button>
    </div>
</section>