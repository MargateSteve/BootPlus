<?php

/**
 * Admin Template
 *
 * This file contains actual content of the page and builds the template
 * using the functions in Base_Admin Template.
 *
 * @package 	Core
 * @author  	Steve Ball <steve@follyball.co.uk>
 * @copyright 	Copyright (c) 2017 Steve Ball <steve@follyball.co.uk>
 * @example 	new Admin_Template($params)
 * @return 		Entire HTML page
 */
class Admin_Template extends Base_Admin_Template
{
	/**
	 * Construct the Page
	 * @param string 		$main       Page Content
	 * @param string 		$page_title The page title to send to the <head> and title
	 * @param array/null 	$include    Additional css and js for the page
	 */
	public function __construct($content, $page_title, $include=null)
	{
        
		// Set the displayed content to $this->content
		$this->content = $content;

		// Set any extra required css or js $this->include
		$this->include = $include;

		// If a Page Title has been passed set $this->page_title to it
		// otherwise use 'Untitled'
        if($page_title) {
            $this->page_title = $page_title;
        } else {
            $this->page_title = 'Untitled';
        }

		// Call the template function, including any extra required css or js
		self::Template();
    } // __construct

	/**
	 * Build the entire template
	 *
	 * We build this up gradually via functions contained eihter in this file or in
	 * the Base_Admin_Template file it extends
	 * @return 	HTML page
	 */
    private function Template ()
	{
		// Build the start of the page up to the opening body tag, including the <head>
		self::bodyStart ();

		// Build top navigation bar
		self::topNav ();

		// Build the container that holds the content and set the Page Title
		self::contentStart ();

		// Show the left sidebar
		self::leftSidebar();

		// Show the page content
        self::content ();

		// Show the right sidebar
		self::rightSidebar();

		// Close the container that holds the content
        self::contentEnd ();

		// Show any requested scripts and close of the <body> and <html> tags
        self::bodyEnd ();

    } // Template()


	/**
	 * Show the actual page content
	 *
	 * As the main content itself is one column (but can have a
	 * multitude of rows and columns within) we use the Bootstrap::column
	 *
	 * Included is a function called intro(). This currently displays
	 * the page title and is there to remind that $inc can contain
	 * any number of functions to build layouts.
	 * function
	 * @return string  	Page content
	 */
	private function content () {

        echo  Bootstrap::column (
			$id = 'content',
			$class = '',
			$inc = array (
				self::intro (),
				$this->content
			)
		);

    }


	/**
	 * Start the content
	 *
	 * We wrap the entire content area in a 'container-fluid' to keep it
	 * full width on all viewport sizes.
	 * We then create a row then a <main> tag. This tag contains the left and right
	 * sidebars and the actual content to display
	 *
	 * @return string 	Start of the content section up to the main section
	 */
	private function contentStart ()
	{
		echo  '<div class="container-fluid">';
		echo  '<div class="row">';
		echo  '<main class="">';
	} // contentStart ()

	/**
	 * End the content
	 *
	 * @return string 	Closes the container
	 */
	private function contentEnd ()
	{
		echo  '</main>';

		// Show the footer
		echo self::footer ();

        echo  ' </div><!-- row -->';
        echo  '</div> <!-- container-fluid -->';
    }// contentEnd()


	/**
	 * Example display function
	 *
	 * Just a simple return of the page title as an example of
	 * using multiple functions in Bootstrap::column.
	 *
	 * In all reality, this should live at the end of contentStart ()
	 * @return string
	 */
	private function intro ()
	{
	   	$out = '<h1>'.$this->page_title.'</h1>';
		$out .= '<hr>' ;
		return $out;
	}// intro()
}
