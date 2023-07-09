<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\kalender_model;

class kalender extends BaseController
{
    protected $helpers = [];
    protected $kalender_model;

    public function __construct()
    {
        helper(['form']);
        $this->kalender_model = new kalender_model();
    }
    public function index()
    {
        # code...
        $model = new kalender_model();
        $data['kalender'] = $model->getKalender();

        // Filter
        $like = [];
        $or_like = [];
        if (!empty($keyword)) {
            $like = ['kalender.tanggal' => $keyword];
            $or_like = ['kalender.keterangan' => $keyword];
        }
        // end filter
        // paginate
        $paginate = 5;
        $data['kalender'] = $model->like($like)->orLike($or_like)->paginate($paginate, 'kalender');
        $data['pager'] = $model->pager;
        // generate number untuk tetap bertambah meskipun pindah halaman paginate
        $nomor = $this->request->getGet('page_kalender');
        //define $nomor = 1 jika tidak ada get page_product
        if ($nomor == null) {
            $nomor = 1;
        }
        $data['nomor'] = ($nomor - 1) * $paginate;
        //end generate number
        echo view('kurikulum_view/kalender/index', $data);
    }

    public function create()
    {
        # code...
        return view('kurikulum_view/kalender/create');
    }
    public function store()
    {
        $validation =  \Config\Services::validation();

        $data = array(
            'id_kalender'     => $this->request->getPost('id_kalender'),
            'tanggal'     => $this->request->getPost('tanggal'),
            'keterangan'   => $this->request->getPost('keterangan')
        );

        if ($validation->run($data, 'kalender') == FALSE) {
            session()->setFlashdata('inputs', $this->request->getPost());
            session()->setFlashdata('errors', $validation->getErrors());
            return redirect()->to(base_url('kalender/create'));
        } else {
            $model = new kalender_model();
            $simpan = $model->insertKalender($data);
            if ($simpan) {
                session()->setFlashdata('success', 'Created data Kalender Pendidikan successfully');
                return redirect()->to(base_url('kalender'));
            }
        }
    }
    // public function update($id)
    // {
    //     $model = new kalender_model();
    //     $data['kalender'] = $model->getKalender($id)->getRowArray();
    //     echo view('kalender/update',$data);
    // }

    public function edit($id)
    {
        $model = new kalender_model();
        // $id = $this->request->getPost('id_kalender');
        $data['kalender'] = $model->getKalender($id)->getRowArray();
        echo view('kurikulum_view/kalender/edit', $data);
    }

    public function update()
    {
        $id = $this->request->getPost('id_kalender');
        $validation = \Config\Services::validation();

        // get file
        // $image = $this->request->getFile('product_image');
        // random nama file
        // $name = $image->getRandomName();

        $data = array(
            'id_kalender' => $this->request->getPost('id_kalender'),
            'tanggal' => $this->request->getPost('tanggal'),
            'keterangan' => $this->request->getPost('keterangan')
        );
        if ($validation->run($data, 'kalender') ==  FALSE) {
            session()->setFlashdata('inputs', $this->request->getPost());
            session()->setFlashdata('errors', $validation->getErrors());
            return redirect()->to(base_url('kalender/edit/', $id));
        } else {
            // upload
            // $image->move(ROOTPATH . 'public/uploads',$name);
            // update
            $model = new kalender_model();
            $ubah = $model->updateKalender($data, $id);
            if ($ubah) {
                session()->setFlashdata('info', 'Updated Kalender successfully');
                return redirect()->to(base_url('kalender'));
            }
        }
    }

    public function delete($id)
    {
        $model = new kalender_model();
        $hapus = $model->deleteKalender($id);
        if ($hapus) {
            session()->setFlashdata('warning', 'Delete Kalender Pendidikan successfully');
            return redirect()->to(base_url('kalender'));
        }
    }
}
