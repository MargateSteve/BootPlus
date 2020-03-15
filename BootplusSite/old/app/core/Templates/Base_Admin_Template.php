<?php

/**
 * Admin Template Base
 *
 * This file contains the core structure and functions for building the admin
 * template all bar the actual page content, which is called using new Admin_Template
 * which extends this class.
 *
 * @package 	Core
 * @author  	Steve Ball <steve@follyball.co.uk>
 * @copyright 	Copyright (c) 2017 Steve Ball <steve@follyball.co.uk>
 */
class Base_Admin_Template {

	/**
	 * Build the HTML down to the opening body tag and include extra css
	 *
	 * @return string 					Template to the opening <body> tag
	 */
    public function bodyStart ()
	{

        // Start off by specifying the doctype
        $out = ' <!doctype html>';

        // Open the html tag
        $out .= '<html lang="en">';

		/*
			We only want loged in admins to view any pages
			in the Admin section.
			If they do not meet this criteria, they will be redirected to the admin login page.

			We use the isLoggedIn() and hasPermission()
			functions in Users_Core() to do this.
		 */

		// Open a connection to the user function class
		$login_class = new Users_Core();

		// If the user is not logged in or is not an admin, redirect them
		if(!$login_class->isLoggedIn() || !$login_class->hasPermission('admin')) {
			Redirect::to('/Admin/AdminLogin');
		}



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
        $out .= self::head ();

        // Open the body tag
        $out .= '<body class="nav-full-to-min nav-open">';

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
    private function head ()
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
			$out .=  '<meta name="description" content="Framework - Back End">';
			$out .=  '<meta name="keyword" content="Bootstrap,Admin,Template,PHP,MVC,Framework,jQuery,CSS,HTML,Dashboard">';

			// Set the Page Title
			$out .=  '<title>' . $title. '</title>';

			// Link the Favicon
			$out .=  '<link rel="shortcut icon" href="/favicon.ico">';

			// Call in the stylesheets
			$out .=  Globals::get('css/vendor/bootstrap/v4_beta');
			$out .=  Globals::get('css/vendor/font-awesome');
			$out .=  Globals::get('css/local/admin');
			$out .=  Globals::get('css/local/admin_theme_default');

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
    private function scripts ($include=null)
	{
		// Include any common js files
        echo Globals::get('js/vendor/jquery');
		echo Globals::get('js/vendor/bootstrap/v4_beta');
		echo Globals::get('js/local/shared');
		echo Globals::get('js/local/admin');

		// Include any page-specific js files
        getIncludeFiles ($include, 'js');

    } // scripts()


	/**
	 * Build the top navigation menu
	 *
	 * Sets the static parts of the menu and turns Globals::get('menus/admin_top_nav')
	 * in the required links and dropdowns
	 *
	 * @return string 	nav
	 */
	public function topNav ()
	{

        $out = '<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top top-navbar">';
        $out .= '	<button id="main-nav-trigger" class="navbar-toggler " type="button" aria-expanded="true" aria-label="Toggle navigation" style="display: flex; left: .25rem; position: absolute; ">';
        $out .= '		<span class="fa fa-fw fa-bars"></span>';
        $out .= '	</button>';
        $out .= '  <a class="navbar-brand my-3 ml-5" href="#" style=" float: left;">';
        $out .= '  	BS4PURE';
        $out .= '  </a>';

		$out .= '	<div class="navbar-collapse collapse" id="navbarCollapse" aria-expanded="false" >';
    	$out .= '		<ul class="navbar-nav mr-auto">';

		/**
		 * Loop through the menu array and build the menu
		 *
		 * If the 'type' is set as 'text' we will create a simple <li><a> with a text label.
		 * If the 'type' is set as 'icon' we will create a simple <li><a> with an icon label.
		 * If the 'type' is set as 'dropdown' we will create a dropdown
		 * <li><a> with a div containing all the links.
		 * If the 'type' is set as 'mega' we will create mega menu
		 * button with all child links, sorted and formatted.
		 * @var array
		 */
        foreach (Globals::get('menus/admin_top_nav') as $key => $value)
		{

			// Set all the parameters to pass in
			$type = $value['type'];
			$text = $key;
			$icon = (isset($value['icon'])) ? $value['icon'] : false ;
			$link = (isset($value['link'])) ? $value['link'] : false ;
			$blank = (isset($value['blank'])) ? $value['blank'] : false ;
			$items = (isset($value['items'])) ? $value['items'] : false ;

			// Add the button using the topNavButton() function
			$out .= self::topNavButton ($type,$text,$icon,$link,$blank,$items);
		}
		$out .= '		</ul>';

		$out .= '		<form class="form-inline mx-md-5 my-1">';
		$out .= '			<input class="form-control form-control-sm mr-sm-2" type="text" placeholder="Search">';
		$out .= '			<button class="btn btn-outline-success btn-sm my-2 my-sm-0" type="submit">Search</button>';
		$out .= '		</form>';

		$out .= '	</div><!-- .navbar-collapse -->';

		$out .= '	<button id="right-nav-trigger" class="navbar-toggler navbar-toggler-right" type="button" aria-expanded="false" aria-label="Toggle navigation">';
		$out .= '		<span class="fa fa-fw fa-comment-o"></span>';
		$out .= '	</button>';
		$out .= '	<button id="top-nav-trigger" class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="true" aria-label="Toggle navigation">';
		$out .= '		<span class="fa fa-fw fa-ellipsis-v"></span>';
		$out .= '	</button>';
		$out .= '	</div><!-- #main-nav -->';
		$out .= '	</nav>';

		echo $out;
    } // topNav()


	/**
	 * Build the left navigation menu
	 *
	 * Sets the static parts of the menu and turns Globals::get('menus/admin_left_nav')
	 * into the required links and dropdowns
	 *
	 * @return string 	nav
	 */
	protected static function leftSidebar()
	{
		$out =  '<aside class="left-sidebar">';
		$out .= '	<div class="menu-list">';
		$out .= '        <ul id="menu-content" class="menu-content">';

		/*
			Loop through the items and build a menu link for each one

			We can either have a static link of a dropdown. depending on which
			we are using, we need to call a separate function
		 */
		foreach (Globals::get('menus/admin_left_nav') as $key => $value)
		{
			/*
				Link

				Create a static link using leftMenuLink()
			 */
			if($value['type'] == 'link')
			{
				$out .= self::leftMenuLink ($text=$key, $link=$value['link'], $icon=$value['icon']);
			}
			/*
				Dropdown Button

				Creates a dropdown button with all child links using leftDropdown()
			 */
			if($value['type'] == 'dropdown')
			{
				$out .= self::leftDropdown ($text=$key, $link=$value['links'], $ref=$value['ref'], $icon=$value['icon']);
			}

		}

		$out .= '		</ul>';
		$out .= '	</div>';

		$out .= '</aside>';

		echo $out;
	} // leftSidebar()

	/**
	 * Build right sidebar
	 *
	 * Sets the right sidebar
	 *
	 * @return string 	footer
	 */
	protected static function rightSidebar()
	{
		$out  = '<aside class="right-sidebar">';
		$out  .= '<h3>Right Sidebar</h3>';
		$out  .= '</aside>';
		echo $out;
	}

	/**
	 * Build footer
	 *
	 * Sets the page footer
	 *
	 * @return string 	footer
	 */
	protected static function footer()
	{
		$out  = '<footer>';
		$out .= '	<a href="http://follyball.co.uk">BS4PURE</a> © 2017 Steve Ball';
		$out .= '	<span class="float-right">Powered by <a href="http://follyball.co.uk">BS4PURE</a>
	    </span>';
		$out .= '</footer>';

		echo $out;
    }


	/**
	 * Build the button to be used on the top nav
	 *
	 * @param  string 			$type  Type of Button (text/icon/dropdown/mega)
	 * @param  string/null  	$text  The text to display
	 * @param  string/null  	$icon  The icon to display
	 * @param  string/null  	$link  The buttons href
	 * @param  boolean 			$blank Used to set a link to open in a blank window
	 * @param  array  			$items Sub links to be used in dropdown and mega
	 *
	 *
	 * @return String         A top nav button
	 */
    private function topNavButton ($type, $text=null, $icon=null, $link=null, $blank=false, $items=null)
	{

		/*
			Set the 'target' value

			By passing $blank=true, the link will open in a new window,
			otherwise it will open within itself
		 */
		$target = ($blank) ? ' target="_blank"' : '';

		/*
			We have four different types of buttons that we can create

			text 		Creates a static button with a text label
			icon 		Creates a static button with an icon label
			dropdown 	Creates a dropdown menu and all the links
			mega  		Creates a mega menu and all the links
		 */
        if($type == 'text') {
			/*
				Text Button

				Creates a simple link button with a text label
			 */
            $out = '<li class="nav-item active">';
                $out .= '<a class="nav-link" href="'.$link.'" '.$target.'>';
                $out .= $text;
                $out .= '</a>';
            $out .= '</li>';
        } // Text Button


		if($type == 'icon') {
			/*
				Icon Button

				Creates a simple link button with a text label
			 */
            $out = '<li class="nav-item active">';
                $out .= '<a class="nav-link" href="'.$link.'" '.$target.'>';
                $out .= '<i class="fa fa-fw fa-'.$icon.'" aria-hidden="true"></i>';
                $out .= '</a>';
            $out .= '</li>';
        } // Icon Button

		/*
			Dropdown Button

			Creates a dropdown button with all child links
		 */
        if($type == 'dropdown') {

            $out = '<li class="nav-item dropdown">';
                $out .= '<a class="nav-link" href="#" id="navbar_'.$text.'" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">';

					// The button label can be either an icon or text
					if ($icon) {
						$out .= '<i class="fa fa-fw fa-'.$icon.'" aria-hidden="true"></i>';
					} else {
						$out .= $text;
					}

                $out .= '</a>';

				// Start the dropdown
                $out .= '<div class="dropdown-menu" aria-labelledby="navbar_'.$text.'">';

					/*
	 					Loop through the items and build an <a> for each one
					 */
					foreach ($items as $key=>$value) {
						$out .= '<a class="dropdown-item" href="'.$value['link'].'">'.$key.'</a>';
					}

                $out .= '</div>';
            $out .= '</li>';
        } // Dropdown Button

		/*
			Meg Menu Button

			Creates a mega menu button with all child links,
			sorted and formatted.
		 */
        if($type == 'mega') {
            $out = '<li class="nav-item mega-dropdown">';
                $out .= '<a class="nav-link" href="#" id="navbar_'.$text.'" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">';

					// The button label can be either an icon or text
					if ($icon) {
						$out .= '<i class="fa fa-fw fa-'.$icon.'" aria-hidden="true"></i>';
					} else {
						$out .= $text;
					}

                $out .= '</a>';

				// Start the dropdown
                $out .= '<div class="dropdown-menu" aria-labelledby="navbar_'.$text.'">';

					// Create a row to contain the menu items
                    $out .= '<div class="row">';

					/*
						Loop through the items build a col-xx div
						for each one based on their 'size' parameter.
					 */
                     foreach ($items as $item) {
                        $out .= '<div class="col-'.$item['size'].'">';

						/*
							The actual links are contained in an array
							named 'content'.
							Loop through the items and build an <a> for each one
						 */
                          foreach($item['content'] as $key=>$value) {
                              $out .= '<a class="dropdown-item" href="'.$value.'">'.$key.'</a>';
                          }
                          $out .= '</div>';
                      }
                    $out .= '</div>';
                $out .= '</div>';
            $out .= '</li>';
        }

        return $out;
    } // topNavButton ()


	/**
	 * Create a static link for the left menu
	 *
	 * @return string 	link
	 */
	protected static function leftMenuLink ($text, $link, $icon=null)
	{
		$out  = '<li>';
		$out .= '	<a href="' . $link . '">';

		// If an icon has been specified, add it to the link
		if($icon)
		{
			$out .= '	<i class="fa fa-' . $icon . ' fa-lg fa-fw"></i>';
		}

		$out .= '		<span class="menu-text">' . $text . '</span>';
		$out .= '	</a>';
		$out .= '</li>';

		return $out;
	} // leftMenuLink()


	/**
	 * Builds a dropdown menu in the left sidebar
	 *
	 * Uses several seemingly pointless functions but as we may have to
	 * call a dropdown within a dropdown, this turned out to be the best option.
	 *
	 * @param  string  		$text  	The text to display
	 * @param  array  		$links  The links to go in the dropdown
	 * @param  string		$ref 	Unique name to link the dropdown to it's trigger
	 * @param  string/null  $icon  The icon to display
	 *
	 * @return [type]        [description]
	 */
	protected static function leftDropdown ($text, $links, $ref, $icon=null)
	{
		// Start to build the dropdown
		$out = self::leftDropdownStart ($text, $links, $ref, $icon);

		/*
			Loop through the $links

			We build either a dropdown or a link for each one depending
			on what has been set in 'type'.
		 */
		foreach ($links as $subkey => $subvalue) {

			if($subvalue['type'] == 'link') {
				// Set to 'link' so build a standard link
				$out .= self::leftMenuLink ($text=$subkey, $link=$subvalue['link']);
			} // $subvalue['type'] == 'link'

			if($subvalue['type'] == 'dropdown') {

				// Set to 'dropdown' so start the build of another dropdown
				$out .=self::leftDropdownStart ($text=$subkey, $link=$subvalue['links'], $ref=$subvalue['ref']);

				/*
					Loop through the $subvalue links

					We do not take any further dropdowns at this level so we
					will always return a static link.
				 */
				foreach ($subvalue['links'] as $subsubkey => $subsubvalue) {
					if($subsubvalue['type'] == 'link') {
						$out .=self::leftMenuLink ($text=$subsubkey, $link=$subsubvalue['link']);
					}

				}
				// End the nested 'dropdown'
				$out .= self::leftDropdownEnd ();
			} //$subvalue['type'] == 'dropdown')
		}// foreach

		// End the main 'dropdown'
		$out .= self::leftDropdownEnd ();

		return $out;

	} // leftDropdown()


	/**
	 * Create the start of a dropdown for the left menu
	 *
	 * @return string
	 */
	protected static function leftDropdownStart ($text, $links, $ref, $icon=null)
	{
		$out  = '<li data-toggle="collapse" data-target="#' . $ref . '" class="collapsed">';
		$out .= '	<a href="#">';

		// If an icon has been specified, add it to the link
		if($icon)
		{
			$out .= '		<i class="fa fa-' . $icon . ' fa-lg fa-fw"></i>';
		}

		$out .= '		<span class="menu-text">' . $text . '</span> ';
		$out .= '		<i class="fa fa-chevron-down fa-pull-right"></i>';
		$out .= '	</a>';
		$out .= '</li>';

		$out .= '<ul class="sub-menu collapse" id="' . $ref . '">';

		return $out;
	} // leftDropdownStart()


	/**
	 * Create the end of a dropdown for the left menu
	 *
	 * @return string
	 */
	protected static function leftDropdownEnd ()
	{
		return '</ul>';
	} // leftDropdownEnd()


}
