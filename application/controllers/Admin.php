<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller{

	public function __construct() {
		parent::__construct();
		$this->load->library("session");
		$this->load->model("users_model");
	}

	public function index(){
	
		if ($this->session->userdata("user_id")) {
			$data = array(
				"scripts" => array(
					"util.js",
					"restrict.js" 
				)
			);			
			$this->template->show("area_restrita.php", $data);		
		} else {
			$data = array(
				"scripts" => array(
					"util.js",
					"login.js" 
				)
			);
			$this->template->show("login.php", $data);
		}
	}

	public function logoff() {
		$this->session->sess_destroy();
		header("Location: " . base_url() . "admin");
	}
	
	public function ajax_login() {

		if (!$this->input->is_ajax_request()) {
			exit("Nenhum acesso de script direto permitido!");
		}

		$json = array();
		$json["status"] = 1;
		$json["error_list"] = array();

		$username = $this->input->post("username");
		$password = $this->input->post("password");

		if (empty($username)) {
			$json["status"] = 0;
			$json["error_list"]["#username"] = "Usuário não pode ser vazio!";
		} else if (empty($password)) {
			$json["status"] = 0;
			$json["error_list"]["#password"] = "Por favor introduza sua senha!";
		} else {
			$result = $this->users_model->get_user_data($username);

			if ($result) {
				$user_id = $result->user_id;
				$password_hash = $result->password_hash;
				if (password_verify($password, $password_hash)) {
					$this->session->set_userdata("user_id", $user_id);
				} else {
					$json["status"] = 0;
				}
			} else {
				$json["status"] = 0;
				
			}

			if ($json["status"] == 0) {
				$json["error_list"]["#btn_login"] = "Usuário e/ou senha incorretos!";
			}
	 	}	 
		echo json_encode($json);			  
	}

	public function ajax_import_image() {

		if (!$this->input->is_ajax_request()) {
			exit("Nenhum acesso de script direto permitido!");
		}

		$config["upload_path"] = "./tmp"; //PASTA ONDE OS ARQUIVOS SERÃO SALVOS.
		$config["allowed_types"] = "gif|png|jpg"; //TIPO DE DE ARQUIVOS QUE SERÃO ACEITOS.
		$config["overwrite"] = TRUE; //SUBSTITUIR QUANDO TIVER O MESMO NOME.

		$this->load->library("upload", $config);

		$json = array();
		$json["status"] = 1;

		if(!$this->upload->do_upload("image_file")){
			$json["status"] = 0;
			$json["error"] = $this->upload->display_errors("","");
		} else {
			if($this->upload->data()["file_size"] <= 1024) {
				$file_name = $this->upload->data()["file_name"];
				$json["img_path"] = base_url() . "tmp/" . $file_name;
			} else {
				$json["status"] = 0;
				$json["error"] = "Arquivo não deve ser maior que 1 MB";
			}
		}
		echo json_encode($json);
	}
}

