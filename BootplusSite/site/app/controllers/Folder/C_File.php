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
class C_File extends Controller
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
            'page_title' => 'Controller in folder',
            'page_subtitle' => 'Navigated to a folder with controller',
            'function' => 'index',
            'content' => $m->home_page()
        ];
        debugging_method(__FILE__,__FUNCTION__,func_get_args());

        // Pass the data to the view
        $this->view(
         'home/index',$view_data
        );

  	} // index()


    public function Method() {
        $m = $this->model('M_Root');
        $view_data = [
            'page_title' => 'Home Page Method',
            'page_subtitle' => 'Navigated to a folder with controller and a method',
            'function' => 'home_method',
            'content' => $m->home_page_method()
        ];
        debugging_method(__FILE__,__FUNCTION__,func_get_args());

        // Pass the data to the view
        $this->view(
         'home/index',$view_data
        );

  	} // index()

}
