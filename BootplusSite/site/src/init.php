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
        '../app/core/Templates/',
        '../app/core/Views/',
        '../app/core/',
        '../app/models/',
    )
);


/** Call in the App and Controller classes
 *
 *  These are where the url becomes a class, method and output
 *
 **/
require_once '../app/core/App.php';
require_once '../app/core/Controller.php';
