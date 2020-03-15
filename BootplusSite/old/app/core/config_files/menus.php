<?php

/**
 * 	Menus
 *
 *	Contains all of the navigation menu's held within the framwework
 *
 * 	To use, call the required menu using the Globals::get() function
 * 	and loop through it to polulated the menu
 *
 * @package Core
 * @author  Steve Ball <steve@follyball.co.uk>
 * @copyright Copyright (c) 2017 Steve Ball <steve@follyball.co.uk>
 * @return stylesheet
 */

$GLOBALS['menus'] = array(

	// Main Site Top Navigation Menu
	'main_top_nav' => array (
		'Home' => array (
			'link', '/'
		),
		'Docs' => array (
            'link', '/Docs'
        ),

        'Playground' => array (
			'link', '/Playground/'
		),


        'Templates' => array (
            'dropdown', array (
                'Dark' => array (
					'link', '/Themes/Dark'
				),
                'Light' => array (
                    'link', '/Themes/Light'
                ),
                'Extra Dark' => array (
					'link', '/Themes/Extra_Dark'
				),
                'Extra Light' => array (
                    'link', '/Themes/Extra_Light'
                ),
            )
        ),


	), //main_top_nav

);
