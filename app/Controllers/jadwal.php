<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\jadwal_model;
use App\Models\guru_model;
use App\Models\mapel_model;
use App\Models\ruang_model;

class jadwal extends BaseController
{
    protected $helpers = [];
    protected $jadwal_model;

    public function __construct()
    {
        helper(['form']);
        $this->jadwal_model = new jadwal_model();
    }

    public function index()
    {
        # code...
        $model = new jadwal_model();
        $data['jadwal'] = $model->getJadwal();
        echo view('admin_view/jadwal/index', $data);
    }



    public function create()
    {
        # code...
        $model = new mapel_model();
        $data['mapel'] = $model->getMapel();
        $model = new ruang_model();
        $data['ruang'] = $model->getRuang();
        $model = new guru_model();
        $data['guru_dan_staf'] = $model->getGuru();
        return view('admin_view/jadwal/create', $data);
    }

    public function store()
    {
        $validation =  \Config\Services::validation();

        $data = array(
            'id'     => $this->request->getPost('id'),
            'id_mapel'     => $this->request->getPost('id_mapel'),
            'id_ruang'     => $this->request->getPost('id_ruang'),
            'id_guru'     => $this->request->getVar('id_guru'),
            'hari'     => $this->request->getPost('hari'),
            'jam_awal'     => $this->request->getPost('jam_awal'),
            'jam_akhir'   => $this->request->getPost('jam_akhir')
        );

        if ($validation->run($data, 'jadwal') == FALSE) {
            session()->setFlashdata('inputs', $this->request->getPost());
            session()->setFlashdata('errors', $validation->getErrors());
            return redirect()->to(base_url('jadwal/create'));
        } else {
            $model = new jadwal_model();
            $simpan = $model->insertJadwal($data);
            if ($simpan) {
                session()->setFlashdata('success', 'Created data Penjadwalan successfully');
                return redirect()->to(base_url('jadwal'));
            }
        }
    }

    public function edit($id)
    {
        $model2 = new Mapel_model();
        $data['mapel'] = $model2->getMapel();

        $model3 = new Guru_model();
        $data['guru_dan_staf'] = $model3->getGuru();

        $model4 = new Ruang_model();
        $data['ruang'] = $model4->getRuang();

        $model1 = new Jadwal_model();
        $data['jadwal'] = $model1->getJadwal($id);

        return view('admin_view/jadwal/edit', $data);
    }

    public function update()
    {
        $id = $this->request->getvar('id_jadwal');
        $validation = \Config\Services::validation();

        $data = array(
            'id_mapel' => $this->request->getPost('id_mapel'),
            'id_ruang' => $this->request->getPost('id_ruang'),
            'id_guru' => $this->request->getPost('id_guru'),
            'hari' => $this->request->getPost('hari'),
            'jam_awal' => $this->request->getPost('jam_awal'),
            'jam_akhir' => $this->request->getPost('jam_akhir')
        );
        if ($validation->run($data, 'jadwal') ==  FALSE) {
            session()->setFlashdata('inputs', $this->request->getPost());
            session()->setFlashdata('errors', $validation->getErrors());
            return redirect()->to(base_url('jadwal/edit/' . $id));
        } else {
            // upload
            // $image->move(ROOTPATH . 'public/uploads',$name);
            // update
            $model = new jadwal_model();
            $ubah = $model->updateJadwal($data, $id);
            if ($ubah) {
                session()->setFlashdata('info', 'Updated Penjadwalan successfully');
                return redirect()->to(base_url('jadwal'));
            }
        }
    }

    public function delete($id)
    {
        $model = new jadwal_model();
        $hapus = $model->deleteJadwal($id);
        if ($hapus) {
            session()->setFlashdata('warning', 'Delete Penjadwalan successfully');
            return redirect()->to(base_url('jadwal'));
        }
    }
}
