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

class Typography_Model extends Functions
{
    public function theme_colors ()
    {   $data = '';

        foreach ($this->get_theme_colors() as $value) {

            $data .= Html::span (
                'text-'.$value,
                array (
                    'class' => 'text-'.$value.' font-weight-bold mr-2'
                )
            );

        }

        return $data;
    }

    public function other_colors ($palette=null)
    {   $data = '';

        foreach ($this->get_example_settings() as $value) {

			if($palette)
			{
				$data .= '<div class="row">';
				$data .= '<div class="col-md-2">text-'.$value.'-xxx</div>';

				$data .= '<div class="col-md-10">';
				foreach ($this->get_palette_numbers() as $level)
				{

					$data .= Html::span (
		                $level,
		                array (
		                    'class' => 'text-'.$value.'-'.$level.' font-weight-bold mr-2'
		                )
		            );
				}
				$data .= '</div>';
				$data .= '</div>';

			}
			else
            {
				$data .= Html::span (
	                'text-'.$value,
	                array (
	                    'class' => 'text-'.$value.' font-weight-bold mr-2'
	                )
	            );
			}

        }

        return $data;
    }

}
