<?php

namespace App\Models;

use CodeIgniter\Model;


class mapel_model extends Model
{
    protected $table = 'mapel';


    public function getMapel($id=false)
    {
        if ($id == false){
            return $this->findAll();
        }else{
            return $this->getWhere(['id_mapel' => $id ]);
        }
    }
    
    public function insertMapel($data)
    {
        return $this->db->table($this->table)->insert($data);
    }
    public function updateMapel($data,$id)
    {
        return $this->db->table($this->table)->update($data,['id_mapel' => $id]);
    }
    public function deleteMapel($id)
    {
        return $this->db->table($this->table)->delete(['id_mapel' => $id]);
    }
    // public function search($keyword)
    // {
    //     return $this->table('siswa')->like('nis', $keyword)->orlike('nama_siswa', $keyword)->orlike('id_kelas', $keyword);
    // }
}