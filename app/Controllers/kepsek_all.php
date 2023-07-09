<?php

namespace App\Controllers;


use CodeIgniter\Controller;
use App\Models\suratmasuk_model;
use App\Models\nilai_model;
use App\Models\nilai_view_model;
use App\Models\absen_guru;
use App\Models\ruang_model;
use App\Models\mapel_model;
use App\Models\regalisir_model;
use App\Models\siswa_model;
use App\Models\jadwal_model;
use App\Models\user_tu_model;
use App\Models\guru_model;
use App\Models\kurikulum_model;
use App\Models\kalender_model;
use App\Models\kelola_ujian_model;

class kepsek_all extends BaseController
{
    protected $helpers = [];
    protected $suratmasuk_model;
    protected $guru_model;
    public function __construct()
    {
        helper('form');
        $this->suratmasuk_model = new suratmasuk_model();
        $this->guru_model = new guru_model();
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
    public function index_ruang()
    {
        # code...
        $model = new ruang_model();
        $data['ruang'] = $model->getRuang();

        //PAGINATE
        $data['ruang'] = $model->paginate(4, 'ruang');
        $data['pager'] = $model->pager;
        echo view('kepsek_view/ruang/index', $data);
    }
    public function index_mapel()
    {
        # code...
        $model = new mapel_model();
        $data['mapel'] = $model->getMapel();

        //PAGINATE
        $data['mapel'] = $model->paginate(4, 'mapel');
        $data['pager'] = $model->pager;
        echo view('kepsek_view/mapel/index', $data);
    }
    public function index_regalisir()
    {
        # code...
        $model = new regalisir_model();
        $data['regalisir'] = $model->getRegalisir();
        echo view('kepsek_view/regalisir/index', $data);
    }
    public function index_siswa()
    {
        # code...
        $model = new siswa_model();
        $data['siswa'] = $model->getSiswa();

        //PAGINATE
        $data['siswa'] = $model->paginate(4, 'siswa');
        $data['pager'] = $model->pager;
        echo view('kepsek_view/siswa/index', $data);
    }
    public function index_jadwal()
    {
        # code...
        $model = new jadwal_model();
        $data['jadwal'] = $model->getJadwal();
        echo view('kepsek_view/jadwal/index', $data);
    }
    public function index_user()
    {
        # code...
        $model = new user_tu_model();
        $data['users'] = $model->getUsers();
        echo view('kepsek_view/user/index', $data);
    }
    public function index_guru()
    {
        # code...
        $model = new guru_model();
        $data['guru_dan_staf'] = $model->getGuru();
        echo view('kepsek_view/guru/index', $data);
    }
    public function guru_show($id)
    {
        $data['guru_dan_staf'] = $this->guru_model->getGuru($id)->getRowArray();
        echo view('admin_view/guru/show', $data);
    }
    public function index_kurikulum()
    {
        # code...
        $model = new kurikulum_model();
        $data['kurikulum'] = $model->getKurikulum();
        echo view('kepsek_view/kurikulum/index', $data);
    }
    public function index_kalender()
    {
        # code...
        $model = new kalender_model();
        $data['kalender'] = $model->getKalender();
        echo view('kepsek_view/kalender/index', $data);
    }
    public function index_kelola_ujian()
    {
        # code...
        $model = new kelola_ujian_model();
        $data['kelola_ujian'] = $model->getKelola_ujian();
        echo view('kepsek_view/ujian/index', $data);
    }
}
