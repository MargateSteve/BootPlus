<?php

/**
 * Main Template Base
 *
 * This file contains the core structure and functions for building the main
 * template all bar the actual page content, which is called using new Main_Template
 * which extends this class.
 *
 * @package 	Core
 * @author  	Steve Ball <steve@follyball.co.uk>
 * @copyright 	Copyright (c) 2017 Steve Ball <steve@follyball.co.uk>
 */
class Base_Template {
    /**
     * Create the top banner
     *
     * @return string 					Banner
     */
    public function banner ()
    {

        $out = '<div class="container-fluid masthead bg-info text-light align-middle py-2 pl-3 size-h-4">';
        $out .= 'Bootstrap Extras';
        $out .= '</div>';

        // Echo out everything created in the function
        echo $out;

    } // banner()

	/**
	 * Build the HTML down to the opening body tag and include extra css
	 *
	 * @return string 					Template to the opening <body> tag
	 */
    public function bodyStart ($css)
	{

        // Start off by specifying the doctype
        $out = ' <!doctype html>';

        // Open the html tag
        $out .= '<html lang="en">';


        /**
         * Include the <head> section
         *
         * If a page needs any extra css apart from the default, this will
         * have been specified using an $include array when calling new Main_Template.
         *
         * These will be set using their Globals::get() reference
         *
         * @var array/null
         */
        $out .= self::head ($css);

        // Open the body tag
        $out .= '<body class="bdy">';

        // Echo out everything created in the function
        echo $out;
    } // bodyStart()

	/**
	 * Finish the HTML
	 *
	 * @return string 					Template for the end of the HTML
	 */
    public function bodyEnd ()
	{

		/**
         * Include any extra js
         *
         * If a page needs any extra js apart from the default, this will
         * have been specified using an $include array when calling new Main_Template.
         *
         * These will be set using their Globals::get() reference
         *
         * @var array/null
         */
        $out = self::scripts ();

        // Close the body tag
        $out .= '</body>';

        // Close the html tag
        $out .= '</html>';

        // Echo out everything created in the function
        echo $out;

    } // bodyEnd()



	/**
	 * Build the <head> section
	 *
	 * Builds the entire <head> tag and includes any specified
	 * page specific css
	 *
	 * @return string          			<head> section
	 */
    private function head ($css)
	{
		$title = isset($this->page_title) ? $this->page_title: Globals::get('settings/site_name');



		// Open the <head> tag
		$out = '<head>';
			// Include the <meta> tags
            $out .=  ' <meta charset="utf-8">';

            // Include the <meta> tags
            $out .=  '<meta name="description" content="Admin Login">';
            $out .=  '<meta name="author" content="Steve Ball">';
			$out .=  '<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">';
			$out .=  '<meta name="description" content="Framework - Front End">';
			$out .=  '<meta name="keyword" content="Bootstrap,Admin,Template,PHP,MVC,Framework,jQuery,CSS,HTML,Dashboard">';

			// Set the Page Title
			$out .=  '<title>' . $title. '</title>';

			// Link the Favicon
			$out .=  '<link rel="shortcut icon" href="/favicon.ico">';

			// Call in the stylesheets
			$out .=  Globals::get('css/local/extras_int');
            $out .=  Globals::get('css/local/extras_docs');


			// Include any page-specific css files
			$out .=  getIncludeFiles ($this->include, 'css');

         	$out .=  '<!--[if lt IE 9]>';
        	$out .=  '   <script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.js"></script>';
        	$out .=  '  <![endif]-->';
        $out .=  '</head>';

		echo $out;

    } // head()


	/**
	 * Build the required scripts
	 *
	 * Builds the js and third party scripts
	 *
	 * @return string          			<head> section
	 */
    private function scripts ()
	{
		// Include any common js files
        echo Globals::get('js/vendor/jquery');
        echo Globals::get('js/vendor/bootstrap/v4_beta');
		echo Globals::get('js/local/shared');
        echo Globals::get('js/local/default');

		// Include any page-specific js files
        getIncludeFiles ($this->include, 'js');

    } // scripts()

	/**
	 * Build the top navigation menu
	 *
	 * Sets the static parts of the menu and turns Globals::get('menus/main_top_nav')
	 * in the required links and dropdowns
	 *
	 * @return string 	nav
	 */
    public function topNav ()
	{
        $out = '';

        $toggle_button = Html::button (
            // Button content
            $button_content = Html::span (

                // Span content
                $span_content = '',

                // Span params
                $span_params=array(
                    'class' => 'navbar-toggler-icon'
                )
            ), // span

            // Button params
            $button_params = array (
                'class' => 'navbar-toggler navbar-toggler-right',
                'controls' =>' data-toggle="collapse" data-target="#main-nav" aria-controls="main-nav" aria-expanded="false" aria-label="Toggle navigation"'
            )
        );

        $menu = '';
        foreach (Globals::get('menus/main_top_nav') as $key => $value)
		{
			// 'type' is set as 'link'
            if($value[0] == 'link') {
				/*
					Build a <li> with the class of .nav-item
					Inside this put an <a> with a value of $value[1] (the link)
					and a display of $key (the link name)
				 */

                $menu .= Bootstrap::nav_item(
                    $content = $key,
                    $params=array(
                        'li' => array (
                            'class' => '',
                        ),
                        'a' => array (
                            'class' => 'text-info-100',
                            'link' => $value[1]
                        ),

                    )
                );


            }

			// 'type' is set as 'dropdown'
            if($value[0] == 'dropdown') {
				/*
					Build a <li> with the class of .nav-item dropdown .

					Inside this, build an <a> with a class of dropdown-toggle. This
					will then use the Bootstap toggle class.
					Set the id to the $key (the link name) appended with '_menu'. This
					will be to target the correct dropdown menu. Also set the display to $key.

					Build a <div> with the class of .dropdown-menu. Give it an
					aria-labelledby of $key appended with '_menu' so it matches
					the <a> that triggers it.

					Finally, inside the div, loop through the links (stored in $value[1]) and creat an <a> for each one.
				 */
                 $links = '';
                 foreach ($value[1] as $items => $item)
                 {

                     $links .= Bootstrap::dropdown_item(
                         $content = $items,
                         $params=array(
                             'link' => $item[1]

                         )
                     );

                      //$out .= '  <a class="dropdown-item" href="'.$item[1].'">'.$menu.'</a>';
                 }

                $menu .= Bootstrap::nav_dropdown(
                    $content = $key,
                    $params=array(
                        'li' => array (
                            'class' => '',
                        ),
                        'a' => array (
                            'id' => $key.'_menu',
                            'class' => 'text-info-100',
                            'controls' => ' data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"',
                        ),
                        'menu' => array (
                            'content' => $links,
                        )

                    )
                );


                // $out .= '<li class="nav-item dropdown">';
                // $out .= '  <a class="nav-link dropdown-toggle" id="'.$key.'_menu" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">'.$key.'</a>';
                // $out .= '  <div class="dropdown-menu" aria-labelledby="'.$key.'_menu">';
                //
                // foreach ($value[1] as $menu => $item) {
                //      $out .= '  <a class="dropdown-item" href="'.$item[1].'">'.$menu.'</a>';
                // }
                //
                // $out .= '</div>';
                // $out .= '</li>';
            }
        }

        $navbar_collapse = Bootstrap::navbar_collapse (

            // navbar_collapse content
            $navbar_collapse_content = Bootstrap::navbar_nav (

                // navbar_collapse content
                $navbar_nav_content = $menu,

                // navbar_collapse params
                $navbar_nav_params=array(
                    'class' => 'mr-auto'
                )
            ), // navbar_collapse,

            // navbar_collapse params
            $navbar_collapse_params=array(
                'id' => 'main-nav'
            )
        );


        $out = Bootstrap::navbar (
            // Navbar content
            $nav_content = Bootstrap::container (

                // Container content
                $container_content = $toggle_button . $navbar_collapse,


                // Container params
                $container_params=array(
                    'class' => 'text-white',
                    'type' => 'fluid'
                )
            ), // container

            // navbar params
            $nav_params=array(
                    'class' => 'navbar-expand-lg navbar-dark bg-info-900 invert sticky-top h-1 pl-2 p-md-0'
            )
        );



		echo $out;
    } // topNav()

	/**
	 * Build footer
	 *
	 * Sets the page footer
	 *
	 * @return string 	footer
	 */
    public function footer ()
	{
        return Html::footer (
            $content = Bootstrap::container (
                $content = Html::span (
                    'Sticky footer - need to get some content'
                ),
                $params=array(
                    'class' => 'text-white'
                )
            ),
            $params=array(
                'class' => 'bg-dark'
            )
        );
    } // footer()

}
