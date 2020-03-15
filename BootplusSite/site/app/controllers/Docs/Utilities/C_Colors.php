<?php
/**
* Front End Home Controller
*
* Controller for any functions/views called from the site root as well
* as the home page itself. These are the site home page, the login page
* and the registration page. This controller will be activated when the first
* parameter in the url does not match any files or folders within the
* controllers folder.
*
* A full explanation of how front end controllers work  and how we pass the
* information to the view can be found in '/controllers/Members.php'.
*
* @author      Steve Ball <steve@follyball.co.uk>
* @copyright   Copyright (c) 2018 Steve Ball <steve@follyball.co.uk>
* @link 	   http://yoursite/
* @link    	   http://yoursite/Login
* @link 	   http://yoursite/Register
*/
class C_Colors extends Controller
{
    // Set the access rights for the variables, including any defaults
    private $_xxx;

    // Construct the class
    public function __construct () {

    } // __construct ()


    /**
	 * Site Home Page
	 *
	 * This is the page that will be seen when viewing the site root.
	 *
     * @param   mixed    $params     If not null, forces a 404
     * @return 	         /app/views/home/index.php
	 * @link 	         http://yoursite/
	 */
    public function index($p=null) {
        $m = $this->model('M_Colors');

        if(!$p) {
            $view_data = [
                'page_title' => 'Colors',
                'page_subtitle' => 'An extra ' . $m->count_all_colors() . ' colors in 9 shades to use against all components',
                'category' => 'Utilities',
                'function' => 'index',
                'base' => $m->get_base_colors (),
                'extra' => $m->get_extra_colors ()
            ];
            debugging_method(__FILE__,__FUNCTION__,func_get_args());

            // Pass the data to the view
            $this->view(
             'docs/utilities/colors',$view_data
            );
        } else {
            if($m->isColor($p)) {
                $this->single_color($p);
            } else {
                Redirect::to('/Docs/Utilities/Colors');
            }

        }



  	} // index()

    private function single_color($c) {
        $m = $this->model('M_Colors');
        $view_data = [
            'page_title' => 'Color : ' . $c,
            'page_subtitle' => 'Information on the core files we use',
            'function' => 'singlecolor',
            'color' => $c,
            'elements' => $m->color_elements ()
        ];

        debugging_method(__FILE__,__FUNCTION__,func_get_args());

        // Pass the data to the view
        $this->view(
         'docs/utilities/colors',$view_data
        );
    }

    public function contrast($p=null) {
        $m = $this->model('M_Colors');

        if(!$p) {
            $view_data = [
                'page_title' => 'Contrast',
                'page_subtitle' => 'Quickly add a contrasting text or background colour',
                'category' => 'Utilities',
                'function' => 'contrast',
                'base' => $m->get_base_colors (),
                'extra' => $m->get_extra_colors ()
            ];

        } else {
            if($m->isColor($p)) {
                $view_data = [
                    'page_title' => $p . ' : Contrast',
                    'page_subtitle' => 'Quickly add a contrasting text or background colour',
                    'category' => 'Utilities',
                    'function' => 'contrast_single',
                    'color' => $p
                ];
            } else if($p=='List') {
                $view_data = [
                    'page_title' => 'Contrast Color examples',
                    'page_subtitle' => 'Quickly add a contrasting text or background colour',
                    'category' => 'Utilities',
                    'function' => 'contrast_list',
                    'base' => $m->get_base_colors (),
                    'extra' => $m->get_extra_colors ()
                ];
            } else {
                Redirect::to('/Docs/Utilities/Colors/Contrast');
            }

        }

        debugging_method(__FILE__,__FUNCTION__,func_get_args());

        // Pass the data to the view
        $this->view(
         'docs/utilities/colors',$view_data
        );


    } // index()


}
