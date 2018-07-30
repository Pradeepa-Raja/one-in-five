<?php
//about theme info
add_action( 'admin_menu', 'vw_charity_pro_gettingstarted' );
function vw_charity_pro_gettingstarted() {    	
	add_theme_page( esc_html__('Get Started', 'vw-charity-pro'), esc_html__('Get Started', 'vw-charity-pro'), 'edit_theme_options', 'vw_charity_pro_guide', 'vw_charity_pro_mostrar_guide');   
}

function vw_charity_pro_notice(){
    global $pagenow;
    if ( is_admin() && ('themes.php' == $pagenow) && isset( $_GET['activated'] ) ) {?>
    <div class="notice notice-success is-dismissible getting_started">
		<div class="notice-content">
			<p><img src="<?php echo get_template_directory_uri() ?>/inc/getstarted/images/final-logo.png" width="200"></p>
			<h2><?php esc_html_e( 'Thanks for installing VW Charity Pro, you rock!', 'vw-charity-pro' ) ?> </h2>
			<p><?php esc_html_e( 'VW Charity Pro now supports colors, typography custom links for custom post types. Take benefit of a variety of features, functionalities, elements, and an exclusive set of customization options to build your own professional website', 'vw-charity-pro' ) ?></p>
			<p><?php esc_html_e( "Please Click on the link below to know the theme setup information", 'vw-charity-pro' ) ?></p>
			<p><a href="<?php echo esc_url( admin_url( 'themes.php?page=vw_charity_pro_guide' ) ); ?>" class="button button-primary"><?php esc_html_e( 'Getting Started With Charity Pro', 'vw-charity-pro' ); ?></a></p>
		</div>
	</div>
	<?php }
}
add_action('admin_notices', 'vw_charity_pro_notice');

add_action( 'admin_notices', 'vw_charity_pro_r_review' );
function vw_charity_pro_r_review() {

	// Verify that we can do a check for reviews.
	$review = get_option( 'vw_charity_pro_r_review' );
	$time	= time();
	$load	= false;
	if ( ! $review ) {
		$review = array(
			'time' 		=> $time,
			'dismissed' => false
		);
		add_option('vw_charity_pro_r_review', $review);
		//$load = true;
	} else {
		// Check if it has been dismissed or not.
		if ( (isset( $review['dismissed'] ) && ! $review['dismissed']) && (isset( $review['time'] ) && (($review['time'] + (DAY_IN_SECONDS * 2)) <= $time)) ) {
			$load = true;
		}
	}
	// If we cannot load, return early.
	if ( ! $load ) {
		return;
	}

	// We have a candidate! Output a review message.
	?>
	<div class="notice notice-info is-dismissible vw_charity_pro-acc-r-review-notice">
		<div class="vw_notice_outer">
			<img class="vw-logo_img" src="<?php echo esc_url(get_template_directory_uri().'/inc/getstarted/images/V-Logo.png'); ?>" />
		</div>
		<p class="vw_review_head"><?php echo esc_html('Hi! We saw you have been using VW Charity Pro theme for a few days and wanted to ask for your help to make the theme better.We just need a minute of your time to rate the theme. Thank you!'); ?></p>
		<p class="vw_review_buttons"> 
			<a href="<?php echo esc_url (VW_CHARITY_PRO_REVIEW); ?>" class="vw_charity_pro-acc-r-dismiss-review-notice vw_charity_pro-acc-r-review-out vw_review_buttons_a" target="_blank" rel="noopener"><?php echo esc_html('Rate the Theme','vw-charity-pro'); ?></a>
			<a href="#"  class="vw_charity_pro-acc-r-dismiss-review-notice vw_charity_pro-rate-later vw_review_buttons_a" target="_self" rel="noopener"><?php echo esc_html( 'Maybe Later', '' ); ?></a>
			<a href="#" class="vw_charity_pro-acc-r-dismiss-review-notice vw_charity_pro-rated vw_review_buttons_a" target="_self" rel="noopener"><?php echo esc_html( 'I already did', '' ); ?></a>
		</p>
	</div>
	<script type="text/javascript">
		jQuery(document).ready( function($) {
			$(document).on('click', '.vw_charity_pro-acc-r-dismiss-review-notice, .vw_charity_pro-acc-r-dismiss-notice .notice-dismiss', function( event ) {
				if ( $(this).hasClass('vw_charity_pro-acc-r-review-out') ) {
					var vw_charity_pro_rate_data_val = "1";
				}
				if ( $(this).hasClass('vw_charity_pro-rate-later') ) {
					var vw_charity_pro_rate_data_val =  "2";
					event.preventDefault();
				}
				if ( $(this).hasClass('vw_charity_pro-rated') ) {
					var vw_charity_pro_rate_data_val =  "3";
					event.preventDefault();
				}

				$.post( ajaxurl, {
					action: 'vw_charity_pro_r_dismiss_reviews',
					vw_charity_pro_rate_data_acc_r : vw_charity_pro_rate_data_val
				});
				
				$('.vw_charity_pro-acc-r-review-notice').hide();
				//location.reload();
			});
		});
	</script>
	<?php
}

add_action( 'wp_ajax_vw_charity_pro_r_dismiss_reviews', 'vw_charity_pro_r_dismiss_reviews' );
function vw_charity_pro_r_dismiss_reviews() {
	if ( ! $review ) {
		$review = array();
	}
	
	if($_POST['vw_charity_pro_rate_data_acc_r']=="1"){
		$review['time'] 	 = time();
		$review['dismissed'] = false;
		
	}
	if($_POST['vw_charity_pro_rate_data_acc_r']=="2"){
		$review['time'] 	 = time();
		$review['dismissed'] = false;
		
	}
	if($_POST['vw_charity_pro_rate_data_acc_r']=="3"){
		$review['time'] 	 = time();
		$review['dismissed'] = true;
		
	}
	update_option( 'vw_charity_pro_r_review', $review );
	die;
}


// Add a Custom CSS file to WP Admin Area
function vw_charity_pro_admin_theme_style() {
   wp_enqueue_style( 'vw-charity-pro-font', vw_charity_pro_admin_font_url(), array() );
   wp_enqueue_style('custom-admin-style', get_template_directory_uri() . '/inc/getstarted/getstarted.css');
   wp_enqueue_script('tabs', get_template_directory_uri() . '/inc/getstarted/js/tab.js');
}
add_action('admin_enqueue_scripts', 'vw_charity_pro_admin_theme_style');

// Theme Font URL
function vw_charity_pro_admin_font_url() {
	$font_url = '';
	$font_family = array();
	$font_family[] = 'Muli:300,400,600,700,800,900';

	$query_args = array(
		'family'	=> urlencode(implode('|',$font_family)),
	);
	$font_url = add_query_arg($query_args,'//fonts.googleapis.com/css');
	return $font_url;
}

//guidline for about theme
function vw_charity_pro_mostrar_guide() { 
	//custom function about theme customizer
	$return = add_query_arg( array()) ;
	$theme = wp_get_theme( 'vw-charity-pro' );
?>

<div class="wrapper-info">
    <div class="col-left">
    	<h2><?php esc_html_e( 'Welcome to VW Charity Pro', 'vw-charity-pro' ); ?> <span class="version">Version: <?php echo esc_html($theme['Version']);?></span></h2>
    	<p><?php esc_html_e('All our WordPress themes are modern, minimalist, 100% responsive, seo-friendly,feature-rich, and multipurpose that best suit designers, bloggers and other professionals who are working in the creative fields.','vw-charity-pro'); ?></p>
    </div>
    <div class="tab-sec">
		<div class="tab">
		  	<button class="tablinks" onclick="openCity(event, 'charity_pro')"><?php esc_html_e( 'Getting Started', 'vw-charity-pro' ); ?></button>  
		  	<button class="tablinks" onclick="openCity(event, 'plugins')"><?php esc_html_e( 'Plugins', 'vw-charity-pro' ); ?></button>
		  	<button class="tablinks" onclick="openCity(event, 'our_theme')"><?php esc_html_e( 'Our Themes', 'vw-charity-pro' ); ?></button>
		 	<button class="tablinks" onclick="openCity(event, 'theme_offer')"><?php esc_html_e( 'Theme Offers', 'vw-charity-pro' ); ?></button>
		</div>

		<!-- Tab content -->
		<div id="charity_pro" class="tabcontent open">
			
		  	<div class="col-left-inner">
		  		<h3><?php esc_html_e( 'VW Charity Pro Information', 'vw-charity-pro' ); ?></h3>
				<hr class="h3hr">
		  		<h4><?php esc_html_e( 'Theme Documentation', 'vw-charity-pro' ); ?></h4>
				<p><?php esc_html_e( 'If you need any assistance regarding setting up and configuring the Theme, our documentation is there.', 'vw-charity-pro' ); ?></p>
				<div class="info-link">
					<a href="<?php echo esc_url( VW_CHARITY_PRO_THEME_DOC ); ?>" target="_blank"> <?php esc_html_e( 'Documentation', 'vw-charity-pro' ); ?></a>
				</div>
				<hr>
				<h4><?php esc_html_e('Theme Customizer', 'vw-charity-pro'); ?></h4>
				<p> <?php esc_html_e('To begin customizing your website, start by clicking "Customize".', 'vw-charity-pro'); ?></p>
				<div class="info-link">
					<a target="_blank" href="<?php echo esc_url( admin_url('customize.php') ); ?>"><?php esc_html_e('Customizing', 'vw-charity-pro'); ?></a>
				</div>
				<hr>				
				<h4><?php esc_html_e('Having Trouble, Need Support?', 'vw-charity-pro'); ?></h4>
				<p> <?php esc_html_e('Our dedicated team is well prepared to help you out in case of queries and doubts regarding our theme.', 'vw-charity-pro'); ?></p>
				<div class="info-link">
					<a href="<?php echo esc_url( VW_CHARITY_PRO_SUPPORT ); ?>" target="_blank"><?php esc_html_e('Support Forum', 'vw-charity-pro'); ?></a>
				</div>
				<hr>
				<h4><?php esc_html_e('Reviews & Testimonials', 'vw-charity-pro'); ?></h4>
				<p> <?php esc_html_e('All the features and aspects of this WordPress Theme are phenomenal. I\'d recommend this theme to all.', 'vw-charity-pro'); ?>  </p>
				<div class="info-link">
					<a href="<?php echo esc_url( VW_CHARITY_PRO_REVIEW ); ?>" target="_blank"><?php esc_html_e('Reviews', 'vw-charity-pro'); ?></a>
				</div>
		  	</div>
		  	<div class="col-right-inner">
			  <h3><?php esc_html_e('How to set up Home Page Template','vw-charity-pro'); ?></h3>
			  <hr class="h3hr">
				<p><?php esc_html_e('Follow these instructions to setup Home page.','vw-charity-pro'); ?></p>
                 <ul>
                  <li><?php esc_html_e('1. Create a Page to set template:  Go to ','vw-charity-pro'); ?>
                  <b><?php esc_html_e('Dashboard &gt;&gt; Pages &gt;&gt; Add New Page','vw-charity-pro'); ?></b>.
                  <p><?php esc_html_e('Label it "home" or anything as you wish. Then select template "home-page" from template dropdown.','vw-charity-pro'); ?></p></li>
                  <img src="<?php echo esc_url(get_template_directory_uri()); ?>/inc/getstarted/images/home-page-template.png" alt="" />
                  <p></p><span class="strong"><?php esc_html_e('2. Set the front page:','vw-charity-pro'); ?></span><?php esc_html_e(' Go to ','vw-charity-pro'); ?>
				  <b><?php esc_html_e(' Settings -&gt; Reading --&gt; Set the front page display static page to home page ','vw-charity-pro'); ?></b></p>
                  <img src="<?php echo esc_url(get_template_directory_uri()); ?>/inc/getstarted/images/set-front-page.png" alt="" />
                  <p><?php esc_html_e(' Once you are done with this, you can see all the demo content on front page. ','vw-charity-pro'); ?></p>
                 </ul>
		  	</div>
		</div>	
		<div id="plugins" class="tabcontent">
			<h2 class="dashboard-install-title"><?php esc_html_e(' Install Required Plugins ','vw-charity-pro'); ?></h2>
            <div class="col-left-inner">
				<ul>
					<p><img src="<?php echo esc_url(get_template_directory_uri()); ?>/inc/getstarted/images/right-arrow.png" alt="" /><b> <?php esc_html_e(' Title Banner Image Plugin:','vw-charity-pro'); ?> </b> <?php esc_html_e('To fetch Banner on each page and post','vw-charity-pro'); ?></p>
					<p><img src="<?php echo esc_url(get_template_directory_uri()); ?>/inc/getstarted/images/right-arrow.png" alt="" /><i class="fa fa-angle-double-right"></i><b> <?php esc_html_e(' VW Charity Pro Posttype Plugin:','vw-charity-pro'); ?></b> <?php esc_html_e('Used to add Team and Testimonials.','vw-charity-pro'); ?></p>					
				</ul>
			</div>
			<div class="col-right-inner">
				<img src="<?php echo esc_url(get_template_directory_uri()); ?>/inc/getstarted/images/plugin-screenshot.png" alt="" />
         	</div>
	     	<div class="posttype-plugin">
		     	<h2 id="heading"><?php esc_html_e('Install Charity Pro Post Type Plugin','vw-charity-pro'); ?></h2>
		     	<p><b><?php esc_html_e('Plugins are ways to extend and add to the functionality that already exists in WordPress.','vw-charity-pro'); ?></b></p>
		     	<ol>
		     		<li><img src="<?php echo esc_url(get_template_directory_uri()); ?>/inc/getstarted/images/right-arrow.png" alt="" /> <?php esc_html_e('First, you need to download the plugin from the source (which will be a zip file vw-charity-pro-posttype)).','vw-charity-pro'); ?> </li>
		     		<li><img src="<?php echo esc_url(get_template_directory_uri()); ?>/inc/getstarted/images/right-arrow.png" alt="" /> <?php esc_html_e('Next, you need to go to WordPress admin area and visit Plugins -> Add New.','vw-charity-pro'); ?>  </b></li>
		     		<figure class="img-paraloid"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/inc/getstarted/images/uploadplug.png" alt="" /></figure>
		     		<li><img src="<?php echo esc_url(get_template_directory_uri()); ?>/inc/getstarted/images/right-arrow.png" alt="" /> <?php esc_html_e('After that, click on the ','vw-charity-pro'); ?> <b><?php esc_html_e('Upload Plugin button','vw-charity-pro'); ?></b> <?php esc_html_e('on top of the page.','vw-charity-pro'); ?></li>
		     		<li><img src="<?php echo esc_url(get_template_directory_uri()); ?>/inc/getstarted/images/right-arrow.png" alt="" /> <?php esc_html_e('This will bring you to the plugin upload page.','vw-charity-pro'); ?> </li>
		     		<li><img src="<?php echo esc_url(get_template_directory_uri()); ?>/inc/getstarted/images/right-arrow.png" alt="" />  <?php esc_html_e('Here, you need to click on the choose file button and select the plugin file you downloaded earlier to your computer.','vw-charity-pro'); ?></li>
		     		<figure class="img-paraloid pull-left"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/inc/getstarted/images/pluginuploadpage.png" alt="" /></figure>
		     		<li><img src="<?php echo esc_url(get_template_directory_uri()); ?>/inc/getstarted/images/right-arrow.png" alt="" /> <?php esc_html_e(' After you have selected the file, you need to click on the install now button.','vw-charity-pro'); ?></li>
		     		<li><img src="<?php echo esc_url(get_template_directory_uri()); ?>/inc/getstarted/images/right-arrow.png" alt="" />  <?php esc_html_e(' WordPress will now upload the plugin file from your computer and install it for you. You will see a success message like this after installation is finished.','vw-charity-pro'); ?></li>
		     		<li><img src="<?php echo esc_url(get_template_directory_uri()); ?>/inc/getstarted/images/right-arrow.png" alt="" />   <?php esc_html_e(' Once installed, you need to click on the Activate Plugin link to start using the plugin.','vw-charity-pro'); ?></li>
		     		<li><img src="<?php echo esc_url(get_template_directory_uri()); ?>/inc/getstarted/images/right-arrow.png" alt="" /> <?php esc_html_e('  As soon as you activate plugin, you will get Causes, Donator, Events and Testimonials in your Admin Navigation Pannel.','vw-charity-pro'); ?></li>
		        </ol>
	     	</div>
		</div>
		<div id="our_theme" class="tabcontent">
			<h3><?php esc_html_e( 'You may also like some of our products', 'vw-charity-pro' ); ?></h3>
			<hr class="h3hr">
			<div class="row-bar">
				<div class="col1-first">
					<img src="<?php echo esc_url(get_template_directory_uri()); ?>/inc/getstarted/images/bundle.png" alt="" />
					<h4><?php esc_html_e('THEME BUNDLE','vw-charity-pro'); ?></h4>
					<hr class="h4hr">
					<p><?php esc_html_e('On the purchase of our Theme bundle, we assure you that you will get your money worth and even more.When you buy our VWThemes bundle, you officially become a premium member of VWThemes.','vw-charity-pro'); ?></p>
					<div class="info-link">
						<a href="<?php echo esc_url( VW_CHARITY_PRO_THEME_BUNDLE ); ?>" target="_blank"> <span class="dashicons dashicons-cart"></span><?php esc_html_e( 'Buy all Themes at $99', 'vw-charity-pro' ); ?></a>
					</div>
				</div>
				<div class="col2-first">
					<img src="<?php echo esc_url(get_template_directory_uri()); ?>/inc/getstarted/images/ecommerce-bundle.png" alt="" />
					<h4><?php esc_html_e('VW ECOMMERCE SHOP','vw-charity-pro'); ?></h4>
					<hr class="h4hr">
					<p><?php esc_html_e('This E-commerce WordPress theme is for the people of the business world. Setting up a store is a tricky task and an online store requires suitable E-commerce Wordpress theme.','vw-charity-pro'); ?></p>
					<div class="info-link">
						<a href="<?php echo esc_url( VW_CHARITY_PRO_ECOMMERCE ); ?>" target="_blank"> <span class="dashicons dashicons-cart"></span><?php esc_html_e( 'Buy this Theme at $40', 'vw-charity-pro' ); ?></a>
					</div>
				</div>
				<div class="col2-first">
					<img src="<?php echo esc_url(get_template_directory_uri()); ?>/inc/getstarted/images/Fitness-Bundle.png" alt="" />
					<h4><?php esc_html_e('VW FITNESS THEME','vw-charity-pro'); ?></h4>
					<hr class="h4hr">
					<p><?php esc_html_e('This Premium Fitness WordPress theme is a fitting choice for the people belonging to the fitness world. This premium fitness theme is a reflection of the kind of life fitness fanatics lead. ','vw-charity-pro'); ?></p>
					<div class="info-link">
						<a href="<?php echo esc_url( VW_CHARITY_PRO_FITNESS ); ?>" target="_blank"> <span class="dashicons dashicons-cart"></span><?php esc_html_e( 'Buy this Theme at $40', 'vw-charity-pro' ); ?></a>
					</div>
				</div>
			</div>
			<div class="row-bar">
				<div class="col-second">
					<img src="<?php echo esc_url(get_template_directory_uri()); ?>/inc/getstarted/images/Tour-Bundle.png" alt="" />
					<h4><?php esc_html_e('VW TOUR&TRAVELS THEME','vw-charity-pro'); ?></h4>
					<hr class="h4hr">
					<p><?php esc_html_e('A Tours & Travel WordPress theme should be fun and intricate. A premium Travel WordPress theme is supposed to be well structured and informative. Your visitors are mainly going to be on the hunt for information.','vw-charity-pro'); ?></p>
					<div class="info-link">
						<a href="<?php echo esc_url( VW_CHARITY_PRO_TOURS ); ?>" target="_blank"> <span class="dashicons dashicons-cart"></span><?php esc_html_e( 'Buy this Theme at $40', 'vw-charity-pro' ); ?></a>
					</div>
				</div>
				<div class="col-second">
					<img src="<?php echo esc_url(get_template_directory_uri()); ?>/inc/getstarted/images/Corporate-Bundle.png" alt="" />
					<h4><?php esc_html_e('VW CORPORATE THEME','vw-charity-pro'); ?></h4>
					<hr class="h4hr">
					<p><?php esc_html_e('Our premium corporate WordPress theme is a combo of elegance and professional design. Corporate sector hires the best, so why settle for anything lesser than the best corporate WP theme? ','vw-charity-pro'); ?></p>
					<div class="info-link">
						<a href="<?php echo esc_url( VW_CHARITY_PRO_CORPORATE ); ?>" target="_blank"> <span class="dashicons dashicons-cart"></span><?php esc_html_e( 'Buy this Theme at $40', 'vw-charity-pro' ); ?></a>
					</div>
				</div>
				<div class="col-second">
					<img src="<?php echo esc_url(get_template_directory_uri()); ?>/inc/getstarted/images/restaurant-Bundle.png" alt="" />
					<h4><?php esc_html_e('VW RESTAURANT THEME','vw-charity-pro'); ?></h4>
					<hr class="h4hr">
					<p><?php esc_html_e('Our premium restaurant WordPress theme has a majestic design, perfect for restaurant and fine dining based industries. This premium Restaurant WordPress theme is clean & systematic. ','vw-charity-pro'); ?></p>
					<div class="info-link">
						<a href="<?php echo esc_url( VW_CHARITY_PRO_RESTAURANT ); ?>" target="_blank"> <span class="dashicons dashicons-cart"></span><?php esc_html_e( 'Buy this Theme at $40', 'vw-charity-pro' ); ?></a>
					</div>
				</div>
			</div>
			<div class="row-bar">
				<div class="col-second">
					<img src="<?php echo esc_url(get_template_directory_uri()); ?>/inc/getstarted/images/Automobile-Bundle.png" alt="" />
					<h4><?php esc_html_e('VW AUTOMOBILE THEME','vw-charity-pro'); ?></h4>
					<hr class="h4hr">
					<p><?php esc_html_e('This spectacular premium Automobile WordPress Theme is made for the motor-heads. We have created our Automobile themes Stunning design with respect to the automotive industry. ','vw-charity-pro'); ?></p>
					<div class="info-link">
						<a href="<?php echo esc_url( VW_CHARITY_PRO_AUTOMOBILE ); ?>" target="_blank"> <span class="dashicons dashicons-cart"></span><?php esc_html_e( 'Buy this Theme at $40', 'vw-charity-pro' ); ?></a>
					</div>
				</div>
				<div class="col-second">
					<img src="<?php echo esc_url(get_template_directory_uri()); ?>/inc/getstarted/images/Hospital-Bundle.png" alt="" />
					<h4><?php esc_html_e('VW HOSPITAL THEME','vw-charity-pro'); ?></h4>
					<hr class="h4hr">
					<p><?php esc_html_e('This hospital WordPress theme has a unique design, its loaded with features filled up to the brim. Your final stop in pursuit of the best hospital WordPress theme has arrived. ','vw-charity-pro'); ?></p>
					<div class="info-link">
						<a href="<?php echo esc_url( VW_CHARITY_PRO_HOSPITAL ); ?>" target="_blank"> <span class="dashicons dashicons-cart"></span><?php esc_html_e( 'Buy this Theme at $40', 'vw-charity-pro' ); ?></a>
					</div>
				</div>
				<div class="col-second">
					<img src="<?php echo esc_url(get_template_directory_uri()); ?>/inc/getstarted/images/Spa-Bundle.png" alt="" />
					<h4><?php esc_html_e('VW SPA THEME','vw-charity-pro'); ?></h4>
					<hr class="h4hr">
					<p><?php esc_html_e('VW Spa WordPress theme is made for the luxurious wellness business. Its epic design makes it a suitable Spa WordPress theme for anyone from the wellness industry. ','vw-charity-pro'); ?></p>
					<div class="info-link">
						<a href="<?php echo esc_url( VW_CHARITY_PRO_SPA ); ?>" target="_blank"> <span class="dashicons dashicons-cart"></span><?php esc_html_e( 'Buy this Theme at $40', 'vw-charity-pro' ); ?></a>
					</div>
				</div>
			</div>
			<div class="row-bar">
				<div class="col-second">
					<img src="<?php echo esc_url(get_template_directory_uri()); ?>/inc/getstarted/images/Education-Bundle.png" alt="" />
					<h4><?php esc_html_e('VW EDUCATION THEME','vw-charity-pro'); ?></h4>
					<hr class="h4hr">
					<p><?php esc_html_e('Do you run an education based firm? You would require a premium education WordPress theme to go along with it. ','vw-charity-pro'); ?></p>
					<div class="info-link">
						<a href="<?php echo esc_url( VW_CHARITY_PRO_EDUCATION ); ?>" target="_blank"> <span class="dashicons dashicons-cart"></span><?php esc_html_e( 'Buy this Theme at $40', 'vw-charity-pro' ); ?></a>
					</div>
				</div>
				<div class="col-second">
					<img src="<?php echo esc_url(get_template_directory_uri()); ?>/inc/getstarted/images/Lawyer-bundle.png" alt="" />
					<h4><?php esc_html_e('VW LAWYER THEME','vw-charity-pro'); ?></h4>
					<hr class="h4hr">
					<p><?php esc_html_e('This Lawyer WordPress Theme is skillfully built for lawyers, advocates, law agents, legal practitioners, legal consultancies, or any legal websites.','vw-charity-pro'); ?></p>
					<div class="info-link">
						<a href="<?php echo esc_url( VW_CHARITY_PRO_LAWYER ); ?>" target="_blank"> <span class="dashicons dashicons-cart"></span><?php esc_html_e( 'Buy this Theme at $40', 'vw-charity-pro' ); ?></a>
					</div>
				</div>
				<div class="col-second">
					<img src="<?php echo esc_url(get_template_directory_uri()); ?>/inc/getstarted/images/vw-blog-theme.png" alt="" />
					<h4><?php esc_html_e('VW BLOG MAGAZINE THEME','vw-charity-pro'); ?></h4>
					<hr class="h4hr">
					<p><?php esc_html_e('Blogging is the new trend of this generation. Its the best platform to give words to your thoughts, share your experiences, ideas and deep acquired knowledge.','vw-charity-pro'); ?></p>
					<div class="info-link">
						<a href="<?php echo esc_url( VW_CHARITY_PRO_BLOG ); ?>" target="_blank"> <span class="dashicons dashicons-cart"></span><?php esc_html_e( 'Buy this Theme at $40', 'vw-charity-pro' ); ?></a>
					</div>
				</div>
				<div class="col-second">
					<img src="<?php echo esc_url(get_template_directory_uri()); ?>/inc/getstarted/images/vw-construction.png" alt="" />
					<h4><?php esc_html_e('VW CONSTRUCTION ESTATE THEME','vw-charity-pro'); ?></h4>
					<hr class="h4hr">
					<p><?php esc_html_e('Construction WordPress theme finds its application in wide range of building and construction businesses. It can be used by land dealers, real estate agents.','vw-charity-pro'); ?></p>
					<div class="info-link">
						<a href="<?php echo esc_url( VW_CHARITY_PRO_CONSTRUCTION ); ?>" target="_blank"> <span class="dashicons dashicons-cart"></span><?php esc_html_e( 'Buy this Theme at $40', 'vw-charity-pro' ); ?></a>
					</div>
				</div>
				<div class="col-second">
					<img src="<?php echo esc_url(get_template_directory_uri()); ?>/inc/getstarted/images/pet-shop-theme.png" alt="" />
					<h4><?php esc_html_e('VW PET SHOP PRO','vw-charity-pro'); ?></h4>
					<hr class="h4hr">
					<p><?php esc_html_e('The premium pet WordPress theme is the best solution for all those dealing with animals in any form. It can be used for a blog, a website or for a portfolio.','vw-charity-pro'); ?></p>
					<div class="info-link">
						<a href="<?php echo esc_url( VW_CHARITY_PRO_PET_SHOP ); ?>" target="_blank"> <span class="dashicons dashicons-cart"></span><?php esc_html_e( 'Buy this Theme at $40', 'vw-charity-pro' ); ?></a>
					</div>
				</div>
				<div class="col-second">
					<img src="<?php echo esc_url(get_template_directory_uri()); ?>/inc/getstarted/images/magazine-small.png" alt="" />
					<h4><?php esc_html_e('VW MAGAZINE PRO','vw-charity-pro'); ?></h4>
					<hr class="h4hr">
					<p><?php esc_html_e('The premium magazine WordPress theme is a multipurpose theme. It is essentially made for online magazines, news portals, editors, informative sites and publishers.','vw-charity-pro'); ?></p>
					<div class="info-link">
						<a href="<?php echo esc_url( VW_CHARITY_PRO_MAGAZINE ); ?>" target="_blank"> <span class="dashicons dashicons-cart"></span><?php esc_html_e( 'Buy this Theme at $40', 'vw-charity-pro' ); ?></a>
					</div>
				</div>
			</div>
		</div>
		<div id="theme_offer" class="tabcontent">
			<h3><?php esc_html_e( 'Our Theme Offers', 'vw-charity-pro' ); ?></h3>
			<hr class="h3hr">
			<div class="theme-offer">
				<a href="<?php echo esc_url(VW_CHARITY_PRO_CONTACT); ?>" target="_blank"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/inc/getstarted/images/theme_offers.png" alt="" /></a>
			</div>
		</div>
	</div>
</div>
<?php } ?>