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
class C_Home extends Controller
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
	public function index() {
        $m = $this->model('M_Root');
        $view_data = [
            'page_title' => 'Documentation',
            'page_subtitle' => 'Use, amend and extend the framework',
            'function' => 'index',
            'content' => $m->home_page()
        ];
        debugging_method(__FILE__,__FUNCTION__,func_get_args());

        // Pass the data to the view
        $this->view(
         'docs/utilities/index',$view_data
        );

  	} // index()


    public function HowItWorks() {
        $m = $this->model('M_Docs');
        $view_data = [
            'page_title' => 'How it works',
            'page_subtitle' => 'Understanding how the framework goes from pretty url to showing a page',
            'function' => 'howitworks',
            'content' => $m->howitworks()
        ];
        debugging_method(__FILE__,__FUNCTION__,func_get_args());

        // Pass the data to the view
        $this->view(
         'home/docs',$view_data
        );

  	} // index()


}
