<?php

/**
 * Title:  FAQs
 * Slug: nivaro/faqs
 * Categories: nivaro, text
 * Keywords: faq, about, frequently asked
 * Viewport width: 1400
 */
?>
<!-- wp:group {"metadata":{"name":"FAQs","categories":["nivaro/faq"],"patternName":"nivaro/faqs-2-column"},"align":"full","style":{"spacing":{"blockGap":"var:preset|spacing|40"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull">
    <!-- wp:group {"layout":{"type":"constrained"}} -->
    <div class="wp-block-group">
        <!-- wp:heading {"textAlign":"center"} -->
        <h2 class="wp-block-heading has-text-align-center"><?php echo __( 'Frequently Asked Question', 'nivaro' ); ?>
        </h2>
        <!-- /wp:heading -->

        <!-- wp:paragraph {"align":"center","style":{"elements":{"link":{"color":{"text":"var:preset|color|content-secondary"}}}},"textColor":"content-secondary"} -->
        <p class="has-text-align-center has-content-secondary-color has-text-color has-link-color">
            <?php
			echo __(
				'Got Questions? We\'ve Got Answers! Everything You Need to Know About Nivaro',
				'nivaro'
			);
			?>
        </p>
        <!-- /wp:paragraph -->
    </div>
    <!-- /wp:group -->

    <!-- wp:columns {"align":"wide","style":{"spacing":{"blockGap":{"top":"var:preset|spacing|30","left":"var:preset|spacing|30"}}}} -->
    <div class="wp-block-columns alignwide">
        <!-- wp:column {"style":{"spacing":{"blockGap":"var:preset|spacing|30"}}} -->
        <div class="wp-block-column">






            <!-- wp:group {"metadata":{"name":"FAQ"},"style":{"spacing":{"padding":{"top":"var:preset|spacing|20","bottom":"var:preset|spacing|20","left":"var:preset|spacing|20","right":"var:preset|spacing|20"}},"border":{"radius":"12px","width":"1px"}},"borderColor":"border-neutral","layout":{"type":"constrained"}} -->
            <div class="wp-block-group has-border-color has-border-neutral-border-color"
                style="border-width:1px;border-radius:12px;padding-top:var(--wp--preset--spacing--20);padding-right:var(--wp--preset--spacing--20);padding-bottom:var(--wp--preset--spacing--20);padding-left:var(--wp--preset--spacing--20)">
                <!-- wp:details {"style":{"spacing":{"blockGap":"var:preset|spacing|10"},"typography":{"fontSize":"1.2rem"}}} -->
                <details class="wp-block-details" style="font-size:1.2rem">
                    <summary><?php echo __( 'What services do you offer?', 'nivaro' ); ?></summary>
                    <!-- wp:paragraph {"placeholder":"Type / to add a hidden block","style":{"elements":{"link":{"color":{"text":"var:preset|color|content-secondary"}}},"spacing":{"padding":{"bottom":"var:preset|spacing|10"}}},"textColor":"content-secondary","fontSize":"medium"} -->
                    <p class="has-content-secondary-color has-text-color has-link-color has-medium-font-size"
                        style="padding-bottom:var(--wp--preset--spacing--10)">
                        <?php echo __( 'We provide a wide range of services designed to help you achieve your goals. From initial consultation to final delivery, we\'re here to guide you every step of the way.', 'nivaro' ); ?>
                    </p>
                    <!-- /wp:paragraph -->
                </details>
                <!-- /wp:details -->
            </div>
            <!-- /wp:group -->

            <!-- wp:group {"metadata":{"name":"FAQ"},"style":{"spacing":{"padding":{"top":"var:preset|spacing|20","bottom":"var:preset|spacing|20","left":"var:preset|spacing|20","right":"var:preset|spacing|20"}},"border":{"radius":"12px","width":"1px"}},"borderColor":"border-neutral","layout":{"type":"constrained"}} -->
            <div class="wp-block-group has-border-color has-border-neutral-border-color"
                style="border-width:1px;border-radius:12px;padding-top:var(--wp--preset--spacing--20);padding-right:var(--wp--preset--spacing--20);padding-bottom:var(--wp--preset--spacing--20);padding-left:var(--wp--preset--spacing--20)">
                <!-- wp:details {"style":{"spacing":{"blockGap":"var:preset|spacing|10"},"typography":{"fontSize":"1.2rem"}}} -->
                <details class="wp-block-details" style="font-size:1.2rem">
                    <summary><?php echo __( 'How long does it take to complete a project?', 'nivaro' ); ?></summary>
                    <!-- wp:paragraph {"placeholder":"Type / to add a hidden block","style":{"elements":{"link":{"color":{"text":"var:preset|color|content-secondary"}}},"spacing":{"padding":{"bottom":"var:preset|spacing|10"}}},"textColor":"content-secondary","fontSize":"medium"} -->
                    <p class="has-content-secondary-color has-text-color has-link-color has-medium-font-size"
                        style="padding-bottom:var(--wp--preset--spacing--10)">
                        <?php
						echo __(
							'The timeline for each project varies
                        depending on its complexity. However, we ensure clear communication throughout the process, so you know what to expect.',
							'nivaro'
						);
						?>
                    </p>
                    <!-- /wp:paragraph -->
                </details>
                <!-- /wp:details -->
            </div>
            <!-- /wp:group -->

            <!-- wp:group {"metadata":{"name":"FAQ"},"style":{"spacing":{"padding":{"top":"var:preset|spacing|20","bottom":"var:preset|spacing|20","left":"var:preset|spacing|20","right":"var:preset|spacing|20"}},"border":{"radius":"12px","width":"1px"}},"borderColor":"border-neutral","layout":{"type":"constrained"}} -->
            <div class="wp-block-group has-border-color has-border-neutral-border-color"
                style="border-width:1px;border-radius:12px;padding-top:var(--wp--preset--spacing--20);padding-right:var(--wp--preset--spacing--20);padding-bottom:var(--wp--preset--spacing--20);padding-left:var(--wp--preset--spacing--20)">
                <!-- wp:details {"style":{"spacing":{"blockGap":"var:preset|spacing|10"},"typography":{"fontSize":"1.2rem"}}} -->
                <details class="wp-block-details" style="font-size:1.2rem">
                    <summary><?php echo __( 'What\'s your pricing structure?', 'nivaro' ); ?></summary>
                    <!-- wp:paragraph {"placeholder":"Type / to add a hidden block","style":{"elements":{"link":{"color":{"text":"var:preset|color|content-secondary"}}},"spacing":{"padding":{"bottom":"var:preset|spacing|10"}}},"textColor":"content-secondary","fontSize":"medium"} -->
                    <p class="has-content-secondary-color has-text-color has-link-color has-medium-font-size"
                        style="padding-bottom:var(--wp--preset--spacing--10)">
                        <?php echo __( 'Our pricing is flexible and tailored to suit your specific needs. Contact us for a custom quote based on the scope of your project.', 'nivaro' ); ?>
                    </p>
                    <!-- /wp:paragraph -->
                </details>
                <!-- /wp:details -->
            </div>
            <!-- /wp:group -->

            <!-- wp:group {"metadata":{"name":"FAQ"},"style":{"spacing":{"padding":{"top":"var:preset|spacing|20","bottom":"var:preset|spacing|20","left":"var:preset|spacing|20","right":"var:preset|spacing|20"}},"border":{"radius":"12px","width":"1px"}},"borderColor":"border-neutral","layout":{"type":"constrained"}} -->
            <div class="wp-block-group has-border-color has-border-neutral-border-color"
                style="border-width:1px;border-radius:12px;padding-top:var(--wp--preset--spacing--20);padding-right:var(--wp--preset--spacing--20);padding-bottom:var(--wp--preset--spacing--20);padding-left:var(--wp--preset--spacing--20)">
                <!-- wp:details {"style":{"spacing":{"blockGap":"var:preset|spacing|10"},"typography":{"fontSize":"1.2rem"}}} -->
                <details class="wp-block-details" style="font-size:1.2rem">
                    <summary><?php echo __( 'Do you offer ongoing support?', 'nivaro' ); ?></summary>
                    <!-- wp:paragraph {"placeholder":"Type / to add a hidden block","style":{"elements":{"link":{"color":{"text":"var:preset|color|content-secondary"}}},"spacing":{"padding":{"bottom":"var:preset|spacing|10"}}},"textColor":"content-secondary","fontSize":"medium"} -->
                    <p class="has-content-secondary-color has-text-color has-link-color has-medium-font-size"
                        style="padding-bottom:var(--wp--preset--spacing--10)">
                        <?php echo __( 'Yes, we offer post-project support to ensure everything runs smoothly. Whether you need updates or troubleshooting, we\'ve got you covered.', 'nivaro' ); ?>
                    </p>
                    <!-- /wp:paragraph -->
                </details>
                <!-- /wp:details -->
            </div>
            <!-- /wp:group -->

            <!-- wp:group {"metadata":{"name":"FAQ"},"style":{"spacing":{"padding":{"top":"var:preset|spacing|20","bottom":"var:preset|spacing|20","left":"var:preset|spacing|20","right":"var:preset|spacing|20"}},"border":{"radius":"12px","width":"1px"}},"borderColor":"border-neutral","layout":{"type":"constrained"}} -->
            <div class="wp-block-group has-border-color has-border-neutral-border-color"
                style="border-width:1px;border-radius:12px;padding-top:var(--wp--preset--spacing--20);padding-right:var(--wp--preset--spacing--20);padding-bottom:var(--wp--preset--spacing--20);padding-left:var(--wp--preset--spacing--20)">
                <!-- wp:details {"style":{"spacing":{"blockGap":"var:preset|spacing|10"},"typography":{"fontSize":"1.2rem"}}} -->
                <details class="wp-block-details" style="font-size:1.2rem">
                    <summary><?php echo __( 'How can I get started?', 'nivaro' ); ?></summary>
                    <!-- wp:paragraph {"placeholder":"Type / to add a hidden block","style":{"elements":{"link":{"color":{"text":"var:preset|color|content-secondary"}}},"spacing":{"padding":{"bottom":"var:preset|spacing|10"}}},"textColor":"content-secondary","fontSize":"medium"} -->
                    <p class="has-content-secondary-color has-text-color has-link-color has-medium-font-size"
                        style="padding-bottom:var(--wp--preset--spacing--10)">
                        <?php echo __( 'Getting started is easy! Just reach out to us through our contact form, and we’ll guide you through the next steps.', 'nivaro' ); ?>
                    </p>
                    <!-- /wp:paragraph -->
                </details>
                <!-- /wp:details -->
            </div>
            <!-- /wp:group -->
        </div>
        <!-- /wp:column -->

        <!-- wp:column {"style":{"spacing":{"blockGap":"var:preset|spacing|30"}}} -->
        <div class="wp-block-column">
            <!-- wp:group {"metadata":{"name":"FAQ"},"style":{"spacing":{"padding":{"top":"var:preset|spacing|20","bottom":"var:preset|spacing|20","left":"var:preset|spacing|20","right":"var:preset|spacing|20"}},"border":{"radius":"12px","width":"1px"}},"borderColor":"border-neutral","layout":{"type":"constrained"}} -->
            <div class="wp-block-group has-border-color has-border-neutral-border-color"
                style="border-width:1px;border-radius:12px;padding-top:var(--wp--preset--spacing--20);padding-right:var(--wp--preset--spacing--20);padding-bottom:var(--wp--preset--spacing--20);padding-left:var(--wp--preset--spacing--20)">
                <!-- wp:details {"style":{"spacing":{"blockGap":"var:preset|spacing|10"},"typography":{"fontSize":"1.2rem"}}} -->
                <details class="wp-block-details" style="font-size:1.2rem">
                    <summary><?php echo __( 'Can I request revisions?', 'nivaro' ); ?></summary>
                    <!-- wp:paragraph {"placeholder":"Type / to add a hidden block","style":{"elements":{"link":{"color":{"text":"var:preset|color|content-secondary"}}},"spacing":{"padding":{"bottom":"var:preset|spacing|10"}}},"textColor":"content-secondary","fontSize":"medium"} -->
                    <p class="has-content-secondary-color has-text-color has-link-color has-medium-font-size"
                        style="padding-bottom:var(--wp--preset--spacing--10)">
                        <?php echo __( 'Absolutely! We want to ensure you’re satisfied with the final product, so we offer revisions to make sure it aligns with your vision.', 'nivaro' ); ?>
                    </p>
                    <!-- /wp:paragraph -->
                </details>
                <!-- /wp:details -->
            </div>
            <!-- /wp:group -->

            <!-- wp:group {"metadata":{"name":"FAQ"},"style":{"spacing":{"padding":{"top":"var:preset|spacing|20","bottom":"var:preset|spacing|20","left":"var:preset|spacing|20","right":"var:preset|spacing|20"}},"border":{"radius":"12px","width":"1px"}},"borderColor":"border-neutral","layout":{"type":"constrained"}} -->
            <div class="wp-block-group has-border-color has-border-neutral-border-color"
                style="border-width:1px;border-radius:12px;padding-top:var(--wp--preset--spacing--20);padding-right:var(--wp--preset--spacing--20);padding-bottom:var(--wp--preset--spacing--20);padding-left:var(--wp--preset--spacing--20)">
                <!-- wp:details {"style":{"spacing":{"blockGap":"var:preset|spacing|10"},"typography":{"fontSize":"1.2rem"}}} -->
                <details class="wp-block-details" style="font-size:1.2rem">
                    <summary><?php echo __( 'What makes your service unique?', 'nivaro' ); ?></summary>
                    <!-- wp:paragraph {"placeholder":"Type / to add a hidden block","style":{"elements":{"link":{"color":{"text":"var:preset|color|content-secondary"}}},"spacing":{"padding":{"bottom":"var:preset|spacing|10"}}},"textColor":"content-secondary","fontSize":"medium"} -->
                    <p class="has-content-secondary-color has-text-color has-link-color has-medium-font-size"
                        style="padding-bottom:var(--wp--preset--spacing--10)">
                        <?php echo __( 'We take pride in our personalized approach, ensuring that every project reflects the unique needs and goals of our clients.', 'nivaro' ); ?>
                    </p>
                    <!-- /wp:paragraph -->
                </details>
                <!-- /wp:details -->
            </div>
            <!-- /wp:group -->

            <!-- wp:group {"metadata":{"name":"FAQ"},"style":{"spacing":{"padding":{"top":"var:preset|spacing|20","bottom":"var:preset|spacing|20","left":"var:preset|spacing|20","right":"var:preset|spacing|20"}},"border":{"radius":"12px","width":"1px"}},"borderColor":"border-neutral","layout":{"type":"constrained"}} -->
            <div class="wp-block-group has-border-color has-border-neutral-border-color"
                style="border-width:1px;border-radius:12px;padding-top:var(--wp--preset--spacing--20);padding-right:var(--wp--preset--spacing--20);padding-bottom:var(--wp--preset--spacing--20);padding-left:var(--wp--preset--spacing--20)">
                <!-- wp:details {"style":{"spacing":{"blockGap":"var:preset|spacing|10"},"typography":{"fontSize":"1.2rem"}}} -->
                <details class="wp-block-details" style="font-size:1.2rem">
                    <summary><?php echo __( 'What\'s your refund policy?', 'nivaro' ); ?></summary>
                    <!-- wp:paragraph {"placeholder":"Type / to add a hidden block","style":{"elements":{"link":{"color":{"text":"var:preset|color|content-secondary"}}},"spacing":{"padding":{"bottom":"var:preset|spacing|10"}}},"textColor":"content-secondary","fontSize":"medium"} -->
                    <p class="has-content-secondary-color has-text-color has-link-color has-medium-font-size"
                        style="padding-bottom:var(--wp--preset--spacing--10)">
                        <?php echo __( 'While we strive for complete satisfaction, we also have a refund policy in place. Please contact us for more details regarding specific cases.', 'nivaro' ); ?>
                    </p>
                    <!-- /wp:paragraph -->
                </details>
                <!-- /wp:details -->
            </div>
            <!-- /wp:group -->

            <!-- wp:group {"metadata":{"name":"FAQ"},"style":{"spacing":{"padding":{"top":"var:preset|spacing|20","bottom":"var:preset|spacing|20","left":"var:preset|spacing|20","right":"var:preset|spacing|20"}},"border":{"radius":"12px","width":"1px"}},"borderColor":"border-neutral","layout":{"type":"constrained"}} -->
            <div class="wp-block-group has-border-color has-border-neutral-border-color"
                style="border-width:1px;border-radius:12px;padding-top:var(--wp--preset--spacing--20);padding-right:var(--wp--preset--spacing--20);padding-bottom:var(--wp--preset--spacing--20);padding-left:var(--wp--preset--spacing--20)">
                <!-- wp:details {"style":{"spacing":{"blockGap":"var:preset|spacing|10"},"typography":{"fontSize":"1.2rem"}}} -->
                <details class="wp-block-details" style="font-size:1.2rem">
                    <summary><?php echo __( 'Do you offer any discounts or promotions?', 'nivaro' ); ?></summary>
                    <!-- wp:paragraph {"placeholder":"Type / to add a hidden block","style":{"elements":{"link":{"color":{"text":"var:preset|color|content-secondary"}}},"spacing":{"padding":{"bottom":"var:preset|spacing|10"}}},"textColor":"content-secondary","fontSize":"medium"} -->
                    <p class="has-content-secondary-color has-text-color has-link-color has-medium-font-size"
                        style="padding-bottom:var(--wp--preset--spacing--10)">
                        <?php echo __( 'Occasionally, we offer special promotions and discounts. Be sure to subscribe to our newsletter to stay updated!', 'nivaro' ); ?>
                    </p>
                    <!-- /wp:paragraph -->
                </details>
                <!-- /wp:details -->
            </div>
            <!-- /wp:group -->

            <!-- wp:group {"metadata":{"name":"FAQ"},"style":{"spacing":{"padding":{"top":"var:preset|spacing|20","bottom":"var:preset|spacing|20","left":"var:preset|spacing|20","right":"var:preset|spacing|20"}},"border":{"radius":"12px","width":"1px"}},"borderColor":"border-neutral","layout":{"type":"constrained"}} -->
            <div class="wp-block-group has-border-color has-border-neutral-border-color"
                style="border-width:1px;border-radius:12px;padding-top:var(--wp--preset--spacing--20);padding-right:var(--wp--preset--spacing--20);padding-bottom:var(--wp--preset--spacing--20);padding-left:var(--wp--preset--spacing--20)">
                <!-- wp:details {"style":{"spacing":{"blockGap":"var:preset|spacing|10"},"typography":{"fontSize":"1.2rem"}}} -->
                <details class="wp-block-details" style="font-size:1.2rem">
                    <summary><?php echo __( 'Where can I find more information?', 'nivaro' ); ?></summary>
                    <!-- wp:paragraph {"placeholder":"Type / to add a hidden block","style":{"elements":{"link":{"color":{"text":"var:preset|color|content-secondary"}}},"spacing":{"padding":{"bottom":"var:preset|spacing|10"}}},"textColor":"content-secondary","fontSize":"medium"} -->
                    <p class="has-content-secondary-color has-text-color has-link-color has-medium-font-size"
                        style="padding-bottom:var(--wp--preset--spacing--10)">
                        <?php echo __( 'For more detailed information about our services, pricing, and policies, feel free to browse through our website or reach out directly!', 'nivaro' ); ?>
                    </p>
                    <!-- /wp:paragraph -->
                </details>
                <!-- /wp:details -->
            </div>
            <!-- /wp:group -->
        </div>
        <!-- /wp:column -->
    </div>
    <!-- /wp:columns -->
</div>
<!-- /wp:group -->