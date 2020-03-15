<?php
/**
 * Html class
 *
 * Contains functions for quick building of html elements
 *
 * @package Core
 * @author  Steve Ball <steve@follyball.co.uk>
 * @copyright Copyright (c) 2017 Steve Ball <steve@follyball.co.uk>
 */
class Html {

	/**
	 * Create a HTML comment
	 * @param  string 	$details 	The text to place in the comment
	 * @return string           	HTML comment
	 */
	public static function htmlComment ($details)
	{
        return '<!-- ' . $details . ' -->';
    }

	public static function table ($table=array(), $head=array(), $body=array(), $buttons=array())
	{


		$output = '<table ';

		$output .= (isset($table['id'])) ? 'id="'.$table['id'].'" ' : '';

		$output .= 'class="table';

		$output .= (isset($table['class'])) ? ' ' .$table['class'] .'" ': '';

        $output .= (isset($table['style'])) ? ' style="'.$table['style'].'" ' : '';

		$output .= '>';


		$output .= '<thead';

		$output .= (isset($head['class'])) ? ' class="' .$head['class'] . '"' : '';

		$output .= '><tr>';

		foreach ($table['rules'] as $header =>$th)
		{
			$content = (isset($th['th']['alias'])) ? $th['th']['alias'] : ucwords(slugify($header, 'reverse'));
			$output .= '<th';
            $output .= (isset($th['th']['class'])) ? ' class="'.$th['th']['class'].'" ' : '';

            $output .= (isset($th['th']['style'])) ? ' style="'.$th['th']['style'].'" ' : '';

            $output .= '>'.$content.'</th>';
		}

		if(!empty($buttons))
		{
			$output .= '<th style="width:100px;">';
			$output .= '</th>';
		}

		$output .= '</tr></thead>';

		$output .= '<tbody>';

		foreach ($body as $record =>$value)
		{
			$row_id = isset($value->id) ? $value->id : '';
			$output .= '<tr id="' . $row_id . '">';

			foreach($table['rules'] as $row => $td)
			{
				$output .= '<td';
                $output .= (isset($td['td']['class'])) ? ' class="'.$td['td']['class'].'" ' : '';

                $output .= (isset($td['td']['style'])) ? ' style="'.$td['td']['style'].'" ' : '';

                $output .= '>';
				if($td['td']['type'] == 'text')
				{

					$output .= $value->$row;
				}

				if($td['td']['type'] == 'link')
				{
                    /*
                        When viewing a users details from the front end, we want the page to be called 'Profile' instead of 'Details'.

                        We set this by checking the passed in table id parameter. If it is 'members' we are on the front end member listing so we use profile, otherwise we use 'Details.'
                     */
                    $details_view = ($table['id'] == 'members') ? 'Profile' : 'Details' ;


					$output .= '<a href="';
					$output .= '/'.$table['link_path'].'/'.$details_view.'/'.slugify($value->$table['link_field']) ;
					$output .= '">';
					$output .= $value->$row;
					$output .= '</a>';
				}

				if($td['td']['type'] == 'date')
				{
					$output .= date_format (new DateTime($value->$row), $td['td']['format']);
				}

				$output .= '</td>';
			}


			if(!empty($buttons))
			{
				$output .= '<td class="text-center px-0" style="width:100px;">';

				foreach ($buttons as $edit => $button)
				{

					$output .= '<a href="';
					$output .= '/'.$table['link_path'].'/'.ucfirst($button).'/'.slugify($value->$table['link_field']) ;
					$output .= '">';
					$output .= '<i class="';

                    /*
                        As above with the link field, if we are on the front end members list, $button will have been passed in as 'profile'. If this is the case, we want to use the global details icon variable so we simply switch it.
                     */
                    if($button == 'profile')
                    {
                        $button = 'details';
                    }


					$output .= 'fa fa-'.Globals::get('forms/crud_icons/'.$button.'/name') . ' fa-lg ';
					$output .= 'text-'.Globals::get('forms/crud_icons/'.$button.'/color') . ' ';
					$output .= ' mr-2" aria-hidden="true"></i>';

					$output .= '</a>';
				}
				$output .= '</td>';
			}

			$output .= '</tr>';
		}

		$output .= '</tbody>';


		$output .= '</table>';

		return $output;
	}

    public static function breadcrumb ($array)
	{

        $home = (isset($array['site'])) ? '/' . $array['site'] : '/';
        $output = '<nav aria-label="breadcrumb" class="mb-1 " role="navigation">';
        $output .= '<ol class="breadcrumb m-0 p-1">';

        $output .= '<li class="breadcrumb-item"><a href="'.$home.'">Home</a></li>';

        if(isset($array['path']))
        {
            foreach ($array['path'] as $key => $value) {
                $output .= '<li class="breadcrumb-item"><a href="'.$home.$key.'">'.$value.'</a></li>';
            }
        }

        $output .= '<li class="breadcrumb-item active" aria-current="page">'.$array['current'].'</li>';

        $output .= '</ol>';
        $output .= '</nav>';

        return $output . self::htmlComment('breadcrumb');
    }

    public static function make_tag ($array)
    {
        $comment = $array['tag'];

        if(
            $array['tag'] == 'div' ||
            $array['tag'] == 'span' ||
            $array['tag'] == 'a' ||
            $array['tag'] == 'p' ||
            $array['tag'] == 'button' ||
            $array['tag'] == 'h1' ||
            $array['tag'] == 'h2' ||
            $array['tag'] == 'h3' ||
            $array['tag'] == 'h4'||
            $array['tag'] == 'footer'||
            $array['tag'] == 'nav'||
            $array['tag'] == 'ul'||
            $array['tag'] == 'li'||
            $array['tag'] == 'figure'||
            $array['tag'] == 'pre'||
            $array['tag'] == 'code'
        )
        {
            $output = '<' . $array['tag'];

            if(isset($array['link']))
            {
                $output .= ' href="' . $array['link'] . '"';
            }

            if(isset($array['id']) && $array['id'])
            {
                $output .= ' id="' . $array['id'] . '"';
                $comment .= ' #' . $array['id'];
            }

            if(isset($array['class']))
            {
                $output .= ' class="' . $array['class'] . '"';
                $comment .= ' .' . $array['class'];
            }

            if($array['tag'] == 'button')
            {
                $output .= ' type="button"';

            }

            if(isset($array['controls']))
            {
                $output .= ' ' . $array['controls'];
            }

            $output .= '>';

            $output .=  $array['content'];

            $output .= '</' . $array['tag'] . '>';



        }



        $output .= self::htmlComment($comment);
        return $output;
    }

    public static function footer (
        $content,
        $params=array()
    )
    {
        $params['tag'] = 'footer';
        $params['content'] = $content;

        return self::make_tag (
            $params
        );
    }

    public static function span (
        $content,
        $params=array()
    )
    {
        $params['tag'] = 'span';
        $params['content'] = $content;

        return self::make_tag (
            $params
        );
    }

    public static function div (
        $content,
        $params=array()
    )
    {
        $params['tag'] = 'div';
        $params['content'] = $content;

        return self::make_tag (
            $params
        );
    }

    public static function nav (
        $content,
        $params=array()
    )
    {
        $params['tag'] = 'nav';
        $params['content'] = $content;

        return self::make_tag (
            $params
        );
    }

    public static function button (
        $content,
        $params=array()
    )
    {
        $params['tag'] = 'button';
        $params['content'] = $content;

        return self::make_tag (
            $params
        );
    }

    public static function ul (
        $content,
        $params=array()
    )
    {
        $params['tag'] = 'ul';
        $params['content'] = $content;

        return self::make_tag (
            $params
        );
    }

    public static function li (
        $content,
        $params=array()
    )
    {
        $params['tag'] = 'li';
        $params['content'] = $content;

        return self::make_tag (
            $params
        );
    }

    public static function a (
        $content,
        $params=array()
    )
    {
        $params['tag'] = 'a';
        $params['content'] = $content;

        return self::make_tag (
            $params
        );
    }


    public static function p (
        $content,
        $params=array()
    )
    {
        $params['tag'] = 'p';
        $params['content'] = $content;

        return self::make_tag (
            $params
        );
    }

    public static function figure (
        $content,
        $params=array()
    )
    {
        $params['tag'] = 'figure';
        $params['content'] = $content;

        return self::make_tag (
            $params
        );
    }

    public static function pre (
        $content,
        $params=array()
    )
    {
        $params['tag'] = 'pre';
        $params['content'] = $content;

        return self::make_tag (
            $params
        );
    }

    public static function code (
        $content,
        $params=array()
    )
    {
        $params['tag'] = 'code';
        $params['content'] = $content;

        return self::make_tag (
            $params
        );
    }

    public static function h (
        $content,
        $params=array()
    )
    {
        $params['tag'] = 'h'.$params['size'];
        $params['content'] = $content;

        return self::make_tag (
            $params
        );
    }


}
