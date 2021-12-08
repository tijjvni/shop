<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Livewire\Sales;

use App\Models\Sale;

class SalesController extends Controller
{
    //
    public function index(){
        return view('sales');
    }

    public function view($sale){
        dd($sale);
    }
}
