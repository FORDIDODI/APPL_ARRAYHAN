<?php

namespace App\Controllers;

use App\Models\BeritaModel;
use App\Models\MediaModel;
use App\Models\UserModel;

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
                ->select('id, judul, kategori') // kalau kamu punya slug, tambahkan juga
                ->findAll(10); // maksimal 10 hasil
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

    public function kelolaBerita()
    {
        $beritaModel = new BeritaModel();
        $search = $this->request->getGet('search');
        $berita = $search ? $beritaModel->like('judul', $search)->findAll() : $beritaModel->findAll();

        return view('kelola-berita', [
            'title' => 'Kelola Berita',
            'berita' => $berita
        ]);
    }

    public function tambahBerita()
    {
        return view('tambah-edit-berita', ['title' => 'Tambah Berita']);
    }

    public function simpanBerita()
    {
        $beritaModel = new BeritaModel();
        $gambar = $this->request->getFile('gambar');

        if ($gambar->isValid() && !$gambar->hasMoved()) {
            $gambarName = $gambar->getRandomName();
            $gambar->move('uploads', $gambarName);

            $beritaModel->save([
                'judul' => $this->request->getPost('judul'),
                'isi' => $this->request->getPost('isi'),
                'tanggal' => $this->request->getPost('tanggal'),
                'gambar' => $gambarName
            ]);
        }

        return redirect()->to('/kelola-berita');
    }

    public function editBerita($id)
    {
        $beritaModel = new BeritaModel();
        $berita = $beritaModel->find($id);

        return view('edit-berita', [
            'title' => 'Edit Berita',
            'berita' => $berita
        ]);
    }

    public function updateBerita($id)
    {
        $beritaModel = new BeritaModel();
        $data = $beritaModel->find($id);
        $gambar = $this->request->getFile('gambar');
        $gambarName = $data['gambar'];

        if ($gambar->isValid() && !$gambar->hasMoved()) {
            if (file_exists('uploads/' . $gambarName)) {
                unlink('uploads/' . $gambarName);
            }
            $gambarName = $gambar->getRandomName();
            $gambar->move('uploads', $gambarName);
        }

        $beritaModel->update($id, [
            'judul' => $this->request->getPost('judul'),
            'isi' => $this->request->getPost('isi'),
            'tanggal' => $this->request->getPost('tanggal'),
            'gambar' => $gambarName
        ]);

        return redirect()->to('/kelola-berita');
    }

    public function hapusBerita($id)
    {
        $beritaModel = new BeritaModel();
        $data = $beritaModel->find($id);

        if ($data && file_exists('uploads/' . $data['gambar'])) {
            unlink('uploads/' . $data['gambar']);
        }

        $beritaModel->delete($id);
        return redirect()->to('/kelola-berita');
    }

    public function kelolaMedia()
    {
        $mediaModel = new MediaModel();
        $media = $mediaModel->paginate(10, 'media');

        return view('kelola-media', [
            'title' => 'Kelola Media',
            'media' => $media,
            'pager' => $mediaModel->pager
        ]);
    }

    public function unggahMediaView()
    {
        return view('media-unggah', ['title' => 'Unggah Media']);
    }

    public function unggahMedia()
    {
        $mediaModel = new MediaModel();
        $file = $this->request->getFile('media');

        if ($file->isValid() && !$file->hasMoved()) {
            $newName = $file->getRandomName();
            $file->move('uploads/media', $newName);

            $mediaModel->save([
                'filename' => $file->getClientName(),
                'file_type' => $file->getMimeType(),
                'file_size' => $file->getSize(),
                'file_path' => 'uploads/media/' . $newName
            ]);

            return redirect()->to('/kelola-media')->with('success', 'Media berhasil diunggah.');
        }

        return redirect()->to('/kelola-media')->with('error', 'Gagal mengunggah media.');
    }

    public function hapusMedia($id)
    {
        $mediaModel = new MediaModel();
        $media = $mediaModel->find($id);

        if ($media && file_exists($media['file_path'])) {
            unlink($media['file_path']);
        }

        $mediaModel->delete($id);
        return redirect()->to('/kelola-media');
    }

    public function login()
    {
        return view('login', ['title' => 'Login']);
    }

    public function process()
    {
        $username = $this->request->getPost('username');
        $password = $this->request->getPost('password');

        $userModel = new UserModel();
        $user = $userModel->where('username', $username)->first();

        if (!$user || $user['password'] !== $password) {
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
        $mediaModel = new MediaModel();

        $totalBerita = $beritaModel->countAll();
        $totalMedia = $mediaModel->countAll();

        return view('dashboard', [
            'title' => 'Dashboard Admin',
            'totalBerita' => $totalBerita,
            'totalMedia' => $totalMedia
        ]);
    }

    public function logout()
    {
        session()->destroy();
        return redirect()->to('/login')->with('success', 'Anda telah logout');
    }
}
