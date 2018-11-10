<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Clearsoft
 * @subpackage Moy
 * @since 1.0
 * @version 1.2
 */

?>

<?php if ( !is_front_page()) : ?>
    </div>
<?php endif; ?>

<!-- footer top end -->
<!-- footer start (Add "dark" class to #footer in order to enable dark footer) -->
<!-- ================ -->
<footer id="footer" class="clearfix">

    <!-- .footer start -->
    <!-- ================ -->
    <div class="footer">
        <div class="container">
            <div class="footer-inner">
                <div class="row">
                    <div class="col-lg-9">
                        <div class="row">
                            <div class="col-4">
                                <div class="footer-content">
                                    <h4 class="title"><i class="fa fa-map-marker pr-10"></i> Ireland</h4>
                                    <p>
                                        Unit k <br />
                                        South City Business Park <br />
                                        Whitestown Way <br />
                                        Tallaght <br />
                                        Dublin 24 <br />
                                    </p>
                                    <p><i class="fa fa-phone pr-10"></i> <a href="tel:0035314519077">(0)1 451 9077</a></p>
                                    <p><i class="fa fa-phone pr-10"></i> <a href="mailto:info@moymaterials.com">info@moymaterials.com</a></p>
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="footer-content">
                                    <h4 class="title"><i class="fa fa-map-marker pr-10"></i> England</h4>
                                    <p>
                                        Victoria House (4th Floor) <br />
                                        Victoria Road <br />
                                        Chelmsford <br />
                                        CM1 1JR <br />
                                        <br />
                                    </p>
                                    <p><i class="fa fa-phone pr-10"></i> <a href="tel:00441245707449">01245 707 449</a></p>
                                    <p><i class="fa fa-phone pr-10"></i> <a href="mailto:info@moymaterials.co.uk">info@moymaterials.co.uk</a></p>
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="footer-content">
                                    <h4 class="title"><i class="fa fa-map-marker pr-10"></i> Scotland</h4>
                                    <p>
                                        6 Mackean Street <br />
                                        Paisley <br />
                                        Glasgow <br />
                                        PA3 1QP  <br />
                                        <br />
                                    </p>
                                    <p><i class="fa fa-phone pr-10"></i> <a href="tel:00441418404660">0141 8404660</a></p>
                                    <p><i class="fa fa-phone pr-10"></i> <a href="mailto:enquiries@moymaterials.co.uk">info@moymaterials.co.uk</a></p>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-2"><a href="http://www.bbacerts.co.uk/" target="blank"><img src="<?php echo get_template_directory_uri() ;?>/assets/images/logos/boa.png" alt=""></a></div>
                            <div class="col-2"><a href="https://www.fmapprovals.com/" target="blank"><img src="<?php echo get_template_directory_uri() ;?>/assets/images/logos/fm.png" alt=""></a></div>
                            <div class="col-2"><a href="http://www.lrwa.org.uk/" target="blank"><img src="<?php echo get_template_directory_uri() ;?>/assets/images/logos/lrwa.png" alt=""></a></div>
                            <div class="col-2"><a href="https://www.nfrc.co.uk/" target="blank"><img src="<?php echo get_template_directory_uri() ;?>/assets/images/logos/nfrc.png" alt=""></a></div>
                            <div class="col-2"><a href="https://www.thenbs.com/for-manufacturers/services/nbs-plus" target="blank"><img src="<?php echo get_template_directory_uri() ;?>/assets/images/logos/nbs.png" alt=""></a></div>
                            <div class="col-2"><a href="https://www.architecture.com/" target="blank"><img src="<?php echo get_template_directory_uri() ;?>/assets/images/logos/riba.png" alt=""></a></div>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="footer-content">
                            <h2 class="title">Follow Us</h2>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                            <ul class="social-links circle animated-effect-1">
                                <li class="facebook"><a href="#"><i class="fa fa-facebook"></i></a></li>
                                <li class="twitter"><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li class="linkedin"><a href="#"><i class="fa fa-linkedin"></i></a></li>
                            </ul>
                            <h2 class="title">Subscribe</h2>
                            <p>Lorem ipsum dolor sit amet accusamus excepturi sint dicta maxime?</p>
                            <form method="post" action="<?php echo get_home_url() ?>?na=s" onsubmit="return newsletter_check(this)">
                                <div class="margin-clear form-group has-feedback">
                                    <label class="sr-only" for="subscribe">Email address</label>
                                    <input type="email" class="form-control" id="email" name="ne" placeholder="Enter email" required="">
                                    <i class="fa fa-envelope form-control-feedback"></i>
                                </div>
                                <div class="text-left">
                                    <button type="submit" class="btn btn-default btn-sm btn-animated">Submit<i class="fa fa-send"></i></button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- .footer end -->

    <!-- .subfooter start -->
    <!-- ================ -->
    <div class="subfooter">
        <div class="container">
            <div class="subfooter-inner">
                <div class="row">
                    <div class="col-6">
                        <p>Copyright © 2018. Website By <a href="https:www.clearsoft.ie" target="_blank">ClearSoft</a></p>
                    </div>
                    <div class="col-6">
                        <p class="text-right"><a href="privacy-policy" target="_blank">Privacy Policy</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- .subfooter end -->

</footer>
<!-- footer end -->
</div>
<!-- page-wrapper end -->

<!-- JavaScript files placed at the end of the document so the pages load faster -->
<!-- ================================================== -->
<!-- Jquery and Bootstap core js files -->
<script src="<?php echo get_template_directory_uri() ;?>/assets/plugins/jquery.min.js"></script>
<script src="<?php echo get_template_directory_uri() ;?>/assets/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- jQuery Revolution Slider  -->
<script src="<?php echo get_template_directory_uri() ;?>/assets/plugins/rs-plugin-5/js/jquery.themepunch.tools.min.js"></script>
<script src="<?php echo get_template_directory_uri() ;?>/assets/plugins/rs-plugin-5/js/jquery.themepunch.revolution.min.js"></script>
<!-- Isotope javascript -->
<script src="<?php echo get_template_directory_uri() ;?>/assets/plugins/isotope/imagesloaded.pkgd.min.js"></script>
<script src="<?php echo get_template_directory_uri() ;?>/assets/plugins/isotope/isotope.pkgd.min.js"></script>
<!-- Magnific Popup javascript -->
<script src="<?php echo get_template_directory_uri() ;?>/assets/plugins/magnific-popup/jquery.magnific-popup.min.js"></script>
<!-- Appear javascript -->
<script src="<?php echo get_template_directory_uri() ;?>/assets/plugins/waypoints/jquery.waypoints.min.js"></script>
<script src="<?php echo get_template_directory_uri() ;?>/assets/plugins/waypoints/sticky.min.js"></script>
<!-- Count To javascript -->
<script src="<?php echo get_template_directory_uri() ;?>/assets/plugins/countTo/jquery.countTo.js"></script>
<!-- Slick carousel javascript -->
<script src="<?php echo get_template_directory_uri() ;?>/assets/plugins/slick/slick.min.js"></script>
<!-- Initialization of Plugins -->
<script src="<?php echo get_template_directory_uri() ;?>/assets/js/template.js"></script>
<!-- Custom Scripts -->
<script src="<?php echo get_template_directory_uri() ;?>/assets/js/custom.js"></script>
<?php wp_footer(); ?>
</body>
</html>
