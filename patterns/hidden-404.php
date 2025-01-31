<?php

/**
 * Title: 404 Page
 * Slug: nivaro/hidden-404
 * Inserter: no
 */
?>

<!-- wp:group {"align":"full","style":{"spacing":{"blockGap":"var:preset|spacing|20"}},"layout":{"type":"constrained","contentSize":"700px"}} -->
<div class="wp-block-group alignfull">
    <!-- wp:spacer {"height":"70px"} -->
    <div style="height:70px" aria-hidden="true" class="wp-block-spacer"></div>
    <!-- /wp:spacer -->

    <!-- wp:group {"align":"wide","style":{"spacing":{"blockGap":"var:preset|spacing|30"}},"layout":{"type":"constrained","contentSize":"500px"}} -->
    <div class="wp-block-group alignwide">
        <!-- wp:paragraph {"align":"center","style":{"typography":{"fontSize":"9rem","fontStyle":"normal","fontWeight":"900","lineHeight":"1"},"elements":{"link":{"color":{"text":"var:preset|color|primary"}}}},"textColor":"primary"} -->
        <p class="has-text-align-center has-primary-color has-text-color has-link-color"
            style="font-size:9rem;font-style:normal;font-weight:900;line-height:1"><?php echo __( '404', 'nivaro' ); ?>
        </p>
        <!-- /wp:paragraph -->

        <!-- wp:heading {"textAlign":"center","style":{"typography":{"fontSize":"32px","fontStyle":"normal","fontWeight":"700"}}} -->
        <h2 class="wp-block-heading has-text-align-center" style="font-size:32px;font-style:normal;font-weight:700">
            <?php echo __( 'Whoops! Page Not Found.', 'nivaro' ); ?></h2>
        <!-- /wp:heading -->

        <!-- wp:paragraph {"align":"center","style":{"elements":{"link":{"color":{"text":"var:preset|color|secondary"}}}},"textColor":"secondary"} -->
        <p class="has-text-align-center has-secondary-color has-text-color has-link-color">
            <?php echo __( 'Sorry, the page you\'re looking for doesn\'t exist. Try searching for something else.', 'nivaro' ); ?>
        </p>
        <!-- /wp:paragraph -->

        <!-- wp:search {"label":"Search","showLabel":false,"placeholder":"Search...","buttonText":"Search"} /-->
    </div>
    <!-- /wp:group -->

    <!-- wp:spacer {"height":"70px"} -->
    <div style="height:70px" aria-hidden="true" class="wp-block-spacer"></div>
    <!-- /wp:spacer -->
</div>
<!-- /wp:group -->