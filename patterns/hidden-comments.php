<?php

/**
 * Title: Comments
 * Slug: nivaro/hidden-comments
 * Inserter: no
 */
?>

<!-- wp:comments {"style":{"spacing":{"margin":{"top":"var:preset|spacing|40"}}}} -->
<div class="wp-block-comments" style="margin-top:var(--wp--preset--spacing--40)"><!-- wp:group {"metadata":{"name":"container"},"style":{"spacing":{"blockGap":"var:preset|spacing|30"}},"layout":{"type":"constrained"}} -->
    <div class="wp-block-group"><!-- wp:comments-title {"level":3,"fontSize":"3x-large"} /-->

        <!-- wp:comment-template -->
        <!-- wp:columns {"style":{"spacing":{"blockGap":{"top":"var:preset|spacing|20","left":"var:preset|spacing|20"}}}} -->
        <div class="wp-block-columns"><!-- wp:column {"width":"40px"} -->
            <div class="wp-block-column" style="flex-basis:40px"><!-- wp:avatar {"size":40,"style":{"border":{"radius":"20px"}}} /--></div>
            <!-- /wp:column -->

            <!-- wp:column {"style":{"spacing":{"blockGap":"var:preset|spacing|20"}}} -->
            <div class="wp-block-column"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|x-small"}},"layout":{"type":"constrained"}} -->
                <div class="wp-block-group"><!-- wp:group {"layout":{"type":"flex","justifyContent":"space-between"}} -->
                    <div class="wp-block-group"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|20"}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
                        <div class="wp-block-group"><!-- wp:comment-author-name {"style":{"typography":{"fontStyle":"normal","fontWeight":"500"}}} /-->

                            <!-- wp:comment-date {"style":{"elements":{"link":{"color":{"text":"var:preset|color|secondary"}}}},"textColor":"secondary","fontSize":"small"} /-->
                        </div>
                        <!-- /wp:group -->

                        <!-- wp:comment-edit-link {"style":{"elements":{"link":{"color":{"text":"var:preset|color|primary"},":hover":{"color":{"text":"var:preset|color|primary-700"}}}}},"fontSize":"small"} /-->
                    </div>
                    <!-- /wp:group -->
                </div>
                <!-- /wp:group -->

                <!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|10","bottom":"var:preset|spacing|10","left":"var:preset|spacing|20","right":"var:preset|spacing|20"}},"border":{"radius":"6px"}},"backgroundColor":"tertiary","layout":{"type":"constrained"}} -->
                <div class="wp-block-group has-tertiary-background-color has-background" style="border-radius:6px;padding-top:var(--wp--preset--spacing--10);padding-right:var(--wp--preset--spacing--20);padding-bottom:var(--wp--preset--spacing--10);padding-left:var(--wp--preset--spacing--20)"><!-- wp:comment-content {"style":{"elements":{"link":{"color":{"text":"var:preset|color|main"}}}},"textColor":"main"} /--></div>
                <!-- /wp:group -->

                <!-- wp:comment-reply-link {"style":{"elements":{"link":{"color":{"text":"var:preset|color|primary"}}}},"fontSize":"small"} /-->
            </div>
            <!-- /wp:column -->
        </div>
        <!-- /wp:columns -->
        <!-- /wp:comment-template -->

        <!-- wp:group {"layout":{"type":"constrained"}} -->
        <div class="wp-block-group"><!-- wp:comments-pagination {"paginationArrow":"arrow","style":{"elements":{"link":{"color":{"text":"var:preset|color|secondary-600"}}}},"textColor":"secondary-600","layout":{"type":"flex","justifyContent":"space-between"}} -->
            <!-- wp:comments-pagination-previous /-->

            <!-- wp:comments-pagination-numbers {"style":{"typography":{"letterSpacing":"5px"}}} /-->

            <!-- wp:comments-pagination-next /-->
            <!-- /wp:comments-pagination -->
        </div>
        <!-- /wp:group -->

        <!-- wp:post-comments-form /-->
    </div>
    <!-- /wp:group -->
</div>
<!-- /wp:comments -->