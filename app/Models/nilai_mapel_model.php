<?php

namespace App\Models;

use CodeIgniter\Model;


class nilai_mapel_model extends Model
{
    protected $table = 'nilai_mapel';


    public function getnilai_mapel($id = false, $id2 = false)
    {
        if ($id == false and $id2 == false) {
            return $this->db->table('nilai_mapel')
                ->join('siswa', 'siswa.nis = nilai_mapel.nis')
                ->join('guru_dan_staf', 'guru_dan_staf.id_guru = nilai_mapel.id_guru')
                ->join('nilai_all_guru', 'nilai_all_guru.nis = nilai_mapel.nis')
                ->get()->getResultArray();
        } else {
            return $this->getWhere(['nis' => $id, 'id_guru' => $id2]);
        }
    }

    public function updatenilai($ket, $data, $id, $id2)
    {
        # code...
        $sql = "update nilai_all_guru set indonesia='$ket' where nis='$id'";
        $this->db->query($sql);
        return $this->db->table($this->table)->update($data, ['nis' => $id, 'id_guru' => $id2]);
    }
}
