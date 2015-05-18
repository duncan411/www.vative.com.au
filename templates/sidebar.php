<?php 



use Roots\Sage\Wrapper;


if (is_front_page()){
	dynamic_sidebar('sidebar-primary');
	return;
}

dynamic_sidebar('sidebar-single-page');
include new Wrapper\SageWrapping('templates/sidebar-feature-box.php');