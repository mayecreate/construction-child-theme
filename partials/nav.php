<?php global $containerWidth; ?> 
<?php $show_top_navbar = ('yes' == get_field('show_top_navbar', 'option')); ?>
<?php $client_phone_number = (get_field('client_phone_number', 'option')); ?>
	<div id="navbarTop" class="navbar navbar-default">
		<div class="<?php echo $containerWidth; ?>" > 
			<?php  if ($client_phone_number) { ?>
				<p class="header_contact"><i class="fas fa-phone"></i> <a href="tel:<?php echo $client_phone_number; ?>"><?php echo $client_phone_number; ?></a></p>
			<?php } ?>
			<?php if ($show_top_navbar) { ?>
                <?php  // Visit http://codex.wordpress.org/Function_Reference/wp_nav_menu for explanation of how this works.
                    
                    $topMenu = array(
                        'theme_location'  => 'top-menu',
                        'container'       => 'nav',
                        'container_class' => '',
                        'container_id'    => 'top_nav',
                        'menu_class'      => 'menu pull-right',
                        'menu_id'         => '',
                        'echo'            => true,
                        'fallback_cb'     => '',
                        'before'          => '',
                        'after'           => '',
                        'link_before'     => '<span>',
                        'link_after'      => '</span>',
                        'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
                        'depth'           => 3,
                        'walker'          => ''
                        ); ?>
    
                    <?php wp_nav_menu($topMenu); ?>
			<?php } ?>
			<div class="clear"></div>
		</div>
	</div>
   

<div id="navbarBottom" class="navbar navbar-default ">
	<div class="<?php echo $containerWidth; ?>" > 
		<div class="navbar-header">

			<div id="mobile_menu">
				<a href="#drawer-menu" class="nav-button nav-button-x">
					<span>toggle menu</span>
				</a>
			</div>

			<?php mayecreate_custom_logo(); ?>

		</div>
		<?php /*?><form method="get" id="searchform" action="<?php bloginfo('url'); ?>">
		<input class="text" type="text" value=" " name="s" id="s" placeholder="Search" />
		<input type="submit" class="submit" name="submit" value="" />
		</form><?php */?>
		<?php

		$mainMenu = array(
			'theme_location'  => 'main-menu',
			'container'       => 'nav',
			'container_class' => '',
			'container_id'    => 'main_nav',
			'menu_class'      => 'menu pull-right',
			'menu_id'         => '',
			'echo'            => true,
			'fallback_cb'     => '',
			'before'          => '',
			'after'           => '',
			'link_before'     => '<span>',
			'link_after'      => '</span>',
			'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
			'depth'           => 3,
			'walker'          => ''
			); ?>

		<?php wp_nav_menu($mainMenu); ?>
	</div>
</div>
	