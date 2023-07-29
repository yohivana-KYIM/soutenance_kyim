<?php

namespace App\Http\Controllers;
use App\Http\Controllers\PDFController;
use App\Http\Livewire\Pointages;
use Illuminate\Http\Request;
use App\Models\pointage;
use PDF;
class PDFController extends Controller
{
	
    public function index()
{
	
         $pointages = pointage::all();
		 
       

    $pdf = PDF::loadView('testPDF',compact('pointages'));
    return $pdf->download('pointage.pdf');
	
}
}
