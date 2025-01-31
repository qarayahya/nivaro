<?php

/**
 * Title: Hero
 * Slug: nivaro/hero
 * Categories: header,  nivaro/hero, nivaro
 * Viewport width: 1400
 */

$hero_image       = get_template_directory_uri() . '/patterns/images/hero-image.jpg';
$arrow_white_icon = get_template_directory_uri() . '/patterns/images/icons/arrow-white.png';
$arrow_black_icon = get_template_directory_uri() . '/patterns/images/icons/arrow-black.png';

?>

<!-- wp:group {"metadata":{"name":"Hero","categories":["nivaro/hero"],"patternName":"nivaro/hero-bento-box"},"align":"wide","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignwide">
    <!-- wp:cover {"url":"<?php echo esc_url( $hero_image ); ?>","id":92,"dimRatio":60,"isUserOverlayColor":true,"customGradient":"linear-gradient(71deg,rgb(0,0,0) 0%,rgba(0,0,0,0) 100%)","contentPosition":"center left","metadata":{"name":"Intro"},"align":"wide","style":{"border":{"radius":"16px"},"spacing":{"padding":{"top":"var:preset|spacing|40","bottom":"var:preset|spacing|40","left":"var:preset|spacing|40","right":"var:preset|spacing|40"}}},"layout":{"type":"constrained"}} -->
    <div class="wp-block-cover alignwide has-custom-content-position is-position-center-left"
        style="border-radius:16px;padding-top:var(--wp--preset--spacing--40);padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--40);padding-left:var(--wp--preset--spacing--40)">
        <span aria-hidden="true"
            class="wp-block-cover__background has-background-dim-60 has-background-dim wp-block-cover__gradient-background has-background-gradient"
            style="background:linear-gradient(71deg,rgb(0,0,0) 0%,rgba(0,0,0,0) 100%)"></span><img
            class="wp-block-cover__image-background wp-image-92" alt="" src="<?php echo esc_url( $hero_image ); ?>"
            data-object-fit="cover" />
        <div class="wp-block-cover__inner-container">
            <!-- wp:spacer {"height":"160px"} -->
            <div style="height:160px" aria-hidden="true" class="wp-block-spacer"></div>
            <!-- /wp:spacer -->

            <!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|30"}},"layout":{"type":"constrained","contentSize":"800px"}} -->
            <div class="wp-block-group">
                <!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap"}} -->
                <div class="wp-block-group">
                    <!-- wp:paragraph {"className":"glass-filter-2","style":{"spacing":{"padding":{"top":"var:preset|spacing|10","bottom":"var:preset|spacing|10","left":"var:preset|spacing|20","right":"var:preset|spacing|20"}},"border":{"radius":"99px"},"color":{"background":"#ffffff1c"}},"fontSize":"small"} -->
                    <p class="glass-filter-2 has-background has-small-font-size"
                        style="border-radius:99px;background-color:#ffffff1c;padding-top:var(--wp--preset--spacing--10);padding-right:var(--wp--preset--spacing--20);padding-bottom:var(--wp--preset--spacing--10);padding-left:var(--wp--preset--spacing--20)">
                        <?php echo __( 'Professional Videography', 'nivaro' ); ?></p>
                    <!-- /wp:paragraph -->
                </div>
                <!-- /wp:group -->

                <!-- wp:heading {"level":1,"style":{"typography":{"fontStyle":"normal","fontWeight":"600","fontSize":"4rem","lineHeight":"1.1"}}} -->
                <h1 class="wp-block-heading" style="font-size:4rem;font-style:normal;font-weight:600;line-height:1.1">
                    <?php echo __( 'Crafting Visual Stories That Leave Impact', 'nivaro' ); ?></h1>
                <!-- /wp:heading -->

                <!-- wp:paragraph {"style":{"typography":{"fontSize":"1.2rem"}}} -->
                <p style="font-size:1.2rem">
                    <?php echo __( 'Professional video production services for businesses and individuals. From concept to final cut, we bring your vision to life.', 'nivaro' ); ?>
                </p>
                <!-- /wp:paragraph -->

                <!-- wp:buttons {"layout":{"type":"flex","justifyContent":"left"}} -->
                <div class="wp-block-buttons">
                    <!-- wp:button {"className":"is-style-fill","style":{"shadow":"var:preset|shadow|xl"},"fontSize":"medium"} -->
                    <div class="wp-block-button has-custom-font-size is-style-fill has-medium-font-size"><a
                            class="wp-block-button__link wp-element-button"
                            style="box-shadow:var(--wp--preset--shadow--xl)"><?php echo __( 'Get Started', 'nivaro' ); ?></a>
                    </div>
                    <!-- /wp:button -->

                    <!-- wp:button {"className":"is-style-outline glass-filter-1","style":{"shadow":"var:preset|shadow|xl"},"fontSize":"medium"} -->
                    <div
                        class="wp-block-button has-custom-font-size is-style-outline glass-filter-1 has-medium-font-size">
                        <a class="wp-block-button__link wp-element-button"
                            style="box-shadow:var(--wp--preset--shadow--xl)"><?php echo __( 'View Portfolio →', 'nivaro' ); ?></a>
                    </div>
                    <!-- /wp:button -->
                </div>
                <!-- /wp:buttons -->
            </div>
            <!-- /wp:group -->
        </div>
    </div>
    <!-- /wp:cover -->

    <!-- wp:columns {"align":"wide"} -->
    <div class="wp-block-columns alignwide">
        <!-- wp:column {"className":"relative","style":{"spacing":{"blockGap":"0"}}} -->
        <div class="wp-block-column relative">
            <!-- wp:group {"className":"absolute top-0 right-0 z-index-50","style":{"spacing":{"padding":{"top":"12px","bottom":"12px","left":"12px","right":"12px"}},"border":{"radius":"999px"}},"backgroundColor":"base-dark","layout":{"type":"constrained"}} -->
            <div class="wp-block-group absolute top-0 right-0 z-index-50 has-base-dark-background-color has-background"
                style="border-radius:999px;padding-top:12px;padding-right:12px;padding-bottom:12px;padding-left:12px">
                <!-- wp:image {"id":162,"width":"28px","sizeSlug":"full","linkDestination":"none"} -->
                <figure class="wp-block-image size-full is-resized"><img
                        src="<?php echo esc_url( $arrow_white_icon ); ?>" alt="" class="wp-image-162"
                        style="width:28px" /></figure>
                <!-- /wp:image -->
            </div>
            <!-- /wp:group -->

            <!-- wp:group {"className":"inverted-radius","style":{"border":{"radius":"16px"},"spacing":{"padding":{"top":"var:preset|spacing|30","bottom":"var:preset|spacing|30","left":"var:preset|spacing|30","right":"var:preset|spacing|30"}}},"backgroundColor":"base-dark","layout":{"type":"constrained"}} -->
            <div class="wp-block-group inverted-radius has-base-dark-background-color has-background"
                style="border-radius:16px;padding-top:var(--wp--preset--spacing--30);padding-right:var(--wp--preset--spacing--30);padding-bottom:var(--wp--preset--spacing--30);padding-left:var(--wp--preset--spacing--30)">
                <!-- wp:spacer {"height":"40px"} -->
                <div style="height:40px" aria-hidden="true" class="wp-block-spacer"></div>
                <!-- /wp:spacer -->

                <!-- wp:paragraph {"style":{"typography":{"fontStyle":"normal","fontWeight":"500"},"elements":{"link":{"color":{"text":"var:preset|color|base-light"}}}},"textColor":"base-light","fontSize":"large"} -->
                <p class="has-base-light-color has-text-color has-link-color has-large-font-size"
                    style="font-style:normal;font-weight:500"><?php echo __( '10 years of experience', 'nivaro' ); ?>
                </p>
                <!-- /wp:paragraph -->

                <!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|base-light"}}}},"textColor":"base-light"} -->
                <p class="has-base-light-color has-text-color has-link-color">
                    <?php echo __( 'Amet consectetur adipisicing elit. Consequuntur similique animi dolorum sapiente iure quod quos quasi corrupti dolores recusandae!', 'nivaro' ); ?>
                </p>
                <!-- /wp:paragraph -->
            </div>
            <!-- /wp:group -->
        </div>
        <!-- /wp:column -->

        <!-- wp:column {"className":"relative","style":{"spacing":{"blockGap":"0"}}} -->
        <div class="wp-block-column relative">
            <!-- wp:group {"className":"absolute top-0 right-0 z-index-50","style":{"spacing":{"padding":{"top":"12px","bottom":"12px","left":"12px","right":"12px"}},"border":{"radius":"999px"}},"backgroundColor":"primary-dark","layout":{"type":"constrained"}} -->
            <div class="wp-block-group absolute top-0 right-0 z-index-50 has-primary-dark-background-color has-background"
                style="border-radius:999px;padding-top:12px;padding-right:12px;padding-bottom:12px;padding-left:12px">
                <!-- wp:image {"id":162,"width":"28px","sizeSlug":"full","linkDestination":"none"} -->
                <figure class="wp-block-image size-full is-resized"><img
                        src="<?php echo esc_url( $arrow_white_icon ); ?>" alt="" class="wp-image-162"
                        style="width:28px" /></figure>
                <!-- /wp:image -->
            </div>
            <!-- /wp:group -->

            <!-- wp:group {"className":"inverted-radius","style":{"border":{"radius":"16px"},"spacing":{"padding":{"top":"var:preset|spacing|30","bottom":"var:preset|spacing|30","left":"var:preset|spacing|30","right":"var:preset|spacing|30"}}},"backgroundColor":"primary-dark","layout":{"type":"constrained"}} -->
            <div class="wp-block-group inverted-radius has-primary-dark-background-color has-background"
                style="border-radius:16px;padding-top:var(--wp--preset--spacing--30);padding-right:var(--wp--preset--spacing--30);padding-bottom:var(--wp--preset--spacing--30);padding-left:var(--wp--preset--spacing--30)">
                <!-- wp:spacer {"height":"40px"} -->
                <div style="height:40px" aria-hidden="true" class="wp-block-spacer"></div>
                <!-- /wp:spacer -->

                <!-- wp:paragraph {"style":{"typography":{"fontStyle":"normal","fontWeight":"500"},"elements":{"link":{"color":{"text":"var:preset|color|base-light"}}}},"textColor":"base-light","fontSize":"large"} -->
                <p class="has-base-light-color has-text-color has-link-color has-large-font-size"
                    style="font-style:normal;font-weight:500"><?php echo __( 'Team of professionals', 'nivaro' ); ?></p>
                <!-- /wp:paragraph -->

                <!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|base-light"}}}},"textColor":"base-light"} -->
                <p class="has-base-light-color has-text-color has-link-color">
                    <?php echo __( 'Amet consectetur adipisicing elit. Consequuntur similique animi dolorum sapiente iure quod quos quasi corrupti dolores recusandae!', 'nivaro' ); ?>
                </p>
                <!-- /wp:paragraph -->
            </div>
            <!-- /wp:group -->
        </div>
        <!-- /wp:column -->

        <!-- wp:column {"className":"relative","style":{"spacing":{"blockGap":"0"}}} -->
        <div class="wp-block-column relative">
            <!-- wp:group {"className":"absolute top-0 right-0 z-index-50","style":{"spacing":{"padding":{"top":"12px","bottom":"12px","left":"12px","right":"12px"}},"border":{"radius":"999px"}},"backgroundColor":"accent","layout":{"type":"constrained"}} -->
            <div class="wp-block-group absolute top-0 right-0 z-index-50 has-accent-background-color has-background"
                style="border-radius:999px;padding-top:12px;padding-right:12px;padding-bottom:12px;padding-left:12px">
                <!-- wp:image {"id":168,"width":"28px","sizeSlug":"full","linkDestination":"none"} -->
                <figure class="wp-block-image size-full is-resized"><img
                        src="<?php echo esc_url( $arrow_black_icon ); ?>" alt="" class="wp-image-168"
                        style="width:28px" /></figure>
                <!-- /wp:image -->
            </div>
            <!-- /wp:group -->

            <!-- wp:group {"className":"inverted-radius","style":{"border":{"radius":"16px"},"spacing":{"padding":{"top":"var:preset|spacing|30","bottom":"var:preset|spacing|30","left":"var:preset|spacing|30","right":"var:preset|spacing|30"}}},"backgroundColor":"accent","layout":{"type":"constrained"}} -->
            <div class="wp-block-group inverted-radius has-accent-background-color has-background"
                style="border-radius:16px;padding-top:var(--wp--preset--spacing--30);padding-right:var(--wp--preset--spacing--30);padding-bottom:var(--wp--preset--spacing--30);padding-left:var(--wp--preset--spacing--30)">
                <!-- wp:spacer {"height":"40px"} -->
                <div style="height:40px" aria-hidden="true" class="wp-block-spacer"></div>
                <!-- /wp:spacer -->

                <!-- wp:paragraph {"style":{"typography":{"fontStyle":"normal","fontWeight":"500"},"elements":{"link":{"color":{"text":"var:preset|color|base-dark"}}}},"textColor":"base-dark","fontSize":"large"} -->
                <p class="has-base-dark-color has-text-color has-link-color has-large-font-size"
                    style="font-style:normal;font-weight:500"><?php echo __( 'Dedicated work', 'nivaro' ); ?></p>
                <!-- /wp:paragraph -->

                <!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|base-dark"}}}},"textColor":"base-dark"} -->
                <p class="has-base-dark-color has-text-color has-link-color">
                    <?php echo __( 'Amet consectetur adipisicing elit. Consequuntur similique animi dolorum sapiente iure quod quos quasi corrupti dolores recusandae!', 'nivaro' ); ?>
                </p>
                <!-- /wp:paragraph -->
            </div>
            <!-- /wp:group -->
        </div>
        <!-- /wp:column -->
    </div>
    <!-- /wp:columns -->
</div>
<!-- /wp:group -->