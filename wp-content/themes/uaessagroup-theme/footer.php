  <section class="w-full min-h-max bg-customDark2">
    <div class="container flex flex-col text-customWhite md:flex-row md:justify-space py-10 px-5">
      <div class="p-5 xl:ml-60 md:ml-20 shrink-0">
        <h2 class="text-sm font-bold uppercase">Our Services</h2>
        <ul class="text-customGray2 text-sm space-y-5 mt-5">
          <li class="hover:scale-110 origin-left transition-all duration-300 ease">
            <a href="<?php echo esc_url(home_url()); ?>/training">Training</a>
          </li>
          <li class="hover:scale-110 origin-left transition-all duration-300 ease">
            <a href="<?php echo esc_url(home_url()); ?>/consulting">Consulting</a>
          </li>
          <li class="hover:scale-110 origin-left transition-all duration-300 ease">
            <a href="https://innovations.ssagroup.com/">Innovations</a>
          </li>
        </ul>
      </div>
      <div class="p-5 xl:ml-24 shrink-0">
        <h2 class="text-sm font-bold uppercase">Sitemap </h2>
        <ul class="text-customGray2 text-sm space-y-5 mt-5">
          <li class="hover:scale-110 origin-left transition-all duration-300 ease">
            <a href="<?php echo esc_url(home_url()); ?>">About Us</a>
          </li>
          <li class="hover:scale-110 origin-left transition-all duration-300 ease">
            <a href="<?php echo esc_url(home_url()); ?>/blog">Articles</a>
          </li>
          <li class="hover:scale-110 origin-left transition-all duration-300 ease">
            <a href="<?php echo esc_url(home_url()); ?>/contact">Contact</a>
          </li>
        </ul>
      </div>
      <div class="pl-5 py-5 xl:ml-24 lg:shrink">
        <h2 class="text-sm font-bold">Our HQ</h2>
        <p class="text-customWhite text-[14px] leading-7 space-y-2 mt-5 max-w-[315px]">11 Eunos Road 8 #06-01/#07-01 (Lobby A), Lifelong Learning Institute, Singapore 408601</p>
      </div>
      <div class="shrink-0 p-5 md:-order-1">
        <div class="space-y-10">
          <img class="h-10" src="<?php echo get_template_directory_uri(); ?>/src/images/ssa-international-logo-white.png" alt="" id="logo" />
          <div id="footer-dropdown" class="flex items-center border-2 rounded-3xl w-[188px] h-10 p-1 cursor-pointer ml-[2px]" onclick="openDropdownElements('footer-dropdown-options','block')">
            <img class="h-7 w-7 object-cover rounded-full object-left" src="<?php echo get_template_directory_uri(); ?>/src/images/uae-flag.png" alt="UAE Flag">
            <p class="ml-4 w-full mr-3 text-[14px] font-[400] leading-[24px]">SSA UAE <i class="fas fa-chevron-down float-end mt-1"></i></p>
          </div>
        </div>
        <div id="footer-dropdown-options" class="absolute hidden bg-white rounded-md px-4 w-44 text-black mt-2 ml-2 origin-top animate-open-menu">
          <ul>
            <li class="py-2 my-2 border-b-2">
              <a href="https://ssagroup.com/" target="_blank">SSA Group</a>
            </li>
            <li class="py-2 my-2">
              <a href="https://philippines.ssagroup.com/" target="_blank">SSA Philippines</a>
            </li>
          </ul>
        </div>
      </div>
    </div>

    <div class="w-full border-t-[1px]">
      <div class="container flex flex-col items-center md:flex-row md:justify-between py-10 space-y-3 md:space-y-0">
        <p class="text-customWhite">© 2024 SSA Group International Pte. Ltd. (UAE). All rights reserved.</p>
        <div class="flex flex-col items-center md:flex-row md:space-x-8">
          <p class="text-customGray2">Terms & Privacy</p>
          <div class="text-customWhite text-2xl space-x-8 space-y-3 md:space-y-0">
            <i class="fa-brands fa-square-facebook"></i>
            <i class="fa-brands fa-linkedin "></i>
          </div>
        </div>
      </div>
    </div>
  </section>

  <script src="https://code.jquery.com/jquery-3.7.1.slim.js"></script>
  <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
  <?php wp_footer(); ?>
  </body>

  </html>