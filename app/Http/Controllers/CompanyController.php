<?php

namespace App\Http\Controllers;

use App\Company;
use Illuminate\Http\Request;

class CompanyController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $companies = Company::with('customers')->get();
        
        return view('companies.index', compact('companies'));
    }

    public function show(Company $company)
    {
        return view('companies.show', compact('company'));
    }
}
