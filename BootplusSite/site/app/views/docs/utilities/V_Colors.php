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

function singlecolor($t,$d,$s) {
    $o = '';
    foreach ($d['elements'] as $key => $value) {
        $o .= '<div class="col-12">';
        $o .= '<div class="row">';
        $o .= '<div class="col-12">';
        $o .= '<h5>'.$key.'</h5>';
        $o .= '</div>';
        $o .= '</div>';
        $o .= '<div class="row mx-0">';
        $o .= '<div class="col-12 col-xl-6">';
        $o .= '<div class="row mb-1">';
        foreach (['100','200','300','400','500',
                  '600','700','800','900'] as $shade) {
            $o .= '<div class="col px-0 d-flex '.$shade.'">';

            $extra_class =  '';
            switch ($key) {
                case 'Text':
                case 'Background':
                case 'Link':
                    $extra_class =  ' contrast w-100 flex-grow-1 ';
                    break;

                default:
                    // code...
                    break;
            }

            if($shade=='500') {
                $o .= element_display ($value['e'],
                                       strtolower($d['color']),
                                       $extra_class,
                                       '{'.$shade.'}');
            } else {
                $o .= element_display ($value['e'],
                                       strtolower($d['color'].$shade),
                                       $extra_class,
                                       $shade);
            }


            // $v = str_replace('{name}', $shade, $value['e']);
            // $v = str_replace('{class}', strtolower($d['color']).$shade, $v);
            //
            // if($shade == '500') {
            //   $v = str_replace('text-'.strtolower($d['color']).'500', 'text-'.strtolower($d['color']), $v);
            //   $v = str_replace('>500<', '>{500}<', $v);
            // }
            // $o .= $v;
            $o .= '</div>';

        }
        $o .= '</div>';

        $o .= '</div>';

        $o .= '<div class="col-12 col-xl-6 pl-0 pl-md-1">';
        $o .= element_code ($value['e'],
                               strtolower($d['color'].$shade),
                               ' contrast w-100 flex-grow-1 ',
                               $shade);
        $o .= '</div>';
        $o .= '<div class="col-12">';
            $o .= '<hr>';
       $o .= '</div>';
        $o .= '</div>';
        $o .= '</div>';
    }

    return $o;
}


function index($t,$d,$s) {
    echo 'aaaaaaa';
    $o = '<div class="col-12">';
    $o .= '<p>Extends the <code>.text-*</code> and <code>.bg-*</code> utilities extra '.count($d['base']).' base colors and '.count($d['extra']).' extra colors, all in 9 different shades, giving '.(count($d['base']+$d['extra'])*9).' total variations. Ok, a few may turn out to be the same color but they have different names so we are counting them. With the number of colors, though, including them all creats a large css file so it is recommended that you <a href="#color_compile">compile your own</a> and choose the colors you want.</p>
    <p>All of these can be combined with each other to create a custom variation, or with the <a href="/Docs/Utilities/Colors/Contrast">.contrast</a>, <a href="/Docs/Utilities/Colors/Complement">.complement</a>, <a href="/Docs/Utilities/Colors/Invert">.invert</a>, <a href="/Docs/Utilities/Colors/Blend">.blend</a> and <a href="/Docs/Utilities/Colors/Blend">.blend-*</a> utilities.</p>
    <p>The examples on this page all use the color as a background, plus have the <a href="/Docs/Utilities/Colors/Contrast">.contrast</a> class to ensure you can see the text. Click on any of the colors to see all uses, including for all color shades available.</p>';



    $o .= '<div class="card border border-'.$s['border']['size'].' border-'.$s['border']['color'].'  mb-4">';
    $o .= '<div class="card-body border-bottom border-'.$s['border']['color'].'">';
    $o .= '<h5 class="card-title">Base Colors</h5>';
    $o .= '<div class="card-text">';
    $o .= show_bg_colors ($d['base'], $setclass=null, $link='/Docs/Utilities/Colors/{color}');
    $o .= '</div><!--card-text-->';
    $o .= '</div><!--card-body-->';

    $o .= '<div class="card-body">';
    $o .= '<h5 class="card-title">Extra Colors</h5>';
    $o .= '<div class="card-text">';
    $o .= show_bg_colors ($d['extra'], $setclass=null, $link='/Docs/Utilities/Colors/{color}');
    $o .= '</div><!--card-text-->';
    $o .= '</div><!--card-body-->';
    $o .= '</div><!--card-->';

    $o .= '<h3 class="">Color Shades</h3>';
    $o .= '<p>Every color comes in 9 different shades that can be used also be used. Using a scale of 100 (lightest) to 900 (darkest) added to the color name you get 8 extra variations of each color. Note though that, as a space saving measure, there is no 500 variant because that is the same as the actual color!</p>';

    $o .= '<div class="card border border-'.$s['border']['size'].' border-'.$s['border']['color'].'  mb-4">';
    $o .= '<div class="card-body border-bottom border-'.$s['border']['color'].'">';
    $o .= '<div class="card-text">';
    foreach (['blue', 'cyan', 'red'] as $value) {
        $o .= '<div class="row mx-0 mb-1">';
        foreach (['100','200','300','400','500',
                  '600','700','800','900'] as $shade) {
            $o .= '<div class="col-4 col-md px-0 d-flex '.$shade.'">';


            if($shade=='500') {
                $o .= element_display (['tag' => 'div',
                        'class' => 'bg-'
                ],
                                       $value,
                                       ' contrast w-100 flex-grow-1 px-1 ',
                                       $value);
            } else {
                $o .= element_display (['tag' => 'div',
                        'class' => 'bg-'
                ],
                                       $value.$shade,
                                       ' contrast w-100 flex-grow-1 px-1 ',
                                       $value.$shade);
            }

            $o .= '</div>';

        }
        $o .= '</div>';
    }
    $o .= '</div><!--card-text-->';
    $o .= '</div><!--card-body-->';
    $o .= '</div><!--card-->';
    $o .= '<p class="bg-danger">Show grays</p>';
    $o .= compile_box ('To help keep the size down, there are multiple settings avaialble around colors in '.show_file ('scss/_settings.scss').'
    <ul>
        <li>'.show_variable ('$enable-base-colors').' sets whether the 16 base colors are compiled</li>
        <li>'.show_variable ('$enable-extra-colors').' sets whether the 125 extra colors are compiled</li>
        <li>'.show_variable ('$enable-shades').' sets whether the extra shades for each color are compiled</li>
        <li>'.show_variable ('$enable-extra-grays').' sets whether gray color shades are compiled (ignored when '.show_variable ('$enable-shades').' is false)</li>
    </ul>

    As well as this, it is simple to remove any colors you do not want. In '.show_file ('scss/_variables.scss').' just comment out the colors in the '.show_variable ('$base-colors').' and '.show_variable ('$extra-colors').' arrays.');


/*
    $o .= '<br>';
    $o .= '<br>';

    $o .= '<ul class="nav nav-tabs" id="myTab" role="tablist">';
    $o .= '<li class="nav-item">';
    $o .= '<a class="nav-link active" id="text-tab" data-toggle="tab" href="#text" role="tab" aria-controls="text" aria-selected="true">Text</a>';
    $o .= '</li>';
    $o .= '<li class="nav-item">';
    $o .= '<a class="nav-link" id="bg-tab" data-toggle="tab" href="#bg" role="tab" aria-controls="bg" aria-selected="false">Background</a>';
    $o .= '</li>';
    $o .= '</ul>';
    $o .= '<div class="tab-content" id="myTabContent">';
    $o .= '<div class="tab-pane fade show active" id="text" role="tabpanel" aria-labelledby="home-tab">';
    $o .= '<div class="border border-top-0 border-lightgray-200 mt-0 p-4">';
    $o .= show_text_colors ($d['base']);
    $o .= '<hr>';
    $o .= show_text_colors ($d['extra']);
    $o .= '</div>';
    $o .= '</div>';
    $o .= '<div class="tab-pane fade" id="bg" role="tabpanel" aria-labelledby="profile-tab">';
    $o .= '<div class="border border-top-0 border-lightgray-200 mt-0 p-4">';
    $o .= show_bg_colors ($d['base']);
    $o .= '<hr>';
    $o .= show_bg_colors ($d['extra']);
    $o .= '</div>';

*/


    $o .= '</div>';
    return $o;
}


function test_colors () {
    return ['Blue', 'Green', 'Pink', 'Red', 'Brown', 'Yellow'];
}
function contrast_list($t,$d,$s) {
    $o = '<div class="col-12">';
    $o .= '<div class="card border border-'.$s['border']['size'].' border-'.$s['border']['color'].'">';
    $o .= '<div class="card-body border-bottom border-'.$s['border']['color'].'">';
    $o .= '<h5 class="card-title">Base Colors</h5>';
    $o .= '<div class="card-text">';
    $o .= show_bg_colors ($d['base'], $setclass=null, $link='/Docs/Utilities/Colors/Contrast/{color}');
    $o .= '</div><!--card-text-->';
    $o .= '</div><!--card-body-->';

    $o .= '<div class="card-body">';
    $o .= '<h5 class="card-title">Extra Colors</h5>';
    $o .= '<div class="card-text">';
    $o .= show_bg_colors ($d['extra'], $setclass=null, $link='/Docs/Utilities/Colors/Contrast/{color}');
    $o .= '</div><!--card-text-->';
    $o .= '</div><!--card-body-->';
    $o .= '</div><!--card-->';
    $o .= '</div>';
    return $o;
}


function contrast_single($t,$d,$s) {
    $o = '<div class="col-12">';
    $o .= '<div class="card border border-'.$s['border']['size'].' border-'.$s['border']['color'].' mb-4">';
    $o .= '<div class="card-body">';
    $o .= '<h5 class="card-title">Background for Text</h5>';
    $o .= '<div class="card-text">';
    for ($i=100; $i <1000 ; $i+=100) {

        if($i===500) {
            $color = $d['color'];
        } else {
            $color = $d['color'].$i;
        }
        $o .= element_display (['tag'=>'p',
                                'class'=>'text-'.strtolower($color).' contrast'],
                                ' d-inline mr-2 px-1',
                                '',
                                $i);
    }
    $o .= '</div>';
    $o .= '</div><!--card-body-->';
    $o .= '<div class="card-body bg-'.$s['code']['bg'].'">';
    $o .= '<p class="card-text">';
    foreach (['', '600'] as $value) {
        $o .= element_code (['tag'=>'p',
                                'class'=>'text-'.strtolower($d['color']).strtolower($value).' contrast'],
                                '',
                                '',
                                $d['color'].$value);
        $o .= '<br>';
    }
    $o .= '</p>';
    $o .= '</div><!--card-body-->';

    $o .= '<div class="card-body">';
    $o .= '<h5 class="card-title">Text for Background</h5>';
    $o .= '<div class="card-text">';
    for ($i=100; $i <1000 ; $i+=100) {

        if($i===500) {
            $color = $d['color'];
        } else {
            $color = $d['color'].$i;
        }
        $o .= element_display (['tag'=>'p',
                                'class'=>'bg-'.strtolower($color).' contrast'],
                                ' d-inline mr-2 px-1',
                                '',
                                $i);
    }
    $o .= '</div>';
    $o .= '</div><!--card-body-->';
    $o .= '<div class="card-body bg-'.$s['code']['bg'].'">';
    $o .= '<p class="card-text">';
    foreach (['', '600'] as $value) {
        $o .= element_code (['tag'=>'p',
                                'class'=>'bg-'.strtolower($d['color']).strtolower($value).' contrast'],
                                '',
                                '',
                                $d['color'].$value);
        $o .= '<br>';
    }
    $o .= '</p>';
    $o .= '</div><!--card-body-->';

    $o .= '</div><!--card-->';

    $o .= see_also_box ('<a href="/Docs/Utilities/Colors/'.$d['color'].'">'.$d['color'].'</a>,
                         <a href="/Docs/Utilities/Colors/">Colors</a>,
                         <a href="/Docs/Utilities/Colors/Contrast">Contrast</a>

                         ');
    $o .= '</div>';
    return $o;
}

function contrast($t,$d,$s) {
    $o = '<div class="col-12">';
    $o .= '<p>Using the <code>.contrast</code> class you can quickly give text a black or white background and backgrounds a black or white text, based on the lightness of the color.</p>';

    $o .= '<div class="card border border-'.$s['border']['size'].' border-'.$s['border']['color'].' mb-4">';
    $o .= '<div class="card-body">';
    $o .= '<h5 class="card-title">Background for Text</h5>';
    $o .= '<div class="card-text">';
    foreach (test_colors() as $value) {
        $o .= element_display (['tag'=>'p',
                                'class'=>'text-'.strtolower($value).' contrast'],
                                ' d-inline mr-2 px-1',
                                '',
                                $value);
    }
    $o .= '</div>';
    $o .= '</div><!--card-body-->';
    $o .= '<div class="card-body bg-'.$s['code']['bg'].'">';
    $o .= '<p class="card-text">';
    foreach (test_colors() as $value) {
        $o .= element_code (['tag'=>'p',
                                'class'=>'text-'.strtolower($value).' contrast'],
                                '',
                                '',
                                $value);
        $o .= '<br>';
    }
    $o .= '</p>';
    $o .= '</div><!--card-body-->';
    $o .= '<div class="card-body">';
    $o .= '<h5 class="card-title">Text for Background</h5>';
    $o .= '<div class="card-text">';
    foreach (test_colors() as $value) {
        $o .= element_display (['tag'=>'p',
                                'class'=>'bg-'.strtolower($value).' contrast'],
                                ' d-inline mr-2 px-1',
                                '',
                                $value);
    }
    $o .= '</div>';
    $o .= '</div><!--card-body-->';
    $o .= '<div class="card-body bg-'.$s['code']['bg'].'">';
    $o .= '<p class="card-text">';
    foreach (test_colors() as $value) {
        $o .= element_code (['tag'=>'p',
                                'class'=>'bg-'.strtolower($value).' contrast'],
                                '',
                                '',
                                $value);
        $o .= '<br>';
    }
    $o .= '</p>';
    $o .= '</div><!--card-body-->';
    $o .= '</div>';

    $o .= '<p class="">You can also use <code>.contrast</code> with the color shades.</p>';

    $o .= '<div class="card border border-'.$s['border']['size'].' border-'.example_settings ()['border']['color'].' mb-4">';
    $o .= '<div class="card-body">';
    $o .= '<h5 class="card-title">Background for Text</h5>';
    $o .= '<div class="card-text">';
    $i=100;
    foreach (test_colors() as $value) {
        $o .= element_display (['tag'=>'p',
                                'class'=>'text-'.strtolower($value).$i.' contrast'],
                                ' d-inline mr-2 px-1',
                                '',
                                $value.$i);
        $i += 100;
        if($i===500) {$i = 800;}
    }
    $o .= '</div>';
    $o .= '</div><!--card-body-->';
    $o .= '<div class="card-body bg-'.$s['code']['bg'].'">';
    $o .= '<p class="card-text">';
    $i=100;
    foreach (test_colors() as $value) {
        $o .= element_code (['tag'=>'p',
                                'class'=>'text-'.strtolower($value).$i.' contrast'],
                                '',
                                '',
                                $value.$i);
        $i += 100;
        if($i===500) {$i = 800;}
        $o .= '<br>';
    }
    $o .= '</p>';
    $o .= '</div><!--card-body-->';
    $o .= '<div class="card-body">';
    $o .= '<h5 class="card-title">Text for Background</h5>';
    $o .= '<div class="card-text">';
    $i=100;
    foreach (test_colors() as $value) {
        $o .= element_display (['tag'=>'p',
                                'class'=>'bg-'.strtolower($value).$i.' contrast'],
                                ' d-inline mr-2 px-1',
                                '',
                                $value.$i);
        $i += 100;
        if($i===500) {$i = 800;}
    }
    $o .= '</div>';
    $o .= '</div><!--card-body-->';
    $o .= '<div class="card-body bg-'.$s['code']['bg'].'">';
    $o .= '<p class="card-text">';
    $i=100;
    foreach (test_colors() as $value) {
        $o .= element_code (['tag'=>'p',
                                'class'=>'bg-'.strtolower($value).$i.' contrast'],
                                '',
                                '',
                                $value);
        $i += 100;
        if($i===500) {$i = 800;}
        $o .= '<br>';
    }
    $o .= '</p>';
    $o .= '</div><!--card-body-->';
    $o .= '</div>';


    $o .= compile_box ('The <code>.contrast</code> class is optional and can be disabled when compiling by setting <span class="text-'.$s['variable']['color'].'">$enable-contrast-colors</span> to false in <span class="text-'.$s['file']['color'].'">scss/_settings.scss</span>');

    $o .= '<p class="">Not all colors have both black and white contrast variants due to their lightness. To see a list of colors to check what contrasts each of their shades have, <a href="/Docs/Utilities/Colors/Contrast/List"> Click Here </a></p>';

    $o .= '</div>';


    return $o;
}

debugging_view(__FILE__,$data['function']);
debugging_times();
