<?php

/**
 *  Demo Core File - based on Usergroups
 *
 *  Extends the relative model beyound the basic CRUD functions. As a
 *  result, all functions and variables in this file can be accessed when
 *  initiating the model.
 *
 *  This file primarily contains forms and displays but also can contain
 *  other functions that are not suited for the general use model.
 *
 *  @package Core
 *  @author  Steve Ball <steve@follyball.co.uk>
 *  @copyright Copyright (c) 2017 Steve Ball <steve@follyball.co.uk>
 *
 *  TODO: Remove required on slug field and auto-create when empty
 *  TODO: Changing the case of the name does not pass validation - make it case sensitive
 */

// Include the initiation file
require_once '../app/init.php';

class Usergroups_Core {

    public static
       $_default_submit_button = 'usergroup_submit',
       /*
           Default form fields for the create and update forms

           This array holds everything required to show the forms,
           along with any validation status.

           'type' 		required 	The type of form input required for the field
           This must be one of the options available in Form_Functions::createFormGroup()

           'help' 		optional		Help text to show below the form field

           'error' 		optional		Text to return after a validation error on the field. If ommitted, it will default to text for the validation type in Validate::check()

           'validation'	optional		The validation rules to run against the field

       */
       $_default_form_fields = array (
           'name' => array(
               'type' => 'text',
               'help' => 'The distinctive name of the group',
               'validation' => array(
                   'required' => true,
                   'min' => 6,
                   'max' => 20,
                   'unique' => 'user_groups',
               ),
           ),
           'permissions' => array (
               'type' => 'textarea',
               'validation' => array(
                   'required' => true,
               ),
           ),
           'slug' => array(
               'type' => 'text',
               'validation' => array(
                   'unique' => 'user_groups',
                )
           ),

           'buttons' => array(
               'type' => 'text',
               'error' => 'You must accept the terms of registration',
               'validation' => array(
                   'required' => true,
                   'message' => 'You must accept the terms'
               ),
           ),
        );

	private
        $_params,
		$_text,
        $_value,
        $_input_array,
        $_inputs = array ();


    /**
	 * Connect to the database
	 *
	 * Returns an instance of the database connection to be used
	 * within the class. This is set as a function as it also needs
	 * to be accessed by the model.
	 *
	 * @return  Database connection
	 */
	protected function db()
	{
		return  DB::dbConnect();
	} // db()

    /**
     * Create / Update / form
     *
     * The form for both creating and updating the record, complete with
     * validation and populated when in update mode.
     *
     * We actually call a specific function for the form -
     * admin_edit_form(), admin_create_form() with as few parameters
     * as possible and then call this function from within passing in all required
     * parameters.
     *
     * @param  array $_params   Parameters
     * @return string           Complete form
     */
    public static function default_form ($_params=array())
    {
        /**
         * Set the output variable
         *
         * The final output will be built as a variable called
         * $text so create it ready to add to
         *
         * @var null
         */
        $_text = '';

        // Build the opening <form> tag using the 'name' $param as the id
        $_text .= '<form id="' . $_params['name'] . '_form" action="" method="post" class="req-token">';

        /**
         * Loop through the inputs array and build the form groups for each
         *
         * Using $_default_form_fields at the top of this file, we loop through
         * each one setting the required parameters to pass into
         * Form_Functions::createFormGroup() and create the form.
         */
        foreach (self::$_default_form_fields as $key => $_value)
        {
            // Create an empty array to store the details to pass
            $_input_array = array();

            /*
                Add the input type to the array

                This is the type of input we are calling such as 'text', 'select',
                'textarea' etc.
            */
            $_input_array['type'] = $_value['type'];

            /*
                If the form has been posted and there are errors, we need to set
                validation classes for the inputs.

                We do this by simply passing the key and errors into Form_Functions::setValidation () which will return either 'is-valid'
                or 'is-invalid'.
            */
            if(Input::get(self::$_default_submit_button) && isset($_params['errors']) && is_array($_params['errors']))
            {
                $_input_array['validation'] = Form_Functions::setValidation ($key, $_params['errors']);
            }
            else
            {
                $_input_array['validation'] = '';
            }

            /*
                We now set the value to display in the input.

                If we are in create mode, there will be no default population but
                if we are in edit mode, the field will need to be populated with
                the existing data.

                Either way, if there has been a post attempt, this will override
                any defaults and the input will be populated with that.

                This will prevent people from having to fill in the whole form
                again after a failed post.
             */
            if(isset($_params['record']) && isset($_params['record']->$key))
            {
                // Record is set so set the default to the key if there is no post data
                $_input_array['value'] = (Input::get($key)) ? Input::get($key) : $_params['record']->$key;
            }
            else
            {
                $value = ($key == 'permissions') ? '{"god": 0, "admin": 0, "mod": 0}' : '' ;

                // Record is not set so set the default to '' if there is no post data
                $_input_array['value'] = (Input::get($key)) ? Input::get($key) : $value;
            }

            // If any help text has been passed, show it here
            $_input_array['help'] = (isset($_value['help'])) ? $_value['help'] : '';


            /*
                Create the formgroup

                When we pass everything created above into  Form_Functions::createFormGroup ()
                it will create the who formgroup and set it to a variable with
                a prefix of $_input_ to allow us to the use in the body of the form.

                For example, if the key passed in is 'username' we will get a variable
                called $_input_username.
             */
            $_inputs[$key] = Form_Functions::createFormGroup (
                $_value['type'],
                $key,
                $_input_array['value'],
                $_input_array['validation'],
                $_input_array['help']
            );

        } // foreach  $_default_form_fields

        // Start building the body of the form
        $_text .= '<div class="row">';
        $_text .= '<div class="col-12">';
        $_text .= $_inputs['name'];
        $_text .= '</div><!-- .col-12 -->';
        $_text .= '</div><!-- .row-->';

        $_text .= '<div class="row">';
        $_text .= '<div class="col-md-6">';
        $_text .= $_inputs['permissions'];
        $_text .= '</div><!-- .col-md-6 -->';

        $_text .= '<div class="col-md-6">';
        $_text .= $_inputs['slug'];
        $_text .= '</div><!-- .col-md-6 -->';

        $_text .= '</div><!-- .row-->';


        $_text .= '<hr>';


        $_text .= '<div class="col-12">';
        $_text .= '<button type="submit" class="btn btn-primary btn-sm float-right" name="'.self::$_default_submit_button.'" value="submit">Submit</button>';
        $_text .= '</div>';
        $_text .= '</form>';

        // Return the output
        return $_text;

    } // default_form ()

    /**
     * Call the default form in create mode
     *
     * @param  array/null   $_errors    Errors returned after a form post
     * @return function     default_form()
     */
    public static function admin_create_form($_errors=null)
    {
        return self::default_form($_params=array('errors' => $_errors, 'name' => 'create'));
    }

    /**
     * Call the default form in edit mode
     *
     * @param  array        $_record    Data to populate the form
     * @param  array/null   $_errors    Errors returned after a form post
     * @return function     default_form()
     */
    public static function admin_edit_form ($_record, $_errors=null)
	{
		return self::default_form($_params=array('errors' => $_errors, 'name' => 'update', 'record' => $_record));
	}

	/**
	 * Show the overview
	 *
	 * Shows an overview of the section and is infinitely adaptable
	 *
	 * @param  array  $params All parameters required to build the page
	 * @return string         Entire content
	 */
	public static function overview ($_params=array())
	{
		$_text =  '';

		$_text =  '<b>Groups : </b>' . $_params['count'] . '<br>';

		return $_text;
	}

	/**
	 * Show the record details in the admin area
	 *
	 * Compiles everything to be shown on the records details page
	 * in the admin area.
	 *
	 * Again, Users is more complicated as most due to the options
	 * to ban, unban and verify a user as well as changing their
	 * user group.
	 *
	 * @param  array  $params All parameters required to build the page
	 * @return string         Entire content
	 */
	public static function showDetailsAdmin ($_params=array())
	{
		// Start the output by creating an empty $text variable
		$_text = '';

		/*
			Now that the forms are out of the way we can get on with displaying
			the users details.

			There are no restrictions on what can be done here.
		*/
		$_text .=  '<b>ID : </b>' . $_params['record']->id . '<br>';
		$_text .=  '<b>Name : </b>' . $_params['record']->name . '<br>';
		$_text .=  '<b>Permissions : </b>' . $_params['record']->permissions . '<br>';

		// Return the output
		return $_text;

	} // showDetailsAdmin ()

}
