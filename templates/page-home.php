<?php
/**
* Template Name: Home
*/
?>



 

 <?php //Include and instantiate the class.

require_once ($_SERVER['DOCUMENT_ROOT']."/Mobile-Detect-2.8.13/Mobile_Detect.php");
$detect = new Mobile_Detect;

// Exclude tablets.
if( $detect->isMobile() && !$detect->isTablet() ){
   putRevSlider("homeslidermobile");
}
 else {
 	putRevSlider("homeslider");
 } 
     

 ?>

<div class="container-fluid more-space">
	<div class="row center">
		<div class="col-sm-12 col-md-12">
			<center><a href="/our-clients/"><h2 class="section-title">Our Clients</h2></a></center>
			<!-- <p class="feature-p">Vative has been instrumental in implementing lean, six sigma and business optimisation in some of Australia's largest and most successful organisations. We also work woth</p> -->
			
		</div>
		
		<div class="show-grid row clients-dg">
			
			<div class="col-xs-4 col-sm-4 col-md-2 col-lg-1 less-padd">
				<a href="http://www.mgc.com.au/our-story/governance/" target="_blank"><img  class="img-responsive" u="image" alt="img" src="http://www.vative.com.au/wp-content/uploads/2015/04/Murray-Goulburn-e1430186441641.png"></a>
			</div>
			
			<div class="col-xs-4 col-sm-4 col-md-2 col-lg-1 less-padd">
				<a href="http://www.holden.com.au/" target="_blank"><img  class="img-responsive" u="image" alt="img" src="http://www.vative.com.au/wp-content/uploads/2015/05/holdenLatest.png"></a>
			</div>

			<div class="col-xs-4 col-sm-4 col-md-2 col-lg-1 less-padd">
				<a href="http://www.latrobe.edu.au/" target="_blank"><img  class="img-responsive" u="image" alt="img" src="http://www.vative.com.au/wp-content/uploads/2015/04/La-Trobe_Logo_x21.gif"></a>
			</div>

			<div class="clearfix visible-xs visible-sm"></div>

			<div class="col-xs-4 col-sm-4 col-md-2 col-lg-1 less-padd">
				<a href="http://www.bosch.com/en/com/home/index.php" target="_blank"><img  class="img-responsive" u="image" alt="img" src="http://www.vative.com.au/wp-content/uploads/2015/04/b1.jpg"></a>
			</div>

			<div class="col-xs-4 col-sm-4 col-md-2 col-lg-1 less-padd">
				<a href="http://www.defence.gov.au/" target="_blank"><img  class="img-responsive" u="image" alt="img" src="http://www.vative.com.au/wp-content/uploads/2015/04/download-e1430219941677.png"></a>
			</div>

			<div class="col-xs-4 col-sm-4 col-md-2 col-lg-1 less-padd">
				<a href="http://www.kmart.com.au/" target="_blank"><img  class="img-responsive" u="image" alt="img" src="http://www.vative.com.au/wp-content/uploads/2015/04/111.jpg"></a>
			</div>

			<div class="clearfix visible-xs visible-sm visible-md"></div>

			<div class="col-xs-4 col-sm-4 col-md-2 col-lg-1 less-padd">
				<a href="http://www.capral.com.au/" target="_blank"><img  class="img-responsive" u="image" alt="img" src="http://www.vative.com.au/wp-content/uploads/2015/04/capral1.jpg"></a>
			</div>
			
			<div class="col-xs-4 col-sm-4 col-md-2 col-lg-1 less-padd">
				<a href="https://spotlight.com.au/" target="_blank"><img  class="img-responsive" u="image" alt="img" src="http://www.vative.com.au/wp-content/uploads/2015/04/SpotlightLogo-Australia4.jpg"></a>
			</div>

			
			<div class="col-xs-4 col-sm-4 col-md-2 col-lg-1 less-padd">
				<a href="http://www.tollgroup.com/" target="_blank"><img  class="img-responsive" u="image" alt="img" src="http://www.vative.com.au/wp-content/uploads/2015/04/TOLL.jpg"></a>
			</div>

			<div class="clearfix visible-xs visible-sm"></div>

			<div class="col-xs-4 col-sm-4  col-md-2 col-lg-1 less-padd">
				<a href="http://www.toyota.com/" target="_blank"><img class="img-responsive"  u="image" alt="img" src="http://www.vative.com.au/wp-content/uploads/2015/04/toyota-e1430188126572.png"></a>
			</div>
			
			
                                         <div class="col-xs-4 col-sm-4 col-md-2 col-lg-1 less-padd">
				<a href="http://www.stvincents.com.au/" target="_blank"><img  class="img-responsive" u="image" alt="img" src="http://www.vative.com.au/wp-content/uploads/2015/04/stvintouyse.png"></a>
			</div>
			<div class="col-xs-4 col-sm-3  col-md-2 col-lg-1 less-padd">
				<a href="http://auspost.com.au/" target="_blank"><img class="img-responsive"  u="image" alt="img" src="http://www.vative.com.au/wp-content/uploads/2015/04/3-e1430277681894.jpg"></a>
			</div>

			<div class="clearfix visible-xs"></div>
			<div class="show-grid row">
				<div class="col-sm-12 col-md-12">
					<br>
					<!-- 	<center>
					<a class="pull-right btn  btn-lg btn-info" href="http://www.vative.com.au/why-vative-about-vative/our-clients/" class="dg-cta-button" target="_blank"><i class="fa  fa-eye"></i> View More Clients</a>
					</center>
					<div class="clearfix"></div> -->
					<hr>
				</div>
			</div>
		</div></div>
	</div>
	<!-- <div class='container-fluid dunks-bg-sercies'>
		<div class="row">
			<div class="col-sm-4 col-md-4 col-lg-3 pull-left">
				<a href="/our-services/"><h2 class="section-title white">Training Dates</h2></a>
			</div>
			
			<div class="col-sm-8 col-md-8 col-lg-6 pull-right ">
				<a href="http://www.vative.com.au/about-vative-2/upcoming-training-dates/" class="thetrainingsprite"  >
					<div class="show-hide">
						
					</div>
				</a>
			</div>
		</div>
	</div> -->
	<div class="container">
		<div class="row">
			<!-- dunks features starts -->

			<div class="col-sm-12 col-md-12 col-lg-9">
				 <div class="col-sm-8 col-md-8 col-lg-9 pull-right ">
				<a href="http://www.vative.com.au/about-vative-2/upcoming-training-dates/" class="thetrainingsprite"  >
					<div class="show-hide">
						
					</div>
				</a>
			</div>
                                          <div class="col-lg-3">
				<a href="/our-services/"><h2 class="pull-left section-title">Our Services</h2></a>
			   </div>	
				<div class="clearfix"></div>
				<style type="text/css">
                .feature.first img {
  width: 31.5%;
  margin-top: 3px;
  margin-bottom: 14px;
}
                </style>
				
				<?php woothemes_features( array( 'limit' => 6 ) ); ?>
				
				
			</div>
			
			<div class="col-sm-12 col-md-12 col-lg-3 blog-posts-bg">
				<div class="container-fluid">
				<center>
					<h2 class="section-title">Latest News</h2>
				</center>
					<div class="row">
						
						<?php // get_template_part('templates/contentcardsmd4', get_post_type() != 'post' ? get_post_type() : get_post_format()); ?>
						<?php
						$latest_blog_posts = new WP_Query( array( 'posts_per_page' => 3 ) );
						if ( $latest_blog_posts->have_posts() ) : while ( $latest_blog_posts->have_posts() ) : $latest_blog_posts->the_post(); ?>
						
						<div class="col-sm-4 col-md-4 col-lg-12  nopad">
							<div class="card">
								<div class="image" style="background-image: url(); background-size: cover; background-position: 50% 50%;">
									<?php the_post_thumbnail('medium', array('class' => '')); ?>
									<div class="filter">
										<!-- <button type="button" class="btn btn-neutral btn-simple">
										<i class="fa fa-bookmark-o"></i> Bookmark
										</button> -->
										<button type="button" class="btn btn-neutral btn-simple">
										<a href="<?php the_permalink(); ?>"><i class="fa fa-align-left"></i> Read article</a>
										</button>
									</div>
									</div> <!-- end card image -->
									<div class="content">
										<i class="fa fa-link"></i><p class="category"> <?php the_category(' '); ?></p>
										<a href="<?php the_permalink(); ?>">
											<h4 class="title"><?php the_title(); ?></h4>
										</a>
										<div class="footer">
											<div class="author">
												
												<i class="fa fa-pencil"></i>  <p class="byline author vcard"><?= __('', 'sage'); ?> <a href="<?= get_author_posts_url(get_the_author_meta('ID')); ?>" rel="author" class="fn"><?= get_the_author(); ?></a></p>
												
											</div>
											<div class="stats pull-right">
												<i class="fa fa-clock-o"></i>  <time class="updated" datetime="<?= get_the_time('c'); ?>"><?= get_the_date(); ?></time>
											</div>
											</div> <!-- end card footer -->
										</div>
										</div> <!-- end card -->
										</div><!-- col-sm-4 -->
										<?php
										endwhile; endif;
										?>
										
										</div><!-- end col-md-9 -->
										
										</div> <!-- row -->
										
										
									</div>
								</div>
							</div>
							
							<section class="vative-grey">
								<div class="section-description surveys-section">
									<div class="container">
										<!-- <center><h2 class="section-title">Surveys</h2></center> -->
										<div class="row">
											<div class="col-md-6">
												<h5>Business Analysis and Grant Eligibility Surveys </h5>
												<p>
												Quickly discover your elgibility for government grants and how you are positioned with your business by completing our free surveys. We encourage you to take five minutes of your time and complete them. Often business owners are not aware that they may be eligible for business improvement based government grants. </p>
												
												
											</div>
											
											<div class="col-sm-6 col-md-3 sprites">
												<div class="sprites-wrap">
													<div class="sprite img-responsive">
														<a href="http://www.vative.com.au/gov-grants-lean-survey/" class="survey1" ></a>
														
													</div>
												</div>
											</div>
											<div class="col-sm-6 col-md-3 sprites">
												<div class="sprites-wrap">
													<div class="sprite img-responsive">
														<a href="http://www.vative.com.au/business-health-check/" class="survey2" ></a>
														
													</div>
												</div>
											</div>
											
											</div><!-- row -->
											
											</div> <!-- end container -->
										</div>
									</section>
									
									
									
									<section  class="subscribe-dg" >
										<div class="container">
											<!-- <h2 class="section-title news-title-dg">Client References</h2>
											<div class="row testimonials">
												<div class="col-md-1 news-icon-dg">
													<i class="fa fa-check fa-4x"></i>
												</div>
												<div class="col-md-11 news-heading-dg">
													
												<p>Vative partners with our clients in training and implementation. <br>
													Find out what they have to say about their experience and results.</p>
												</div>
												</div> --><!-- .row -->
												<div class="row testimonials">
												 <?php do_action( 'woothemes_testimonials', array( 'limit' => 1,'id' => 988,'size' => 300  ) ); ?>
												</div>
											</div>
											<!-- <div class="subscribe-line subscribe-line-transparent" style="background-image: url('/wp-content/uploads/2015/04/IMG_6515-e1429855404264.jpg')">
												<div class="container">
													<div class="row">
														<div class="col-md-9">
															<form class="">
																<div class="form-group">
																	<input type="text" value="" class="form-control" placeholder="Enter your email...">
																</div>
															</form>
														</div>
														<div class="col-md-3">
															<button type="button" class="btn  btn-lg btn-info">Subscribe Now!</button>
														</div>
													</div> -->
												</section>
