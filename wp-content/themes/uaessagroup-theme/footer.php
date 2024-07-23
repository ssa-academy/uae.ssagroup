  <section class="w-full min-h-max bg-customDark2">
    <div class="container flex flex-col text-customWhite md:flex-row md:justify-space py-10">
      <div class="p-5 xl:ml-60 shrink-0">
        <h2 class="text-[18px] font-bold uppercase">Our Products</h2>
        <ul class="text-customGray2 text-[18px] space-y-5 mt-5">
          <li class="hover:scale-110 origin-left transition-all duration-300 ease">
            <a href="training">Training</a>
          </li>
          <li class="hover:scale-110 origin-left transition-all duration-300 ease">
            <a href="consulting">Consulting</a>
          </li>
          <li class="hover:scale-110 origin-left transition-all duration-300 ease">
            <a href="https://innovations.ssagroup.com/">Innovations</a>
          </li>
        </ul>
      </div>
      <div class="p-5 xl:ml-24 shrink-0">
        <h2 class="text-[18px] font-bold uppercase">Sitemap </h2>
        <ul class="text-customGray2 text-[18px] space-y-5 mt-5">
          <li class="hover:scale-110 origin-left transition-all duration-300 ease">
            <a href="<?php echo esc_url(home_url()); ?>">About Us</a>
          </li>
          <li class="hover:scale-110 origin-left transition-all duration-300 ease">
            <a href="blog">Blogs</a>
          </li>
          <li class="hover:scale-110 origin-left transition-all duration-300 ease">
            <a href="contact">Contact</a>
          </li>
        </ul>
      </div>
      <div class="p-5 xl:ml-24 lg:shrink">
        <h2 class="text-[18px] font-bold">Our HQ</h2>
        <p class="text-customWhite text-[18px] space-y-2 mt-5">11 Eunos Road 8 #06-01/#07-01 (Lobby A), Lifelong Learning Institute, Singapore 408601</p>
      </div>
      <div class="shrink-0 p-5 md:-order-1">
        <div class="space-y-10">
          <img class="h-14" src="<?php echo get_template_directory_uri(); ?>/src/images/ssa-logo.png" alt="" id="logo" />
          <div id="footer-dropdown" class="flex items-center border-2 rounded-3xl w-[188px] h-10 p-1 cursor-pointer" onclick="openDropdownElements('footer-dropdown-options','block')">
            <img class="h-7 w-7 object-fill rounded-full" src="https://s3-alpha-sig.figma.com/img/3723/d20b/7a22311b733aacad2ec221da6bde5231?Expires=1722816000&Key-Pair-Id=APKAQ4GOSFWCVNEHN3O4&Signature=AWDQJTLI8N5EqPb6zKfUtzyo1GR8-ZDvLHrPirril9q~rbSKlJJHvQNlakx1NV69qv9aO4wVJ0B06qTEaNljyaXTgEsq5QLRzVIUW5hz0R~kSsnN6KMGysW7WCA3dGlbkxFGNpet2qOL6qgPjirlvg~32xZ7VS0PiMyWc5EyQuaNigBxSbwN3aMgCKvdA2g17ES80lIW4QhHSBbUAKeaFcelgha-7bm6p-MW2wiNam3bmGAv8ZdziAZ4AvyyAv166dsF9aylaYfVS1ROk9bphMFW-uZc~6AJLTjXpRRdDsa~MhokODyGho82DF2DdO84uhwtcH9c1Smt7I3L72c9WQ__" alt="UAE Flag">
            <p class="ml-4 w-full mr-3 text-[14px] font-[400] leading-[24px]">SSA UAE <i class="fas fa-chevron-down float-end mt-1"></i></p>
          </div>
        </div>
        <div id="footer-dropdown-options" class="absolute hidden bg-white rounded-md px-4 w-44 text-black mt-2 ml-2 origin-top animate-open-menu">
          <ul>
            <li class="py-2 my-2 border-b-2">
              <a href="">SSA Group</a>
            </li>
            <li class="py-2 my-2">
              <a href="">SSA Philippines</a>
            </li>
          </ul>
        </div>
      </div>
    </div>

    <div class="w-full border-t-[1px]">
      <div class="container flex flex-col items-center md:flex-row md:justify-between py-10 space-y-3 md:space-y-0">
        <p class="text-customWhite">© 2024 SSA Group. All rights reserved.</p>
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
  <?php wp_footer(); ?>
  </body>

  </html>