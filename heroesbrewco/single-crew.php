<?php 
    $loop = new WP_Query( array( 
        'post_type' => 'crew',   /* edit this line */
        'posts_per_page' => 15 ) );
?>

<?php while ( $loop->have_posts() ) : $loop->the_post(); ?>  
Hello World Crew page
    <a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>" >
        <?php the_post_thumbnail('thumbnail'); ?>
    </a>

<?php endwhile; ?> 