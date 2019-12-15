<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Db_model extends CI_Model
{
    public function login($data)
    {
        $query= $this->db
        ->select('user_accounts.id, r.name as role, units.name as unit, user_accounts.name, user_accounts.email, user_accounts.phone, user_accounts.status')
        ->from('user_accounts')
        ->join('user_admin','user_admin.useraccount_id = user_accounts.id')
        ->join('roles','user_admin.role_id = roles.id')
        ->join('units','user_admin.unit_id=units.id')
        ->where($data)
        ->get();
        if($query){
            return $query->row();
        }else{
            return false;
        }
    }
    public function selectWhere($table, $data)
    {
        $query = $this->db->where($data)->get($table);
        if ($query) {
            return $query->row();
        } else {
            return false;
        }
    }

    public function getRowWhere($table, $data)
    {
        $query = $this->db->where($data)->get($table);
        if ($query) {
            return $query->num_rows();
        } else {
            return false;
        }
    }

    public function selectAllWhere($table, $data)
    {
        $query = $this->db->where($data)->get($table);
        if ($this->db->affected_rows() !== 0) {
            return $query->result();
        } else {
            return false;
        }
    }

    public function deleteWhere($table, $data)
    {
        $query = $this->db->where($data)->delete($table);
        if ($query) {
            return true;
        } else {
            return false;
        }
    }

    public function insert($table, $data)
    {
        $query = $this->db->insert($table, $data);
        if ($query) {
            return true;
        } else {
            return false;
        }
    }

    public function updateWhere($id, $table, $data)
    {
        $query = $this->db->where('id_user', $id)->update($table, $data);
        if ($query) {
            return true;
        } else {
            return false;
        }
    }

    public function updateWheres($where, $table, $data)
    {
        $query = $this->db->where($where)->update($table, $data);
        if ($query) {
            return true;
        } else {
            return false;
        }
    }

    public function selectSum($table, $row, $data)
    {
        $query = $this->db->select_sum($row)->where($data)->get($table);
        if ($query) {
            return $query->row();
        }
    }

    public function selectAllLike($table, $data, $like)
    {
        $query = $this->db->where($data)->like($like)->get($table);
        if ($this->db->affected_rows() !== 0) {
            return $query->result();
        } else {
            return false;
        }
    }

    public function selectAll($table)
    {
        return $this->db->get($table)->result();
    }

    public function selectAllLimit($table, $limit)
    {
        return $this->db->limit($limit)->get($table)->result();
    }
}

/* End of file db_model.php */
/* Location: ./application/models/db_model.php */
