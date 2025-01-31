<?php

/**
 * Title: Services
 * Slug: nivaro/services
 * Categories: text, nivaro, featured
 * Keywords: features, services
 * Viewport width: 1400
 */
?>


<!-- wp:group {"metadata":{"name":"Services","categories":["nivaro/featured"],"patternName":"nivaro/features-3-column"},"align":"wide","style":{"spacing":{"blockGap":"var:preset|spacing|40"}},"layout":{"type":"default"}} -->
<div class="wp-block-group alignwide">
    <!-- wp:group {"metadata":{"name":"Heading"},"align":"wide","layout":{"type":"constrained","justifyContent":"center"}} -->
    <div class="wp-block-group alignwide">
        <!-- wp:heading {"textAlign":"center"} -->
        <h2 class="wp-block-heading has-text-align-center"><?php echo __( 'Our Services', 'nivaro' ); ?></h2>
        <!-- /wp:heading -->

        <!-- wp:paragraph {"align":"center","style":{"elements":{"link":{"color":{"text":"var:preset|color|content-tertiary"}}}},"textColor":"content-tertiary"} -->
        <p class="has-text-align-center has-content-tertiary-color has-text-color has-link-color">
            <?php echo __( 'Professional video production services tailored to your needs', 'nivaro' ); ?></p>
        <!-- /wp:paragraph -->
    </div>
    <!-- /wp:group -->

    <!-- wp:group {"align":"wide","layout":{"type":"constrained"}} -->
    <div class="wp-block-group alignwide">
        <!-- wp:columns {"align":"wide","style":{"spacing":{"blockGap":{"top":"var:preset|spacing|30","left":"var:preset|spacing|40"}}}} -->
        <div class="wp-block-columns alignwide">
            <!-- wp:column {"style":{"spacing":{"blockGap":"1.1rem"}}} -->
            <div class="wp-block-column">
                <!-- wp:group {"align":"wide","style":{"spacing":{"blockGap":"var:preset|spacing|20"}},"layout":{"type":"default"}} -->
                <div class="wp-block-group alignwide">
                    <!-- wp:group {"style":{"spacing":{"padding":{"bottom":"var:preset|spacing|20"}}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"center"}} -->
                    <div class="wp-block-group" style="padding-bottom:var(--wp--preset--spacing--20)">
                        <!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|20","bottom":"var:preset|spacing|20","left":"var:preset|spacing|20","right":"var:preset|spacing|20"}},"border":{"radius":"99px"}},"backgroundColor":"tertiary","layout":{"type":"constrained"}} -->
                        <div class="wp-block-group has-tertiary-background-color has-background"
                            style="border-radius:99px;padding-top:var(--wp--preset--spacing--20);padding-right:var(--wp--preset--spacing--20);padding-bottom:var(--wp--preset--spacing--20);padding-left:var(--wp--preset--spacing--20)">
                            <!-- wp:image {"id":55,"width":"40px","sizeSlug":"full","linkDestination":"none","align":"center","style":{"color":{"duotone":["#1b9c4c","#CCC"]}}} -->
                            <figure class="wp-block-image aligncenter size-full is-resized"><img
                                    src="<?php echo esc_url( get_template_directory_uri() . '/patterns/images/icons/camera.png' ); ?>"
                                    alt="" class="wp-image-55" style="width:40px" /></figure>
                            <!-- /wp:image -->
                        </div>
                        <!-- /wp:group -->
                    </div>
                    <!-- /wp:group -->

                    <!-- wp:heading {"textAlign":"center","level":3} -->
                    <h3 class="wp-block-heading has-text-align-center">
                        <?php echo __( 'Commercial Videos', 'nivaro' ); ?></h3>
                    <!-- /wp:heading -->

                    <!-- wp:paragraph {"align":"center","style":{"elements":{"link":{"color":{"text":"var:preset|color|content-tertiary"}}}},"textColor":"content-tertiary"} -->
                    <p class="has-text-align-center has-content-tertiary-color has-text-color has-link-color">
                        <?php echo __( 'High-quality promotional videos for your business', 'nivaro' ); ?></p>
                    <!-- /wp:paragraph -->
                </div>
                <!-- /wp:group -->
            </div>
            <!-- /wp:column -->

            <!-- wp:column {"style":{"spacing":{"blockGap":"1.1rem"}}} -->
            <div class="wp-block-column">
                <!-- wp:group {"align":"wide","style":{"spacing":{"blockGap":"var:preset|spacing|20"}},"layout":{"type":"default"}} -->
                <div class="wp-block-group alignwide">
                    <!-- wp:group {"style":{"spacing":{"padding":{"bottom":"var:preset|spacing|20"}}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"center"}} -->
                    <div class="wp-block-group" style="padding-bottom:var(--wp--preset--spacing--20)">
                        <!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|20","bottom":"var:preset|spacing|20","left":"var:preset|spacing|20","right":"var:preset|spacing|20"}},"border":{"radius":"99px"}},"backgroundColor":"tertiary","layout":{"type":"constrained"}} -->
                        <div class="wp-block-group has-tertiary-background-color has-background"
                            style="border-radius:99px;padding-top:var(--wp--preset--spacing--20);padding-right:var(--wp--preset--spacing--20);padding-bottom:var(--wp--preset--spacing--20);padding-left:var(--wp--preset--spacing--20)">
                            <!-- wp:image {"id":57,"width":"40px","sizeSlug":"full","linkDestination":"none","align":"center","style":{"color":{"duotone":["#1b9c4c","#CCC"]}}} -->
                            <figure class="wp-block-image aligncenter size-full is-resized"><img
                                    src="<?php echo esc_url( get_template_directory_uri() . '/patterns/images/icons/groups.png' ); ?>"
                                    alt="" class="wp-image-57" style="width:40px" /></figure>
                            <!-- /wp:image -->
                        </div>
                        <!-- /wp:group -->
                    </div>
                    <!-- /wp:group -->

                    <!-- wp:heading {"textAlign":"center","level":3} -->
                    <h3 class="wp-block-heading has-text-align-center"><?php echo __( 'Corporate Events', 'nivaro' ); ?>
                    </h3>
                    <!-- /wp:heading -->

                    <!-- wp:paragraph {"align":"center","style":{"elements":{"link":{"color":{"text":"var:preset|color|content-tertiary"}}}},"textColor":"content-tertiary"} -->
                    <p class="has-text-align-center has-content-tertiary-color has-text-color has-link-color">
                        <?php echo __( 'Professional coverage of your corporate events', 'nivaro' ); ?></p>
                    <!-- /wp:paragraph -->
                </div>
                <!-- /wp:group -->
            </div>
            <!-- /wp:column -->

            <!-- wp:column {"style":{"spacing":{"blockGap":"1.1rem"}}} -->
            <div class="wp-block-column">
                <!-- wp:group {"align":"wide","style":{"spacing":{"blockGap":"var:preset|spacing|20"}},"layout":{"type":"default"}} -->
                <div class="wp-block-group alignwide">
                    <!-- wp:group {"style":{"spacing":{"padding":{"bottom":"var:preset|spacing|20"}}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"center"}} -->
                    <div class="wp-block-group" style="padding-bottom:var(--wp--preset--spacing--20)">
                        <!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|20","bottom":"var:preset|spacing|20","left":"var:preset|spacing|20","right":"var:preset|spacing|20"}},"border":{"radius":"99px"}},"backgroundColor":"tertiary","layout":{"type":"constrained"}} -->
                        <div class="wp-block-group has-tertiary-background-color has-background"
                            style="border-radius:99px;padding-top:var(--wp--preset--spacing--20);padding-right:var(--wp--preset--spacing--20);padding-bottom:var(--wp--preset--spacing--20);padding-left:var(--wp--preset--spacing--20)">
                            <!-- wp:image {"id":56,"width":"40px","sizeSlug":"full","linkDestination":"none","align":"center","style":{"color":{"duotone":["#1b9c4c","#CCC"]}}} -->
                            <figure class="wp-block-image aligncenter size-full is-resized"><img
                                    src="<?php echo esc_url( get_template_directory_uri() . '/patterns/images/icons/play_circle.png' ); ?>"
                                    alt="" class="wp-image-56" style="width:40px" /></figure>
                            <!-- /wp:image -->
                        </div>
                        <!-- /wp:group -->
                    </div>
                    <!-- /wp:group -->

                    <!-- wp:heading {"textAlign":"center","level":3} -->
                    <h3 class="wp-block-heading has-text-align-center"><?php echo __( 'Content Creation', 'nivaro' ); ?>
                    </h3>
                    <!-- /wp:heading -->

                    <!-- wp:paragraph {"align":"center","style":{"elements":{"link":{"color":{"text":"var:preset|color|content-tertiary"}}}},"textColor":"content-tertiary"} -->
                    <p class="has-text-align-center has-content-tertiary-color has-text-color has-link-color">
                        <?php echo __( 'Engaging content for your digital platforms', 'nivaro' ); ?></p>
                    <!-- /wp:paragraph -->
                </div>
                <!-- /wp:group -->
            </div>
            <!-- /wp:column -->
        </div>
        <!-- /wp:columns -->
    </div>
    <!-- /wp:group -->
</div>
<!-- /wp:group -->