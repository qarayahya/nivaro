<?php

/**
 * Title: Index template
 * Slug: nivaro/template-index
 * Template Types: archive, category, tag, author, date
 * Viewport width: 1400
 * Inserter: no
 */
?>

<!-- wp:group {"tagName":"main","metadata":{"categories":["nivaro/page"],"patternName":"nivaro/page-services","name":"Main"},"align":"full","style":{"spacing":{"blockGap":"var:preset|spacing|60"}},"layout":{"type":"constrained"}} -->
<main class="wp-block-group alignfull">
    <!-- wp:group {"metadata":{"name":"Headline","categories":["nivaro/stats"],"patternName":"nivaro/stats-4-column"},"align":"full","style":{"spacing":{"blockGap":"0","padding":{"top":"var:preset|spacing|30","bottom":"var:preset|spacing|30"}}},"layout":{"type":"constrained"}} -->
    <div class="wp-block-group alignfull"
        style="padding-top:var(--wp--preset--spacing--30);padding-bottom:var(--wp--preset--spacing--30)">
        <!-- wp:spacer {"height":"50px"} -->
        <div style="height:50px" aria-hidden="true" class="wp-block-spacer"></div>
        <!-- /wp:spacer -->

        <!-- wp:columns {"align":"wide","style":{"spacing":{"blockGap":{"top":"0","left":"0"},"padding":{"top":"0"}}}} -->
        <div class="wp-block-columns alignwide" style="padding-top:0">
            <!-- wp:column {"width":"15%"} -->
            <div class="wp-block-column" style="flex-basis:15%"></div>
            <!-- /wp:column -->

            <!-- wp:column {"width":"70%","style":{"spacing":{"blockGap":"var:preset|spacing|20"}}} -->
            <div class="wp-block-column" style="flex-basis:70%">
                <!-- wp:heading {"textAlign":"center","level":1,"className":"wp-block-heading"} -->
                <h1 class="wp-block-heading has-text-align-center">
                    <?php echo __( 'Discover The Latest News, Stories & Insights', 'nivaro' ); ?></h1>
                <!-- /wp:heading -->

                <!-- wp:paragraph {"align":"center","style":{"elements":{"link":{"color":{"text":"var:preset|color|content-secondary"}}}},"textColor":"content-secondary"} -->
                <p class="has-text-align-center has-content-secondary-color has-text-color has-link-color">
                    <?php echo __( 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Facilis laudantium inventore perspiciatis ex quam aspernatur nulla reprehenderit', 'nivaro' ); ?>
                </p>
                <!-- /wp:paragraph -->
            </div>
            <!-- /wp:column -->

            <!-- wp:column {"width":"15%"} -->
            <div class="wp-block-column" style="flex-basis:15%"></div>
            <!-- /wp:column -->
        </div>
        <!-- /wp:columns -->
    </div>
    <!-- /wp:group -->

    <!-- wp:group {"tagName":"section","metadata":{"name":"Posts","categories":["posts"],"patternName":"nivaro/posts-3-column"},"align":"full","style":{"spacing":{"blockGap":"1.1rem","padding":{"top":"var:preset|spacing|30","bottom":"var:preset|spacing|30"}}},"layout":{"type":"constrained"}} -->
    <section class="wp-block-group alignfull"
        style="padding-top:var(--wp--preset--spacing--30);padding-bottom:var(--wp--preset--spacing--30)">
        <!-- wp:query {"queryId":14,"query":{"perPage":"6","pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false},"align":"wide"} -->
        <div class="wp-block-query alignwide">
            <!-- wp:post-template {"style":{"spacing":{"blockGap":"var:preset|spacing|30"}},"fontSize":"small","layout":{"type":"grid","columnCount":3}} -->
            <!-- wp:group {"align":"wide","style":{"spacing":{"blockGap":"var:preset|spacing|20","margin":{"bottom":"var:preset|spacing|40"}}},"layout":{"type":"constrained"}} -->
            <div class="wp-block-group alignwide" style="margin-bottom:var(--wp--preset--spacing--40)">
                <!-- wp:group {"align":"wide","layout":{"type":"constrained"}} -->
                <div class="wp-block-group alignwide">
                    <!-- wp:cover {"useFeaturedImage":true,"dimRatio":0,"customOverlayColor":"#afb2b6","isUserOverlayColor":true,"contentPosition":"top right","isDark":false,"style":{"dimensions":{"aspectRatio":"4/3"},"border":{"radius":"12px"},"spacing":{"padding":{"top":"var:preset|spacing|20","bottom":"var:preset|spacing|20","left":"var:preset|spacing|20","right":"var:preset|spacing|20"}}},"layout":{"type":"constrained"}} -->
                    <div class="wp-block-cover is-light has-custom-content-position is-position-top-right"
                        style="border-radius:12px;padding-top:var(--wp--preset--spacing--20);padding-right:var(--wp--preset--spacing--20);padding-bottom:var(--wp--preset--spacing--20);padding-left:var(--wp--preset--spacing--20)">
                        <span aria-hidden="true"
                            class="wp-block-cover__background has-background-dim-0 has-background-dim"
                            style="background-color:#afb2b6"></span>
                        <div class="wp-block-cover__inner-container">
                            <!-- wp:group {"className":"glass-filter-2","style":{"spacing":{"padding":{"top":"var:preset|spacing|10","bottom":"var:preset|spacing|10","left":"var:preset|spacing|20","right":"var:preset|spacing|20"}},"border":{"radius":"99px"},"color":{"background":"#0000000f"}},"layout":{"type":"constrained"}} -->
                            <div class="wp-block-group glass-filter-2 has-background"
                                style="border-radius:99px;background-color:#0000000f;padding-top:var(--wp--preset--spacing--10);padding-right:var(--wp--preset--spacing--20);padding-bottom:var(--wp--preset--spacing--10);padding-left:var(--wp--preset--spacing--20)">
                                <!-- wp:post-date {"style":{"elements":{"link":{"color":{"text":"var:preset|color|base"}}}},"textColor":"base"} /-->
                            </div>
                            <!-- /wp:group -->
                        </div>
                    </div>
                    <!-- /wp:cover -->

                    <!-- wp:post-terms {"term":"category","fontSize":"small"} /-->
                </div>
                <!-- /wp:group -->

                <!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|20"}},"layout":{"type":"constrained","justifyContent":"left"}} -->
                <div class="wp-block-group">
                    <!-- wp:post-title {"isLink":true,"style":{"elements":{"link":{"color":{"text":"#000000"}}}},"fontSize":"large"} /-->
                </div>
                <!-- /wp:group -->
            </div>
            <!-- /wp:group -->
            <!-- /wp:post-template -->

            <!-- wp:spacer {"height":"50px"} -->
            <div style="height:50px" aria-hidden="true" class="wp-block-spacer"></div>
            <!-- /wp:spacer -->

            <!-- wp:query-no-results -->
            <!-- wp:paragraph {"align":"center","placeholder":"Add text or blocks that will display when a query returns no results."} -->
            <p class="has-text-align-center"><?php echo __( 'No posts found!', 'nivaro' ); ?></p>
            <!-- /wp:paragraph -->
            <!-- /wp:query-no-results -->

            <!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"center"}} -->
            <div class="wp-block-group">
                <!-- wp:query-pagination {"paginationArrow":"arrow","align":"center","style":{"elements":{"link":{"color":{"text":"var:preset|color|content-secondary"}}}},"textColor":"content-secondary","layout":{"type":"flex","justifyContent":"center"}} -->
                <!-- wp:query-pagination-previous /-->

                <!-- wp:query-pagination-numbers /-->

                <!-- wp:query-pagination-next /-->
                <!-- /wp:query-pagination -->
            </div>
            <!-- /wp:group -->
        </div>
        <!-- /wp:query -->
    </section>
    <!-- /wp:group -->
</main>
<!-- /wp:group -->