<?php

namespace App\Exports;

use App\Models\slider;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithMapping;

class SliderExport implements FromCollection, WithHeadings, WithMapping
{
    public function collection()
    {
        return slider::select('*')->get();
    }

    public function map($slider):array
    {
        return[
            $slider->id,
            $slider->content,
            $slider->heading,
            $slider->image,
            $slider->updated_at,
            $slider->created_at
        ];
    }

    public function headings():array{
        return[
            '#',
            'heading',
            'content',
            'image',
            'updated_at',
            'created_at'
        ];
    }
}

