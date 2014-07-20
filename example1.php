<?php
set_time_limit(0);
require_once '../src/whatsprot.class.php';



$username = "919310444177";
//$code = '881208';
$password= "vrOHuBcFoLLRJyoqYR7qEyMcr24=";

$identity = strtolower(urlencode(sha1($username, true)));
$w = new WhatsProt($username, $identity, "Rajesh", true);
//$w->codeRequest();

//$result = $w->codeRegister("881208");
//$password = $result->pw;
//echo "Password is $password";

$w->Connect();
$w->LoginWithPassword($password);
$dst = array('917428444177');
foreach($dst as $key => $target){
	$msg = "Hi ".$target." This is Rajesh ,How Are You ".date("F j, Y, g:i a");
	//$w->sendMessage($target , $msg);
	//send picture
	$w->sendMessageImage($target , "./emoji/emojisprite.png");

	//send video
	//$w->sendMessageVideo($target, 'http://techslides.com/demos/sample-videos/small.mp4');

	//send Audio
	//$w->sendMessageAudio($target, 'http://www.kozco.com/tech/piano2.wav');

	//send Location
	//$w->sendLocation($target, '4.948568', '52.352957');
	$w->PollMessages();
}
$w->disconnect();
