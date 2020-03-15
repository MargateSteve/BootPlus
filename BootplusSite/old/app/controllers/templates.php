<?php

/**
 * Example Templates Controller
 *
 * Allows you to view each of the page layouts that
 * are available to use.
 *
 * @package Core
 * @author  Steve Ball <steve@follyball.co.uk>
 * @copyright Copyright (c) 2017 Steve Ball <steve@follyball.co.uk>
 *
 */
class Templates extends Controller
{

	/**
	 * Templates Home Page
	 *
	 * Simply shows a blank page with links to each of the
	 * template layout variations.
	 *
	 * Available Templates
	 * Full Width 		full-width
	 * Left Column  	left-col 	Default when $template null
	 * Right Column  	right-col
	 * Two Column  		two-col
	 *
	 * @param  	string/null 	$template 	[description]
	 * @return 	view
	 * @link 	http://site.com/Templates/{OptionalTemplateName}
	 */
  	public function index($template='')
  	{
		/*
			Pass the page name the requested
			template to the view
		*/
    	$this->view(
	        'templates/index',
	        [
	            'page_name' => 'Templates',
				'template' => $template
	        ]
	    );
  	} // index()

}




 ?>
