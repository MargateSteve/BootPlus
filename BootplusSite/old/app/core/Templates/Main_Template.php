<?php

/**
 * Main Template
 *
 * This file contains actual content of the page and buiilds the template
 * using the functions in Base_Template.
 *
 * @package 	Core
 * @author  	Steve Ball <steve@follyball.co.uk>
 * @copyright 	Copyright (c) 2017 Steve Ball <steve@follyball.co.uk>
 * @example 	new Main_Template($params)
 * @return 		Entire HTML page
 */
class Main_Template extends Base_Template
{
    // To allow for multiple versions of the same template, we can pass in a version. Check content() in this Class to see how it is used

	/**
	 * Construct the Page
	 * @param string 		$main       Page Content
	 * @param string 		$version    Which version of the template to show
	 * @param string 		$page_title The page title to send to the <head> and title
	 * @param array/null 	$include    Additional css and js for the page
	 */
    public function __construct(
        $content,
        $params,
        $include=null
    )
	{
        $settings = array (
            'version' => 'full-width',
            'display_title' => true,
            'default_css' => 'bootstrap_raw',
        );

        foreach ($params as $key => $value)
        {
            $settings[$key] = $value;
        }
		// Set the displayed content to $this->content
		$this->content = $content;

		// Set any extra required css or js $this->include
		$this->include = $include;

		// If a Page Title has been passed set $this->page_title to it
		// otherwise use 'Untitled'
        if(isset($settings['page_title'])) {
            $this->page_title = $settings['page_title'];

            if(isset($settings['page_sub_title'])) {
                $this->page_sub_title = $settings['page_sub_title'];
            }
        }

        if(isset($settings['display_title'])) {
            $this->display_title = $settings['display_title'];

        }

		/**
		 * Set the layout version
		 *
		 * If a version has been passed set $this->version to it otherwise use 'default'
		 *
		 * There are currently five layout versions
		 * 		default
		 * 		full_width
		 * 		left-col
		 * 		right-col
		 * 		two-col
		 *
		 * In content() we call a different function depending on which version
		 * has been requested.
		 *
		 * @var string
		 */

            $this->version = $settings['version'];

            $this->default_css = $settings['default_css'];


		// Call the template function, including any extra required css or js
        self::Template($include);

    } // __construct


	/**
	 * Build the entire template
	 *
	 * We build this up gradually via functions contained eihter in this file or in
	 * the Base_Template file it extends
	 * @return 	HTML page
	 */
    private function Template ()
	{
		// Build the start of the page up to the opening body tag, including the <head>
        self::bodyStart ($this->default_css);

        // Build banner
        self::banner ();

        // Build top navigation bar
        self::topNav ();

		// Build the container that holds the content and set the Page Title
        self::contentStart ();

		// Show the actual content for the page
        self::content ();

		// Close the container that holds the content
        self::contentEnd ();

		// Show the footer
        self::footer ();

		// Show any requested scripts and close of the <body> and <html> tags
        self::bodyEnd ();

    } // Template()


	/**
	 * Show the actual page content
	 *
	 * We show the actual content of the page using a pre-defined layout version passed
	 * in when calling the template.
	 *
	 * Each layout is created using makeRow() and makeColumn() functions in the
	 * Bootstrap class.
	 *
	 * We start by making a row with an id of 'main_content'.
	 * Inside that we place an array ($inc) of each seperate column builder
	 * function we require.
	 *
	 * The available columns are
	 * 	mainColumn_full ()		col-sm-12
	 * 		Outputs $this->content
	 *
	 * 	mainColumn ()			col-sm-9
	 * 		Outputs $this->content
	 *
	 * 	mainColumn_small() 		col-sm-6
	 * 		Outputs $this->content
	 *
	 * 	left_Column() 		col-sm-6
	 * 		Outputs specified data
	 *
	 * 	right_Column() 		col-sm-6
	 * 		Outputs specified data
	 *
	 * @return string  	Page content
	 */
    private function content ()
	{


        // Check which version we are after
        if($this->version == 'full-width')
		{
			/*
				'full-width'

				Just a full width content column
			 */
            echo   Bootstrap::row (
                $id = 'main_content',
                $class = '',
                $inc = array (
                    self::mainColumn_full ()
                )
            );

        } else if($this->version == 'left-col')
		{
			/*
				'left-col'

				The left column and a standard content column
			 */
            echo   Bootstrap::row (
                $id = 'main_content',
                $class = '',
                $inc = array (
					self::left_Column (),
                    self::mainColumn ()
                )
            );

        } else if($this->version == 'right-col')
		{
			/*
				'right-col'

				The right column and a standard content column
			 */
            echo   Bootstrap::row (
                $id = 'main_content',
                $class = '',
                $inc = array (
                    self::mainColumn (),
					self::right_Column ()
                )
            );

        } else if($this->version == 'two-col')
		{
			/*
				'two-col'

				The left and right columns and a small content column
			 */
            echo   Bootstrap::row (
                $id = 'main_content',
                $class = '',
                $inc = array (
					self::left_Column (),
                    self::mainColumn_small (),
					self::right_Column ()
                )
            );

        } else {
            echo   Bootstrap::row (
                $id = 'main_content',
                $class = '',
                $inc = array (
                    self::left_Column (),
                    self::mainColumn ()
                )
            );
        }

    } // content()


	/**
	 * Start the content
	 *
	 * @return string 	Start of the content section up to the masthead
	 */
    private function contentStart ()
    {
        echo  '<div class="container">';
        if($this->display_title)
        {
            echo  ' <h1 class="title">'.$this->page_title.'</h1>';

            if(isset($this->page_sub_title))
            {

                echo  ' <p class="lead description">'.$this->page_sub_title.'</p>';
            }

        }

    } // contentStart()

	/**
	 * End the content
	 *
	 * @return string 	Closes the container
	 */
    private function contentEnd ()
    {
        echo  '</div> <!-- container -->';
    } // contentEnd()

	/**
	 * Test extra content
	 *
	 * Simply a spare function that you can call in any of the column functions
	 * to give an exaple of adding extra content to them.
	 * @return string
	 */
    private function extra ()
    {
		$out = '<div class="row">';
        $out .= '<h3>Bottom Column</h3>';
		$out .= '</div>' ;

        return $out;
    } // extra()

	/**
	 * Basic outputs for test
	 *
	 * These are just temporary functions to show something in the
	 * left and right columns.
	 *
	 * Both will be replaced with something more useful.
	 */
    private function left_user () {

        $out = '<div class="card menu">';
        $out .= '  <div class="card-block">';
        $out .= '   <h4 class="card-title">User Menu</h4>';
        $out .= '  </div>';


        $out .= '</div>';

        return $out;
    }

    private function left_menu ()
    {

        $out = '	    <div class="card menu">';
        $out .= '  <div class="card-block">';
        $out .= '   <h4 class="card-title">Batch Menu</h4>';
        $out .= '  </div>';
        $out .= '  <ul class="list-group list-group-flush">';
        $out .= '   <li class="list-group-item"><a href="/Selenium/batches" class="card-link">Home</a></li>';
        $out .= '    <li class="list-group-item">Dapibus ac facilisis in</li>';
        $out .= '    <li class="list-group-item">Vestibulum at eros</li>';
        $out .= ' </ul>';
        $out .= ' <div class="card-block">';
        $out .= '  <a href="#" class="card-link">Card link</a>';
        $out .= '   <a href="#" class="card-link">Another link</a>';
        $out .= ' </div>';
        $out .= '</div>';

        return $out;
    }


	//////////////////////////////
	// 	Set the output columns  //
	//////////////////////////////

	// Content Column for default, left-col and right-col layouts
    private function mainColumn ()
    {
        return  Bootstrap::column (
           	$id = 'main_content_inner',
           	$class = 'col-sm-9',
           	$inc = array (
               	$this->content
           	)
        );
    } // mainColumn ()

	// Content Column for full-width layout
    private function mainColumn_full ()
    {
       return  Bootstrap::column (
           $params = array (
               'id' => 'main3',
               'class' => 'col-sm-12',
           ),
           $content = array (
               $this->content
           )
        );
    } // mainColumn_full ()

	// Content Column for two-col layout
	private function mainColumn_small ()
    {
        return  Bootstrap::column (
            $params = array (
                'id' => 'main3',
                'class' => 'col-sm-6',
            ),
            $content = array (
                $this->content,
				$this->extra ()
            )
         );
    } // mainColumn_small ()

	// Left Column for default, left-col and two-col layouts
    private function left_Column ()
    {
        return  Bootstrap::column (
            $params = array (
                'id' => 'left',
                'class' => 'left-col col-sm-3',
            ),
            $content = array (
                self::left_user (),
                self::left_menu ()
            )
         );
    } // left_Column ()

	// Right Column for right-col and two-col layouts
	private function right_Column ()
    {
        return  Bootstrap::column (
            $params = array (
                'id' => 'right',
                'class' => 'right-col col-sm-3',
            ),
            $content = array (
                self::left_user (),
                self::left_menu ()
            )
        );
    } // right_Column ()


}
