<?php

/**
 * Home Page View
 *
 */
require_once '../src/init.php';

//nicePrint_r($data, 'Data');

$t = new T_Docs;


$t->set_body_class('bg-light');
$t->render_titles($data);

$t->set_content($data['function']($t,$data));
$t->render();

function index($t,$d) {

}


function colors($t,$d) {

}







function add_extras($t,$d) {
    $t->set_meta(['name'=>'Test Meta','author'=>'Test Author']);
    $t->set_css_files(['remote/simple-line-icons']);
    $t->set_js_files(['remote/jquery_ui']);
    $t->set_page_js('alert("testing")');
    $o = '<div class="col-12">';
    $o .= $d['content'];
    $o .= '</div>';

    return $o;
}

$settings['layout'] = 'right-col';


$content = '';

if(isset($data['crumbs'])) {
    $settings['crumbs'] = $data['crumbs'];
}

debugging_view(__FILE__,$data['function']);
debugging_times();
