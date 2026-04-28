<?php

namespace App\Controllers;

class Kelulusan extends BaseController
{
    public function index()
    {
        return view('kelulusan');
    }

    public function prosesCek()
    {
        $nisnInput = $this->request->getPost('nisn_input');
        
        $db = \Config\Database::connect();
        
        $query = $db->table('siswa')->where('nisn', $nisnInput)->get();
        $dataSiswa = $query->getRowArray();

        if ($dataSiswa) {
            return view('hasil_kelulusan', ['siswa' => $dataSiswa]);
        } else {
            return redirect()->back()->with('error', 'Maaf, NISN ' . $nisnInput . ' tidak terdaftar.');
        }
    }
}