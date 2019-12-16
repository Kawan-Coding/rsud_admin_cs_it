<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Ts_ticket extends CI_Controller
{
	protected $table = "troubleshooting_tickets";
	public function create()
	{
		$data = array(
			'roomcategory_id' =>post('roomcategory_id'),
			'roomdetail_id' =>post('roomdetail_id'),
			'assetcategory_id' =>post('assetcategory_id'),
			'useradmin_id' =>post('useradmin_id'),
			'id_ticket_register' =>post('id_ticket_register'),
			'id_asset_register' =>post('id_asset_register'),
			'asset_name' =>post('asset_name'),
			'user_name' =>post('user_name'),
			'ticket_date' =>post('ticket_date'),
			'description' =>post('description'),
			'troubleshootingstatus_id' => 1,
			'user_ent' =>post('user_ent'),
			'date_ent' => date("Y-m-d H:i:s")
		);

		$do = $this->data_model->insert($this->table, $data);
		if (!$do->error) {
			if (post('assetcategory_id') != 1) {
				success("berhasil menerbitkan tiket", $do->data);
			} else {
				error("do maintenance");
			}
		} else {
			error("gagal menerbitkan tiket");
		}
	}

	public function get($id = null)
	{
		if ($id != null) {
			$do = $this->data_model->select_where($this->table, array("id_ticket_register" => $id));
		} else {
			$do = $this->data_model->select($this->table);
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
			"column" => post('column'),
		);

		$where = array(
			"id" => post('id'),
		);

		$do = $this->data_model->update($this->table, $where, $data);
		if (!$do->error) {
			success("data berhasil diubah", $do->data);
		} else {
			error("datat gagal diubah");
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
