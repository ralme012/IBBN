<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Restrict extends CI_Controller {

	public function index()
	{
		echo "Controller Restrict!";
	}

	public function hash(){
		echo password_hash("nala1612",PASSWORD_DEFAULT);
	}

	public function test(){
		$test = "Controller Restrict test!";
		var_dump($test);
	}
}
