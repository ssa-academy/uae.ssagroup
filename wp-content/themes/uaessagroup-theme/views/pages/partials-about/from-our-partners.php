<?php
$testimonials = [
    [
        'quote' => 'Khalifa Fund is extremely excited to launch this innovative and resourceful tool [SME Rating]. Our objective is to give our SMEs the opportunity to excel further through the provision of a platform that will allow them to grow and improve.',
        'name' => 'Mouza Obaid Al Nasri',
        'position' => 'Khalifa Fund for Enterprise Development'
    ],
    [
        'quote' => 'BLAHAL H AHSAHDLAW Khalifa Fund is extremely excited to launch this innovative and resourceful tool [SME Rating]. Our objective is to give our SMEs the opportunity to excel further through the provision of a platform that will allow them to grow and improve.',
        'name' => 'test namei',
        'position' => 'dsawdwaxccxcxcxc'
    ],
    [
        'quote' => 'mreol ipsum dolor sit amet consectetur adipisicing elit. Suscipit officiis quae atque? Nostrum, quidem. Aliquid, recusandae mollitia, obcaecati, fugiat voluptates voluptatem laborum expedita sapiente tempora nulla impedit magnam quam?',
        'name' => 'taseasda ',
        'position' => 'dsadsadasdaw'
    ],
    [
        'quote' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Eligendi nesciunt laboriosam nihil placeat aliquid labore libero, vitae iure voluptatum quod cupiditate, at quis maiores? Porro voluptate debitis aperiam incidunt.',
        'name' => 'mike MZNahjsdaw',
        'position' => 'test position'
    ]
];


?>


<section class="w-full min-h-max bg-customDark">
    <div class="container xl:max-w-screen-2xl py-20 lg:grid lg:grid-cols-2 px-5 sm:px-0 space-y-10 lg:space-y-0">
        <div class="container mx-auto xl:max-w-xl xl:px-0 text-customWhite space-y-3">
            <h1 class="text-[40px] font-[700] leading-[50px] font-poppins lg:w-60">From our Partners</h1>
            <p class="text-[14px] font-[400] leading-[22px]">Read what our clients say about our products and services.</p>
            <div class="text-2xl hidden lg:block pt-10 px-3 space-x-8">
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
                        <p class="text-[26px] font-[700] leading-[34px] font-poppins"><?= $testimonial['quote'] ?></p>
                        <p class="text-[18px] font-[700] leading-[24px] mt-10"><?= $testimonial['name'] ?></p>
                        <p class="text-[14px] font-[400] leading-[24px] italic"><?= $testimonial['position'] ?></p>
                    </li>
                <?php endforeach ?>
            </ul>
            <div class="text-2xl inline-flex float-end space-x-8 lg:hidden">
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