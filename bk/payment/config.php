<?php
 
// Initialize composer
require_once 'vendor/autoload.php';
 
// Composer autoloads Stripe library when first referenced.
 
// Set Stripe API key
 
 
// TODO: set these to your secret and publishable keys
 
$Config = [
	// Test Keys
	// 'secret_key' => 'sk_test_51IiQBYGDCR6lzimdotJhpdYRAMuIRPl0qsn7oWKcBPfcSIUIyRCDsBE4xfSxXeoQDibMvzXzU5P1TxJ38lqXzb3M00rA9fadqJ',
	// 'publishable_key' => 'pk_test_51IiQBYGDCR6lzimd6zH4IV0toVSYFwsohBunJDbGLQM5nzejFC1k0JLx2ZlP3wvDkLXUYQ29OcthKj3mX7Qo6wjS007jnwYgIu',

    // Live Keys	
	'secret_key'=> 'pk_live_PDCZEuY9254ucx1RD3BZhjJF',
	'publishable_key'=> 'pk_live_PDCZEuY9254ucx1RD3BZhjJF',
	'DB_HOST'=> 'localhost', 
	'DB_USERNAME'=> 'webappform' ,
	'DB_PASSWORD'=> 'webappform,' ,
	'DB_NAME'=> 'webappform',
];
 





function config($key) {
    global $Config;
    if (!isset($Config[$key])) die("Unknown configuration item '$key'");
    return $Config[$key];
}
 
\Stripe\Stripe::setApiKey(config('secret_key'));