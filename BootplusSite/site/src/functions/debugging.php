<?php

function debugging_method ($file, $function, $args) {
    if(SiteSettings::$debug_mode) {

        $c = explode( '\app\\',$file);
        $c = str_replace('\\','\\\\',$c[1]);
        echo "<script>console.log('Controller: $c->$function(";
        echo implode($args, ',');
        echo")')</script>";
    }
    return null;
}


function query_debugging ($qn,$db,$p) {
    if(SiteSettings::$debug_mode) {
        echo $qn;
        nicePrint_r($p, 'Post');
        nicePrint_r($db, 'DB');
    }
    return null;
} // query_debugging

function debugging_view ($file, $function) {
    if(SiteSettings::$debug_mode) {

        $v = explode( '\app\\',$file);
        $v = str_replace('\\','\\\\',$v[1]);
        echo "<script>console.log('View: $v->$function()')</script>";

        $starttime = microtime(true);
        $endtime = microtime(true);
        debugging_times ();
    }
    return null;
} // debugging_view


function debugging_times () {
    if(SiteSettings::$debug_mode) {
        echo "<script>window.onload = function () {
            var loadTime = window.performance.timing.domContentLoadedEventEnd-window.performance.timing.navigationStart;console.log('Page load time: '+ loadTime/1000 + ' seconds');
            }</script>";
    }
    return null;
} // debugging_times

function debugging ($data, $view) {
    if(SiteSettings::$debug_mode) {

        $c = explode( '\app\\',$data['paths']['file']);
        $v = explode( '\app\\',$view);
        return Php2Bs::bs_card ([
            'class' => 'border-dark bg-light mb-1',
            'body' => [
                'content' => '
                    <b>C:</b> '.$c[1].'->'.$data['paths']['method'].'('.
                    implode($data['paths']['args'], ',')
                    .')<br>
                    <b>V:</b> '.$v[1].'->'.
                    $data['page_type'].'()'
            ],
        ]).bs_breakpoint ();// bs_card table
    }
    return null;
} // debugging_times
