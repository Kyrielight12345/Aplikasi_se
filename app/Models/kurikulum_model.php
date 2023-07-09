<?php

namespace App\Models;

use CodeIgniter\Model;


class kurikulum_model extends Model
{
    protected $table = 'kurikulum';


    public function getKurikulum($id = false)
    {
        if ($id == false) {
            return $this->db->table('kurikulum')->get()->getResultArray();
        } else {
            return $this->getWhere(['id_kurikulum' => $id]);
        }
    }

    public function insertKurikulum($data)
    {
        return $this->db->table($this->table)->insert($data);
    }

    public function updateKurikulum($data, $id)
    {
        return $this->db->table($this->table)->update($data, ['id_kurikulum' => $id]);
    }

    public function deleteKurikulum($id)
    {
        return $this->db->table($this->table)->delete(['id_kurikulum' => $id]);
    }
}
