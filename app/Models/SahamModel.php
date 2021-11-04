<?php

namespace App\Models;

use CodeIgniter\Model;

class SahamModel extends Model
{
    protected $table                = 'saham';
    protected $primaryKey           = 'id_saham';
    protected $returnType           = 'object';
    protected $allowedFields        = ['kode_saham', 'kategori', 'nama_perusahaan', 'sektor_perusahaan'];

    // protected $useAutoIncrement     = true;
    // protected $insertID             = 0;
    // protected $DBGroup              = 'default';
    // protected $useSoftDeletes       = false;
    // protected $protectFields        = true;
    // Dates
    // protected $useTimestamps        = false;
    // protected $dateFormat           = 'datetime';
    // protected $createdField         = 'created_at';
    // protected $updatedField         = 'updated_at';
    // protected $deletedField         = 'deleted_at';

    // Validation
    // protected $validationRules      = [];
    // protected $validationMessages   = [];
    // protected $skipValidation       = false;
    // protected $cleanValidationRules = true;

    // // Callbacks
    // protected $allowCallbacks       = true;
    // protected $beforeInsert         = [];
    // protected $afterInsert          = [];
    // protected $beforeUpdate         = [];
    // protected $afterUpdate          = [];
    // protected $beforeFind           = [];
    // protected $afterFind            = [];
    // protected $beforeDelete         = [];
    // protected $afterDelete          = [];
}
