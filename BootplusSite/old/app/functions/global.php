<?php

/**
 * Global functions
 *
 * Functions that can be used anywhere within the site, both front end and backend
 *
 * @package Core
 * @author  Steve Ball <steve@follyball.co.uk>
 * @copyright Copyright (c) 2017 Steve Ball <steve@follyball.co.uk>
 */


//  Call in the seperate autoload class
include_once 'autoload_class.php';



/**
 * Sanitise html string
 *
 * Sanitizes html before passing to the browser or inserting into a database
 * @param  string $string The string to sanitise
 * @return string         Sanitised string
 */
function escape($string) {

    return htmlentities($string, ENT_QUOTES, 'ISO-8859-15');
}

/**
 * Show sql query data
 *
 * Function to show a formatted output  of the generated SQL
 * and bindings from a query that has been passed in.
 *
 * Useful for debugging purposes
 * @param  string $qry The string to sanitise
 * @return string         Sanitised string
 */
function showData ($qry) {
    echo '<h4>Generated SQL</h4>';
    echo '<pre>';

    echo $qry->sql();
    echo '</pre>';

    if($qry->bindValue ()) {
        echo '<h4>Bindings</h4>';
        echo '<pre>';
        print_r($qry->bindValue ());
        echo '</pre>';
    }

} // showData ()

/**
 * Prettify and array
 *
 * Shows and array in a more easy-to-read format.
 *
 * @param  array        $array  The array to prettify
 * @param  string/null  $title  Optional title to show (useful when used multiple times)
 * @return string        Formatted array
 */
function nicePrint_r ($array, $title = null) {
    echo '<pre>';
    echo (isset($title)) ? '<h1>'.$title.'</h1>': '';
    print_r($array);
    echo '</pre>';

}


/**
 * Include files into the template
 *
 * Reads the extra required css/js files called from a view when calling the
 * templates and returns them based on the reference in config_files/css.php or
 * config_files/js.php.
 *
 * These are only called in the template files and will be used when a view requires
 * a one-off include of a css or js file - forexample a datepicker or WYSIWIG.
 *
 * @param  string   $include    Path to the and value in the config file
 * @param  string   $type       Type of request (css/js)
 * @return string         File includes
 */
function getIncludeFiles ($include, $type) {
    $out = '';
    if(isset($include[$type])) {
        foreach ($include[$type] as $value) {
            $out .= Globals::get($value);
        }
    }
    return $out;
}

/**
 * Slug or deslug a string
 *
 * Replaces all spaces in a string with underscores in forward mode and replaces
 * all underscores with spaces in reverse mode.
 *
 * Example
 *
 * $string = 'This is a string';
 * $newstring = slugify ($string)
 *
 * $newstring now equals 'This_is_a_string'
 *
 * $reversestring = slugify ($string, $direction = 'reverse')
 *
 * $reversestring now equals 'This is a string'
 *
 * @param  string   $string    The string to slug/deslug
 * @param  string   $direction Optional direction
 * @return string         Slugged/deslugged string
 */
function slugify ($string, $direction = 'forward')
{
	if ($direction == 'forward')
	{
		return str_replace(" ", "_", $string);
	} else {
		return str_replace("_", " ", $string);
	}
}
