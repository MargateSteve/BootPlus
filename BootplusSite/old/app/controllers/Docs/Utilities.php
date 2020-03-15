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

class Utilities extends Controller
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
        /*
            If we have parameters at a controller root there has
            been a url error so send to the 404 page
         */
        if(!$page){Redirect::to('Utilities/Overview');}



		/*
			Pass the required data through to the view

            For now we are just passing a few counts of various sections
		*/
	    $this->view(
	        'extras/index',
	        [
	            // Pass the page title
	            'page_name' => 'Extras',

	        ]
	    );

  	} // index()


    public function contrast()
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


    public function colors()
	{
        $colors = $this->model('M_Colors');

		/*
			Pass the required data through to the view

            For now we are just passing a few counts of various sections
		*/
	    $this->view(
	        'extras/index',
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

    public function complement()
	{
		$model = $this->model('M_Complement');

	    $this->view(
	        'extras/index',
	        [
	            // Pass the page title
	            'page_name' => 'Complement',
                'page_description' => 'Set a complementary color as a background or foreground   ',
                'category' => 'Utilities',
                'link' => 'Complement',
                'content' => $model->page_display ()


	        ]
	    );

  	} // compliment()

    public function invert()
	{
		$model = $this->model('M_Invert');

	    $this->view(
	        'extras/index',
	        [
	            // Pass the page title
	            'page_name' => 'Invert',
                'page_description' => 'Set a inverted color as a background or foreground   ',
                'category' => 'Utilities',
                'link' => 'Invert',
                'content' => $model->page_display ()


	        ]
	    );

  	} // compliment()

    public function borders()
	{
		$model = $this->model('M_Borders');

	    $this->view(
	        'extras/index',
	        [
	            // Pass the page title
	            'page_name' => 'Borders',
                'page_description' => 'Extends the Bootstrap borders utitilities and adds a few new things.',
                'category' => 'Utilities',
                'link' => 'Borders',
                'content' => $model->page_display ()


	        ]
	    );

  	} // compliment()

    public function sizing()
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


    public function blend()
	{
		$model = $this->model('M_Blend');

	    $this->view(
	        'extras/index',
	        [
	            // Pass the page title
	            'page_name' => 'Blend',
                'page_description' => 'Set a shade of a color as a background or foreground   ',
                'category' => 'Utilities',
                'link' => 'Blend',
                'content' => $model->page_display ()


	        ]
	    );

  	} // compliment()

    public function overview()
	{

	    $this->view(
	        'extras/index',
	        [
	            // Pass the page title
	            'page_name' => 'Utilities Overview',
                'category' => 'Utilities',
                'link' => 'Overview'


	        ]
	    );

  	} // overview()


}
