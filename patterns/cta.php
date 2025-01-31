<?php

/**
 * Title: CTA
 * Slug: nivaro/cta
 * Categories: call-to-action, nivaro
 * Viewport width: 1400
 */
?>

<!-- wp:group {"metadata":{"name":"CTA"},"align":"wide","style":{"spacing":{"padding":{"top":"var:preset|spacing|50","bottom":"var:preset|spacing|50","left":"var:preset|spacing|20","right":"var:preset|spacing|20"},"blockGap":"var:preset|spacing|30"},"elements":{"link":{"color":{"text":"var:preset|color|base-contrast"}}},"border":{"radius":"16px"}},"backgroundColor":"primary","textColor":"base-contrast","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignwide has-base-contrast-color has-primary-background-color has-text-color has-background has-link-color"
    style="border-radius:16px;padding-top:var(--wp--preset--spacing--50);padding-right:var(--wp--preset--spacing--20);padding-bottom:var(--wp--preset--spacing--50);padding-left:var(--wp--preset--spacing--20)">
    <!-- wp:paragraph {"align":"center","style":{"elements":{"link":{"color":{"text":"var:preset|color|base-light"}}}},"textColor":"base-light"} -->
    <p class="has-text-align-center has-base-light-color has-text-color has-link-color">
        <?php echo __( 'Let\'s Create Together!', 'nivaro' ); ?></p>
    <!-- /wp:paragraph -->

    <!-- wp:heading {"textAlign":"center","style":{"elements":{"link":{"color":{"text":"var:preset|color|base-light"}}}},"textColor":"base-light"} -->
    <h2 class="wp-block-heading has-text-align-center has-base-light-color has-text-color has-link-color">
        <?php echo __( 'Ready to start your next video project? Get in touch with us today.', 'nivaro' ); ?></h2>
    <!-- /wp:heading -->

    <!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center","orientation":"horizontal","flexWrap":"wrap"}} -->
    <div class="wp-block-buttons">
        <!-- wp:button {"backgroundColor":"base-light","textColor":"primary","className":"is-style-fill","style":{"elements":{"link":{"color":{"text":"var:preset|color|primary"}}}}} -->
        <div class="wp-block-button is-style-fill"><a
                class="wp-block-button__link has-primary-color has-base-light-background-color has-text-color has-background has-link-color wp-element-button"><?php echo __( 'Contact Us →', 'nivaro' ); ?></a>
        </div>
        <!-- /wp:button -->
    </div>
    <!-- /wp:buttons -->
</div>
<!-- /wp:group -->