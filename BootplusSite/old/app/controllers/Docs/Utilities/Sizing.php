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

class Sizing extends Controller
{
    public function index($page=null)
	{
		$model = $this->model('M_Sizing');

	    $this->view(
	        'extras/index',
	        [
	            // Pass the page title
	            'page_name' => 'Sizing',
                'page_description' => 'Allows you to add fixed widths, heights or both to an element.',
                'category' => 'Utilities',
                'link' => 'Sizing',
                'content' => $model->page_display ()


	        ]
	    );

  	} // compliment()

}
