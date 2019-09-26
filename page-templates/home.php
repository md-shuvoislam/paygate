<?php
/**
 * Template Name: Home
 *
 * Template for displaying a page without sidebar even if a sidebar widget is published.
 *
 * @package understrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

get_header(); ?>

<div class="slider-area">
	<?php echo do_shortcode('[rev_slider alias="slider-1"][/rev_slider]')?>
</div>

<div class="focus-business-area">
	<div class="container">
		<div class="row">
			<div class="col-md-4 text-right">
				<h2>FOCUS ON YOUR <strong>BUSINESS</strong></h2>
			</div>
			<div class="col-md-2">
				<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/Group-55.png" alt="">
			</div>
			<div class="col-md-6">
				<p>A software designed to let you focus on doing your business while it takes care of the hassles of collecting your payments</p>
			</div>
		</div>
	</div>
</div>

<div class="pci-area" style="background-image: url('<?php echo get_stylesheet_directory_uri(); ?>/assets/img/bg1.png');">
	<div class="container-fluid">
		<div class="row">
			<div class="col-lg-6 col-md-12 pci-area-left">
				<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/bg-copy.png" alt="">
			</div>
			<div class="col-lg-6 col-md-12 text-right pci-area-right">
				<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/Group-2.png" alt="">
				<p>We are PCI certified by the standard known as PCI DSS (Payment Card Industry Data Security Standard) founded by various institutions including Visa and Mastercard. We have been certified in level 3 as a merchant and we are finishing the process for level 2 as a Service Provider coming in Agoust 2019.</p>
				<a href="" class="orange-btn"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/pci-read-more-btn.png" alt=""></a>
			</div>
		</div>
	</div>
</div>



<div class="what-we-do section-padding" style="background-image: url('<?php echo get_stylesheet_directory_uri(); ?>/assets/img/Layer-36.png');">
	<div class="container">
		<div class="row text-center">
			<div class="col-md-12">
				<div class="section-title">
					<h2>What <strong>we Do</strong></h2>
				</div>
			</div>
		</div>
		<div class="row what-we-do-single what-we-do-single-one">
			<div class="col-lg-6 col-md-12 text-right">
				<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/Group-54.png" alt="">
				<h3>Sed ut perspiciati</h3>
				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqt enim ut aliquip ex ea commodo consequat</p>
				<a href="" class="orange-btn"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/pci-read-more-btn.png" alt=""></a>
			</div>
			<div class="col-lg-6 col-md-12 ww-img">
				<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/bg2.png" alt="">
			</div>
		</div>
		<div class="row what-we-do-single">
			<div class="col-lg-6 col-md-12 text-right ww-img">
				<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/bg3.png" alt="">
			</div>
			<div class="col-lg-6 col-md-12 text-left ww-order">
				<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/Group-541.png" alt="">
				<h3>Sed ut perspiciati</h3>
				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqt enim ut aliquip ex ea commodo consequat</p>
				<a href="" class="orange-btn"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/pci-read-more-btn.png" alt=""></a>
			</div>
		</div>
	</div>
</div>


   <!-- testimonial area start-->
   
   <div class="testimonial-area section-padding">
       <div class="container">
           <div class="row">
               <div class="col-md-12">
                   <div class="section-title">
						<h2>What <strong>Clients Say</strong></h2>
					</div>
               </div>
           </div>
           <div class="row">
               <div class="col-md-4">
                   <div class="single-testimonial-box">
                       <div class="testimonial-text">
                       		<img class="quote-icon" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/quote.png" alt="">
                           <p>In ullamcorper est eget tempor cursus neque mi consectetuer mi a ultricies massa est sed nisl Class aptent taciti sociosqu ad litora torquent per conubia nostra </p>
                       </div>
                       <div class="testimonial-bottom-section">
                       		<div class="row">
                       			<div class="col-lg-8 col-md-12">
                       				 <div class="testimonial-bottom">
                       				 	<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/Group-15.png" alt="">
                       				 </div>
                            		<p class="author-details"><strong>By Author</strong><br />City, Location</p>
                       			</div>
                       			<div class="col-lg-4 col-md-12">
                       				<div class="testimonial-brand-lgo"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/Layer-28.png" alt=""></div>
                       			</div>
                       		</div>
                        </div>
                   </div>
               </div>
               <div class="col-md-4">
                   <div class="single-testimonial-box active">
                       <div class="testimonial-text">
                           <img class="quote-icon" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/green-quote.png" alt="">
                           <p> In ullamcorper est eget tempor cursus neque mi consectetuer mi a ultricies massa est sed nisl Class aptent taciti sociosqu ad litora torquent per conubia nostra </p>
                       </div>
                       <div class="testimonial-bottom-section">
                       		<div class="row">
                       			<div class="col-lg-8 col-md-12">
                       				 <div class="testimonial-bottom">
                       				 	<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/Group-15.png" alt="">
                       				 </div>
                            		<p class="author-details"><strong>By Author</strong><br />City, Location</p>
                       			</div>
                       			<div class="col-lg-4 col-md-12">
                       				<div class="testimonial-brand-lgo"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/Layer-29.png" alt=""></div>
                       			</div>
                       		</div>
                        </div>
                    </div>
               </div>
               <div class="col-md-4">
                   <div class="single-testimonial-box">
                       <div class="testimonial-text">
                           <img class="quote-icon" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/quote.png" alt="">
                           <p> In ullamcorper est eget tempor cursus neque mi consectetuer mi a ultricies massa est sed nisl Class aptent taciti sociosqu ad litora torquent per conubia nostra </p>
                       </div>
                       <div class="testimonial-bottom-section">
                       		<div class="row">
                       			<div class="col-lg-8 col-md-12">
                       				 <div class="testimonial-bottom">
                       				 	<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/Group-15.png" alt="">
                       				 </div>
                            		<p class="author-details"><strong>By Author</strong><br />City, Location</p>
                       			</div>
                       			<div class="col-lg-4 col-md-12">
                       				<div class="testimonial-brand-lgo"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/Layer-30.png" alt=""></div>
                       			</div>
                       		</div>
                        </div>
                   </div>
               </div>
           </div>
       </div>
   </div>
   <!-- testimonial area ends-->

<?php get_footer();

