<?php

namespace App\Models;

use CodeIgniter\Model;


class m_kelas_model extends Model
{
    protected $table = 'jadwal';


    public function getjadwal($id)
    {
        return $this->db->table('jadwal')
            ->join('guru_dan_staf', 'guru_dan_staf.id_guru = jadwal.id_guru')
            ->where('jadwal.id_guru', $id)
            ->get()->getResultArray();
    }
}
