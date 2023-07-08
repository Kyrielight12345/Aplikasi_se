<?php

namespace App\Controllers;


use CodeIgniter\Controller;
use App\Models\absen_guru;
use App\Models\absenmodel;

class Absen_tu extends BaseController
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
        echo view('admin_view/absen_tu/index', $data);
    }
    public function edit($id)
    {

        # code...
        $model = new absen_guru();
        $data['presensi'] = $model->getAbsen_tu($id)->getRowArray();
        echo view('admin_view/absen_tu/edit', $data);
    }
    public function update()
    {
        $id = $this->request->getPost('nis');

        $data = array(
            'HADIR'     => $this->request->getPost('HADIR'),
            'IJIN'   => $this->request->getPost('IJIN'),
            'ALPHA'   => $this->request->getPost('ALPHA')
        );

        $model = new absen_guru();
        $ubah = $model->updateabsen($data, $id);
        if ($ubah) {
            session()->setFlashdata('info', 'Updated Presensi Successfully');
            return redirect()->to(base_url('absen_tu'));
        }
    }
}
