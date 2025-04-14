<?php

namespace App\Models;

use CodeIgniter\Model;

class MediaModel extends Model
{
    protected $table            = 'media';
    protected $primaryKey       = 'id';
    protected $allowedFields    = ['filename', 'file_type', 'file_size', 'file_path'];
    protected $useTimestamps    = true;
}
