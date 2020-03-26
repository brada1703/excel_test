<?php

namespace App\Http\Controllers;

use App\Customer;
use App\Exports\CustomersExport;
use App\Exports\CustomersExportFormat;
use App\Exports\CustomersExportView;
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

    public function export_view()
    {
        return Excel::download(new CustomersExportView(), 'customers.xlsx');
    }

    public function export_format($format)
    {
        $extension = strtolower($format);
        if (in_array($format, ['Mpdf','Dompdf','Tcpdf'])) {
            $extension = 'pdf';
        }
        return Excel::download(new CustomersExport(), 'customers.'.$extension, $format);
    }
}
