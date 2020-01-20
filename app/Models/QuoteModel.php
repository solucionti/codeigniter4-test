<?php

namespace App\Models;

use CodeIgniter\Model;

class QuoteModel extends Model
{
    protected $table = 'quote';
    protected $primaryKey = 'id';

    protected $returnType = 'array';
    protected $useSoftDeletes = true;

    protected $allowedFields = ['name', 'phone', 'mail', 'version_name', 'version_id'];

    protected $useTimestamps = false;
    protected $createdField = 'created_at';
    protected $updatedField = 'updated_at';
    protected $deletedField = 'deleted_at';

    protected $validationRules = [
        'name' => 'required|alpha_numeric_space|min_length[5]',
        'phone' => 'required',
        'mail' => 'required|valid_email',
        'version_id' => 'required'
    ];
    protected $validationMessages = [];
    protected $skipValidation = false;
}