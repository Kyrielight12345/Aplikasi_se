<?php

namespace App\Controllers;


use CodeIgniter\Controller;
use App\Models\suratmasuk_model;

class surat_masuk extends BaseController
{
    protected $helpers = [];
    protected $suratmasuk_model;
    public function __construct()
    {
        helper('form');
        $this->suratmasuk_model = new suratmasuk_model();
    }
    public function index()
    {
        # code...
        $model = new suratmasuk_model();
        $data['surat_masuk'] = $model->getSuratmasuk();
        echo view('admin_view/surat_masuk/index', $data);
    }

    public function create_surat()
    {
        # code...
        return view('admin_view/surat_masuk/create_surat');
    }
    public function store()
    {
        $validation =  \Config\Services::validation();
        // get file
        $image = $this->request->getFile('file');
        // random name file
        $name = $image->getRandomName();

        $data = array(
            'id_surat'     => $this->request->getPost('id_surat'),
            'no_surat'   => $this->request->getPost('no_surat'),
            'pengirim'   => $this->request->getPost('pengirim'),
            'prihal'   => $this->request->getPost('prihal'),
            'tgl_masuk'   => $this->request->getPost('tgl_masuk'),
            'file'   => $name,
        );

        if ($validation->run($data, 'surat_masuk') == FALSE) {
            session()->setFlashdata('inputs', $this->request->getPost());
            session()->setFlashdata('errors', $validation->getErrors());
            return redirect()->to(base_url('surat_masuk/create_surat'));
        } else {
            $model = new suratmasuk_model();
            //upload
            $image->move(ROOTPATH . 'public/uploads', $name);
            //insert
            $simpan = $model->insertSuratmasuk($data);
            if ($simpan) {
                session()->setFlashdata('success', 'Created surat masuk successfully');
                return redirect()->to(base_url('surat_masuk'));
            }
        }
    }
    public function edit($id)
    {
        $model = new suratmasuk_model();
        $data['surat_masuk'] = $model->getSuratmasuk($id)->getRowArray();
        echo view('admin_view/surat_masuk/edit_surat', $data);
    }

    public function update()
    {
        $id = $this->request->getVar('id_surat');
        $validation = \Config\Services::validation();
        // get file
        $image = $this->request->getFile('file');
        // random name file
        $name = $image->getRandomName();

        $data = array(

            'no_surat'   => $this->request->getPost('no_surat'),
            'pengirim'   => $this->request->getPost('pengirim'),
            'prihal'   => $this->request->getPost('prihal'),
            'tgl_masuk'   => $this->request->getPost('tgl_masuk'),
            'file'   => $name,
        );
        if ($validation->run($data, 'surat_masuk') == FALSE) {
            session()->setFlashdata('inputs', $this->request->getPost());
            session()->setFlashdata('errors', $validation->getErrors());
            return redirect()->to(base_url('surat_masuk/edit/' . $id));
        } else {
            $model = new suratmasuk_model();
            //upload
            $image->move(ROOTPATH . 'public/uploads', $name);
            //insert
            $ubah = $model->updateSuratmasuk($data, $id);
            if ($ubah) {
                session()->setFlashdata('success', 'update surat masuk successfully');
                return redirect()->to(base_url('surat_masuk'));
            }
        }
    }
    public function delete($id)
    {
        $model = new suratmasuk_model();
        $hapus = $model->deleteSuratmasuk($id);
        if ($hapus) {
            session()->setFlashdata('warning', 'Delete surat  masuk successfully');
            return redirect()->to(base_url('surat_masuk'));
        }
    }
    public function show_masuk($id)
    {
        $data['surat_masuk'] = $this->suratmasuk_model->getSuratmasuk($id)->getRowArray();
        echo view('admin_view/surat_masuk/show_masuk', $data);
    }
}
