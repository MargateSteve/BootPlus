<?php

/**
 * Read a $GLOBALS value
 *
 * Functions for weorking with the variables set in the files
 * within /app/core/config_files.
 *
 * These files contain a named variable containing wither variables or arrays.
 *
 * To access we just need to build a path to to the variable
 *
 * If we want to get the 'title' value under the 'generic_error' key in the
 * forms file, we would use
 * 'form/generic_error/title'
 * @package Core
 * @author  Steve Ball <steve@follyball.co.uk>
 * @copyright Copyright (c) 2017 Steve Ball <steve@follyball.co.uk>
 *
 */

// Include the initiation file
require_once '../app/init.php';

class Globals {

	/**
	 * Get a $GLOBALS variable
	 *
	 * @param  string 	$path 	The path to the variable
	 * @return string       	Variable value
	 */
    public static function get($path)
	{
        // The class requires a path so only proceed if it exists
        if($path)
		{
            // Explode the path get all elements
            $path = explode('/', $path);

            // Set $config to the $GLOBALS[] type. If null, default to $GLOBALS['config']
            $global = $GLOBALS[$path[0]];

            unset($path[0]);

            // Loop through each part of the path
            foreach($path as $bit) {

                // Check if the current path exists in the $GLOBALS[] type
                if(isset($global[$bit])) {

                    // If the path does exist, append the path to the $GLOBALS[] type
                    $global = $global[$bit];


                }
            }

			// Return the value
            return $global;
        }

        return false;
    } // get ()
}
