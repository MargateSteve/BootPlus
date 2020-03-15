<?php

/**
 * Base Template
 *
 * @package 	Core
 * @author  	Steve Ball <steve@follyball.co.uk>
 * @copyright 	Copyright (c) 2018 Steve Ball <steve@follyball.co.uk>
 */
class T_Base {

    private $_body_class;

    protected $_content = '',
              $_css_files,
              $_js_files,
              $_meta,
              $_page_js,
              $_page_title,
              $_t_type='site',
              $_url;

    public function __construct () {

	} // __construct ()

    public function render_titles($d) {

        if(isset($d['page_title']) || isset($d['page_subtitle'])) {
            $o = '';
            foreach (['title', 'subtitle'] as $value) {
                if (isset($d['page_'.$value])) {
                    $f_name = 'set_page_'.$value;
                    $o .= $this->$f_name($d['page_'.$value]);
                }
            }
            $o .= '<div class="col-12"><hr class="mt-0"></div>';
            $o .= '<!-- page title -->';

            $this->set_content($o);
        }
    }


    public function set_crumbs($d=true) {
        if($d) {
            $crumbs = $this->_url;
            $last = key(array_slice($this->_url, -1, 1, TRUE));

            $o = '<div class="col-12">';
            $o .= '<nav aria-label="breadcrumb">';
            $o .= '<ol class="breadcrumb">';

            $path = '';
            foreach ($crumbs as $key => $value) {
                $path .= '/'.$value;
                $o .= '<li class="breadcrumb-item';

                if($key===$last) {
                    $o .= ' active';
                }

                $o .= '">';

                if($key<>$last) {
                    $o .= '<a href="'.$path.'">'.$value.'</a>';
                } else {
                    $o .= $value;
                }
                $o .= '</li>';
            }
            $o .= '</ol>';
            $o .= '</nav>';
            $o .= '</div>';

            $this->set_content($o);
        }
    }

    protected function get_content () {

        echo $this->_content;

    }



    private function get_page_title () {
        return (isset($this->_page_title)) ? $this->_page_title:false;
    }

    private function get_page_subtitle () {
        return (isset($this->_page_subtitle)) ? $this->_page_subtitle:false;
    }

    public function set_body_class($c) {
        $this->_body_class = $c;
    }

    private function get_body_class () {
        return (isset($this->_body_class)) ? $this->_body_class:'';
    }





	/**
	 * Build the HTML down to the opening body tag and include extra css
     *
     * Creates the opening <doctype> and <html> tags, inserts the <head>
     * tag before finally creating the opening <body> tag. The closing <body>
     * and <html> tags are created in the bodyEnd() function.
     *
     * The <head> is created via the head() function and contains the global
     * css and meta tags as well as and page-specific ones requested when the
     * template was called.
	 *
	 * @return string 					Template to the opening <body> tag
	 */
    public function bodyStart () {

        // Start off by specifying the doctype
        $out = ' <!doctype html>';

        // Open the html tag
        $out .= '<html lang="en">';

        /*
            Include the <head> section, including any page-specific css, js or meta tags.

            It uses the head() function from within this file, which access various $this variables set in the __construct() in T_Main, passed in via the view, so we do not need to pass any arguments in when calling it.
         */
        $out .= self::head ();

        // Open the body tag
        $out .= '<body class="'.$this->get_body_class ().'">';
        // Echo out everything created in the function
        echo $out;
    } // bodyStart()

	/**
	 * Finish the HTML
	 *
	 * @return string 					Template for the end of the HTML
	 */
    public function bodyEnd () {

		/**
         * Include any extra js
         *
         * If a page needs any extra js apart from the default, this will
         * have been specified using an $include array when calling new T_Main_Template.
         *
         * These will be set using their Globals::get() reference
         *
         * @var array/null
         */
        $out = self::scripts ();

        if($this->_page_js) {
            $out .= '<script>$(document).ready(function(){';
            $out .= $this->_page_js;
            $out .= '});</script>';
        }

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
	 * Builds the entire <head> tag and includes any global or
	 * page specific css and meta tags.
	 *
	 * @return     string      <head> section
	 */
    private function head () {
        		/*
            We build the contents of the <head> gradually so we create a $out
            variable containing the opening tag and concatenate to it as we go along.
         */
		$out = '<head>';

		/*
            Include the <meta> tags

            Each of the meta tags should initially be stored in the meta_tags()
            function in '/app/core/SiteSettings.php' with a default content to be used
            if an alternative is not set.

            For page specific meta tags, set a key/pairing array in the view as
            $params['meta'] with the name and content of each once you want to
            overwrite.

            You can also set global meta tags manually and this is required for any
            that do not use a name and content combination.
         */
        $out .=  ' <meta charset="utf-8">';

        /*
            As there may be overrides for some of the meta tags set in the page/view, we initially store the default meta tags in a $tags variable so it can be easily manipulated.
         */
        $tags = SiteSettings::meta_tags();
        /*
            If any page-specific meta tags have been passed in from the view, they would have
            been set to $this->meta in the called template file (by default
            '/app/core/Templates/Main.php').
            We loop though these and for each one, overwrite the matching tag name in $tags.
         */
        if(isset($this->_meta)) {
            foreach ($this->_meta as $name => $content) {
                $tags[$name] = $content;
            }
        }

        /*
            Finally, we loop through the tags array and create a meta tag for each one, adding it to the $out variable.
         */
        foreach ($tags as $name => $content) {
            $out .= '<meta name="'.$name.'" content="'.$content.'"/>';
        }

		/*
            Set the Page Title

            If the page title has been passed in from the view, show the site name, set as 'site_name' in the database settings table followed by a colon and then the page title.
            Otherwise, it just shows the site name.

            You can change this to suit your needs.
         */
		$title = ($this->get_page_title ()) ? SiteSettings::$_site_name .': '.$this->get_page_title (): SiteSettings::$_site_name;
		$out .=  '<title>' . $title. '</title>';

		// Link the Favicon
		$out .=  '<link rel="shortcut icon" href="/favicon.ico">';

		/*
            Call in the stylesheets

            Again, you can have global style sheets as well as page-specific ones. Wherever they are set, they are called from the css() function in '/app/core/SiteSettings.php'.

            These are set in a multidimensional array and return the full stylesheet link as a string. When setting, simply set the path to the stylesheet separated by slashes so 'remote/bootstrap/v4' would return the string at 'remote' => 'bootstrap' => 'v4'.

            To include any globally, simply concatenate them to the $out variable.

            To include any page specific, pass them in via the view as a $params['css'] array, simply using the path string as outlined above.

            Note that you will need to be careful with the order of these to ensure there are no class name conflicts. As you can see, here we have set 'local/site' after everything else to ensure it is the last one called and therefore takes priority.

            Before anything else, we set any required global third party ones.
         */
		$out .= SiteSettings::css('remote/bootstrap/v4');

        // Loop through the page specific styles

        /*
            If any css requests have been passed in via the view, the __construct() in the file that extends this would have stored it as array in $this->css. If it exists, we loop through it and for each one, retriece the sheet via the css() function in SiteSettings.php.
         */
        if(isset($this->_css_files)) {
            foreach ($this->_css_files as $stylesheet) {
                $out .= SiteSettings::css($stylesheet);
            }
        }

        /*
            Add the main stylesheet last, again using the the css() function in SiteSettings.php.
         */
        $out .= SiteSettings::css('local/bootplus');
        if ($this->_t_type=='site') {
            $out .= SiteSettings::css('local/site');
        } else {
            $out .= SiteSettings::css('local/docs');
        }



        // Close the head tag
        $out .=  '</head>';

        // Echo the $out variable
		echo $out;

    } // head()

	/**
	 * Build the required scripts
	 *
	 * Builds any required js and third party scripts
	 *
	 * @return string          			<head> section
	 */
    private function scripts () {
        $out = '';

        /*
            Call in the any scripts

            Again, you can have global scripts as well as page-specific ones. Wherever they are set, they are called from the js() function in '/app/core/SiteSettings.php'.

            These are set in a multidimensional array and return the full script link
            as a string. When setting, simply set the path to the stylesheet separated by slashes so
            'remote/bootstrap/v4' would return the string at
            'remote' => 'bootstrap' => 'v4'.

            To include any globally, simply concatenate them to the $out variable.

            To include any page specific, pass them in via the view as a $params['js'] array, simply using the path string as outlined aboveg.

            Note that you will need to be careful with the order of these to ensure there are
            no class name conflicts. As you can see, here we have set 'local/default' after
            everything else to ensure it is the last one called and therefore takes priority.

            Before anything else, we set any required global third party ones.
         */
         $out .= SiteSettings::js('remote/jquery');
         $out .= SiteSettings::js('remote/popper');
         $out .= SiteSettings::js('remote/bootstrap/v4');
         $out .= SiteSettings::js('remote/font-awesome-5');

         /*
             If any js requests have been passed in via the view, the __construct() in the file that extends this would have stored it as array in $this->js. If it exists, we loop through it and for each one, retriece the sheet via the js() function in SiteSettings.php.
          */
        if(isset($this->_js_files)) {
            foreach ($this->_js_files as $script) {
                $out .= SiteSettings::js($script);
            }
        }

        /*
            Add the default js file last, again using the the js() function in SiteSettings.php.
         */
        $out .= SiteSettings::js('local/default');


        // Echo the $out variable
        echo $out;

    } // scripts()


    /**
	 * Build the top navigation menu
	 *
	 * Sets the static parts of the menu and turns Globals::get('menus/main_top_nav')
	 * in the required links and dropdowns
	 *
	 * @return string 	nav
	 */
    public function topNav () {
        // Main Site Top Navigation Menu

        $test_dropdown = [
            'Home' => ['link', '/'],
            'Home Method' => ['link', '/Method'],
            'Folder' => ['link', '/Folder'],
            'Folder Method' => ['link', '/Folder/Method'],
            'Folder File' => ['link', '/Folder/File'],
            'Folder File Method' => ['link', '/Folder/File/Method'],
            'Folder Folder' => ['link', '/Folder/FolderTwo'],
            'Folder Folder Method' => ['link', '/Folder/FolderTwo/Method'],
            'Extra Params' => ['link', '/Extras'],
        ];
        $nav_items = [
            'Home' => ['link', '/', 'pl-0'],
            'Docs' => ['link', '/Docs'],
            'Playground' => ['link', '#'],
            'Templates' => ['dropdown', [
                'Dark' => ['link', '/Themes/Dark'],
                'Light' => ['link', '/Themes/Light'],
                'Extra Dark' => ['link', '/Themes/Extra_Dark'],
                'Extra Light' => ['link', '/Themes/Extra_Light']
            ]],
        ]; // $nav_items

        $out = '';

        $toggle_button = '';

        if ($this->_t_type=='docs') {
            $toggle_button .= '<button type="button" class="navbar-toggler badge badge-gray800 m-1 d-inline d-md-none" data-toggle="collapse" data-target="#docs-nav" aria-controls="docs-nav" aria-expanded="false" aria-label="Toggle navigation">Docs Menu</button>';
        }

        $toggle_button .= '<button type="button" class="navbar-toggler ml-auto badge badge-gray900 m-1" data-toggle="collapse" data-target="#main-nav" aria-controls="main-nav" aria-expanded="false" aria-label="Toggle navigation">Main Menu</button>';

        $menu = '';

        foreach ($nav_items as $key => $value) {

 			// 'type' is set as 'link'
            if($value[0] == 'link') {
 				/*
 					Build a <li> with the class of .nav-item
 					Inside this put an <a> with a value of $value[1] (the link)
 					and a display of $key (the link name)
 				 */
 				$class = (isset($value[2])) ? ' '.$value[2]: '';
                $menu .= '<li class="nav-item"><a class="nav-link py-1 text-light '.$class.'" href="'.$value[1].'">'.$key.'</a><!-- '.$key.' link --></li>';
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
                $menu .= '<li class="nav-item dropdown text-light">';
                $menu .= '<a id="'.$key.'_menu" class="nav-link dropdown-toggle py-1 text-light" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">'.$key.'</a><!-- '.$key.'_menu trigger -->';
                $menu .= '<div class="dropdown-menu" aria-labelledby="'.$key.'_menu">';

                foreach ($value[1] as $links => $link) {
                    $menu .= '<a class="dropdown-item" href="'.$link['1'].'">'.$links.'</a><!-- a .dropdown-item -->';
                }

                $menu .= '</div><!-- '.$key.'_menu dropdown  -->';
                $menu .= '</li>';
             }
         }


        $nav_collapse = '<div id="main-nav" class="collapse navbar-collapse ">
                         <ul class="navbar-nav">
                        '.$menu.'
                         </ul>
                         </div>';

        $out = '<nav class="navbar navbar-expand-lg navbar-dark bg-dark invert sticky-top h-1 py-0 px-0">
                <div class="container-fluid text-white" style="display: flex;z-index:999;">
                '.$toggle_button.$nav_collapse.'
                </div>
                </nav>';

 		echo $out;
     } // topNav()



}
