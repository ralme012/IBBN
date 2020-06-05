<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Restrict extends CI_Controller {

	public function index()
	{
		echo password_hash("nala1612",PASSWORD_DEFAULT);
	}
}
