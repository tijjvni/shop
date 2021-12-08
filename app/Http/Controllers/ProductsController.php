<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Livewire\Products;

class ProductsController extends Controller
{
    //
    public function index(){
        return view('products');
    }
}