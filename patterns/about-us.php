<?php

/**
 * Title: About Us
 * Slug: nivaro/about-us
 * Categories: text, nivaro
 * Keywords: text, about, feature
 * Viewport width: 1400
 */

$placeholder = get_template_directory_uri() . '/patterns/images/placeholder-vertical.png';

?>

<!-- wp:group {"metadata":{"name":"About Us","categories":["text"],"patternName":"nivaro/text-image-on-right"},"align":"wide","style":{"spacing":{"padding":{"top":"var:preset|spacing|30","bottom":"var:preset|spacing|30"}}},"layout":{"type":"default"}} -->
<div class="wp-block-group alignwide"
    style="padding-top:var(--wp--preset--spacing--30);padding-bottom:var(--wp--preset--spacing--30)">
    <!-- wp:columns {"verticalAlignment":"center","align":"wide","style":{"spacing":{"blockGap":{"top":"var:preset|spacing|30","left":"var:preset|spacing|50"}}}} -->
    <div class="wp-block-columns alignwide are-vertically-aligned-center">
        <!-- wp:column {"verticalAlignment":"center","width":"50%","style":{"spacing":{"blockGap":"var:preset|spacing|10"}}} -->
        <div class="wp-block-column is-vertically-aligned-center" style="flex-basis:50%">
            <!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|30"}},"layout":{"type":"constrained"}} -->
            <div class="wp-block-group">
                <!-- wp:heading {"textAlign":"left"} -->
                <h2 class="wp-block-heading has-text-align-left">
                    <?php echo __( 'This Is Where Your Headline Will Be Placed', 'nivaro' ); ?></h2>
                <!-- /wp:heading -->

                <!-- wp:paragraph {"align":"left","style":{"typography":{"lineHeight":1.4}}} -->
                <p class="has-text-align-left" style="line-height:1.4">
                    <?php
					echo __(
						'Amet consectetur adipisicing elit. Consequuntur
                    similique animi dolorum sapiente iure quod quos quasi corrupti dolores recusandae!',
						'nivaro'
					);
					?>
                </p>
                <!-- /wp:paragraph -->

                <!-- wp:paragraph {"style":{"typography":{"lineHeight":1.4},"elements":{"link":{"color":{"text":"var:preset|color|content-tertiary"}}}},"textColor":"content-tertiary"} -->
                <p class="has-content-tertiary-color has-text-color has-link-color" style="line-height:1.4">
                    <?php
					echo __(
						'Lorem ipsum
                    dolor sit amet consectetur adipisicing elit. Nostrum commodi nobis vero repudiandae possimus. Modi
                    assumenda tenetur expedita fugiat.',
						'nivaro'
					);
					?>
                </p>
                <!-- /wp:paragraph -->

                <!-- wp:paragraph {"align":"left","style":{"typography":{"lineHeight":1.4},"elements":{"link":{"color":{"text":"var:preset|color|content-tertiary"}}}},"textColor":"content-tertiary"} -->
                <p class="has-text-align-left has-content-tertiary-color has-text-color has-link-color"
                    style="line-height:1.4">
                    <?php
					echo __(
						'Lorem ipsum dolor sit amet consectetur adipisicing elit. Corrupti, deserunt
                    optio non assumenda blanditiis, dolores fuga quibusdam, aliquid odit pariatur facilis quia repellat
                    sint. Cupiditate dolores earum explicabo vero fuga cumque quisquam aperiam iste labore, repellat
                    blanditiis nobis velit veniam.',
						'nivaro'
					);
					?>
                </p>
                <!-- /wp:paragraph -->

                <!-- wp:buttons -->
                <div class="wp-block-buttons">
                    <!-- wp:button -->
                    <div class="wp-block-button"><a class="wp-block-button__link wp-element-button"
                            href="#"><?php echo __( 'Meet the team', 'nivaro' ); ?></a></div>
                    <!-- /wp:button -->
                </div>
                <!-- /wp:buttons -->
            </div>
            <!-- /wp:group -->
        </div>
        <!-- /wp:column -->

        <!-- wp:column {"verticalAlignment":"center","width":"50%"} -->
        <div class="wp-block-column is-vertically-aligned-center" style="flex-basis:50%">
            <!-- wp:cover {"url":"<?php echo esc_url( $placeholder ); ?>","id":61,"dimRatio":0,"customOverlayColor":"#d5d8de","isUserOverlayColor":false,"contentPosition":"bottom right","isDark":false,"style":{"border":{"radius":"12px"},"dimensions":{"aspectRatio":"10/11"},"spacing":{"padding":{"top":"0","bottom":"0","left":"0","right":"0"}}}} -->
            <div class="wp-block-cover is-light has-custom-content-position is-position-bottom-right"
                style="border-radius:12px;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><span
                    aria-hidden="true" class="wp-block-cover__background has-background-dim-0 has-background-dim"
                    style="background-color:#d5d8de"></span><img class="wp-block-cover__image-background wp-image-61"
                    alt="Placeholder" src="<?php echo esc_url( $placeholder ); ?>" data-object-fit="cover" />
                <div class="wp-block-cover__inner-container">
                    <!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"right"}} -->
                    <div class="wp-block-group">

                        <!-- wp:group {"style":{"elements":{"link":{"color":{"text":"var:preset|color|base-light"}}},"spacing":{"padding":{"top":"var:preset|spacing|30","bottom":"var:preset|spacing|30","left":"var:preset|spacing|30","right":"var:preset|spacing|30"}},"layout":{"selfStretch":"fixed","flexSize":"320px"},"border":{"radius":{"topLeft":"16px","bottomRight":"16px"},"top":{"color":"var:preset|color|base-contrast","width":"8px"},"left":{"color":"var:preset|color|base-contrast","width":"8px"}}},"backgroundColor":"base-dark","textColor":"base-light","layout":{"type":"constrained"}} -->
                        <div class="wp-block-group has-base-light-color has-base-dark-background-color has-text-color has-background has-link-color"
                            style="border-top-left-radius:16px;border-bottom-right-radius:16px;border-top-color:var(--wp--preset--color--base-contrast);border-top-width:8px;border-left-color:var(--wp--preset--color--base-contrast);border-left-width:8px;padding-top:var(--wp--preset--spacing--30);padding-right:var(--wp--preset--spacing--30);padding-bottom:var(--wp--preset--spacing--30);padding-left:var(--wp--preset--spacing--30)">
                            <!-- wp:paragraph {"style":{"typography":{"fontStyle":"normal","fontWeight":"500"}},"fontSize":"large"} -->
                            <p class="has-large-font-size" style="font-style:normal;font-weight:500">
                                <?php
								echo __(
									'10+ Years in Business',
									'nivaro'
								);
								?>
                            </p>
                            <!-- /wp:paragraph -->

                            <!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|base-light"}}}},"textColor":"base-light"} -->
                            <p class="has-base-light-color has-text-color has-link-color">
                                <?php
								echo __(
									'Our experience ensures professional and high-quality results every time.',
									'nivaro'
								);
								?>
                            </p>
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