<?php

namespace App\Controllers;


use CodeIgniter\Controller;
use App\Models\absen_guru;
use App\Models\absenmodel;

class Absen extends BaseController
{
    protected $helpers = [];
    protected $absen_guru;
    public function __construct()
    {
        helper('form');
        $this->absen_guru = new absen_guru();
    }
    public function index()
    {

        # code...
        $model = new absen_guru();
        $data['presensi'] = $model->getAbsen();
        echo view('guru_view/absen/index', $data);
    }

    public function  update()
    {
        $absenModel = new absenModel();


        $keterangan = $this->request->getPost('keterangan');


        $updateData = [];
        foreach ($keterangan as $idAbsen => $value) {
            $updateData[] = [
                'nis' => $idAbsen,
                'keterangan' => $value,
            ];
        }


        $absenModel->updateBatch($updateData, 'nis');
        return redirect()->to(base_url('absen'));
    }
}
