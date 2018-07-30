<?php
/**
 * Template to show the content of Post Content
 *
 * @package vw_charity_pro
 */
?>
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?> > 
  <div class="post-content-wrap">
    <div class="row no-gutters">
      <?php if (has_post_thumbnail()){ ?>
      <div class="col-lg-6 col-md-6">
        <div class="image-box">
          <?php the_post_thumbnail(); ?>
        </div> 
      </div>
      <?php } ?>
      <div class="<?php if (has_post_thumbnail()){ echo 'col-lg-6 col-md-6'; } else{ echo 'col-md-12';} ?>">
        <div class="post-content-details">
          <h4 class="latest_post_name"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
          <div class="row m-0">
            <div class="col-lg-6 col-md-6 col-6 p-0">
              <span class="entry-date"><i class="far fa-calendar-alt"></i> <?php the_date(); ?></span>
            </div>
            <div class="col-lg-6 col-md-6 col-6 p-0">
              <span class="main-box">
                <div class="entry-comments"><i class="far fa-comments"></i><?php comments_number( 'no comments', 'one comments', '% comments' ); ?>
                </div>
              </span>
            </div>                         
          </div>
          <div class="short_text"><p><?php $excerpt = get_the_excerpt(); echo esc_html(vw_charity_pro_string_limit_words($excerpt,30)); ?></p></div>
          <a class="post-read-more" href="<?php the_permalink(); ?>"><?php esc_html_e('show More','vw-charity-pro'); ?> <i class="ml-2 mt-3 fas fa-long-arrow-alt-right"></i></a>
        </div>
      </div>
    </div>
  </div>
</article>