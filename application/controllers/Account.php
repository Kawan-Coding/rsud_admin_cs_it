<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Account extends CI_Controller
{
	public function login()
	{
		$post = $this->input->post();
		$data = array(
			'username' => r($post['username']),
			'password' => r($post['password'])
		);
		$get = $this->data_model->login($data);
		if ($get != false) {
			sukses($get);
		} else {
			error('username dan password salah');
		}
	}
}
