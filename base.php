<?php



use Roots\Sage\Config;

use Roots\Sage\Wrapper;



?>



<?php get_template_part('templates/head'); ?>

  <body <?php body_class(); ?>>
<?php if ( function_exists( 'gtm4wp_the_gtm_tag' ) ) { gtm4wp_the_gtm_tag(); } ?>

    <!--[if lt IE 9]>

      <div class="alert alert-warning">

        <?php _e('You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.', 'sage'); ?>

      </div>

    <![endif]-->

    <?php

      do_action('get_header');

      get_template_part('templates/header');

    ?>

    <div class="wrap container" role="document">

      <div class="content row">
       <style type="text/css">
       @media only screen 
    and (max-width : 1212px)
    {
      .dg-training-dates a img {
  max-width: 60%;
  position: relative;
}
       .navbar .navbar-nav>li>a {
    padding: 10px 4px;
    margin: 15px 3px;
}  
.content.row .col-md-8.pull-right {
  float: none!important;
}
}
form.search-form.form-inline .search-field {
  width: 300px;
}
.sidebar ul.menu > li > a {
  font-size: 1.3em;
  border-left: none!important;
  padding-left: 0px!important;
  margin-bottom: 30px;
}
body.our-services > div.wrap.container > div > div.col-md-8.pull-right > main > div.page-header.has-image > h2 {
  font-size: 21px!important;
}
p#form-allowed-tags {
  color: #c7254e;
  background-color: #f9f2f4;
  display: none;
}
</style>
        <?= (Config\display_sidebar()) ? '<div class="col-md-8 pull-right">':''?>
          <main class="main" role="main">
            <?php include Wrapper\template_path(); ?>
          </main><!-- /.main -->
        <?= (Config\display_sidebar()) ?'</div>':''?>

        <!-- sidebar -->
        <?php if (Config\display_sidebar()) : ?>
          <div class="col-md-4 pull-left sidebar-start">
            <aside class="sidebar" role="complementary">
              <?php include Wrapper\sidebar_path(); ?>
            </aside><!-- /.sidebar -->
          </div>
        <?php endif; ?>

        <div class="clearfix"></div>
      </div><!-- /.content -->

    </div><!-- /.wrap -->

    <?php

      get_template_part('templates/footer');

      wp_footer();

    ?>

    

  </body>

</html>

