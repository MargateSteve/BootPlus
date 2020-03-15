<?php

/**
 * Admin Login Template
 *
 * We do not need any variations on this page, we just call it as a simple
 * flat template. Anyone who is not logged in or is a logged in user who does not
 * have admin rights will automatically be redirected here when trying to view any
 * part of the admin area.
 *
 * The only parameter that we pass in is the $content. This will be the Login Form for
 * anyone who is not logged in. If the user is logged in but does not have admin rights
 * they will see an error message created as a Session::flash and handled in
 * app\controllers\admin\adminlogin.php->index().
 * If a user is logged in with admin rights, they will never see this page and will
 * automatically be redirected to the admin index.
 *
 * @param 		string/null 	$content 	Login Form if required
 * @package 	Core
 * @author  	Steve Ball <steve@follyball.co.uk>
 * @copyright 	Copyright (c) 2017 Steve Ball <steve@follyball.co.uk>
 * @example 	new Admin_Login($params)
 * @return 		Template Wrapper
 */
class Admin_Login {

	public $output;

	public function __construct($content) {

		/** Set the output
		 *
		 *	As this is a fixed template, we can just build a straightforward output
		 *
		**/
		// Start off by specifying the doctype
		$output = ' <!doctype html>';

		// Open the html tag
		$output .= '<html lang="en">';

		// Add the head to the output
		$output .= self::head ();

		// Close the head tag
		$output .= '</head>';

		// Open the body tag
        $output .= '<body>';

		// Start the output with a container
		$output .=  '<div class="container">';

		// Show the content - either a login form or nothing
		$output .= $content;

		// Close the container
		$output .=  '</div> <!-- container -->';

		// Close the body tag
		$output .= '</body>';

		// Close the html tag
		$output .= '</html>';

		// Return the entire output
	    echo $output;

    }

	/**
	 * Build the <head> tag
	 *
	 * @return string The entire <head> tag
	 */
	private function head () {
        // Open the <head> tag
        $out = '<head>';

			// Include the <meta> tags
            $out .=  ' <meta charset="utf-8">';
			$out .=  '<meta name="description" content="Admin Login">';
            $out .=  '<meta name="author" content="Steve Ball">';
			$out .=  '<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">';
			$out .=  '<meta name="keyword" content="Bootstrap,Admin,Template,PHP,MVC,Framework,jQuery,CSS,HTML,Dashboard">';

			// Set the Page Title
            $out .=  '<title>Admin Login</title>';

			// Link the Favicon
			$out .=  '<link rel="shortcut icon" href="/favicon.ico">';

			// Call in the stylesheets
			$out .=  Globals::get('css/vendor/bootstrap/v4_beta');
			$out .=  Globals::get('css/local/adminlogin');

         	$out .=  '<!--[if lt IE 9]>';
        	$out .=  '   <script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.js"></script>';
        	$out .=  '  <![endif]-->';
        $out .=  '</head>';

		echo $out;

	}


}
