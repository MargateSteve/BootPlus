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

class M_Contrast extends Functions
{

    public function __construct ()
    {

        # check redundent stuff
    }

    private function core_colors ()
    {
        $color_examples = '';

        $color_examples .= $this->show_text_colors ($this->get_all_colors(), $setclass='contrast');

        return $color_examples;
    }

    private function core_colors_code ()
	{
        $code_example_core = '';
        foreach ($this->get_example_settings () as $value)
        {
            $code_example_core .= $this->code_text (
                $class = 'text-'.$value.' contrast',
                $text = $value
            );
        }

        $code_example_core .= '<br>';

        foreach ($this->get_example_settings () as $value)
        {
            $code_example_core .= $this->code_bg (
                $class = 'bg-'.$value.' contrast',
                $text = $value
            );

        }

        return $code_example_core;
    }

    private function shades ()
	{
        $output = '';

        $output .= Html::h(
            '<code>text-*-* contrast</code>',
            $params = array (
                'size' => 4,
                'class' => 'mt-1'
            )
        );

        foreach ($this->get_example_settings() as $value)
        {
            $output .= '<div class="row">';
            $output .= '   <div class="col-lg-2 text-'.$value.' mt-2 ">'.$value.'</div>';

            $output .= '   <div class="col-lg-10">';


            $output .= $this->show_text_shades ($value, $setclass='contrast');


            $output .= '   </div>';
            $output .= '</div>';
        }

        $output .= '<hr>';

        $output .= Html::h(
            '<code>bg-*-* contrast</code>',
            $params = array (
                'size' => 4,
                'class' => 'mt-1'
            )
        );

        foreach ($this->get_example_settings() as $value)
        {
            $output .= '<div class="row">';
            $output .= '   <div class="col-lg-2 text-'.$value.' mt-2 ">'.$value.'</div>';

            $output .= '   <div class="col-lg-10">';
            $output .= '       <div class="row">';

            $output .= $this->show_bg_shades ($value, $setclass='contrast');

            $output .= '       </div>';
            $output .= '   </div>';
            $output .= '</div>';
        }

        return $output;
	}

    private function shades_code ()
	{
        $code_example_core = '';


        foreach ($this->get_palette_numbers () as $val)
        {
            if($val>100 && $val<900)
            {
                if($val==800)
                {
                    $code_example_core .= '...<br>';
                }
            }
            else
            {
                $code_example_core .= $this->code_text (
                    $class = 'text-blue-'.$val . ' contrast',
                    $text = $val
                );
            }

        }

        $code_example_core .= '<br>';




        foreach ($this->get_palette_numbers () as $val)
        {
            if($val>100 && $val<900)
            {
                if($val==800)
                {
                    $code_example_core .= '...<br>';
                }
            }
            else
            {
                $code_example_core .= $this->code_bg (
                    $class = 'bg-blue-'.$val . ' contrast',
                    $text = $val
                );
            }

        }
        $code_example_core .= '<br>';



        return $code_example_core;
    }




    ////////////////////////
    // Output             //
    ////////////////////////

    public function page_display ()
    {
        $out = '';
		$color_examples = '';

        $out .= Html::p(
            'Used alongside <code>.text-*</code> and <code>.bg-*</code> utilities, contrast sets the opposing color to black or white to ensure the text stands out.',
            $params = array (
            )
        );

        $out .= $this->page_section(
            $title = 'Core Colors',
            $pream = null,
            $content = $this->core_colors(),
            $code = $this->core_colors_code()
        );


        $out .= $this->page_section(
            $title = 'Color Shades',
            $pream = 'Each of the <a href="/Utilities/Colors">Color shades</a> can also utilise the '. Html::code(
                '.contrast',
                $params = array (

                )
            ). ' utility.',
            $content = $this->shades(),
            $code = $this->shades_code()
        );

        return $out;
    }
}
