<?php
//write HTML Markup on $accordions['content']
$accordions = [
    [
        'title' => 'Human Capital Development',
        'content' => '<p class="sm:text-[14px] text-[12px] font-[400] leading-[18px] text-customWhite pr-5 sm:pl-20 pl-12">Maximize your employees\' full potential by enhancing their skills to achieve organizational performance. Get a consultation from us and explore any of these areas:</p>
        <ul class="sm:text-[14px] text-[12px] font-[400] leading-[18px] text-customWhite pr-5 sm:pl-24 pl-16 mt-5 list-disc">
            <li>Comprehensive Human Resource Management</li>
            <li>Job Evaluation and Salary Structure</li>
            <li>Performance Management and HR Scorecard</li>
            <li>Learning and Development </li>
        </ul>',
        'img' => get_template_directory_uri() . "/src/images/consulting-services/human-capital.jfif"
    ],
    [
        'title' => 'Productivity and Quality Management',
        'content' => '<p class="sm:text-[14px] text-[12px] font-[400] leading-[18px] text-customWhite pr-5 sm:pl-20 pl-12">Design customized solutions that adapt to your organization\'s needs, from optimizing business processes, enhancing inventory management, and providing productivity consulting, to ensure that your company is more flexible and profitable. SSA Group provides consulting services in the following areas:</p>
        <ul class="sm:text-[14px] text-[12px] font-[400] leading-[18px] text-customWhite pr-5 sm:pl-24 pl-16 mt-5 list-disc">
            <li>Service Excellence Framework</li>
            <li>Productivity Management</li>
            <li>Total Quality Management</li>
            <li>Supply Chain Management</li>
        </ul>',
        'img' => get_template_directory_uri() . "/src/images/consulting-services/productivity-and-quality-management.jfif"
    ],
    [
        'title' => 'Organizational Development and Leadership',
        'content' => '<p class="sm:text-[14px] text-[12px] font-[400] leading-[18px] text-customWhite pr-5 sm:pl-20 pl-12">Provide your organization with leadership tools that are consistent with your vision, mission, strategic goals, and corporate values to solve challenges within your company, while also establishing the potential to compete successfully in your external business environment.</p>
        <p class="sm:text-[14px] text-[12px] font-[400] leading-[18px] text-customWhite pr-5 sm:pl-20 pl-12 mt-5">With consulting expertise, SSA Group can assist your business in determining your current organizational performance and in developing tailored frameworks for your organizational development and leadership skills based on the needs of your business. Book an appointment today to learn more about our consulting services, which include:</p>
        <ul class="sm:text-[14px] text-[12px] font-[400] leading-[18px] text-customWhite pr-5 sm:pl-24 pl-16 mt-5 list-disc">
            <li>Service Excellence Framework</li>
            <li>Productivity Management</li>
            <li>Total Quality Management</li>
            <li>Supply Chain Management</li>
        </ul>',
        'img' => get_template_directory_uri() . "/src/images/consulting-services/organizational-development.jfif"
    ],
    [
        'title' => 'Financial Management',
        'content' => '<p class="sm:text-[14px] text-[12px] font-[400] leading-[18px] text-customWhite pr-5 sm:pl-20 pl-12">Evaluate and improve your financial capabilities to get the most out of your capital. With expertise in financial management, SSA Group can customize and develop accounting solutions that cater to your needs. Contact us today and explore our financial management projects which include:</p>
        <ul class="sm:text-[14px] text-[12px] font-[400] leading-[18px] text-customWhite pr-5 sm:pl-24 pl-16 mt-5 list-disc">
            <li>Cash Flow and Working Capital Management</li>
            <li>Financial Controls</li>
            <li>Financial Assessment and Planning for Growth</li>
            <li>Planning and Budgeting</li>
        </ul>',
        'img' => get_template_directory_uri() . "/src/images/consulting-services/financial-management.jfif"
    ],
    [
        'title' => 'Strategic Management',
        'content' => '<p class="sm:text-[14px] text-[12px] font-[400] leading-[18px] text-customWhite pr-5 sm:pl-20 pl-12">Propel your business to new heights with tools that can help you achieve your goals and objectives. With Key Performance Indicators (KPIs) and effective platforms, SSA Group can help your business create a blueprint that is dynamic, progressive, and adaptive to disruptive business environments, securing your status as a cutting-edge enterprise.</p>
        <p class="sm:text-[14px] text-[12px] font-[400] leading-[18px] text-customWhite pr-5 sm:pl-20 pl-12 mt-5">Make better decisions today with thorough data analysis. Get a consultation now and we’ll walk you through all aspects of the strategic management process, including formulation, implementation, and result measurement. </p>',
        'img' => get_template_directory_uri() . "/src/images/consulting-services/strategic-management.jfif"
    ],
    [
        'title' => 'Entrepreneurship Development',
        'content' => '<p class="sm:text-[14px] text-[12px] font-[400] leading-[18px] text-customWhite pr-5 sm:pl-20 pl-12">Assess the effectiveness of your organization’s plans and get a tailored entrepreneurship framework that meets your needs. </p>
        <p class="sm:text-[14px] text-[12px] font-[400] leading-[18px] text-customWhite pr-5 sm:pl-20 pl-12 mt-5">SSA Group can help you design a distinctive structure for entrepreneurship, providing you with the methodologies and tools to stand out in this highly competitive business market and achieve business success. </p>',
        'img' => get_template_directory_uri() . "/src/images/consulting-services/entrep-management.jfif"
    ]
]

?>


<section class="w-full min-h-max bg-customDark">
    <div class="container lg:max-w-[980px] xl:max-w-[1280px] mx-auto px-5 lg:px-0 py-10">
        <div class="text-customWhite lg:grid lg:grid-col-2 space-y-5">
            <p class="text-[14px] font-[400] leading-[12px] italic text-gray-400">Services</p>
            <h2 class="text-[26px] font-[700] leading-[34px] font-poppins">Consulting Services to Transform Your Business</h2>
        </div>
        <div class="lg:grid lg:grid-cols-5 mt-10">
            <div class="col-start-2 col-span-4">
                <?php $num = 1 ?>
                <?php foreach ($accordions as $key => $accordion) : ?>
                    <?php
                    $title = $accordion['title'];
                    $content = $accordion['content'];
                    $img = $accordion['img'];
                    ?>
                    <div id="accordion" class="group outline-none accordion-section" tabindex="<?= $num ?>">
                        <div id="accordion-title" class="group flex justify-between py-3 items-center transition ease duration-500 cursor-pointer">
                            <div class="transition ease duration-500">
                                <h2 class="text-[20px] font-[400] leading-[22px] text-customWhite inline-flex items-center mr-5">
                                    <span class="text-[14px] font-[400] leading-[22px] text-gray-400 italic sm:mr-20 mr-12 self-start"><?= sprintf('%02d', $num) ?></span>
                                    <?= $title ?>
                                </h2>
                            </div>
                            <div id="accordion-carret" class="transition ease duration-500 text-customWhite rotate-180 self-start">
                                <i class="fas fa-chevron-down"></i>
                            </div>
                        </div>
                        <div id="accordion-content" class="<?= $key === 0 ? 'max-h-screen' : '' ?> max-h-0 px-4 overflow-hidden ease duration-500 mb-4">
                            <?= $content ?>
                            <img src="<?= $img ?>" class="object-cover max-h-64 w-full sm:pl-20 pl-12 my-5">
                        </div>
                    </div>
                    <hr class="px-6 border-customWhite">
                    <?php $num++ ?>
                <?php endforeach ?>
            </div>

        </div>
    </div>
</section>