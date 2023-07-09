<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\kelola_ujian_model;
use App\Models\guru_model;
use App\Models\mapel_model;
use App\Models\ruang_model;

class kelola_ujian extends BaseController
{
    protected $helpers = [];
    protected $kelola_ujian_model;

    public function __construct()
    {
        helper(['form']);
        $this->kelola_ujian_model = new kelola_ujian_model();
    }

    public function index()
    {
        # code...
        $model = new kelola_ujian_model();
        $data['kelola_ujian'] = $model->getKelola_ujian();
        echo view('kurikulum_view/kelola_ujian/index', $data);
    }

    // public function getRuang($id_ruang)
    // {
    //     $ruangModel = new ruang_model();

    //     // Menjalankan query untuk mendapatkan data user berdasarkan userId
    //     $ruang = $ruangModel->where('id_ruang', $id_ruang)->first();

    //     if ($ruang) {
    //         // Data user ditemukan
    //         // Lakukan tindakan yang sesuai, misalnya menampilkan data user ke halaman view
    //         return view('kelola_ujian', ['ruang' => $ruang]);
    //     } else {
    //         // Data user tidak ditemukan
    //         // Lakukan tindakan yang sesuai, misalnya menampilkan pesan error atau melakukan redirect
    //         return redirect()->back()->with('error', 'ID Ruang tidak ditemukan');
    //     }
    // }

    public function create()
    {
        # code...
        $model = new guru_model();
        $data['guru_dan_staf'] = $model->getGuru();
        $model = new mapel_model();
        $data['mapel'] = $model->getMapel();
        $model = new ruang_model();
        $data['ruang'] = $model->getRuang();
        return view('kurikulum_view/kelola_ujian/create', $data);
    }

    public function store()
    {
        $validation =  \Config\Services::validation();

        $data = array(
            'id' => $this->request->getPost('id'),
            'id_guru' => $this->request->getPost('id_guru'),
            'id_mapel' => $this->request->getVar('id_mapel'),
            'id_ruang' => $this->request->getPost('id_ruang'),
            'tanggal' => $this->request->getPost('tanggal'),
            'jam_masuk' => $this->request->getPost('jam_masuk'),
            'jam_keluar' => $this->request->getPost('jam_keluar')
        );

        // Cek apakah data guru dan jam sudah ada sebelumnya
        $model = new kelola_ujian_model();
        if ($model->cekDataGuruJam($data['id_guru'], $data['jam_masuk'], $data['jam_keluar'])) {
            session()->setFlashdata('warning', 'Data guru dan jam sudah ada sebelumnya.');
            return redirect()->to(base_url('kelola_ujian/create'));
        }

        if ($validation->run($data, 'kelola_ujian') == FALSE) {
            session()->setFlashdata('inputs', $this->request->getPost());
            session()->setFlashdata('errors', $validation->getErrors());
            return redirect()->to(base_url('kelola_ujian/create'));
        } else {
            $simpan = $model->insertKelola_ujian($data);
            if ($simpan) {
                session()->setFlashdata('success', 'Created data Kelola Panitia Ujian successfully');
                return redirect()->to(base_url('kelola_ujian'));
            }
        }
    }

    // public function update($id)
    // {
    //     $model = new kelola_ujian_model();
    //     $data['kelola_ujian'] = $model->getKelola_ujian($id)->getRowArray();
    //     echo view('kelola_ujian/update',$data);
    // }

    public function edit($id)
    {

        $model2 = new guru_model();
        $data['guru_dan_staf'] = $model2->getGuru();
        $model3 = new mapel_model();
        $data['mapel'] = $model3->getMapel();
        $model4 = new ruang_model();
        $data['ruang'] = $model4->getRuang();
        $model1 = new kelola_ujian_model();
        $data['kelola_ujian'] = $model1->getKelola_ujian($id)->getRowArray();
        echo view('kurikulum_view/kelola_ujian/edit', $data);
    }

    public function update()
    {
        $id = $this->request->getPost('id');
        $validation = \Config\Services::validation();

        // get file
        // $image = $this->request->getFile('product_image');
        // random nama file
        // $name = $image->getRandomName();

        $data = array(
            'id_guru' => $this->request->getPost('id_guru'),
            'id_mapel' => $this->request->getPost('id_mapel'),
            'id_ruang' => $this->request->getPost('id_ruang'),
            'tanggal' => $this->request->getPost('tanggal'),
            'jam_masuk' => $this->request->getPost('jam_masuk'),
            'jam_keluar' => $this->request->getPost('jam_keluar')
        );
        if ($validation->run($data, 'kelola_ujian') ==  FALSE) {
            session()->setFlashdata('inputs', $this->request->getPost());
            session()->setFlashdata('errors', $validation->getErrors());
            return redirect()->to(base_url('kelola_ujian/edit/' . $id));
        } else {
            // upload
            // $image->move(ROOTPATH . 'public/uploads',$name);
            // update
            $model = new kelola_ujian_model();
            $ubah = $model->updateKelola_ujian($data, $id);
            if ($ubah) {
                session()->setFlashdata('info', 'Updated Kelola Panitia Ujian successfully');
                return redirect()->to(base_url('kelola_ujian'));
            }
        }
    }

    public function delete($id)
    {
        $model = new kelola_ujian_model();
        $hapus = $model->deleteKelola_ujian($id);
        if ($hapus) {
            session()->setFlashdata('warning', 'Delete Kelola Panitia Ujian successfully');
            return redirect()->to(base_url('kelola_ujian'));
        }
    }
}
