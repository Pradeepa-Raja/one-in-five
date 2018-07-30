<?php
/*
Template Name: Events page
*/
get_header();
?>

<?php do_action( 'vw_charity_pro_after_page_header' ); ?>

<style>
	.mr-2{ margin-right: 0 !important;}
	.post_meta.mt-2{ margin: 10px 0;}
</style>
<div class="container inner_layout">
	<div class="middle-content">
<section id="events" style="<?php echo esc_attr($about_backg); ?>" class="upcomingevents">
  <div class="container">
    <?php if ( defined( 'VW_CHARITY_PRO_POSTTYPE_VERSION' ) ) { ?>
    <div class="row">
		<div class="event-container">
		<?php
			$args = array(
			'post_type' => 'event',
			'post_status' => 'publish'
		);
		$new = new WP_Query($args); ?>
			<?php $j=1;
			 	while ( $new->have_posts() ){
			        $new->the_post();  ?>
			        <div class="events_content">
			        	<div class="row">
				          	<div class="col-md-8">
									
					          	<h6><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h6>
								<?php if(get_post_meta($post->ID,'meta-date',true) != '' || get_post_meta($post->ID,'meta-time',true) != ''){ ?>
							        <div class="post_meta mt-2">
						          		<span class="entry-date datebox"><i class="fas fa-stopwatch mr-2"></i><strong>Date:</strong> <?php echo esc_html( get_post_meta($post->ID,'meta-date',true) ); ?></span>
						          		<span class="ml-3"><strong>Time:</strong> <?php echo esc_html( get_post_meta($post->ID,'meta-time',true) ); ?></span>
										<?php } 
							    if(get_post_meta($post->ID,'meta-location',true) != '') {?>
							    	<span class="mb-0 mt-2 event_location"><i class="fas fa-map-marker-alt mr-2"></i><strong>Location:</strong> <?php echo esc_html( get_post_meta($post->ID,'meta-location',true) ); ?></span>
							    <?php } ?>
							        </div>
							    
								
								<div class="events_thumb">
					          	<?php if(has_post_thumbnail()){
					          		the_post_thumbnail();
					          	}?>
							</div>
						        <p><?php $content = the_content(); ?></p>
						        
							    
							</div>
							
						</div>
		          	</div>
				<?php $j++; }
		wp_reset_query(); ?>
		</div>
		<div class="sidebar-events">
							<?php dynamic_sidebar( 'sidebar-1' ); ?>
								</div>
	</div>
	<?php } else{ ?>
	      <h3 class="text-center"><?php echo esc_html_e('Please install VW Charity pro Posttype plugin and add your Events to enable this section','vw-charity-pro')?></h3>
    <?php }?>
    <div class="clearfix"></div>
  </div>
</section>
	</div>
</div>
<?php do_action( 'vw_charity_pro_before_page_footer' ); ?>
<?php get_footer(); ?>