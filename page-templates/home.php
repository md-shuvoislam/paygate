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

<div class="focus-business-area">
	<div class="container">
		<div class="row">
			<div class="col-md-4 text-right">
				<h2>FOCUS ON YOUR BUSINESS</h2>
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

<div class="pci-area">
	<div class="container">
		<div class="row">
			<div class="col-md-6">
				<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/bg-copy.png" alt="">
			</div>
			<div class="col-md-6 text-right">
				<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/Group-2.png" alt="">
				<p>We are PCI certified by the standard known as PCI DSS (Payment Card Industry Data Security Standard) founded by various institutions including Visa and Mastercard. We have been certified in level 3 as a merchant and we are finishing the process for level 2 as a Service Provider coming in Agoust 2019.</p>
				<a href="" class="orange-btn"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/button-orange.png" alt=""></a>
			</div>
		</div>
	</div>
</div>

<div class="what-we-do">
	<div class="container">
		<div class="row text-center">
			<div class="section-title">
				<h2>What <strong>we Do</strong></h2>
			</div>
		</div>
		<div class="row what-we-do-single">
			<div class="col-md-6 text-right">
				<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/Group-54.png" alt="">
				<h3>Sed ut perspiciati</h3>
				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqt enim ut aliquip ex ea commodo consequat</p>
				<a href="" class="orange-btn"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/button-orange.png" alt=""></a>
			</div>
			<div class="col-md-6">
				<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/bg2.png" alt="">
			</div>
		</div>
		<div class="row what-we-do-single">
			<div class="col-md-6 text-right">
				<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/bg3.png" alt="">
			</div>
			<div class="col-md-6 text-left">
				<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/Group-54.png" alt="">
				<h3>Sed ut perspiciati</h3>
				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqt enim ut aliquip ex ea commodo consequat</p>
				<a href="" class="orange-btn"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/button-orange.png" alt=""></a>
			</div>
		</div>
	</div>
</div>

<?php get_footer();

