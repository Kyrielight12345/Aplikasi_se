<?php

namespace App\Models;

use CodeIgniter\Model;


class kelola_ujian_model extends Model
{
    protected $table = 'kelola_ujian';

    public function getKelola_ujian1()
    {
        //return $this->db->table('kelola_ujian')->get()->getResultArray();
    }

    public function getKelola_ujian($id = false)
    {
        if ($id == false) {
            return $this->db->table('kelola_ujian')
                ->join('guru_dan_staf', 'guru_dan_staf.id_guru = kelola_ujian.id_guru')
                ->join('mapel', 'mapel.id_mapel = kelola_ujian.id_mapel')
                ->join('ruang', 'ruang.id_ruang = kelola_ujian.id_ruang')
                ->get()->getResultArray();
        } else {
            return $this->db->table('kelola_ujian')
                ->join('guru_dan_staf', 'guru_dan_staf.id_guru = kelola_ujian.id_guru')
                ->join('mapel', 'mapel.id_mapel = kelola_ujian.id_mapel')
                ->join('ruang', 'ruang.id_ruang = kelola_ujian.id_ruang')
                ->getWhere(['kelola_ujian.id' => $id]);
        }
    }

    public function insertKelola_ujian($data)
    {
        return $this->db->table($this->table)->insert($data);
    }

    public function updateKelola_ujian($data, $id)
    {
        return $this->db->table($this->table)->update($data, ['id' => $id]);
    }

    public function deleteKelola_ujian($id)
    {
        return $this->db->table($this->table)->delete(['id' => $id]);
    }

    public function cekDataGuruJam($id_guru, $jam_masuk)
    {
        return $this->db->table($this->table)
            ->where('id_guru', $id_guru)
            ->where('jam_masuk', $jam_masuk)

            ->countAllResults() > 0;
    }
}
