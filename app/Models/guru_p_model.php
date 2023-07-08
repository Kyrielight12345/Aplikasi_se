<?php

namespace App\Models;

use CodeIgniter\Model;


class guru_p_model extends Model
{
    protected $table = 'guru_dan_staf';


    public function getguru($id)
    {
        return $this->db->table('guru_dan_staf')
            ->where('guru_dan_staf.id_guru', $id)
            ->get()->getResultArray();
    }
    public function updatebio($data, $id)
    {
        # code...
        return $this->db->table($this->table)->update($data, ['id_guru' => $id]);
    }
}
