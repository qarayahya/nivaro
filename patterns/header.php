<?php

/**
 * Title: Header
 * Slug: nivaro/header
 * Categories: header, nivaro
 * Viewport width: 1400
 */
?>

<!-- wp:group {"tagName":"header","metadata":{"name":"Header","categories":["header"],"patternName":"nivaro/header-light"},"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|20","bottom":"var:preset|spacing|20"}}},"layout":{"type":"constrained"}} -->
<header class="wp-block-group alignfull has-background"
    style="padding-top:var(--wp--preset--spacing--20);padding-bottom:var(--wp--preset--spacing--20)">
    <!-- wp:columns {"verticalAlignment":"center","isStackedOnMobile":false,"metadata":{"name":"Container"},"align":"wide","style":{"spacing":{"padding":{"top":"var:preset|spacing|small","bottom":"var:preset|spacing|small"}}}} -->
    <div class="wp-block-columns alignwide are-vertically-aligned-center is-not-stacked-on-mobile"
        style="padding-top:var(--wp--preset--spacing--small);padding-bottom:var(--wp--preset--spacing--small)">
        <!-- wp:column {"verticalAlignment":"center","width":"50%"} -->
        <div class="wp-block-column is-vertically-aligned-center" style="flex-basis:50%">
            <!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|10"}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
            <div class="wp-block-group">
                <!-- wp:site-title {"level":0,"style":{"typography":{"fontStyle":"normal","fontWeight":"600"}},"fontSize":"x-large"} /-->
            </div>
            <!-- /wp:group -->
        </div>
        <!-- /wp:column -->

        <!-- wp:column {"verticalAlignment":"center","width":"50%","className":"flex-basis-auto-on-mobile"} -->
        <div class="wp-block-column is-vertically-aligned-center flex-basis-auto-on-mobile" style="flex-basis:50%">
            <!-- wp:navigation {"style":{"spacing":{"blockGap":"var:preset|spacing|30"}},"layout":{"type":"flex","justifyContent":"right"}} -->

            <!-- wp:navigation-link {"label":"<?php echo __( 'Home', 'nivaro' ); ?>","url":"#"} /-->
            <!-- wp:navigation-link {"label":"<?php echo __( 'About', 'nivaro' ); ?>","url":"#"} /-->
            <!-- wp:navigation-link {"label":"<?php echo __( 'Services', 'nivaro' ); ?>","url":"#"} /-->
            <!-- wp:navigation-link {"label":"<?php echo __( 'Pricing', 'nivaro' ); ?>","url":"#"} /-->
            <!-- wp:navigation-link {"label":"<?php echo __( 'Contact', 'nivaro' ); ?>","url":"#"} /-->

            <!-- /wp:navigation -->
        </div>
        <!-- /wp:column -->
    </div>
    <!-- /wp:columns -->
</header>
<!-- /wp:group -->