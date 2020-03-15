<?php

/**
 *  Site settings
 *
 *	Sets the miscellaneous settings for the site as well as
 *	any default variables
 *
 *  Called using the Globals::get('settings/xxx') function
 *
 * @package Core
 * @author  Steve Ball <steve@follyball.co.uk>
 * @copyright Copyright (c) 2017 Steve Ball <steve@follyball.co.uk>
 * @return stylesheet
 *
 * TODO : Make sure the verify and reset pw email are using the links here but remove the full link and replace just with http://Framework
 */

$home_page = 'http://framework/';
$GLOBALS['site_name'] ='Bootcharge';

$GLOBALS['settings'] = array(

    /*
        Require registration verification

        Allows you to specify whether or not a user needs to validate their
        registration by email before becoming active.
     */
    'verify_registration' => true,


    'home_page' => 'http://framework/',

	/**
	 *  Set the link for the registration verification page
	 *
	 * 	This is used in the body of the email sent to verify an account
	 * 	after registration
	 *
	 * @example /app/core/SendMail->registration()
	 */
	'verify_link' => $home_page.'Members/Verify/',




	'reset_pw' => $home_page.'Members/ResetPassword/',

    'gallery_folder' => 'gallery/',

	// Set the name of the token session used to prevent double-posting
    'token_name' => 'token',

	// Set the current date and time in mysql format
    'stamp' => date('Y-m-d H:i:s'),

	// Set only the current date as Y-m-d (2017-06-30)
    'curr_date' => date('Y-m-d'),

	// Set only the current time as H:i (16:45)
    'curr_time' => date('H:i'),

	'site_name' => 'PHP MVC Framework',

	'admin_email' => 'srball72@gmail.com',

    'registration_terms_title' => "<h3>Registration Terms and Conditions</h3>",
    'registration_terms_body' => "<p>You can set these in /app/core/config_files/settings.php</p>
                <p>They are stored under 'registration_terms_title' and 'registration_terms_body'.</p>",

    /*
        Set the user login variable names

        The creation and reading of all user sessions and cookies
        are defined in the variales below and called using
        Globals::get().

        This will enable you to force logouts of all users, including
        those how have set the remember me cookie. This will be useful
        if you have changed the names or ids of user levels and what
        to ensure no-one still has a session that allows them acces to
        restricted areas.

        For example
        setUserSession(array({user data}))
        where the user has an id of 1 and a user group of 4 will
        actually set

        $_SESSION['user'] = 1;
        $_SESSION['userGroup'] = 4;

        Calling getUserSession(), which is used in the logged in check, will look for an existence of $_SESSION['user'] and return true if found.

        If you changed the value of 'user_login_id' from 'user' to 'user_id'
        (or anything) getUserSession() will return false as it is now looking
        for $_SESSION['user_id'] while all logged in users will have $_SESSION['user']

        Changing the 'user_login_group' will also reset the session data for
        users permission group but this will only take effect of the 'user_login_id' is changed at the same time.

        If you are forcing a logout, you will also need to change the 'user_cookie_name'
        to ensure anyone with a remember me cookie is also logged out.
     */
    'user_login_id' => 'user',
    'user_login_group' => 'userGroup',
	'user_cookie_name' => 'frmwk',
	'cookie_expiry' => 604800,





);
