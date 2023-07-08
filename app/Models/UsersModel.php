<?php

namespace App\Models;

use CodeIgniter\Model;

class UsersModel extends Model
{
    protected $table = "users";
    protected $primaryKey = "username";
    protected $returnType = "object";
    protected $useTimestamps = true;
    protected $allowedFields = ['username', 'password', 'id_guru', 'akses', 'nama'];

    public function getguru()
    {
        return $this->db->table('users')
            ->join('guru_dan_staf', 'guru_dan_staf.id_guru = users.id_guru')
            ->get()->getResultArray();
    }
}
