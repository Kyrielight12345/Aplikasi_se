<?php

namespace App\Models;

use CodeIgniter\Model;


class suratmasuk_model extends Model
{
    protected $table = 'surat_masuk';


    public function getSuratmasuk($id = false)
    {
        if ($id == false){
            return $this->findAll();
        }else{
            return $this->getWhere(['id_surat' => $id ]);
        }
    }
    public function insertSuratmasuk($data)
    {
        return $this->db->table($this->table)->insert($data);
    }
    public function updateSuratmasuk($data,$id)
    {
        return $this->db->table($this->table)->update($data,['id_surat' => $id]);
    }
    public function deleteSuratmasuk($id)
    {
        return $this->db->table($this->table)->delete(['id_surat' => $id]);
    }
}