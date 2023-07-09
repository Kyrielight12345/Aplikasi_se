<?php

namespace App\Controllers;


use CodeIgniter\Controller;
use CodeIgniter\I18n\Time;
use App\Models\user_tu_model;
use App\Models\guru_model;

class user_tu extends BaseController
{
    protected $helpers = [];
    protected $user_tu_model;
    protected $guru_model;
    public function __construct()
    {
        helper('form');
        $this->user_tu_model = new user_tu_model();
        $this->guru_model = new guru_model();
    }
    public function index()
    {
        # code...
        $model = new user_tu_model();
        $data['users'] = $model->getUsers();
        echo view('admin_view/user_tu/index', $data);
    }

    public function create()
    {
        # code...
        return view('admin_view/user_tu/create');
    }
    public function store()
    {
        $validation =  \Config\Services::validation();
        $now = Time::now();
        $formattedDate = $now->toDateTimeString();
        $data = array(
            'username'     => $this->request->getPost('username'),
            'password'   => $this->request->getPost('password'),
            'id_guru'   => $this->request->getPost('id_guru'),
            'akses'   => $this->request->getPost('akses'),
            'nama'   => $this->request->getPost('nama'),
            'created_at'   => $formattedDate,


        );

        if ($validation->run($data, 'user_tu') == FALSE) {
            session()->setFlashdata('inputs', $this->request->getPost());
            session()->setFlashdata('errors', $validation->getErrors());
            return redirect()->to(base_url('user_tu/create'));
        } else {
            $model = new user_tu_model();
            $simpan = $model->insertUsers($data);
            if ($simpan) {
                session()->setFlashdata('success', 'Created data user successfully');
                return redirect()->to(base_url('user_tu'));
            }
        }
    }
    public function edit($id)
    {
        $model = new guru_model();
        $data['guru_dan_staf'] = $model->getGuru();
        $model = new user_tu_model();
        $data['users'] = $model->getUsers($id)->getRowArray();
        echo view('admin_view/user_tu/edit', $data);
    }

    public function update()
    {
        $id = $this->request->getPost('username');
        $validation = \Config\Services::validation();
        $now = Time::now();
        $formattedDate = $now->toDateTimeString();
        $data = array(
            'username'     => $this->request->getPost('username'),
            'password'   => $this->request->getPost('password'),
            'id_guru'   => $this->request->getPost('id_guru'),
            'akses'   => $this->request->getPost('akses'),
            'nama'   => $this->request->getPost('nama'),
            'updated_at'   => $formattedDate

        );
        if ($validation->run($data, 'user_tu') == FALSE) {
            session()->setFlashdata('inputs', $this->request->getPost());
            session()->setFlashdata('errors', $validation->getErrors());
            return redirect()->to(base_url('user_tu/edit' . $id));
        } else {
            $model = new user_tu_model();
            $ubah = $model->updateUsers($data, $id);
            if ($ubah) {
                session()->setFlashdata('info', 'Updated Users Successfully');
                return redirect()->to(base_url('user_tu'));
            }
        }
    }
    public function delete($id)
    {
        $model = new user_tu_model();
        $hapus = $model->deleteUsers($id);
        if ($hapus) {
            session()->setFlashdata('warning', 'Delete user successfully');
            return redirect()->to(base_url('user_tu'));
        }
    }
}
