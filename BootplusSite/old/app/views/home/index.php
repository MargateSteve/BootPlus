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
$output .= '<div class="card mb-3 border-primary text-dark">';
$output .= '    <h4 class="card-header bg-primary text-light">';
$output .= '    Users';
$output .= '    </h4>';
$output .= '  <div class="card-body">';
$output .= '    dsfdsdfs<br>';
$output .= '  </div>';
$output .= '</div>';

$output .= 'Add border compliment and link compliment';
/**
 * Pass the details to the template
 *
 * @var string 	Data to be shown
 * @var string 	Version on template to use
 * @var string 	Title of the page
 */
$template = new Main_Template (
    $output,
    $params = array (
        //'version' => 'right-col',
        'page_title' => $data->page_name,
        //'display_title' => false,
        'page_sub_title' => 'This is using Template Number 2',
        //'default_css' => 'dark_theme'
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
