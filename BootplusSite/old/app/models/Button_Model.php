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

class Button_Model extends Functions
{
    public function basicButton_basicColors ()
    {   $data = '';

        foreach ($this->get_theme_colors() as $value) {

            $data .= Bootstrap::button (
                $value,
                array (
                    'class' => $value.' mr-2'
                )
            );

        }

        return $data;
    }

    public function outlineButton_basicColors ()
    {   $data = '';

        foreach ($this->get_theme_colors() as $value) {

            $data .= Bootstrap::outline_button (
                $value,
                array (
                    'class' => $value.' mr-2'
                )
            );

        }

        return $data;
    }
}
