<?php

namespace App\Http\Livewire\Products;

use Livewire\Component;

use App\Models\Category;

class CategoriesCreate extends Component
{

    public $name;

    public function mount(){

    }

    public function createCategory(){
		$this->validate([
	        'name' => 'required|min:3',
	    ]);

        $category = new Product;
        $category->name = $this->name;

        $category->save();

        request()->session()->flash('banner', 'Category added successfully.');        
        return redirect()->to(url()->full());        
    }

    public function render()
    {
        return view('livewire.products.categories-create');
    }
}
