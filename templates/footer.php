<?php use Roots\Sage\Wrapper; ?>

<div class="separator"></div>
<footer class="footer footer-big footer-transparent content-info"
        style="background-image: url('/wp-content/uploads/2015/04/IMG_6515-e1429855404264.jpg');" role="contentinfo">

        <?php  /* <!-- Dead Code-->
        <div class="container">
            <h2 class="section-title news-title-dg">Sign up for our newsletter to recieve free lean six sigma updates</h2>
            <div class="row">
                <div class="col-md-1 news-icon-dg">
                    <i class="fa fa-envelope-o fa-4x"></i>
            </div>
            <div class="col-md-11 news-heading-dg">
                
                <p>Vative's is all about delivering value to our clients and too society as a whole our newsletter is no different. Sign up below
                to get regular content created by some of the most experienced and innovative lean six sigma experts in the country.</p>
            </div>
            </div>
        </div>
        */?>

        <?php include new Wrapper\SageWrapping('templates/common/email-form.php'); ?>

        <div class="container">
            <?php dynamic_sidebar('sidebar-footer'); ?>
        </div>
    

            <div class="container">
                <div class="row">
                    <div class="col-md-2">                        
                        <a href="<?=get_permalink(217)?>"><h5 class="title">Contact Us</h5></a>
                        <nav>
                            <ul>
                                <li>VATIVE Pty Ltd</li>
                                <li>Address: Office 260A Blackburn Road<br>
                                Glen Waverley, VIC 3150</li>
                                <li>Phone: 1300 VATIVE (1300 828483)</li>
                                <li>Email:<a href="mailto:info@vative.com.au">info@vative.com.au</li>
                                <li>Web:<a href="http://www.vative.com.au/"> www.vative.com.au</a></li>
                            </ul>
                        </nav>
                    </div>



                    <div class="col-md-3 col-md-offset-1">

                        <h5 class="title">Quick Links</h5>

                        <nav>

                            <?php  

                                wp_nav_menu([

                                    'menu' => 'primary',  // Menu name

                                    'depth' => -1,

                                    'menu_class' => 'company'

                                ]); 

                            ?>

                        </nav>

                    </div>



                    <div class="col-md-3">

                        <h5 class="title">Lean Tools</h5>

                        <nav>

                            <?php  

                                wp_nav_menu([

                                    'menu' => '70', // Menu name

                                    'depth' => -1,

                                    'menu_class' => 'company'

                                ]); 

                            ?>

                        </nav>

                    </div>



                    <div class="col-md-3">

                        <h5 class="title">Vative by the numbers</h5>

                        <nav class="numbers">

                            <ul>

                                <li>

                                    <h4>500-1000% <small>ROI</small></h4>

                                </li>

                                <li>

                                    <h4>$55, 000, 000 <small>Saved for clients</small></h4>

                                </li>

                                <li>

                                    <h4>50% <small> Less stock on hand</small></h4>

                                </li>

    

                            </ul>

                        </nav>

                    </div>

                </div>

                <hr />

                <div class="social-area text-center"> 

                        <h5>Join us on</h5>
                        <!-- <a href="" class="btn btn-social btn-round">
                            <i class="fa fa-facebook"></i>
                        </a> -->

                       <!--  <a href="#"  class="btn btn-social btn-round">
                            <i class="fa fa-twitter"></i>
                        </a> -->
                        <a href="https://plus.google.com/111456483684870819854/about" class="btn btn-social btn-round">
                            <i class="fa fa-google-plus"></i>
                        </a>
                        <a href="https://www.linkedin.com/company/vativeau" class="btn btn-social btn-round">
                            <i class="fa fa-linkedin"></i>
                        </a>
                    </div>

    

                <div class="copyright">
                    &copy; 2015 Vative
                </div>
            </div>
    </div>

</footer>

