<?php

/**
 * Title: Testimonials
 * Slug: nivaro/testimonials
 * Categories: testimonials
 * Viewport width: 1400
 */

$avatar = get_template_directory_uri() . '/patterns/images/avatar.png';

?>

<!-- wp:group {"metadata":{"name":"Testimonials"},"align":"full","style":{"spacing":{"blockGap":"var:preset|spacing|40"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull">
    <!-- wp:group {"metadata":{"name":"Heading"},"align":"wide","layout":{"type":"constrained"}} -->
    <div class="wp-block-group alignwide">
        <!-- wp:heading {"textAlign":"center"} -->
        <h2 class="wp-block-heading has-text-align-center">
            <?php echo __( 'Don\'t Just Take Our Word For it', 'nivaro' ); ?></h2>
        <!-- /wp:heading -->

        <!-- wp:paragraph {"align":"center","style":{"elements":{"link":{"color":{"text":"var:preset|color|content-secondary"}}}},"textColor":"content-secondary"} -->
        <p class="has-text-align-center has-content-secondary-color has-text-color has-link-color">
            <?php echo __( 'Dynamic Teams, Trusted Partnerships, Lasting Impact', 'nivaro' ); ?></p>
        <!-- /wp:paragraph -->
    </div>
    <!-- /wp:group -->

    <!-- wp:columns {"align":"wide","style":{"spacing":{"blockGap":{"top":"2rem","left":"2rem"}}}} -->
    <div class="wp-block-columns alignwide">
        <!-- wp:column {"style":{"spacing":{"blockGap":"1.1rem"}}} -->
        <div class="wp-block-column">














            <!-- wp:group {"align":"wide","style":{"shadow":"var:preset|shadow|xxl","spacing":{"padding":{"top":"var:preset|spacing|30","bottom":"var:preset|spacing|30","left":"var:preset|spacing|30","right":"var:preset|spacing|30"},"blockGap":"var:preset|spacing|30"},"border":{"radius":"16px"}},"backgroundColor":"base-contrast","layout":{"type":"default"}} -->
            <div class="wp-block-group alignwide has-base-contrast-background-color has-background"
                style="border-radius:16px;padding-top:var(--wp--preset--spacing--30);padding-right:var(--wp--preset--spacing--30);padding-bottom:var(--wp--preset--spacing--30);padding-left:var(--wp--preset--spacing--30);box-shadow:var(--wp--preset--shadow--xxl)">
                <!-- wp:paragraph -->
                <p>★★★★</p>
                <!-- /wp:paragraph -->

                <!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|content-secondary"}}}},"textColor":"content-secondary"} -->
                <p class="has-content-secondary-color has-text-color has-link-color">
                    <?php echo __( 'Amet consectetur adipisicing elit. Consequuntur similique animi dolorum sapiente iure quod quos quasi corrupti dolores recusandae!', 'nivaro' ); ?>
                </p>
                <!-- /wp:paragraph -->

                <!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap"}} -->
                <div class="wp-block-group">
                    <!-- wp:image {"id":2403,"width":"50px","height":"50px","scale":"cover","sizeSlug":"full","linkDestination":"none","style":{"border":{"radius":"100px"}}} -->
                    <figure class="wp-block-image size-full is-resized has-custom-border"><img
                            src="<?php echo esc_url( $avatar ); ?>" alt="" class="wp-image-2403"
                            style="border-radius:100px;object-fit:cover;width:50px;height:50px" />
                    </figure>
                    <!-- /wp:image -->

                    <!-- wp:group {"style":{"spacing":{"blockGap":"0.4rem"}},"layout":{"type":"flex","orientation":"vertical","verticalAlignment":"top"}} -->
                    <div class="wp-block-group">
                        <!-- wp:paragraph {"style":{"typography":{"fontStyle":"normal","fontWeight":"500"}}} -->
                        <p style="font-style:normal;font-weight:500"><?php echo __( 'Mason Anderson', 'nivaro' ); ?></p>
                        <!-- /wp:paragraph -->

                        <!-- wp:paragraph {"style":{"typography":{"fontSize":"14px"},"elements":{"link":{"color":{"text":"var:preset|color|content-tertiary"}}}},"textColor":"content-tertiary"} -->
                        <p class="has-content-tertiary-color has-text-color has-link-color" style="font-size:14px">
                            <?php echo __( 'UI Designer', 'nivaro' ); ?></p>
                        <!-- /wp:paragraph -->
                    </div>
                    <!-- /wp:group -->
                </div>
                <!-- /wp:group -->
            </div>
            <!-- /wp:group -->
        </div>
        <!-- /wp:column -->

        <!-- wp:column {"style":{"spacing":{"blockGap":"1.1rem"}}} -->
        <div class="wp-block-column">
            <!-- wp:group {"align":"wide","style":{"shadow":"var:preset|shadow|xxl","spacing":{"padding":{"top":"var:preset|spacing|30","bottom":"var:preset|spacing|30","left":"var:preset|spacing|30","right":"var:preset|spacing|30"},"blockGap":"var:preset|spacing|30"},"border":{"radius":"16px"}},"backgroundColor":"base-contrast","layout":{"type":"default"}} -->
            <div class="wp-block-group alignwide has-base-contrast-background-color has-background"
                style="border-radius:16px;padding-top:var(--wp--preset--spacing--30);padding-right:var(--wp--preset--spacing--30);padding-bottom:var(--wp--preset--spacing--30);padding-left:var(--wp--preset--spacing--30);box-shadow:var(--wp--preset--shadow--xxl)">
                <!-- wp:paragraph -->
                <p>★★★★</p>
                <!-- /wp:paragraph -->

                <!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|content-secondary"}}}},"textColor":"content-secondary"} -->
                <p class="has-content-secondary-color has-text-color has-link-color">
                    <?php echo __( 'Amet consectetur adipisicing elit. Consequuntur similique animi dolorum sapiente iure quod quos quasi corrupti dolores recusandae!', 'nivaro' ); ?>
                </p>
                <!-- /wp:paragraph -->

                <!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap"}} -->
                <div class="wp-block-group">
                    <!-- wp:image {"width":"50px","height":"50px","scale":"cover","sizeSlug":"large","linkDestination":"none","style":{"border":{"radius":"100px"}}} -->
                    <figure class="wp-block-image size-large is-resized has-custom-border"><img
                            src="<?php echo esc_url( $avatar ); ?>" alt=""
                            style="border-radius:100px;object-fit:cover;width:50px;height:50px" /></figure>
                    <!-- /wp:image -->

                    <!-- wp:group {"style":{"spacing":{"blockGap":"0.4rem"}},"layout":{"type":"flex","orientation":"vertical","verticalAlignment":"top"}} -->
                    <div class="wp-block-group">
                        <!-- wp:paragraph {"style":{"typography":{"fontStyle":"normal","fontWeight":"500"}}} -->
                        <p style="font-style:normal;font-weight:500"><?php echo __( 'Aiden Johnson', 'nivaro' ); ?></p>
                        <!-- /wp:paragraph -->

                        <!-- wp:paragraph {"style":{"typography":{"fontSize":"14px"},"elements":{"link":{"color":{"text":"var:preset|color|content-tertiary"}}}},"textColor":"content-tertiary"} -->
                        <p class="has-content-tertiary-color has-text-color has-link-color" style="font-size:14px">
                            <?php echo __( 'WordPress Developer', 'nivaro' ); ?></p>
                        <!-- /wp:paragraph -->
                    </div>
                    <!-- /wp:group -->
                </div>
                <!-- /wp:group -->
            </div>
            <!-- /wp:group -->
        </div>
        <!-- /wp:column -->

        <!-- wp:column {"style":{"spacing":{"blockGap":"1.1rem"}}} -->
        <div class="wp-block-column">
            <!-- wp:group {"align":"wide","style":{"shadow":"var:preset|shadow|xxl","spacing":{"padding":{"top":"var:preset|spacing|30","bottom":"var:preset|spacing|30","left":"var:preset|spacing|30","right":"var:preset|spacing|30"},"blockGap":"var:preset|spacing|30"},"border":{"radius":"16px"}},"backgroundColor":"base-contrast","layout":{"type":"default"}} -->
            <div class="wp-block-group alignwide has-base-contrast-background-color has-background"
                style="border-radius:16px;padding-top:var(--wp--preset--spacing--30);padding-right:var(--wp--preset--spacing--30);padding-bottom:var(--wp--preset--spacing--30);padding-left:var(--wp--preset--spacing--30);box-shadow:var(--wp--preset--shadow--xxl)">
                <!-- wp:paragraph -->
                <p>★★★★</p>
                <!-- /wp:paragraph -->

                <!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|content-secondary"}}}},"textColor":"content-secondary"} -->
                <p class="has-content-secondary-color has-text-color has-link-color">
                    <?php echo __( 'Amet consectetur adipisicing elit. Consequuntur similique animi dolorum sapiente iure quod quos quasi corrupti dolores recusandae!', 'nivaro' ); ?>
                </p>
                <!-- /wp:paragraph -->

                <!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap"}} -->
                <div class="wp-block-group">
                    <!-- wp:image {"width":"50px","height":"50px","scale":"cover","sizeSlug":"large","linkDestination":"none","style":{"border":{"radius":"100px"}}} -->
                    <figure class="wp-block-image size-large is-resized has-custom-border"><img
                            src="<?php echo esc_url( $avatar ); ?>" alt=""
                            style="border-radius:100px;object-fit:cover;width:50px;height:50px" /></figure>
                    <!-- /wp:image -->

                    <!-- wp:group {"style":{"spacing":{"blockGap":"0.4rem"}},"layout":{"type":"flex","orientation":"vertical","verticalAlignment":"top"}} -->
                    <div class="wp-block-group">
                        <!-- wp:paragraph {"style":{"typography":{"fontStyle":"normal","fontWeight":"500"}}} -->
                        <p style="font-style:normal;font-weight:500"><?php echo __( 'Liam Davis', 'nivaro' ); ?></p>
                        <!-- /wp:paragraph -->

                        <!-- wp:paragraph {"style":{"typography":{"fontSize":"14px"},"elements":{"link":{"color":{"text":"var:preset|color|content-tertiary"}}}},"textColor":"content-tertiary"} -->
                        <p class="has-content-tertiary-color has-text-color has-link-color" style="font-size:14px">
                            <?php echo __( 'Creative Director', 'nivaro' ); ?></p>
                        <!-- /wp:paragraph -->
                    </div>
                    <!-- /wp:group -->
                </div>
                <!-- /wp:group -->
            </div>
            <!-- /wp:group -->
        </div>
        <!-- /wp:column -->
    </div>
    <!-- /wp:columns -->

    <!-- wp:spacer {"height":"50px"} -->
    <div style="height:50px" aria-hidden="true" class="wp-block-spacer"></div>
    <!-- /wp:spacer -->
</div>
<!-- /wp:group -->