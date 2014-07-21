<?php
class Call_API extends Helpers{
	var $mobile;
	var $smscode;
	var $password;
	
	function Call_API($config) {
		
		if($config['mobile']){	$this->mobile = $config['mobile'];}
		if($config['smscode']){ $this->smscode = $config['smscode'];}
		if($config['password']){$this->password = $config['password'];}
	}
	
	/**
	 * Get SMS Code
	 */
	function getSMSCode() {
		
		$identity = strtolower(urlencode(sha1($this->mobile, true)));
		$w = new WhatsProt($this->mobile, $identity, "Rajesh", true);
		$w->codeRequest();
	}
	
	/**
	 * Get Password
	 */
	function getPassword() {
		
		$identity = strtolower(urlencode(sha1($this->mobile, true)));
		$w = new WhatsProt($this->mobile, $identity, "Rajesh", true);
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
