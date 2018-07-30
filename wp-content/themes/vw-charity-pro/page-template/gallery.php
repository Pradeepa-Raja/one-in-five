<?php
/**
 * The template for displaying all authors
 */

get_header();

global $post;

?>
<div class="container">
    <h1><?php the_title();?></h1>
</div>

<div id="content-vw">
  <div class="container">
    <div class="middle-align">
        <?php
        // Start the loop.
            while ( have_posts() ) : the_post();
            // Include the single post content template.
            ?>
              <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                <div class="row">
                  <?php
                    $get_post_id = $post->ID;
                    $images = get_post_meta($get_post_id, 'vw_gallery_images_gal_id', true);
                    $res = '';
                    if(empty($images)){
                      $res = '<p>'.__('No Image Found', 'vw-charity-pro').'</p>';
                    }
                    else{
                      $gal_i=1;
                      foreach ($images as $image) {
                        global $post;
                          $thumbnail = wp_get_attachment_link($image, 'medium');
                          $full = wp_get_attachment_link($image, 'large');
                          $res .= '<div class="col-md-3 col-sm-6 gallery-image">
                                    <div class="vw_gallery view second-effect">
                                      <div id="gallery-'.$gal_i.'" style="display:none;">
                                        '.$full.'
                                      </div>
                                      <div class="vw_img">
                                        '.$thumbnail.'
                                      </div>
                                      <div class="mask">
                                        <a href="#TB_inline?width=600&height=550&inlineId=gallery-'.$gal_i.'" class="info thickbox" title="'.esc_attr(get_the_title()).'">'.esc_html(get_the_title()).'</a>
                                      </div>
                                    </div>
                                  </div>';
                                $gal_i++;
                      }
                      echo $res;
                    }
                  ?>
                  <footer class="entry-footer">
                    <?php
                      edit_post_link(
                        sprintf(
                            /* translators: %s: Name of current post */
                            __( 'Edit<span class="screen-reader-text"> "%s"</span>', 'vw-charity-pro' ),
                            get_the_title()
                        ),
                        '<span class="edit-link">',
                        '</span>'
                      );
                    ?>
                  </footer><!-- .entry-footer -->
                </div>
              </article><!-- #post-## -->
            <?php
            // End of the loop.
            endwhile;
        ?>
    </div>
  </div>
</div>
<?php add_thickbox(); ?>
<?php get_footer(); ?>