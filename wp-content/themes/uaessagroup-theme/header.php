<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css"/>
    <?php wp_head(); ?>
  </head>
  <body class="overflow-x-hidden">
    <nav class="mx-auto <?= is_front_page() || is_page('Training')? 'w-full absolute left-1/2 -translate-x-1/2' : 'bg-customDark'?>">
      <!-- Flex Container For Nav Items -->
      <div class="lg:container flex items-center justify-between space-x-20 p-5">
        <!-- Logo -->
        <div class="z-auto">
          <img class="h-14 inline" src="<?php echo get_template_directory_uri(); ?>/src/images/ssa-logo.png" alt="" id="logo" />
        </div>

        <!-- Hamburger button -->
        <div class="lg:hidden cursor-pointer relative h-8 w-8 z-50">
          <button id="hamburger-btn" class="text-3xl text-white focus:outline-none">
          <div
            class="absolute top-4 -mt-0.5 h-[0.18rem] w-8 rounded bg-white transition-all duration-500 before:absolute before:h-[0.18rem] before:w-8 before:-translate-x-4 before:-translate-y-3 before:rounded before:bg-white before:transition-all before:duration-500 before:content-[''] after:absolute after:h-[0.18rem] after:w-8 after:-translate-x-4 after:translate-y-3 after:rounded after:bg-white after:transition-all after:duration-500 after:content-['']">
          </div>
          </button>
        </div>

         <!-- Menu Items -->
        <div class="hidden items-center lg:flex font-navfont">

            <!-- Dynamic menu from worpress admin -->
            <!-- <?php 
              wp_nav_menu(
                array(
                  'menu' => 'primary',
                  'container' => '',
                  'theme_location' => 'primary',
                  'items_wrap' => '<div id="" class="hidden items-center text-sm space-x-20 uppercase text-white lg:flex font-navfont">%3$s</div>'
                )
              )
            ?> -->

          <ul class="flex item-center space-x-20 text-white">
            <li>
              <a href="<?php echo esc_url( home_url() ); ?>" class="hover:text-customYellow <?= is_front_page() ? 'text-customYellow font-[700]' : ''?>">About</a>
            </li>
            <li id="services-menu" class="relative">
              <a class="hover:text-customYellow cursor-pointer <?= is_page('Consulting') || is_page('Training') ? 'text-customYellow font-[700]' : ''?>">Services</a>
              <!-- services submenu -->
              <div id="services-submenu" class="absolute hidden bg-white rounded-md px-4 w-44 text-black mt-2 origin-top animate-open-menu">
                <ul>
                  <li class="py-2 my-2 border-b-2">
                    <a href="consulting">Consulting</a>
                  </li>
                  <li class="py-2 my-2">
                    <a href="training">Training</a>
                  </li>
                  <li class="py-2 my-2 border-t-2">
                    <a href="https://innovations.ssagroup.com/" target="_blank">Innovations</a>
                  </li>
                </ul>
              </div>
            </li>
            <li>
              <a href="articles" class="hover:text-customYellow <?= is_page('Articles') ? 'text-customYellow font-[700]' : ''?>">Articles</a>
            </li>
            <li>
              <a href="contact" class="hover:text-customYellow <?= is_page('Contact') ? 'text-customYellow font-[700]' : ''?>">Contact</a>
            </li>
          </ul>
        </div>
      </div>

      <div id="mobile-menu" class="fixed top-0 bottom-0 bg-customDark w-full h-screen overflow-y-auto text-3xl hidden origin-top animate-open-menu flex-col lg:hidden z-10">
        <div class="grid"> 
          <div class="h-[96px]"></div>
          <div class="min-h-max text-[18px] font-[700] leading-[28px]" aria-label="mobile">
            <ul class="grid">
              <li class="p-10 md:pl-20 text-white border-b-2 border-customGray">
                <a href="<?php echo esc_url( home_url() ); ?>">About</a>
              </li>
              <li id="services-menu-mobile" class="p-10 md:pl-20 text-white border-b-2 border-customGray">
                <a>Services <button class="inline-flex float-end" onclick="this.classList.toggle('rotate-180')"><i class="fas fa-chevron-down "></i></button></a>
                <div id="services-submenu-mobile" class="font-normal pt-5 px-5 hidden origin-top animate-open-menu">
                  <ul class="space-y-3">
                    <li><a href="consulting">Consulting</a></li>
                    <li><a href="training">Training</a></li>
                    <li><a href="https://innovations.ssagroup.com/" target="_blank">Innovations</a></li>
                  </ul>
                </div>
              </li>
              <li class="p-10 md:pl-20 text-white border-b-2 border-customGray">
                <a href="articles">Articles</a>
                <!-- dont delete the commendted a tag -->
                <!-- <a href="<?php //if (get_post_type() == 'post') echo 'class="hover:customYellow"'?>">Articles</a> -->
              </li>
              <li class="p-10 md:pl-20 text-white border-b-2 border-customGray">
                <a href="contact">Contact</a>
              </li>
            </ul>        
          </div>
        </div>
      </div>
    </nav>
  