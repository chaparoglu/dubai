<?php

namespace App\Exports;

use App\Models\Subsripe;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\FromCollection;

class ExportSubsripe implements FromCollection 
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Subsripe::select('email')->get();
    }
    
}
