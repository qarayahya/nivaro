<?php

/**
 * Title: Footer
 * Slug: nivaro/footer
 * Categories: footer, nivaro
 * Viewport width: 1400
 */
?>


<!-- wp:spacer {"height":"70px"} -->
<div style="height:70px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|20","bottom":"var:preset|spacing|20","left":"var:preset|spacing|20","right":"var:preset|spacing|20"}}},"layout":{"type":"default"}} -->
<div class="wp-block-group alignfull"
	style="padding-top:var(--wp--preset--spacing--20);padding-right:var(--wp--preset--spacing--20);padding-bottom:var(--wp--preset--spacing--20);padding-left:var(--wp--preset--spacing--20)">

	<!-- wp:group {"tagName":"footer","metadata":{"name":"Footer"},"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|20","bottom":"var:preset|spacing|20","left":"var:preset|spacing|20","right":"var:preset|spacing|20"}},"border":{"radius":"16px"},"elements":{"link":{"color":{"text":"var:preset|color|base-light"}}}},"backgroundColor":"primary-dark","textColor":"base-light","layout":{"type":"constrained"}} -->
	<footer
		class="wp-block-group alignfull has-base-light-color has-primary-dark-background-color has-text-color has-background has-link-color"
		style="border-radius:16px;padding-top:var(--wp--preset--spacing--20);padding-right:var(--wp--preset--spacing--20);padding-bottom:var(--wp--preset--spacing--20);padding-left:var(--wp--preset--spacing--20)">
		<!-- wp:spacer {"height":"70px"} -->
		<div style="height:70px" aria-hidden="true" class="wp-block-spacer"></div>
		<!-- /wp:spacer -->

		<!-- wp:columns {"align":"wide","style":{"spacing":{"blockGap":{"top":"var:preset|spacing|30","left":"var:preset|spacing|30"}}}} -->
		<div class="wp-block-columns alignwide">
			<!-- wp:column {"style":{"spacing":{"blockGap":"var:preset|spacing|20"}},"layout":{"type":"constrained","contentSize":"400px","justifyContent":"left"}} -->
			<div class="wp-block-column">
				<!-- wp:site-title {"level":0} /-->

				<!-- wp:paragraph -->
				<p><?php echo __( 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Facilis laudantium inventore perspiciatis ex quam aspernatur.', 'nivaro' ); ?>
				</p>
				<!-- /wp:paragraph -->

				<!-- wp:social-links {"iconColor":"base","iconColorValue":"#ffffff","className":"is-style-logos-only"} -->
				<ul class="wp-block-social-links has-icon-color is-style-logos-only">
					<!-- wp:social-link {"url":"#","service":"linkedin","label":"#"} /-->

					<!-- wp:social-link {"url":"#","service":"twitter","label":"#"} /-->

					<!-- wp:social-link {"url":"#","service":"facebook"} /-->

					<!-- wp:social-link {"url":"#","service":"instagram"} /-->
				</ul>
				<!-- /wp:social-links -->
			</div>
			<!-- /wp:column -->

			<!-- wp:column -->
			<div class="wp-block-column">
				<!-- wp:columns -->
				<div class="wp-block-columns">
					<!-- wp:column {"style":{"spacing":{"blockGap":"var:preset|spacing|30"}}} -->
					<div class="wp-block-column">
						<!-- wp:paragraph {"style":{"typography":{"fontStyle":"normal","fontWeight":"500"}},"fontSize":"large"} -->
						<p class="has-large-font-size" style="font-style:normal;font-weight:500">
							<?php echo __( 'Company', 'nivaro' ); ?></p>
						<!-- /wp:paragraph -->

						<!-- wp:navigation {"customTextColor":"#e0e0e0","overlayMenu":"never","style":{"typography":{"fontStyle":"normal","fontWeight":"400"}},"fontSize":"medium","fontFamily":"inter","layout":{"type":"flex","orientation":"vertical"}}  -->

						<!-- wp:navigation-link {"label":"<?php echo __( 'Home', 'nivaro' ); ?>","url":"#"} /-->
						<!-- wp:navigation-link {"label":"<?php echo __( 'About', 'nivaro' ); ?>","url":"#"} /-->
						<!-- wp:navigation-link {"label":"<?php echo __( 'Services', 'nivaro' ); ?>","url":"#"} /-->
						<!-- wp:navigation-link {"label":"<?php echo __( 'Pricing', 'nivaro' ); ?>","url":"#"} /-->
						<!-- wp:navigation-link {"label":"<?php echo __( 'Contact', 'nivaro' ); ?>","url":"#"} /-->

						<!-- /wp:navigation -->
					</div>
					<!-- /wp:column -->

					<!-- wp:column {"style":{"spacing":{"blockGap":"var:preset|spacing|30"}}} -->
					<div class="wp-block-column">
						<!-- wp:paragraph {"style":{"typography":{"fontStyle":"normal","fontWeight":"500"}},"fontSize":"large"} -->
						<p class="has-large-font-size" style="font-style:normal;font-weight:500">
							<?php echo __( 'Resources', 'nivaro' ); ?></p>
						<!-- /wp:paragraph -->

						<!-- wp:navigation {"overlayMenu":"never","style":{"typography":{"fontStyle":"normal","fontWeight":"400"}},"fontSize":"medium","fontFamily":"inter","layout":{"type":"flex","orientation":"vertical"}} -->

						<!-- wp:navigation-link {"label":"<?php echo __( 'Careers', 'nivaro' ); ?>","url":"#"} /-->
						<!-- wp:navigation-link {"label":"<?php echo __( 'Brand', 'nivaro' ); ?>","url":"#"} /-->
						<!-- wp:navigation-link {"label":"<?php echo __( 'Charges', 'nivaro' ); ?>","url":"#"} /-->
						<!-- wp:navigation-link {"label":"<?php echo __( 'FAQ', 'nivaro' ); ?>","url":"#"} /-->

						<!-- /wp:navigation -->
					</div>
					<!-- /wp:column -->

					<!-- wp:column {"style":{"spacing":{"blockGap":"var:preset|spacing|30"}}} -->
					<div class="wp-block-column">
						<!-- wp:paragraph {"style":{"typography":{"fontStyle":"normal","fontWeight":"500"}},"fontSize":"large"} -->
						<p class="has-large-font-size" style="font-style:normal;font-weight:500">
							<?php echo __( 'Community', 'nivaro' ); ?></p>
						<!-- /wp:paragraph -->

						<!-- wp:navigation {"overlayMenu":"never","style":{"typography":{"fontStyle":"normal","fontWeight":"400"}},"fontSize":"medium","fontFamily":"inter","layout":{"type":"flex","orientation":"vertical"}} -->

						<!-- wp:navigation-link {"label":"<?php echo __( 'Community', 'nivaro' ); ?>","url":"#"} /-->
						<!-- wp:navigation-link {"label":"<?php echo __( 'Meetups', 'nivaro' ); ?>","url":"#"} /-->
						<!-- wp:navigation-link {"label":"<?php echo __( 'Site Awards', 'nivaro' ); ?>","url":"#"} /-->

						<!-- /wp:navigation -->
					</div>
					<!-- /wp:column -->
				</div>
				<!-- /wp:columns -->
			</div>
			<!-- /wp:column -->
		</div>
		<!-- /wp:columns -->

		<!-- wp:group {"align":"wide","style":{"spacing":{"padding":{"top":"var:preset|spacing|30","bottom":"var:preset|spacing|30"}}},"layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between"}} -->
		<div class="wp-block-group alignwide"
			style="padding-top:var(--wp--preset--spacing--30);padding-bottom:var(--wp--preset--spacing--30)">
			<!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|base"},":hover":{"color":{"text":"var:preset|color|base"}}}}}} -->
			<p class="has-link-color">
				<?php
						printf(
							__( '© 2021-2024 %1$s. All Rights Reserved.', 'nivaro' ),
							'<a href="#">Nivaro</a>'
						);
						?>
			</p>
			<!-- /wp:paragraph -->

			<!-- wp:navigation {"overlayMenu":"never","style":{"typography":{"fontStyle":"normal","fontWeight":"400"}},"fontSize":"medium","fontFamily":"inter","layout":{"type":"flex","orientation":"horizontal"}} -->

			<!-- wp:navigation-link {"label":"<?php echo __( 'Licenses', 'nivaro' ); ?>","url":"#"} /-->
			<!-- wp:navigation-link {"label":"<?php echo __( 'Terms of Service', 'nivaro' ); ?>","url":"#"} /-->
			<!-- wp:navigation-link {"label":"<?php echo __( 'Privacy Policy', 'nivaro' ); ?>","url":"#"} /-->

			<!-- /wp:navigation -->
		</div>
		<!-- /wp:group -->
	</footer>
	<!-- /wp:group -->
</div>
<!-- /wp:group -->
