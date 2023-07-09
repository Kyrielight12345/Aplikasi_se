<?php

namespace App\Controllers;


use CodeIgniter\Controller;
use App\Models\guru_model;

class guru extends BaseController
{
    protected $helpers = [];
    protected $guru_model;
    public function __construct()
    {
        helper('form');
        $this->guru_model = new guru_model();
    }
    public function index()
    {
        # code...
        $model = new guru_model();
        $data['guru_dan_staf'] = $model->getGuru();
        echo view('admin_view/guru/index', $data);
    }

    public function create()
    {
        # code...
        return view('admin_view/guru/create');
    }
    public function store()
    {
        $validation =  \Config\Services::validation();
        $data = array(
            'id_guru'     => $this->request->getPost('id_guru'),
            'nama_guru'   => $this->request->getPost('nama_guru'),
            'jenis_kelamin'   => $this->request->getPost('jenis_kelamin')
        );

        if ($validation->run($data, 'guru_dan_staf') == FALSE) {
            session()->setFlashdata('inputs', $this->request->getPost());
            session()->setFlashdata('errors', $validation->getErrors());
            return redirect()->to(base_url('guru/create'));
        } else {
            $model = new guru_model();
            $simpan = $model->insertGuru($data);
            if ($simpan) {
                session()->setFlashdata('success', 'Created data guru successfully');
                return redirect()->to(base_url('guru'));
            }
        }
    }
    public function show($id)
    {
        $data['guru_dan_staf'] = $this->guru_model->getGuru($id)->getRowArray();
        echo view('admin_view/guru/show', $data);
    }
}
