<?php

namespace App\Controllers;
use App\Models\InsuranceCompanyModel;
use App\Models\CarModel;

class InsuranceController extends BaseController
{
    // public function index()
    // {
    //     return view('welcome_message');
    // }
    // public function about()
    // {
    //     return view('about'); 
    // }
  

    public function index()
{
   

    // Load the InsuranceCompanyModel
    $insuranceCompanyModel = new InsuranceCompanyModel();

    // Fetch the list of insurance companies from the database
    $data['companies'] = $insuranceCompanyModel->findAll();

    // Pass the data to the view
    return view('insurance/home', $data);
}

public function carModels($companyId)
{
    // Load the CarModel
    $carModel = new CarModel();

    // Fetch the list of car models for the selected insurance company from the database
    $data['carModels'] = $carModel->where('company_id', $companyId)->findAll();

    // Pass the data to the view
    return view('insurance/car_models', $data);
}

public function insuranceAmount($carModelId)
{
    // Load the CarModel
    $carModel = new CarModel();

    // Fetch the car model details from the database
    $data['carModel'] = $carModel->find($carModelId);

    // Pass the data to the view
    return view('insurance/insurance_amount', $data);
}

 











   
}

log_message('error', 'Custom error message');
