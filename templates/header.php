<?php use Roots\Sage\Nav\NavWalker; ?>



<header class="banner navbar navbar-default navbar-fixed-top" role="banner">

  <div class="container-fluid">

    <div class="navbar-header">

      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse">

        <span class="sr-only"><?= __('Toggle navigation', 'sage'); ?></span>

        <span class="icon-bar"></span>

        <span class="icon-bar"></span>

        <span class="icon-bar"></span>

      </button>

      <a class="navbar-brand" href="http://www.vative.com.au">

        <div class="logo">

           <img style="max-width:160px;" class="" src="http://www.vative.com.au/wp-content/uploads/2015/05/Vative-Black-Tagline-01-e1431302846776.png" alt="Vative - Lean Six Sigma - Logo">

           <!-- <img class="visible-xs visible-sm" src="/wp-content/uploads/2015/04/brand_mobile.png" alt="">  -->
 
          

        </div>

      </a>

    </div>



    <nav class="collapse navbar-collapse" role="navigation">

      <?php

      if (has_nav_menu('primary_navigation')) :

        wp_nav_menu(['theme_location' => 'primary_navigation', 'walker' => new NavWalker(), 'menu_class' => 'nav navbar-nav']);

      endif;

      ?>

    </nav>

  </div>

</header>

