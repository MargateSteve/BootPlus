<?php

/**
 * Main Template
 *
 */
class T_Docs extends T_Base {
/**
	 * Construct the Page
	 *
	 * The entire page is built as soon as it is called so we set everything
	 * we need in the __construct and at the end of it, called the Template() function
     * to create the whole page on the fly.
	 *
	 * @param string 		$content       Page Content
	 * @param array        	$args          Additional arguments
	 */
    public function __construct() {
       // $this->_t_type='docs';
       /// $this->_url = explode('/', filter_var(rtrim($_GET['url'], '/'), FILTER_SANITIZE_URL));
    }

    private function sidemenu () {

        $links = [
            'Getting started' => ['link' => 'Getting_Started',
                'children' => ['Introduction' => 'Introduction',
                    'Download' => 'Download',
                ]
            ],
            'Content' => ['link' => 'Content',
                'children' => ['Typography' => 'Typography'
                ]
            ],
            'Utilities' => ['link' => 'Utilities',
                'children' => ['Blend' => 'Blend',
                    'Borders' => 'Borders',
                    'Colors' => ['link' => 'Colors',
                        'children' => ['Blend' => 'Blend',
                            'Borders' => 'Borders',
                            'Contrast' => 'Contrast',
                            'Complement' => 'Complement',
                            'Invert' => 'Invert',
                            'Sizing' => 'Sizing',
                        ]],
                    'Complement' => 'Complement',
                    'Invert' => 'Invert',
                    'Sizing' => 'Sizing',
                ]
            ]
        ];

        $c = '<div class="col-12 col-md-3 col-xl-2 docs-sidebar bg-grey700">';

        $c .= '<nav id="docs-nav" class="docs-menu"><div class="docs-menu-header d-none d-md-block">Docs Menu</div>';

        foreach ($links as $categories => $category) {
            $category_active = (isset($this->_url[1]) && $this->_url[1]==$categories) ? true : false;
            $c .= '<div class="docs-category bg-grey600 px-2">';
            $c .= '<a href="/Docs/'.$category['link'].'" class="docs-link text-grey100';
            if($category_active) {$c .= ' font-weight-bold';}
            $c .= '">'.$categories.'</a>';
            $c .= '</div><!-- docs-category '.$category['link'].' -->';

            if(isset($this->_url[1]) && $this->_url[1]==$categories) {
                if (isset($category['children'])) {
                    $c .= '<ul class="nav docs-submenu bg-grey500">';
                    foreach ($category['children'] as $child_name => $child_link) {

                        if (is_array($child_link)) {

                                $child_active = (isset($this->_url[2]) && $this->_url[2]==$child_name) ? true : false;

                                $c .= '<li class="col-12">';
                                $c .= '<a href="/Docs/'.$category['link'].'/'.$child_link['link'].'" class="text-grey200';
                                if($child_active) {$c .= ' font-weight-bold';}
                                $c .= '">'.$child_name.'</a><!-- a -->';
                                $c .= '</li><!-- li .active -->';

                                if($child_active) {

                                    $c .= '<ul class="nav docs-submenu col-12 bg-grey300">';
                                    foreach ($child_link['children'] as $child2_link => $child2_link) {
                                        $child2_active = (isset($this->_url[3]) && $this->_url[3]==$child2_link) ? true : false;
                                        $c .= '<li class="col-12 pl-1">';
                                        $c .= '<a href="/Docs/'.$category['link'].'/'.$child_link['link'].'/'.$child2_link.'" class="text-grey900 ml-3';
                                        if($child2_active) {$c .= ' font-weight-bold';}
                                        $c .= '">'.$child2_link.'</a><!-- a -->';
                                        $c .= '</li><!-- li .active -->';
                                    }
                                    $c .= '</ul><!-- docs-submenu '.$child_name.' -->';
                                }
                        } else {
                            $c .= '<li class="col-12"><a href="/Docs/'.$child_link.'" class="text-grey200">'.$child_name.'</a><!-- a --></li><!-- li .active -->';
                        }


                    }
                    $c .= '</ul><!-- docs-submenu '.$category['link'].' -->';
                }
            }
        }

        $c .= '</div><!-- docs-sidebar -->';


        echo  $c;
    }


    public function render () {

        $this->bodyStart ();
        $this->header ();
        $this->topNav ();
        echo '<div class="container-fluid">';
        echo '<div class="row flex-xl-nowrap">';
        $this->sidemenu ();
        echo '<main id="main_content" class="col-12 col-md-9 col-xl-10" role="main">';
        echo '<div class="row">';
        $this->get_content ();
        echo '</div><!-- row  -->';
        echo '<footer class="bg-dark"><div class="container text-white"><span>Sticky footer - need to get some content</span><!-- span --></div><!-- div .container text-white --></footer>';
        echo '</div><!-- main_content  -->';
        echo '</div><!-- row flex-xl-nowrap -->';
        echo '</div><!-- container-fluid -->';
        $this->bodyEnd ();

    } // Template()


    public function header() {
        $out = '<div class="container-fluid masthead bg-info text-light align-middle py-2 pl-3 size-h-4">';
        $out .= 'Bootstrap Extras';
        $out .= '</div>';

        // Echo out everything created in the function
        echo $out;
    } // header()

    public function set_content($c) {
        $this->_content .= $c;
    } // set_content()

    public function set_meta($m) {
        $this->_meta = $m;
   } // set_content()

    public function set_css_files($c) {
        $this->_css_files = $c;
    } // set_content()

    public function set_js_files($j) {
        $this->_js_files = $j;
    } // set_content()

    public function set_page_js($j) {
        $this->_page_js = $j;
    } // set_content()

    public function set_page_title($t) {
        $this->_page_title = $t;
        return '<div class="col-12"><h1 class="page-title">'.$t.'</h1></div>';
    } // set_page_title()

    public function set_page_subtitle($t) {
        return '<div class="col-12"><p class="lead description">'.$t.'</p></div>';
    } // set_page_subtitle()






 	/**
 	 * Build footer
 	 *
 	 * Sets the page footer
 	 *
 	 * @return string 	footer
 	 *
 	 * TODO: Finish this off
 	 */
    public function footer () {
         echo '<footer class="footer bg-dark"><div class="container text-white ">Footer content.</div><!-- div .container-fluid text-white  --></footer>';
     } // footer()
}
