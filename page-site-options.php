<?php
/*
* Template Name: Site Options
*
*/ 
acf_form_head();
get_header(); ?>
    <?php if(!is_user_logged_in() ) { ?> 
        <div class="row">
            <div class="col-md-12">
                <h2 class="center">You must be logged in to view this page.</h2>
            </div>
        </div>
    <?php } else { ?>
        <div class="row">
            <div class="col-md-12">
                <h2 class="center" style="color:red;">***IMPORTANT!***</h2>
                <h4 class="center margin_bottom" style="color:red;font-weight:700">When you are done with this page. Delete it from the site!</h4>
            </div>
        </div>
        <div class="row">
            <?php get_template_part('partials/loop','standard'); ?>
        </div>
        <div class="row">
            <div class="col-lg-6">
                <h2 class="center"><a data-bs-toggle="collapse" href="#collapseGeneral" role="button" aria-expanded="false" aria-controls="collapseGeneral">General Options</a></h2>
                <div class="collapse" id="collapseGeneral">
                    <?php $site_options = array(
                        'post_id' => 'option',
                        'field_groups' => array('group_620e6ddb212be'),
                        'form' => true, 
                        'return' => add_query_arg( 'updated', 'true', get_permalink() ), 
                        'html_before_fields' => '',
                        'html_after_fields' => '',
                        'submit_value' => 'Update Site General Options',
                        'html_updated_message'  => '<div id="message" class="updated"><p>Site General Options Updated</p></div>', 
                        'kses' => false
                    );
                    acf_form( $site_options );
                    ?>
                </div>
            </div>
            <div class="col-lg-6">
                <h2 class="center"><a data-bs-toggle="collapse" href="#collapseFonts" role="button" aria-expanded="false" aria-controls="collapseFonts">Font Options</a></h2>
                <div class="collapse" id="collapseFonts">
                    <?php $site_options = array(
                        'post_id' => 'option',
                        'field_groups' => array('group_620ece8100338'),
                        'form' => true, 
                        'return' => add_query_arg( 'updated', 'true', get_permalink() ), 
                        'html_before_fields' => '',
                        'html_after_fields' => '',
                        'submit_value' => 'Update Site Font Options',
                        'html_updated_message'  => '<div id="message" class="updated"><p>Site Font Options Updated</p></div>', 
                        'kses' => false
                    );
                    acf_form( $site_options );
                    ?>
                </div>
            </div>
        </div>
        <div class="divider"></div>
        <div class="row">
            <div class="col-lg-6">
                <h2 class="center"><a data-bs-toggle="collapse" href="#collapseColor" role="button" aria-expanded="false" aria-controls="collapseColor">Color Options</a></h2>
                <div class="collapse" id="collapseColor">
                    <?php $site_options = array(
                        'post_id' => 'option',
                        'field_groups' => array('group_620eb6a70234a'),
                        'form' => true, 
                        'return' => add_query_arg( 'updated', 'true', get_permalink() ), 
                        'html_before_fields' => '',
                        'html_after_fields' => '',
                        'submit_value' => 'Update Site Color Options',
                        'html_updated_message'  => '<div id="message" class="updated"><p>Site Color Options Updated</p></div>', 
                        'kses' => false
                    );
                    acf_form( $site_options );
                    ?>
                </div>
            </div>
            <div class="col-lg-6">
                <h2 class="center"><a data-bs-toggle="collapse" href="#collapseCarousel" role="button" aria-expanded="false" aria-controls="collapseCarousel">Carousel Options</a></h2>
                <div class="collapse" id="collapseCarousel">
                    <?php $site_options = array(
                        'post_id' => 'option',
                        'field_groups' => array('group_620e99e17c6fa'),
                        'form' => true, 
                        'return' => add_query_arg( 'updated', 'true', get_permalink() ), 
                        'html_before_fields' => '',
                        'html_after_fields' => '',
                        'submit_value' => 'Update Site Carousel Options',
                        'html_updated_message'  => '<div id="message" class="updated"><p>Site Carousel Options Updated</p></div>', 
                        'kses' => false
                    );
                    acf_form( $site_options );
                    ?>
                </div>
            </div>
        </div>
        <div class="divider"></div>
        <div class="row">
            <div class="col-lg-6">
                <h2 class="center"><a data-bs-toggle="collapse" href="#collapseHeader" role="button" aria-expanded="false" aria-controls="collapseHeader">Header Options</a></h2>
                <div class="collapse" id="collapseHeader">
                    <?php $site_options = array(
                        'post_id' => 'option',
                        'field_groups' => array('group_620e74e59d50a', 'group_621575865c14f'),
                        'form' => true, 
                        'return' => add_query_arg( 'updated', 'true', get_permalink() ), 
                        'html_before_fields' => '',
                        'html_after_fields' => '',
                        'submit_value' => 'Update Site Header Options',
                        'html_updated_message'  => '<div id="message" class="updated"><p>Site Header Options Updated</p></div>', 
                        'kses' => false
                    );
                    acf_form( $site_options );
                    ?>
                </div>
            </div>
            <div class="col-lg-6">
                <h2 class="center"><a data-bs-toggle="collapse" href="#collapseFooter" role="button" aria-expanded="false" aria-controls="collapseFooter">Footer Options</a></h2>
                <div class="collapse" id="collapseFooter">
                <?php $site_options = array(
                        'post_id' => 'option',
                        'field_groups' => array('group_620eb65024d73', 'group_621571a82ff9f'),
                        'form' => true, 
                        'return' => add_query_arg( 'updated', 'true', get_permalink() ), 
                        'html_before_fields' => '',
                        'html_after_fields' => '',
                        'submit_value' => 'Update Site Footer Options',
                        'html_updated_message'  => '<div id="message" class="updated"><p>Site Footer Options Updated</p></div>', 
                        'kses' => false
                    );
                    acf_form( $site_options );
                    ?>
                </div>
            </div>
        </div>
    <?php } ?>
	</div><!-- / hfeed site container -->
</div><!-- / page -->


<?php get_footer(); ?>