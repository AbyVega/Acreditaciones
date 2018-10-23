<?php

namespace App\Exports;

use App\PeModel;
use Maatwebsite\Excel\Concerns\FromCollection;

class ReportePeExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return PeModel::all();
    }
}
