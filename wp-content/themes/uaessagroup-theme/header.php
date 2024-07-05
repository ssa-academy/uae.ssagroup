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
    <nav class="mx-auto <?= is_front_page() ? 'container absolute left-1/2 -translate-x-1/2' : 'bg-customDark'?>">
      <!-- Flex Container For Nav Items -->
      <div class="container flex items-center justify-between space-x-20 p-5">
        <!-- Logo -->
        <div class="z-30">
          <img class="h-14 inline" src="<?php echo get_template_directory_uri(); ?>/src/images/ssa-logo.png" alt="" id="logo" />
        </div>

        <div class="lg:hidden">
          <button class="text-3xl text-white focus:outline-none">&#9776;</button>
        </div>

         <!-- Menu Items -->
        <div class="hidden items-center text-sm space-x-20 uppercase text-white lg:flex font-navfont">

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

            <a href="<?php echo esc_url( home_url() ); ?>" class="tracking-widest hover:text-customYellow <?= is_front_page() ? 'text-customYellow' : ''?>">About</a>
            <a href="services" class="tracking-widest hover:text-customYellow <?= is_page('Services') ? 'text-customYellow' : ''?>">Services</a>
            <a href="articles" class="tracking-widest hover:text-customYellow <?= is_page('Articles') ? 'text-customYellow' : ''?>">Articles</a>
            <a href="contact" class="tracking-widest hover:text-customYellow <?= is_page('Contact') ? 'text-customYellow' : ''?>">Contact</a>
        </div>
      </div>
    </nav>
  