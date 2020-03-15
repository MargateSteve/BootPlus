<?php

/**
 * Main Template
 *
 */
class T_Main extends T_Base {

	/**
	 * Construct the Page
	 *
	 * The entire page is built as soon as it is called so we set everything
	 * we need in the __construct and at the end of it, called the Template() function
     * to create the whole page on the fly.
	 *
	 * @param string 		$content       Page Content
	 * @param array        	$args          Additional arguments
	 */
    public function __construct() {

    }

    public function render () {

        $this->bodyStart ();
        $this->header ();
        $this->topNav ();
        echo '<div class="container">';
        echo '<div class="row">';
        echo '<main class="col">';
        echo '<div class="row">';
        $this->get_content ();
        echo '</div><!-- main content -->';
        echo '</main>';
        echo '</div>';
        echo '</div>';
        $this->footer ();
        $this->bodyEnd ();

    } // Template()


    public function header() {
        echo '<header id="header">';
        echo '<div class="container text-light pb-1">';
        echo '<div class="row">';
        echo '<div class="col">';
        echo '<h1 class="title">PHP MVC</h1>';
        echo '</div>';
        echo '</div>';
        echo '</div>';
        echo '</header>';
    } // header()

    public function set_content($c) {
        $this->_content .= $c;

    } // set_content()

    public function set_meta($m) {
        $this->_meta = $m;
   } // set_content()

    public function set_css_files($c) {
        $this->_css_files = $c;
    } // set_content()

    public function set_js_files($j) {
        $this->_js_files = $j;
    } // set_content()

    public function set_page_js($j) {
        $this->_page_js = $j;
    } // set_content()

    public function set_page_title($t) {
        $this->_page_title = $t;
        return '<div class="col-12"><h1 class="mb-0">'.$t.'</h1></div>';
    } // set_page_title()

    public function set_page_subtitle($t) {
        return '<div class="col-12"><h2 class="text-secondary mb-0">'.$t.'</h2></div>';
    } // set_page_subtitle()


 	/**
 	 * Build footer
 	 *
 	 * Sets the page footer
 	 *
 	 * @return string 	footer
 	 *
 	 * TODO: Finish this off
 	 */
    public function footer () {
         echo '<footer class="footer bg-dark"><div class="container text-white ">Footer content.</div><!-- div .container-fluid text-white  --></footer>';
     } // footer()
}
