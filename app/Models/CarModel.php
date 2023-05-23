<?php

namespace App\Models;

use CodeIgniter\Model;

class CarModel extends Model
{
    protected $table = 'car_models';
    protected $primaryKey = 'id';
    protected $allowedFields = ['name', 'company_name', 'insurance_amount'];

  
}
