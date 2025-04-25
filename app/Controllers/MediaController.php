<?php

namespace App\Controllers;

use App\Models\MediaModel;
use CodeIgniter\Controller;

class MediaController extends BaseController
{
    public function index()
    {
        $mediaModel = new MediaModel();

        $media = $mediaModel->paginate(10, 'media');
        $pager = $mediaModel->pager;

        return view('kelola-media', [
            'title' => 'Kelola Media',
            'media' => $media,
            'pager' => $pager
        ]);
    }

    public function unggahForm()
    {
        return view('media-unggah', ['title' => 'Unggah Media']);
    }

    public function unggah()
    {
        $mediaModel = new MediaModel();
        $file = $this->request->getFile('media');

        if ($file->isValid() && !$file->hasMoved()) {
            $fileName = $file->getRandomName();
            $file->move('uploads/media', $fileName);

            $mediaModel->save([
                'filename' => $fileName,
                'file_type' => $file->getClientMimeType(),
                'file_size' => $file->getSize(),
                'file_path' => 'uploads/media/' . $fileName
            ]);

            return redirect()->to('/kelola-media')->with('success', 'Media berhasil diunggah!');
        }

        return redirect()->back()->with('error', 'Gagal mengunggah media!');
    }

    public function hapus($id)
    {
        $mediaModel = new MediaModel();
        $media = $mediaModel->find($id);

        if ($media) {
            $path = $media['file_path'];
            if (file_exists($path)) {
                unlink($path);
            }
            $mediaModel->delete($id);
            return redirect()->to('/kelola-media')->with('success', 'Media berhasil dihapus!');
        }

        return redirect()->to('/kelola-media')->with('error', 'Media tidak ditemukan!');
    }
}
