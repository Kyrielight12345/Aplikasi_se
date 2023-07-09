<?php

namespace App\Models;

use CodeIgniter\Model;


class pelanggaran_home extends Model
{
    protected $table = 'pelanggaran';
    // protected $primaryKey = 'id_pelanggaran';
    // protected $allowedFields = ['keterangan'];


    public function getPelanggaranhome($id = false)
    {
        if ($id == false) {
            return $this->db->table('pelanggaran')
                ->join('siswa', 'siswa.nis =pelanggaran.nis')
                ->get()->getResultArray();
        } else {
            return $this->db->table('pelanggaran')
                ->join('siswa', 'siswa.nis =pelanggaran.nis')
                ->getWhere(['pelanggaran.nis' => $id]);
        }
    }
}
