<?php
include 'config.php';
include 'lib/db.php';
include 'lib/helpers.php';
include 'lib/sdk/whatsprot.class.php';
include 'lib/api.php';

$options = array();

if($_GET['mobile'] && strlen($_GET['mobile'])==10){
	$options['mobile'] = "91".$_GET['mobile'];
}

if($_GET['smscode'] && strlen($_GET['smscode'])==6){
	$options['smscode'] = $_GET['smscode'];
}

if($_GET['password'] && $_GET['password'] !=""){
	$options['password'] = $_GET['password'];
}
$apicall = new Call_API($options);

if($_GET['action'] == "getsmscode" ){
	$apicall->getSMSCode();
	
}


if($_GET['action'] == "getpassword" ){
	$apicall->getPassword();
	echo $apicall->password;
}