<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class ExamController extends Controller
{
    public function pdf($id)
    {
        $data = [
            "logo" => public_path('imgs/logo.png'),
            "ref_number" => $id
        ];
        Log::info(json_encode($data));
        $pdf = \Barryvdh\DomPDF\Facade\Pdf::loadView('exam_paper_pdf', $data);

        return $pdf->download($id.'_exam_paper.pdf');
    }
}
