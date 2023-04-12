<?php

namespace App\Exports;

use App\Models\Schedule;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\FromCollection;

class SchedulesExport implements FromCollection,WithHeadings
{
    /**
    * @return \Illuminate\Support\Collection
    */

    public function headings(): array{
        return[
            'serialday',
            'numericdate',
            'monthday',
            'rtime',
            'rtitle',
            'rsubtitle',
            'ptime',
            'ptitle',
            'psubtitle',
            'qtime',
            'qtitle',
            'qsubtitle',
            'ltime',
            'ltitle',
            'lsubtitle',
            'retime',
            'retitle',
            'resubtitle',


        ];
    }

     public function collection()
    {
        return Schedule::select(
        'serialday',
        'numericdate',
        'monthday',
        'rtime',
        'rtitle',
        'rsubtitle',
        'ptime',
        'ptitle',
        'psubtitle',
        'qtime',
        'qtitle',
        'qsubtitle',
        'ltime',
        'ltitle',
        'lsubtitle',
        'retime',
        'retitle',
        'resubtitle')->get();

    }
}
