<?php

namespace App\Models;

use CodeIgniter\Model;

class InsuranceCompanyModel extends Model
{
    protected $table = 'insurance_companies';
    protected $primaryKey = 'id';
    protected $allowedFields = ['name'];

 
}
