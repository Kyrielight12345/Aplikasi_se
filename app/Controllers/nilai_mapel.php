<?php

namespace App\Controllers;

use App\Models\nilai_mapel_model;;


class nilai_mapel extends BaseController
{
    protected $helpers = [];
    protected $nilai_mapel_model;
    public function __construct()
    {
        helper('form');
        $this->nilai_mapel_model = new nilai_mapel_model();
    }
    public function index()
    {
        # code...
        $mapel = new nilai_mapel_model();
        $data['nilai_mapel'] = $mapel->getnilai_mapel();
        echo view('guru_view/nilai_mapel/index', $data);
    }
    public function edit($id, $id2)
    {
        $data['nilai_mapel'] =   $this->nilai_mapel_model->getnilai_mapel($id, $id2)->getRowArray();
        echo view('guru_view/nilai_mapel/edit', $data);
    }

    public function update_nilai()
    {
        $tugas1 = $this->request->getVar('tugas1');
        $tugas2 = $this->request->getVar('tugas2');
        $tugas3 = $this->request->getVar('tugas3');
        $tugas4 = $this->request->getVar('tugas4');
        $uts = $this->request->getVar('uts');
        $uas = $this->request->getVar('uas');
        # code...
        $ket = ($tugas1 + $tugas2 + $tugas3 + $tugas4 + $uts + $uas) / 6;
        if ($ket < 70) {
            $keterangan = "Tidak Terpenuhi";
        } else {
            $keterangan = "Terpenuhi";
        }
        $id = $this->request->getVar('nis');
        $id2 = $this->request->getVar('id_guru');
        $data = array(
            'tugas1' => $this->request->getVar('tugas1'),
            'tugas2' => $this->request->getVar('tugas2'),
            'tugas3' => $this->request->getVar('tugas3'),
            'tugas4' => $this->request->getVar('tugas4'),
            'uts' => $this->request->getVar('uts'),
            'uas' => $this->request->getVar('uas'),
            'keterangan_rata' => $keterangan,
        );
        $model = new nilai_mapel_model();
        $ubah = $model->updatenilai($ket, $data, $id, $id2);
        if ($ubah) {
            session()->setFlashdata('info', 'Updated success');
            return redirect()->to(base_url('nilai_mapel/index/' . $id));
        }
    }
}
