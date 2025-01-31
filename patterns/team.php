<?php

/**
 * Title: Team 3 columns
 * Slug: nivaro/team
 * Categories: team, nivaro
 * Viewport width: 1400
 */

$placeholder = get_template_directory_uri() . '/patterns/images/placeholder-vertical.png';

?>
<!-- wp:group {"metadata":{"name":"Team"},"align":"wide","style":{"spacing":{"blockGap":"var:preset|spacing|40"}},"layout":{"type":"default"}} -->
<div class="wp-block-group alignwide">
    <!-- wp:group {"metadata":{"name":"Heading"},"align":"wide","layout":{"type":"constrained"}} -->
    <div class="wp-block-group alignwide">
        <!-- wp:heading {"textAlign":"center"} -->
        <h2 class="wp-block-heading has-text-align-center">
            <?php echo __( 'Experienced minds dedicated to protection', 'nivaro' ); ?></h2>
        <!-- /wp:heading -->

        <!-- wp:paragraph {"align":"center","style":{"elements":{"link":{"color":{"text":"var:preset|color|content-secondary"}}}},"textColor":"content-secondary"} -->
        <p class="has-text-align-center has-content-secondary-color has-text-color has-link-color">
            <?php echo __( 'Dynamic Teams, Trusted Partnerships, Lasting Impact', 'nivaro' ); ?></p>
        <!-- /wp:paragraph -->
    </div>
    <!-- /wp:group -->

    <!-- wp:columns {"align":"wide"} -->
    <div class="wp-block-columns alignwide">
        <!-- wp:column {"verticalAlignment":"center","width":""} -->
        <div class="wp-block-column is-vertically-aligned-center">
            <!-- wp:cover {"url":"<?php echo esc_url( $placeholder ); ?>","id":75,"dimRatio":0,"customOverlayColor":"#aaa09e","isUserOverlayColor":false,"minHeight":100,"minHeightUnit":"%","isDark":false,"style":{"spacing":{"padding":{"top":"0","bottom":"0","left":"0","right":"0"}},"border":{"radius":"16px","width":"1px"},"elements":{"link":{"color":{"text":"var:preset|color|content-primary"}}}},"textColor":"content-primary","borderColor":"border-neutral","layout":{"type":"default"}} -->
            <div class="wp-block-cover is-light has-border-color has-border-neutral-border-color has-content-primary-color has-text-color has-link-color"
                style="border-width:1px;border-radius:16px;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0;min-height:100%">
                <span aria-hidden="true" class="wp-block-cover__background has-background-dim-0 has-background-dim"
                    style="background-color:#aaa09e"></span><img class="wp-block-cover__image-background wp-image-75"
                    alt="" src="<?php echo esc_url( $placeholder ); ?>" data-object-fit="cover" />
                <div class="wp-block-cover__inner-container">
                    <!-- wp:group {"style":{"dimensions":{"minHeight":"100%"}},"layout":{"type":"flex","orientation":"vertical","justifyContent":"stretch","verticalAlignment":"space-between"}} -->
                    <div class="wp-block-group" style="min-height:100%">
                        <!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|20","bottom":"var:preset|spacing|20","left":"var:preset|spacing|20","right":"var:preset|spacing|20"}}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"right"}} -->
                        <div class="wp-block-group"
                            style="padding-top:var(--wp--preset--spacing--20);padding-right:var(--wp--preset--spacing--20);padding-bottom:var(--wp--preset--spacing--20);padding-left:var(--wp--preset--spacing--20)">
                            <!-- wp:social-links {"customIconColor":"#ffffff","iconColorValue":"#ffffff","size":"has-normal-icon-size","className":"is-style-logos-only","style":{"spacing":{"blockGap":{"top":"1.1rem","left":"1.1rem"}}},"layout":{"type":"flex","justifyContent":"left","orientation":"vertical"}} -->
                            <ul class="wp-block-social-links has-normal-icon-size has-icon-color is-style-logos-only">
                                <!-- wp:social-link {"url":"#","service":"twitter"} /-->

                                <!-- wp:social-link {"url":"#","service":"linkedin"} /-->

                                <!-- wp:social-link {"url":"#","service":"github"} /-->
                            </ul>
                            <!-- /wp:social-links -->
                        </div>
                        <!-- /wp:group -->

                        <!-- wp:spacer {"height":"0px","style":{"layout":{"selfStretch":"fixed","flexSize":"200px"}}} -->
                        <div style="height:0px" aria-hidden="true" class="wp-block-spacer"></div>
                        <!-- /wp:spacer -->

                        <!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|20","bottom":"var:preset|spacing|20","left":"var:preset|spacing|20","right":"var:preset|spacing|20"}}},"backgroundColor":"base-contrast","layout":{"type":"constrained"}} -->
                        <div class="wp-block-group has-base-contrast-background-color has-background"
                            style="padding-top:var(--wp--preset--spacing--20);padding-right:var(--wp--preset--spacing--20);padding-bottom:var(--wp--preset--spacing--20);padding-left:var(--wp--preset--spacing--20)">
                            <!-- wp:paragraph {"style":{"typography":{"fontStyle":"normal","fontWeight":"500","fontSize":"1.2rem"}}} -->
                            <p style="font-size:1.2rem;font-style:normal;font-weight:500">
                                <?php echo __( 'Lucas Thompson', 'nivaro' ); ?></p>
                            <!-- /wp:paragraph -->

                            <!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|content-secondary"}}}},"textColor":"content-secondary","fontSize":"small"} -->
                            <p class="has-content-secondary-color has-text-color has-link-color has-small-font-size">
                                <?php echo __( 'Co-Founder, CEO', 'nivaro' ); ?></p>
                            <!-- /wp:paragraph -->
                        </div>
                        <!-- /wp:group -->
                    </div>
                    <!-- /wp:group -->
                </div>
            </div>
            <!-- /wp:cover -->
        </div>
        <!-- /wp:column -->

        <!-- wp:column {"verticalAlignment":"center","width":""} -->
        <div class="wp-block-column is-vertically-aligned-center">
            <!-- wp:cover {"url":"<?php echo esc_url( $placeholder ); ?>","id":76,"dimRatio":0,"customOverlayColor":"#c6bebe","isUserOverlayColor":false,"minHeight":100,"minHeightUnit":"%","isDark":false,"style":{"spacing":{"padding":{"top":"0","bottom":"0","left":"0","right":"0"}},"border":{"radius":"16px","width":"1px"},"elements":{"link":{"color":{"text":"var:preset|color|content-primary"}}}},"textColor":"content-primary","borderColor":"border-neutral","layout":{"type":"default"}} -->
            <div class="wp-block-cover is-light has-border-color has-border-neutral-border-color has-content-primary-color has-text-color has-link-color"
                style="border-width:1px;border-radius:16px;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0;min-height:100%">
                <span aria-hidden="true" class="wp-block-cover__background has-background-dim-0 has-background-dim"
                    style="background-color:#c6bebe"></span><img class="wp-block-cover__image-background wp-image-76"
                    alt="" src="<?php echo esc_url( $placeholder ); ?>" data-object-fit="cover" />
                <div class="wp-block-cover__inner-container">
                    <!-- wp:group {"style":{"dimensions":{"minHeight":"100%"}},"layout":{"type":"flex","orientation":"vertical","justifyContent":"stretch","verticalAlignment":"space-between"}} -->
                    <div class="wp-block-group" style="min-height:100%">
                        <!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|20","bottom":"var:preset|spacing|20","left":"var:preset|spacing|20","right":"var:preset|spacing|20"}}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"right"}} -->
                        <div class="wp-block-group"
                            style="padding-top:var(--wp--preset--spacing--20);padding-right:var(--wp--preset--spacing--20);padding-bottom:var(--wp--preset--spacing--20);padding-left:var(--wp--preset--spacing--20)">
                            <!-- wp:social-links {"customIconColor":"#ffffff","iconColorValue":"#ffffff","size":"has-normal-icon-size","className":"is-style-logos-only","style":{"spacing":{"blockGap":{"top":"1.1rem","left":"1.1rem"}}},"layout":{"type":"flex","justifyContent":"left","orientation":"vertical"}} -->
                            <ul class="wp-block-social-links has-normal-icon-size has-icon-color is-style-logos-only">
                                <!-- wp:social-link {"url":"#","service":"twitter"} /-->

                                <!-- wp:social-link {"url":"#","service":"linkedin"} /-->

                                <!-- wp:social-link {"url":"#","service":"github"} /-->
                            </ul>
                            <!-- /wp:social-links -->
                        </div>
                        <!-- /wp:group -->

                        <!-- wp:spacer {"height":"0px","style":{"layout":{"selfStretch":"fixed","flexSize":"200px"}}} -->
                        <div style="height:0px" aria-hidden="true" class="wp-block-spacer"></div>
                        <!-- /wp:spacer -->

                        <!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|20","bottom":"var:preset|spacing|20","left":"var:preset|spacing|20","right":"var:preset|spacing|20"}}},"backgroundColor":"base-contrast","layout":{"type":"constrained"}} -->
                        <div class="wp-block-group has-base-contrast-background-color has-background"
                            style="padding-top:var(--wp--preset--spacing--20);padding-right:var(--wp--preset--spacing--20);padding-bottom:var(--wp--preset--spacing--20);padding-left:var(--wp--preset--spacing--20)">
                            <!-- wp:paragraph {"style":{"typography":{"fontStyle":"normal","fontWeight":"500","fontSize":"1.2rem"}}} -->
                            <p style="font-size:1.2rem;font-style:normal;font-weight:500">
                                <?php echo __( 'Matthew Baker', 'nivaro' ); ?></p>
                            <!-- /wp:paragraph -->

                            <!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|content-secondary"}}}},"textColor":"content-secondary","fontSize":"small"} -->
                            <p class="has-content-secondary-color has-text-color has-link-color has-small-font-size">
                                <?php echo __( 'SEO & Marketing', 'nivaro' ); ?></p>
                            <!-- /wp:paragraph -->
                        </div>
                        <!-- /wp:group -->
                    </div>
                    <!-- /wp:group -->
                </div>
            </div>
            <!-- /wp:cover -->
        </div>
        <!-- /wp:column -->

        <!-- wp:column {"verticalAlignment":"center","width":""} -->
        <div class="wp-block-column is-vertically-aligned-center">
            <!-- wp:cover {"url":"<?php echo esc_url( $placeholder ); ?>","id":77,"dimRatio":0,"customOverlayColor":"#c1b9ba","isUserOverlayColor":false,"minHeight":100,"minHeightUnit":"%","isDark":false,"style":{"spacing":{"padding":{"top":"0","bottom":"0","left":"0","right":"0"}},"border":{"radius":"16px","width":"1px"},"elements":{"link":{"color":{"text":"var:preset|color|content-primary"}}}},"textColor":"content-primary","borderColor":"border-neutral","layout":{"type":"default"}} -->
            <div class="wp-block-cover is-light has-border-color has-border-neutral-border-color has-content-primary-color has-text-color has-link-color"
                style="border-width:1px;border-radius:16px;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0;min-height:100%">
                <span aria-hidden="true" class="wp-block-cover__background has-background-dim-0 has-background-dim"
                    style="background-color:#c1b9ba"></span><img class="wp-block-cover__image-background wp-image-77"
                    alt="" src="<?php echo esc_url( $placeholder ); ?>" data-object-fit="cover" />
                <div class="wp-block-cover__inner-container">
                    <!-- wp:group {"style":{"dimensions":{"minHeight":"100%"}},"layout":{"type":"flex","orientation":"vertical","justifyContent":"stretch","verticalAlignment":"space-between"}} -->
                    <div class="wp-block-group" style="min-height:100%">
                        <!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|20","bottom":"var:preset|spacing|20","left":"var:preset|spacing|20","right":"var:preset|spacing|20"}}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"right"}} -->
                        <div class="wp-block-group"
                            style="padding-top:var(--wp--preset--spacing--20);padding-right:var(--wp--preset--spacing--20);padding-bottom:var(--wp--preset--spacing--20);padding-left:var(--wp--preset--spacing--20)">
                            <!-- wp:social-links {"customIconColor":"#ffffff","iconColorValue":"#ffffff","size":"has-normal-icon-size","className":"is-style-logos-only","style":{"spacing":{"blockGap":{"top":"1.1rem","left":"1.1rem"}}},"layout":{"type":"flex","justifyContent":"left","orientation":"vertical"}} -->
                            <ul class="wp-block-social-links has-normal-icon-size has-icon-color is-style-logos-only">
                                <!-- wp:social-link {"url":"#","service":"twitter"} /-->

                                <!-- wp:social-link {"url":"#","service":"linkedin"} /-->

                                <!-- wp:social-link {"url":"#","service":"github"} /-->
                            </ul>
                            <!-- /wp:social-links -->
                        </div>
                        <!-- /wp:group -->

                        <!-- wp:spacer {"height":"0px","style":{"layout":{"selfStretch":"fixed","flexSize":"200px"}}} -->
                        <div style="height:0px" aria-hidden="true" class="wp-block-spacer"></div>
                        <!-- /wp:spacer -->

                        <!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|20","bottom":"var:preset|spacing|20","left":"var:preset|spacing|20","right":"var:preset|spacing|20"}}},"backgroundColor":"base-contrast","layout":{"type":"constrained"}} -->
                        <div class="wp-block-group has-base-contrast-background-color has-background"
                            style="padding-top:var(--wp--preset--spacing--20);padding-right:var(--wp--preset--spacing--20);padding-bottom:var(--wp--preset--spacing--20);padding-left:var(--wp--preset--spacing--20)">
                            <!-- wp:paragraph {"style":{"typography":{"fontStyle":"normal","fontWeight":"500","fontSize":"1.2rem"}}} -->
                            <p style="font-size:1.2rem;font-style:normal;font-weight:500">
                                <?php echo __( 'Ryan Cooper', 'nivaro' ); ?></p>
                            <!-- /wp:paragraph -->

                            <!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|content-secondary"}}}},"textColor":"content-secondary","fontSize":"small"} -->
                            <p class="has-content-secondary-color has-text-color has-link-color has-small-font-size">
                                <?php echo __( 'Software Developer', 'nivaro' ); ?></p>
                            <!-- /wp:paragraph -->
                        </div>
                        <!-- /wp:group -->
                    </div>
                    <!-- /wp:group -->
                </div>
            </div>
            <!-- /wp:cover -->
        </div>
        <!-- /wp:column -->
    </div>
    <!-- /wp:columns -->
</div>
<!-- /wp:group -->