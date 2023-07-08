<?php

namespace App\Models;

use CodeIgniter\Model;


class siswa_model extends Model
{
    protected $table = 'siswa';


    public function getSiswa($id = false)
    {
        if ($id == false) {
            return $this->db->table('siswa')
                ->join('kelas', 'siswa.id_kelas = kelas.id_kelas')
                ->get()->getResultArray();
        } else {
            return $this->getWhere(['nis' => $id]);
        }
    }

    public function insertSiswa($data)
    {
        return $this->db->table($this->table)->insert($data);
    }
    public function updateSiswa($data, $id)
    {
        return $this->db->table($this->table)->update($data, ['nis' => $id]);
    }
    public function deleteSiswa($id)
    {
        return $this->db->table($this->table)->delete(['nis' => $id]);
    }
    public function search($keyword)
    {
        return $this->table('siswa')->like('nis', $keyword)->orlike('nama', $keyword)->orlike('jurusan', $keyword);
    }
}
