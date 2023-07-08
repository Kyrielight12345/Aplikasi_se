<?php

namespace App\Controllers;

use App\Models\nilai_model;
use App\Models\nilai_view_model;


class nilai extends BaseController
{
    protected $helpers = [];
    protected $nilai_model;
    protected $nilai_view_model;
    public function __construct()
    {
        helper('form');
        $this->nilai_model = new nilai_model();
        $this->nilai_view_model = new nilai_view_model();
    }
    public function index()
    {
        # code...
        $model = new nilai_model();
        $data['nilai'] = $model->getNilai();
        echo view('admin_view/nilai/index', $data);
    }

    public function view_nilai($id, $id2)
    {
        # code...
        $model = new nilai_view_model();
        $data['nilai_all_guru'] = $model->getViewNilai($id, $id2);
        echo view('admin_view/nilai/view_nilai', $data);
    }

    public function create()
    {
        # code...
        return view('admin_view/nilai/create');
    }

    public function store()
    {
        $validation =  \Config\Services::validation();

        $data = array(
            'nis'     => $this->request->getPost('nis'),
            'semester'     => $this->request->getPost('semester'),
            'tahun'   => $this->request->getPost('tahun')
        );

        if ($validation->run($data, 'nilai') == FALSE) {
            session()->setFlashdata('inputs', $this->request->getPost());
            session()->setFlashdata('errors', $validation->getErrors());
            return redirect()->to(base_url('nilai/create'));
        } else {
            $model = new nilai_model();
            $simpan = $model->insertNilai($data);
            if ($simpan) {
                session()->setFlashdata('success', 'Berhasil Menambahkan data');
                return redirect()->to(base_url('nilai'));
            }
        }
    }
}
