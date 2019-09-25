<?php
    /**
     * The template for displaying the footer.
     *
     * Contains the closing of the #content div and all content after
     *
     * @package understrap
     */
    
    // Exit if accessed directly.
    defined( 'ABSPATH' ) || exit;
    
$container = get_theme_mod( 'understrap_container_type' );
    ?>
<?php get_template_part( 'sidebar-templates/sidebar', 'footerfull' ); ?>
<div class="wrapper" id="wrapper-footer">
    <div class="footer-top" style="background-image: url('<?php echo get_stylesheet_directory_uri(); ?>/assets/img/bg-copy-2.png');">
        <div class="container">
            <div class="row">
                <div class="col-md-12 newslatter-area">
                    <div class="section-title">
                        <h2><strong>Sign Up</strong> Newsletter</h2>
                        <p>In ullamcorper est eget tempor cursus neque mi consectetuer</p>
                    </div>
                    <?php echo do_shortcode('[email-subscribers-form id="1"]')?>
                </div>
            </div>
            <div class="row account-create-area">
                <div class="col-md-6">
                    <h3>Ready to get started?</h3>
                    <p>Get in touch or create an account.</p>
                </div>
                <div class="col-md-6 text-right footer-btn">
                    <a href="" class="green-btn-footer"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/button-greem.png" alt=""></a>
                    <a href="" class="orange-btn-footer"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/button-orange.png" alt=""></a>
                </div>
            </div>
            <div class="row contact-information text-center">
                <div class="col-md-3">
                    <i class="fa fa-phone"></i>
                    <h6>Phone</h6>
                    <p>(+428) 888 888 8888</p>
                </div>
                <div class="col-md-3">
                    <i class="fa fa-map-marker"></i>
                    <h6>Head Office</h6>
                    <p>123 west Dummy Car Street, Old City,New State, USA. PO 4288</p>
                </div>
                <div class="col-md-3">
                    <i class="fa fa-map-marker"></i>
                    <h6>Main Office</h6>
                    <p>123 west Dummy Car Street, Old City,New State, USA. PO 4288</p>
                </div>
                <div class="col-md-3">
                    <i class="fa fa-envelope"></i>
                    <h6>Email</h6>
                    <p>info@paygate.com</p>
                </div>
            </div>
        </div>
    </div>
    <div class="<?php echo esc_attr( $container ); ?>">
        <footer class="site-footer" id="colophon">
            <div class="row footer-copyright">
                <div class="col-md-8">
                    <div class="site-info">
                        <p>Copyrights © 2019, Paygate.All rights reserved  |  Privacy policy  |  Terms of use</p>
                    </div>
                    <!-- .site-info -->
                </div>
                <!--col end -->
                <div class="col-md-4">
                    <div class="site-footer-social">
                        <ul>
                            <li><a href=""><i class="fa fa-facebook"></i></a></li>
                            <li><a href=""><i class="fa fa-twitter"></i></a></li>
                            <li><a href=""><i class="fa fa-pinterest"></i></a></li>
                            <li><a href=""><i class="fa fa-youtube-play"></i></a></li>
                        </ul>
                    </div>
                    <!-- .site-info -->
                </div>
                <!--col end -->
            </div>
            <!-- row end -->
        </footer>
        <!-- #colophon -->
    </div>
    <!-- container end -->
</div>
<!-- wrapper end -->
</div><!-- #page we need this extra closing tag here -->
<?php wp_footer(); ?>
</body>
</html>