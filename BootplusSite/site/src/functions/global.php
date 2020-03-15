<?php

/**
 * Global functions
 *
 * Functions that can be used anywhere within the site, both front end and backend
 *
 * @package Core
 * @author  Steve Ball <steve@follyball.co.uk>
 * @copyright Copyright (c) 2017 Steve Ball <steve@follyball.co.uk>
 */







foreach (glob('../src/functions/*.php') as $filename) {
    if($filename !== '../src/functions/global.php') {
        require_once ($filename);
    }
}


function example_settings () {
    return ['border'=>[
                'size'=>2,
                'color'=>'lightgray200'
            ],
            'code' => [
                'bg'=>'lavender100'
            ],
            'compile' => [
                'title'=>'Compile',
                'bg'=>'bisque100',
                'text'=>'burlywood800',
                'border'=>[
                            'size'=>2,
                            'color'=>'bisque600'
                        ]
            ],
            'variable' => [
                'color'=>'purple'
            ],
            'file' => [
                'color'=>'darkred'
            ],
            'see_also' => [
                'title'=>'Also see...',
                'bg'=>'pink100',
                'text'=>'pink800',
                'border'=>[
                            'size'=>2,
                            'color'=>'pink600'
                        ]
            ]

    ];
}


function show_variable ($content) {
    return '<span class="text-'.example_settings ()['variable']['color'].'">'.$content.'</span>';
}

function show_file ($content) {
    return '<span class="text-'.example_settings ()['file']['color'].'">'.$content.'</span>';
}


function compile_box ($content, $id=false) {
    $s=example_settings ();

    $o = '<div class="bg-'.$s['compile']['bg'].' border border-'.$s['compile']['border']['size'].' border-'.$s['compile']['border']['color'].' text-'.$s['compile']['text'].' p-2 mb-2"';
    if($id) {
        $o .= ' id="'.$id.'"';
    }
    $o .= '>';
    $o .= '<h5>'.$s['compile']['title'].'</h5>';
    $o .= '<p>'.$content.'</p>';
    $o .= '</div>';
    return $o;
}

function see_also_box ($content) {
    $s=example_settings ()['see_also'];

    $o = '<div class="bg-'.$s['bg'].' border border-'.$s['border']['size'].' border-'.$s['border']['color'].' text-'.$s['text'].' p-2 mb-2">';
    $o .= '<h5>'.$s['title'].'</h5>';
    $o .= '<p>'.$content.'</p>';
    $o .= '</div>';
    return $o;
}




function element_display ($element,$core_class='',$disp_class='',$content) {
    $o = '<'.$element['tag'].' ';
    $o .= 'class="'.$element['class'].$core_class;
    if($disp_class) {
        $o .= ' '.$disp_class;
    }
    $o .='"';
    if(isset($element['extra'])) {
        $o .= ' '.$element['extra'];
    }
    $o .= '>';
    $o .= $content;
    $o .= '</'.$element['tag'].'>';
    return $o;
    //'<span class="text-{class} contrast w-100">{name}</span>'
}


function element_code ($element,$core_class='',$disp_class='',$content) {
    $o = '<span class="nt">&lt;'.$element['tag'].'</span>';
    $o .= '<span class="na"> class=</span><span class="s">"'.$element['class'].$core_class.'"</span>';
    $o .= '<span class="nt">';
    if(isset($element['extra'])) {
        $o .= ' '.$element['extra'];
    }
    $o .= '&gt;</span>';
    $o .= $content;
    $o .= '<span class="nt">&lt;/'.$element['tag'].'&gt;</span>';
    return $o;
}

function nicePrint_r ($array, $title = null) {
    echo '<pre class="bg-light text-success border border-dark m-4 p-4">';
    echo (isset($title)) ? '<h1>'.$title.'</h1>': '';
    print_r($array);
    echo '</pre>';

} // nicePrint_r ()



function show_text_colors ($array) {
   $output = '';
   foreach ($array as $key=>$value) {
       $output .= inline_text ($key);
   }
   return $output;
}

function show_bg_colors ($array, $setclass=null, $link=false) {
   $output = '';
   foreach ($array as $key=>$value) {
       $output .= inline_bg ($key,$setclass,$link);
   }
   return $output;
}

function inline_text ($value, $setclass=null) {

   $output = '<p class="';
   $output .= 'text-'.$value .' contrast';
   $output .= ($setclass) ? ' ' . $setclass: '';
   $output .= ' mr-2 d-inline-block px-1 mb-1">';
   $output .= $value;
   $output .= '</p>';

   return $output;
}

function inline_bg ($value, $setclass, $link) {

    $output = '<p class="';
    $output .= 'bg-'.strtolower($value) .' contrast';
    $output .= ($setclass) ? ' ' . $setclass: '';
    $output .= ' mr-2 d-inline-block px-1 mb-1">';
    if($link) {
        $output .= '<a href="'.str_replace('{color}',$value, $link).'" class="stretched-link">'.$value.'</a>';
    } else {
        $output .= $value;
    }

   $output .= '</p>';

   return $output;
}
