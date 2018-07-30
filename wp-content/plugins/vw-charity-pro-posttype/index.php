<?php 
/*
 Plugin Name: VW Charity pro Posttype
 Plugin URI: https://www.vwthemes.com/
 Description: Creating new post type for VW Charity Pro Posttype
 Author: VW Themes
 Version: 1.0
 Author URI: https://www.vwthemes.com/
 Text Domain: vw-charity-pro-posttype
 Domain Path: /languages/
*/

define( 'VW_CHARITY_PRO_POSTTYPE_VERSION', '1.0' );

add_action( 'init', 'vw_charity_pro_posttype_create_post_type' );

function vw_charity_pro_posttype_create_post_type() {
  register_post_type( 'causes',
    array(
        'labels' => array(
            'name' => __( 'Causes','vw-charity-pro-posttype' ),
            'singular_name' => __( 'Causes','vw-charity-pro-posttype' )
        ),
        'capability_type' =>  'post',
        'menu_icon'  => 'dashicons-chart-bar',
        'public' => true,
        'supports' => array(
        'title',
        'editor',
        'thumbnail',
        'page-attributes',
        'comments'
        )
    )
  );
  register_post_type( 'donator',
    array(
        'labels' => array(
            'name' => __( 'Donator','vw-charity-pro-posttype' ),
            'singular_name' => __( 'Donator','vw-charity-pro-posttype' )
        ),
        'capability_type' =>  'post',
        'menu_icon'  => 'dashicons-welcome-learn-more',
        'public' => true,
        'supports' => array(
        'title',
        'editor',
        'thumbnail',
        'page-attributes',
        'comments'
        )
    )
  );
  register_post_type( 'event',
    array(
        'labels' => array(
            'name' => __( 'Events','vw-charity-pro-posttype' ),
            'singular_name' => __( 'Events','vw-charity-pro-posttype' )
        ),
        'capability_type' =>  'post',
        'menu_icon'  => 'dashicons-calendar-alt',
        'public' => true,
        'supports' => array(
        'title',
        'editor',
        'thumbnail',
        'page-attributes',
        'comments'
        )
    )
  );
  register_post_type( 'testimonial',
	array(
		'labels' => array(
			'name' => __( 'Testimonials','vw-charity-pro-posttype-pro' ),
			'singular_name' => __( 'Testimonials','vw-charity-pro-posttype-pro' )
			),
		'capability_type' => 'post',
		'menu_icon'  => 'dashicons-businessman',
		'public' => true,
		'supports' => array(
			'title',
			'editor',
			'thumbnail'
			)
		)
	);
}

/* ------------------------------------------Causes----------------------------------------------- */

function vw_charity_pro_posttype_bn_causes_meta() {
    add_meta_box( 'vw_charity_pro_posttype_bn_meta', __( 'Enter Details','vw-charity-pro-posttype' ), 'vw_charity_pro_posttype_bn_causes_meta_callback', 'causes', 'normal', 'high' );
}
// Hook things in for admin
if (is_admin()){
    add_action('admin_menu', 'vw_charity_pro_posttype_bn_causes_meta');
}
/* Adds a meta box for custom post */
function vw_charity_pro_posttype_bn_causes_meta_callback( $post ) {
    wp_nonce_field( basename( __FILE__ ), 'vw_charity_pro_posttype_bn_nonce' );
    $bn_stored_meta = get_post_meta( $post->ID );
    ?>
    <div id="attorney_custom_stuff">
        <table id="list-table">         
            <tbody id="the-list" data-wp-lists="list:meta">
                <tr id="meta-1">
                    <td class="left">
                        <?php esc_html_e( 'Raised', 'vw-charity-pro-posttype' )?>
                    </td>
                    <td class="left" >
                        <input type="number" name="meta-raised" id="meta-raised" value="<?php echo esc_html($bn_stored_meta['meta-raised'][0]); ?>" />
                    </td>
                </tr>
                <tr id="meta-2">
                    <td class="left">
                        <?php esc_html_e( 'Goal', 'vw-charity-pro-posttype' )?>
                    </td>
                    <td class="left" >
                        <input type="number" name="meta-goal" id="meta-goal" value="<?php echo esc_html($bn_stored_meta['meta-goal'][0]); ?>" />
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
    <?php
}
/* Saves the custom fields meta input */
function vw_charity_pro_posttype_bn_metadesig_causes_save( $post_id ) {

  if (!isset($_POST['vw_charity_pro_posttype_bn_nonce']) || !wp_verify_nonce($_POST['vw_charity_pro_posttype_bn_nonce'], basename(__FILE__))) {
  return;
  }

  if (!current_user_can('edit_post', $post_id)) {
  return;
  }

  if (defined('DOING_AUTOSAVE') && DOING_AUTOSAVE) {
  return;
  }
  if( isset( $_POST[ 'meta-goal' ] ) ) {
      update_post_meta( $post_id, 'meta-goal', sanitize_text_field($_POST[ 'meta-goal' ]) );
  }
  if( isset( $_POST[ 'meta-raised' ] ) ) {
      update_post_meta( $post_id, 'meta-raised', sanitize_text_field($_POST[ 'meta-raised' ]) );
  }
}
add_action( 'save_post', 'vw_charity_pro_posttype_bn_metadesig_causes_save' );

/* ------------------------------------------Donator----------------------------------------------- */

/* Donator */
function vw_charity_pro_posttype_bn_donator_meta() {
    add_meta_box( 'vw_charity_pro_posttype_bn_meta', __( 'Enter Details','vw-charity-pro-posttype' ), 'vw_charity_pro_posttype_bn_meta_callback', 'donator', 'normal', 'high' );
}
// Hook things in for admin
if (is_admin()){
    add_action('admin_menu', 'vw_charity_pro_posttype_bn_donator_meta');
}
/* Adds a meta box for custom post */
function vw_charity_pro_posttype_bn_meta_callback( $post ) {
    wp_nonce_field( basename( __FILE__ ), 'vw_charity_pro_posttype_donator_bn_nonce' );
    $bn_stored_meta = get_post_meta( $post->ID );
    ?>
    <div id="attorney_custom_stuff">
        <table id="list-table">         
            <tbody id="the-list" data-wp-lists="list:meta">
                <tr id="meta-1">
                    <td class="left">
                        <?php esc_html_e( 'Designation', 'vw-charity-pro-posttype' )?>
                    </td>
                    <td class="left" >
                        <input type="text" name="meta-desig" id="meta-desig" value="<?php echo esc_html($bn_stored_meta['meta-desig'][0]); ?>" />
                    </td>
                </tr>
                <tr id="meta-2">
                    <td class="left">
                        <?php esc_html_e( 'How much donated', 'vw-charity-pro-posttype' )?>
                    </td>
                    <td class="left" >
                        <input type="text" name="meta-donated" id="meta-donated" value="<?php echo esc_html($bn_stored_meta['meta-donated'][0]); ?>" />
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
    <?php
}
/* Saves the custom fields meta input */
function vw_charity_pro_posttype_bn_metadesig_team_save( $post_id ) {

  if (!isset($_POST['vw_charity_pro_posttype_donator_bn_nonce']) || !wp_verify_nonce($_POST['vw_charity_pro_posttype_donator_bn_nonce'], basename(__FILE__))) {
  return;
  }

  if (!current_user_can('edit_post', $post_id)) {
  return;
  }

  if (defined('DOING_AUTOSAVE') && DOING_AUTOSAVE) {
  return;
  }
  if( isset( $_POST[ 'meta-desig' ] ) ) {
      update_post_meta( $post_id, 'meta-desig', sanitize_text_field($_POST[ 'meta-desig' ]) );
  }
  if( isset( $_POST[ 'meta-donated' ] ) ) {
      update_post_meta( $post_id, 'meta-donated', sanitize_text_field($_POST[ 'meta-donated' ]) );
  }
}
add_action( 'save_post', 'vw_charity_pro_posttype_bn_metadesig_team_save' );

/* ------------------------------------------Events----------------------------------------------- */

function vw_charity_pro_posttype_bn_events_meta() {
    add_meta_box( 'vw_charity_pro_posttype_bn_meta', __( 'Enter Details','vw-charity-pro-posttype' ), 'vw_charity_pro_posttype_events_bn_meta_callback', 'event', 'normal', 'high' );
}
// Hook things in for admin
if (is_admin()){
    add_action('admin_menu', 'vw_charity_pro_posttype_bn_events_meta');
}
/* Adds a meta box for custom post */
function vw_charity_pro_posttype_events_bn_meta_callback( $post ) {
    wp_nonce_field( basename( __FILE__ ), 'vw_charity_pro_posttype_events_bn_nonce' );
    $bn_stored_meta = get_post_meta( $post->ID );
    ?>
    <div id="attorney_custom_stuff">
        <table id="list-table">         
            <tbody id="the-list" data-wp-lists="list:meta">
                <tr id="meta-1">
                    <td class="left">
                        <?php esc_html_e( 'Location', 'vw-charity-pro-posttype' )?>
                    </td>
                    <td class="left" >
                        <input type="text" name="meta-location" id="meta-location" value="<?php echo esc_html($bn_stored_meta['meta-location'][0]); ?>" />
                    </td>
                </tr>
                <tr id="meta-1">
                    <td class="left">
                        <?php esc_html_e( 'Date', 'vw-charity-pro-posttype' )?>
                    </td>
                    <td class="left" >
                        <input type="text" name="meta-date" id="meta-date" value="<?php echo esc_html($bn_stored_meta['meta-date'][0]); ?>" />
                    </td>
                </tr>
                <tr id="meta-1">
                    <td class="left">
                        <?php esc_html_e( 'Time', 'vw-charity-pro-posttype' )?>
                    </td>
                    <td class="left" >
                        <input type="text" name="meta-time" id="meta-time" value="<?php echo esc_html($bn_stored_meta['meta-time'][0]); ?>" />
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
    <?php
}
/* Saves the custom fields meta input */
function vw_charity_pro_posttype_bn_metadesig_events_save( $post_id ) {

  if (!isset($_POST['vw_charity_pro_posttype_events_bn_nonce']) || !wp_verify_nonce($_POST['vw_charity_pro_posttype_events_bn_nonce'], basename(__FILE__))) {
  return;
  }

  if (!current_user_can('edit_post', $post_id)) {
  return;
  }

  if (defined('DOING_AUTOSAVE') && DOING_AUTOSAVE) {
  return;
  }
  if( isset( $_POST[ 'meta-location' ] ) ) {
    update_post_meta( $post_id, 'meta-location', sanitize_text_field($_POST[ 'meta-location' ]) );
  }
  if( isset( $_POST[ 'meta-date' ] ) ) {
    update_post_meta( $post_id, 'meta-date', sanitize_text_field($_POST[ 'meta-date' ]) );
  }
  if( isset( $_POST[ 'meta-time' ] ) ) {
    update_post_meta( $post_id, 'meta-time', sanitize_text_field($_POST[ 'meta-time' ]) );
  }
}
add_action( 'save_post', 'vw_charity_pro_posttype_bn_metadesig_events_save' );

/* Team shorthcode */
function vw_charity_pro_posttype_team_func( $atts ) {
    $team = ''; 
    $team = '<div class="row">';
    $query = new WP_Query( array( 'post_type' => 'team', 'posts_per_page' => -1 ) );
    if ( $query->have_posts() ) :
    $k=1;
    $new = new WP_Query('post_type=team'); 
    while ($new->have_posts()) : $new->the_post();
    	$post_id = get_the_ID();
    	$thumb = wp_get_attachment_image_src( get_post_thumbnail_id($post_id), 'large' );
      if(has_post_thumbnail()) { $thumb_url = $thumb['0']; }
		  $url = $thumb['0'];
      $excerpt = vw_charity_pro_string_limit_words(get_the_excerpt(),20);
      $designation= get_post_meta($post_id,'meta-designation',true);
      $call= get_post_meta($post_id,'meta-call',true);
      $facebookurl= get_post_meta($post_id,'meta-facebookurl',true);
      $linkedin=get_post_meta($post_id,'meta-linkdenurl',true);
      $twitter=get_post_meta($post_id,'meta-twitterurl',true);
      $googleplus=get_post_meta($post_id,'meta-googleplusurl',true);
      
      $team .= '
                <div class="team_box col-lg-4 col-md-6 col-sm-6 text-center mb-4">
                  <div class="image-box">
                    <img class="client-img" src="'.esc_url($thumb_url).'" alt="team-thumbnail" />
                  </div>
                  <div class="content_box w-100 float-left p-2">
                    <div class="tams-box w-100 float-left">
                      <h4 class="team_name"><a href="'.get_the_permalink().'">'.get_the_title().'</a></h4>
                      <p>'.esc_html($designation).'</p>
                    </div>
                    <div class="short_text pt-3">'.$excerpt.'</div>
                    <div class="about-socialbox pt-3">
                      <p>'.$call.'</p>
                      <div class="att_socialbox">';
                        if($facebookurl != ''){
                          $team .= '<a class="" href="'.esc_url($facebookurl).'" target="_blank"><i class="fab fa-facebook-f"></i></a>';
                        } if($twitter != ''){
                          $team .= '<a class="" href="'.esc_url($twitter).'" target="_blank"><i class="fab fa-twitter"></i></a>';
                        } if($googleplus != ''){
                          $team .= '<a class="" href="'.esc_url($googleplus).'" target="_blank"><i class="fab fa-google-plus-g"></i></a>';
                        } if($linkedin != ''){
                          $team .= '<a class="" href="'.esc_url($linkedin).'" target="_blank"><i class="fab fa-linkedin-in"></i></a>';
                        }
                      $team .= '</div>
                    </div>
                  </div>
                </div>';
      if($k%2 == 0){
          $team.= '<div class="clearfix"></div>'; 
      } 
      $k++;         
  endwhile; 
  wp_reset_postdata();
  $team.= '</div>';
  else :
    $team = '<h2 class="center">'.esc_html_e('Post Not Found','vw-charity-pro-posttype').'</h2>';
  endif;
  return $team;
}
add_shortcode( 'team', 'vw_charity_pro_posttype_team_func' );

/* ------------------------------------------Testimonials----------------------------------------------- */

/* Adds a meta box to the Testimonial editing screen */
function vw_charity_pro_posttype_bn_testimonial_meta_box() {
	add_meta_box( 'vw-charity-pro-posttype-pro-testimonial-meta', __( 'Enter Designation', 'vw-charity-pro-posttype-pro' ), 'vw_charity_pro_posttype_bn_testimonial_meta_callback', 'testimonial', 'normal', 'high' );
}
// Hook things in for admin
if (is_admin()){
    add_action('admin_menu', 'vw_charity_pro_posttype_bn_testimonial_meta_box');
}

/* Adds a meta box for custom post */
function vw_charity_pro_posttype_bn_testimonial_meta_callback( $post ) {
	wp_nonce_field( basename( __FILE__ ), 'vw_charity_pro_posttype_testimonial_meta_nonce' );
  $bn_stored_meta = get_post_meta( $post->ID );
	$desigstory = get_post_meta( $post->ID, 'vw_charity_pro_posttype_testimonial_desigstory', true );
	?>
	<div id="testimonials_custom_stuff">
		<table id="list">
			<tbody id="the-list" data-wp-lists="list:meta">
				<tr id="meta-1">
					<td class="left">
						<?php esc_html_e( 'Designation', 'vw-charity-pro-posttype-pro' )?>
					</td>
					<td class="left" >
						<input type="text" name="vw_charity_pro_posttype_testimonial_desigstory" id="vw_charity_pro_posttype_testimonial_desigstory" value="<?php echo esc_attr( $desigstory ); ?>" />
					</td>
				</tr>
			</tbody>
		</table>
	</div>
	<?php
}

/* Saves the custom meta input */
function vw_charity_pro_posttype_bn_metadesig_save( $post_id ) {
	if (!isset($_POST['vw_charity_pro_posttype_testimonial_meta_nonce']) || !wp_verify_nonce($_POST['vw_charity_pro_posttype_testimonial_meta_nonce'], basename(__FILE__))) {
		return;
	}

	if (!current_user_can('edit_post', $post_id)) {
		return;
	}

	if (defined('DOING_AUTOSAVE') && DOING_AUTOSAVE) {
		return;
	}

	// Save desig.
	if( isset( $_POST[ 'vw_charity_pro_posttype_testimonial_desigstory' ] ) ) {
		update_post_meta( $post_id, 'vw_charity_pro_posttype_testimonial_desigstory', sanitize_text_field($_POST[ 'vw_charity_pro_posttype_testimonial_desigstory']) );
	}

}

add_action( 'save_post', 'vw_charity_pro_posttype_bn_metadesig_save' );

/* Testimonials shortcode */
function vw_charity_pro_posttype_testimonial_func( $atts ) {
	$testimonial = '';
	$testimonial = '<div class="row">';
	$query = new WP_Query( array( 'post_type' => 'testimonials') );

    if ( $query->have_posts() ) :

	$k=1;
	$new = new WP_Query('post_type=testimonials');

	while ($new->have_posts()) : $new->the_post();
        $custom_url = '';
      	$post_id = get_the_ID();
      	$excerpt = wp_trim_words(get_the_excerpt(),25);
      	$thumb = wp_get_attachment_image_src( get_post_thumbnail_id($post_id), 'large' );
		    if(has_post_thumbnail()) { $thumb_url = $thumb['0']; }
      	$desigstory= get_post_meta($post_id,'vw_charity_pro_posttype_testimonial_desigstory',true);
        
        $testimonial .= '
          <div class="col-md-4 col-sm-12 text-center">
            <div class=" testimonial_box w-100 mb-3 p-3">
             <div class="image-box media">
                <img src="'.esc_url($thumb_url).'" alt="testimonial-thumbnail" />
              </div>
              <div class="content_box w-100">
                <h4 class="testimonial_name mt-0"><a href="'.get_the_permalink().'">'.get_the_title() .'</a></h4>
                <div class="short_text pt-3"><p>'.$excerpt.'</p></div>
                <div class="testimonial-box">
                  <p class="font-weight-bold">'.esc_html($desigstory).'</p>
                </div>
              </div>
            </div>
          </div>';
		if($k%3 == 0){
			$testimonial.= '<div class="clearfix"></div>';
		}
      $k++;
  endwhile;
  else :
  	$testimonial = '<h2 class="center">'.esc_html__('Post Not Found','vw-charity-pro-posttype-pro').'</h2>';
  endif;
  $testimonial .= '</div>';
  return $testimonial;
}

add_shortcode( 'testimonials', 'vw_charity_pro_posttype_testimonial_func' );

add_action( 'vw_charity_pro_posttype_plugins_loaded', 'vw_charity_pro_posttype_load_textdomain' );
/**
 * Load plugin textdomain.
 *
 * @since 1.0.0
 */
function vw_charity_pro_posttype_load_textdomain() {
  load_plugin_textdomain( 'vw-charity-pro-posttype-pro', false, basename( dirname( __FILE__ ) ) . '/languages' ); 
}