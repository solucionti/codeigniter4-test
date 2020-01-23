<?php

namespace App\Models;

use CodeIgniter\Database\ConnectionInterface;
use CodeIgniter\Model;

class TaxonomyModel extends Model
{

    protected $table = 'taxonomy';
    protected $primaryKey = 'id';

    protected $returnType = 'array';
    protected $useSoftDeletes = false;

    protected $allowedFields = ['name'];
    protected $useTimestamps = false;
    protected $createdField = 'created_at';
    protected $updatedField = 'updated_at';
    protected $deletedField = 'deleted_at';

    protected $validationRules = [];
    protected $validationMessages = [];
    protected $skipValidation = false;


    public function getAllTaxonomiesByIdOptions($id)
    {
        $results = $this->where('vocabulary_id', $id)->findAll();
        $_options = [];
        foreach ($results as $result) {
            $_options[$result['id']] = $result['name'];
        }
        return $_options;
    }
}