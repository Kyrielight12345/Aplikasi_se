<?php

namespace App\Models;

use CodeIgniter\Model;


class guru_model extends Model
{
    protected $table = 'guru_dan_staf';


    public function getGuru($id = false)
    {
        if ($id == false) {
            return $this->findAll();
        } else {
            return $this->getWhere(['id_guru ' => $id]);
        }
    }
    public function insertGuru($data)
    {
        return $this->db->table($this->table)->insert($data);
    }
}
