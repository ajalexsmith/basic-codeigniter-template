<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {
	public function __construct() {
		parent::__construct();
		$this->load->helper("form");
		$this->load->model("login_model");
	}
	public function index($error = "") {
		$this->session->sess_destroy();
		$data["page"] = "Login";
		$data["error"] = $error;
//		$data["error"] = $this->login_model->adduser("test", "testpassword");
		$this->load->view("login", $data);
	}
	public function check() {
		$username = $this->input->post("username", true);
		$password = $this->input->post("password", true);
		$valid = $this->login_model->validate($username, $password);
		if ($valid === true) {
			redirect("/admin/", "refresh");
		} else {
			$this->index($valid);
		}
	}
}
