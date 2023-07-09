<?php

namespace App\Controllers;


use CodeIgniter\Controller;
use App\Models\dispensasi_model;
use App\Models\siswa_model;


class dispensasi extends BaseController
{
    protected $helpers = [];
    protected $dispensasi_model;
    public function __construct()
    {
        helper('form');
        $this->dispensasi_model = new dispensasi_model();
    }

    public function index()
    {
        # code...
        $model = new dispensasi_model();
        $data['dispensasi'] = $model->getDispensasi();

        echo view('bk_view/dispensasi/index', $data);
    }

    public function create()
    {
        # code...
        $model = new siswa_model();
        $data['siswa'] = $model->getSiswa();
        return view('bk_view/dispensasi/create', $data);
    }
    public function store()
    {
        $validation =  \Config\Services::validation();

        $data = array(
            'nis'   => $this->request->getPost('nis'),
            'tanggal'   => $this->request->getPost('tanggal'),
            'keterangan'   => $this->request->getPost('keterangan')

        );

        if ($validation->run($data, 'dispensasi') == FALSE) {
            session()->setFlashdata('inputs', $this->request->getPost());
            session()->setFlashdata('errors', $validation->getErrors());
            return redirect()->to(base_url('dispensasi/create'));
        } else {
            $model = new dispensasi_model();
            $simpan = $model->insertDispensasi($data);
            if ($simpan) {
                session()->setFlashdata('success', 'Created data dispensasi successfully');
                return redirect()->to(base_url('dispensasi'));
            }
        }
    }

    public function delete($id)
    {
        $model = new dispensasi_model();
        $hapus = $model->deleteDispensasi($id);
        if ($hapus) {
            session()->setFlashdata('warning', 'Delete Dispensasi successfully');
            return redirect()->to(base_url('dispensasi'));
        }
    }

    public function edit($id)
    {
        $model = new dispensasi_model();
        $data['dispensasi'] = $model->getDispensasi($id)->getRowArray();
        echo view('bk_view/dispensasi/edit', $data);
    }

    public function update()
    {
        $id = $this->request->getPost('kode_dispen');
        $validation = \Config\Services::validation();

        $data = array(
            'nis'     => $this->request->getPost('nis'),
            'tanggal'   => $this->request->getPost('tanggal'),
            'keterangan'   => $this->request->getPost('keterangan')
        );
        if ($validation->run($data, 'dispensasi') ==  FALSE) {
            session()->setFlashdata('inputs', $this->request->getPost());
            session()->setFlashdata('errors', $validation->getErrors());
            return redirect()->to(base_url('dispensasi/edit/' . $id));
        } else {
            // upload
            // $image->move(ROOTPATH . 'public/uploads',$name);
            // update
            $model = new dispensasi_model();
            $ubah = $model->updateDispensasi($data, $id);
            if ($ubah) {
                session()->setFlashdata('info', 'Updated Dispensasi successfully');
                return redirect()->to(base_url('dispensasi'));
            }
        }
    }
}
