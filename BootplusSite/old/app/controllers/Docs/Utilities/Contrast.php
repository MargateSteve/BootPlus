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

class Contrast extends Controller
{
	/**
	 * Site Home Page
	 *
	 * This is the page that will be seen when viewing the site root.
	 *
	 * This will generally show latest updates as the primary focus
	 * but for now, we will just return some basic details from the
	 * various sections.
	 *
	 * @return 	view
	 * @link 	http://site.com/
	 */
    public function index($page=null)
	{

        $model = $this->model('M_Contrast');

	    $this->view(
	        'extras/index',
	        [
	            // Pass the page title
	            'page_name' => 'Contrast',
                'page_description' => 'Set a contrasting black or white background or foreground   ',
                'category' => 'Utilities',
                'link' => 'Contrast',
                'content' => $model->page_display ()


	        ]
	    );

  	} // contrast()


}
