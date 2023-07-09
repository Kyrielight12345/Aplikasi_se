<?php

namespace App\Controllers;


use CodeIgniter\Controller;
use App\Models\ruang_model;

class ruang extends BaseController
{
    protected $ruang_model;
    public function __construct()
    {
        helper('form');
        $this->ruang_model = new ruang_model();
    }
    public function index()
    {
        # code...
        $model = new ruang_model();
        $data['ruang'] = $model->getRuang();

        //PAGINATE
        $data['ruang'] = $model->paginate(4, 'ruang');
        $data['pager'] = $model->pager;
        echo view('admin_view/ruang/index', $data);
    }

    public function create()
    {
        # code...
        return view('admin_view/ruang/create');
    }
    public function store()
    {
        $validation =  \Config\Services::validation();

        $data = array(
            'id_ruang'     => $this->request->getPost('id_ruang'),
            'nama_ruang'   => $this->request->getPost('nama_ruang')

        );

        if ($validation->run($data, 'ruang') == FALSE) {
            session()->setFlashdata('inputs', $this->request->getPost());
            session()->setFlashdata('errors', $validation->getErrors());
            return redirect()->to(base_url('ruang/create'));
        } else {
            $model = new ruang_model();
            $simpan = $model->insertRuang($data);
            if ($simpan) {
                session()->setFlashdata('success', 'Created data ruang successfully');
                return redirect()->to(base_url('ruang'));
            }
        }
    }
    public function edit($id)
    {
        $model = new ruang_model();
        $data['ruang'] = $model->getRuang($id)->getRowArray();
        echo view('admin_view/ruang/edit', $data);
    }

    public function update()
    {
        $id = $this->request->getPost('id_ruang');
        $validation = \Config\Services::validation();

        $data = array(
            'id_ruang'     => $this->request->getPost('id_ruang'),
            'nama_ruang'   => $this->request->getPost('nama_ruang')
        );
        if ($validation->run($data, 'ruang') ==  FALSE) {
            session()->setFlashdata('inputs', $this->request->getPost());
            session()->setFlashdata('errors', $validation->getErrors());
            return redirect()->to(base_url('ruang/edit/' . $id));
        } else {
            // upload
            // $image->move(ROOTPATH . 'public/uploads',$name);
            // update
            $model = new ruang_model();
            $ubah = $model->updateRuang($data, $id);
            if ($ubah) {
                session()->setFlashdata('info', 'Updated Ruang Successfully');
                return redirect()->to(base_url('ruang'));
            }
        }
    }

    public function show($id)
    {
        $model = new ruang_model();
        $data['ruang'] = $model->getRuang($id);
        echo view('admin_view/ruang/show', $data);
    }

    // public function delete($id){
    //     $model = new ruang_model();
    //     $hapus = $model->deleteRuang($id);
    //         if($hapus)
    //         {
    //             session()->setFlashdata('warning', 'Delete Ruang successfully');
    //             return redirect()->to(base_url('ruang')); 
    //         }
    // }
}
