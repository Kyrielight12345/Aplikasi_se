<?php

namespace App\Controllers;


use CodeIgniter\Controller;
use App\Models\laporan_model;

class laporan extends BaseController
{
    protected $helpers = [];
    protected $laporan_model;
    public function __construct()
    {
        helper('form');
        $this->laporan_model = new laporan_model();
    }
    public function index()
    {

        # code...
        $model = new laporan_model();
        $data['laporan'] = $model->getlaporan();
        echo view('guru_view/laporan/index', $data);
    }
    public function tambah()
    {

        # code...
        echo view('guru_view/laporan/create');
    }
    public function store()
    {
        $validation =  \Config\Services::validation();

        $data = array(
            'pertemuan'     => $this->request->getPost('pertemuan'),
            'materi'   => $this->request->getPost('materi'),
            'id_guru'     => $this->request->getPost('id_guru')
        );

        if ($validation->run($data, 'laporan') == FALSE) {
            session()->setFlashdata('inputs', $this->request->getPost());
            session()->setFlashdata('errors', $validation->getErrors());
            return redirect()->to(base_url('laporan/tambah'));
        } else {
            $model = new laporan_model();
            $simpan = $model->insertLaporan($data);
            if ($simpan) {
                session()->setFlashdata('success', 'Created Laporan successfully');
                return redirect()->to(base_url('laporan'));
            }
        }
    }
}
