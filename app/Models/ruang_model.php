<?php

namespace App\Models;

use CodeIgniter\Model;


class ruang_model extends Model
{
    protected $table = 'ruang';


    public function getRuang($id=false)
    {
        if ($id == false){
            return $this->findAll();
        }else{
            return $this->getWhere(['id_ruang' => $id ]);
        }
    }
    
    public function insertRuang($data)
    {
        return $this->db->table($this->table)->insert($data);
    }
    public function updateRuang($data,$id)
    {
        return $this->db->table($this->table)->update($data,['id_ruang' => $id]);
    }
    // public function deleteRuang($id)
    // {
    //     return $this->db->table($this->table)->delete(['id_ruang' => $id]);
    // }
    // public function search($keyword)
    // {
    //     return $this->table('siswa')->like('nis', $keyword)->orlike('nama_siswa', $keyword)->orlike('id_kelas', $keyword);
    // }
}