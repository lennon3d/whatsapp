<?php
set_time_limit(0);
session_start();
require_once './lib/sdk/whatsprot.class.php';


if($_POST['mobile'] && $_POST['message']){
	
	$senderinfo = $_SESSION['senderinfo'][0];
	$username = "91".$senderinfo['username'];
	
	$identity = strtolower(urlencode(sha1($username, true)));
	
	$w = new WhatsProt($username, $identity, "Rajesh", true);
	
	$w->Connect();
	
	$w->LoginWithPassword($senderinfo['password']);
	echo "91".$_POST['mobile'];
	$w->sendMessage("91".$_POST['mobile'] , $_POST['message']);
	
	$w->disconnect();
}
