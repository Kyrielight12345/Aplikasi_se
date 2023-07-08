<?php

namespace App\Models;

use CodeIgniter\Model;

class AbsenModel extends Model
{
    protected $table = 'presensi_total';
    protected $primaryKey = 'nis';
    protected $allowedFields = ['keterangan'];

    // Add any other necessary configurations or methods
}
