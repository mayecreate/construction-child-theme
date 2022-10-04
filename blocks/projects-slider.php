
<?php $post_category = esc_html(get_field("post_category")); ?>
<?php if ($post_category) { 
	$post_category = $post_category;
	$taxonomy = 'taxonomy';
	$projectcategory = 'projectcategory';
	$field = 'field';
	$ID = 'ID';
	$terms = 'terms';
} else {
	$post_category = "";
	$taxonomy = '';
	$projectcategory = '';
	$field = '';
	$ID = '';
	$terms = '';
} ?>
	<div class="row justify-content-center">
		<div class="col-md-12">
			<ul id="lightSlider">
				<?php // args
				$args = array(
				'posts_per_page'	=> -1,
				'order'			=> 'ASC', // ASC = OLDEST EVENT FIRST, DESC= NEWEST EVENT FIRST 
				'orderby' => 'menu_order',
				'post_type' => 'mc-projects',
				'paged' => $paged,
				'tax_query' => array(
					'relation' => 'OR',
						array (
							$taxonomy  => $projectcategory,
							$field     => $ID,
							$terms     => $post_category
						)
					)
				); ?>

				<?php // query
				$wp_query = new WP_Query( $args );

				// loop
				while( $wp_query->have_posts() )
				{
				$wp_query->the_post();

				?>
					<li>
									<div class="projectli">
									<?php $image_id = get_post_thumbnail_id();
									$image_url = wp_get_attachment_image_src($image_id,'project', true); ?>
									<img src="<?php echo $image_url[0]; ?>" alt="<?php the_title(); ?>" title="<?php the_title(); ?>" />
									<span class="ptitle"><h3 class="h6"><?php the_title(); ?></h3></span>
							</div>
								</li>
				<?php } // end the loop ?>
				<!--Reset Query-->
				<?php wp_reset_query();?>
			</ul>
		</div>
	</div>