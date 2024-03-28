<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Breket_second
 */

get_header();


    $args = array(
    'post_type' => 'post',
    'posts_per_page' => -1
    );

    $query = new WP_Query( $args ); ?>

    <div class="container">
        <div><h1>All posts</h1></div>
        <div class="grid-x">
        <?php if ( $query->have_posts() ) :
            while ( $query->have_posts() ) : $query->the_post();
                ?>
                <div class="large-6 medium-12 text-white post">
                    <?php the_post_thumbnail(); ?>
                    <a href="<?php the_permalink(); ?>"><h2><?php the_title(); ?></h2></a>
                    <p class="post-category"><?php the_category(' , '); ?></p>
                    <h6><?php the_author(); ?></h6>
                    <?php the_content(); ?>
                </div>
            <?php
            endwhile;
            wp_reset_postdata(); else :?>
        </div>
    </div>
    <p><?php _e( 'No posts found' ); ?></p>
<?php
endif;

get_footer();
