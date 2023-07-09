<?php

namespace App\Controllers;


use CodeIgniter\Controller;
use App\Models\pelanggaran_model;
use App\Models\pelanggaran_home;
use App\Models\siswa_model;
use App\Models\view_pelanggaran;

class pelanggaran extends BaseController
{
    protected $helpers = [];
    protected $pelanggaran_model;
    public function __construct()
    {
        helper('form');
        $this->pelanggaran_model = new pelanggaran_model();
    }
    public function index()
    {
        # code...
        $model = new pelanggaran_model();
        $data['pelanggaran'] = $model->getPelanggaran();
        $model1 = new pelanggaran_home();
        $data['pelanggaran'] = $model1->getPelanggaranhome();
        echo view('bk_view/pelanggaran/index', $data);
    }

    public function create()
    {
        # cod
        $model = new siswa_model();
        $data['siswa'] = $model->getSiswa();
        return view('bk_view/pelanggaran/create', $data);
    }
    public function store()
    {
        $validation =  \Config\Services::validation();

        $data = array(
            'tanggal'   => $this->request->getPost('tanggal'),
            'nis'     => $this->request->getPost('nis'),
            'jenis'     => $this->request->getPost('jenis'),
            'poin'     => $this->request->getPost('poin'),
        );

        if ($validation->run($data, 'pelanggaran') == FALSE) {
            session()->setFlashdata('inputs', $this->request->getPost());
            session()->setFlashdata('errors', $validation->getErrors());
            return redirect()->to(base_url('pelanggaran/create'));
        } else {
            $model = new pelanggaran_model();
            $simpan = $model->insertPelanggaran($data);
            if ($simpan) {
                session()->setFlashdata('success', 'Created data pelanggaran successfully');
                return redirect()->to(base_url('pelanggaran'));
            }
        }
    }

    public function edit($id)
    {
        $model = new Pelanggaran_model();
        $data['data_pelanggaran'] = $model->getPelanggaran($id)->getResultArray();
        $model1 = new pelanggaran_home();
        $data['pelanggaran'] = $model1->getPelanggaranhome($id)->getRowArray();
        return view('bk_view/pelanggaran/edit', $data);
    }
}
