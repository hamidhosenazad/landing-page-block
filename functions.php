<?php
/**
 * Functions and definitions
 *
 * @package landing-page-block
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @since 1.0.0
 */

/**
* Enqueue the style files.
*
* @since 1.0.0
*
* @return mixed
*/
function landing_page_block_styles()
{
    wp_enqueue_style(
        'landing-page-block-style',
        get_stylesheet_uri(),
        '',
        '1.0.0'
    );
	wp_enqueue_style( 'fontawesome', get_stylesheet_directory_uri() . '/assets/css/font_awesome/all.css', array(), 'all' );
	
}	
add_action('wp_enqueue_scripts', 'landing_page_block_styles');

/**
 * Register block styles
 *
 * @since 1.0.0
 *
 * @return void
 */
function landing_page_block_register_block_styles() {

	register_block_style( // phpcs:ignore WPThemeReview.PluginTerritory.ForbiddenFunctions.editor_blocks_register_block_style
		'core/button',
		array(
			'name'  => 'landing-page-block-crimson-flat-button',
			'label' => __( 'Flat crimson button', 'landing-page-block' ),
		)
	);

	register_block_style( // phpcs:ignore WPThemeReview.PluginTerritory.ForbiddenFunctions.editor_blocks_register_block_style
		'core/button',
		array(
			'name'  => 'landing-page-block-crimson-round-button',
			'label' => __( 'Round crimson button', 'landing-page-block' ),
		)
	);

	register_block_style( // phpcs:ignore WPThemeReview.PluginTerritory.ForbiddenFunctions.editor_blocks_register_block_style
		'core/button',
		array(
			'name'  => 'landing-page-block-white-flat-button',
			'label' => __( 'Flat white button', 'landing-page-block' ),
		)
	);

	register_block_style( // phpcs:ignore WPThemeReview.PluginTerritory.ForbiddenFunctions.editor_blocks_register_block_style
		'core/button',
		array(
			'name'  => 'landing-page-block-nav-flat-button',
			'label' => __( 'Nav flat button', 'landing-page-block' ),
		)
	);

	register_block_style( // phpcs:ignore WPThemeReview.PluginTerritory.ForbiddenFunctions.editor_blocks_register_block_style
		'core/button',
		array(
			'name'  => 'landing-page-block-sticky-button',
			'label' => __( 'Sticky button', 'landing-page-block' ),
		)
	);

	register_block_style( // phpcs:ignore WPThemeReview.PluginTerritory.ForbiddenFunctions.editor_blocks_register_block_style
		'core/heading',
		array(
			'name'  => 'landing-page-block-hero-heading',
			'label' => __( 'Hero heading', 'landing-page-block' ),
		)
	);

	register_block_style( // phpcs:ignore WPThemeReview.PluginTerritory.ForbiddenFunctions.editor_blocks_register_block_style
		'core/heading',
		array(
			'name'  => 'landing-page-block-footer-heading',
			'label' => __( 'Footer heading', 'landing-page-block' ),
		)
	);

	register_block_style( // phpcs:ignore WPThemeReview.PluginTerritory.ForbiddenFunctions.editor_blocks_register_block_style
		'core/heading',
		array(
			'name'  => 'landing-page-block-feature-heading',
			'label' => __( 'Feature heading', 'landing-page-block' ),
		)
	);
}
add_action( 'init', 'landing_page_block_register_block_styles' );


/**
 * Add theme support for block styles.
 *
 * @since 1.0.0
 *
 * @return void
 */
function landing_page_block_setup()
{
    add_theme_support('wp-block-styles');
    add_editor_style('style.css');
}
add_action('after_setup_theme', 'landing_page_block_setup');

/**
 * Registers block patterns.
 *
 * @since 1.0.0
 *
 * @return void
 */
function landing_page_block_register_block_patterns()
{
    // Array of block pattern names.
    $block_patterns = array(
        'hero-image',
        '404-section',
		'about-section'
    );

    foreach ($block_patterns as $block_pattern) {
        $pattern_file = get_theme_file_path('block-patterns/' . $block_pattern . '.php');
        register_block_pattern(
            'landing-page-block/' . $block_pattern,
            include $pattern_file
        );
    }
}
add_action('init', 'landing_page_block_register_block_patterns', 9);