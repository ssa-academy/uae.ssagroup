<?php 
    $accordions = [
        [
            'title'=> 'Service Category - 1',
            'sub'=> 'See beyon limitations',
            'content' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugiat,repellat   amet doloribus consequuntur eos similique providenttempora voluptates iure quia fuga dicta voluptatibus culpamollitia recusandae delectus id suscipit labore? ',
            'url'=> ''
        ],
        [
            'title'=> 'Service Category - 2',
            'sub'=> 'See beyon limitations',
            'content' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugiat,repellat   amet doloribus consequuntur eos similique providenttempora voluptates iure quia fuga dicta voluptatibus culpamollitia recusandae delectus id suscipit labore? ',
            'url'=> ''
        ],
        [
            'title'=> 'Service Category - 3',
            'sub'=> 'See beyon limitations',
            'content' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugiat,repellat   amet doloribus consequuntur eos similique providenttempora voluptates iure quia fuga dicta voluptatibus culpamollitia recusandae delectus id suscipit labore? ',
            'url'=> ''
        ]
    ]

?>



<section class="min-h-max bg-center bg-cover bg-fixed bg-hero-pattern">
    <div class="container xl:max-w-screen-2xl text-white mx-auto py-32 xl:grid xl:grid-cols-2 block">
        <div class="container mx-auto px-5 xl:max-w-xl xl:px-0">
            <h1 class="text-[40px] font-[700] leading-[50px] font-poppins">Transforming Organizations and People through Capacity and Capability Building</h1>
            <button class="border w-[201px] mt-10 py-[12px] px-[40px]">Get to Know Us</button>
        </div>
        <div class="container xl:max-w-lg">
            <div class="container mx-auto mt-10 xl:mt-5">
                <div class="overflow-hidden">
                <!-- accordion-tab  -->
                <?php foreach($accordions as $key => $accordion) :?>
                    <div id="accordion" class="group outline-none accordion-section" tabindex="1">
                        <div id="accordion-title" class="group flex justify-between px-4 py-3 items-center transition ease duration-500 cursor-pointer">
                            <div class="transition ease duration-500">
                            <h2 class="text-[18px] font-[700] leading-[30px]"><?= $accordion['title']?></h2>
                            <p class="text-[12px] font-[400] leading-[18px] text-gray-400 italic"><?= $accordion['sub']?></p>
                            </div>
                            <div id="accordion-carret" class="transition ease duration-500 group-focus:text-white <?= $key === 0 ? 'rotate-180' : '' ?> ">
                                <i class="fas fa-chevron-down"></i>
                            </div>
                        </div>
                        <div id="accordion-content" class="<?= $key === 0 ? 'max-h-screen' : '' ?> max-h-0 px-4 overflow-hidden ease duration-500 mb-4">
                            <p class="text-[12px] font-[400] leading-[18px] text-customWhite pr-5">
                            <?= $accordion['content']?><a href="<?= $accordion['url']?>"><span class="text-customYellow underline italic">Learn more.</span></a>
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
