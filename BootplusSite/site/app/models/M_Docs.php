<?php

/**
 * Competitions Model
 */

// Include the initiation file
require_once '../src/init.php';

class M_Docs extends M_Common
{
    private $_xx = 'xxx';

    protected $_yy = 'xxx';

    public $_zz = 'xxx';

    public function __construct()  {

    }


    public function howitworks() {
        $a = '<p>The framework is built on an MVC (Model-View-Controller) design pattern, which allows you to keep logic, data and design completely separate and allows any single file to be used in unlimited pages.</p>';
        $a .= '<p>There are many such frameworks but we have tried to take the concept back to basics and remove any of the complications that can be daunting to users new to MVC.</p>';
        $a .= '<p>The traditional way to create web pages was to have a seperate file for each page where the url will contain the folders to drill down to so if you were viewing http://www.mysite/about/contact/email.php, you were physically viewing a file called email.php in a folder called contact which is in a folder called about.</p>';
        $a .= '<p>Using an MVC framework, the url only references the controller with optional references to a method (function) within that controller and any parameters passed to it. For example, this page\'s url is xxx/Docs/HowItWorks, which translates to \'go into the controllers/Docs folder and in the C_home.php file, use the HowItWorks() method \'. Do not worry about the C_home.php file being confusing, that is the default file when a matching file is not found, but that will be explained later.</p>';
        $a .= '<p>The HowItWorks() method sets the page title and subtitle, opens a connection to the Docs model and calls the howitworks() function from there, which is what actually provides this text you are reading. </p>';
        $a .= '<p>Finally, it sets the correct view to use, specifies which function to use in the view and passes all the data to it. </p>';
        $a .= '<hr>';
        $a .= '<p>Note that all php files will have commenting at the top giving a brief description of their use. They will also have PhpDoc tags to help easily find the documentation (@see) or a page where the file is used (@example). Other commenting can be found throughout the files where a specific web page is references (@link) </p>';
        return $a;

    }
}
