<?php

/**
 * Controller class
 *
 * Processes requests within a controller to open up any required Models
 * as well as passing the data to the view.
 *
 * @package Core
 * @author  Steve Ball <steve@follyball.co.uk>
 * @copyright Copyright (c) 2017 Steve Ball <steve@follyball.co.uk>
 */
class Controller
{

	/**
	 * Construct the view
	 *
	 * Once multi-site is up and running, the argument will be a
	 * site reference passed in via new App($site_ref). This will
	 * then be appended to the path of the view.
	 *
	 * To use this, each site will require it's own directory in the
	 * views folder and each od its views within it.
	 *
	 * @param 	var  	$site Not used, ready for multi-site
	 */
	function __construct($site=null)
	{
		/*
			If the $site has been set, add it to $this->site_view,
		 	otherwise, leave it blank.
		 */
		if(isset($site))
		{
			$this->site_view = $site.'/';
		} else
		{
			$this->site_view = '';
		}

	} // __construct ()

	/**
	 * Open an instance of a Model class
	 *
	 * Opens a requested model class file from /app/models and
	 * returns a new instance of it.
	 *
	 * This instance can be re-used by assigning it to a variable
	 * such as $this->model = $this->model('Users_Model')
	 *
	 * @param  string 	$model 	Model class name
	 * @return class        	Model
	 */
  	public function model ($model)
  	{
		// Open the model class file
    	require_once '../app/models/' . $model . '.php';

		// Return a new instance of the model
    	return new $model ();

  	} // model ()


	/**
	 * Create the view
	 *
	 * The view is what the end user actually sees this function simply
	 * selects the correct view file and passes the data to it.
	 *
	 * The data is then manipulated and formatted to the final content that
	 * the user will see in the view file
	 *
	 * @param  string 	$view 	Path to the view from /app/views/
	 * @param  array  	$data 	All of the data to pass to the view.
	 * @return The entire HTML page
	 */
 	public function view ($view, $data = [])
 	{

        if (!isset($this->site_view)) {
            $this->site_view = '';
        }

    	require_once '../app/views/' . $this->site_view .$view . '.php';
 	} // view ()

}
