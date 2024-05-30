<?php

namespace App\Http\Controllers;

use App\Models\Service;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Http\Request;
use App\Models\ServiceManReservation;

class ServiceController extends Controller
{
    public function printPDF($id)
    {
        $service = ServiceManReservation::find($id);
        $pdf = Pdf::loadView('pdf.service-details', compact('service'));
        return $pdf->download('service-details.pdf');
    }
}
