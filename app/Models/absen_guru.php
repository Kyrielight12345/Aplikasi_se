<?php

namespace App\Models;

use CodeIgniter\Model;


class absen_guru extends Model
{
    protected $table = 'presensi';
    protected $table1 = 'presensi_total';
    public function getAbsen()
    {
        return $this->db->table('presensi')
            ->join('siswa', 'siswa.nis = presensi.nis')
            ->join('presensi_total', 'presensi_total.nis = presensi.nis')
            ->get()->getResultArray();
    }
    public function getAbsen_tu($id = false)
    {
        if ($id == false) {
            return $this->db->table('presensi')
                ->join('siswa', 'siswa.nis = presensi.nis')
                ->join('presensi_total', 'presensi_total.nis = presensi.nis')
                ->get()->getResultArray();
        } else {
            return $this->getWhere(['nis' => $id]);
        }
    }
    public function updateabsen($data, $id)
    {
        return $this->db->table($this->table)->update($data, ['nis' => $id]);
    }
}
