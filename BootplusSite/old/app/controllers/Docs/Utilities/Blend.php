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

class Blend extends Controller
{


    public function index($page=null)
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

  	} // index()

    public function examples($param=null)
	{
		$model = $this->model('M_Blend');

        $function = strtolower($param).'_examples';

        if($param == 'Text')
        {
            $alt = 'background';
        }
        else
        {
            $alt = 'text';
        }

	    $this->view(
	        'extras/index',
	        [
	            // Pass the page title
	            'page_name' => 'Blend ' . $param . ' examples',
                'page_description' => 'Adds a ' . $alt . ' color based on a shade of the ' . strtolower($param) . ' color using the '. Html::code(
                    '<a href="/Docs/Utilities/Blend">.blend</a>',
                    $params = array (

                    )
                ). ' class.',
                'category' => 'Utilities',
                'link' => 'Blend',
                'content' => $model->$function ()


	        ]
	    );

  	} // index()

}
