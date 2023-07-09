<?php

namespace App\Models;

use CodeIgniter\Model;


class user_tu_model extends Model
{
    protected $table = 'users';


    public function getUsers($id = false)
    {
        if ($id == false) {
            return $this->db->table('users')
                ->join('guru_dan_staf', 'guru_dan_staf.id_guru = users.id_guru')
                ->get()->getResultArray();
        } else {
            return $this->getWhere(['username' => $id]);
        }
    }
    public function insertUsers($data)
    {
        return $this->db->table($this->table)->insert($data);
    }
    public function updateUsers($data, $id)
    {
        return $this->db->table($this->table)->update($data, ['username' => $id]);
    }
    public function deleteUsers($id)
    {
        return $this->db->table($this->table)->delete(['username' => $id]);
    }
}
