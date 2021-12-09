<?php

namespace App\Http\Livewire\Products;

use Livewire\Component;

use App\Models\Product;

class Lists extends Component
{
    public function render()
    {
        $products = Product::all();

        return view('livewire.products.lists',[
            'products' => $products
        ]);
    }
}
