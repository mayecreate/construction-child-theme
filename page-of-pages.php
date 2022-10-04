<?php
/*
* Template Name: Page of Pages
*
*/
get_header(); ?>
		

        <div class="row">
		
            <?php $this_page_id=$post->ID; ?>
            <?php // args
            $args = array(
            'posts_per_page'	=> -1,
            'orderby' => 'menu_order', 
            'order' => 'ASC',
            'showposts' => $showposts, 
            'post_parent' => $this_page_id, 
            'post_type' => 'page'
            ); ?>

            <?php // query
            $wp_query = new WP_Query( $args );

            // loop
            while( $wp_query->have_posts() )
            {
            $wp_query->the_post();

            ?>

                <div class="col-md-6">
                    <a href="<?php the_permalink(); ?>" class="post_link_wrapper">
                        <span class="img_wrapper">
                            <?php if ( has_post_thumbnail() ) { ?>
                                <?php $image_id = get_post_thumbnail_id();
                                $image_url = wp_get_attachment_image_src($image_id,'blog', true); ?>
                                <img src="<?php echo $image_url[0]; ?>" alt="<?php the_title(); ?>" title="<?php the_title(); ?>" />
                            <?php } else { ?>
                                <img src="<?php bloginfo('url'); ?>/wp-content/uploads/2016/03/86480546-700x300.jpg" alt="<?php the_title(); ?>" title="<?php the_title(); ?>" />
                            <?php } ?> 
                        </span>
                        <h2 class="center"><?php the_title(); ?></h2>
                    </a>
                </div>

            <?php } // end the loop ?>
            <!--Reset Query-->
            <?php wp_reset_query();?>
        
        
    	</div><!-- / row -->
	</div><!-- / hfeed site container -->
</div><!-- / page -->


<?php get_footer(); ?>