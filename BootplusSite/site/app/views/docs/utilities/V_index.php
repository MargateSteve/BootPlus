<?php

/**
 * Home Page View
 *
 */
require_once '../src/init.php';

//nicePrint_r($data, 'Data');

$t = new T_Docs;

$s = example_settings ();

$t->set_body_class('bg-light');
$t->render_titles($data);
$t->set_crumbs();
$t->set_content($data['function']($t,$data,$s));
$t->render();




function index($t,$d,$s) {

    $o = '<div class="col-12">';
    $o .= '<a href="/Docs/Utilities/Colors">Colors</a>';
    $o .= '</div>';
    return $o;
}



debugging_view(__FILE__,$data['function']);
debugging_times();
