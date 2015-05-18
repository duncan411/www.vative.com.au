<?php
/**
 * Template Name: Paralaxtop
 */
?>
<div class="top-section">
 <div class="cfa"><div class="container"><div class="col-md-8"><span class="cfa-text">Start Designing and Developing Faster with the Get Shit Done Kit</span></div><div class="col-md-4"><a class="btn btn-lg cfa-button" href="http://gsdk.creative-tim.com">Live Preview</a></div></div></div>	</div>
<?php while (have_posts()) : the_post(); ?>
  <?php get_template_part('templates/page', 'header'); ?>
  <?php get_template_part('templates/content', 'page'); ?>
<?php endwhile; ?>
