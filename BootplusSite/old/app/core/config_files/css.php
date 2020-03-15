<?php

/**
 *  Links to CSS files
 *
 *	Sets the links to css files
 *
 * Called using the Globals::get('css/xxx') function
 * @package Core
 * @author  Steve Ball <steve@follyball.co.uk>
 * @copyright Copyright (c) 2017 Steve Ball <steve@follyball.co.uk>
 * @return stylesheet
 */
$GLOBALS['css'] = array(
	/*
		Site CSS files

		Globals::get('css/local/xxx');
	 */
    'local' => array (
		// Main Site
        'site' => '<link rel="stylesheet" href="/includes/css/site.css">',

		// Admin Login Page
		'bootstrap_raw' => '<link rel="stylesheet" href="/includes/css/bootstrap.css">',

        'dark_theme' => '<link rel="stylesheet" href="/includes/css/bootstrap-theme-dark.css?v='.rand(1,100).'">',

        'light_theme' => '<link rel="stylesheet" href="/includes/css/bootstrap-theme-light.css?v='.rand(1,100).'">',

        'extra_dark_theme' => '<link rel="stylesheet" href="/includes/css/bootstrap-theme-extra_dark.css?v='.rand(1,100).'">',

        'extra_light_theme' => '<link rel="stylesheet" href="/includes/css/bootstrap-theme-extra_light.css?v='.rand(1,100).'">',

        'playground' => '<link rel="stylesheet" href="/includes/css/bootstrap-playground.css?v='.rand(1,100).'">',

        'extras_int' => '<link rel="stylesheet" href="/includes/css/bootstrap_extras_int.css">',

        'extras_docs' => '<link rel="stylesheet" href="/includes/css/extras_docs.css">',

		// Admin Section
        'admin' => '<link rel="stylesheet" href="/includes/css/admin.css">',

		// Admin Default Theme
        'admin_theme_default' => '<link id="theme" href="/includes/css/theme_default.css" rel="stylesheet">'

    ), // Local

	/*
		Third Party CSS files

		Globals::get('css/vendor/xxx');
	 */
    'vendor' => array (
		// Font Awesome
        'font-awesome' => '<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">',

		// Simple Line Icons
        'simple-line-icons' => '<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/simple-line-icons/2.4.1/css/simple-line-icons.css" />',

		/*
			Bootstrap
			We have both versions 3 and 4 just in case 3 is still needed

			Globals::get('css/vendor/bootstrap/v3');
			Globals::get('css/vendor/bootstrap/v4');

		 */
        'bootstrap' => array (
			// Version 3.3.7
            'v3' => '<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">',

			// Version 4 alpha 6
            'v4_alpha' => '<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">',

            // Version 4 beta
            'v4_beta' => '<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">',
        ),

    ) // vendor
);
