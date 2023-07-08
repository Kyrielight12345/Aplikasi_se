<?php

namespace App\Models;

use CodeIgniter\Model;


class nilai_model extends Model
{
    protected $table = 'nilai';


    public function getNilai()
    {
        return $this->db->table('nilai')
            ->join('siswa', 'siswa.nis = nilai.nis')
            ->get()->getResultArray();
    }

    public function insertSiswa($data)
    {
        return $this->db->table($this->table)->insert($data);
    }
}

