<?php

/**
 * Bootstrap class
 *
 * Turns various Bootstrap 4 components into re-usable functions.
 *
 * Extends Html to incorporate the quick tag building functions
 *
 * @package Core
 * @author  Steve Ball <steve@follyball.co.uk>
 * @copyright Copyright (c) 2017 Steve Ball <steve@follyball.co.uk>
 *
 */
class Bootstrap extends Html {


    public static function container(
        $content,
        $params=array()
    )
    {
        $params['type'] = isset($params['type']) ? 'container-'.$params['type'] : 'container' ;
        $params['class'] = (isset($params['class'])) ? $params['type'] . ' ' . $params['class'] : $params['type'];
        return Html::div (
            $content,
            $params
        );

    }

    public static function navbar(
        $content,
        $params=array()
    )
    {
        $params['class'] = (isset($params['class'])) ? 'navbar ' . $params['class'] : 'navbar ';
        return Html::nav (
            $content,
            $params
        );

    }

    public static function nav_item(
        $content,
        $params=array()
    )
    {

        $params['li']['class'] = (isset($params['li']['class'])) ? 'nav-item ' . $params['li']['class'] : 'nav-item';

        $params['a']['class'] = (isset($params['a']['class'])) ? 'nav-link ' . $params['a']['class'] : 'nav-link';

        return Html::li (
            Html::a (
               $content,
               $params['a']
            ),
            $params['li']
        );

    }

    public static function button(
        $content,
        $params=array()
    )
    {

        $params['class'] = 'btn btn-' . $params['class'];


        return Html::button (
           $content,
           $params
        );

    }

    public static function outline_button(
        $content,
        $params=array()
    )
    {

        $params['class'] = 'btn btn-outline-' . $params['class'];


        return Html::button (
           $content,
           $params
        );

    }

    public static function dropdown_item(
        $content,
        $params=array()
    )
    {

        $params['class'] = (isset($params['class'])) ? 'dropdown-item ' . $params['class'] : 'dropdown-item';

        return Html::a (
            $content,
            $params
        );

    }

    public static function nav_dropdown(
        $content,
        $params=array()
    )
    {

        $params['li']['class'] = (isset($params['li']['class'])) ? 'nav-item dropdown ' . $params['li']['class'] : 'nav-item dropdown';

        $params['a']['class'] = (isset($params['a']['class'])) ? 'nav-link dropdown-toggle ' . $params['a']['class'] : 'nav-link dropdown-toggle';

        $params['a']['link'] = '#';

        return Html::li (
            Html::a (
               $content,
               $params['a']
            ).
            self::dropdown_menu (
               $params['menu']['content'],
               $params['menu']
            )
            ,
            $params['li']
        );

    }

    public static function dropdown_menu (
        $content,
        $params=array()
    )
    {
        $params['class'] = (isset($params['class'])) ? 'dropdown-menu ' . $params['class'] : 'dropdown-menu ';
        return Html::div (
            $content,
            $params
        );
    }

    public static function navbar_collapse (
        $content,
        $params=array()
    )
    {
        $params['class'] = (isset($params['class'])) ? 'collapse navbar-collapse ' . $params['class'] : 'collapse navbar-collapse ';
        return Html::div (
            $content,
            $params
        );
    }


    public static function navbar_nav (
        $content,
        $params=array()
    )
    {
        $params['class'] = (isset($params['class'])) ? 'navbar-nav ' . $params['class'] : 'collapse navbar-nav ';
        return Html::ul (
            $content,
            $params
        );
    }

    public static function card($array)
    {

        $content = (isset($array['header'])) ? $array['header'] : '';



        $body_class = (isset($array['body']['class'])) ? ' ' . $array['body']['class'] : '' ;

        $content .= Html::make_tag (
            array(
                'tag' => 'div',
                'class' => 'card-body' . $body_class,
                'content' => $array['body']['content']
            )
        );

        $id = (isset($array['id'])) ? $array['id'] : '';
        return  Html::make_tag (
            array(
                'tag' => 'div',
                'id' => $id,
                'class' => 'card ' . $array['class'],
                'content' => $content
            )
        );


    }





	/**
	 * Alert
	 *
	 * @param  string 			$color       danger/info/warning/alert
	 * @param  string/null 		$heading     Optional text to display in 'alert-heading'
	 * @param  string 			$body        The body text for the alert
	 * @param  boolean 			$dismissible Whether to make the alert dismissible
	 * @example 	https://v4-alpha.getbootstrap.com/components/alerts/
	 *
	 * @return string           Bootstrap Alert
	 */




    public static function makeAlert($color = 'info', $heading=null, $body, $dismissible=false)
	{
		// Create the opening alert tage with the correct colour
        $out = '<div class="alert alert-'.$color.'">';

		// If $dismissible=true add the dismiss button
		if($dismissible)
		{
		    $out .= '	<button type="button" class="close" data-dismiss="alert" aria-label="Close">';
        	$out .= '		<span aria-hidden="true">&times;</span>';
    		$out .= '	</button>';
		}
		// If $heading is not empty, add it
        if($heading)
		{
            $out .= '<h4 class="alert-heading">'.$heading.'</h4>';
        }

		// Add the body text
        $out .= $body;

		// Close the alert tag
        $out .= '</div><!-- alert-'.$color. '-->';

        return $out;
    } // makeAlert

	/**
	 * Set a Bootstrap Alert as a Session::flash
	 *
	 * Simply creates a Session::flash (/app/core/Session.php->flash()) passing in
	 * the required session name and using makeAlert() as the content.
	 *
	 * @param  string 			$variable       Session name
	 * @param  string 			$color       	danger/info/warning/alert
	 * @param  string/null 		$heading     	Optional text to display in 'alert-heading'
	 * @param  string 			$body       	The body text for the alert
	 * @param  boolean 			$dismissible 	Whether to make the alert dismissible
	 * @example 	https://v4-alpha.getbootstrap.com/components/alerts/
	 *
	 * @return string           Bootstrap Alert
	 */
	public static function flashAlert($variable, $color = 'info', $heading=null, $body, $dismissible=false)
	{
		Session::flash(
			$variable,
			Bootstrap::makeAlert(
				$color,
				$heading,
				$body,
				$dismissible
			)
		);

	}

	/**
	 * Make a Bootstrap 4 Grid
	 *
	 *	We have two functions to simplify make a Bootstrap grid layout.
	 *
	 *	row ()		Makes a <div class="row">
	 *	column 		Makes a <div class="col-xx-xx">
	 *
	 * These can be used in conjuction with each other in an unlimited amount
	 * of nesting. Each function has a parameter called $inc which will contain
	 * an array of anything to be displayed within.
	 *
	 * To make a row with an id of 'content' and within it a small column with a
	 * class of col-sm-4 and a larger column with a class of col-sm-8, you would use
	 *
	 *
	 * Bootstrap::row (
	 * 		$id = 'content',
	 * 		$class = null,
	 * 		$inc = array (
	 * 			Bootstrap::column (
	 *				$id = null,
	 * 				$class = 'col-sm-4',
	 * 				$inc = array (
	 * 					...
	 * 				)
	 * 			),
	 * 			Bootstrap::column (
	 *				$id = null,
	 * 				$class = 'col-sm-8',
	 * 				$inc = array (
	 * 					...
	 * 				)
	 * 			),
	 * 			Bootstrap::column (
	 *
	 * 			),
	 *
	 * 		)
	 * )
	 *
	 * The $inc within the column sections can be an array of any elements that
	 * you want and can be a mixture of several types including more row() and
	 * column() functions.
	 * Although you can use plain text as an array element, it is recommended to put
	 * anything you need into indivudal functions and call them.
	 *
	 */

	/**
	 * Make a Bootstrap 4 Grid Row
	 *
	 * Creates a <div class="row"></div> with any attributes and content as well as
	 * a formatted end html comment
	 *
	 * @param  string/null 		$id    The id attribute of the row if required
	 * @param  string/null 		$class The class attribute of the row if required
	 * @param  array  			$inc   An array of columns to show
	 * @return string        	Boostrap Row
	 */

    public static function row
    (
        $id = null,
        $class = null,
        $inc = array ()
    )
	{
    	// Set some variables that we are going to use as we go along
        $showId = null;
        $showClass = 'row';
        $comment = null;

    	// If $id has been set, add the id attribute and also append it to the end comment
        if(isset($id))
    	{
            $showId .= 'id="'.$id.'" ';
            $comment .= '#' . $id;
        }

    	// Continue building the comment by adding ''.row'
        $comment .= ' .row';

    	// If $class has been set, add it to $showClass and also append it to the end comment
        if($class)
    	{
            $showClass .= ' ' . $class;
            $comment .= ' ' . $class;
        }

    	// Start building the output with the opening <div>
        $out = '<div '.$showId.'class="'.$showClass.'">';

    	// Loop through everything in $inc and add it to the output
        foreach ($inc as $value) {
            $out .= $value;
        }

    	// Close the div tag
        $out .= '</div>';

    	// Add the HTML comment
        $out .= self::htmlComment ($comment);

    	// Return the row
        return $out;
    } // row ()

	/**
	 * Make a Bootstrap 4 Grid Column
	 *
	 * Creates a <div class="col-xx-xx"></div> with any attributes and content as well as
	 * a formatted end html comment
	 *
	 * @param  string/null 		$id    The id attribute of the column if required
	 * @param  string/null 		$class The class attribute of the column if required
	 * @param  array  			$inc   An array of content to show
	 * @return string        	Boostrap Column
	 */

     // public static function column (
     //     $id = null,
     //     $class = null,
     //     $inc = array ()
     // )


	public static function column (
        $params,
        $content
    )
	{

		// Set some variables that we are going to use as we go along
        $comment = null;

        // Start building the output with the opening
        if(isset($params['tag'])) {
            $params['tag'] = $params['tag'];
        }
        else
        {
            $params['tag'] = 'div';
        }



        $out = '<'.$params['tag'].' ';

        // If id has been set, add the id attribute and also append it to the end comment
        if(isset($params['id'])) {
            $out .= 'id="'.$params['id'].'" ';
            $comment .= '#' . $params['id'] . ' ';
        }

        // If class has been set, add the class attribute and also append it to the end comment
        if(isset($params['class'])) {
            $out .= 'class="'.$params['class'].'" ';
            $comment .= $params['class'];

        }

        // If role has been set, add the attribute
        if(isset($params['role'])) {
            $out .= 'role="'.$params['role'].'" ';
        }

        $out .='>';

		// Loop through everything in $inc and add it to the output
        foreach ($content as $value) {
            $out .= $value;
        }

		// Close the div tag
        $out .= '</'.$params['tag'].'>';

		// Add the HTML comment
        $out .= self::htmlComment ($comment);

		// Return the column
        return $out;
    } // column ()

    public static function quickCollapse ($params = array ())
	{
        $out = '';

        $out .= '<p';
        if (isset($params['wrap_class'])) {
            $out .= ' class="'.$params['wrap_class'].'"';
        }
        $out .= '>';

        $out .= '<a class="btn ';
        if (isset($params['button']['size'])) {
            $out .= 'btn-'.$params['button']['size'].' ';
        }

        if (isset($params['button']['type'])) {
            $out .= 'btn-'.$params['button']['type'].'-'.$params['button']['color'].'';
        }
        else
        {
            $out .= 'btn-'.$params['button']['color'].'';
        }
        if (isset($params['button']['class'])) {
            $out .= '  '.$params['button']['class'];
        }
        $out .= '"';
        $out .= ' data-toggle="collapse" href="#'.$params['key'].'" aria-expanded="false" aria-controls="'.$params['key'].'e">';
        $out .= $params['text'];
        $out .= '</a>';

        $out .= '</p>';

        $out .= '<div class="collapse" id="'.$params['key'].'">';

        $out .= $params['content'];

        $out .= '</div>';

        return $out;
    }
/*    <p>

  <button class="btn btn-primary" type="button" data-toggle="collapse" data-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
    Button with data-target
  </button>
</p>
<div class="collapse" id="collapseExample">
  <div class="card card-body">
    Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident.
  </div>
</div>
*/
}
