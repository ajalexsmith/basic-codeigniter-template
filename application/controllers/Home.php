<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
	public function __construct() {
		parent::__construct();
		if (!$this->session->validated) {
			redirect("/", "refresh");
		}
		$this->load->model("home_model");
	}
	public function index() {
		$data["site"] = "ChangeMe";
		$data["pages"] = Array("Home");
		$this->load->view("home", $data);
	}
}
