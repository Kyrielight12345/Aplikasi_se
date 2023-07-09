<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\konseling_model;
use App\Models\siswa_model;

class konseling extends BaseController
{
    protected $helpers = [];
    protected $konseling_model;
    public function __construct()
    {
        helper('form');
        $this->konseling_model = new konseling_model();
    }
    public function index()
    {
        # code...
        $model = new konseling_model();
        $data['konseling'] = $model->getKonseling();
        echo view('bk_view/konseling/index', $data);
    }

    public function create()
    {
        # code...
        $model = new siswa_model();
        $data['siswa'] = $model->getSiswa();
        return view('bk_view/konseling/create', $data);
    }
    public function store()
    {
        $validation =  \Config\Services::validation();

        $data = array(
            'kode_konseling'     => $this->request->getPost('kode_konseling'),
            'nis'   => $this->request->getPost('nis'),
            'tanggal'   => $this->request->getPost('tanggal'),
            'perihal'   => $this->request->getPost('perihal')
        );

        if ($validation->run($data, 'konseling') == FALSE) {
            session()->setFlashdata('inputs', $this->request->getPost());
            session()->setFlashdata('errors', $validation->getErrors());
            return redirect()->to(base_url('konseling/create'));
        } else {
            $model = new konseling_model();
            $simpan = $model->insertKonseling($data);
            if ($simpan) {
                session()->setFlashdata('success', 'Created data konseling successfully');
                return redirect()->to(base_url('konseling'));
            }
        }
    }
    // public function update($id)
    // {
    //     $model = new konseling_model();
    //     $data['konseling'] = $model->getKonseling($id)->getRowArray();
    //     echo view('konseling/update',$data);
    // }

    public function edit($id)
    {
        $model = new konseling_model();
        // $id = $this->request->getPost('kode_konseling ');
        $data['konseling'] = $model->getKonseling($id)->getRowArray();
        echo view('bk_view/konseling/edit', $data);
    }

    public function update()
    {
        $id = $this->request->getPost('kode_konseling');
        $validation = \Config\Services::validation();

        // get file
        // $image = $this->request->getFile('product_image');
        // random nama file
        // $name = $image->getRandomName();

        $data = array(
            'kode_konseling' => $this->request->getPost('kode_konseling'),
            'nis' => $this->request->getPost('nis'),
            'tanggal' => $this->request->getPost('tanggal'),
            'perihal'   => $this->request->getPost('perihal')
        );
        if ($validation->run($data, 'konseling') ==  FALSE) {
            session()->setFlashdata('inputs', $this->request->getPost());
            session()->setFlashdata('errors', $validation->getErrors());
            return redirect()->to(base_url('konseling/edit/', $id));
        } else {
            // upload
            // $image->move(ROOTPATH . 'public/uploads',$name);
            // update
            $model = new konseling_model();
            $ubah = $model->updateKonseling($data, $id);
            if ($ubah) {
                session()->setFlashdata('info', 'Updated Konseling successfully');
                return redirect()->to(base_url('konseling'));
            }
        }
    }

    public function delete($id)
    {
        $model = new konseling_model();
        // $hapus = $this->konseling_model->deleteKonseling($id);
        $hapus = $model->deleteKonseling($id);
        if ($hapus) {
            session()->setFlashdata('warning', 'Delete Konseling successfully');
            return redirect()->to(base_url('konseling'));
        }
    }
}
