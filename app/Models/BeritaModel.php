<?php

namespace App\Models;

use CodeIgniter\Model;

class BeritaModel extends Model
{
    protected $table = 'berita';
    protected $primaryKey = 'id';
    protected $allowedFields = ['judul', 'isi', 'gambar', 'tanggal'];
    protected $useTimestamps = true;
    protected $createdField = 'tanggal';
    protected $updatedField = '';
}
