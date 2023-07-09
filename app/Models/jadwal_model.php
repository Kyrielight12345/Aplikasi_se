<?php

namespace App\Models;

use CodeIgniter\Model;


class jadwal_model extends Model
{
    protected $table = 'jadwal';

    public function getJadwal1()
    {
        //return $this->db->table('kelola_ujian')->get()->getResultArray();
    }

    public function getJadwal($id = false)
    {
        if ($id === false) {
            return $this->db->table('jadwal')
                ->join('mapel', 'mapel.id_mapel = jadwal.id_mapel')
                ->join('ruang', 'ruang.id_ruang = jadwal.id_ruang')
                ->join('guru_dan_staf', 'guru_dan_staf.id_guru = jadwal.id_guru')
                ->get()->getResultArray();
        } else {
            $this->db->table('jadwal')->where('jadwal.id_jadwal', $id);
            return $this->db->table('jadwal')->get()->getRowArray();
        }
    }


    public function insertJadwal($data)
    {
        return $this->db->table($this->table)->insert($data);
    }

    public function updateJadwal($data, $id)
    {
        return $this->db->table($this->table)->update($data, ['id_jadwal' => $id]);
    }

    public function deleteJadwal($id)
    {
        return $this->db->table($this->table)->delete(['id_jadwal' => $id]);
    }
}
