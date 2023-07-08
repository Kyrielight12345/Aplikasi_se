<?php

namespace App\Controllers;


use CodeIgniter\Controller;
use App\Models\suratmasuk_model;
use App\Models\nilai_model;
use App\Models\nilai_view_model;
use App\Models\absen_guru;

class kepsek_all extends BaseController
{
    protected $helpers = [];
    protected $suratmasuk_model;
    public function __construct()
    {
        helper('form');
        $this->suratmasuk_model = new suratmasuk_model();
    }
    public function index_surat_masuk()
    {
        # code...
        $model = new suratmasuk_model();
        $data['surat_masuk'] = $model->getSuratmasuk();
        echo view('kepsek_view/surat_masuk/index', $data);
    }

    public function show_masuk($id)
    {
        $data['surat_masuk'] = $this->suratmasuk_model->getSuratmasuk($id)->getRowArray();
        echo view('kepsek_view/surat_masuk/show_masuk', $data);
    }

    public function index_nilai()
    {
        # code...
        $model = new nilai_model();
        $data['nilai'] = $model->getNilai();
        echo view('kepsek_view/nilai/index', $data);
    }

    public function view_nilai($id, $id2)
    {
        # code...
        $model = new nilai_view_model();
        $data['nilai_all_guru'] = $model->getViewNilai($id, $id2);
        echo view('kepsek_view/nilai/view_nilai', $data);
    }
    public function index_absen()
    {

        # code...
        $model = new absen_guru();
        $data['presensi'] = $model->getAbsen();
        echo view('kepsek_view/presensi/index', $data);
    }
}
