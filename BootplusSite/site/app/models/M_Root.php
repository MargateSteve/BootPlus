<?php

/**
 * Competitions Model
 */

// Include the initiation file
require_once '../src/init.php';

class M_Root extends M_Common
{
    private $_xx = 'xxx';

    protected $_yy = 'xxx';

    public $_zz = 'xxx';

    public function __construct()  {

    }

    public function home_page() {
        return 'Simple text return from the model function';
    }

    public function home_page_method() {
        $a = [
            'main' => 'Calls the Method() in /controllers/home.php',
            'sub' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras sed velit id est luctus suscipit. Nunc porta, lectus quis venenatis.'
        ];
        return $a;
    }
}
