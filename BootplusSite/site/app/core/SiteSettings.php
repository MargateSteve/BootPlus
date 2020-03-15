<?php

/**
 * Settings Core Class
 *
 * This file either contains or provides access to all of the required
 * settings and variables throughout the site.
 *
 * There are two different methods of storing these settings.
 *
 * Any that are fairly static get stored in one of a number of specific
 * functions. With these if it is likely that you will need more than
 * one of the settings contained at one time (such as db() which
 * contains all of the database connection settings) you just call the
 * function cold and return all of the elements - $db = SiteSettings::db().
 * For those where you may only need one of the elements (such as the css()
 * or js() functions), you call the class with a path to the element -
 * $css = SiteSettings::css('remote/bootstrap/v4').
 *
 * Any settings that may frequently change are stored in the settings table
 * in the database and maintained via /Admin/Settings. There is a function
 * here to call any of these so to call the 'site_name' setting from the
 * database, you would use $name = SiteSettings::get('site_name').
 *
 * @package Core
 * @author  Steve Ball <steve@follyball.co.uk>
 * @copyright Copyright (c) 2018 Steve Ball <steve@follyball.co.uk>
 */



class SiteSettings
{
    public static $debug_mode = true,
                  $_site_name = 'PHP MVC';

    /////////////////////////////
    // Locally stored settings //
    /////////////////////////////

    /**
     * Available CSS files
     *
     * Contains an array of all css files that can be used within the
     * site and allows you to pick a single one to return.
     *
     * To call a file, call the function and as the $path, drill down to
     * the required file using / as a seperator.
     *
     * SiteSettings::css('local/admin') will return
     * <link rel="stylesheet" href="/includes/css/admin.css">
     *
     * SiteSettings::css('remote/bootstrap/v4') will return
     * <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
     *
     * @param   string  $path   Array path to the required file
     * @return  string  The tag for the requested file
     */
    public static function css ($path) {
        $array = [
            // Locally Hosted
            'local' => [
                'site' => '<link rel="stylesheet" href="/includes/css/site.css">',
                'admin' => '<link rel="stylesheet" href="/includes/css/admin.css">',
                'docs' => '<link rel="stylesheet" href="/includes/css/bootplus_docs.css">',
                'bootplus' => '<link rel="stylesheet" href="/includes/css/bootplus.css">',
            ],
            // Remotely Hosted
            'remote' => [
                // Datetime picker https://tempusdominus.github.io/bootstrap-4/
                'date-time-picker' => '<link href="https://cdn.jsdelivr.net/npm/zebra_datepicker/dist/css/default/zebra_datepicker.min.css" rel="stylesheet">',




                // Font Awesome 4.7
                'font-awesome' => '<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">',

                // Simple Line Icons
                'simple-line-icons' => '<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/simple-line-icons/2.4.1/css/simple-line-icons.css" />',

                //Bootstrap - We have both versions 3 and 4 just in case 3 is still needed
                'bootstrap' => [
                    // Version 3.3.7
                    'v3' => '<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">',

                    // Version 4 beta 3
                    'v4_beta' => '<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/css/bootstrap.min.css" integrity="sha384-Zug+QiDoJOrZ5t4lssLdxGhVrurbmBWopoEl+M6BdEfwnCJZtKxi1KgxUyJq13dy" crossorigin="anonymous">',

                    // Version 4 final
                    'v4' => '<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">',

                ]
            ]
        ];

        // Return the array element specified by $path using set_path() from this file
        return self::set_path($array, $path);

    } // css ()

    /**
     * Return the current date and time
     *
     * Returns the current date and time as a DateTime object that you can
     * format and manipulate.
     *
     * @return  object  Current date and time
     */
    public static function current_datetime () {
        return new DateTime();
    } // current_datetime


    /**
     * Available JS files
     *
     * Contains an array of all js files that can be used within the
     * site and allows you to pick a single one to return.
     *
     * To call a file, call the function and as the $path, drill down to
     * the required file using / as a seperator.
     *
     * SiteSettings::css('local/default') will return
     * <script src="default.js"></script>
     *
     * SiteSettings::css('remote/font-awesome-5') will return
     * <script defer src="https://use.fontawesome.com/releases/v5.0.4/js/all.js"></script>
     *
     * @param   string  $path   Array path to the required file
     * @return  string  The tag for the requested file
     */
    public static function js ($path) {
        $array = [
            // Locally Hosted
            'local' => [
                'default' => '<script src="/includes/js/default.js"></script>',
            ],
            // Remotely Hosted
            'remote' => [
                'datatables' => [
                    // Version 3.3.7
                    'core' => '<script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>',

                    // Version 4
                    'bootstrap' => '<script src="https://cdn.datatables.net/1.10.16/js/dataTables.bootstrap4.min.js"></script>',
                ],


                // Datetime picker https://tempusdominus.github.io/bootstrap-4/
                'date-time-picker' => '<script src="https://cdn.jsdelivr.net/npm/zebra_datepicker/dist/zebra_datepicker.min.js"></script>',

                'moment' => '<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.21.0/locale/en-gb.js"></script>',
                // JQuery
                'jquery' => '<script
  src="https://code.jquery.com/jquery-3.3.1.min.js"
  integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
  crossorigin="anonymous"></script>',
                'jquery_ui' => '<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js" integrity="sha256-T0Vest3yCU7pafRw9r+settMBX6JkKN06dqBnpQ8d30=" crossorigin="anonymous"></script>',

                // Font Awesome 5.0.4
                'font-awesome-5' => '<script defer src="https://use.fontawesome.com/releases/v5.0.4/js/all.js"></script>',

                //Bootstrap - We have both versions 3 and 4 just in case 3 is still needed
                'bootstrap' => [
                    // Version 3.3.7
                    'v3' => '<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>',





                    // Version 4
                    'v4' => '<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>',
                ],
                'popper' => '<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>'
            ]
        ];

        // Return the array element specified by $path using set_path() from this file
        return self::set_path($array, $path);

    } // js ()

    /**
     * Meta Tags
     *
     * Returns an array of meta tags as a $key=>$value pairing
     * where the key is the 'name' and the value is the 'content'.
     *
     * These get processed in a foreach loop in the head() function
     * in the base template (by default /app/core/Templates/Base.php).
     *
     * @return  array   Various meta tags
     */
    public static function meta_tags () {
        return [
            'description' => 'Enter a description',
            'author' => 'Your Name',
            'viewport' => 'width=device-width, initial-scale=1, shrink-to-fit=no',
            'keyword' => 'Bootstrap,Admin,Template,PHP,MVC,Framework,jQuery,CSS,HTML,Dashboard'
        ];
    } // meta_tags ()


    ////////////////////
    // Misc functions //
    ////////////////////

    /**
     * Get a specified element from an array
     *
     * Looks through the specified array for the path that has been
     * set and returns the value if found.
     *
     * Paths are set using / as a separator for each element to
     * drill down through.
     *
     * @param   array     $array   The array to choose from
     * @param   string    $path    The path to the array element
     * @return  string    The value of the element
     */
    private static function set_path ($array, $path) {

        /*
            Explode the $path and re-set it to itself.

            Looks at the$ path and classes / as a separator. It explodes
            that data so we now have an array conatining an element
            for each part of the path.
         */
        $path = explode('/', $path);

        /*
            Set the first part of the $path array to a parameter called
            $result and then unset it.

            $reuslt now contains the first level key of the passed in
            array.
         */
        $result = $array[$path[0]];
        unset($path[0]);

        /*
            Loop through the remaining elements in path and for each,
            if they exist, build upon result.

            If the path was 'remote/bootstrap/v4', the process would be
            $result = $array['remote']
            $result = $array['remote']['bootstrap']
            $result = $array['remote']['bootstrap']['v4']
            with the final one being the one returned.
         */
        foreach ($path as $bit) {
            // Check to see if the key exists
            if(isset($result[$bit])) {
                // If the key does exist, replace $result with the new key
                $result = $result[$bit];
            }
        } // foreach $path

        // Return the value of the element
        return $result;
    } // set_path


}
