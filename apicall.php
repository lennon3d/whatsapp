<?php
include 'config.php';
include 'lib/db.php';
include 'lib/helpers.php';
include 'lib/sdk/whatsprot.class.php';
include 'lib/api.php';

$options = array();

if (isset($_POST)) {
	
	if(isset($_POST['mobile']) && strlen($_POST['mobile'])==10){
		$options['mobile'] = "91".$_POST['mobile'];
	}
	
	if(isset($_POST['smscode']) && strlen($_POST['smscode'])==6){
		$options['smscode'] = $_POST['smscode'];
	}
	
	if( isset($_POST['password']) && $_POST['password'] !=""){
		$options['password'] = $_POST['password'];
	}
	$apicall = new Call_API($options);
	
	if(isset($_POST['action']) && $_POST['action'] == "getsmscode" ){
		$response = $apicall->getSMSCode();
		echo  json_encode($response);
	}
	
	
	if( isset($_POST['action']) && $_POST['action'] == "getpassword" ){
		$apicall->getPassword();
		echo $apicall->password;
	}	
}
