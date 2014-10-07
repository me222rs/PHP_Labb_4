<?php
require_once('modelLogin.php');
require_once('registerView.php');

class RegisterView{
	
	
private $modelLogin;
private $registerView;
	
	function __construct() {
		$this->modelLogin = new modelLogin();
		$this->registerView = new RegisterView();	
	}
	
	public function Register(){
		
		if($this->modelLogin->didUserPressRegister()){
			echo "bajs";
		}
		
		
	}
	

}


