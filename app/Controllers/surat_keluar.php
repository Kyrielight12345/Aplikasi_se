<?php

namespace App\Controllers;


use CodeIgniter\Controller;
use App\Models\suratkeluar_model;

class surat_keluar extends BaseController
{
    protected $helpers = [];
    protected $suratkeluar_model;
    public function __construct()
    {
        helper('form');
        $this->suratkeluar_model = new suratkeluar_model();
    }
    public function index()
    {
        # code...
        $model = new suratkeluar_model();
        $data['surat_keluar'] = $model->getSuratkeluar();
        echo view('admin_view/surat_keluar/index', $data);
    }

    public function create_surat_keluar()
    {
        # code...
        return view('admin_view/surat_keluar/create_surat_keluar');
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
            'tgl_keluar'   => $this->request->getPost('tgl_keluar'),
            'file'   => $name,
        );

        if ($validation->run($data, 'surat_keluar') == FALSE) {
            session()->setFlashdata('inputs', $this->request->getPost());
            session()->setFlashdata('errors', $validation->getErrors());
            return redirect()->to(base_url('surat_keluar/create_surat_keluar'));
        } else {
            $model = new suratkeluar_model();
            //upload
            $image->move(ROOTPATH . 'public/uploads', $name);
            //insert
            $simpan = $model->insertSuratkeluar($data);
            if ($simpan) {
                session()->setFlashdata('success', 'Created surat keluar successfully');
                return redirect()->to(base_url('surat_keluar'));
            }
        }
    }
    public function edit($id)
    {
        $model = new suratkeluar_model();
        $data['surat_keluar'] = $model->getSuratkeluar($id)->getRowArray();
        echo view('admin_view/surat_keluar/edit_surat_keluar', $data);
    }

    public function update()
    {
        $id = $this->request->getPost('id_surat');
        $validation = \Config\Services::validation();
        // get file
        $image = $this->request->getFile('file');
        // random name file
        $name = $image->getRandomName();

        $data = array(

            'no_surat'   => $this->request->getPost('no_surat'),
            'pengirim'   => $this->request->getPost('pengirim'),
            'prihal'   => $this->request->getPost('prihal'),
            'tgl_keluar'   => $this->request->getPost('tgl_keluar'),
            'file'   => $name,
        );
        if ($validation->run($data, 'surat_keluar') == FALSE) {
            session()->setFlashdata('inputs', $this->request->getPost());
            session()->setFlashdata('errors', $validation->getErrors());
            return redirect()->to(base_url('surat_keluar/edit' . $id));
        } else {
            $model = new suratkeluar_model();
            //upload
            $image->move(ROOTPATH . 'public/uploads', $name);
            //insert
            $ubah = $model->updateSuratkeluar($data, $id);
            if ($ubah) {
                session()->setFlashdata('success', 'update surat keluar successfully');
                return redirect()->to(base_url('surat_keluar'));
            }
        }
    }
    public function delete($id)
    {
        $model = new suratkeluar_model();
        $hapus = $model->deleteSuratkeluar($id);
        if ($hapus) {
            session()->setFlashdata('warning', 'Delete surat  keluar successfully');
            return redirect()->to(base_url('surat_keluar'));
        }
    }
    public function show_keluar($id)
    {
        $data['surat_keluar'] = $this->suratkeluar_model->getSuratkeluar($id)->getRowArray();
        echo view('admin_view/surat_keluar/show_keluar', $data);
    }
}
