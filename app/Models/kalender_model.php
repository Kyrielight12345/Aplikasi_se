<?php

namespace App\Models;

use CodeIgniter\Model;

class kalender_model extends Model
{
    protected $table = 'kalender';
    public function getKalender($id = false)
    {
        if ($id == false) {
            return $this->db->table('kalender')->get()->getResultArray();
        } else {
            return $this->getWhere(['id_kalender ' => $id]);
        }
    }
    public function insertKalender($data)
    {
        return $this->db->table($this->table)->insert($data);
    }
    public function updateKalender($data, $id)
    {
        return $this->db->table($this->table)->update($data, ['id_kalender' => $id]);
    }
    public function deleteKalender($id)
    {
        return $this->db->table($this->table)->delete(['id_kalender' => $id]);
    }
}
