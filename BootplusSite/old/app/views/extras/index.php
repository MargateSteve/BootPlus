<?php

/**
 * Home Page View
 *
 * This only controls the view from the home page of the site.
 *
 * No formatting is carried out anywhere and all that is passed in is an
 * array. The entire layout is styled within this file.
 *
 * @package 	Core
 * @author  	Steve Ball <steve@follyball.co.uk>
 * @copyright 	Copyright (c) 2017 Steve Ball <steve@follyball.co.uk>
 * @example 	/app/controllers/home.php->index()
 * @link 		http://site.com/
 *
 */

 /**
  * Collect the passed in data and turn it into an object
  * @var array
  */
$data = (object)$data;

# Uncomment the below to see any data passed in or any $_POST data
// nicePrint_r($data, 'Data');
// nicePrint_r($_POST, 'Post');

/**
 * Start the output string that will be passed to the template
 * @var string
 */
$output = '';

if($data->page_name == 'Extras')
{
	$extras = new Extras_Model;
	$output .= $extras->overview();
}

if($data->page_name == 'Content')
{
	$extras = new Extras_Model;
	$output .= $extras->overview();
}

$page_description = (isset($data->page_description)) ? $data->page_description : '';


/**
 * Pass the details to the template
 *
 * @var string 	Data to be shown
 * @var string 	Version on template to use
 * @var string 	Title of the page
 */
$template = new Extras_Template (
    $data->content,
    $params = array (
        //'version' => 'right-col',
        'page_title' => $data->page_name,
        //'display_title' => false,
        'page_sub_title' => $page_description,
        'default_css' => 'extras_int',
        'include' => array (
            'css' => array (
                'css/local/extras_docs'
            )
        ),
        'category' => $data->category,
        'link' => $data->link,
    )
    /*
    $include = array (
        'css' => array (
            'css/local/site',
            'css/local/admin'
        ),
        'js' => array (
            'js/local/shared',
            'js/local/default'
        )
    ) */

);
