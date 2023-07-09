<?php
namespace App\Models;
use CodeIgniter\Model;

class konseling_model extends Model
{
    protected $table = 'konseling';
    
    public function getKonseling($id = false)
    {
        if ($id == false) {
            return $this->db->table('konseling')
                ->join('siswa', 'siswa.nis = konseling.nis')
                ->get()->getResultArray();
        } else {
            return $this->db->table('konseling')
                ->join('siswa', 'siswa.nis = konseling.nis')
                ->getWhere(['konseling.kode_konseling' => $id ]);
        }
    }
    
    public function insertKonseling($data)
    {
        return $this->db->table($this->table)->insert($data);
    }
    
    public function updateKonseling($data,$id)
    {
        return $this->db->table($this->table)->update($data,['kode_konseling' => $id]);
    }

    public function deleteKonseling($id)
    {
        return $this->db->table($this->table)->delete(['kode_konseling' => $id]);
    }
}