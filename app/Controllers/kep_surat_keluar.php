<?php

namespace App\Controllers;


use CodeIgniter\Controller;
use App\Models\suratkeluar_model;

class kep_surat_keluar extends BaseController
{
    protected $helpers = [];
    protected $suratkeluar_model;
    public function __construct()
    {
        helper('form');
        $this->suratkeluar_model = new suratkeluar_model();
    }
    public function index()
    {
        # code...
        $model = new suratkeluar_model();
        $data['surat_keluar'] = $model->getSuratkeluar();
        echo view('kepsek_view/surat_keluar/index', $data);
    }
    public function update($id)
    {
        $a = "Sudah Disposisi";
        $data = array(
            'status'   => $a
        );

        $model = new suratkeluar_model();

        $ubah = $model->updateSuratkeluar($data, $id);
        if ($ubah) {
            session()->setFlashdata('success', 'update surat keluar successfully');
            return redirect()->to(base_url('kep_surat_keluar'));
        }
    }
    public function show_keluar($id)
    {
        $data['surat_keluar'] = $this->suratkeluar_model->getSuratkeluar($id)->getRowArray();
        echo view('kepsek_view/surat_keluar/show_keluar', $data);
    }
}
