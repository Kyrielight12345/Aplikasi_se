<?php

namespace App\Models;

use CodeIgniter\Model;

class nilai_view_model extends Model
{
    protected $table = 'nilai_all_guru';


    public function getViewNilai($id, $id2)
    {
        return $this->db->table('nilai_all_guru')
            ->join('siswa', 'siswa.nis = nilai_all_guru.nis')
            ->where('nilai_all_guru.nis', $id)
            ->where('siswa.nis', $id)
            ->join('nilai', 'nilai.nis = nilai_all_guru.nis')
            ->where('nilai_all_guru.nis', $id)
            ->where('nilai_all_guru.semester', $id2)
            ->where('nilai.semester', $id2)
            ->get()
            ->getRowArray();
    }
}
