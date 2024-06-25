<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>
  </head>
  <body class="overflow-x-hidden">
    <nav class="container relative mx-auto p-6">
      <!-- Flex Container For Nav Items -->
      <div class="flex items-center justify-between space-x-20 my-6">
        <!-- Logo -->
         <div class="z-30">
          <img src="<?php echo get_template_directory_uri(); ?>/src/images/ssa-logo.png" alt="" id="logo" />
         </div>

         <!-- Menu Items -->
          <div class="hidden items-center space-x-10 uppercase text-grayishBlue md:flex">
            <a href="#features" class="tracking-widest hover:text-softBlue">About us</a>
            <a href="#services" class="tracking-widest hover:text-softBlue">Services</a>
            <a href="#events" class="tracking-widest hover:text-softBlue">Events</a>
            <a href="#newsroom" class="tracking-widest hover:text-softBlue">Newsroom</a>
            <a href="#contact" class="tracking-widest hover:text-softBlue">Contact</a>
            <a href="" class="px-8 py-2 text-white bg-softBlue border-2 border-softBlue rounded-lg shadow-md hover:text-softBlue hover:bg-white">Login</a>
          </div>
      </div>
    </nav>
  