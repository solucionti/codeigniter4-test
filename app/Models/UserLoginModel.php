<?php

namespace App\Models;

use CodeIgniter\Model;

class UserLoginModel extends Model
{

    protected $table = 'user';
    protected $primaryKey = 'id';

    protected $returnType = 'array';
    protected $useSoftDeletes = false;

    protected $allowedFields = [];

    protected $useTimestamps = false;
    protected $createdField = 'created_at';
    protected $updatedField = 'updated_at';
    protected $deletedField = 'deleted_at';

    protected $validationRules = [
        'name' => 'required|min_length[5]',
        'phone' => 'required',
        'mail' => 'required|valid_email',
        'version_id' => 'required'
    ];
    protected $validationMessages = [];
    protected $skipValidation = false;

    public function userLogin()
    {

    }
}