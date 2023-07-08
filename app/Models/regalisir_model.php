<?php

namespace App\Models;

use CodeIgniter\Model;


class regalisir_model extends Model
{
    protected $table = 'regalisir';


    public function getRegalisir($id = false)
    {
        if ($id == false) {
            return $this->db->table('regalisir')
                ->join('siswa', 'siswa.nis = regalisir.nis')
                ->get()->getResultArray();
        } else {
            return $this->getWhere(['nis' => $id]);
        }
    }

    public function insertRegalisir($data)
    {
        return $this->db->table($this->table)->insert($data);
    }
    public function updatelegalisir($data, $id)
    {
        return $this->db->table($this->table)->update($data, ['nis' => $id]);
    }
}
