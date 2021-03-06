<?php if(get_theme_mod('forest_farea1_enable') && is_front_page() || is_home() ):?>
<div id="featured-pi" class="featured-section-area">
    <div class="col-md-12 col-sm-12">
	    
        <?php if(get_theme_mod('forest_farea1_title')):?>
	        <div class="section-title">
	            <?php echo get_theme_mod('forest_farea1_title'); ?>
	        </div>
        <?php endif;?>
        
        <?php /* Start the Loop */ $count=0; ?>
        <?php
        $args = array( 'posts_per_page' => 3, 'category' => get_theme_mod('forest_farea1_cat') );
        $lastposts = get_posts( $args );
        foreach ( $lastposts as $post ) :
            setup_postdata( $post ); ?>
            

            <div class="pi-wrapper col-md-4 col-sm-4">
                    <div class="featured-thumb">
                        <?php if (has_post_thumbnail()) : ?>
                            <a href="<?php the_permalink() ?>" title="<?php the_title_attribute() ?>"><?php the_post_thumbnail('forest-thumb'); ?></a>
                        <?php else : ?>
                            <a href="<?php the_permalink() ?>" title="<?php the_title_attribute() ?>"><img src="<?php echo get_template_directory_uri()."/assets/images/placeholder2.jpg"; ?>"></a>
                        <?php endif; ?>
                    
                        
                        <h2><?php the_title(); ?></h2>
                        
                    </div>
                        
            </div>
            
            
            <?php $count++;
            if ($count == 4) break;
        endforeach; ?>
        
        
        <?php wp_reset_postdata(); ?>
    </div>

</div>
<?php endif;?>