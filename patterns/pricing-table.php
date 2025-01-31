<?php

/**
 * Title: Pricing table
 * Slug: nivaro/pricing-table
 * Categories: nivaro/pricing, nivaro
 * Viewport width: 1400
 */

$placeholder  = get_template_directory_uri() . '/patterns/images/placeholder-vertical.png';
$check_circle = get_template_directory_uri() . '/patterns/images/icons/check_circle.png';

?>
<!-- wp:group {"metadata":{"name":"Pricing"},"align":"full","style":{"spacing":{"blockGap":"var:preset|spacing|40"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull">
    <!-- wp:group {"metadata":{"name":"Headlines"},"layout":{"type":"constrained","contentSize":"700px"}} -->
    <div class="wp-block-group">
        <!-- wp:heading {"textAlign":"center"} -->
        <h2 class="wp-block-heading has-text-align-center"><?php echo __( 'Choose Your Plan', 'nivaro' ); ?></h2>
        <!-- /wp:heading -->

        <!-- wp:paragraph {"align":"center","style":{"elements":{"link":{"color":{"text":"var:preset|color|content-secondary"}}}},"textColor":"content-secondary"} -->
        <p class="has-text-align-center has-content-secondary-color has-text-color has-link-color">
            <?php echo __( 'Simple and transparent pricing to meet your needs. No hidden fees, no surprises.', 'nivaro' ); ?>
        </p>
        <!-- /wp:paragraph -->
    </div>
    <!-- /wp:group -->

    <!-- wp:group {"metadata":{"name":"Pricing Plans"},"align":"wide","layout":{"type":"grid","minimumColumnWidth":"300px"}} -->
    <div class="wp-block-group alignwide">
        <!-- wp:cover {"url":"<?php echo esc_url( $placeholder ); ?>","id":61,"dimRatio":0,"customOverlayColor":"#d5d8de","isUserOverlayColor":false,"isDark":false,"style":{"border":{"radius":"16px"}}} -->
        <div class="wp-block-cover is-light" style="border-radius:16px"><span aria-hidden="true"
                class="wp-block-cover__background has-background-dim-0 has-background-dim"
                style="background-color:#d5d8de"></span><img class="wp-block-cover__image-background wp-image-61" alt=""
                src="<?php echo esc_url( $placeholder ); ?>" data-object-fit="cover" />
            <div class="wp-block-cover__inner-container">
                <!-- wp:spacer {"height":"400px","metadata":{"name":"Minimum Height"}} -->
                <div style="height:400px" aria-hidden="true" class="wp-block-spacer"></div>
                <!-- /wp:spacer -->
            </div>
        </div>
        <!-- /wp:cover -->

        <!-- wp:group {"metadata":{"name":"Plan"},"style":{"spacing":{"padding":{"top":"var:preset|spacing|30","bottom":"var:preset|spacing|30","left":"var:preset|spacing|30","right":"var:preset|spacing|30"},"blockGap":"var:preset|spacing|40"},"border":{"radius":"16px","width":"1px"}},"borderColor":"border-neutral","layout":{"type":"constrained"}} -->
        <div class="wp-block-group has-border-color has-border-neutral-border-color"
            style="border-width:1px;border-radius:16px;padding-top:var(--wp--preset--spacing--30);padding-right:var(--wp--preset--spacing--30);padding-bottom:var(--wp--preset--spacing--30);padding-left:var(--wp--preset--spacing--30)">
            <!-- wp:group {"layout":{"type":"constrained"}} -->
            <div class="wp-block-group">
                <!-- wp:heading {"level":3} -->
                <h3 class="wp-block-heading"><?php echo __( 'Basic', 'nivaro' ); ?></h3>
                <!-- /wp:heading -->

                <!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|content-secondary"}}},"typography":{"lineHeight":1.4}},"textColor":"content-secondary"} -->
                <p class="has-content-secondary-color has-text-color has-link-color" style="line-height:1.4">
                    <?php echo __( 'Relevant for multiple users, extended &amp; premium support.', 'nivaro' ); ?></p>
                <!-- /wp:paragraph -->

                <!-- wp:group {"style":{"spacing":{"blockGap":"0"}},"layout":{"type":"flex","flexWrap":"nowrap","verticalAlignment":"bottom","justifyContent":"left"}} -->
                <div class="wp-block-group">
                    <!-- wp:paragraph {"style":{"typography":{"fontStyle":"normal","fontWeight":"500"}},"fontSize":"x-large"} -->
                    <p class="has-x-large-font-size" style="font-style:normal;font-weight:500">
                        <strong><?php echo __( '$999', 'nivaro' ); ?></strong>
                    </p>
                    <!-- /wp:paragraph -->

                    <!-- wp:paragraph {"style":{"typography":{"fontSize":"14px"},"elements":{"link":{"color":{"text":"var:preset|color|secondary"}}}},"textColor":"secondary"} -->
                    <p class="has-secondary-color has-text-color has-link-color" style="font-size:14px">
                        <?php echo __( '/One-time fee', 'nivaro' ); ?></p>
                    <!-- /wp:paragraph -->
                </div>
                <!-- /wp:group -->
            </div>
            <!-- /wp:group -->

            <!-- wp:buttons {"layout":{"type":"flex","flexWrap":"wrap"}} -->
            <div class="wp-block-buttons">
                <!-- wp:button {"width":100} -->
                <div class="wp-block-button has-custom-width wp-block-button__width-100"><a
                        class="wp-block-button__link wp-element-button"><?php echo __( 'Get Started', 'nivaro' ); ?></a>
                </div>
                <!-- /wp:button -->
            </div>
            <!-- /wp:buttons -->

            <!-- wp:group {"layout":{"type":"constrained"}} -->
            <div class="wp-block-group">
                <!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap"}} -->
                <div class="wp-block-group">
                    <!-- wp:image {"width":"24px","aspectRatio":"1","scale":"cover","sizeSlug":"large"} -->
                    <figure class="wp-block-image size-large is-resized"><img
                            src="<?php echo esc_url( $check_circle ); ?>" alt=""
                            style="aspect-ratio:1;object-fit:cover;width:24px" /></figure>
                    <!-- /wp:image -->

                    <!-- wp:paragraph {"align":"left","style":{"typography":{"fontSize":"16px"}},"textColor":"content-tertiary"} -->
                    <p class="has-text-align-left has-content-tertiary-color has-text-color" style="font-size:16px">
                        <?php echo __( '1-2 minute video', 'nivaro' ); ?></p>
                    <!-- /wp:paragraph -->
                </div>
                <!-- /wp:group -->

                <!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap"}} -->
                <div class="wp-block-group">
                    <!-- wp:image {"width":"24px","aspectRatio":"1","scale":"cover","sizeSlug":"large"} -->
                    <figure class="wp-block-image size-large is-resized"><img
                            src="<?php echo esc_url( $check_circle ); ?>" alt=""
                            style="aspect-ratio:1;object-fit:cover;width:24px" /></figure>
                    <!-- /wp:image -->

                    <!-- wp:paragraph {"align":"left","style":{"typography":{"fontSize":"16px"}},"textColor":"content-tertiary"} -->
                    <p class="has-text-align-left has-content-tertiary-color has-text-color" style="font-size:16px">
                        <?php echo __( '2 revisions', 'nivaro' ); ?></p>
                    <!-- /wp:paragraph -->
                </div>
                <!-- /wp:group -->

                <!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap"}} -->
                <div class="wp-block-group">
                    <!-- wp:image {"width":"24px","aspectRatio":"1","scale":"cover","sizeSlug":"large"} -->
                    <figure class="wp-block-image size-large is-resized"><img
                            src="<?php echo esc_url( $check_circle ); ?>" alt=""
                            style="aspect-ratio:1;object-fit:cover;width:24px" /></figure>
                    <!-- /wp:image -->

                    <!-- wp:paragraph {"align":"left","style":{"typography":{"fontSize":"16px"}},"textColor":"content-tertiary"} -->
                    <p class="has-text-align-left has-content-tertiary-color has-text-color" style="font-size:16px">
                        <?php echo __( 'Advanced color grading', 'nivaro' ); ?></p>
                    <!-- /wp:paragraph -->
                </div>
                <!-- /wp:group -->

                <!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap"}} -->
                <div class="wp-block-group">
                    <!-- wp:image {"width":"24px","aspectRatio":"1","scale":"cover","sizeSlug":"large"} -->
                    <figure class="wp-block-image size-large is-resized"><img
                            src="<?php echo esc_url( $check_circle ); ?>" alt=""
                            style="aspect-ratio:1;object-fit:cover;width:24px" /></figure>
                    <!-- /wp:image -->

                    <!-- wp:paragraph {"align":"left","style":{"typography":{"fontSize":"16px"}},"textColor":"content-tertiary"} -->
                    <p class="has-text-align-left has-content-tertiary-color has-text-color" style="font-size:16px">
                        <?php echo __( '2 locations', 'nivaro' ); ?></p>
                    <!-- /wp:paragraph -->
                </div>
                <!-- /wp:group -->
            </div>
            <!-- /wp:group -->
        </div>
        <!-- /wp:group -->

        <!-- wp:group
			{"metadata":{"name":"Plan"},"style":{"spacing":{"padding":{"top":"var:preset|spacing|30","bottom":"var:preset|spacing|30","left":"var:preset|spacing|30","right":"var:preset|spacing|30"},"blockGap":"var:preset|spacing|40"},"border":{"radius":"16px","width":"1px"}},"borderColor":"border-neutral","layout":{"type":"constrained"}}
			-->
        <div class="wp-block-group has-border-color has-border-neutral-border-color"
            style="border-width:1px;border-radius:16px;padding-top:var(--wp--preset--spacing--30);padding-right:var(--wp--preset--spacing--30);padding-bottom:var(--wp--preset--spacing--30);padding-left:var(--wp--preset--spacing--30)">
            <!-- wp:group {"layout":{"type":"constrained"}} -->
            <div class="wp-block-group">
                <!-- wp:heading {"level":3} -->
                <h3 class="wp-block-heading"><?php echo __( 'Professional', 'nivaro' ); ?></h3>
                <!-- /wp:heading -->

                <!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|content-secondary"}}},"typography":{"lineHeight":1.4}},"textColor":"content-secondary"} -->
                <p class="has-content-secondary-color has-text-color has-link-color" style="line-height:1.4">
                    <?php echo __( 'Ideal for individuals or small businesses getting started.', 'nivaro' ); ?></p>
                <!-- /wp:paragraph -->

                <!-- wp:group {"style":{"spacing":{"blockGap":"0"}},"layout":{"type":"flex","flexWrap":"nowrap","verticalAlignment":"bottom","justifyContent":"left"}} -->
                <div class="wp-block-group">
                    <!-- wp:paragraph {"style":{"typography":{"fontStyle":"normal","fontWeight":"500"}},"fontSize":"x-large"} -->
                    <p class="has-x-large-font-size" style="font-style:normal;font-weight:500">
                        <strong><?php echo __( '$2499', 'nivaro' ); ?></strong>
                    </p>
                    <!-- /wp:paragraph -->

                    <!-- wp:paragraph {"style":{"typography":{"fontSize":"14px"},"elements":{"link":{"color":{"text":"var:preset|color|secondary"}}}},"textColor":"secondary"} -->
                    <p class="has-secondary-color has-text-color has-link-color" style="font-size:14px">
                        <?php echo __( '/One-time fee', 'nivaro' ); ?></p>
                    <!-- /wp:paragraph -->
                </div>
                <!-- /wp:group -->
            </div>
            <!-- /wp:group -->

            <!-- wp:buttons {"layout":{"type":"flex","flexWrap":"wrap"}} -->
            <div class="wp-block-buttons">
                <!-- wp:button {"width":100} -->
                <div class="wp-block-button has-custom-width wp-block-button__width-100"><a
                        class="wp-block-button__link wp-element-button"><?php echo __( 'Get Started', 'nivaro' ); ?></a>
                </div>
                <!-- /wp:button -->
            </div>
            <!-- /wp:buttons -->

            <!-- wp:group {"layout":{"type":"constrained"}} -->
            <div class="wp-block-group">
                <!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap"}} -->
                <div class="wp-block-group">
                    <!-- wp:image {"width":"24px","aspectRatio":"1","scale":"cover","sizeSlug":"large"} -->
                    <figure class="wp-block-image size-large is-resized"><img
                            src="<?php echo esc_url( $check_circle ); ?>" alt=""
                            style="aspect-ratio:1;object-fit:cover;width:24px" /></figure>
                    <!-- /wp:image -->

                    <!-- wp:paragraph {"align":"left","style":{"typography":{"fontSize":"16px"}},"textColor":"content-tertiary"} -->
                    <p class="has-text-align-left has-content-tertiary-color has-text-color" style="font-size:16px">
                        <?php echo __( '4-6 minute video', 'nivaro' ); ?></p>
                    <!-- /wp:paragraph -->
                </div>
                <!-- /wp:group -->

                <!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap"}} -->
                <div class="wp-block-group">
                    <!-- wp:image {"width":"24px","aspectRatio":"1","scale":"cover","sizeSlug":"large"} -->
                    <figure class="wp-block-image size-large is-resized"><img
                            src="<?php echo esc_url( $check_circle ); ?>" alt=""
                            style="aspect-ratio:1;object-fit:cover;width:24px" /></figure>
                    <!-- /wp:image -->

                    <!-- wp:paragraph {"align":"left","style":{"typography":{"fontSize":"16px"}},"textColor":"content-tertiary"} -->
                    <p class="has-text-align-left has-content-tertiary-color has-text-color" style="font-size:16px">
                        <?php echo __( 'Unlimited revisions', 'nivaro' ); ?></p>
                    <!-- /wp:paragraph -->
                </div>
                <!-- /wp:group -->

                <!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap"}} -->
                <div class="wp-block-group">
                    <!-- wp:image {"width":"24px","aspectRatio":"1","scale":"cover","sizeSlug":"large"} -->
                    <figure class="wp-block-image size-large is-resized"><img
                            src="<?php echo esc_url( $check_circle ); ?>" alt=""
                            style="aspect-ratio:1;object-fit:cover;width:24px" /></figure>
                    <!-- /wp:image -->

                    <!-- wp:paragraph {"align":"left","style":{"typography":{"fontSize":"16px"}},"textColor":"content-tertiary"} -->
                    <p class="has-text-align-left has-content-tertiary-color has-text-color" style="font-size:16px">
                        <?php echo __( 'Premium color grading', 'nivaro' ); ?></p>
                    <!-- /wp:paragraph -->
                </div>
                <!-- /wp:group -->

                <!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap"}} -->
                <div class="wp-block-group">
                    <!-- wp:image {"width":"24px","aspectRatio":"1","scale":"cover","sizeSlug":"large"} -->
                    <figure class="wp-block-image size-large is-resized"><img
                            src="<?php echo esc_url( $check_circle ); ?>" alt=""
                            style="aspect-ratio:1;object-fit:cover;width:24px" /></figure>
                    <!-- /wp:image -->

                    <!-- wp:paragraph {"align":"left","style":{"typography":{"fontSize":"16px"}},"textColor":"content-tertiary"} -->
                    <p class="has-text-align-left has-content-tertiary-color has-text-color" style="font-size:16px">
                        <?php echo __( 'Multiple locations', 'nivaro' ); ?></p>
                    <!-- /wp:paragraph -->
                </div>
                <!-- /wp:group -->
            </div>
            <!-- /wp:group -->
        </div>
        <!-- /wp:group -->
    </div>
    <!-- /wp:group -->
</div>
<!-- /wp:group -->