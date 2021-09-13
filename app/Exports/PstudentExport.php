<?php

namespace App\Exports;

use App\Models\Admission;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
class PstudentExport implements FromCollection, WithHeadings
{
    /**
    * @return \Illuminate\Support\Collection
    */
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
    
        return collect(Admission::getPAdmission());
        //return Admission::all();
    }
}
