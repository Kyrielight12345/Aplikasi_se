<?php

namespace App\Controllers;


use CodeIgniter\Controller;
use App\Models\kurikulum_model;

class kurikulum extends BaseController
{
    protected $helpers = [];
    protected $kurikulum_model;
    public function __construct()
    {
        helper('form');
        $this->kurikulum_model = new kurikulum_model();
    }
    public function index()
    {
        # code...
        $model = new kurikulum_model();
        $data['kurikulum'] = $model->getKurikulum();


        echo view('kurikulum_view/kurikulum/index', $data);
    }

    public function create()
    {
        # code...
        return view('kurikulum_view/kurikulum/create');
    }
    public function store()
    {
        $validation =  \Config\Services::validation();

        $data = array(
            'id_kurikulum'     => $this->request->getPost('id_kurikulum'),
            'kompetensi_dasar'   => $this->request->getPost('kompetensi_dasar'),
            'deskripsi'   => $this->request->getPost('deskripsi'),
        );

        if ($validation->run($data, 'kurikulum') == FALSE) {
            session()->setFlashdata('inputs', $this->request->getPost());
            session()->setFlashdata('errors', $validation->getErrors());
            return redirect()->to(base_url('kurikulum/create'));
        } else {
            $model = new kurikulum_model();
            $simpan = $model->insertKurikulum($data);
            if ($simpan) {
                session()->setFlashdata('success', 'Created data kurikulum successfully');
                return redirect()->to(base_url('kurikulum'));
            }
        }
    }

    public function edit($id)
    {
        $model = new kurikulum_model();
        // $id = $this->request->getPost('id_kurikulum');
        $data['kurikulum'] = $model->getKurikulum($id)->getRowArray();
        echo view('kurikulum_view/kurikulum/edit', $data);
    }

    public function update()
    {
        $id = $this->request->getPost('id_kurikulum');
        $validation = \Config\Services::validation();

        // get file
        // $image = $this->request->getFile('product_image');
        // random nama file
        // $name = $image->getRandomName();

        $data = array(
            'id_kurikulum'     => $this->request->getPost('id_kurikulum'),
            'kompetensi_dasar'   => $this->request->getPost('kompetensi_dasar'),
            'deskripsi'   => $this->request->getPost('deskripsi'),
        );
        if ($validation->run($data, 'kurikulum') ==  FALSE) {
            session()->setFlashdata('inputs', $this->request->getPost());
            session()->setFlashdata('errors', $validation->getErrors());
            return redirect()->to(base_url('kurikulum/edit/', $id));
        } else {
            // upload
            // $image->move(ROOTPATH . 'public/uploads',$name);
            // update
            $model = new kurikulum_model();
            $ubah = $model->updateKurikulum($data, $id);
            if ($ubah) {
                session()->setFlashdata('info', 'Updated Kurikulum successfully');
                return redirect()->to(base_url('kurikulum'));
            }
        }
    }

    public function delete($id)
    {
        $model = new kurikulum_model();
        // $hapus = $this->kurikulum_model->deleteKurikulum($id);
        $hapus = $model->deleteKurikulum($id);
        if ($hapus) {
            session()->setFlashdata('warning', 'Delete kurikulum successfully');
            return redirect()->to(base_url('kurikulum'));
        }
    }
}
