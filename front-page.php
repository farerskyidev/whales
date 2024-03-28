<?php
/**
 * Single page template
 */

get_header();


$args = array(
    'post_type' => 'post',
    'posts_per_page' => 4
);

$query = new WP_Query( $args ); ?>

    <div class="container">
        <div><h1>Last posts</h1></div>
        <div class="grid-x">
            <?php if ( $query->have_posts() ) :
                while ( $query->have_posts() ) : $query->the_post();
                    ?>
                    <div class="large-6 medium-12 text-white post">
                        <?php the_post_thumbnail(); ?>
                        <a href="<?php the_permalink(); ?>"><h2><?php the_title(); ?></h2></a>
                        <div class="post-category"><?php the_category(' , '); ?></div>
                        <h6><?php the_author(); ?></h6>
                        <?php the_content(); ?>
                    </div>
                <?php
                endwhile;
                wp_reset_postdata();
            else :
                ?>
        </div>
    </div>
    <p><?php _e( 'No posts found' ); ?></p>
<?php
endif;

get_footer();?>
