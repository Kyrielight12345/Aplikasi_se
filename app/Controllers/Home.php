<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index_admin()
    {
        return view('admin_view/dashboard');
    }
    public function index_guru()
    {
        return view('guru_view/dashboard');
    }
    public function index_kepsek()
    {
        return view('kepsek_view/dashboard');
    }
    public function index_kurikulum()
    {
        return view('kurikulum_view/dashboard');
    }
    public function index_bk()
    {
        return view('bk_view/dashboard');
    }
}
