<?php
/**
 * 404 section block pattern
 *
 * @package landing-page-block
 *
 * @link https://core.trac.wordpress.org/ticket/54272
 *
 * @since 1.0.1
 */

return array(
    'title'      => esc_html__('404 section', 'landing-page-block'),
    'categories' => array( 'landing-page-block-patterns' ),
    'inserter'   => true,
    'content'    => '
	<!-- wp:cover {"url":"http://localhost/wordpress/landing-page-block/wp-content/themes/landing-page-block/assets/images/StockSnap_PY7EWSKYR3.jpg","id":164,"dimRatio":80,"overlayColor":"primary","contentPosition":"center center","tagName":"main","className":"hero","style":{"spacing":{"padding":{"top":"0","right":"0","bottom":"0","left":"0"}}}} -->
<main class="wp-block-cover hero" style="padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><span aria-hidden="true" class="wp-block-cover__background has-primary-background-color has-background-dim-80 has-background-dim"></span><img class="wp-block-cover__image-background wp-image-164" alt="" src="http://localhost/wordpress/landing-page-block/wp-content/themes/landing-page-block/assets/images/StockSnap_PY7EWSKYR3.jpg" data-object-fit="cover"/><div class="wp-block-cover__inner-container"><!-- wp:group {"layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between"}} -->
<div class="wp-block-group"><!-- wp:site-logo {"width":180,"shouldSyncIcon":false,"className":"is-style-default"} /--></div>
<!-- /wp:group -->

<!-- wp:group {"className":"header-area","layout":{"type":"constrained","justifyContent":"center"}} -->
<div class="wp-block-group header-area"><!-- wp:group {"layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between"}} -->
<div class="wp-block-group"><!-- wp:group {"style":{"spacing":{"padding":{"top":"0","right":"0","bottom":"0","left":"var:preset|spacing|80"}},"layout":{"selfStretch":"fixed","flexSize":""}},"layout":{"type":"flex","flexWrap":"wrap","justifyContent":"left","orientation":"vertical"}} -->
<div class="wp-block-group" style="padding-top:0;padding-right:0;padding-bottom:0;padding-left:var(--wp--preset--spacing--80)"><!-- wp:heading {"level":1,"style":{"typography":{"fontStyle":"normal","fontWeight":"700"},"spacing":{"padding":{"left":"0"}},"layout":{"selfStretch":"fit"}},"textColor":"quaternary","className":"is-style-landing-page-block-hero-text is-style-landing-page-block-hero-heading","fontSize":"xx-large","fontFamily":"Montserrat"} -->
<h1 class="wp-block-heading is-style-landing-page-block-hero-text is-style-landing-page-block-hero-heading has-quaternary-color has-text-color has-montserrat-font-family has-xx-large-font-size" style="padding-left:0;font-style:normal;font-weight:700">404</h1>
<!-- /wp:heading -->

<!-- wp:heading {"level":1,"style":{"spacing":{"padding":{"left":"var:preset|spacing|40"}}},"textColor":"secondary","fontSize":"x-large","fontFamily":"Montserrat"} -->
<h1 class="wp-block-heading has-secondary-color has-text-color has-montserrat-font-family has-x-large-font-size" style="padding-left:var(--wp--preset--spacing--40)">Not Found</h1>
<!-- /wp:heading -->

<!-- wp:social-links {"iconColor":"white","iconColorValue":"#ffffff","style":{"spacing":{"padding":{"top":"var:preset|spacing|30","right":"var:preset|spacing|30","bottom":"var:preset|spacing|30","left":"var:preset|spacing|30"}}},"className":"is-style-logos-only","layout":{"type":"flex","flexWrap":"wrap"}} -->
<ul class="wp-block-social-links has-icon-color is-style-logos-only" style="padding-top:var(--wp--preset--spacing--30);padding-right:var(--wp--preset--spacing--30);padding-bottom:var(--wp--preset--spacing--30);padding-left:var(--wp--preset--spacing--30)"><!-- wp:social-link {"url":"facebook.com","service":"facebook"} /-->

<!-- wp:social-link {"url":"twitter.com","service":"twitter"} /-->

<!-- wp:social-link {"url":"instagram.com","service":"instagram"} /-->

<!-- wp:social-link {"url":"dribble.com","service":"dribbble"} /--></ul>
<!-- /wp:social-links --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div></main>
<!-- /wp:cover -->
	',
);
