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

class M_Sizing extends Functions
{
    private function mixed_width ()
    {
        $size_examples = array(
            'content' => '',
            'code' => ''
        );


        $size_examples['content'] .= $this->example_box (
            $params = array (
                'size' => 'size-6-inline size-h-4',
                'class' => 'mr2 border bg-gray-100 mb-1 text-center'
            )
        );

        $size_examples['code'] .= $this->code_div (
            $class = 'size-6 size-h-4',
            $text = 'size-6 size-h-4'
        );

        $size_examples['content'] .= $this->example_box (
            $params = array (
                'size' => 'size-4-inline size-w-5',
                'class' => 'mr2 border bg-gray-100 mb-1 text-center'
            )
        );
        $size_examples['code'] .= $this->code_div (
            $class = 'size-4 size-w-5',
            $text = 'size-4 size-w-5'
        );


        $size_examples['content'] .= $this->example_box (
            $params = array (
                'size' => 'size-h-5-inline size-w-3',
                'class' => 'mr2 border bg-gray-100 mb-1 text-center'
            )
        );
        $size_examples['code'] .= $this->code_div (
            $class = 'size-h-5 size-w-3',
            $text = 'size-h-5 size-w-3'
        );




        return $size_examples;
    }

    private function examples ()
    {
        $size_examples = array(
            'content' => '',
            'code' => ''
        );


        $size_examples['content'] .= $this->example_box (
            $params = array (
                'content' => 'size-6',
                'size' => 'size-6',
                'class' => 'mr2 border bg-gray-100 mb-1 text-center'
            )
        );

        $size_examples['code'] .= $this->code_div (
            $class = 'size-6',
            $text = 'size-6'
        );

        $size_examples['content'] .= $this->example_box (
            $params = array (
                'content' => 'size-w-6',
                'size' => 'size-w-6',
                'class' => 'mr2 border bg-gray-100 mb-1 text-center'
            )
        );
        $size_examples['code'] .= $this->code_div (
            $class = 'size-w-6',
            $text = 'size-w-6'
        );


        $size_examples['content'] .= $this->example_box (
            $params = array (
                'content' => 'size-h-6',
                'size' => 'size-h-6',
                'class' => 'mr2 border bg-gray-100 mb-1 text-center'
            )
        );
        $size_examples['code'] .= $this->code_div (
            $class = 'size-h-6',
            $text = 'size-h-6'
        );




        return $size_examples;
    }


    private function default_sizes ()
    {
        $size_examples = array(
            'content' => '',
            'code' => ''
        );

        $size_examples['content'] .= Html::h(
            '<code>size-*-inline</code>',
            $params = array (
                'size' => 4,
                'class' => 'mt-1'
            )
        );
        for ($i=1; $i <= 6 ; $i++) {
            $size_examples['content'] .= $this->example_box (
                $params = array (
                    'content' => $i,
                    'size' => 'size-'.$i.'-inline',
                    'class' => 'mr2 border bg-gray-100 text-center'
                )
            );
        }
        $size_examples['content'] .= '<hr>';

        $size_examples['content'] .= Html::h(
            '<code>size-w-*-inline</code>',
            $params = array (
                'size' => 4,
                'class' => 'mt-1'
            )
        );
        for ($i=1; $i <= 6 ; $i++) {
            $size_examples['content'] .= $this->example_box (
                $params = array (
                    'content' => $i,
                    'size' => 'size-w-'.$i.'-inline',
                    'class' => 'mr2 border bg-gray-100 text-center'
                )
            );
        }

        $size_examples['content'] .= '<hr>';

        $size_examples['content'] .= Html::h(
            '<code>size-h-*-inline</code>',
            $params = array (
                'size' => 4,
                'class' => 'mt-1'
            )
        );
        for ($i=1; $i <= 6 ; $i++) {
            $size_examples['content'] .= $this->example_box (
                $params = array (
                    'content' => $i,
                    'size' => 'size-h-'.$i.'-inline',
                    'class' => 'mr2 border bg-gray-100 text-center'
                )
            );
        }

        $size_examples['code'] .= $this->code_div (
            $class = 'size-6-inline',
            $text = 'size-6-inline'
        );

        $size_examples['code'] .= $this->code_div (
            $class = 'size-w-6-inline',
            $text = 'size-w-6-inline'
        );

        $size_examples['code'] .= $this->code_div (
            $class = 'size-h-6-inline',
            $text = 'size-h-6-inline'
        );

        return $size_examples;
    }

    private function responsive ()
    {
        $size_examples = array(
            'content' => '',
            'code' => ''
        );

        $size_examples['content'] .= $this->example_box (
            $params = array (
                'size' => 'size-2 size-xl-5',
                'class' => 'mr2 border bg-gray-100 mb-1 text-center'
            )
        );

        $size_examples['code'] .= $this->code_div (
            $class = 'size-2 size-xl-5',
            $text = '...'
        );

        $size_examples['content'] .= $this->example_box (
            $params = array (
                'size' => 'size-6 size-w-md-2',
                'class' => 'mr2 border bg-gray-100 mb-1 text-center'
            )
        );
        $size_examples['code'] .= $this->code_div (
            $class = 'size-6 size-w-md-2',
            $text = '...'
        );


        $size_examples['content'] .= $this->example_box (
            $params = array (
                'size' => 'size-5 size-h-2 size-h-sm-3 size-h-md-4 size-h-lg-5 size-w-lg-6',
                'class' => 'mr2 border bg-gray-100 mb-1 text-center'
            )
        );
        $size_examples['code'] .= $this->code_div (
            $class = 'size-5 size-h-2 size-h-sm-3 size-h-md-4 size-h-lg-5 size-w-lg-6',
            $text = '...'
        );

        return $size_examples;
    }

    private function responsive_bs ()
    {
        $size_examples = array(
            'content' => '',
            'code' => ''
        );

        $size_examples['content'] .= $this->example_box (
            $params = array (
                'content' => 'w-100 w-md-50',
                'size' => 'w-100 w-md-50',
                'class' => 'mr2 border bg-gray-100 mb-1 pl-2'
            )
        );

        $size_examples['code'] .= $this->code_div (
            $class = 'w-100 w-md-50',
            $text = '...'
        );

        $size_examples['content'] .= $this->example_box (
            $params = array (
                'content' => 'w-50 w-sm-100 w-lg-75',
                'size' => 'w-50 w-sm-100 w-lg-75',
                'class' => 'mr2 border bg-gray-100 mb-1 pl-2'
            )
        );
        $size_examples['code'] .= $this->code_div (
            $class = 'w-50 w-sm-100 w-lg-75',
            $text = '...'
        );


        $size_examples['content'] .= $this->example_box (
            $params = array (
                'content' => 'w-25 w-sm-50 w-md-75 w-lg-100',
                'size' => 'w-25 w-sm-50 w-md-75 w-lg-100',
                'class' => 'mr2 border bg-gray-100 mb-1 pl-2'
            )
        );
        $size_examples['code'] .= $this->code_div (
            $class = 'w-25 w-sm-50 w-md-75 w-lg-100',
            $text = '...'
        );

        return $size_examples;
    }


    ////////////////////////
    // Output             //
    ////////////////////////

    public function page_display ()
    {
        $out = '';

        $out .= Html::p(
            'Building upon the new '.Html::a('Bootstrap Size Utilities', array('link'=>'http://getbootstrap.com/docs/4.0/utilities/sizing/', 'controls'=>'target="_blank"')).', '.Globals::get('site_name').' adds some fixed size dimensions into the mix, with full responsiveness. We even add some responsiveness to Bootstraps Sixe Utilities themselves!
            <br>
            Set a fixed size of an element, either the width using <code>.size-w-*</code>, height using <code>.size-h-*</code> or both using <code>.size-*</code>. Add <code>-inline</code> to the end to automatically display it as an inline-block.
            <br>
            The scale ranges from 1 to 6 by default (this can be changed when compiling in Sass via <code>$max-fixed-sizes</code>) where the number corresponds to the amount of rem set and all of these can be combined with each other to create a custom variation.',
            $params = array (
            )
        );
        $out .= $this->page_section(
            $title = null,
            $pream = null,
            $content = $this->examples()['content'],
            $code = $this->examples()['code']
        );


        $out .= $this->page_section(
            $title = 'Inline variant',
            $pream = 'By adding <code>-inline</code> to any of the size classes, the will display as inline-blocks.',
            $content = $this->default_sizes()['content'],
            $code = $this->default_sizes()['code']
        );

        $out .= $this->page_section(
            $title = null,
            $pream = 'You can also mix and match any of these to create a width and height to suit',
            $content = $this->mixed_width()['content'],
            $code = $this->mixed_width()['code']
        );

        $out .= $this->page_section(
            $title = 'Responsiveness',
            $pream = 'All sizing variations come with the standard Bootstrap breakpoints',
            $content = $this->responsive()['content'],
            $code = $this->responsive()['code']
        );

        $out .= $this->page_section(
            $title = null,
            $pream = 'We have also thrown in some responsiveness for Bootstraps new width and height classes. We have not added the inline function to these as this is covered by the standard grid.',
            $content = $this->responsive_bs()['content'],
            $code = $this->responsive_bs()['code']
        );

        $out .= $this->notice_box(
            array(
                'title'=> 'Notes on the examples',
                'content'=> '<p>The examples in this page use classes that are not mentioned on the code examples. In an attempt to use only classes to design the entire site, certain things such as example boxes, will have extra classes in the example to help them stand out. To view these, use your browser\'s dev tools.</p>

                <p>Not all potential variations are shown in the examples or the code examples. However, there will be at least one of each type of variant available to give a point to work with.</p>',
                //'color'=> 'red-100'
            )
        );

        return $out;
    }
}
