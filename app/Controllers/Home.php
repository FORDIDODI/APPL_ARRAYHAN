<?php

namespace App\Controllers;

use App\Models\AdminModel;
use App\Models\BeritaModel;
use App\Models\GambarModel;
use App\Models\MediaModel;

class Home extends BaseController
{
    public function index(): string
    {
        return view('home', ['title' => 'RA AR RAYHAN']);
    }

    public function cari()
    {
        return view('search', ['title' => 'Hasil Pencarian']);
    }

    public function maintenance()
    {
        return view('maintenance');
    }

    public function tentang()
    {
        return view('tentang', ['title' => 'Tentang']);
    }

    public function search()
    {
        $query = $this->request->getGet('q');
        $beritaModel = new BeritaModel();

        $results = [];

        if ($query) {
            $results = $beritaModel
                ->like('judul', $query)
                ->orLike('kategori', $query)
                ->select('id, judul, kategori')
                ->findAll(10);
        }

        return $this->response->setJSON($results);
    }

    public function berita()
    {
        $beritaModel = new BeritaModel();
        $berita = $beritaModel->findAll();

        return view('berita', [
            'title' => 'Berita',
            'berita' => $berita
        ]);
    }

    public function mediaInformasi()
    {
        return view('media-informasi', ['title' => 'Media Informasi']);
    }

    public function galeri()
    {
        return view('galeri', ['title' => 'Galeri']);
    }

    public function kontak()
    {
        return view('kontak', ['title' => 'Kontak']);
    }

    // ===== Login & Dashboard =====
    public function login()
    {
        return view('login', ['title' => 'Login']);
    }

    public function process()
    {
        $username = $this->request->getPost('username');
        $password = $this->request->getPost('password');

        $adminModel = new AdminModel();
        $admin = $adminModel->where('username', $username)->first();

        if (!$admin || $admin['password'] !== $password) {
            return redirect()->back()->with('error', 'Username atau password salah');
        }

        session()->set('isLoggedIn', true);
        session()->set('username', $username);

        return redirect()->to('/dashboard');
    }

    public function dashboard()
    {
        if (!session()->get('isLoggedIn')) {
            return redirect()->to('/login')->with('error', 'Silakan login terlebih dahulu');
        }

        $beritaModel = new BeritaModel();
        $gambarModel = new GambarModel();
        $adminModel = new AdminModel();
        $username = session()->get('username');

        $totalBerita = $beritaModel->countAll();
        $totalGambar = $gambarModel->countAll();

        return view('dashboard', [
            'title' => 'Dashboard Admin',
            'username' => $username,
            'totalBerita' => $totalBerita,
            'totalMedia' => $totalGambar,
        ]);
    }

    public function logout()
    {
        session()->destroy();
        return redirect()->to('/login')->with('success', 'Anda telah logout');
    }
}
