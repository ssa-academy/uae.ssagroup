<?php while (have_posts()) {
    the_post(); 
    ?>
<div class="bg-customWhite md:mx-4 mx-2">
    <!-- <div class="w-full md:h-[500px] min-h-96 text-customWhite p-5 bg-cover flex flex-col justify-end" style="background:linear-gradient(180deg, rgba(0, 0, 0, 0) 0%, rgba(0, 0, 0, 0.8) 100%), url('<?php //the_post_thumbnail_url(); ?>');
            background-size: cover"> -->
    <a href="<?php the_permalink(); ?>" class="block group relative">
    <div class="w-full md:h-[500px] min-h-96 text-customWhite p-5 bg-cover flex flex-col justify-end transition-transform duration-500 ease-in-out transform hover:scale-105" 
    style="background:linear-gradient(180deg, rgba(0, 0, 0, 0) 0%, rgba(0, 0, 0, 0.8) 100%), url('<?php the_post_thumbnail_url(); ?>'); background-size: cover; background-position: center;">
        <div class="inline-flex justify-between mb-3">
            <p class="text-[12px] font-[600] leading-[22px] text-customDark bg-customWhite px-5 rounded-xl hover:text-customYellow"><?php the_title(); ?></p>
            <p class="text-[14px] font-[400] leading-[22px] text-customGray2 italic"><?php the_time('F j, Y')?></p>
        </div>
        <p class="text-[14px] font-[700] leading-[24px] text-justify max-h-12 text-ellipsis line-clamp-2 mb-4"><?php echo wp_trim_words(get_the_excerpt(), 20, '...'); ?></p>
     </div>
    </a>
</div>
<?php } ?>

