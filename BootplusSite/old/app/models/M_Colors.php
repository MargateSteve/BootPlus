<?php

/**
 * Demo Model - based on Usergroups
 *
 * Contains the standard functions but also extendsrelative _Core class,
 * which contains any other functions for data manipulation, as well as
 * the CRUD forms and displays.
 *
 * @package Core
 * @author  Steve Ball <steve@follyball.co.uk>
 * @copyright Copyright (c) 2017 Steve Ball <steve@follyball.co.uk>
 */

// Include the initiation file
require_once '../app/init.php';

class M_Colors extends Functions
{
    private function core_colors ()
    {
        $color_examples = '';

        $color_examples .= $this->show_text_colors ($this->get_base_colors());
        $color_examples .= '<br>';
        $color_examples .= $this->show_text_colors ($this->get_extra_colors());

        return $color_examples;
    }

    private function shades ()
    {
        $out = '';

        $out .= Html::h(
            '<code>text-*-*</code>',
            $params = array (
                'size' => 4,
                'class' => 'mt-1'
            )
        );

        foreach ($this->get_all_colors() as $value)
        {
            $out .= '<div class="row">';
            $out .= '   <div class="col-lg-2 text-'.$value.' mt-2 ">'.$value.'</div>';

            $out .= '   <div class="col-lg-10">';


            $out .= $this->show_text_shades ($value, $setclass='contrast');


            $out .= '   </div>';
            $out .= '</div>';
        }

        $out .= Html::h(
            '<code>bg-*-*</code>',
            $params = array (
                'size' => 4,
                'class' => 'mt-1'
            )
        );

        foreach ($this->get_all_colors() as $value)
        {
            $out .= '<div class="row">';
            $out .= '   <div class="col-lg-2 text-'.$value.' mt-2 ">'.$value.'</div>';

            $out .= '   <div class="col-lg-10">';
            $out .= '       <div class="row">';

            $out .= $this->show_bg_shades ($value, $setclass='contrast');

            $out .= '       </div>';
            $out .= '   </div>';
            $out .= '</div>';
        }

        return $out;
    }


    ////////////////////////
    // Output             //
    ////////////////////////

    public function page_display ()
    {
        $out = '';

        $out .= Html::p(
            'Extends the <code>.text-*</code> and <code>.bg-*</code> utilities with the extra ' . $this->count_bootstrap_colors() . ' colors included in Bootstrap\'s .scss as well as <strong> Bootstrap Extra\'s </strong> ' . $this->count_base_colors() . ' core colors and ' . $this->count_extra_colors() . ' extra colors, all in 9 different shades, giving ' .  ($this->count_all_colors()*9) . ' total variations. Ok, a few may turn out to be the same color but they have different names so we are counting them.
            <br>
            All of these can be combined with each other to create a custom variation, or with the <a href="/Docs/Utilities/Contrast">.contrast</a>, <a href="/Docs/Utilities/Complement">.complement</a>, <a href="/Docs/Utilities/Invert">.invert</a>, <a href="/Docs/Utilities/Blend">.blend</a> and <a href="/Docs/Utilities/Blend">.blend-*</a> utilities.',
            $params = array (
            )
        );
        $out .= $this->page_section(
            $title = null,
            $pream = null,
            $content = $this->core_colors(),
            $code = null
        );


        $out .= $this->page_section(
            $title = 'Color Shades',
            $pream = 'Each of the <strong> Bootstrap Extra</strong> colors can be used as a shade between 100 and 900 to give a full range of color options using <code>.text-*-*</code> and <code>.bg-*-*</code> utilities.
            <br>
            Note that the 500 option is the same as the standard version of that color.',
            $content = $this->shades()
        );

        return $out;
    }
}
