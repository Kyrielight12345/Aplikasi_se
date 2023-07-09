<?php

namespace App\Controllers;


use CodeIgniter\Controller;
use App\Models\siswa_model;

class siswa extends BaseController
{
    protected $helpers = [];
    protected $siswa_model;
    public function __construct()
    {
        helper('form');
        $this->siswa_model = new siswa_model();
    }

    public function index()
    {
        # code...
        $model = new siswa_model();
        $keyword = $this->request->getVar('keyword');
        if ($keyword) {
            $siswa = $model->search($keyword);
        } else {
            $siswa = $model;
        }
        $data['siswa'] = $model->getSiswa();

        //PAGINATE
        $data['siswa'] = $model->paginate(4, 'siswa');
        $data['pager'] = $model->pager;
        echo view('admin_view/siswa/index', $data);
    }

    public function create()
    {
        # code...
        return view('admin_view/siswa/create');
    }
    public function store()
    {
        $validation =  \Config\Services::validation();

        $data = array(
            'nis'     => $this->request->getPost('nis'),
            'nama_siswa'   => $this->request->getPost('nama_siswa'),
            'tempat_lahir'   => $this->request->getPost('tempat_lahir'),
            'tgl_lahir'   => $this->request->getPost('tgl_lahir'),
            'jenis_kelamin'   => $this->request->getPost('jenis_kelamin'),
            'agama'   => $this->request->getPost('agama'),
            'alamat'   => $this->request->getPost('alamat'),
            'jurusan'   => $this->request->getPost('jurusan'),
            'no_hp'   => $this->request->getPost('no_hp'),
            'id_kelas'   => $this->request->getPost('id_kelas')

        );

        if ($validation->run($data, 'siswa') == FALSE) {
            session()->setFlashdata('inputs', $this->request->getPost());
            session()->setFlashdata('errors', $validation->getErrors());
            return redirect()->to(base_url('siswa/create'));
        } else {
            $model = new siswa_model();
            $simpan = $model->insertSiswa($data);
            if ($simpan) {
                session()->setFlashdata('success', 'Created data siswa successfully');
                return redirect()->to(base_url('siswa'));
            }
        }
    }
    public function edit($id)
    {
        $model = new siswa_model();
        $data['siswa'] = $model->getSiswa($id)->getRowArray();
        echo view('admin_view/siswa/edit', $data);
    }

    public function update()
    {
        $id = $this->request->getVar('nis');
        $validation = \Config\Services::validation();

        $data = array(
            'nis'     => $this->request->getPost('nis'),
            'nama_siswa'   => $this->request->getPost('nama_siswa'),
            'tempat_lahir'   => $this->request->getPost('tempat_lahir'),
            'tgl_lahir'   => $this->request->getPost('tgl_lahir'),
            'jenis_kelamin'   => $this->request->getPost('jenis_kelamin'),
            'agama'   => $this->request->getPost('agama'),
            'alamat'   => $this->request->getPost('alamat'),
            'jurusan'   => $this->request->getPost('jurusan'),
            'no_hp'   => $this->request->getPost('no_hp'),
            'id_kelas'   => $this->request->getPost('id_kelas')
        );
        if ($validation->run($data, 'siswa') == FALSE) {
            session()->setFlashdata('inputs', $this->request->getPost());
            session()->setFlashdata('errors', $validation->getErrors());
            return redirect()->to(base_url('siswa/edit/' . $id));
        } else {
            // upload
            // $image->move(ROOTPATH . 'public/uploads',$name);
            // update
            $model = new siswa_model();
            $ubah = $model->updateSiswa($data, $id);
            if ($ubah) {
                session()->setFlashdata('info', 'Updated Siswa Successfully');
                return redirect()->to(base_url('siswa'));
            }
        }
    }
    public function delete($id)
    {
        $model = new siswa_model();
        // $hapus = $this->siswa_model->deleteSiswa($id);
        $hapus = $model->deleteSiswa($id);
        if ($hapus) {
            session()->setFlashdata('warning', 'Delete siswa successfully');
            return redirect()->to(base_url('siswa'));
        }
    }
}
