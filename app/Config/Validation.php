<?php

namespace Config;

use CodeIgniter\Config\BaseConfig;
use CodeIgniter\Validation\StrictRules\CreditCardRules;
use CodeIgniter\Validation\StrictRules\FileRules;
use CodeIgniter\Validation\StrictRules\FormatRules;
use CodeIgniter\Validation\StrictRules\Rules;

class Validation extends BaseConfig
{
    // --------------------------------------------------------------------
    // Setup
    // --------------------------------------------------------------------

    /**
     * Stores the classes that contain the
     * rules that are available.
     *
     * @var string[]
     */
    public array $ruleSets = [
        Rules::class,
        FormatRules::class,
        FileRules::class,
        CreditCardRules::class,
    ];

    /**
     * Specifies the views that are used to display the
     * errors.
     *
     * @var array<string, string>
     */
    public array $templates = [
        'list'   => 'CodeIgniter\Validation\Views\list',
        'single' => 'CodeIgniter\Validation\Views\single',
    ];


    // --------------------------------------------------------------------
    // Rules
    // --------------------------------------------------------------------
    public $siswa = [
        'nis'     => 'required',
        'nama_siswa'     => 'required',
        'tempat_lahir'     => 'required',
        'jurusan'     => 'required',
        'tgl_lahir'     => 'required',
        'jenis_kelamin'     => 'required',
        'agama'     => 'required',
        'alamat'     => 'required',
        'no_hp'     => 'required',
        'id_kelas'     => 'required',
    ];

    public $siswa_errors = [
        'nis' => [
            'required'    => 'NIS wajib diisi.',
        ],
        'nama_siswa'    => [
            'required' => 'Nama wajib diisi.'
        ],
        'tempat_lahir'    => [
            'required' => 'Tempat Lahir wajib diisi.'
        ],
        'jurusan'    => [
            'required' => 'jurusan  wajib diisi.'
        ],
        'tgl_lahir'    => [
            'required' => 'tanggal lahir  wajib diisi.'
        ],
        'jenis_kelamin'    => [
            'required' => 'jenis Kelamin  wajib diisi.'
        ],
        'agama'    => [
            'required' => 'agama  wajib diisi.'
        ],
        'alamat'    => [
            'required' => 'alamat  wajib diisi.'
        ],
        'no_hp'    => [
            'required' => 'no_hp  wajib diisi.'
        ],
        'id_kelas'    => [
            'required' => 'Kelas wajib diisi.'
        ],
    ];

    public $nilai = [
        'nis'   => 'required',
        'semester'   => 'required',
        'tahun' => 'required'
    ];

    public $nilai_errors = [
        'nis' => [
            'required'  => 'Nis wajib diisi.',
        ],
        'semester' => [
            'required'  => 'Semester wajib diisi.',
        ],
        'tahun'    => [
            'required' => 'Tahun wajib diisi.'
        ]
    ];
    public $sk = [
        'sk' => 'uploaded[sk]|mime_in[sk,jpg,image/jpeg,image/gif,image/png,image/pdf,application/pdf]|max_size[sk,10000]',
    ];

    public $sk_errors = [
        'sk' => [
            'required'  => 'Silahkan Upload SK.',
        ]
    ];
    public $foto = [
        'foto' => 'uploaded[foto]|mime_in[foto,jpg,image/jpeg,image/gif,image/png]|max_size[foto,10000]',
    ];

    public $foto_errors = [
        'foto' => [
            'required'  => 'Silahkan Upload foto.',
        ]
    ];

    public $laporan = [
        'pertemuan'   => 'required',
        'materi'   => 'required',
    ];

    public $laporan_errors = [
        'pertemuan' => [
            'required'  => 'pertemuan wajib diisi.',
        ],
        'materi'    => [
            'required' => 'materi wajib diisi.'
        ]
    ];
    public $surat_masuk = [
        'no_surat'     => 'required',
        'tgl_masuk'     => 'required',
        'pengirim'     => 'required',
        'prihal'     => 'required',
        'file' => 'uploaded[file]|mime_in[file,jpg,image/jpeg,image/gif,image/png,image/pdf,application/pdf]|max_size[file,10000]',
    ];

    public $surat_masuk_errors = [
        'no_surat' => [
            'required'    => 'Nomor surat wajib diisi.',
        ],
        'tgl_masuk'    => [
            'required' => 'tanggal wajib diisi.',
        ],
        'pengirim'    => [
            'required' => 'pengirim  wajib diisi.',
        ],
        'prihal'    => [
            'required' => 'perihal  wajib diisi.',
        ],
        'file'    => [
            'required' => 'file   wajib diisi.',
        ],
    ];
    public $surat_keluar = [
        'no_surat'     => 'required',
        'tgl_keluar'     => 'required',
        'pengirim'     => 'required',
        'prihal'     => 'required',
        'file' => 'uploaded[file]|mime_in[file,jpg,image/jpeg,image/gif,image/png,image/pdf,application/pdf]|max_size[file,10000]',
    ];

    public $surat_keluar_errors = [
        'no_surat' => [
            'required'    => 'Nomor surat wajib diisi.',
        ],
        'tgl_keluar'    => [
            'required' => 'tanggal wajib diisi.',
        ],
        'pengirim'    => [
            'required' => 'pengirim  wajib diisi.',
        ],
        'prihal'    => [
            'required' => 'perihal  wajib diisi.',
        ],
        'file'    => [
            'required' => 'file   wajib diisi.',
        ],
    ];
    public $ruang = [
        'id_ruang'     => 'required',
        'nama_ruang'     => 'required'
    ];

    public $ruang_errors = [
        'id_ruang' => [
            'required'    => 'Id wajib diisi.',
        ],
        'nama_ruang'    => [
            'required' => 'Nama wajib diisi.',
        ]
    ];
    public $mapel = [
        'id_mapel'     => 'required',
        'nama_mapel'     => 'required'
    ];

    public $mapel_errors = [
        'id_mapel' => [
            'required'    => 'Id wajib diisi.',
        ],
        'nama_mapel'    => [
            'required' => 'Nama wajib diisi.',
        ]
    ];
    public $file = [

        'file' => 'uploaded[file]|mime_in[file,jpg,image/jpeg,image/gif,image/png,image/pdf,application/pdf]|max_size[file,10000]',
    ];

    public $file_errors = [
        'file' => [
            'required'    => 'File wajib diupload.',
        ]
    ];
    public $user_tu = [
        'username'     => 'required',
        'password'     => 'required',
        'id_guru'     => 'required',
        'akses'     => 'required',
        'nama'     => 'required'
    ];

    public $user_tu_errors = [
        'username' => [
            'required'    => 'username wajib diisi.',
        ],
        'password'    => [
            'required' => 'password wajib diisi.',
        ],
        'id_guru'    => [
            'required' => 'id_guru  wajib diisi.',
        ],
        'akses'    => [
            'required' => 'akses wajib diisi.',
        ],
        'nama'    => [
            'required' => 'nama wajib diisi.',
        ],
    ];

    public $guru_dan_staf = [
        'id_guru'     => 'required',
        'nama_guru'     => 'required'
    ];

    public $guru_dan_staf_errors = [
        'id_guru' => [
            'required'    => 'id_guru wajib diisi.',
        ],
        'nama_guru'    => [
            'required' => 'nama_guru wajib diisi.',
        ],
    ];
    public $jadwal = [
        'id_mapel'     => 'required',
        'id_ruang'     => 'required',
        'id_guru'     => 'required',
        'hari'     => 'required',
        'jam_awal'     => 'required',
        'jam_akhir'     => 'required',
    ];

    public $jadwal_errors = [
        'id_mapel'    => [
            'required' => 'ID Mapel wajib diisi.',
        ],
        'id_ruang'    => [
            'required' => 'id ruang wajib diisi.',
        ],
        'id_guru'    => [
            'required' => 'id guru wajib diisi.',
        ],
        'hari'    => [
            'required' => 'hari wajib diisi.',
        ],
        'jam_awal'    => [
            'required' => 'jam awal wajib diisi.',
        ],
        'jam_akhir'    => [
            'required' => 'jam akhir  wajib diisi.',
        ],
    ];
    public $dispensasi = [
        'nis'     => 'required',
        'tanggal'     => 'required',
        'keterangan'     => 'required',
    ];

    public $dispensasi_errors = [

        'nis'    => [
            'required' => 'Nis wajib diisi.'
        ],
        'tanggal'    => [
            'required' => 'Tanggal wajib diisi.'
        ],
        'keterangan'    => [
            'required' => 'keterangan  wajib diisi.'
        ],
    ];

    public $konseling = [

        'nis'     => 'required',
        'tanggal'     => 'required',
    ];

    public $konseling_errors = [

        'nis'    => [
            'required' => 'NIS wajib diisi.'
        ],
        'tanggal'    => [
            'required' => 'Tanggal Konseling wajib diisi.'
        ],
    ];


    public $surat = [
        'no_surat'     => 'required',
        'hal'     => 'required',
        'nis'     => 'required',
        'hari'     => 'required',
        'tanggal'     => 'required',
        'waktu'     => 'required',
        'keperluan'     => 'required',
    ];

    public $surat_errors = [
        'no_surat' => [
            'required'    => 'no wajib diisi.',
        ],
        'hal'    => [
            'required' => 'hal wajib diisi.'
        ],
        'nis'    => [
            'required' => 'nis wajib diisi.'
        ],
        'hari'    => [
            'required' => 'hari  wajib diisi.'
        ],
        'tanggal'    => [
            'required' => 'tanggal  wajib diisi.'
        ],
        'waktu'    => [
            'required' => 'waktu  wajib diisi.'
        ],
        'keperluan'    => [
            'required' => 'keperluan  wajib diisi.'
        ],
    ];

    public $pelanggaran = [

        'tanggal'     => 'required',
        'nis'     => 'required',
        'jenis'     => 'required',
        'poin'     => 'required',


    ];

    public $pelanggaran_errors = [

        'tanggal'    => [
            'required' => 'tanggal wajib diisi.'
        ],
        'nis'    => [
            'required' => 'nis wajib diisi.'
        ],
        'jenis'    => [
            'required' => 'jenis  wajib diisi.'
        ],
        'poin'    => [
            'required' => 'poin  wajib diisi.'
        ],
    ];
    public $kurikulum = [
        'id_kurikulum'     => 'required'
    ];

    public $kurikulum_errors = [
        'id_kurikulum' => [
            'required'    => 'ID Kurikulum wajib diisi.',
        ],

    ];

    public $kelola_ujian = [
        'id_guru'     => 'required',
        'id_mapel'     => 'required',
        'id_ruang'     => 'required',

        'tanggal'     => 'required',
        'jam_masuk'     => 'required',
        'jam_keluar'     => 'required',
    ];

    public $kelola_ujian_errors = [
        'id_guru' => [
            'required'    => 'ID Guru wajib diisi.',
        ],
        'id_mapel' => [
            'required'    => 'ID Mata Pelajaran wajib diisi.',
        ],
        'id_ruang' => [
            'required'    => 'ID Ruang wajib diisi.',
        ],

        'tanggal'    => [
            'required' => 'Tanggal wajib diisi.'
        ],
        'jam_masuk'    => [
            'required' => 'Jam Masuk wajib diisi.'
        ],
        'jam_keluar'    => [
            'required' => 'Jam Keluar wajib diisi.'
        ],
    ];

    public $kalender = [
        'tanggal'     => 'required',
        'keterangan'     => 'required',
    ];

    public $kalender_errors = [
        'tanggal'    => [
            'required' => 'Tanggal wajib diisi.'
        ],
        'keterangan'    => [
            'required' => 'keterangan  wajib diisi.'
        ],
    ];
}
