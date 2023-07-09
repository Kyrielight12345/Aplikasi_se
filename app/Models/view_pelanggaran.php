<?php

namespace App\Models;

use CodeIgniter\Model;


class view_pelanggaran extends Model
{
    protected $table = 'data_pelanggaran';
    // protected $primaryKey = 'id_pelanggaran';
    // protected $allowedFields = ['keterangan'];


    public function pelanggaran($id)
    {
        return $this->db->table('data_pelanggaran')
            ->join('siswa', 'siswa.nis =data_pelanggaran.nis')
            ->getWhere(['data_pelanggaran.nis' => $id]);
    }
}
