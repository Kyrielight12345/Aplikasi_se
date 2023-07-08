<?php

namespace App\Controllers;


use CodeIgniter\Controller;
use App\Models\regalisir_model;

class regalisir extends BaseController
{

    protected $helpers = [];
    protected $regalisir_model;
    public function __construct()
    {
        helper('form');
        $this->regalisir_model = new regalisir_model();
    }
    public function index()
    {
        # code...
        $model = new regalisir_model();
        $data['regalisir'] = $model->getRegalisir();
        echo view('admin_view/regalisir/index', $data);
    }

    public function create()
    {
        # code...
        return view('admin_view/regalisir/create');
    }

    // public function edit()
    // {
    //     $validation =  \Config\Services::validation();
    //     // get file
    //     $image = $this->request->getFile('file');
    //     // random name file
    //     $name = $image->getRandomName();

    //     $data = array(
    //         'nis'     => $this->request->getPost('nis'),
    //          'file'   => $name,
    //     );

    //     if($validation->run($data, 'regalisir') == FALSE){
    //         session()->setFlashdata('inputs', $this->request->getPost());
    //         session()->setFlashdata('errors', $validation->getErrors());
    //         return redirect()->to(base_url('regalisir/create'));
    //     } else {
    //         $model = new regalisir_model();
    //         //upload
    //         $image->move(ROOTPATH. 'public/uploads', $name);
    //         //insert
    //         $simpan = $model->editRegalisir($data);
    //         if($simpan)
    //         {
    //             session()->setFlashdata('success', 'Created Regalisir successfully');
    //             return redirect()->to(base_url('regalisir')); 
    //         }
    //     }
    // }

    public function store()
    {

        $validation =  \Config\Services::validation();

        $data = array(
            'nis'     => $this->request->getPost('nis')

        );


        $model = new regalisir_model();
        $simpan = $model->insertRegalisir($data);
        if ($simpan) {
            session()->setFlashdata('success', 'Created data regalisir successfully');
            return redirect()->to(base_url('regalisir'));
        }
    }

    public function edit($id)
    {
        $model = new regalisir_model();
        $data['regalisir'] = $model->getRegalisir($id)->getResultArray();
        echo view('admin_view/regalisir/update', $data);
    }

    public function update_status()
    {
        $validation =  \Config\Services::validation();
        # code...
        // get file
        $image = $this->request->getFile('file');
        // random name file
        $name = $image->getRandomName();

        $id = $this->request->getVar('nis');
        $data = array(
            'file' => $name,
            'status' => $this->request->getVar('status'),
        );
        if ($validation->run($data, 'file') == FALSE) {
            session()->setFlashdata('inputs', $this->request->getPost());
            session()->setFlashdata('errors', $validation->getErrors());
            return redirect()->to(base_url('regalisir/edit/' . $id));
        } else {
            $model = new regalisir_model();
            $image->move(ROOTPATH . 'public/uploads/file', $name);
            $ubah = $model->updatelegalisir($data, $id);
            if ($ubah) {
                session()->setFlashdata('info', 'Updated success');
                return redirect()->to(base_url('regalisir/index/' . $id));
            }
        }
    }
}
