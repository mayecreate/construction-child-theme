<?php
/*
Template Name: Front Page
*/
?>
<?php get_header(); ?>
<?php global $containerWidth; ?>

				<?php if ( have_posts() ) : ?>
					<?php while ( have_posts() ) : the_post();?>
						<?php the_content(); ?>
					<?php endwhile; // end of the loop. ?>
				<?php endif; ?>
			</div>
		</div>
	</div>
</div>
<?php $show_projects_section = ('yes' == get_field('show_projects_section', $post->ID)); ?>
<?php if ($show_projects_section) { ?>
<?php $projects_section_title = esc_html(get_field("projects_section_title", $post->ID)); ?>
<?php $projects_section_background_color = esc_html(get_field("projects_section_background_color", $post->ID)); ?>
<?php $is_the_background_color_dark = ('yes' == get_field('is_the_background_color_dark', $post->ID)); ?>
<?php $projects_section_button_link = esc_html(get_field("projects_section_button_link", $post->ID)); ?>
<?php $projects_section_button_text = esc_html(get_field("projects_section_button_text", $post->ID)); ?>
<?php if ($projects_section_button_text) { $projects_section_button_text = $projects_section_button_text; } else { $projects_section_button_text = "Projects"; } ?>
<?php if ($projects_section_background_color) { $projects_section_background_color = $projects_section_background_color; } else { $projects_section_background_color = "#fff"; } ?>
<?php if ($is_the_background_color_dark) { $dark_class="dark"; } else { $dark_class=""; } ?>
<div class="pagebreak <?php echo $dark_class; ?> cutout" style="background-color:<?php echo $projects_section_background_color; ?>;">
	<div class="<?php echo $containerWidth; ?>">
		<div class="row">
			<div class="col-md-12">
				<?php if ($projects_section_title) { ?>
				<h2 class="center caps"><?php echo $projects_section_title; ?></h2>
				<?php } ?>
				<div class="row justify-content-center">
					<div class="col-md-12">
						<ul id="lightSlider">
							<?php // args
							$args = array(
							'posts_per_page'	=> -1,
							'order'			=> 'ASC', // ASC = OLDEST EVENT FIRST, DESC= NEWEST EVENT FIRST 
							'orderby' => 'menu_order',
							'post_type' => 'mc-projects',
							'paged' => $paged
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
				<?php if ($projects_section_button_link) { ?>
				<a href="<?php echo $projects_section_button_link; ?>" class="btn-mayecreate center"><?php echo $projects_section_button_text; ?></a>
				<?php } ?>
			</div>
		</div>
	</div>
</div>
<?php } ?>
<?php $show_partners_section = ('yes' == get_field('show_partners_section', $post->ID)); ?>
<?php if ($show_partners_section) { ?>
<?php $partners_section_title = esc_html(get_field("partners_section_title", $post->ID)); ?>
<div class="pagebreak_fix">
	<div class="<?php echo $containerWidth; ?>">
		<div class="row">
			<div class="col-md-12">
				<?php if ($partners_section_title) { ?>
					<?php global $post; ?>
				<h2 class="center caps"><?php echo $partners_section_title; ?></h2>
				<?php } ?>
				<div class="row justify-content-center">

					<div class="col-md-12">
						<ul id="lightSlider2">
							<?php // args
							$args = array(
							'posts_per_page'	=> -1,
							'order'			=> 'ASC', // ASC = OLDEST EVENT FIRST, DESC= NEWEST EVENT FIRST 
							'orderby' => 'menu_order',
							'post_type' => 'partner',
							'paged' => $paged
							); ?>

							<?php // query
							$wp_query = new WP_Query( $args );

							// loop
							while( $wp_query->have_posts() )
							{
							$wp_query->the_post();

							?>
								<li>
								
								
									<?php $image_id = get_post_thumbnail_id();
									$image_url = wp_get_attachment_image_src($image_id, true); ?>
									<?php $website_link_external = get_field('website_link_external', $post->ID); ?>
									<?php if ($website_link_external) { ?> <a href="<?php echo $website_link_external; ?>" title="Opens new tab view <?php the_title(); ?>'s website" target="_blank" ><?php } ?><span class="img_fix"></span><img src="<?php echo $image_url[0]; ?>" alt="<?php the_title(); ?> Partner Logo" title="<?php the_title(); ?> Partner Logo" /><?php if ($website_link_external) { ?></a><?php } ?>
								</li>
							<?php } // end the loop ?>
							<!--Reset Query-->
							<?php wp_reset_query();?>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<?php } ?>


<?php get_footer(); ?>