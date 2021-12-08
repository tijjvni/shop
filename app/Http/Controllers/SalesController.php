<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Livewire\Sales;

class SalesController extends Controller
{
    //
    public function index(){
        return view('sales');
    }
}
