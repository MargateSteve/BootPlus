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
class Extras_Template extends Base_Template
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
        $params
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
		$this->include = $settings['include'];


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

            $this->category = $settings['category'];

            $this->link = $settings['link'];


		// Call the template function, including any extra required css or js
        self::Template();

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
        //self::contentStart ();

		// Show the actual content for the page
        self::content ();

		// Close the container that holds the content
        //self::contentEnd ();



		// Show any requested scripts and close of the <body> and <html> tags
        self::bodyEnd ();

    } // Template()




    public function left_column ()
    {

        $menu = '';
        $links = array (
            'Getting started' => array (
                'link' => 'Getting_Started',
                'children' => array
                (
                    'Introduction' => 'Introduction',
                    'Download' => 'Download',
                )
            ),
            'Content' => array (
                'link' => 'Content',
                'children' => array
                (
                    'Typography' => 'Typography'
                )
            ),
            'Utilities' => array (
                'link' => 'Utilities',
                'children' => array
                (
                    'Blend' => 'Blend',
                    'Borders' => 'Borders',
                    'Colors' => 'Colors',
                    'Contrast' => 'Contrast',
                    'Complement' => 'Complement',
                    'Invert' => 'Invert',
                    'Sizing' => 'Sizing',
                )
            )

        );

        $output = '';
        foreach ($links as $key => $value)
        {
            $class = 'docs-category ';


            $base_link = Html::a (
                $key,
                $params=array(
                    'class' => 'docs-link',
                    'link' => '/Docs/'.$value['link']
                )
            );



            $child_menu = '';

            if (isset($value['children']))
            {
                foreach ($value['children'] as $children => $child)
                {
                    if($child == $this->link)
                    {
                        $class = 'active';
                    }
                    else
                    {
                        $class = '';
                    }

                    $child_menu .= Html::li (
                        Html::a (
                            $child,
                            $params=array(
                                'link' => '/Docs/'.$value['link'].'/'.$children
                            )
                        ),
                        $params=array(
                            'class' => $class,

                        )
                    );
                }

                $menu = Html::ul (
                    $child_menu,
                    $params=array(
                        'class' => 'nav docs-submenu'
                    )
                );

            }
            $class = 'docs-category';

            if($value['link'] === $this->category)
            {
                $class .= ' active';
            }

            $output .= Html::div (
                $base_link.$menu,
                $params=array(
                    'class' => $class
                )
            );
        }



        return Bootstrap::column (
            $params = array (
                'class' => 'col-12 col-md-3 col-xl-2 docs-sidebar bg-gray-200 compliment',
            ),
            $content = array (
                Bootstrap::button (
                    $content = '<svg width="15" height="10" viewBox="-2.5 -5 75 60" preserveAspectRatio="none">
  <path d="M0,0 l35,50 l35,-50" fill="none" stroke="black" stroke-linecap="round" stroke-width="5" />
</svg> Docs Menu',
                    $params=array(
                        'class' => ' link d-md-none p-0  text-blue-900',
                        'controls' => 'data-toggle="collapse" data-target="#docs-nav" aria-controls="docs-nav" aria-expanded="false" aria-label="Toggle docs navigation"'
                    )
                ),

                Html::nav (
                    '<div class="docs-menu-header d-none d-md-block">Docs Menu</div>'.$output,
                    $params=array(
                        'id' => 'docs-nav',
                        'class' => 'collapse docs-menu',
                    )

                )
            )
        );
    }

    public function main_column ()
    {
        $title = '';
        if($this->display_title)
        {

            $title =  ' <h1 class="page-title">'.$this->page_title.'</h1>';

            if($this->page_sub_title)
            {

                $title .=  ' <p class="lead description">'.$this->page_sub_title.'</p>';
            }

        }
        return Bootstrap::column (
            $params = array (
                'id' => 'main_content',
                'class' => 'col-12 col-md-9 col-xl-10',
                'tag' => 'main',
                'role' => 'main',
            ),
            $content = array (
                $title.$this->content.
                // Show the footer
                self::footer ()
            )
        );
    }



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

        echo Bootstrap::container (
            $content = Bootstrap::row (
                $id = null,
                $class = 'flex-xl-nowrap',
                // Row Params
                $inc = array (

                    self::left_column (),
                    self::main_column()
                )
            ),
            // Container Params
            $params = array (
                'type' => 'fluid'
            )
        );

    } // content()





}
