<?php

namespace App\Http\Controllers;

use App\Exports\SliderExport;
use App\Models\slider;
use Maatwebsite\Excel\Facades\Excel;
use PDF;

class ExportData extends Controller
{

    public function ExportSlider()
    {
        return Excel::download(new SliderExport, 'sliderdata.xlsx');
    }
}
