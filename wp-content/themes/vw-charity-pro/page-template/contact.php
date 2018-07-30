<?php
/**
 * Template Name: Contact
*/

get_header(); get_template_part( 'template-parts/banner' );?>

<?php do_action('vw_charity_pro_before_contact_title'); ?>

<div class="contact-box">
	<div class="container">
		<?php do_action('vw_charity_pro_before_map'); ?>
			<section class="google-map text-center" id="map">
				<?php if ( get_theme_mod('vw_charity_pro_address_latitude',true) != "" && get_theme_mod('vw_charity_pro_address_longitude',true) != "" ) {?>
				  <embed width="100%" height="450" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?q=<?php echo esc_attr(get_theme_mod('vw_charity_pro_address_latitude','21.145800')); ?>,<?php echo esc_attr(get_theme_mod('vw_charity_pro_address_longitude','79.088155')); ?>&hl=es;z=14&amp;output=embed"></embed>
				<?php }?>
			</section>
		<?php do_action('vw_charity_pro_after_map'); ?>
		<div class="contact-info mt-4 mb-4">
			<div class="text-center">
				<?php if(get_theme_mod('vw_charity_pro_contactpage_section_title',true != '')){?>
			      
			       <h2><?php echo esc_html(get_theme_mod('vw_charity_pro_contactpage_section_title', __('Get In Touch','vw-charity-pro'))); ?></h2>
			       <p><?php echo esc_html(get_theme_mod('vw_charity_pro_contactpage_section_subtitle', __('Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris fringilla, est et mattis tempus, mauris neque commodo sapien, id consequat diam est a nibh. Donec consequat scelerisque augue mollis aliquam. Ut nec porttitor sapien, nec rutrum ligula.','vw-charity-pro'))); ?></p>
			    <?php } ?>
			</div>
			<div class="row">
				<?php if ( get_theme_mod('vw_charity_pro_address',true) != "" ) { ?>
				<div class="col-md-4 col-sm-6 contact-address ">
					<div class="inner-cont p-3 text-center">
						<i class="fas fa-location-arrow"></i>
						<div class="media-small w-100 pt-3 pb-3">
							<span class="font-weight-bold text-uppercase"><?php echo esc_html(get_theme_mod('vw_charity_pro_address_title',__('Address Title', 'vw-charity-pro'))); ?></span>
							<p class="m-0"><?php echo esc_html(get_theme_mod('vw_charity_pro_address',__('OceanView Hall Fl 44000!','vw-charity-pro'))); ?></p>
						</div>
					</div>
				</div>
				<?php }?>

				<?php if ( get_theme_mod('vw_charity_pro_contactpage_email',true) != "" ) { ?>
				<div class="col-md-4 col-sm-6 contact-email">
					<div class="inner-cont p-3 text-center">
						<i class="far fa-envelope-open"></i>
						<div class="media-small w-100 pt-3 pb-3">
							<span class="w-100 font-weight-bold text-uppercase"><?php echo esc_html(get_theme_mod('vw_charity_pro_contactpage_email_title',__('Email', 'vw-charity-pro'))); ?></span>
							<p class="m-0"><?php echo esc_html(get_theme_mod('vw_charity_pro_contactpage_email',__('abc@gamil.com', 'vw-charity-pro'))); ?></p>
						</div>
					</div>
				<?php }?>
				</div>
				
				<?php if ( get_theme_mod('vw_charity_pro_contactpage_phone',true) != "" ) { ?>
				<div class="col-md-4 col-sm-6 contact-phone">
					<div class="inner-cont p-3 text-center">
						<i class="fas fa-phone-volume"></i>
						<div class="media-small w-100 pt-3 pb-3">
			 				<span class="font-weight-bold text-uppercase"><?php echo esc_html(get_theme_mod('vw_charity_pro_contactpage_phone_title',__('Phone', 'vw-charity-pro'))); ?></span>
			 				<p class="m-0"><?php echo esc_html(get_theme_mod('vw_charity_pro_contactpage_phone',__('895-895-8956, E895-895-8956', 'vw-charity-pro'))); ?></p>
			 			</div>
			 		</div>
	 			</div>
	 			<?php }?>

			</div>
		</div>
		<div class="contac_form">
			<div class="text-center">
				<?php if(get_theme_mod('vw_charity_pro_contactpage_section_formtitle',true != '')){?>
			       <h2><?php echo esc_html_e(get_theme_mod('vw_charity_pro_contactpage_section_formtitle', __('Contact Form','vw-charity-pro'))); ?></h2>
			       <p><?php echo esc_html(get_theme_mod('vw_charity_pro_contactpage_section_formsubtitle', __('Aliquam ac tempus lacus, in tempus nisl. Cras in auctor arcu. Phasellus orci erat, vestibulum a ante vitae, mollis feugiat nibh. Cras mattis dui eu eleifend dapibus. Donec eleifend bibendum tellus, et tincidunt nisl sagittis in. Nullam molestie lacus vitae dui rhoncus porta.','vw-charity-pro'))); ?></p>
			    <?php } ?>
			</div>
			<?php while ( have_posts() ) : the_post();
	        	the_content();
	    	endwhile; // end of the loop. ?>
		</div>
	</div>
</div>

<?php do_action('vw_charity_pro_before_footer'); ?>

<?php get_footer(); ?>