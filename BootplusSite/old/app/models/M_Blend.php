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

class M_Blend extends Functions
{

    public function __construct ()
    {
        $this->blend_vars = array ('blend', 'blend-hard', 'blend-soft');


        # check redundent stuff

    }
    ////////////////////////
    // Output             //
    ////////////////////////

	private function core_colors ()
	{
        $color_examples = '';

        $color_examples .= $this->show_text_colors ($this->get_all_colors(), $setclass='blend');

        return $color_examples;
	}

    private function core_colors_code ()
	{
        $code_example_core = '';
        foreach ($this->get_example_settings () as $value)
        {
            $code_example_core .= $this->code_text (
                $class = 'text-'.$value.' blend',
                $text = $value
            );
        }

        $code_example_core .= '<br>';

        foreach ($this->get_example_settings () as $value)
        {
            $code_example_core .= $this->code_bg (
                $class = 'bg-'.$value.' blend',
                $text = $value
            );

        }

        return $code_example_core;
    }


    private function shades ()
	{
        $out = '';
        foreach ($this->blend_vars as $var)
        {
            $out .= Html::h(
                '<code>text-*-* ' . $var. '</code>',
                $params = array (
                    'size' => 4,
                    'class' => 'mt-1'
                )
            );

            foreach ($this->get_example_settings() as $value)
            {
                $out .= '<div class="row">';
                $out .= '   <div class="col-lg-2 text-'.$value.' mt-2 ">'.$value.'</div>';

                $out .= '   <div class="col-lg-10">';


                $out .= $this->show_text_shades ($value, $setclass=$var);


                $out .= '   </div>';
                $out .= '</div>';
            }


        }

        foreach ($this->blend_vars as $var)
        {
            $out .= Html::h(
                '<code>bg-*-* ' . $var. '</code>',
                $params = array (
                    'size' => 4,
                    'class' => 'mt-1'
                )
            );

            foreach ($this->get_example_settings() as $value)
            {
                $out .= '<div class="row">';
                $out .= '   <div class="col-lg-2 text-'.$value.' mt-2 ">'.$value.'</div>';

                $out .= '   <div class="col-lg-10">';
                $out .= '       <div class="row">';

                $out .= $this->show_bg_shades ($value, $setclass=$var);

                $out .= '       </div>';
                $out .= '   </div>';
                $out .= '</div>';
            }
        }

        return $out;
	}

    private function shades_code ()
	{
        $code_example_core = '';

        foreach ($this->blend_vars as $var)
        {
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
                        $class = 'text-blue-'.$val . ' ' .$var,
                        $text = 'blue-'.$val
                    );
                }

            }

            $code_example_core .= '<br>';

        }

        foreach ($this->blend_vars as $var)
        {
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
                        $class = 'bg-blue-'.$val . ' ' .$var,
                        $text = 'blue-'.$val
                    );
                }

            }
            $code_example_core .= '<br>';

        }

        return $code_example_core;
    }

    public function text_examples ()
    {
        $out = '';
        foreach ($this->blend_vars as $var)
        {
            $out .= Html::h(
                '<code>text-*-* ' . $var. '</code>',
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


                $out .= $this->show_text_shades ($value, $setclass=$var);


                $out .= '   </div>';
                $out .= '</div>';
            }


        }

        return $this->page_section(
            $title = null,
            $pream = null,
            $content = $out

        );
    }

    public function background_examples ()
    {

        foreach ($this->blend_vars as $var)
        {
            $out = Html::h(
                '<code>bg-*-* ' . $var. '</code>',
                $params = array (
                    'size' => 4,
                    'class' => 'mt-2'
                )
            );

            foreach ($this->get_all_colors() as $value)
            {
                $out .= '<div class="row">';
                $out .= '   <div class="col-lg-2 text-'.$value.' mt-2 ">'.$value.'</div>';

                $out .= '   <div class="col-lg-10">';
                $out .= '       <div class="row">';

                $out .= $this->show_bg_shades ($value, $setclass=$var);

                $out .= '       </div>';
                $out .= '   </div>';
                $out .= '</div>';
            }


        }

        return $this->page_section(
            $title = null,
            $pream = null,
            $content = $out

        );
    }

    public function page_display ()
    {
        $out = '';
		$color_examples = '';

        $out .= Html::p(
            'Used alongside <code>.text-*</code> and <code>.bg-*</code> utilities, blend sets a complimenting shade of the same color to the background or foregound. <br>This comes in three styles - standard, soft and hard - giving a range of color-cordintated options.<br>Admittedly, some probably are not accessibility-friendly but will still look good as widget backgrounds!',
            $params = array (
            )
        );

        $out .= $this->notice_box(
            array(
                'content'=> 'Note that not all available colors and shades are shown below. To see the full list of colors with blend, view '.
                Html::a('Examples', array('link'=>'#Examples'))
                .'. Also, there are variables available when compiling from '.
                Html::a('Sass', array('link'=>'#Sass'))
                .'.',
                //'color'=> 'red-100'
            )
        );

        $out .= $this->page_section(
            $title = 'Core Colors',
            $pream = 'preamble stuff',
            $content = $this->core_colors(),
            $code = $this->core_colors_code()
        );

        $out .= $this->page_section(
            $title = 'Color Shades',
            $pream = 'Each of the <a href="/Docs/Utilities/Colors">Color shades</a> can also utilise the '. Html::code(
                '.blend',
                $params = array (

                )
            ). ' utility.',
            $content = $this->shades(),
            $code = $this->shades_code()
        );

        $out .= Html::h(
            'Examples ' . Html::a('', array('id'=>'Examples','link'=>'#')),
            $params = array (
                'size' => 2
            )
        );


        $out .= Html::ul (
            $content = Html::li (
                $content = Html::a('Blend Text Examples', array('link'=>'/Docs/Utilities/Blend/Examples/Text'))
            ).
            $content = Html::li (
                $content = Html::a('Blend Background Examples', array('link'=>'/Docs/Utilities/Blend/Examples/Background'))
            )
        );


        $out .= Html::h(
            'Sass ' . Html::a('', array('id'=>'Sass','link'=>'#')),
            $params = array (
                'size' => 2
            )
        );

        $out .= Html::p(
            'Inclusion of the <code>.blend</code> utility is controlled via <code>$enable-blend-colors</code> in <code class="font-italic">/_variables.scss</code>.
            It accepts either a true or false value and is set to true by default.'
        );


        return $out;
    }
}
