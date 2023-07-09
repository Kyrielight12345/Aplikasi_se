<?php

namespace App\Controllers;


use CodeIgniter\Controller;
use App\Models\mapel_model;

class mapel extends BaseController
{
    protected $mapel_model;
    public function __construct()
    {
        helper('form');
        $this->mapel_model = new mapel_model();
    }
    public function index()
    {
        # code...
        $model = new mapel_model();
        $data['mapel'] = $model->getMapel();

        //PAGINATE
        $data['mapel'] = $model->paginate(4, 'mapel');
        $data['pager'] = $model->pager;
        echo view('admin_view/mapel/index', $data);
    }

    public function create()
    {
        # code...
        return view('admin_view/mapel/create');
    }
    public function store()
    {
        $validation =  \Config\Services::validation();

        $data = array(
            'id_mapel'     => $this->request->getPost('id_mapel'),
            'nama_mapel'   => $this->request->getPost('nama_mapel')

        );

        if ($validation->run($data, 'mapel') == FALSE) {
            session()->setFlashdata('inputs', $this->request->getPost());
            session()->setFlashdata('errors', $validation->getErrors());
            return redirect()->to(base_url('mapel/create'));
        } else {
            $model = new mapel_model();
            $simpan = $model->insertMapel($data);
            if ($simpan) {
                session()->setFlashdata('success', 'Created data mapel successfully');
                return redirect()->to(base_url('mapel'));
            }
        }
    }
    public function edit($id)
    {
        $model = new mapel_model();
        $data['mapel'] = $model->getMapel($id)->getRowArray();
        echo view('admin_view/mapel/edit', $data);
    }

    public function update()
    {
        $id = $this->request->getPost('id_mapel');
        $validation = \Config\Services::validation();

        $data = array(
            'id_mapel'     => $this->request->getPost('id_mapel'),
            'nama_mapel'   => $this->request->getPost('nama_mapel')
        );
        if ($validation->run($data, 'mapel') ==  FALSE) {
            session()->setFlashdata('inputs', $this->request->getPost());
            session()->setFlashdata('errors', $validation->getErrors());
            return redirect()->to(base_url('mapel/edit/' . $id));
        } else {
            // upload
            // $image->move(ROOTPATH . 'public/uploads',$name);
            // update
            $model = new mapel_model();
            $ubah = $model->updateMapel($data, $id);
            if ($ubah) {
                session()->setFlashdata('info', 'Updated mapel Successfully');
                return redirect()->to(base_url('mapel'));
            }
        }
    }
    public function delete($id)
    {
        $model = new mapel_model();
        $hapus = $model->deleteMapel($id);
        if ($hapus) {
            session()->setFlashdata('warning', 'Delete Mapel successfully');
            return redirect()->to(base_url('mapel'));
        }
    }

    public function show($id)
    {
        $model = new mapel_model();
        $data['mapel'] = $model->getMapel($id);
        echo view('admin_view/mapel/show', $data);
    }
}
