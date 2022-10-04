<?php $buttons_area_title = esc_html(get_field("buttons_area_title", $post->ID)); ?>
<?php if( have_rows('buttons') ): ?>
<div id="home_callouts">
    <?php if ($buttons_area_title) { ?>
    <div class="row">
        <div class="col-12">
            <h2><?php echo $buttons_area_title; ?></h2>
        </div>
    </div>
    <?php } ?>
    <div class="row">
        <?php while( have_rows('buttons') ): the_row(); 
            $button_icon = get_sub_field('button_icon');
            $button_title = get_sub_field('button_title');
            $button_link = get_sub_field('button_link');
            ?>
            <div class="col-md-6 col-lg">
                <a href="<?php echo $button_link; ?>" class="home_callout">
                    <i class="fas fa-<?php echo $button_icon; ?>"></i>
                    <span class="home_callout_title"><?php echo $button_title; ?></span>
                </a>
            </div>
        <?php endwhile; ?>
    </div>
</div>
<?php endif; ?>