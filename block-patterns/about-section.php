<?php
/**
 * Hero image block pattern
 *
 * @package landing-page-block
 *
 * @link https://core.trac.wordpress.org/ticket/54272
 *
 * @since 1.0.1
 */

return array(
    'title'      => esc_html__('About section', 'landing-page-block'),
    'categories' => array( 'landing-page-block-patterns' ),
    'inserter'   => true,
    'content'    => '
	<!-- wp:group {"layout":{"type":"constrained","justifyContent":"center"}} -->
<div id="about" class="wp-block-group">
    <!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap","orientation":"horizontal","justifyContent":"left"}} -->
    <div class="wp-block-group"><!-- wp:spacer -->
        <div style="height:100px" aria-hidden="true" class="wp-block-spacer"></div>
        <!-- /wp:spacer -->

        <!-- wp:paragraph {"style":{"typography":{"textTransform":"uppercase"}},"textColor":"quaternary","fontSize":"medium"} -->
        <p class="has-quaternary-color has-text-color has-medium-font-size" style="text-transform:uppercase">Who we are
        </p>
        <!-- /wp:paragraph -->
    </div>
    <!-- /wp:group -->

    <!-- wp:group {"layout":{"type":"flex","orientation":"vertical"}} -->
    <div class="wp-block-group">
        <!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap","verticalAlignment":"top"}} -->
        <div class="wp-block-group">
            <!-- wp:group {"style":{"layout":{"selfStretch":"fixed","flexSize":"50%"}},"layout":{"type":"flex","orientation":"vertical","flexWrap":"wrap","justifyContent":"left"}} -->
            <div class="wp-block-group"><!-- wp:heading {"fontSize":"x-large","fontFamily":"Montserrat"} -->
                <h2 class="wp-block-heading has-montserrat-font-family has-x-large-font-size">LP is a branding agency
                    based in somewhere. We design thoughtful digital experiences and beautiful brand aesthetics.<br>
                </h2>
                <!-- /wp:heading -->

                <!-- wp:paragraph {"style":{"typography":{"lineHeight":"1"}},"textColor":"tertiary","fontSize":"large"} -->
                <p class="has-tertiary-color has-text-color has-large-font-size" style="line-height:1">Non amet
                    venenatis dolor id pellentesque mattis erat. Fermentum nunc, tincidunt sit elit amet scelerisque. Ac
                    quisque quis eu nibh rutrum risus tellus egestas neque. Vestibulum ante ipsum primis in faucibus
                    orci luctus et.</p>
                <!-- /wp:paragraph -->
            </div>
            <!-- /wp:group -->

            <!-- wp:image {"id":608,"width":645,"height":430,"sizeSlug":"full","linkDestination":"none","className":"is-style-default"} -->
            <figure class="wp-block-image size-full is-resized is-style-default"><img
                    src="' . esc_url(get_theme_file_uri('assets/images/business-presenting_XDAR6MIG75.jpg')) . '" alt=""
                    class="wp-image-608" width="645" height="430" /></figure>
            <!-- /wp:image -->
        </div>
        <!-- /wp:group -->

        <!-- wp:spacer -->
        <div style="height:100px" aria-hidden="true" class="wp-block-spacer"></div>
        <!-- /wp:spacer -->
    </div>
    <!-- /wp:group -->

    <!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap","orientation":"horizontal","justifyContent":"space-between"}} -->
    <div class="wp-block-group">
        <!-- wp:group {"style":{"layout":{"selfStretch":"fixed","flexSize":"50%"}},"layout":{"type":"flex","orientation":"vertical"}} -->
        <div class="wp-block-group">
            <!-- wp:group {"style":{"layout":{"selfStretch":"fixed","flexSize":"50%"}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
            <div class="wp-block-group">
                <!-- wp:outermost/icon-block {"iconName":"wordpress-blockDefault","iconColor":"quaternary","iconColorValue":"#d9083c"} -->
                <div class="wp-block-outermost-icon-block">
                    <div class="icon-container has-icon-color has-quaternary-color" style="color:#d9083c;width:48px">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" aria-hidden="true">
                            <path
                                d="M19 8h-1V6h-5v2h-2V6H6v2H5c-1.1 0-2 .9-2 2v8c0 1.1.9 2 2 2h14c1.1 0 2-.9 2-2v-8c0-1.1-.9-2-2-2zm.5 10c0 .3-.2.5-.5.5H5c-.3 0-.5-.2-.5-.5v-8c0-.3.2-.5.5-.5h14c.3 0 .5.2.5.5v8z">
                            </path>
                        </svg></div>
                </div>
                <!-- /wp:outermost/icon-block -->

                <!-- wp:heading {"className":"is-style-landing-page-block-feature-heading","fontSize":"x-large","fontFamily":"Montserrat"} -->
                <h2
                    class="wp-block-heading is-style-landing-page-block-feature-heading has-montserrat-font-family has-x-large-font-size">
                    Define<br></h2>
                <!-- /wp:heading -->
            </div>
            <!-- /wp:group -->

            <!-- wp:group {"style":{"layout":{"selfStretch":"fixed","flexSize":"50%"}},"layout":{"type":"flex","orientation":"vertical"}} -->
            <div class="wp-block-group">
                <!-- wp:paragraph {"style":{"typography":{"lineHeight":"1.5"}},"textColor":"tertiary","fontSize":"medium"} -->
                <p class="has-tertiary-color has-text-color has-medium-font-size" style="line-height:1.5">Deserunt rerum
                    perspiciatis quaerat quam numquam assumenda neque. Quis dolores totam voluptatibus molestiae non.
                    Quae exercitationem cum numquam repudiandae. Beatae eum quae. Ut ex unde rem quod ipsum consequatur.
                    blanditiis temporibus pariatur voluptatibus molestiae.</p>
                <!-- /wp:paragraph -->
            </div>
            <!-- /wp:group -->
        </div>
        <!-- /wp:group -->

        <!-- wp:group {"style":{"layout":{"selfStretch":"fixed","flexSize":"50%"}},"layout":{"type":"flex","orientation":"vertical"}} -->
        <div class="wp-block-group">
            <!-- wp:group {"style":{"layout":{"selfStretch":"fixed","flexSize":"50%"}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
            <div class="wp-block-group">
                <!-- wp:outermost/icon-block {"iconName":"wordpress-cloud","iconColor":"quaternary","iconColorValue":"#d9083c"} -->
                <div class="wp-block-outermost-icon-block">
                    <div class="icon-container has-icon-color has-quaternary-color" style="color:#d9083c;width:48px">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" aria-hidden="true">
                            <path
                                d="M17.3 10.1c0-2.5-2.1-4.4-4.8-4.4-2.2 0-4.1 1.4-4.6 3.3h-.2C5.7 9 4 10.7 4 12.8c0 2.1 1.7 3.8 3.7 3.8h9c1.8 0 3.2-1.5 3.2-3.3.1-1.6-1.1-2.9-2.6-3.2zm-.5 5.1h-9c-1.2 0-2.2-1.1-2.2-2.3s1-2.4 2.2-2.4h1.3l.3-1.1c.4-1.3 1.7-2.2 3.2-2.2 1.8 0 3.3 1.3 3.3 2.9v1.3l1.3.2c.8.1 1.4.9 1.4 1.8-.1 1-.9 1.8-1.8 1.8z">
                            </path>
                        </svg></div>
                </div>
                <!-- /wp:outermost/icon-block -->

                <!-- wp:heading {"className":"is-style-landing-page-block-feature-heading","fontSize":"x-large","fontFamily":"Montserrat"} -->
                <h2
                    class="wp-block-heading is-style-landing-page-block-feature-heading has-montserrat-font-family has-x-large-font-size">
                    Design<br></h2>
                <!-- /wp:heading -->
            </div>
            <!-- /wp:group -->

            <!-- wp:group {"style":{"layout":{"selfStretch":"fixed","flexSize":"50%"}},"layout":{"type":"flex","orientation":"vertical"}} -->
            <div class="wp-block-group">
                <!-- wp:paragraph {"style":{"typography":{"lineHeight":"1.5"}},"textColor":"tertiary","fontSize":"medium"} -->
                <p class="has-tertiary-color has-text-color has-medium-font-size" style="line-height:1.5">Deserunt rerum
                    perspiciatis quaerat quam numquam assumenda neque. Quis dolores totam voluptatibus molestiae non.
                    Quae exercitationem cum numquam repudiandae. Beatae eum quae. Ut ex unde rem quod ipsum consequatur.
                    blanditiis temporibus pariatur voluptatibus molestiae.</p>
                <!-- /wp:paragraph -->
            </div>
            <!-- /wp:group -->
        </div>
        <!-- /wp:group -->
    </div>
    <!-- /wp:group -->

    <!-- wp:spacer -->
    <div style="height:100px" aria-hidden="true" class="wp-block-spacer"></div>
    <!-- /wp:spacer -->

    <!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap","orientation":"horizontal","justifyContent":"space-between"}} -->
    <div class="wp-block-group">
        <!-- wp:group {"style":{"layout":{"selfStretch":"fixed","flexSize":"50%"}},"layout":{"type":"flex","orientation":"vertical"}} -->
        <div class="wp-block-group">
            <!-- wp:group {"style":{"layout":{"selfStretch":"fixed","flexSize":"50%"}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
            <div class="wp-block-group">
                <!-- wp:outermost/icon-block {"iconName":"wordpress-cover","iconColor":"quaternary","iconColorValue":"#d9083c"} -->
                <div class="wp-block-outermost-icon-block">
                    <div class="icon-container has-icon-color has-quaternary-color" style="color:#d9083c;width:48px">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" aria-hidden="true">
                            <path
                                d="M18.7 3H5.3C4 3 3 4 3 5.3v13.4C3 20 4 21 5.3 21h13.4c1.3 0 2.3-1 2.3-2.3V5.3C21 4 20 3 18.7 3zm.8 15.7c0 .4-.4.8-.8.8H5.3c-.4 0-.8-.4-.8-.8V5.3c0-.4.4-.8.8-.8h6.2v8.9l2.5-3.1 2.5 3.1V4.5h2.2c.4 0 .8.4.8.8v13.4z">
                            </path>
                        </svg></div>
                </div>
                <!-- /wp:outermost/icon-block -->

                <!-- wp:heading {"className":"is-style-landing-page-block-feature-heading","fontSize":"x-large","fontFamily":"Montserrat"} -->
                <h2
                    class="wp-block-heading is-style-landing-page-block-feature-heading has-montserrat-font-family has-x-large-font-size">
                    Build<br></h2>
                <!-- /wp:heading -->
            </div>
            <!-- /wp:group -->

            <!-- wp:group {"style":{"layout":{"selfStretch":"fixed","flexSize":"50%"}},"layout":{"type":"flex","orientation":"vertical"}} -->
            <div class="wp-block-group">
                <!-- wp:paragraph {"style":{"typography":{"lineHeight":"1.5"}},"textColor":"tertiary","fontSize":"medium"} -->
                <p class="has-tertiary-color has-text-color has-medium-font-size" style="line-height:1.5">Deserunt rerum
                    perspiciatis quaerat quam numquam assumenda neque. Quis dolores totam voluptatibus molestiae non.
                    Quae exercitationem cum numquam repudiandae. Beatae eum quae. Ut ex unde rem quod ipsum consequatur.
                    blanditiis temporibus pariatur voluptatibus molestiae.</p>
                <!-- /wp:paragraph -->
            </div>
            <!-- /wp:group -->
        </div>
        <!-- /wp:group -->

        <!-- wp:group {"style":{"layout":{"selfStretch":"fixed","flexSize":"50%"}},"layout":{"type":"flex","orientation":"vertical"}} -->
        <div class="wp-block-group">
            <!-- wp:group {"style":{"layout":{"selfStretch":"fixed","flexSize":"50%"}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
            <div class="wp-block-group">
                <!-- wp:outermost/icon-block {"iconName":"wordpress-codepen","iconColor":"quaternary","iconColorValue":"#d9083c"} -->
                <div class="wp-block-outermost-icon-block">
                    <div class="icon-container has-icon-color has-quaternary-color" style="color:#d9083c;width:48px">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" aria-hidden="true">
                            <path
                                d="M22.016,8.84c-0.002-0.013-0.005-0.025-0.007-0.037c-0.005-0.025-0.008-0.048-0.015-0.072 c-0.003-0.015-0.01-0.028-0.013-0.042c-0.008-0.02-0.015-0.04-0.023-0.062c-0.007-0.015-0.013-0.028-0.02-0.042 c-0.008-0.02-0.018-0.037-0.03-0.057c-0.007-0.013-0.017-0.027-0.025-0.038c-0.012-0.018-0.023-0.035-0.035-0.052 c-0.01-0.013-0.02-0.025-0.03-0.037c-0.015-0.017-0.028-0.032-0.043-0.045c-0.01-0.012-0.022-0.023-0.035-0.035 c-0.015-0.015-0.032-0.028-0.048-0.04c-0.012-0.01-0.025-0.02-0.037-0.03c-0.005-0.003-0.01-0.008-0.015-0.012l-9.161-6.096 c-0.289-0.192-0.666-0.192-0.955,0L2.359,8.237C2.354,8.24,2.349,8.245,2.344,8.249L2.306,8.277 c-0.017,0.013-0.033,0.027-0.048,0.04C2.246,8.331,2.234,8.342,2.222,8.352c-0.015,0.015-0.028,0.03-0.042,0.047 c-0.012,0.013-0.022,0.023-0.03,0.037C2.139,8.453,2.125,8.471,2.115,8.488C2.107,8.501,2.099,8.514,2.09,8.526 C2.079,8.548,2.069,8.565,2.06,8.585C2.054,8.6,2.047,8.613,2.04,8.626C2.032,8.648,2.025,8.67,2.019,8.69 c-0.005,0.013-0.01,0.027-0.013,0.042C1.999,8.755,1.995,8.778,1.99,8.803C1.989,8.817,1.985,8.828,1.984,8.84 C1.978,8.879,1.975,8.915,1.975,8.954v6.093c0,0.037,0.003,0.075,0.008,0.112c0.002,0.012,0.005,0.025,0.007,0.038 c0.005,0.023,0.008,0.047,0.015,0.072c0.003,0.015,0.008,0.028,0.013,0.04c0.007,0.022,0.013,0.042,0.022,0.063 c0.007,0.015,0.013,0.028,0.02,0.04c0.008,0.02,0.018,0.038,0.03,0.058c0.007,0.013,0.015,0.027,0.025,0.038 c0.012,0.018,0.023,0.035,0.035,0.052c0.01,0.013,0.02,0.025,0.03,0.037c0.013,0.015,0.028,0.032,0.042,0.045 c0.012,0.012,0.023,0.023,0.035,0.035c0.015,0.013,0.032,0.028,0.048,0.04l0.038,0.03c0.005,0.003,0.01,0.007,0.013,0.01 l9.163,6.095C11.668,21.953,11.833,22,12,22c0.167,0,0.332-0.047,0.478-0.144l9.163-6.095l0.015-0.01 c0.013-0.01,0.027-0.02,0.037-0.03c0.018-0.013,0.035-0.028,0.048-0.04c0.013-0.012,0.025-0.023,0.035-0.035 c0.017-0.015,0.03-0.032,0.043-0.045c0.01-0.013,0.02-0.025,0.03-0.037c0.013-0.018,0.025-0.035,0.035-0.052 c0.008-0.013,0.018-0.027,0.025-0.038c0.012-0.02,0.022-0.038,0.03-0.058c0.007-0.013,0.013-0.027,0.02-0.04 c0.008-0.022,0.015-0.042,0.023-0.063c0.003-0.013,0.01-0.027,0.013-0.04c0.007-0.025,0.01-0.048,0.015-0.072 c0.002-0.013,0.005-0.027,0.007-0.037c0.003-0.042,0.007-0.079,0.007-0.117V8.954C22.025,8.915,22.022,8.879,22.016,8.84z M12.862,4.464l6.751,4.49l-3.016,2.013l-3.735-2.492V4.464z M11.138,4.464v4.009l-3.735,2.494L4.389,8.954L11.138,4.464z M3.699,10.562L5.853,12l-2.155,1.438V10.562z M11.138,19.536l-6.749-4.491l3.015-2.011l3.735,2.492V19.536z M12,14.035L8.953,12 L12,9.966L15.047,12L12,14.035z M12.862,19.536v-4.009l3.735-2.492l3.016,2.011L12.862,19.536z M20.303,13.438L18.147,12 l2.156-1.438L20.303,13.438z">
                            </path>
                        </svg></div>
                </div>
                <!-- /wp:outermost/icon-block -->

                <!-- wp:heading {"className":"is-style-landing-page-block-feature-heading","fontSize":"x-large","fontFamily":"Montserrat"} -->
                <h2
                    class="wp-block-heading is-style-landing-page-block-feature-heading has-montserrat-font-family has-x-large-font-size">
                    Launch</h2>
                <!-- /wp:heading -->
            </div>
            <!-- /wp:group -->

            <!-- wp:group {"style":{"layout":{"selfStretch":"fixed","flexSize":"50%"}},"layout":{"type":"flex","orientation":"vertical"}} -->
            <div class="wp-block-group">
                <!-- wp:paragraph {"style":{"typography":{"lineHeight":"1.5"}},"textColor":"tertiary","fontSize":"medium"} -->
                <p class="has-tertiary-color has-text-color has-medium-font-size" style="line-height:1.5">Deserunt rerum
                    perspiciatis quaerat quam numquam assumenda neque. Quis dolores totam voluptatibus molestiae non.
                    Quae exercitationem cum numquam repudiandae. Beatae eum quae. Ut ex unde rem quod ipsum consequatur.
                    blanditiis temporibus pariatur voluptatibus molestiae.</p>
                <!-- /wp:paragraph -->
            </div>
            <!-- /wp:group -->
        </div>
        <!-- /wp:group -->
    </div>
    <!-- /wp:group -->

    <!-- wp:spacer -->
    <div style="height:100px" aria-hidden="true" class="wp-block-spacer"></div>
    <!-- /wp:spacer -->
</div>
<!-- /wp:group -->
	',
);
