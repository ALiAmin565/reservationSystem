<?php
namespace App\Http\Controllers;

use App\Models\NewRequest;
use App\Models\UserDetail;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;

class NewRequestController extends Controller
{
    public function printPDF($id)
    {
        $newRequest = UserDetail::findOrFail($id);
        $pdf = Pdf::loadView('pdf.new-request-details', compact('newRequest'));
        return $pdf->download('new-request-details.pdf');
    }
}
