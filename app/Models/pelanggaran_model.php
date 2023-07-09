<?php

namespace App\Models;

use CodeIgniter\Model;


class pelanggaran_model extends Model
{
    protected $table = 'data_pelanggaran';
    // protected $primaryKey = 'id_pelanggaran';
    // protected $allowedFields = ['keterangan'];


    public function getPelanggaran($id = false)
    {
        if ($id == false) {
            return $this->db->table('data_pelanggaran')
                ->join('siswa', 'siswa.nis = data_pelanggaran.nis')
                ->get()->getResultArray();
        } else {
            return $this->db->table('data_pelanggaran')
                ->join('siswa', 'siswa.nis = data_pelanggaran.nis')
                ->getWhere(['data_pelanggaran.nis' => $id]);
        }
    }

    public function insertPelanggaran($data)
    {
        return $this->db->table($this->table)->insert($data);
    }
    public function updatePelanggaran($data, $id)
    {
        return $this->db->table($this->table)->update($data, ['id_pelanggaran' => $id]);
    }
    public function deletePelanggaran($id)
    {
        return $this->db->table($this->table)->delete(['id_pelanggaran' => $id]);
    }
    // public function search($keyword)
    // {
    //     return $this->table('siswa')->like('nis', $keyword)->orlike('nama_siswa', $keyword)->orlike('id_kelas', $keyword);
    // }
}
