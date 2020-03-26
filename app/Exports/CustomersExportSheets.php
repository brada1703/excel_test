<?php

namespace App\Exports;

use Maatwebsite\Excel\Concerns\Exportable;
use Maatwebsite\Excel\Concerns\WithMultipleSheets;

class CustomersExportSheets implements WithMultipleSheets
{
    use Exportable;

    /**
     * @return array
     */
    public function sheets(): array
    {
        $sheets = [];
        $organisations = ['example.net', 'example.com', 'example.org'];
        foreach ($organisations as $organisation) {
            $sheets[] = new CustomersOrganisationSheet($organisation);
        }

        return $sheets;
    }
}
