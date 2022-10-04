</div><!-- #page -->
</div><!-- homeContentWrap / contentwrap -->
</main>
<?php global $containerWidth; ?>
<footer id="colophon" class="site-footer">
	
	<a id="footer"></a>	
	<div class="<?php echo $containerWidth; ?>" >
		<div class="row">
			
			<div class="col-xl-3">
				<?php mayecreate_custom_footer_logo(); ?>
				<?php get_template_part('partials/content','social'); ?>
				<?php $client_address_line_1 = (get_field('client_address_line_1', 'option')); ?>
				<?php $client_address_line_2 = (get_field('client_address_line_2', 'option')); ?>
				<?php $client_phone_number = (get_field('client_phone_number', 'option')); ?>
				<?php if ($client_address_line_1 || $client_address_line_2) { ?>
					<p class="footer_contact">
						<?php  if ($client_address_line_1) { echo $client_address_line_1; } ?>
						<?php if ($client_address_line_1 && $client_address_line_2) { ?><br><?php } ?>
						<?php  if ($client_address_line_2) { echo $client_address_line_2; } ?>
					</p>
				<?php } ?>
				<?php  if ($client_phone_number) { ?>
					<p class="footer_contact"><a href="tel:<?php echo $client_phone_number; ?>"><?php echo $client_phone_number; ?></a></p>
				<?php } ?>
			</div>

			<div class="col-xl-9">
				<div class="row" id="footer_menu_outer_wrapper">
					<?php if ( has_nav_menu( 'footer-menu' ) ) { ?>
						<div class="col">
							<?php
							$footerMenu = array(
								'theme_location'  => 'footer-menu',
								'container'       => 'nav',
								'container_class' => '',
								'container_id'    => 'footer_nav_1',
								'menu_class'      => 'menu',
								'menu_id'         => '',
								'echo'            => true,
								'fallback_cb'     => '',
								'before'          => '',
								'after'           => '',
								'link_before'     => '<span>',
								'link_after'      => '</span>',
								'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
								'depth'           => 2,
								'walker'          => ''
								); ?>

							<?php wp_nav_menu($footerMenu); ?>
						</div>
					<?php } ?>
					<?php if ( has_nav_menu( 'footer-menu-2' ) ) { ?>
						<div class="col">
							<?php
							$footerMenu2 = array(
								'theme_location'  => 'footer-menu-2',
								'container'       => 'nav',
								'container_class' => '',
								'container_id'    => 'footer_nav_2',
								'menu_class'      => 'menu',
								'menu_id'         => '',
								'echo'            => true,
								'fallback_cb'     => '',
								'before'          => '',
								'after'           => '',
								'link_before'     => '<span>',
								'link_after'      => '</span>',
								'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
								'depth'           => 2,
								'walker'          => ''
								); ?>

							<?php wp_nav_menu($footerMenu2); ?>
						</div>
					<?php } ?>
					<?php if ( has_nav_menu( 'footer-menu-3' ) ) { ?>
						<div class="col">
							<?php
							$footerMenu3 = array(
								'theme_location'  => 'footer-menu-3',
								'container'       => 'nav',
								'container_class' => '',
								'container_id'    => 'footer_nav_3',
								'menu_class'      => 'menu',
								'menu_id'         => '',
								'echo'            => true,
								'fallback_cb'     => '',
								'before'          => '',
								'after'           => '',
								'link_before'     => '<span>',
								'link_after'      => '</span>',
								'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
								'depth'           => 2,
								'walker'          => ''
								); ?>

							<?php wp_nav_menu($footerMenu3); ?>
						</div>
					<?php } ?>
					<?php if ( has_nav_menu( 'footer-menu-4' ) ) { ?>
						<div class="col">
							<?php
							$footerMenu4 = array(
								'theme_location'  => 'footer-menu-4',
								'container'       => 'nav',
								'container_class' => '',
								'container_id'    => 'footer_nav_4',
								'menu_class'      => 'menu',
								'menu_id'         => '',
								'echo'            => true,
								'fallback_cb'     => '',
								'before'          => '',
								'after'           => '',
								'link_before'     => '<span>',
								'link_after'      => '</span>',
								'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
								'depth'           => 2,
								'walker'          => ''
								); ?>

							<?php wp_nav_menu($footerMenu4); ?>
						</div>
					<?php } ?>
					<?php if ( has_nav_menu( 'footer-menu-5' ) ) { ?>
						<div class="col">
							<?php
							$footerMenu5 = array(
								'theme_location'  => 'footer-menu-5',
								'container'       => 'nav',
								'container_class' => '',
								'container_id'    => 'footer_nav_5',
								'menu_class'      => 'menu',
								'menu_id'         => '',
								'echo'            => true,
								'fallback_cb'     => '',
								'before'          => '',
								'after'           => '',
								'link_before'     => '<span>',
								'link_after'      => '</span>',
								'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
								'depth'           => 2,
								'walker'          => ''
								); ?>

							<?php wp_nav_menu($footerMenu5); ?>
						</div>
					<?php } ?>
				</div>
			</div>
			
		</div>	
	</div>
	<?php get_template_part('partials/content','footerWidgets'); ?>

</footer><!-- #colophon -->

<div id="credits">
	<div class="<?php echo $containerWidth; ?>" >
		<div class="row">
			<div class="col-12">
				<p>&copy; <a href="<?php echo bloginfo('url');?>"><?php echo bloginfo('name');?></a> <?php echo date('Y');?> <span>|</span> <a href="http://www.mayecreate.com/what-we-do/web-design/" target="_blank">Web Design by MayeCreate Design</a></p>
			</div>
		</div>
	</div>
</div>

</div><!-- // pagewrapper -->

<?php get_template_part('partials/content','mobileMenu'); ?>
<?php wp_footer(); ?>

<?php mayecreate_DBD(); ?>
</body>
</html>