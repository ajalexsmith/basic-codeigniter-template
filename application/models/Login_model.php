<?php defined('BASEPATH') OR exit('No direct script access allowed'); 

class Login_model extends CI_Model {

	public $error = "Username/Password incorrect. Try again";

	public function validate($username, $password) {
		if ($username == "" or $username == null) {
			return "No username was given";
		} else if ($password == "" or $password == null) {
			return "No password was given";
		}
		$query = $this->db->get("users");
		foreach($query->result() as $row) {
			if ($row->username == $username) {
				if (password_verify($password, $row->password)) {
					$data = Array(
						"userid"    => $row->id,
						"username"  => $row->username,
						"validated" => true
					);
					$this->session->set_userdata($data);
					return true;
				} else {
					return $this->error;
				}
			}
		}
		return $error;
	}
	public function adduser($username, $password) {
		$data = Array(
			"username" => $username,
			"password" => password_hash($password, PASSWORD_DEFAULT)
		);
		if (!password_verify($password, $data["password"])) {
			return "Encryption error";
		}
		if ($this->db->insert("users", $data)) {
			return "User added";
		} else {
			return "Failed adding user";
		}
	}
}