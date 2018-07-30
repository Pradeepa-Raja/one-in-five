<?php
/**
 * The template for displaying search forms in vw-charity-pro
 *
 * @package vw-charity-pro
 */
?>
<form role="search" method="get" class="search-form serach-page" action="<?php echo esc_url( home_url( '/' ) ); ?>">
    <label>
        <input type="search" class="search-field" placeholder="<?php echo esc_attr_x( 'Search &hellip;', 'placeholder', 'vw-charity-pro' ); ?>" value="<?php the_search_query(); ?>" name="s">
    </label>
    <input type="submit" class="search-submit" value="<?php echo esc_attr_x( 'Search', 'submit button', 'vw-charity-pro' ); ?>">
</form>