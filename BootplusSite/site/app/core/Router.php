<?php
class Router
{

    private $method_found  = false;
	protected $controller = 'C_home';
	protected $method = 'index';

    private $_controller_path = '../app/controllers/';
    private $_controller = 'C_home';
    private $_method = 'index';
    private $_constructor_record = '';
    private $_constructor_params = [];
    private $_params = [];
    private $_is_admin = false;

    private $_debug = false;



  	function __construct($site=null) {

	    $this->url = $this->parseUrl();

        if($this->_debug) {nicePrint_r($this->url, 'Initial URL');}

        $this->has_construct = false;

        if(isset($site))
        {
   		  $this->controller_path .= $site.'/';
   	    }

        $this->_is_admin = false;

        if($this->url) {

            if($this->url[0] == 'Admin') {
                $this->_is_admin = true;
            }
            $this->set_controller_directory ();
        }

        if($this->_debug) {nicePrint_r($this->url, 'URL Before set_controller');}
        $this->set_controller ();


        if($this->_debug) {nicePrint_r($this->url, 'URL Before init_controller');}
        $this->init_controller();
        if($this->_debug) {nicePrint_r($this->url, 'URL After init_controller');}


        //  echo 'CN:'.$this->_controller->_m_name;


        // home to check if it has already changed
        if($this->url && $this->_method == 'index') {
            //echo $this->url[0];
            if(isset($this->url[0]) && method_exists($this->_controller, strtolower($this->url[0]))) {
                //echo $this->url[0];
                // It does exist so set it as the method
                $this->_method = $this->url[0];
                $this->reset_url();

            }
        }
        if($this->_debug) {nicePrint_r($this->url, 'URL Before setting $this->_params');}

        if($this->url) {
            $this->_params = $this->url;
        }
        if($this->_debug) {nicePrint_r($this->url, 'URL After setting $this->_params');}

        if($this->_debug) {
             echo '->'.$this->_method.'()';
             echo '<br>';
             echo 'C:'.$this->_constructor_record;
             nicePrint_r($this->_constructor_params, 'Constructor Params');
             nicePrint_r($this->_params, 'Params');
        }


        $this->params = $this->url ? array_values($this->url) : [];
        call_user_func_array ([$this->_controller,$this->_method],$this->params);
    }

    private function init_controller () {
        require_once  $this->_controller_path . $this->_controller .'.php';
        $controller_name = 'C_'.$this->_controller;
        $this->_controller = new $this->_controller($this->_constructor_record, $this->_constructor_params);
    }

    private function reset_url($key=0) {
        if(isset($this->url[$key])) {
            unset($this->url[$key]);
            $this->url = array_values($this->url);
        }
    }

    private function set_controller () {
        if($this->url) {

            // Check if position 0 in $this->url corresponds to a valid file
            if(file_exists($this->_controller_path . 'C_'.$this->url[0] .'.php')) {



                // It does exist so set the controller to match it
                $this->_controller = 'C_'.$this->url[0];
                $this->reset_url();

                if($this->_debug) {
                     echo 'C:'.$this->_controller;
                    {nicePrint_r($this->url, 'URL After $this->_controller');}
                }

                if($this->_debug) {nicePrint_r($this->url, 'URL After setting $this->_controller ');}

            }
        } // Controller if($this->url)
    }


    private function set_controller_directory () {
        if($this->url) {
            foreach ($this->url as $key => $value) {
                // See if $value added to the end of $this->controller_path is a directory
                if(is_dir($this->_controller_path.$value)) {

                    // It is a directory so add it to the end of $this->controller_path
                    $this->_controller_path .= $value.'/';

                    // Unset the element from the array
                    $this->reset_url();
                } else {
                    // It is not a directory so break out of the loop
                    break;
                }
            } // Set path

        }
    }

    public function parseUrl () {

		// No point doing anything if we are at the root page so check we have anything to look at
		if (isset($_GET['url'])) {
			// If we do have a url, explode it and then use rtrim to remove the trailing slashes
			return $this->url = explode('/', filter_var(rtrim($_GET['url'], '/'), FILTER_SANITIZE_URL));
		}
	} // parseUrl ()

}
 ?>
