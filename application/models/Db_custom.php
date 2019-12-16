<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Db_custom extends CI_Model
{

    public function login($data)
    {
        $query = $this->db
            ->select('user_admin.*, user_accounts.name as nama_lengkap,user_accounts.email,user_accounts.phone, user_accounts.status, roles.name as role, units.name as unit')
            ->from('user_admin')
            ->join('user_accounts', 'user_admin.useraccount_id=user_accounts.id')
            ->join('roles', 'user_admin.role_id =roles.id')
            ->join('units', 'user_admin.unit_id = units.id')
            ->where($data)
            ->get();
        if ($this->db->affected_rows() !== 0) {
            return true($query->row());
        } else {
            return false();
        }
    }

    public function get_rooms($id = null)
    {
        $query = $this->db
            ->select('room_details.*, room_categories.name as room_category, room_areas.name as room_area')
            ->from('room_details')
            ->join('room_categories', 'room_details.roomcategory_id = room_categories.id')
            ->join('room_areas', 'room_details.roomarea_id = room_areas.id');
        if ($id != null) {
            $query = $query->where('room_details.id', $id);
        }
        
        $query = $query->get();
        if ($query) {
            return true($query->result());
        } else {
            return false();
        }
    }

    public function get_assets($id = null)
    {
        $query = $this->db
            ->select('assets.*, asset_sub_categories.name as asset_sub_category, asset_categories.name as asset_categories')
            ->from('assets')
            ->join('asset_sub_categories', 'assets.assetsubcategory_id = asset_sub_categories.id')
            ->join('asset_categories', 'assets.assetcategory_id = asset_categories.id');
        if ($id != null) {
            $query = $query->where('assets.id', $id);
        }

        $query = $query->get();
        if ($query) {
            return true($query->result());
        } else {
            return false();
        }
    }
}

/* End of file db_model.php */
/* Location: ./application/models/db_model.php */
