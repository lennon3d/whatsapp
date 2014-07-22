<?php
class Call_API extends Helpers{
	var $mobile;
	var $smscode;
	var $password;
	
	function Call_API($config) {
		
		if(isset($config['mobile'])){	$this->mobile = $config['mobile'];}
		if(isset($config['smscode'])){ $this->smscode = $config['smscode'];}
		if(isset($config['password'])){$this->password = $config['password'];}
	}
	
	/**
	 * Get SMS Code
	 */
	function getSMSCode() {
		$identity = strtolower(urlencode(sha1($this->mobile, true)));
		$w = new WhatsProt($this->mobile, $identity, "Rajesh", false);
		$response = $w->codeRequest();
		return $response;
	}
	
	/**
	 * Get Password
	 */
	function getPassword() {
		
		$identity = strtolower(urlencode(sha1($this->mobile, true)));
		$w = new WhatsProt($this->mobile, $identity, "Rajesh", false);
		$result = $w->codeRegister($this->smscode);
		$this->password =  $result->pw;
	}
	
	/**
	 * Save Sender Info
	 */
	function saveSenderInfo($options) {
		$helpers = new Helpers();
		$helpers->saveSenderInList($options);
	}
}
