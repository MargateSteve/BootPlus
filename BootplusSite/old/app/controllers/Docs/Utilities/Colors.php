<?php

/**
 * Root Controller
 *
 * Controller for any functions called from the site root as well
 * as the home page itself.
 *
 * This file cannot contain any functions with the same name as a level 1
 * directory in /app/controllers/
 *
 * Use this file sparingly and only for items that only have one variant.
 *
 * For anything that may have several pages, create a new controller file
 * or if there will be many or complex pages, a new folder.
 *
 * Functions
 * index ()     The site home page
 * register ()  The registration page
 * login ()     The full login page with help
 *
 * @package Core
 * @author  Steve Ball <steve@follyball.co.uk>
 * @copyright Copyright (c) 2017 Steve Ball <steve@follyball.co.uk>
 *
 */

class Colors extends Controller
{
    public function index($page=null)
	{
        $colors = $this->model('M_Colors');

		/*
			Pass the required data through to the view

            For now we are just passing a few counts of various sections
		*/
	    $this->view(
	        'docs/utilities/colors',
	        [
	            // Pass the page title
	            'page_name' => 'Colors',
                'page_description' => 'An extra ' . $colors->count_all_colors() . ' colors in 9 shades to use against all components',
                'category' => 'Utilities',
                'link' => 'Colors',
                'content' => $colors->page_display ()


	        ]
	    );

  	} // colors()

}
