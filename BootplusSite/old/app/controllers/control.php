<?php

/**
 * Root Test Controller File
 *
 * Test to check controller a named controller file in the
 * root of the controllers folder
 *
 * Each of these simply passes a page title and some text
 * to the view for picking up with the Selenium Test Suite
 *
 * @package Core
 * @author  Steve Ball <steve@follyball.co.uk>
 * @copyright Copyright (c) 2017 Steve Ball <steve@follyball.co.uk>
 *
 */
class control extends Controller
{
	/**
	 * Root Controller Home Page
	 * @return 	view
	 * @link 	http://site.com/control
	 */
  	public function index()
  	{
		/*
			Pass the page name and some
			placeholder text to the view
		*/
		$this->view(
	        'home/index',
	        [
				'page_name' => 'Root Controller',
				'text' => 'No Folder Has Controller No Method'
	        ]
	    );
	} // index()

	/**
	 * Root Controller Method Page
	 * @return 	view
	 * @link 	http://site.com/control/method
	 */
    public function method()
    {
		/*
			Pass the page name and some
			placeholder text to the view
		*/
		$this->view(
            'home/index',
            [
			    'page_name' => 'Root Method',
  				'text' => 'No Folder No Controller Has Method'
            ]
       );
    }
} // method()
