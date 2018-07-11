<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PDF;

class MainController extends Controller
{
    public function index()
    {
        $data = [
            'nama' => [
                'Andika Ahmad R.',
                'Angga Pradipta K.P.',
                'Fandi',
                'Fauzi',
                'Suami Dari Bu Entin'
            ],
            'img' => 'uploads/img/sertifikat.png'
        ];

        PDF::setOptions(['dpi' => 150, 'defaultFont' => 'sans-serif']);
        $pdf = PDF::loadView('print', $data)->setPaper('a4', 'potrait');
        return $pdf->stream('print.pdf');
    }
}
