<?php
/**
 *  Generate a Session token
 *
 *	Creates a session token via an ajax call and then appends a
 *	name="token" field to any forms with a class of .req-token
 *
 *  This prevents multiple tokens being generated and the token check being
 *  failed when there are multiple forms on the page
 *
 * 	This is done on page load via
 * 	public\js\default.js
 *	public\js\admin.js
 *
 * 	Calling in public\js\shared.js->addToken()
 *
 * @package Core
 * @author  Steve Ball <steve@follyball.co.uk>
 * @copyright Copyright (c) 2017 Steve Ball <steve@follyball.co.uk>
 * @return stylesheet
 */

require_once '../app/init.php';
echo Token::generate();
