<?php

/**
 * Application File
 *
 * Parses the url and sends the script to the correct controller and
 * method.
 *
 * The url should be constructed that it matches a class file in
 * the controllers folder or one of the subfolders with an optional
 * function contain within it. It should also contain any parameters
 * that need to be passed.
 *
 * If the URL contains nothing after the site name (http://site.com/)
 * it will default to the home class in the root of the controllers
 * folder and the index() function within it.
 * If at any time in a URL it cannot match a part of the URL, it will
 * default to the index() function of the class file it is in but if
 * it is not in a class file, it will default to the home class file
 * in the folder it is in and the index() function within that.
 *
 * If the URL does have anything after the site name, it will then start
 * trying to match the each part to a folder within /controllers/ and if
 * that fails a class file within the current folder and finally, if
 * that also fails a function in a current class file.
 *
 *
 * With this in mind, you need to be careful that you do not have
 * two different combinations that use the same URL.
 *
 *	For example, in our default set-up if we call
 *	http://site.com/control/method
 *	that takes us to the control class in the root of controllers
 *	and the method() function within it.
 *
 *  http://site.com/Users
 *  takes us to the /controllers/Users/ folder and as there is
 *  nothing else in the URL uses the home class in that folder and
 *  the index() function in that.
 *
 *  http://site.com/Folder/Subfolder/subfoldercontroller/method
 *  takes us into the /controllers/folder/subfolder/ directory.
 *  Inside that it opens the subfoldercontroller class file and
 *  within that calls the member function.
 *
 *  We can also use the URL to pass parameters and this is used when
 *  verifying a new account. In that we have four parts to the URL,
 *  folder path, method, email, hash (where the hash is a sha256) string.
 *  It does not actually pass a controller.
 *  http://site.com/Users/Verify/name@email.com/sha256xxxxsha256
 *
 * The /Users part tells the app that we want the user folder.
 *
 * There is no 'Verify' controller in the Users folder so /Verify tells
 * the app to go to the verify() function in the home class in /Users
 *
 * The /name@email.com part is passed to the function as a parameter
 * called $email.
 *
 * The /sha256xxxxsha256 part is passed to the function as a parameter
 * called $hash.
 *
 * See /app/controllers/users/home.php->verify() to see how this information
 * is then used.
 *
 * @package 	Core
 * @author  	Steve Ball <steve@follyball.co.uk>
 * @copyright 	Copyright (c) 2017 Steve Ball <steve@follyball.co.uk>
 * @example 	new App
 * @return 		Call to a controller and method
 */
class App
{

	/**
	 * 	Set protected elements
	 *
	 *	We set a default controller and method so if the url does
	 *	not match a controller, the user will be taken to the home
	 *	page.
	 *
	 * 	We also create an empty array that will hold any paramenters
	 * 	that are passed.
	 *
	 *	# Protected elements can only be accessed in their own
	 *	class or classes that extend it
	 *
	 */
	// Set the default controller if none are set
	protected $controller = 'home';

	// Set the default function from that controller
	protected $method = 'index';

	// Set the variable to hold the parameters
	protected $params = [];


	/**
	 * Construct the App
	 *
	 * @param 	var  	$argument Not used, ready for multi-site
	 */
  	function __construct($site=null)
  	{

		/**
		 * Parse the URL
		 *
		 * The first thing we do is to take the url in parts ready to build
		 * using parseUrl() and set it to a class variable.
		 *
		 * Again using one of the paths is the default set-up
		 * http://site.com/Folder/Subfolder/subfoldercontroller/method
		 * this will result in $this->url containing
		 *
		 * Array (
		 * 	[0] => folder
		 * 	[1] => subfolder
		 * 	[2] => subfoldercontroller
		 * 	[3] => method
		 * )
		 *
		 */
	    $this->url = $this->parseUrl();

		/*
			Set the path to the controllers directory.

			We will add to this if required as we go on.
		 */
		$this->controller_path = '../app/controllers/';

        /*
            In a multi-site set up, if $site is set when calling App()  the
            controller path with be set to the same-named folder in /app/controllers/
         */
        if(isset($site))
        {
   		  $this->controller_path .= $site.'/';
   	    }

		/*
			Build the directory path and controller

			We only do this if there has been a URL passed and
			therefore $this->url is not empty. Otherwise we will
			use the default controller set at the top of the page.
		 */
		if($this->url)
		{
			/*
				Build the path

				We loop through the array stored in $this->url and for each
				element we check to see if it is a directory.
				If it is we append it to the end of $this->controller_path
				and then unset it from the array so when the loop is finished
				we are left with just controllers or methods.
				We continue to do this until we find an element that is not
				a directory, at which point we break out of the loop.
			 */
			foreach ($this->url as $key => $value)
			{
				// See if $value added to the end of $this->controller_path is a directory
				if(is_dir($this->controller_path.$value))
				{
					// It is a directory so add it to the end of $this->controller_path
					$this->controller_path .= $value.'/';

					// Unset the element from the array
					unset($this->url[$key]);

				} else
				{
					// It is not a directory so break out of the loop
					break;
				}
			} // Set path

			/*
				At this point we reorder the array so that it starts from 0 again.

				The reason we do this is that when we originally parsed the URL, the
				controller may have been set at any key. By reordering it now, we know
				that the elements start from 0 again so we know where we are looking for
				the controller or method
			 */
			$this->url = array_values($this->url);

			/*
				Set the Controller

				Unlike the directories, we know that there can be only one controller
				so we simply have to check position 0 in the array.

				We do this by simply adding the value to the end of the controller path, adding '.php' to that and checking if that file exists.
				If it does exist, we set it as the controller and unset it to leave us
				with only the methods and parameters.

				Again we start of by checking if $this->url contains anything as if it
				does not, we have nothing to check.
			 */
			if($this->url)
			{
				// Check if position 0 in $this->url corresponds to a valid file
				if(file_exists($this->controller_path . $this->url[0] .'.php'))
				{
					// It does exist so set the controller to match it
					$this->controller = $this->url[0];

					// Unset the element from the array
					unset($this->url[0]);

					// Reorder the array so that it starts from 0 again.
					$this->url = array_values($this->url);

				} // if file exists
			} // Controller if($this->url)
		} // Directory if($this->url)
		/*
			Now we have the complete path and controller, we require it into
			the file and then reset $this->controller as a new instance of the
			controller.
		 */
		require_once $this->controller_path . $this->controller .'.php';
		$this->controller = new $this->controller();

		/*
			Set the Method

			At this point, if there is anything left in $this->url, it can only
			be a method or a parameter.

			Like with the Controller, we can only have one Method so we simply
			check to see if it exists in the Controller. If it does, we set it as
			the method and then unset it.
		 */
		if($this->url)
		{
			// Check if position 0 in $this->url corresponds to a function in the controller
			if(method_exists($this->controller, strtolower($this->url[0])))
			{
				// It does exist so set it as the method
				$this->method = $this->url[0];

				// Unset the element from the array
				unset($this->url[0]);
			}
		} // Method if($this->url)

		/*
			At this point, if $this->url still contains anything, it can only be
			parameters. We strip out just the values left in $this->url and set
			it to our parameters array.
		 */
		$this->params = $this->url ? array_values($this->url) : [];



		/*
			Call the correct function

			Now that we have everything we need, we call the correct function
			name by concatenating the controller and method and passing in
			any parameters.

			This will open the function to perform the logic and pass the results
			to the view.
		 */
		call_user_func_array ([$this->controller,$this->method],$this->params);
  	} // __construct


	/**
	 * Parse the URL
	 * @return array 	Parts of the URL
	 */
	public function parseUrl ()
	{
		// No point doing anything if we are at the root page so check we have anything to look at
		if (isset($_GET['url']))
		{
			// If we do have a url, explode it and then use rtrim to remove the trailing slashes
			return $this->url = explode('/', filter_var(rtrim($_GET['url'], '/'), FILTER_SANITIZE_URL));
		}
	} // parseUrl ()

}
 ?>
