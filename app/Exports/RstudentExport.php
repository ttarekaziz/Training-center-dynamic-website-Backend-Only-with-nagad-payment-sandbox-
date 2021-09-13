<?php

namespace App\Exports;

use App\Models\Admission;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class RstudentExport implements FromCollection, WithHeadings
{
    
    public function headings():array{
        return[
            "ID", "Name", "Phone", "Email", "Present Address", "Course Name", "Batch Id"
        ];
    }
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
    
        return collect(Admission::getRAdmission());
        //return Admission::all();
    }
}
