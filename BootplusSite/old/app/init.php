<?php

/*
* Start the Php session
*
* As this file is the start of all front end pages, start the session here at the start
*
*/
session_start();

/*
* Set Default Timezone
*
* Allows you to override the time set on the server.
* Used if your site is hosted in a different timezone.
*
* @param string     A PHP supported Timezone as defined at http://php.net/manual/en/timezones.php
*
*/
date_default_timezone_set('Europe/London');

/*
* $GLOBALS[]
*
* Sets Global Variables that can be used anywhwere.
*
* $GLOBALS['config'] is stored within this file.
* All other $GLOBALS[] are stored within seperate files within
* ./src/config_files, grouped by type
*
* Use
* echo Globals::get('site_name', 'site_settings')
* would return the value of $GLOBALS['site_settings']['site_name']
*
* echo Globals::get('settings/owner', 'site_settings')
* would return the value of $GLOBALS['site_settings']['settings']['owner']
*
* NOTE : The second parameter is optional.
* If it is omitted then $GLOBALS['config'] will be assumed so
* echo Globals::get('css') will return the value of $GLOBALS['config']['css']
*/

// ==================================================================
//  Set values to $GLOBALS['config']

$GLOBALS['config'] = array(
    'settings' => array (
        'owner' => 'Steve Ball',
        'company' => 'Gitprojects',
    ),
);
/*
* Include global functions
*
*/
require_once 'functions/global.php';

/*
* autoload_class ()
*
* Called from ./src/functions/global.php > ./src/functions/autoload_class.php
^ Automatically loads classes from the specified folders when called
*
* @param array     Paths to all folders containing class files
*
*/
autoload_class (
    $dirs = array(
        '../app/core/templates/',
		'../app/core/extends/',
        '../app/core/',
        '../app/models/',
    )
);


// ==================================================================
//  Include all of the other $GLOBALS[] files from /src/config_files/
foreach (glob('../app/core/config_files/*.php') as $filename) {
   require_once ($filename);
}






/** Call in the App and Controller classes
 *
 *  These are where the url becomes a class, method and output
 *
 **/
require_once 'core/App.php';
require_once 'core/Controller.php';

 ?>
