<?php

namespace App\Models;

use CodeIgniter\Model;


class suratkeluar_model extends Model
{
    protected $table = 'surat_keluar';


    public function getSuratkeluar($id = false)
    {
        if ($id == false){
            return $this->findAll();
        }else{
            return $this->getWhere(['id_surat' => $id ]);
        }
    }
    public function insertSuratkeluar($data)
    {
        return $this->db->table($this->table)->insert($data);
    }
    public function updateSuratkeluar($data,$id)
    {
        return $this->db->table($this->table)->update($data,['id_surat' => $id]);
    }
    public function deleteSuratkeluar($id)
    {
        return $this->db->table($this->table)->delete(['id_surat' => $id]);
    }
}