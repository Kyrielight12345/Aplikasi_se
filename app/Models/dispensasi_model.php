<?php

namespace App\Models;

use CodeIgniter\Model;


class dispensasi_model extends Model
{
    protected $table = 'dispensasi';


    public function getDispensasi($id=false)
    {
        if ($id == false) {
            return $this->db->table('dispensasi')
                ->join('siswa', 'siswa.nis = dispensasi.nis')
                ->get()->getResultArray();
        }else{
            return $this->db->table('dispensasi')
            ->join('siswa', 'siswa.nis = dispensasi.nis')
            ->getWhere(['dispensasi.kode_dispen' => $id ]);
        }
       
    }
    
    public function InsertDispensasi($data)
    {
        return $this->db->table($this->table)->insert($data);
    }
    public function updateDispensasi($data,$id)
    {
        return $this->db->table($this->table)->update($data,['kode_dispen' => $id]);
    }
    
    public function deleteDispensasi($id)
    {
        return $this->db->table($this->table)->delete(['kode_dispen' => $id]);
    }



}
