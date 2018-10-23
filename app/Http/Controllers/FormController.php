<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PDF;

class FormController extends Controller
{

	public function form() {
		return view('print');
	}

    public function print() {
    	$pdf = PDF::loadView('print');
    	return $pdf->download('Form UP-SA.pdf');
    	 set_time_limit(12000);
    }

    public function test() {
    	return view('test');
    }

    public function testPrint() {
    	$pdf = PDF::loadView('test');
    	return $pdf->download('test.pdf');
    }
}
