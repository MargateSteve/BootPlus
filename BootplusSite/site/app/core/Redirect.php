<?php

/**
 * Redirect class
 *
 * Class file to url redirects
 *
 * One simple function - to() - that creates a header redirect
 *
 * @package Core
 * @author  Steve Ball <steve@follyball.co.uk>
 * @copyright Copyright (c) 2017 Steve Ball <steve@follyball.co.uk>
 *
 */

// Include the initiation file
require_once '../src/init.php';

class Redirect
{
	/**
	 * Create a header redirect
	 * @param  string $location The required url path
	 * @example Redirect::to('index.php')
	 */
    public static function to($location = '')
	{
		// We only do anything if $location is set so check that
        if ($location)
		{
			/*
				If $location is a numeric value, such as a 404, we need to
				redirect that to a specified page relating to that number,
				otherwise we just direct to $location.
			 */
            if (is_numeric($location)) {
                switch ($location) {
                    case 404:
                        header('HTTP/1.0 404 Not Found');
                        include 'includes/errors/404.php';
                        exit();
                        break;

                }
            }
            header('Location: ' . $location);
            exit();
        }
    }
}
