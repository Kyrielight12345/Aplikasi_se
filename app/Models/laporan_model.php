<?php

namespace App\Models;

use CodeIgniter\Model;


class laporan_model extends Model
{
    protected $table = 'laporan';


    public function getlaporan()
    {
        return $this->findall();
    }

    public function insertLaporan($data)
    {
        return $this->db->table($this->table)->insert($data);
    }
}
