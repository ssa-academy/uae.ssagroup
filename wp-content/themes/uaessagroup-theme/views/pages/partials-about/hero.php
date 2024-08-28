<?php
$accordions = [
    [
        'title' => 'Consulting',
        'sub' => 'See beyond limitations',
        'content' => 'As part of our dedication to supporting businesses from start to finish, we provide various consulting services, focusing on the needs of our clients while generating new ideas, creating efficient systems, and developing excellent, scalable solutions that move businesses forward. ',
        'url' => esc_url(home_url()) . '/consulting'
    ],
    [
        'title' => 'Training',
        'sub' => 'See beyond limitations',
        'content' => 'Committed to promoting lifelong learning, we provide a wide range of learner-centric training services, from entry-level to executives, to help them be more competitive, improve performance and productivity, and become agile to changing business conditions and customer needs. ',
        'url' => esc_url(home_url()) . '/training'
    ],
    [
        'title' => 'Innovations',
        'sub' => 'See beyond limitations',
        'content' => 'From automating repetitive tasks to enhancing employee performance through customized workplace training, we exist to inspire businesses around the world to harness the power of technology and innovate, providing accessible applications to empower businesses to become future-ready. ',
        'url' => 'https://innovations.ssagroup.com/'
    ]
]

?>



<section class="min-h-max bg-center bg-cover bg-fixed bg-hero-pattern">
    <div class="container xl:max-w-screen-2xl text-white mx-auto py-32 xl:grid xl:grid-cols-2 block lg:pl-10">
        <div class="container mx-auto px-5 xl:max-w-xl xl:px-0">
            <h1 class="text-xl font-bold font-poppins">Making Future-Proof Organizations Through Capacity and Capability Building</h1>
            <a href="contact" class="font-semibold font-poppins border w-[201px] mt-10 py-4 px-2 block text-center hover:text-customYellow hover:border-customYellow">Contact Us</a>
        </div>
        <div class="container xl:max-w-lg animate-fade-in">
            <div class="container mx-auto mt-10 xl:mt-5">
                <div class="overflow-hidden">
                    <!-- accordion-tab  -->
                    <?php foreach ($accordions as $key => $accordion) : ?>
                        <div id="accordion" class="group outline-none accordion-section" tabindex="1">
                            <div id="accordion-title" class="group flex justify-between px-4 py-3 items-center transition ease duration-500 cursor-pointer">
                                <div class="transition ease duration-500">
                                    <h2 class="text-[18px] font-[700] leading-[30px]"><?= $accordion['title'] ?></h2>
                                </div>
                                <div id="accordion-carret" class="ease duration-500 group-focus:text-white <?= $key === 0 ? 'rotate-180' : '' ?> ">
                                    <i class="fas fa-chevron-down"></i>
                                </div>
                            </div>
                            <div id="accordion-content" class="<?= $key === 0 ? 'max-h-screen' : '' ?> max-h-0 px-4 overflow-hidden ease duration-500 mb-4">
                                <p class="text-sm text-customWhite pr-5">
                                    <?= $accordion['content'] ?><a href="<?= $accordion['url'] ?>" <?php if ($key === 2) {
                                                                                                        echo 'target="_blank"';
                                                                                                    } ?>><span class="text-customYellow hover:underline italic">Learn more.</span></a>
                                </p>
                            </div>
                        </div>
                        <hr class="mx-4">
                    <?php endforeach ?>
                </div>
            </div>
        </div>
    </div>
</section>