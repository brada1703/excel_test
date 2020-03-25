<?php

namespace App\Exports;

use App\Customer;
use Maatwebsite\Excel\Concerns\FromCollection;

class CustomersExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        // All of these work. They are just examples. :)

        // return Customer::all();
        // return Customer::where('email', 'like', '%example.org')->get();
        // return Customer::select(['first_name', 'last_name', 'email'])->where('email', 'like', '%example.org')->get();
        return Customer::select(['first_name', 'last_name', 'email'])
            ->where('email', 'like', '%example.org')
            ->orderBy('last_name')
            ->orderBy('first_name')
            ->get();
    }
}
