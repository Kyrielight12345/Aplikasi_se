<?php

namespace App\Controllers;

use App\Models\m_kelas_model;



class m_kelas extends BaseController
{
    protected $helpers = [];
    protected $m_kelas_model;
    public function __construct()
    {
        helper('form');
        $this->m_kelas_model = new m_kelas_model();
    }

    public function index($id)
    {
        $data['jadwal'] = $this->m_kelas_model->getjadwal($id);
        echo view('guru_view/m_kelas/index', $data);
    }
}
