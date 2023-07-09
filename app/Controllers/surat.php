<?php

namespace App\Controllers;


use CodeIgniter\Controller;
use App\Models\surat_model;
use App\Models\siswa_model;

class surat extends BaseController
{
    protected $helpers = [];
    protected $surat_model;
    public function __construct()
    {
        helper('form');
        $this->surat_model = new surat_model();
    }
    public function index()
    {
        # code...
        $model = new surat_model();
        $data['surat'] = $model->getSurat();

        echo view('bk_view/surat/index', $data);
    }

    public function create()
    {
        # code...
        $model = new siswa_model();
        $data['siswa'] = $model->getSiswa();
        return view('bk_view/surat/create', $data);
    }
    public function store()
    {
        $validation =  \Config\Services::validation();

        $data = array(
            'no_surat'     => $this->request->getPost('no_surat'),
            'hal'   => $this->request->getPost('hal'),
            'nis'     => $this->request->getPost('nis'),
            'hari'     => $this->request->getPost('hari'),
            'tanggal'     => $this->request->getPost('tanggal'),
            'waktu'     => $this->request->getPost('waktu'),
            'keperluan'     => $this->request->getPost('keperluan')

        );

        if ($validation->run($data, 'surat') == FALSE) {
            session()->setFlashdata('inputs', $this->request->getPost());
            session()->setFlashdata('errors', $validation->getErrors());
            return redirect()->to(base_url('surat/create'));
        } else {
            $model = new surat_model();
            $simpan = $model->insertSurat($data);
            if ($simpan) {
                session()->setFlashdata('success', 'Created data surat successfully');
                return redirect()->to(base_url('surat'));
            }
        }
    }
    public function edit($id)
    {
        $model = new surat_model();
        $data['surat'] = $model->getSurat($id)->getRowArray();
        echo view('bk_view/surat/edit', $data);
    }

    public function update()
    {
        $id = $this->request->getPost('no_surat');
        $validation = \Config\Services::validation();

        $data = array(
            'no_surat'     => $this->request->getPost('no_surat'),
            'hal'   => $this->request->getPost('hal'),
            'nis'     => $this->request->getPost('nis'),
            'hari'     => $this->request->getPost('hari'),
            'tanggal'     => $this->request->getPost('tanggal'),
            'waktu'     => $this->request->getPost('waktu'),
            'keperluan'     => $this->request->getPost('keperluan')

        );
        if ($validation->run($data, 'surat') ==  FALSE) {
            session()->setFlashdata('inputs', $this->request->getPost());
            session()->setFlashdata('errors', $validation->getErrors());
            return redirect()->to(base_url('surat/edit/', $id));
        } else {
            // upload
            // $image->move(ROOTPATH . 'public/uploads',$name);
            // update
            $model = new surat_model();
            $ubah = $model->updateSurat($data, $id);
            if ($ubah) {
                session()->setFlashdata('info', 'Updated Surat successfully');
                return redirect()->to(base_url('surat'));
            }
        }
    }
    public function delete($id)
    {
        $model = new surat_model();
        $hapus = $model->deleteSurat($id);
        if ($hapus) {
            session()->setFlashdata('warning', 'Delete Surat successfully');
            return redirect()->to(base_url('surat'));
        }
    }
}
