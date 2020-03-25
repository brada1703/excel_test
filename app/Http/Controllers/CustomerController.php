<?php

namespace App\Http\Controllers;

use App\Customer;
use App\Exports\CustomersExport;
use Maatwebsite\Excel\Facades\Excel;

class CustomerController extends Controller
{
    public function index()
    {
        $customers = Customer::all();
        return view('customers.index', compact('customers'));
    }

    public function export()
    {
        return Excel::download(new CustomersExport(), 'customers.xlsx');
    }
}
