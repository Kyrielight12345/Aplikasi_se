<?php

namespace App\Controllers;

use App\Models\guru_p_model;



class guru_p extends BaseController
{
    protected $helpers = [];
    protected $guru_p_model;
    public function __construct()
    {
        helper('form');
        $this->guru_p_model = new guru_p_model();
    }

    public function index($id)
    {
        $data['guru_dan_staf'] = $this->guru_p_model->getguru($id);
        echo view('guru_view/profile/index', $data);
    }
    public function edit($id)
    {
        $data['guru_dan_staf'] = $this->guru_p_model->getguru($id);
        echo view('guru_view/profile/edit', $data);
    }
    public function update_bio()
    {
        # code...

        $id = $this->request->getVar('id_guru');
        $data = array(
            'nama_guru' => $this->request->getVar('nama_guru'),
            'tempat_lahir' => $this->request->getVar('tempat_lahir'),
            'tgl_lahir' => $this->request->getVar('tgl_lahir'),
            'no_hp' => $this->request->getVar('no_hp'),
            'alamat' => $this->request->getVar('alamat'),
        );
        $model = new guru_p_model();
        $ubah = $model->updatebio($data, $id);
        if ($ubah) {
            session()->setFlashdata('info', 'Updated success');
            return redirect()->to(base_url('guru_p/index/' . $id));
        }
    }
    public function edit_status($id)
    {
        $data['guru_dan_staf'] = $this->guru_p_model->getguru($id);
        echo view('guru_view/profile/edit_status', $data);
    }
    public function update_status()
    {
        $validation =  \Config\Services::validation();
        # code...
        // get file
        $image = $this->request->getFile('sk');
        // random name file
        $name = $image->getRandomName();

        $id = $this->request->getVar('id_guru');
        $data = array(
            'sk' => $name,
            'status' => $this->request->getVar('status'),
        );
        if ($validation->run($data, 'sk') == FALSE) {
            session()->setFlashdata('inputs', $this->request->getPost());
            session()->setFlashdata('errors', $validation->getErrors());
            return redirect()->to(base_url('guru_p/edit_status/' . $id));
        } else {
            $model = new guru_p_model();
            $image->move(ROOTPATH . 'public/uploads/sk', $name);
            $ubah = $model->updatebio($data, $id);
            if ($ubah) {
                session()->setFlashdata('info', 'Updated success');
                return redirect()->to(base_url('guru_p/index/' . $id));
            }
        }
    }
    public function edit_avatar($id)
    {
        $data['guru_dan_staf'] = $this->guru_p_model->getguru($id);
        echo view('guru_view/profile/edit_avatar', $data);
    }
    public function update_avatar()
    {
        $validation =  \Config\Services::validation();
        # code...
        // get file
        $image = $this->request->getFile('foto');
        // random name file
        $name = $image->getRandomName();

        $id = $this->request->getVar('id_guru');
        $data = array(
            'foto' => $name,
        );
        if ($validation->run($data, 'foto') == FALSE) {
            session()->setFlashdata('inputs', $this->request->getPost());
            session()->setFlashdata('errors', $validation->getErrors());
            return redirect()->to(base_url('guru_p/edit_avatar/' . $id));
        } else {
            $model = new guru_p_model();
            $image->move(ROOTPATH . 'public/uploads', $name);
            $ubah = $model->updatebio($data, $id);
            if ($ubah) {
                session()->setFlashdata('info', 'Updated success');
                return redirect()->to(base_url('guru_p/index/' . $id));
            }
        }
    }
}
