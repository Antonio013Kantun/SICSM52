<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Student;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;

class StudentReportsController extends Controller
{
    public function show_cardex($id){
        //OBTENER LOS DATOS DEL MODELO
        $student=Student::find($id);
        $data=[
            'title'=> 'Reporte de estudiantes',
            'details'=>$student
        ];
        // dd($student);
        $pdf = App::make('dompdf.wrapper');
        $pdf ->loadView('reports.cardex', $data);
        return $pdf->stream();
    }
}
