<?php 

include "vendor/autoload.php";

use Myfc\Captcha;

$captcha  = new Captcha( [
	'height' => 50,
		'width' => 150,
		  'font' => 'fonts/segoepr.ttf'	
] );

$captcha->generate();

