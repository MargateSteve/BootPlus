<?php
/**
 *  index.php
 *
 *  This is the only front end page for the site. Everything is done elsewhere
 *  and simply viewed through this file.
 *
 * @author      Steve Ball <steve@follyball.co.uk>
 * @copyright   Copyright (c) 2019 Steve Ball <steve@follyball.co.uk>
 * @see 	    /Docs/Files/_public/index.php
 * @see 	    /Docs/Files/core/SiteSettings.php
 * @see 	    /Docs/Files/core/Router.php
**/


//  Call the initialisation file
require_once '../src/init.php';

// Show error reporting if $debug_mode is set to true
if(SiteSettings::$debug_mode) {
    error_reporting(E_ALL);
    ini_set('display_errors', 1);
}

// Create a new instance of the App.
new Router ();

// That is it............
