<?php

namespace App\Http\Livewire\Dashboard;

use Livewire\Component;

use App\Models\Sale;
use App\Models\Product;

class Stats extends Component
{
    public function render()
    {
        $products = Product::get()->count();
        $sales = Sale::sum('amount');
        $stock = Product::where('msl','>','qty')->get()->count(); 

        return view('livewire.dashboard.stats',[
            'products' => $products,
            'sales' => $sales, 
            'stock' => $stock
        ]);
    }
}
