<?php
$testimonials = [
    [
        'quote' => 'Khalifa Fund is extremely excited to launch this innovative and resourceful tool [SME Rating]. Our objective is to give our SMEs the opportunity to excel further through the provision of a platform that will allow them to grow and improve.',
        'name' => 'Mouza Obaid Al Nasri',
        'position' => 'Khalifa Fund for Enterprise Development'
    ]
];


?>


<section class="w-full min-h-max bg-customDark">
    <div class="container xl:max-w-screen-2xl py-20 lg:grid lg:grid-cols-2 px-5 sm:px-0 space-y-10 lg:space-y-0">
        <div class="container mx-auto xl:max-w-xl xl:px-0 text-customWhite space-y-3">
            <h1 class="text-xl font-bold font-poppins lg:w-60">From our Partners</h1>
            <p class="text-sm">Read what our clients say about our products and services.</p>
            <div class="<?php count($testimonials) == 1 ? "hidden" : "" ?> text-2xl hidden lg:block pt-10 px-3 space-x-8">
                <button class="prev-button w-10 h-10 border-2 rounded-full hover:text-customYellow hover:border-customYellow" type="button">
                    <i class="fa-solid fa-arrow-left"></i>
                </button>
                <button class="next-button w-10 h-10 border-2 rounded-full hover:text-customYellow hover:border-customYellow" type="button">
                    <i class="fa-solid fa-arrow-right"></i>
                </button>
            </div>
        </div>

        <div class="container xl:pr-14 text-customWhite">
            <p class="text-6xl"><i class="fa-solid fa-quote-left"></i></p>
            <ul class="testimonials mt-8">
                <?php foreach ($testimonials as $testimonial) : ?>
                    <li>
                        <p class="text-lg font-bold font-poppins"><?= $testimonial['quote'] ?></p>
                        <p class="text-[18px] font-[700] leading-[24px] mt-10"><?= $testimonial['name'] ?></p>
                        <p class="text-sm italic"><?= $testimonial['position'] ?></p>
                    </li>
                <?php endforeach ?>
            </ul>
            <div class="<?php count($testimonials) == 1 ? "hidden" : "" ?> text-2xl inline-flex float-end space-x-8 lg:hidden">
                <button class="prev-button w-10 h-10 border-2 rounded-full hover:text-customYellow hover:border-customYellow" type="button">
                    <i class="fa-solid fa-arrow-left"></i>
                </button>
                <button class="next-button w-10 h-10 border-2 rounded-full hover:text-customYellow hover:border-customYellow" type="button">
                    <i class="fa-solid fa-arrow-right"></i>
                </button>
            </div>
        </div>
    </div>
</section>