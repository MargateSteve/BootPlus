<?php

/**
 * Functions class
 *
 *
 * @package Core
 * @author  Steve Ball <steve@follyball.co.uk>
 * @copyright Copyright (c) 2017 Steve Ball <steve@follyball.co.uk>
 *
 */

// Include the initiation file
require_once '../app/init.php';

class Functions
{

    protected function get_base_colors () {
        return ['black', 'blue', 'brown', 'cyan', 'gray', 'green', 'magenta',
        'maroon', 'orange', 'pink', 'purple', 'red', 'turquoise', 'violet',
        'white', 'yellow'];
    } // get_base_colors()

    protected function get_extra_colors () {
        return ['aliceblue', 'antiquewhite', 'aqua', 'aquamarine', 'azure',
                'beige', 'bisque', 'blanchedalmond', 'blueviolet', 'burlywood',
                'cadetblue', 'chartreuse', 'chocolate', 'coral', 'cornflowerblue',
                'cornsilk', 'crimson', 'darkblue', 'darkcyan', 'darkgoldenrod',
                'darkgray', 'darkgrey', 'darkgreen', 'darkkhaki', 'darkmagenta',
                'darkolivegreen', 'darkorange', 'darkorchid', 'darkred',
                'darksalmon', 'darkseagreen', 'darkslateblue', 'darkslategray',
                'darkslategrey', 'darkturquoise', 'darkviolet', 'deeppink',
                'deepskyblue', 'dimgray', 'dimgrey', 'dodgerblue', 'firebrick',
                'floralwhite', 'forestgreen', 'fuchsia', 'gainsboro', 'ghostwhite',
                'gold', 'goldenrod', 'greenyellow', 'honeydew', 'hotpink',
                'indianred ', 'indigo ', 'ivory', 'khaki', 'lavender', 'lavenderblush',
                'lawngreen', 'lemonchiffon', 'lightblue', 'lightcoral', 'lightcyan',
                'lightgoldenrodyellow', 'lightgray', 'lightgrey', 'lightgreen',
                'lightpink', 'lightsalmon', 'lightseagreen', 'lightskyblue',
                'lightslategray', 'lightslategrey', 'lightsteelblue', 'lightyellow',
                'lime', 'limegreen', 'linen', 'mediumaquamarine', 'mediumblue',
                'mediumorchid', 'mediumpurple', 'mediumseagreen', 'mediumslateblue',
                'mediumspringgreen', 'mediumturquoise', 'mediumvioletred', 'midnightblue',
                'mintcream', 'mistyrose', 'moccasin', 'navajowhite', 'navy', 'oldlace',
                'olive', 'olivedrab', 'orangered', 'orchid', 'palegoldenrod', 'palegreen',
                'paleturquoise', 'palevioletred', 'papayawhip', 'peachpuff', 'peru',
                'plum', 'powderblue', 'rebeccapurple', 'rosybrown', 'royalblue',
                'saddlebrown', 'salmon', 'sandybrown', 'seagreen', 'seashell',
                'sienna', 'silver', 'skyblue', 'slateblue', 'slategray', 'slategrey',
                'snow', 'springgreen', 'steelblue', 'tan', 'teal', 'thistle',
                'tomato', 'wheat', 'whitesmoke'];
    } // get_extra_colors()



    public function count_base_colors () {
        return count($this->get_base_colors());
    } // count_base_colors()

    public function count_extra_colors () {
        return count($this->get_extra_colors());
    } // count_extra_colors()

    public function count_all_colors () {
        return $this->count_base_colors () + $this->count_extra_colors();
    } // count_all_colors()


    protected function inline_text ($value, $setclass=null) {
        $class = 'text-'.$value;
        $class .= ($setclass) ? ' ' . $setclass: '';
        $class .= ' mr-2 d-inline-block px-1 mb-1';

        $output = Html::p (
            $value,
            array (
                'class' => $class
            )
        );

        return $output;
    }

    protected function show_text_colors ($array) {
        $output = '';
        foreach ($array as $value) {
            $setclass=($value=='white') ? 'bg-dark' : '';
            $output .= $this->inline_text ($value, $setclass);
        }
        return $output;
    }





    public function count_bootstrap_colors ()
    {
        return count($this->get_bootstrap_colors());
    }




    protected function inline_shade_text ($value, $level, $setclass=null)
    {
        $class = 'text-'.$value.'-'.$level;
        $class .= ($setclass) ? ' ' . $setclass: '';
        $class .= ' d-inline-block mr-1 px-1 font-weight-bold';

        $output = Html::p (
            $level,
            array (
                'class' => $class
            )
        );

        return $output;
    }

    protected function inline_shade_bg ($value, $level, $setclass=null)
    {
        $class = 'col-sm bg-'.$value.'-'.$level;
        $class .= ($setclass) ? ' ' . $setclass: '';
        $class .= ' mx-2 mx-sm-1 mr-sm-0 px-2 font-weight-bold';

        $output = Html::p (
            $level,
            array (
                'class' => $class
            )
        );

        return $output;
    }


    protected function show_borders ()
	{
		$output = '';
		$output .= '<span class="border mr-2 p-2 border-dark border-x-2 border-bottom-3 border-y-yellow-600 border-bottom-blue-400" style="width:5rem; height:5rem;     display: inline-block;">&nbsp;</span>';
		$output .= '<span class="border-0 mr-2 p-2 border-dark border-x-2 border-bottom-3 border-y-yellow-600 border-bottom-blue-400" style="width:5rem; height:5rem;     display: inline-block;">&nbsp;</span>';
		$output .= '<span class="border border-top-0 mr-2 p-2 border-dark border-x-2 border-bottom-3 border-y-yellow-600 border-bottom-blue-400" style="width:5rem; height:5rem;     display: inline-block;">&nbsp;</span>';
		$output .= '<span class="border border-right-0 mr-2 p-2 border-dark border-x-2 border-bottom-3 border-y-yellow-600 border-bottom-blue-400" style="width:5rem; height:5rem;     display: inline-block;">&nbsp;</span>';
		$output .= '<span class="border border-bottom-0 mr-2 p-2 border-dark border-x-2 border-bottom-3 border-y-yellow-600 border-bottom-blue-400" style="width:5rem; height:5rem;     display: inline-block;">&nbsp;</span>';
		$output .= '<span class="border border-left-0 mr-2 p-2 border-dark border-x-2 border-bottom-3 border-y-yellow-600 border-bottom-blue-400" style="width:5rem; height:5rem;     display: inline-block;">&nbsp;</span>';
		return $output;
	}

    protected function show_text_shades ($value, $setclass=null)
	{
        $output = '';

        foreach ($this->get_palette_numbers() as $level)
        {

			$output .= $this->inline_shade_text ($value, $level, $setclass);
		}

		return $output;
	}

    protected function show_bg_shades ($value, $setclass=null)
	{
        $output = '';

        foreach ($this->get_palette_numbers() as $level)
        {

			$output .= $this->inline_shade_bg ($value, $level, $setclass);
		}

		return $output;
	}



    protected function get_bootstrap_colors ()
    {
        return array (
                'blue', 'indigo', 'purple', 'pink', 'red', 'orange', 'yellow', 'green', 'teal', 'cyan'
        );
    }



    protected function get_theme_colors ()
    {
        return array (
                'primary', 'secondary', 'info', 'success', 'warning', 'danger', 'dark', 'light'
        );
    }

    protected function get_example_settings ()
    {
        return array (
                'blue', 'green', 'yellow', 'red', 'navy', 'orchid', 'tan'
        );
    }

    protected function get_all_colors ()
    {
        return array_merge(
            $this->get_bootstrap_colors(),
            $this->get_base_colors(),
            $this->get_extra_colors()
        );
    }


    protected function get_palette_numbers ()
    {
        return array (
                '100', '200', '300', '400', '500', '600', '700', '800', '900'
        );
    }

    protected function code_text ($class, $text)
    {
        return '<span class="nt">&lt;p</span> <span class="na">class=</span><span class="s">"' . $class . '"</span><span class="nt">&gt;</span>'.$text.'<span class="nt">&lt;/p&gt;</span><br>';
    }

    protected function code_bg ($class, $text)
    {
        return '<span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"' . $class . '"</span><span class="nt">&gt;</span>'.$text.'<span class="nt">&lt;/div&gt;</span><br>';
    }

    protected function code_div ($class, $text)
    {
        return '<span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"' . $class . '"</span><span class="nt">&gt;</span>'.$text.'<span class="nt">&lt;/div&gt;</span><br>';
    }









	protected function core_bg_examples ($array, $setclass=null)
	{
		$output = '';
		foreach ($array as $value)
		{
			$class = 'bg-'.$value;
			$class .= ($setclass) ? ' ' . $setclass: '';
			$class .= ' mr-2 d-inline-block px-1 mb-1 font-weight-bold';

			$output .= Html::div (
				$value,
				array (
					'class' => $class
				)
			);
		}
		return $output;
	}

	protected function page_section (
        $title = null,
        $pream = null,
        $content,
        $code = null
    )
	{
        $out = '';

        if($title)
        {
            $out .= Html::h(
                $title,
                $params = array (
                    'size' => 2
                )
            );
        }


        if($pream)
        {
            $out .= Html::p($pream);
        }


        $out .= Html::div(
            $content,
            $params = array (
                'class' => 'border border-2 border-bottom-0 border-lightgray-200 mt-0 p-4'
            )
        );

        if($code)
        {
            $out .= Html::figure(
                Html::pre(
                    Html::code(
                        $code,
                        $params = array (
                            'class' => 'language-html',
                            'controls' => 'data-lang="html"'
                        )
                    ),
                    $params = array (
                        'class' => 'm-0'
                    )
                ),
                $params = array (
                    'class' => 'border border-2 border-top-0 border-lightgray-200 bg-lightgray-100 mt-0 p-4'
                )
            );
        }


        return $out;
	}

    public function example_box ($params=null)
    {
        $size = (isset($params['size'])) ? $params['size']: 'size-fixed-5';
        $content = (isset($params['content'])) ? $params['content']: '&nbsp;';
        $class = (isset($params['class'])) ? ' '. $params['class']: '';
        return Html::div(
            $content,
            $params = array (
                'class' => $size.' mr-2'.$class
            )
        );
    }


    public function notice_box ($params=null)
    {   $content = '';

        $color = (isset($params['color'])) ? $params['color'] : 'info';

        if(isset($params['title']))
        {
            $content .= '<h3 class="text-'.$color.'">'.$params['title'].'</h3>';
        }
        $content .= $params['content'];


        return Html::div(
            $content,
            $params = array (
                'class' => ' my-1 p-4 border border-left-6 border-left-'.$color
            )
        );
    }

}
