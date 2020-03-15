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

class Home extends Controller
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
	public function index()
	{
        /*
            If we have parameters at a controller root there has
            been a url error so send to the 404 page
         */
        if(!$page){Redirect::to('/Docs/Getting_Started');}


  	} // index()


    public function themes($theme)
	{

		/*
			Pass the required data through to the view

            For now we are just passing a few counts of various sections
		*/
	    $this->view(
	        'themes/index',
	        [
	            // Pass the page title
	            'page_name' => slugify($theme, 'reverse'),
                'theme' => $theme,

	        ]
	    );

  	} // index()

    public function playground($params=null)
	{
        /*
            If we have parameters at a controller root there has
            been a url error so send to the 404 page
         */
        if($params){Redirect::to('404');}



		/*
			Pass the required data through to the view

            For now we are just passing a few counts of various sections
		*/
	    $this->view(
	        'playground/index',
	        [
	            // Pass the page title
	            'page_name' => 'Home Page',

	        ]
	    );

  	} // index()

}
