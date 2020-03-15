<?php

/**
 * Links to JS files
 *
 *	Sets the links to js files
 *
 * Called using the Globals::get() function
 *
 * @package Core
 * @author  Steve Ball <steve@follyball.co.uk>
 * @copyright Copyright (c) 2017 Steve Ball <steve@follyball.co.uk>
 * @return stylesheet
 */
$GLOBALS['js'] = array(

	/*
		Site JS files

		Globals::get('js/local/xxx');
	 */
    'local' => array (
		// Shared JS
		'shared' => '<script src="/includes/js/shared.js"></script>',

		// Admin JS
	    'admin' => '<script src="/includes/js/admin.js"></script>',

		// default JS
	    'default' => '<script src="/includes/js/default.js"></script>'

	),

	/*
		Third Party JS files

		Globals::get('js/vendor/xxx');
	 */
	'vendor' => array (
		// JQuery
		'jquery' => '<script src="https://code.jquery.com/jquery-3.1.1.js" integrity="sha256-16cdPddA6VdVInumRGo6IbivbERE8p7CQR3HzTBuELA=" crossorigin="anonymous"></script>',

		/*
			Bootstrap
			We have both versions 3 and 4 just in case 3 is still needed.

			Version 4 also links to the required tether.min.js

			Globals::get('js/vendor/bootstrap/v3');
			Globals::get('js/vendor/bootstrap/v4');

		 */
	    'bootstrap' => array (
			// Version 3.3.7
	        'v3' => '<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>',

			// Version 4 alpha 6
	        'v4_alpha' => '<script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
	        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>',

            // Version 4 beta
	        'v4_beta' => '<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
            <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>'
	    )
	)
);
