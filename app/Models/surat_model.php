<?php

namespace App\Models;

use CodeIgniter\Model;


class surat_model extends Model
{
    protected $table = 'surat';


    public function getSurat($id = false)
    {
        if ($id == false) {
            return $this->db->table('surat')
                ->join('siswa', 'siswa.nis = surat.nis')
                ->get()->getResultArray();
        } else {
            return $this->db->table('surat')
                ->join('siswa', 'siswa.nis = surat.nis')
                ->getWhere(['surat.no_surat' => $id]);
        }
    }

    public function insertSurat($data)
    {
        return $this->db->table($this->table)->insert($data);
    }
    public function updateSurat($data, $id)
    {
        return $this->db->table($this->table)->update($data, ['no_surat' => $id]);
    }
    public function deleteSurat($id)
    {
        return $this->db->table($this->table)->delete(['no_surat' => $id]);
    }
    // public function search($keyword)
    // {
    //     return $this->table('siswa')->like('nis', $keyword)->orlike('nama_siswa', $keyword)->orlike('id_kelas', $keyword);
    // }
}
