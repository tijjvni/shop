<?php

namespace App\Http\Livewire\Products;

use Livewire\Component;

use App\Models\Category;

class CategoriesLists extends Component
{
    public function render()
    {
        $categories = Category::with('products')->all();

        return view('livewire.products.categories-lists',[
            'categories' => $categories 
        ]);
    }
}
