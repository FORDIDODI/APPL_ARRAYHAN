<?php

namespace App\Controllers;

use App\Models\BeritaModel;

class BeritaController extends BaseController
{
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
        return view('tambah-edit-berita', [
            'title' => 'Tambah Berita',
            'berita' => null
        ]);
    }

    public function simpanBerita()
    {
        $beritaModel = new BeritaModel();
        $gambar = $this->request->getFile('gambar');
        $gambarName = '';

        if ($gambar && $gambar->isValid() && !$gambar->hasMoved()) {
            $gambarName = $gambar->getRandomName();
            $gambar->move('uploads', $gambarName);
        }

        $beritaModel->save([
            'judul' => $this->request->getPost('judul'),
            'isi' => $this->request->getPost('isi'),
            'tanggal' => date('Y-m-d'),
            'gambar' => $gambarName
        ]);

        session()->setFlashdata('success', 'Berita berhasil disimpan.');
        return redirect()->to('/kelola-berita');
    }

    public function editBerita($id)
    {
        $beritaModel = new BeritaModel();
        $berita = $beritaModel->find($id);

        return view('tambah-edit-berita', [
            'title' => 'Edit Berita',
            'berita' => $berita
        ]);
    }

    public function updateBerita($id)
    {
        $beritaModel = new BeritaModel();
        $beritaLama = $beritaModel->find($id);
        $gambar = $this->request->getFile('gambar');

        $data = [
            'judul' => $this->request->getPost('judul'),
            'isi' => $this->request->getPost('isi'),
            'tanggal' => date('Y-m-d'),
        ];

        if ($gambar && $gambar->isValid() && !$gambar->hasMoved()) {
            $gambarName = $gambar->getRandomName();
            $gambar->move('uploads', $gambarName);
            $data['gambar'] = $gambarName;

            if ($beritaLama['gambar'] && file_exists('uploads/' . $beritaLama['gambar'])) {
                unlink('uploads/' . $beritaLama['gambar']);
            }
        }

        $beritaModel->update($id, $data);
        session()->setFlashdata('success', 'Berita berhasil diperbarui.');
        return redirect()->to('/kelola-berita');
    }

    public function hapusBerita($id)
    {
        $beritaModel = new BeritaModel();
        $berita = $beritaModel->find($id);

        if ($berita && $berita['gambar'] && file_exists('uploads/' . $berita['gambar'])) {
            unlink('uploads/' . $berita['gambar']);
        }

        $beritaModel->delete($id);
        session()->setFlashdata('success', 'Berita berhasil dihapus.');
        return redirect()->to('/kelola-berita');
    }
}
