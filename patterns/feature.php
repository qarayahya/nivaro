<?php
/**
 * Title: Feature
 * Slug: nivaro/feature
 * Categories: text, nivaro
 * Keywords: text, feature, features
 * Viewport width: 1400
 */

$placeholder = get_template_directory_uri() . '/patterns/images/placeholder-vertical.png';
?>


<!-- wp:group {"metadata":{"name":"Feature"},"align":"wide","style":{"spacing":{"blockGap":"0"}},"backgroundColor":"senary","layout":{"type":"default"}} -->
<div class="wp-block-group alignwide has-senary-background-color has-background">
    <!-- wp:columns {"verticalAlignment":"center","align":"wide","style":{"spacing":{"blockGap":{"top":"var:preset|spacing|30","left":"var:preset|spacing|50"}}}} -->
    <div class="wp-block-columns alignwide are-vertically-aligned-center">
        <!-- wp:column {"verticalAlignment":"center","width":"50%","style":{"spacing":{"blockGap":"0"}}} -->
        <div class="wp-block-column is-vertically-aligned-center" style="flex-basis:50%">
            <!-- wp:group {"style":{"spacing":{"blockGap":"0"}},"layout":{"type":"flex","flexWrap":"nowrap","verticalAlignment":"bottom"}} -->
            <div class="wp-block-group">
                <!-- wp:group {"style":{"background":{"backgroundImage":{"url":"<?php echo esc_url( $placeholder ); ?>","id":61,"source":"file","title":"placeholder"},"backgroundSize":"cover","backgroundPosition":"50% 50%"},"dimensions":{"minHeight":"450px"},"layout":{"selfStretch":"fill","flexSize":null},"border":{"radius":"16px"}},"layout":{"type":"constrained"}} -->
                <div class="wp-block-group" style="border-radius:16px;min-height:450px"></div>
                <!-- /wp:group -->

                <!-- wp:group {"style":{"background":{"backgroundImage":{"url":"<?php echo esc_url( $placeholder ); ?>","id":61,"source":"file","title":"placeholder"},"backgroundSize":"cover","backgroundPosition":"49% 41%"},"dimensions":{"minHeight":"400px"},"layout":{"selfStretch":"fill","flexSize":null},"spacing":{"margin":{"bottom":"-40px","left":"-40px"}},"shadow":"var(--wp--preset--color--base-contrast) 0px 0px 0px 8px","border":{"radius":"16px"}},"layout":{"type":"constrained"}} -->
                <div class="wp-block-group"
                    style="border-radius:16px;min-height:400px;margin-bottom:-40px;margin-left:-40px;box-shadow:var(--wp--preset--color--base-contrast) 0px 0px 0px 8px">
                </div>
                <!-- /wp:group -->
            </div>
            <!-- /wp:group -->

            <!-- wp:spacer {"height":"50px"} -->
            <div style="height:50px" aria-hidden="true" class="wp-block-spacer"></div>
            <!-- /wp:spacer -->
        </div>
        <!-- /wp:column -->

        <!-- wp:column {"verticalAlignment":"center","width":"50%","style":{"spacing":{"blockGap":"var:preset|spacing|30"}}} -->
        <div class="wp-block-column is-vertically-aligned-center" style="flex-basis:50%">
            <!-- wp:paragraph -->
            <p><?php echo __( 'Capturing Life\'s Fleeting Moments', 'nivaro' ); ?></p>
            <!-- /wp:paragraph -->

            <!-- wp:heading -->
            <h2 class="wp-block-heading"><?php echo __( 'This Is Where Your Headline Will Be Placed', 'nivaro' ); ?>
            </h2>
            <!-- /wp:heading -->

            <!-- wp:paragraph -->
            <p><?php echo __( 'Amet consectetur adipisicing elit. Consequuntur similique animi dolorum sapiente iure quod quos quasi corrupti dolores recusandae!', 'nivaro' ); ?>
            </p>
            <!-- /wp:paragraph -->

            <!-- wp:buttons {"layout":{"type":"flex","flexWrap":"wrap"}} -->
            <div class="wp-block-buttons">
                <!-- wp:button -->
                <div class="wp-block-button"><a
                        class="wp-block-button__link wp-element-button"><?php echo __( 'Schedule Your Session →', 'nivaro' ); ?>
                    </a></div>
                <!-- /wp:button -->
            </div>
            <!-- /wp:buttons -->
        </div>
        <!-- /wp:column -->
    </div>
    <!-- /wp:columns -->
</div>
<!-- /wp:group -->