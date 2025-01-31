<?php

/**
 * Title: Gallery
 * Slug: nivaro/gallery
 * Categories: gallery, nivaro
 * Viewport width: 1400
 */

$placeholder = get_template_directory_uri() . '/patterns/images/placeholder-vertical.png';

?>

<!-- wp:group {"metadata":{"name":"Gallery "},"align":"wide","spacing":{"blockGap":"var:preset|spacing|40"}},"layout":{"type":"default"}} -->
<div class="wp-block-group alignwide has-background">
    <!-- wp:group {"metadata":{"name":"Heading"},"align":"wide","layout":{"type":"constrained","justifyContent":"center"}} -->
    <div class="wp-block-group alignwide">
        <!-- wp:heading {"textAlign":"center"} -->
        <h2 class="wp-block-heading has-text-align-center"><?php echo __( 'Latest Work', 'nivaro' ); ?></h2>
        <!-- /wp:heading -->

        <!-- wp:paragraph {"align":"center","style":{"elements":{"link":{"color":{"text":"var:preset|color|content-tertiary"}}}},"textColor":"content-tertiary"} -->
        <p class="has-text-align-center has-content-tertiary-color has-text-color has-link-color">
            <?php echo __( 'Professional video production services tailored to your needs', 'nivaro' ); ?></p>
        <!-- /wp:paragraph -->
    </div>
    <!-- /wp:group -->

    <!-- wp:group {"align":"wide","style":{"spacing":{"blockGap":"1.1rem"}},"layout":{"type":"grid","minimumColumnWidth":"280px"}} -->
    <div class="wp-block-group alignwide">
        <!-- wp:cover {"url":"<?php echo esc_url( $placeholder ); ?>","dimRatio":0,"isUserOverlayColor":true,"minHeight":360,"contentPosition":"bottom left","style":{"spacing":{"padding":{"right":"1.6rem","left":"1.6rem","top":"1.6rem","bottom":"1.6rem"},"blockGap":"1.1rem"},"border":{"radius":"12px"},"layout":{"columnSpan":2}}} -->
        <div class="wp-block-cover has-custom-content-position is-position-bottom-left"
            style="border-radius:12px;padding-top:1.6rem;padding-right:1.6rem;padding-bottom:1.6rem;padding-left:1.6rem;min-height:360px">
            <span aria-hidden="true"
                class="wp-block-cover__background has-background-dim-0 has-background-dim"></span><img
                class="wp-block-cover__image-background" alt="" src="<?php echo esc_url( $placeholder ); ?>"
                data-object-fit="cover" />
            <div class="wp-block-cover__inner-container">
                <!-- wp:paragraph {"align":"center","placeholder":"Write title…","fontSize":"large"} -->
                <p class="has-text-align-center has-large-font-size"></p>
                <!-- /wp:paragraph -->
            </div>
        </div>
        <!-- /wp:cover -->

        <!-- wp:cover {"url":"<?php echo esc_url( $placeholder ); ?>","dimRatio":0,"isUserOverlayColor":true,"minHeight":360,"contentPosition":"bottom left","style":{"spacing":{"padding":{"right":"1.6rem","left":"1.6rem","top":"1.6rem","bottom":"1.6rem"},"blockGap":"1.1rem"},"border":{"radius":"12px"},"layout":{"columnSpan":2}}} -->
        <div class="wp-block-cover has-custom-content-position is-position-bottom-left"
            style="border-radius:12px;padding-top:1.6rem;padding-right:1.6rem;padding-bottom:1.6rem;padding-left:1.6rem;min-height:360px">
            <span aria-hidden="true"
                class="wp-block-cover__background has-background-dim-0 has-background-dim"></span><img
                class="wp-block-cover__image-background" alt="" src="<?php echo esc_url( $placeholder ); ?>"
                data-object-fit="cover" />
            <div class="wp-block-cover__inner-container">
                <!-- wp:paragraph {"align":"center","placeholder":"Write title…","fontSize":"large"} -->
                <p class="has-text-align-center has-large-font-size"></p>
                <!-- /wp:paragraph -->
            </div>
        </div>
        <!-- /wp:cover -->

        <!-- wp:cover {"url":"<?php echo esc_url( $placeholder ); ?>","dimRatio":0,"minHeight":360,"contentPosition":"bottom left","isDark":false,"style":{"spacing":{"padding":{"right":"1.6rem","left":"1.6rem","top":"1.6rem","bottom":"1.6rem"},"blockGap":"1.1rem"},"border":{"radius":"12px"}}} -->
        <div class="wp-block-cover is-light has-custom-content-position is-position-bottom-left"
            style="border-radius:12px;padding-top:1.6rem;padding-right:1.6rem;padding-bottom:1.6rem;padding-left:1.6rem;min-height:360px">
            <span aria-hidden="true"
                class="wp-block-cover__background has-background-dim-0 has-background-dim"></span><img
                class="wp-block-cover__image-background" alt="" src="<?php echo esc_url( $placeholder ); ?>"
                data-object-fit="cover" />
            <div class="wp-block-cover__inner-container">
                <!-- wp:paragraph {"align":"center","placeholder":"Write title…","fontSize":"large"} -->
                <p class="has-text-align-center has-large-font-size"></p>
                <!-- /wp:paragraph -->
            </div>
        </div>
        <!-- /wp:cover -->

        <!-- wp:cover {"url":"<?php echo esc_url( $placeholder ); ?>","dimRatio":0,"minHeight":360,"contentPosition":"bottom left","style":{"spacing":{"padding":{"right":"1.6rem","left":"1.6rem","top":"1.6rem","bottom":"1.6rem"},"blockGap":"1.1rem"},"border":{"radius":"12px"}}} -->
        <div class="wp-block-cover has-custom-content-position is-position-bottom-left"
            style="border-radius:12px;padding-top:1.6rem;padding-right:1.6rem;padding-bottom:1.6rem;padding-left:1.6rem;min-height:360px">
            <span aria-hidden="true"
                class="wp-block-cover__background has-background-dim-0 has-background-dim"></span><img
                class="wp-block-cover__image-background" alt="" src="<?php echo esc_url( $placeholder ); ?>"
                data-object-fit="cover" />
            <div class="wp-block-cover__inner-container">
                <!-- wp:paragraph {"align":"center","placeholder":"Write title…","fontSize":"large"} -->
                <p class="has-text-align-center has-large-font-size"></p>
                <!-- /wp:paragraph -->
            </div>
        </div>
        <!-- /wp:cover -->

        <!-- wp:cover {"url":"<?php echo esc_url( $placeholder ); ?>","dimRatio":0,"minHeight":360,"contentPosition":"bottom left","isDark":false,"style":{"spacing":{"padding":{"right":"1.6rem","left":"1.6rem","top":"1.6rem","bottom":"1.6rem"},"blockGap":"1.1rem"},"border":{"radius":"12px"}}} -->
        <div class="wp-block-cover is-light has-custom-content-position is-position-bottom-left"
            style="border-radius:12px;padding-top:1.6rem;padding-right:1.6rem;padding-bottom:1.6rem;padding-left:1.6rem;min-height:360px">
            <span aria-hidden="true"
                class="wp-block-cover__background has-background-dim-0 has-background-dim"></span><img
                class="wp-block-cover__image-background" alt="" src="<?php echo esc_url( $placeholder ); ?>"
                data-object-fit="cover" />
            <div class="wp-block-cover__inner-container">
                <!-- wp:paragraph {"align":"center","placeholder":"Write title…","fontSize":"large"} -->
                <p class="has-text-align-center has-large-font-size"></p>
                <!-- /wp:paragraph -->
            </div>
        </div>
        <!-- /wp:cover -->

        <!-- wp:cover {"url":"<?php echo esc_url( $placeholder ); ?>","dimRatio":0,"minHeight":360,"contentPosition":"bottom left","isDark":false,"style":{"spacing":{"padding":{"right":"1.6rem","left":"1.6rem","top":"1.6rem","bottom":"1.6rem"},"blockGap":"1.1rem"},"border":{"radius":"12px"}}} -->
        <div class="wp-block-cover is-light has-custom-content-position is-position-bottom-left"
            style="border-radius:12px;padding-top:1.6rem;padding-right:1.6rem;padding-bottom:1.6rem;padding-left:1.6rem;min-height:360px">
            <span aria-hidden="true"
                class="wp-block-cover__background has-background-dim-0 has-background-dim"></span><img
                class="wp-block-cover__image-background" alt="" src="<?php echo esc_url( $placeholder ); ?>"
                data-object-fit="cover" />
            <div class="wp-block-cover__inner-container">
                <!-- wp:paragraph {"align":"center","placeholder":"Write title…","fontSize":"large"} -->
                <p class="has-text-align-center has-large-font-size"></p>
                <!-- /wp:paragraph -->
            </div>
        </div>
        <!-- /wp:cover -->
    </div>
    <!-- /wp:group -->
</div>
<!-- /wp:group -->