<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Account extends CI_Controller
{
	protected $table = "user_admin";
	public function login()
	{
		$data = array(
			'username' => post('username'),
			'password' => post('password'),
		);
		$do = $this->data_custom->login($data);
		if (!$do->error) {
			success("Username dan password cocok", $do->data);
		} else {
			error('username dan password salah');
		}
	}

	public function create()
	{
		$data = array(
			"column" => post('column'),
		);

		$do = $this->data_model->insert($this->table, $data);
		if (!$do->error) {
			success("data berhasil ditambahkan", $do->data);
		} else {
			error("data gagal ditambahkan");
		}
	}

	public function get($id = null)
	{
		if ($id != null) {
			$do = $this->data_model->select($this->table);
		} else {
			$do = $this->data_model->select_where($this->table, array("id" => $id));
		}

		if (!$do->error) {
			success("data berhasil ditemukan", $do->data);
		} else {
			error("data gagal ditemukan");
		}
	}
	
	public function update()
	{
		$data = array(
			'username' => post('username'),
			'password' => post('password'),
		);
		$where = array(
			'username' => post('username_lama'),
			'password' => post('password_lama'),
		);
		$do = $this->data_model->update('user_admin', $where, $data);
		if (!$do->error) {
			$data2 = array(
				'email' => post('email'),
				'phone' => post('phone'),
			);
			$do = $this->data_model->update('user_accounts', array('id' => post('user_account_id'), $data2));
			if (!$do->error) {
				success("berhasil melakukan update akun", array_merge($data, $data2));
			} else {
				error("gagal melakukan update akun");
			}
		} else {
			error('gagal melakukan update username & password');
		}
	}

	public function delete()
	{
		$where = array(
			"id" => post('id')
		);

		$do = $this->data_model->delete($this->table, $where);
		if (!$do->error) {
			success("data berhasil dihapus", $do->data);
		} else {
			error("datat gagal dihapus");
		}
	}
}
